var elixir = require('laravel-elixir');

require('laravel-elixir-webpack');

elixir(function(mix) {
   mix.sass([
       'app.scss',
       'controllers.scss'
   ], 'public/assets/css');

   mix.webpack(['app.js','bootstrap.min.js']);

});
