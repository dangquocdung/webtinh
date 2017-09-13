var elixir = require('laravel-elixir');

// require('laravel-elixir-webpack');

elixir(function(mix) {

	// mix.js('resources/assets/js/app.js', 'public/assets/js');

   mix.sass('resources/assets/sass/app.scss', 'public/assets/css');


   

   // mix.webpack([
   // 		'app.js',
   // 		'bootstrap.min.js'
   // 		], 'public/assets/js' );

   // mix.less([
   //      'app.less',
   //      'controllers.less'
   //  ], 'public/assets/css');

});
