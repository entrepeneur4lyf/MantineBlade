<?php

namespace MantineBlade\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Process;
use Illuminate\Support\Str;
use RuntimeException;
use function Laravel\Prompts\select;

class MantineInstallCommand extends Command
{
    protected $signature = 'mantine-blade:install';

    protected $description = 'Install Mantine UI components for Laravel Livewire';

    protected $ds = DIRECTORY_SEPARATOR;

    public function handle()
    {
        $this->info("🚀 Mantine Blade Installer\n");

        // Get package manager preference
        $packageManagerCommand = $this->askForPackageInstaller();

        // Install PHP dependencies
        $this->installPhpDependencies();

        // Setup React and Mantine
        $this->setupReactMantine($packageManagerCommand);

        // Copy stubs and example components
        $this->copyStubs();

        // Setup configuration
        $this->publishConfig();

        // Clear view cache
        Artisan::call('view:clear');

        $this->info("\n✅ Installation complete!");
        $this->info("\nRun `{$this->getDevCommand($packageManagerCommand)}` to start development server");
    }

    protected function installPhpDependencies()
    {
        $this->info("\nInstalling PHP dependencies...");

        Process::run("composer require ijpatricio/mingle", function (string $type, string $output) {
            echo $output;
        })->throw();
    }

    protected function setupReactMantine(string $packageManagerCommand)
    {
        $this->info("\nInstalling React and Mantine...");
        // Install React and Mantine dependencies
        $dependencies = [
            "@mantine/core",
            "@mantine/hooks",
            "@mantine/form",
            "@mantine/dates",
            "dayjs",
            "@mantine/charts",
            "recharts@2",
            "@mantine/notifications",
            "@mantine/code-highlight",
            "@mantine/dropzone",
            "@mantine/carousel",
            "embla-carousel-react@^7.1.0",
            "@mantine/spotlight",
            "@mantine/modals",
            "@mantine/nprogress",
            "react",
            "react-dom",
            "@mingle/mingleReact",
            "axios"
        ];

        $devDependencies = [
            "@vitejs/plugin-react",
            "@types/react",
            "@types/react-dom",
            "typescript",
            "postcss",
            "postcss-preset-mantine",
            "postcss-simple-vars",
            "autoprefixer"
        ];

        // Install production dependencies
        Process::run("$packageManagerCommand " . implode(" ", $dependencies), function (string $type, string $output) {
            echo $output;
        })->throw();

        // Install dev dependencies
        $devCommand = str_contains($packageManagerCommand, '-D') 
            ? $packageManagerCommand 
            : "$packageManagerCommand --save-dev";
            
        Process::run("$devCommand " . implode(" ", $devDependencies), function (string $type, string $output) {
            echo $output;
        })->throw();

        // Setup Vite config
        $this->setupViteConfig();
    }

    protected function setupViteConfig()
    {
        $viteConfigPath = base_path('vite.config.js');
        $stub = File::get(__DIR__ . '/../../../stubs/vite.config.js');

        if (!File::exists($viteConfigPath)) {
            File::put($viteConfigPath, $stub);
        } else {
            // Modify existing config to include React plugin and Mingle alias
            $config = File::get($viteConfigPath);
            if (!str_contains($config, '@vitejs/plugin-react')) {
                // Add React plugin to existing config
                $config = str_replace(
                    'export default defineConfig({',
                    "import react from '@vitejs/plugin-react';\n\nexport default defineConfig({",
                    $config
                );
                $config = str_replace(
                    'plugins: [',
                    "plugins: [\n\t\treact(),",
                    $config
                );

                // Add Mingle alias
                $config = str_replace(
                    'export default defineConfig({',
                    "import path from 'path';\n\nexport default defineConfig({",
                    $config
                );
                $config = str_replace(
                    'export default defineConfig({',
                    "export default defineConfig({\n\tresolve: {\n\t\talias: {\n\t\t\t\"@mingle\": path.resolve(__dirname, \"/vendor/ijpatricio/mingle/resources/js\"),\n\t\t},\n\t},",
                    $config
                );

                File::put($viteConfigPath, $config);
            }
        }
    }

    protected function publishConfig()
    {
        $this->info("\nPublishing configuration...");
        
        Artisan::call('vendor:publish', [
            '--tag' => 'mantine.config'
        ]);
    }

    protected function copyStubs()
    {
        $this->info("\nCopying components and stubs...");

        // Create necessary directories
        $jsPath = resource_path('js');
        if (!File::exists($jsPath)) {
            File::makeDirectory($jsPath, 0755, true);
        }

        // Copy JS files
        File::copy(__DIR__ . '/../../../stubs/js/app.js', resource_path('js/app.js'));
        File::copy(__DIR__ . '/../../../stubs/js/bootstrap.js', resource_path('js/bootstrap.js'));

        // Copy React components
        $componentsPath = resource_path('js/Components');
        if (!File::exists($componentsPath)) {
            File::makeDirectory($componentsPath, 0755, true);
        }

        $stubsPath = __DIR__ . '/../../../stubs/js/Components';
        if (File::exists($stubsPath)) {
            File::copyDirectory($stubsPath, $componentsPath);
        }

        // Publish views
        Artisan::call('vendor:publish', [
            '--tag' => 'mantine.views'
        ]);

        // Create postcss.config.js if it doesn't exist
        $postcssConfig = base_path('postcss.config.js');
        if (!File::exists($postcssConfig)) {
            File::put($postcssConfig, $this->getPostCssConfig());
        }
    }

    protected function getPostCssConfig(): string
    {
        return <<<'JS'
module.exports = {
    plugins: {
        'postcss-preset-mantine': {},
        'postcss-simple-vars': {
            variables: {
                'mantine-breakpoint-xs': '36em',
                'mantine-breakpoint-sm': '48em',
                'mantine-breakpoint-md': '62em',
                'mantine-breakpoint-lg': '75em',
                'mantine-breakpoint-xl': '88em',
            },
        },
    },
};
JS;
    }

    protected function askForPackageInstaller(): string
    {
        $os = PHP_OS;
        $findCommand = stripos($os, 'WIN') === 0 ? 'where' : 'which';

        $yarn = Process::run($findCommand . ' yarn')->output();
        $npm = Process::run($findCommand . ' npm')->output();
        $bun = Process::run($findCommand . ' bun')->output();
        $pnpm = Process::run($findCommand . ' pnpm')->output();

        $options = [];

        if (Str::of($yarn)->isNotEmpty()) {
            $options = array_merge($options, ['yarn add' => 'yarn']);
        }

        if (Str::of($npm)->isNotEmpty()) {
            $options = array_merge($options, ['npm install' => 'npm']);
        }

        if (Str::of($bun)->isNotEmpty()) {
            $options = array_merge($options, ['bun install' => 'bun']);
        }

        if (Str::of($pnpm)->isNotEmpty()) {
            $options = array_merge($options, ['pnpm install' => 'pnpm']);
        }

        if (count($options) == 0) {
            $this->error("You need yarn, npm, bun, or pnpm installed.");
            exit;
        }

        return select(
            label: 'Choose package manager:',
            options: $options
        );
    }

    protected function getDevCommand(string $packageManagerCommand): string
    {
        $manager = str_replace(' install', '', $packageManagerCommand);
        $manager = str_replace(' add', '', $manager);
        
        return match($manager) {
            'npm' => 'npm run dev',
            'yarn' => 'yarn dev',
            'bun' => 'bun dev',
            'pnpm' => 'pnpm dev',
            default => 'npm run dev'
        };
    }
}
