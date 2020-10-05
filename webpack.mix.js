const mix = require('laravel-mix');
// const fs  = require('fs');

// let getFiles = function (dir) {
//     // get all 'files' in this directory
//     // filter directories
//     return fs.readdirSync(dir).filter(file => {
//         return fs.statSync(`${dir}/${file}`).isFile();
//     });
// };

// JS & CSS Compilation
mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .version(); 

// getFiles('resources/js/pages').forEach(function (filepath) {
//     mix.js('resources/js/pages/' + filepath, 'public/js/pages');
// });

// Folder copy
mix.copyDirectory('resources/img/', 'public/img/');
mix.copyDirectory('resources/icon/', 'public/icon/');

