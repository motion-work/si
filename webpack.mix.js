let mix = require('laravel-mix');

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

mix
    .less('resources/assets/less/app.less', 'public/css')

    .styles([
        'resources/assets/semantic/dist/semantic.css',
        'node_modules/animate.css/animate.css'
    ], 'public/css/vendor.css')

    .js([
        'resources/assets/semantic/dist/semantic.js',
        'node_modules/wowjs/dist/wow.js',
    ], 'public/js/vendor.js')

    .js('resources/assets/js/app.js', 'public/js')

    .browserSync({
        proxy: 'sitasys.test'
    });