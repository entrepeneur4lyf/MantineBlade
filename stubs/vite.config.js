import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';
import path from 'path';
import findMingles from './vendor/ijpatricio/mingle/resources/js/autoImport.js'

const mingles = findMingles('resources/js')
// Optional: Output the mingles to the console, for a visual check
console.log('Auto-importing mingles:', mingles)

export default defineConfig({
    resolve: {
        alias: {
            "@mingle": path.resolve(__dirname, "/vendor/ijpatricio/mingle/resources/js"),
        },
    },
    plugins: [
        react(),
        laravel({
            input: [
                ...mingles,
            ],
            refresh: true,
        }),
    ],
});
