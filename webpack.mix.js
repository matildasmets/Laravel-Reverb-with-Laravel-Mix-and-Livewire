const mix = require('laravel-mix');
const Dotenv = require('dotenv-webpack');

mix.webpackConfig({
    plugins: [
        new Dotenv({
            path: '.env',
        }),
    ],
});

mix.css('resources/css/app.css', 'public/css')
    .js('resources/js/app.js', 'public/js')
    .js('resources/js/echo.js', 'public/js')
    .options({
        postCss: [require("tailwindcss")],
    });
