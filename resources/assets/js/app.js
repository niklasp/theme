// Let's include anything you need using ES6 modules import. E.g.
// import { pick } from 'lodash';

import './scaffold.js';
import { makeMouseCursor } from './cursor.js';
import { animateVegetable, followMouse } from './vegetables.js';
import mediumZoom from 'medium-zoom';

// makeMouseCursor( '#cursor-wrap', -40, -20 );
mediumZoom('main img');

// document.body.addEventListener( 'mousemove', ( e ) => {
//   animateVegetable( '.vegetable', e.clientX, e.clientY );
// });

// followMouse(
//   document.body,
//   document.querySelector( '#cursor-wrap' ),
//   0.004
// );

// followMouse(
//   document.body,
//   document.querySelector( '.vegetable.v1' ),
//   0.04
// );

const hamburger = document.querySelector( '.hamburger' );
const mobileMenu = document.querySelector( '#mobile-menu-wrap' );
hamburger.addEventListener( 'click', () => {
  hamburger.classList.toggle( 'is-active' );
  mobileMenu.classList.toggle( 'open' );
});


