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
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);

mix.styles([
    'resources/assets/admin/plugins/fontawesome-free/css/all.min.css',
    'resources/assets/admin/plugins/select2/css/select2.min.css',
    'resources/assets/admin/css/adminlte.min.css',
    'resources/assets/admin/plugins/ekko-lightbox/ekko-lightbox.css',
], 'public/assets/admin/css/admin.css');

mix.scripts([
    'resources/assets/admin/plugins/jquery/jquery.min.js',
    'resources/assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js',
    'resources/assets/admin/js/adminlte.min.js',
    'resources/assets/admin/js/demo.js',
    'resources/assets/admin/plugins/select2/js/select2.full.min.js',
    'resources/assets/admin/plugins/ekko-lightbox/ekko-lightbox.min.js',
], 'public/assets/admin/js/admin.js');

mix.copy('resources/assets/admin/plugins/fontawesome-free/webfonts', 'public/assets/admin/webfonts');
mix.copy('resources/assets/admin/img', 'public/assets/admin/img');

mix.styles([
    'resources/assets/front/vendors/bootstrap4/bootstrap-grid.min.css',
/*    'resources/assets/front/vendors/magnific-popup/magnific-popup.min.css',
    'resources/assets/front/vendors/owl.carousel/owl.carousel.css',*/
    'resources/assets/front/css/main.css',
], 'public/assets/front/css/style.css');

mix.scripts([
    'resources/assets/front/vendors/jquery/jquery.min.js',
    'resources/assets/front/vendors/jquery.countdown/jquery.countdown.min.js',
    'resources/assets/front/vendors/jquery.countTo/jquery.countTo.min.js',
    'resources/assets/front/vendors/jquery.countUp/jquery.countup.min.js',
    'resources/assets/front/vendors/jquery.matchHeight/jquery.matchHeight.min.js',
    'resources/assets/front/vendors/jquery.mb.ytplayer/jquery.mb.YTPlayer.min.js',
    'resources/assets/front/vendors/jquery.waypoints/jquery.waypoints.min.js',
    'resources/assets/front/vendors/isotope-layout/isotope.pkgd.js',
    'resources/assets/front/vendors/masonry-layout/masonry.pkgd.js',

/*
    'resources/assets/front/vendors/imagesloaded/imagesloaded.pkgd.js',
    'resources/assets/front/vendors/owl.carousel/owl.carousel.js',
    'resources/assets/front/vendors/magnific-popup/jquery.magnific-popup.min.js',
    */
    'resources/assets/front/vendors/menu/menu.min.js',
    'resources/assets/front/vendors/smoothscroll/SmoothScroll.min.js',
    'resources/assets/front/js/main.js',
], 'public/assets/front/js/main.js');

mix.copy('resources/assets/front/fonts', 'public/assets/front/fonts');
mix.copy('resources/assets/front/img', 'public/assets/front/img');
