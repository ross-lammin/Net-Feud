var tasklist = function (task, gulp, sitesettings, need) {
    'use strict';

    var sassloc = sitesettings.location['stylessrc'] + '/' + sitesettings.location['csssource'];
    var svgloc = sitesettings.location['rawfiles']['svgs'];

    gulp.task('tasklist', function () {
        console.log(need.colors.inverse.red(  '                                                                                                          '));
        console.log(need.colors.inverse.red(  '    Gulp Tasks:                                                                                           '));
        console.log(need.colors.inverse.red(  '----------------------------------------------------------------------------------------------------------'));
        console.log(need.colors.inverse.white('                                                                                                          '));
        console.log(need.colors.inverse.blue( '    Gulp controller Tasks:                                                                                '));
        console.log(need.colors.inverse.white('                                                                                                          '));
        console.log(need.colors.inverse.white('    gulp dev         –  Watches for changes and compiles sass                                             '));
        console.log(need.colors.inverse.white('    gulp dev-mean    –  Watches for changes and compiles sass but also lints                              '));
        console.log(need.colors.inverse.white('    gulp dev-build   –  Converts SVGs, mins images and builds KSS + SASSDOC                               '));
        console.log(need.colors.inverse.white('    gulp buildingtheme  –  For building the actual base theme (Slow!)                                     '));
        console.log(need.colors.inverse.white('    gulp test        -  Test your themes js, sass and php                                                 '));
        console.log(need.colors.inverse.white('    gulp production  -  Compiles and builds the theme ready for deployment                                '));
        console.log(need.colors.inverse.white('                                                                                                          '));
        console.log(need.colors.inverse.blue( '    Gulp Subtasks:                                                                                        '));
        console.log(need.colors.inverse.white('                                                                                                          '));
        console.log(need.colors.inverse.white('    gulp sassdev  -  Compiles your sass and displays debugging info etc                                   '));
        console.log(need.colors.inverse.white('    gulp sassprod -  Compiles your sass without debugging info etc                                        '));
        console.log(need.colors.inverse.white('    gulp lintJS   -  Uses eslint to check your markup against D8 coding standards                         '));
        console.log(need.colors.inverse.white('    gulp lintSass -  Uses stylelint to check your markup against rules set in gulp/resources/.stylelintrc '));
        console.log(need.colors.inverse.white('    gulp kssbuild -  Creates the correct file structure and downloads a template. (currently disabled)    '));
        console.log(need.colors.inverse.white('    gulp kssgen   -  Traverse through ' + sassloc + ' and create kss node pages from markup.           '));
        console.log(need.colors.inverse.white('    gulp sassdocs -  Traverse through ' + sassloc + ' and create Sass docs from markup.                '));
        console.log(need.colors.inverse.white('    gulp iconify  -  Check folder ' + svgloc + '/ for SVGs and convert them into icons.                         '));
        console.log(need.colors.inverse.white('    gulp modernizr  - Generates a custom modernizr build.                                                 '));
        console.log(need.colors.inverse.white('                                                                                                          '));
        console.log(need.colors.inverse.blue( '    Gulp CasperJS tasks – BETA:                                                                           '));
        console.log(need.colors.inverse.white('                                                                                                          '));
        console.log(need.colors.inverse.white('    gulp casper-setup  -  First edit tests/setup/spider.js and add the site URL.                          '));
        console.log(need.colors.inverse.white('                          Then run the command. This then crawls the site and collects URL                '));
        console.log(need.colors.inverse.white('                          for other casperjs tasks to use.                                                '));
        console.log(need.colors.inverse.white('    gulp casper-tests  -  Runs all the casperJS tests on the URLs in output/siteURLS.json.                '));
        console.log(need.colors.inverse.white('                          Results are output to JSON files in the same folder.                            '));
        console.log(need.colors.inverse.white('    gulp casper-vis-tests  -  Runs visual regression tests on the URLS in sitesURLS.json.                 '));
        console.log(need.colors.inverse.white('                                                                                                          '));
        console.log(need.colors.inverse.blue( '    Gulp Settings:                                                                                        '));
        console.log(need.colors.inverse.white('                                                                                                          '));
        console.log(need.colors.inverse.white('    Site URL: ' + sitesettings.siteurl + '                                                                                  '));
        console.log(need.colors.inverse.white('    Drupal version set to:  ' + sitesettings.drupal.version + '                                                                             '));
        console.log(need.colors.inverse.white('    Theme name:  ' + sitesettings.location['themename'] + '                                                                                 '));
        console.log(need.colors.inverse.white('    Master sass file:  ' + sitesettings.location['csssource'] + '                                                                      '));
        console.log(need.colors.inverse.white('                                                                                                          '));
        console.log(need.colors.inverse.white('    These settings can be changed by editing gulp/gulp_settings.js                                        '));
        console.log(need.colors.inverse.white('                                                                                                          '));
        console.log(need.colors.inverse.white('                                                                                                          '));
    });
};

module.exports = tasklist;
