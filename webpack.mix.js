// webpack.mix.js

let mix = require('laravel-mix');

mix.js('src/app.js', 'dist').setPublicPath('dist');

const mix = require('laravel-mix');

mix.postCss('resources/css/theme.css', 'css', [
    require('tailwindcss'),
    require('postcss-nested')
])
.options({
    processCssUrls: false
});