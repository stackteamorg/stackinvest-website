import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/assets/css/app.css',
                'resources/assets/css/custom-animation.css',
                'resources/assets/css/framework.css',
                'resources/assets/css/responsive.css',
                'resources/assets/css/style.css',
                'resources/assets/js/app.js',
                'resources/assets/vendor/jquery.min.js',
                'resources/assets/vendor/popper.js/popper.min.js',
                'resources/assets/vendor/bootstrap/js/bootstrap.min.js',
                'resources/assets/vendor/mega-menu/assets/js/custom.js',
                'resources/assets/vendor/aos-next/dist/aos.js',
                'resources/assets/vendor/jquery.appear.js',
                'resources/assets/vendor/jquery.countTo.js',
                'resources/assets/vendor/jquery.appear.js',
                'resources/assets/vendor/slick/slick.min.js',
                'resources/assets/vendor/fancybox/dist/jquery.fancybox.min.js',
                'resources/assets/js/theme.js',
            ],
            refresh: true,
        }),
    ],
    // resolve: {
    //     alias: {
    //         // '~jquery': Path2D.resolve(__dirname, 'node_modules/jquery')
    //     }
    // }
});

