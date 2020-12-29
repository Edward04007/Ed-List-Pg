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

mix.styles(
    'resources/css/main.css'
    ,'public/css/main.css'
    )
    .styles(
        'resources/css/main_1.css'
        ,'public/css/main_1.css'
    )
    .styles(
            'resources/css/main_2.css'
            ,'public/css/main_2.css'
    )
    .styles(
        'resources/css/main_3.css'
        ,'public/css/main_3.css'
    )
    .styles(
        'resources/css/main_4.css'
        ,'public/css/main_4.css'
    )
    .styles(
        'resources/css/main_5.css'
        ,'public/css/main_5.css'
    )
    .styles(
        'resources/css/main_6.css'
        ,'public/css/main_6.css'
    )
    .styles(
        'resources/css/main_7.css'
        ,'public/css/main_7.css'
    )
    .js(
        'resources/js/menu.js'
    ,'public/js/menu.js'
    )
    .js(
        'resources/js/theme.js'
    ,'public/js/theme.js'
    )
    .js(
        'resources/js/autoLoadTheme.js'
    ,'public/js/autoLoadTheme.js'
    )
    .version();
