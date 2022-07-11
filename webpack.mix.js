const mix = require('laravel-mix');
require('laravel-mix-jigsaw');

mix.disableNotifications();
mix.setPublicPath('source/assets');

mix.jigsaw()
    .js('source/_assets/js/app.js', 'js')
    .css('source/_assets/css/app.css', 'css', [
        require('postcss-import'),
        require('tailwindcss'),
    ])
    .options({
        processCssUrls: false,
    })
    .version();
