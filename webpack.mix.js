const mix = require('laravel-mix');

mix.js('resources/js/quiz.js', 'public/js')
   .sass('resources/css/quiz.scss', 'public/css')
   .version();
