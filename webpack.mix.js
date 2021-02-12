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

// mix.sass('resources/sass/app.scss', 'public/css')
// .sass('resources/sass/_base.scss', '../resources/assets/build/css') // importファイルは逐一追加する(しないとwatch-pollで監視できない)
//    .sass('resources/sass/style.scss', 'public/css/style.css') // assets/sass配下のstyle.scssを、public/css配下にstyle.cssとしてコンパイル
//     .js('resources/js/app.js', 'public/js')
//    .js('resources/js/test.js', 'public/js'); // assets/js配下のmain.jsを、public/js配下にmain.jsとしてコンパイル

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/login.js', 'public/js')
    .sass('resources/sass/login.scss', 'public/css')
    .sass('resources/sass/new.scss', 'public/css');
