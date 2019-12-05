let mix = require('laravel-mix');
//
// mix.js('resources/assets/js/app.js', 'public/js')
// .sass('resources/assets/sass/app.scss', 'public/css/ca');
   // .js('resources/assets/js/admin.js','public/js')
   // .sass('resources/assets/sass/admin/dashboard.scss', 'public/css');

mix.js('resources/assets/js/Get.js','public/asset/js');
mix.js('resources/assets/js/mobile/Get.js','public/mobile/js');
// mix.js('resources/assets/js/android/Get.js','public/android/js');
mix.sass('resources/assets/sass/Get.scss','public/asset/css');
mix.sass('resources/assets/sass/mobile/Get.scss','public/mobile/css');
//
// mix.js('resources/assets/js/android/Get.js','public/android/js');
// mix.js('resources/assets/js/alpha.js','public/asset/js');
// mix.sass('resources/assets/sass/alpha.scss','public/mobile/css');
// mix.js('resources/assets/js/mobile/alpha.js','public/mobile/js');
// min.js('resources/assets/js/register.js','public/asset/js');
// mix.js('resources/assets/js/admin.js','public/js');

//
// mix.js('resources/assets/js/ca/caProfile.js','public/js/ca');
// mix.js('resources/assets/js/ca/caLogin.js','public/js/ca');
// mix.js('resources/assets/js/ca/caDashboard.js','public/js/ca');
   // .sass('resources/assets/sass/app.scss', 'public/css/ca')
   // .sass('resources/assets/sass/ca/caNoMiddleware.scss', 'public/css/ca')
   // .sass('resources/assets/sass/ca/caMiddleware.scss', 'public/css/ca');

// mix.js('resources/assets/js/ca/caDashboard.js','public/js/ca');
// mix.sass('resources/assets/sass/ca/caNoMiddleware.scss', 'public/css/ca');