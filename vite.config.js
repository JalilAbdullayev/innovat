import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'public/back/node_modules/morrisjs/morris.css',
                'public/back/node_modules/toast-master/css/jquery.toast.css',
                'public/back/dist/css/style.min.css',
                'public/back/dist/css/pages/dashboard1.css',
                "public/back/node_modules/dropify/dist/css/dropify.min.css",
                'public/back/ckeditor/samples/css/samples.css',
                'public/back/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css',
                "public/back/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css",
                "public/back/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css",
                "public/front/css/plugins/fontawesome-6.css",
                "public/front/css/plugins/swiper.min.css",
                "public/front/css/vendor/magnific-popup.css",
                "public/front/css/vendor/bootstrap.min.css",
                "public/front/css/vendor/metismenu.css",
                "public/front/css/style.css"
            ],
            refresh: true,
        }),
    ],
});
