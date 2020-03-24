const mix = require('laravel-mix');
require('laravel-mix-purgecss');
const glob = require('glob-all');


// For compress images
const ImageminPlugin = require('imagemin-webpack-plugin').default;
const CopyWebpackPlugin = require('copy-webpack-plugin');
const imageminMozjpeg = require('imagemin-mozjpeg');
mix.webpackConfig({
    plugins: [
        new CopyWebpackPlugin([{
            from: 'resources/images',
            to: 'images', // Laravel mix will place this in 'public/img'
        }]),
        new ImageminPlugin({
            test: /\.(jpe?g|png|gif|svg)$/i,
            plugins: [
                imageminMozjpeg({
                    quality: 80,
                })
            ]
        })
    ]
});

// Css puring
mix.postCss('public/css/bootstrap.min.css', 'public/css/bootstrap.minified.css')
.purgeCss();

mix.postCss('public/css/font-awesome.min.css', 'public/css/font-awesome.minified.css')
.purgeCss();


// Copy last verseion of Jquery
mix.copy('node_modules/jquery/dist/jquery.min.js', 'public/js/jquery.min.js');

// Combining different javascript libraries
mix.scripts([
    'public/js/jquery.min.js',
    'public/js/popper.min.js',
    'public/js/bootstrap.min.js',
    'public/js/jquery.lazy.min.js',
    'public/js/jquery.lazy.plugins.min.js'
], 'public/js/all.js');
