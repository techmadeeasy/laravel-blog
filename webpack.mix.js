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

mix.js('resources/js/assets/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');
mix.styles([
    'blog-post.css',
    'bootstrap.css',
    'font-awesome.css',
    'metisMenu.css',
    'sb-admin-2.css',
    'styles.css'
], '/public/css/libs.css');
