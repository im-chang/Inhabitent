<?php
/**
 * Template Name: About Page
 * 
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->

			<div class="entry-content">
			<?php 
			$our_story_props = CFS()->get_field_info( 'our_story' );
			echo $our_story_props['label'];
			?>
			<?php echo CFS()->get('our_story') ?>

			<h2>Our Team</h2>
			<?php echo CFS()->get('our_team') ?>
				<!-- GET OUR CUSTOM FIELDS HERE!! -->
			<?php the_content(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
