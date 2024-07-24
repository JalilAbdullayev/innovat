import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'public/back/dist/css/style.min.css',
                "public/front/css/plugins/fontawesome-6.css",
                "public/front/css/plugins/swiper.min.css",
                "public/front/css/vendor/magnific-popup.css",
                "public/front/css/vendor/bootstrap.min.css",
                "public/front/css/vendor/metismenu.css",
                "public/front/css/style.css",
                "public/back/dist/css/pages/login-register-lock.css",
                "public/front/css/custom.scss",
            ],
            refresh: true,
        }),
    ],
});
