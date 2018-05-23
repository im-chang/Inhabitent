<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package Inhabitent_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function inhabitent_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'inhabitent_body_classes' );

function inhabitent_dynamic_css() {

	//MAKE SURE IT'S THE ABOUT PAGE THAT LOADED
	if ( ! is_page_template('page-templates/about.php') ) {
		return;
	}
	//GET OUR BACKGROUND IMAGE FROM OUR CUSTOM FIELD
	$image = CFS()->get('hero_image');
	//IF WE DON'T HAVE AN IMAGE IN THE FIELD, GET OUTTA THERE!
	if ( ! $image ) {
		return;
	}

	$hero_css = "
	.entry-header {
		background: linear-gradient(to bottom, rgba(0, 0, 0, 0.4) 0%, rgba(0, 0, 0, 0.4) 100%),
		url({$image}) no-repeat center bottom;
		background-size: cover, cover;
		height: 100vh;
		display: flex;
		justify-content: center;
	}

	.entry-title {
		color: white;
		text-align: center;
		vertical-align: middle;
	}
	";

	//ADD OUR CUSTOM CSS

	wp_add_inline_style('inhabitent-style', $hero_css );
}

add_action('wp_enqueue_scripts', 'inhabitent_dynamic_css');