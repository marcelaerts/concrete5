// Javascript dependencies are compiled with Laravel Mix https://laravel.com/docs/5.5/mix
let mix = require('laravel-mix');

mix
    // Simple ES6 JavaScript
    .babel('resources/js/main.js', 'public/application/themes/forza-digital/js/build.js')

    // Less CSS Compilation
    .sass('resources/scss/main.scss', 'public/application/themes/forza-digital/css/build.css')
        .options({
            postCss: [
                require('postcss-css-variables')()
            ]
        });

// Other options:
// mix.sass, mix.js, mix.scripts, mix.stylus, mix.styles, mix.react, mix.webpackConfig, mix.copy, mix.copyDirectory,
// mix.browserSync, mix.disableNotifications
//
// Optional modifiers
// mix.js(...).version(), mix.js(...).extract(...)
//
// Accessing Info
// mix.inProduction()

mix.browserSync({
	https: true,
    files: [
        'resources/scss/**/*.scss',
        'resources/js/**/*.js'
    ],
    proxy: 'https://o.forza-digital.nl'
})