const { mix } = require('laravel-mix');

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

mix.styles([
        'node_modules/bootstrap/dist/css/bootstrap.min.css',
        'node_modules/font-awesome/css/font-awesome.min.css',
    ], 'public/assets/css/vendor.css');




mix.js([
    'public/js/post/collections/post.js',
    'public/js/post/models/post.js',
    'public/js/post/views/add.js',
    'public/js/post/views/edit.js',
    'public/js/post/views/view.js',
], 'public/assets/js/post.js');

mix.js([
    'public/js/router.js',
    'public/js/helpers.js',
], 'public/assets/js/unity.js');