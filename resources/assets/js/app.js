// Let's include anything you need using ES6 modules import. E.g.
// import { pick } from 'lodash';

import './scaffold.js';
import { makeMouseCursor } from './cursor.js';
import mediumZoom from 'medium-zoom';

makeMouseCursor( '#cursor-wrap', -40, -20 );
mediumZoom('img');