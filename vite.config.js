import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/js/app.js',
                'resources/assets/vendor/libs/animate-on-scroll/animate-on-scroll.scss',
                'resources/assets/vendor/scss/pages/front-page-landing.scss',
                'resources/assets/vendor/libs/animate-on-scroll/animate-on-scroll.js',
                'resources/assets/js/front-page-landing.js'
            ],
            refresh: true,
        }),
    ],
});
