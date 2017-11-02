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

// 前台资源
mix.js('resources/assets/home/js/app.js', 'assets/home/js')
    .sass('resources/assets/home/sass/app.scss', 'assets/home/css')
    .version();

// 后台资源
mix.js('resources/assets/admin/js/app.js', 'assets/admin/js')
    .sass('resources/assets/admin/sass/app.scss', 'assets/admin/css')
    .version();