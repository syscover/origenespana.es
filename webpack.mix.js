const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .scripts([
        'resources/js/theme/jquery.js',
        'resources/js/theme/bootstrap.min.js',
        'resources/js/theme/popper.min.js',
        'resources/js/theme/appear.js',
        'resources/js/theme/jquery-ui.js',
        'resources/js/theme/jquery.mCustomScrollbar.concat.min.js',
        'resources/js/theme/jquery.fancybox.js',
        'resources/js/theme/jquery.easing.min.js',
        'resources/js/theme/owl.js',
        'resources/js/theme/slick.js',
        'resources/js/theme/sticky.js',
        'resources/js/theme/isotope.js',
        'resources/js/theme/wow.js',
        'resources/js/theme/mixitup.js',
        'resources/js/theme/respond.js',
        'resources/js/theme/validate.js',
        'resources/js/theme/wow.js',
        // 'resources/js/theme/gmaps.js',
        // 'resources/js/theme/map-script.js',
        'resources/js/theme/script.js'
    ], 'public/js/all.js')
    .options({
        processCssUrls: false
    });
