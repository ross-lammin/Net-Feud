
const need = {};
// General gulp modules.
need.gulp = require('gulp');
// Only use sass/etc files with changes in.
need.changed = require('gulp-changed');
// Run bash commands from gulp.
// need.shell = require('gulp-shell');
// Conditional statements in gup
 need.gulpif = require('gulp-if');

 need.rename = require('gulp-rename');
//
// Browser Sync
need.bs = require("browser-sync");
//
// // File system module.
// need.fs = require('fs-extra');
//
// Add colours to the console!
 need.colors = require('colors');
//
// need.async = require('async');
//
need.path = require('path');
// // Allows simple git commands.
// need.simpleGit = require('simple-git')();
//
// need.yaml = require('js-yaml');
//
//
// Needed to compile sass to css.
 need.sass = require('gulp-sass');
// // Sass doc
// need.sassdoc = require('sassdoc');

// Adds sass source maps.
need.sourcemaps = require('gulp-sourcemaps');
need.sassGlob = require('gulp-sass-glob');

need.sourcepaths = [];

// Import postcss
 need.postcss = require('gulp-postcss');
// // PostCSS modules:
// need.autoprefixer = require('autoprefixer');
// need.mqpacker = require('css-mqpacker');
// need.colorRgbaFallback = require('postcss-color-rgba-fallback');
// need.comments = require('postcss-discard-comments');
//
// // Sass linting.
 need.reporter = require('postcss-reporter');
 need.syntax_scss = require('postcss-scss');
 need.stylelint   = require('stylelint');
//
// // Media query removal for old browsers.
// need.nomq = require('gulp-no-media-queries');
//
//
// // SVG iconify.
// need.iconify = require('gulp-iconify');
//
// // This is used by iconify.
// need.runSequence = require('run-sequence');
//
// // Image minification.
// need.imagemin = require('gulp-imagemin');
//
// // Gulp Modernizr
// need.modernizr = require('gulp-modernizr');
//
// // Javascript modules.
// // eslint your javascript – uses the Drupal js coding standards.
// need.eslint = require('gulp-eslint');
//
// // Stop tasks on demand.
// need.fail = require('gulp-fail');
//
// //
 need.kss = require('kss');
//
//
// need.handlebars = require('gulp-compile-handlebars');
//
//
// need.rename = require('gulp-rename');

module.exports = need;