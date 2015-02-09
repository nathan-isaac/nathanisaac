var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function (mix) {

    mix.copy(
            'vendor/bower_components/animate.css/animate.min.css',
            'public/css/vendor/animate.css'
        )
        .copy(
            'vendor/bower_components/normalize.css/normalize.css',
            'public/css/vendor/normalize.css'
        )
        .sass('app.scss')
        .styles([
            'vendor/animate.css',
            'vendor/normalize.css',
            'app.css'
        ], 'public/css/all.css', 'public/css');
});
