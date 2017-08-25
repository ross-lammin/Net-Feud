var kssgen = function (task, gulp, sitesettings, need) {
  'use strict';

  // const debug = require('gulp-debug');

  var dir = sitesettings.location['styleguide'],
    sassFolder = need.path.join(__dirname, '../../' + sitesettings.location['stylessrc'] + '/'),
    templatelocation = need.path.join(__dirname, '../../' + dir + '/template'),
    csslocation = need.path.join(__dirname, '../../' + sitesettings.location['cssdest'] + '/'),
    pathtohelpers = need.path.join(__dirname, '../resources/kss-helpers');

  var options = {
    source: csslocation,
    destination: 'styleguide',
    css: '../../assets/master.css',
    verbose: true,
    templateDirectory: templatelocation
  };

  gulp.task('kss', function (done) {
    need.kss(options);
    done();
  });

  // node_modules/kss/bin/kss-node --source /Users/jmdrawneek/Sites/jackdawGulp/drupal/themes/custom/jtest/globing-styling/master.css --destination styleguide --css /Users/jmdrawneek/Sites/jackdawGulp/drupal/themes/custom/jtest/globing-styling/master.css --verbose

  // kss-node --source /Users/jmdrawneek/Sites/jackdawGulp/drupal/themes/custom/jtest/sass/ --destination styleguide --css /Users/jmdrawneek/Sites/jackdawGulp/drupal/themes/custom/jtest/globing-styling/master.css --verbose

};

module.exports = kssgen;