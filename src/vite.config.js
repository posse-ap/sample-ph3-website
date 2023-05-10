import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/common.js',
                'resources/js/quiz.js',
                'resources/scss/common.scss',
            ],
            refresh: true,
        }),
    ],
});
