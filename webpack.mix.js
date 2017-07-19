const { mix } = require('laravel-mix');
const CleanWebpackPlugin = require('clean-webpack-plugin');

var pathsToClean = [
    'public/css',
    'public/js'
];

var cleanOptions = {};

mix.webpackConfig({
    plugins: [
        new CleanWebpackPlugin(pathsToClean, cleanOptions)
    ]
});

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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

mix.styles([
    'resources/assets/css/CustomFramework_HF.css',
    'resources/assets/css/main.css'
], 'public/css/all.css');

mix.sourceMaps();

if (mix.config.inProduction) {
    mix.version()
    .disableNotifications();
}
