var elixir = require('laravel-elixir');

require('laravel-elixir-webpack');
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

elixir(function(mix) {
    mix.sass('app.scss')
        .webpack('app.js')
        .copy('bower_components/jquery.maskedinput/dist/jquery.maskedinput.min.js','public/js')
        .copy('bower_components/bootstrap-validator/dist/validator.min.js','public/js');
});
