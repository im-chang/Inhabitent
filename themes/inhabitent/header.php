<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
			<div class="container">
				<div class="site-branding">
					<div class="logo">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/inhabitent-logo-tent-white.svg'; ?>" class="logo" alt="Inhabitent Logo" />
						<a href=""
						</a>
					</div>
				</div>
			<!-- end of logo icon -->
	<nav class="site-navi" role="navigation">
		<div class="navigation-container">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</div>
		<div class="search">
		</div>
	</nav>


			<div id="content" class="site-content">
	</header>
