function makeMouseCursor( selector, xOffset = 0, yOffset = 0 ) {
  const el = document.querySelector( selector );

  if ( ! el ) {
    return;
  }

  document.body.addEventListener( 'mousemove', ( e ) => {
    el.style.position = 'absolute';
    el.style.left = `${ e.clientX + xOffset }px`;
    el.style.top = `${ e.clientY + yOffset }px`;
  });

}

export { makeMouseCursor };