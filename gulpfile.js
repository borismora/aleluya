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

elixir(mix => {
    mix.webpack('app.js')
        .scripts([
            'resources/assets/js/jquery.js',
            'resources/assets/js/bootstrap.js',
            ], 'public/js/app.js')
        .styles([
            'resources/assets/css/bootstrap.css',
            ], 'public/css/app.css');
});