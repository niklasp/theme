<?php

namespace Tonik\Theme\App\Structure;

/*
|-----------------------------------------------------------
| Theme Custom Widgets
|-----------------------------------------------------------
|
| This file is for registering your theme widgets, so
| they can be assigned to sidebar areas in admin
| panel by website administrator or user.
|
*/

/**
 * Registers custom widgets.
 *
 * @return void
 */
function register_widgets()
{
    // register_widget('\My\Widget\Class');
}
add_action('widgets_init', 'Tonik\Theme\App\Structure\register_widgets');

/**
 * Register our sidebars and widgetized areas.
 *
 */
function prachttomate_widgets_init() {

	register_sidebar( array(
		'name'          => 'Menu Widgets',
		'id'            => 'menu_widgets',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'Tonik\Theme\App\Structure\prachttomate_widgets_init' );