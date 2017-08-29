const need = require('./gulp_dependencies');

// Gulp variables
const path = require('path');
// General variables.
const siteurl = 'visual.dev';
const sitename = 'Company name';
const themename = 'jtest';

const CMS = {};
CMS.type = 'Wordpress';
CMS.version = 4;

// Location based variables.
const location = [];

location['themename'] = 'basesite';

location['images'] = 'images';


// Raw assets like svgs for conversion etc.
location['rawfiles'] = [];
location['rawfiles']['folder'] = 'raw';
location['rawfiles']['svgs'] = location['rawfiles']['folder'] + '/svgs';
location['rawfiles']['imgs'] = location['rawfiles']['folder'] + '/imgs';

// Stylesheet sources and destinations.
location['stylessrc'] = 'sass';
location['csssource'] = '*.styles.scss';

// All sass that's generated should be added here to the master sass file will pick it up.
location['gensass'] = [];
location['gensass']['icons'] = location['stylessrc'] + '/svgs';

location['cssdest'] = 'assets/css';
location['cssoutput'] = 'master.css';

// Lint rules.
location['linting'] = [];
location['linting']['sass'] = require('./resources/styleLint');
location['linting']['js'] = '';//path.join(__dirname, '../../gulp/resources/.eslintrc');

// Javascript location.
location['js'] = 'global-scripts';

location['styleguide'] = 'styleguide';

const watch = {
  sass: [location['stylessrc'] + '/**/*.scss', location['stylessrc'] + '/*.scss'],
  twig: ['template/**/*.html.twig'],
  js: [location['js'] + '/*.js']
};


// Export the settings to use on other gulp files.
exports.sitename = sitename;
exports.siteurl = siteurl;
exports.themename = themename;
exports.CMS = CMS;
exports.location = location;
exports.watch = watch;