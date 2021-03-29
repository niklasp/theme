<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 */
namespace Tonik\Theme\Header;
use function Tonik\Theme\App\template;
use function Tonik\Theme\App\asset_path;

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <button class="hamburger hamburger--slider d-block d-md-none" type="button">
        <span class="hamburger-box">
            <span class="hamburger-inner"></span>
        </span>
    </button>  
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'twentytwentyone' ); ?></a>
	<div id="content" class="site-content">
		<div id="primary" class="content-area">
            <div id="menu-wrap" class="d-none d-md-block">
                <h1>Prachttomate</h1>
                <h2>Gemeinschaftsgarten in Berlin Neukölln</h2>
                <img
                    src="<?php echo asset_path('images/piratentomate_no_bg.png') ?>"
                    alt="logo"
                />
                <?php template('layout/nav'); ?>
                <?php if ( is_active_sidebar( 'menu_widgets' ) ) : ?>
                    <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
                        <?php dynamic_sidebar( 'menu_widgets' ); ?>
                    </div><!-- #primary-sidebar -->
                <?php endif; ?>
            </div>
            <div id="mobile-menu-wrap" class="d-flex d-md-none">
                <h1>Prachttomate</h1>
                <h2>Gemeinschaftsgarten in Berlin Neukölln</h2>
                <img
                    src="<?php echo asset_path('images/piratentomate_no_bg.png') ?>"
                    alt="logo"
                />
                <?php template('layout/nav'); ?>
            </div>
			<main id="main" class="site-main" role="main">