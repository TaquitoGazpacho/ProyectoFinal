var mix = require('laravel-mix');

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

mix.sass('resources/assets/sass/style.scss', 'public/css')
    .options({
        processCssUrls: false,
        includePaths: ['node_modules']
    });

//mix.copy('node_modules/bootstrap/dist/css/bootstrap.min.css', 'public/css/complementos');
mix.copy('node_modules/bootstrap/dist/css', 'public/bootstrap/css');
mix.copy('node_modules/bootstrap/dist/fonts', 'public/bootstrap/fonts');
mix.copy('node_modules/font-awesome/css', 'public/font-awesome/css');
mix.copy('node_modules/font-awesome/fonts', 'public/font-awesome/fonts');
mix.copy('node_modules/ionicons/dist/css', 'public/css/complementos/ionicons/css');
mix.copy('node_modules/ionicons/dist/fonts', 'public/css/complementos/ionicons/fonts');
mix.copy('node_modules/ionicons/dist/svg', 'public/css/complementos/ionicons/svg');
mix.copy('node_modules/morris.js/morris.css', 'public/css/complementos');
mix.copy('node_modules/jvectormap/jquery-jvectormap.css', 'public/css/complementos');
mix.copy('node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css', 'public/css/complementos');
mix.copy('node_modules/bootstrap-daterangepicker/daterangepicker.css', 'public/css/complementos');

mix.copy('node_modules/jquery/dist/jquery.min.js', 'public/js/complementos');
mix.copy('node_modules/jquery-ui-dist/jquery-ui.min.js', 'public/js/complementos');
mix.copy('node_modules/bootstrap/dist/js/bootstrap.min.js', 'public/bootstrap/js');
mix.copy('node_modules/raphael/raphael.min.js', 'public/js/complementos');
mix.copy('node_modules/morris.js/morris.min.js', 'public/js/complementos');
mix.copy('node_modules/jquery-sparkline/jquery.sparkline.min.js', 'public/js/complementos');
mix.copy('node_modules/jquery-knob/dist/jquery.knob.min.js', 'public/js/complementos');
mix.copy('node_modules/moment/min/moment.min.js', 'public/js/complementos');
mix.copy('node_modules/bootstrap-daterangepicker/daterangepicker.js', 'public/js/complementos');
mix.copy('node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js', 'public/js/complementos');
mix.copy('node_modules/jquery-slimscroll/jquery.slimscroll.min.js', 'public/js/complementos');
mix.copy('node_modules/fastclick/lib/fastclick.js', 'public/js/complementos');



//mix.js('resources/assets/js/app.js', 'public/js')
// .sass('resources/assets/sass/style.scss', 'public/css');
