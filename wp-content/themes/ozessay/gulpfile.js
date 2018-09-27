//var config = require ('./.config');
var domain = 'http://ozessay.com.au.local';
var path_to_theme = '/wp-content/themes/ozessay/'; //url with trailing slash

//NPM-MODULES
//--------------------------------------------------
var gulp = require('gulp');
var plumber = require('gulp-plumber');
var replace = require('gulp-batch-replace');
//var browserSync = require('browser-sync');
var imagemin = require('gulp-imagemin');
var less = require('gulp-less');
var autoprefixer = require('gulp-autoprefixer');
var concat = require('gulp-concat');
var cleanCSS = require('gulp-clean-css');
var sourcemaps = require('gulp-sourcemaps');
var obfuscate = require('gulp-obfuscate');
var jsmin = require('gulp-jsmin');
var cssmin = require('gulp-cssmin');
var rename = require('gulp-rename');

var util = require('gulp-util');
//var is_prod = util.env.production;

var critical = require('critical');

//TASK: gulp
//--------------------------------------------------
gulp.task('default', [ /*'browser-sync',*/ 'watch']);

//TASK: gulp watch
//--------------------------------------------------
gulp.task('watch', function() {
    gulp.watch('./less/**/*.less', ['less']);
    gulp.watch(['./js/plugins/*.js', './js/custom.js', './js/faq.js', '!./js/scripts.min.js'], ['js']);
});

//TASK: gulp img
//--------------------------------------------------
gulp.task('img', function() {
    gulp.src(['./{img,css}/**/*.{png,jpg,jpeg,gif}', './screenshot.png'])
        .pipe(plumber())
        .pipe(imagemin({ progressive: true }))
        .pipe(gulp.dest("./"));
});

//TASK: gulp less
//--------------------------------------------------
gulp.task('less', function() {
    gulp.src('./less/style.less')
        .pipe(plumber())
        .pipe(sourcemaps.init())
        .pipe(less())
        .pipe(autoprefixer({ browsers: ['last 50 versions'] }))
        .pipe(cleanCSS({ compatibility: 'ie8', keepSpecialComments: 0 }))
        .pipe(sourcemaps.write('./less'))
        .pipe(cssmin())
        .pipe(rename({ suffix: '.min' }))
        .pipe(gulp.dest('./'))
});

//TASK: gulp replace
//--------------------------------------------------
gulp.task('replace', function() {
    gulp.src(['**/*.php',
            'style.css',
            'style.css.map'
        ])
        //.pipe(replace(config.new_classes))
        .pipe(gulp.dest("./"));
});

//TASK: gulp replace-js
//--------------------------------------------------
gulp.task('js', function() {
    gulp.src(['./js/plugins/**/*.js', './js/custom.js'])
        //.pipe(replace(config.new_classes))
        .pipe(concat('./scripts.min.js'))
        .pipe(jsmin())
        .pipe(gulp.dest("./js/"));
});

//TASK: gulp replace-less
//--------------------------------------------------
gulp.task('replace-less', function() {
    gulp.src(['less/*.less'])
        //.pipe(replace(config.new_classes))
        .pipe(gulp.dest("less/"));
});

//TASK: gulp replace-css
//--------------------------------------------------
gulp.task('replace-css', function() {
    gulp.src(['css/*.css'])
        //.pipe(replace(config.new_classes))
        .pipe(gulp.dest("css/"));
});

//TASK: gulp obfuscate-js
//--------------------------------------------------
gulp.task('obfuscate-js', function() {
    gulp.src('js/zopim-chat.js')
        .pipe(obfuscate())
        .pipe(gulp.dest('dist'));
});


//TASK: gulp critical-css
//before run this task you need comment next code in functions.php:
//add_action( 'wp_enqueue_scripts', 'ox_adding_critical_css' );
//--------------------------------------------------
gulp.task('critical', function() {
    critical.generate({
        src: domain,
        dest: 'css/critical.css.php',
        minify: true,
        pathPrefix: path_to_theme + this.base
    });
});

// gulp.task('browser-sync', function() {
//watch files
//  var files = [
//     './**/*.css',
//     './js/**/*.js',
//     './**/*.php',
//     './**/*.html'
// ]; 

//initialize browsersync
//     browserSync.init(files, {
//         proxy: domain,
//         injectChanges: true, //inject CSS changes
//         notify: false
//     });
// });