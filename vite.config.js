import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/js/app.js',
                'resources/assets/vendor/libs/nouislider/nouislider.scss',
                'resources/assets/vendor/libs/swiper/swiper.scss',
                'resources/assets/vendor/scss/pages/front-page-landing.scss',
                'resources/assets/vendor/scss/pages/page-auth.scss',
                'resources/assets/vendor/libs/@form-validation/form-validation.scss',
                'resources/assets/vendor/libs/nouislider/nouislider.js',
                'resources/assets/vendor/libs/swiper/swiper.js',
                'resources/assets/js/front-page-landing.js',
                'resources/assets/js/pages-auth.js',
                'resources/assets/vendor/libs/@form-validation/popular.js',
                'resources/assets/vendor/libs/@form-validation/bootstrap5.js',
                'resources/assets/vendor/libs/@form-validation/auto-focus.js',
                'resources/assets/vendor/js/dropdown-hover.js',
                'resources/assets/vendor/js/mega-dropdown.js'
            ],
            refresh: true,
        }),
    ],
});
