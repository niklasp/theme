import anime from 'animejs/lib/anime.es.js';

const animations = {};

export function animateVegetable( targets, toX, toY ) {
  if ( typeof animations[ targets ] === undefined ) {
    const tl = anime.timeline({
      targets: targets,
      duration: 8000
    });
    console.log( tl );
  }

  console.log( 'xxx', animations[ targets ] );

  animations[ targets ].add({
    left: toX,
    top: toY,
  });
}

/**
 *
 * @param {DOMElement} container
 * @param {DOMElement} element
 *
 * Make the element follow the mouse when it is over container, with
 * a following speed of speed.
 */
export function followMouse( container, element, damping ) {
  let mouseX = 0, mouseY = 0, translateX = 0, translateY = 0;

  function init() {
    initListeners();
    rAF();
  }

  function initListeners() {
    container.addEventListener( 'mousemove', handleMouseMove );
  }

  function handleMouseMove( e ) {
    const bounds = e.currentTarget.getBoundingClientRect();
    mouseX = e.clientX - bounds.left;
    mouseY = e.clientY - bounds.top;
  }

  function rAF() {
    translateX += ( mouseX - translateX ) * damping;
    translateY += ( mouseY - translateY ) * damping;

    element.style.transform = `translate3d( ${ translateX }px, ${ translateY }px, 0)`;
    window.requestAnimationFrame( rAF );
  }

  init();
}