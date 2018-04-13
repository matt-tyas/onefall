var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var sourcemaps = require('gulp-sourcemaps');
var concat = require('gulp-concat');
var include = require('gulp-include');
var jshint = require('gulp-jshint');
var stylish = require('jshint-stylish');
var uglify = require('gulp-uglify');
var mocha = require('gulp-mocha');


/**
 * Settings
 */
var src = '';
var dest = '';

var src_paths = {
  styles: src + 'scss/**/*.scss',
  scripts: src + 'js/**/*.js'
};

var dest_paths = {
  styles: dest + '',
  scripts: dest + 'js/scripts.min.js'
};

var settings = {
  sass: {
    outputStyle: 'compressed'
  },
  autoprefixer: {
    browsers: ['> 5%', 'last 2 versions']
  }
};



/**
 * Lint tasks
 */
gulp.task('lintjs', function() {
  gulp.src(src_paths.scripts)
    .pipe(jshint())
    .pipe(jshint.reporter(stylish));
});


/**
 * Build tasks
 */


// Styles
gulp.task('css', function() {
  gulp.src(src_paths.styles)
    .pipe(sourcemaps.init())
      .pipe(sass(settings.sass))
      .on('error', sass.logError)
      .pipe(autoprefixer(settings.autoprefixer))
      // .pipe(purge())
    .pipe(sourcemaps.write('maps/'))
    .pipe(gulp.dest(dest_paths.styles))
});

// Scripts
gulp.task('js', ['lintjs'], function() {
  gulp.src(src_paths.scripts)
    .pipe(sourcemaps.init())
      .pipe(include())
      .pipe(concat('scripts.min.js'))
      .pipe(uglify())
    .pipe(sourcemaps.write('maps/'))
    .pipe(gulp.dest(dest_paths.scripts))
});


/**
 * Tests
 */
gulp.task('testjs', function() {
  gulp.src('test.js')
    .pipe(mocha());
});



/**
 * Watch tasks
 */
gulp.task('watch', function() {
  gulp.watch(src_paths.styles, ['css']);
  gulp.watch(src_paths.scripts, ['lintjs', 'js']);
});


/**
 * Run tasks
 */
gulp.task('test', ['testjs']);
gulp.task('build', ['css', 'js']);
gulp.task('server', ['build', 'watch']);

gulp.task('default', ['server']);
