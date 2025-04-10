const mix = require('laravel-mix');

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

// mix.webpackConfig({
//     module: {
//         rules: [
//             {
//                 test: /\.(ttf|eot|woff|woff2)$/,
//                 use : {
//                     loader : "file-loader",
//                     options: {
//                         name: "fonts/[name].[ext]",
//                     },
//                 }
//             }
//         ]
//     }
// });


mix.js('resources/js/app.js', 'assets/public/js');
mix.sass('resources/sass/app.scss', 'assets/public/css');
mix.sass('resources/sass/app2.scss', 'assets/public/css')
    .options({
        processCssUrls: false
    });
