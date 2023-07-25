import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';
import * as CopyPlugin from 'vite-plugin-copy';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
        CopyPlugin.copy({
            targets: [
                {src: 'resources/assets/*', dest: 'public/assets'}
            ],
            hook: 'writeBundle' // default
        })
    ],
});
