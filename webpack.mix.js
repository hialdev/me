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
// Compile JS with Vue support
mix.js('resources/js/app.js', 'public/js')
   .vue() // Pastikan ini ada untuk mendukung Vue
   .postCss('resources/css/app.css', 'public/css', [
       // Misalnya, gunakan autoprefixer jika diperlukan
   ]);

// Jika ingin mengelola file images, uncomment baris berikut
// mix.copy('resources/images', 'public/images');

// Untuk Source Maps (opsional, hanya untuk debugging)
// mix.sourceMaps();

// Untuk meng-enable versioning (opsional, jika ingin cache busting)
// mix.version();