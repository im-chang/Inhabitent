<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
    <div class="shop-content">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


 <section class="product-container">
                <h2>Shop Stuff</h2>
                <?php
                $terms = get_terms( array(
                    'taxonomy' => 'product_type',
                    'hide_empty' => 0,
                ) );
                // d($terms);

                if ( ! empty( $terms ) && ! is_wp_error ( $terms ) ) : ?>

                    <div class="product-blocks">

                    <?php foreach ( $terms as $term ) : ?>

                    
                
                <div class="product-type-wrapper">


                  
                    <ul class="shopnav">
                        <li>
                            <a href="<?php echo get_term_link( $term ); ?>" class="shopbtn">
                            <?php echo $term->name; ?> Stuff</a>
                        </li>
                    </ul>
                </div>

                <?php endforeach; ?>

                <?php endif; ?>
                </div>
                </div>
</section> <!--end of content -->


		<?php if ( have_posts() ) : ?>

			<header class="page-header">
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

                    <?php echo CFS()->get( 'price' ); ?>

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


<?php get_footer(); ?>
