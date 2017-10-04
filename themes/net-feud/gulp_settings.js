// Gulp variables
const path = require('path');
// General variables.
const siteurl = 'netfeud.dev';
const sitename = 'Netfeud';
const themename = 'net-feud';

const CMS = {};
CMS.type = '';
CMS.version = null;

// Location based variables.
const location = [];

location['themename'] = 'basesite';

location['images'] = 'assets/imgs';


// Raw assets like svgs for conversion etc.
location['rawfiles'] = [];
location['rawfiles']['folder'] = 'raw';
location['rawfiles']['svgs'] = location['rawfiles']['folder'] + '/svgs';
location['rawfiles']['imgs'] = location['rawfiles']['folder'] + '/imgs';

// Stylesheet sources and destinations.
location['stylessrc'] = 'assets/sass';
location['csssource'] = '*.styles.scss';

// All sass that's generated should be added here to the master sass file will pick it up.
location['gensass'] = [];
location['gensass']['icons'] = location['stylessrc'] + '/svgs';

location['cssdest'] = 'assets/css';
location['cssoutput'] = 'master.css';

// Lint rules.
location['linting'] = [];
location['linting']['sass'] = require('gulp_first10_frontend-toolbox/gulp/resources/styleLint');
location['linting']['js'] = '';//path.join(__dirname, '../../gulp/resources/.eslintrc');

// Javascript location.
location['js'] = 'assets/js/scripts/';

location['jsdest'] = 'assets/js';
location['jsoutput'] = 'master.js';
location['jsoutput-min'] = 'master.min.js';

location['imgdest'] = 'assets/img';
location['imgoutput'] = '';

location['F10Lib'] = 'assets/js/';

location['js-dependencies'] = ['assets/js/'];

js = {};
js['requiredJS'] = {}
js['requiredJS']['functions'] = ['triggerAndTargetClassModifier', 'exampleFunctionObject', 'testtwo'];
js['requiredJS']['esVersion'] = 'es5'


location['styleguide'] = 'styleguide';

const watch = {
  sass: [location['stylessrc'] + '/**/*.scss', location['stylessrc'] + '/*.scss'],
  twig: ['template/**/*.html.twig'],
  js: [location['js'] + '/*.js']
};


// Export the settings to use on other gulp files.
exports.js = js;
exports.sitename = sitename;
exports.siteurl = siteurl;
exports.themename = themename;
exports.CMS = CMS;
exports.location = location;
exports.watch = watch;