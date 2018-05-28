<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<div class="shop-stuffs">
	<div id="primary" class="content-shop-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			<div class="shop-items">
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail( 'full' ); ?>
                    <?php endif; ?>

                    <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
					<span class="individual-price">
                    <?php echo CFS()->get( 'price' ); ?>
					</span>
                </header><!-- .entry-header -->

            </article><!-- #post-## -->

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
</div>
		</main><!-- #main -->
    </div><!-- #primary -->
                </div>
</div>
		</main><!-- #main -->
	</div><!-- #primary -->

</div>
<?php get_footer(); ?>
