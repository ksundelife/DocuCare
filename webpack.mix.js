const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js').postCss('resources/css/app.css', 'public/css', [
    require('postcss-import'),
    require('tailwindcss'),
    require('autoprefixer'),
]);

mix.js('resources/js/cardCarousel.js', 'public/js').vue({ version: 2 }).version();
mix.js('resources/js/patientList.js', 'public/js').vue({ version: 2 }).version();

mix.js('resources/js/schedule.js', 'public/js').vue({ version: 2 }).version();
mix.js('resources/js/specialistsList.js', 'public/js').vue({ version: 2 }).version();
