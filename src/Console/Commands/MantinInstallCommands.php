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
        $this->info("Run `{$this->getDevCommand($packageManagerCommand)}` to start development server");
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
            "@emotion/react",
            "react",
            "react-dom"
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
        $stub = File::get(__DIR__ . '/../../stubs/vite.config.js');

        if (!File::exists($viteConfigPath)) {
            File::put($viteConfigPath, $stub);
        } else {
            // Modify existing config to include React plugin
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
                File::put($viteConfigPath, $config);
            }
        }
    }

    protected function publishConfig()
    {
        $this->info("\nPublishing configuration...");
        
        Artisan::call('vendor:publish', [
            '--tag' => 'mantine-blade-config'
        ]);
    }

    protected function copyStubs()
    {
        $this->info("\nCopying example components...");

        $viewsPath = resource_path('views/vendor/mantine-blade');
        $componentsPath = app_path('Http/Livewire');

        // Create directories if they don't exist
        if (!File::exists($viewsPath)) {
            File::makeDirectory($viewsPath, 0755, true);
        }
        if (!File::exists($componentsPath)) {
            File::makeDirectory($componentsPath, 0755, true);
        }

        // Copy example components
        // TODO: Add actual stub files
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