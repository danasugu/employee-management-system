const mix = require("laravel-mix");

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

mix.js("resources/assets/js/app.js", "public/js").sourceMaps();
mix.sass("resources/assets/sass/app.scss", "public/css", {
    implementation: require("node-sass"),
});

if (mix.inProduction()) {
    mix.version();
}
