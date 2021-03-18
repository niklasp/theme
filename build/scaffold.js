const fs = require('fs-extra')
const path = require('path')
var stdio = require('stdio');

const config = require('./app.config')

var ops = stdio.getopt({
  'framework': {key: 'f', args: 1, description: 'css framework to use'},
});

if (ops) {
  if ( ops.framework === 'bootstrap' ) {
    const scaffoldSrc = path.join( config.paths.scaffold, 'bootstrap' );

    fs.copySync( scaffoldSrc, config.paths.assets, { overwrite: true }, function (err) {
      if (err) {
        console.error(err);
      } else {
        console.log("successfully copied bootstrap assets!");
      }
    });
  }
}