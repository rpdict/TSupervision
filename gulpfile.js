const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir( mix => {
    mix.sass('app.scss','./resources/assets/css');

    mix.styles([
        './resources/assets/css/app.css',
        './resources/assets/css/custom.css',
        './resources/assets/css/animate.min.css',
        './resources/assets/css/style.min.css',
        './node_modules/morris.js/morris.css',
        './resources/assets/css/main.css'
    ], 'public/css/main.css');

    mix.scripts([
        './node_modules/jquery/dist/jquery.js',
        './node_modules/bootstrap-sass/assets/javascripts/bootstrap.js',
        './resources/assets/js/baiduMap.js',
        './node_modules/morris.js/morris.js',
        './resources/assets/js/raphael-2.1.0.min.js',
        './resources/assets/js/morris-demo.min.js',
        './node_modules/icheck/icheck.js',
        './resources/assets/js/main.js'
    ], 'public/js/vendor.js');
});
