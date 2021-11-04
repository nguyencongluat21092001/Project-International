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

 mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/client/header.scss','public/assets/css/client')
    .sass('resources/sass/client/information.scss','public/assets/css/client')
    .sass('resources/sass/client/confirmInfor.scss','public/assets/css/client')
    // .sass('resources/sass/client/mypage.scss','public/assets/css/client')
    .sass('resources/sass/client/login.scss','public/assets/css/client')
    .sass('resources/sass/client/searchid.scss','public/assets/css/client')
    .sass('resources/sass/client/thanksPage.scss','public/assets/css/client')
    .sass('resources/sass/client/term.scss','public/assets/css/client')
    .sass('resources/sass/admin/style.scss','public/assets/css/admin')
    .sass('resources/sass/admin/alogin.scss', 'public/assets/css/admin/alogin.css')
    .sass('resources/sass/admin/dashboard.scss', 'public/assets/css/admin/dashboard.css')
    .sass('resources/sass/admin/detail.scss', 'public/assets/css/admin/detail.css')
    .sass('resources/sass/client/info.scss', 'public/assets/css/client/info.css')
    .sass('resources/sass/client/question-list.scss', 'public/assets/css/client/question-list.css')
    .sass('resources/sass/client/editProfile.scss', 'public/assets/css/client')
    .options({
     processCssurls: false
 });