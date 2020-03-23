const mix = require('laravel-mix');
require('laravel-mix-purgecss');
const glob = require('glob-all');
// require('laravel-mix-imagemin');
let ImageminPlugin = require( 'imagemin-webpack-plugin' ).default;


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

mix.webpackConfig( {
    plugins: [
        new ImageminPlugin({
//            disable: process.env.NODE_ENV !== 'production', // Disable during development
            pngquant: {
                quality: '95-100',
            },
            test: /\.(jpe?g|png|gif|svg)$/i,
        }),
    ],
})

// mix.js('resources/js/app.js', 'public/js')
//     .sass('resources/sass/app.scss', 'public/css');

// mix.postCss('public/css/bootstrap.min.css', 'public/css/bootstrap.minified.css')
// .purgeCss();

// mix.postCss('public/css/font-awesome.min.css', 'public/css/font-awesome.minified.css')
// .purgeCss();

mix.copy( 'resources/images', 'public/images', true);

// mix.imagemin('images/*');


// mix.imagemin(
//     'img/**.*',
//     {
//         context: 'resources',
//     },
//     {
//         optipng: {
//             optimizationLevel: 5
//         },
//         jpegtran: null,
//         plugins: [
//             require('imagemin-mozjpeg')({
//                 quality: 100,
//                 progressive: true,
//             }),
//         ],
//     }
// );

// mix.scripts([
//     'public/js/bootstrap.min.js',
//     'public/js/jquery-3.2.1.min.js'
// ], 'public/js/all.js');