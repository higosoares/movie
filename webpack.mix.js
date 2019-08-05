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

mix.scripts([//'public/js/all.min.js',
    'public/js/jquery-3.4.1.min.js',
    'public/js/app.js',
    'public/js/style.js',
], 'public/js/appMix.js')
    .sourceMaps()
    .version();

mix.styles([
    //'public/css/all.min.css',
    'public/css/app.css',
    'public/css/style.css'
], 'public/css/appMix.css')
    .sourceMaps()
    .version();

mix.scripts(['public/js/sweetalert2.all.min.js',
    'public/js/jquery.validate.js.js',
    'public/js/mensagem/mensagem.js',
    'public/js/datatables.min.js'
], 'public/js/forms.js');


//    'public/css/datatable.min.css'
