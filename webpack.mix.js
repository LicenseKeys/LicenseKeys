const { mix } = require('laravel-mix');

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
    
mix.sass('resources/assets/sass/app.scss', 'public/css')

    // Site JS
    .js('resources/assets/js/index.js', 'public/js/bundle.js')
    //User SPA
    .js('resources/assets/js/User/index.js', 'public/js/users/app.js')
    // Admin SPA
    .js('resources/assets/js/Admin/index.js', 'public/js/admin/app.js')