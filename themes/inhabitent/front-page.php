<?php
/**
 * The main template file.
 *
 * @package Inhabitent_Theme
 */
 
get_header(); ?>
   
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <section class="hero-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/inhabitent-logo-full.svg" alt="Inhabitent Hero Logo"/>
            </section>
            <section class="product-container">
                <h2>Shop Stuff</h2>
                <?php
                $terms = get_terms( array(
                    'taxonomy' => 'product_type',
                    'hide_empty' => 0,
                ) );
                // d($terms);
                if ( ! empty( $terms ) && ! is_wp_error ( $terms ) ) : ?>

                    <div class="product-type-blocks">

                    <?php foreach ( $terms as $term ) : ?>

                    
                
                <div class="product-type-block-wrapper">

                <img src="<?php echo get_template_directory_uri() . '/assets/images/product-type-icons/' . $term->slug; ?>.svg"
                    alt="<?php echo $term->name; ?>"/>

                    <p><?php echo $term->description; ?></p>

                    <p>
                        <a href="<?php echo get_term_link( $term ); ?>" class="btn">
                            <?php echo $term->name; ?> Stuff</a>
                    </p>
                </div>

                <?php endforeach; ?>

                <?php endif; ?>
                </div>
                </div>
</section> <!--end of content -->

<section class="journal">
    <div class="journal-container">
        <h2 class="ijournal">Inhabitent Journal</h2>
            <ul class="journal-entries">
                <li>
                    <?php
                    $args = array( 'post_type' => 'post', 'order' => 'DESC', 'posts_per_page' => 3);
                    $journal_posts = get_posts( $args );
                    ?>
                    <?php foreach ($journal_posts as $post ) : setup_postdata ( $post ); ?>
                    <div class="seperate-entries">
                        <div class="journal-image">
                    <?php
                        if ( has_post_thumbnail() ) :
                            the_post_thumbnail( 'large' );
                        endif;
                        // echo the_title;
                        ?>
                        </div>
                        <div class="entry-container">
                        <div class="entry-meta">
                                <?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
                            </div><!-- .entry-meta -->

                            <h2 class="journal-title"><?php the_title(); ?></h2>
                            
                            <a class="btn2" href="<?php echo the_permalink(); ?>">Read More</a>
                        </div>
                    </div>
                    
                    <?php endforeach; wp_reset_postdata(); ?>
                    </div>
                </li>
            </ul>
    </div>
</section>
<section class="adventure">
    <h2>LATEST ADVENTURES</h2>
    <ul>
                <li class="canoe">
                    <div class="adventure-thumbnail">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/adventure-photos/canoe-girl.jpg" alt="canoe"/>
                    </div>
                    <div class="adventure-time">
                        <h3 class="adventure-text">Getting Back to Nature in a Canoe</h3>
                    </div>
                    <a class="adventure-button" href="readmore">READ MORE</a>
                </li>
                <li class="night">
                    <div class="adventure-thumbnail">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/adventure-photos/beach-bonfire.jpg" alt="beach"/>
                    </div>
                    <div class="adventure-time">
                        <h3 class="adventure-text">A Night with Friends at the Beach</h3>
                    </div>
                    <a class="adventure-button" href="readmore">READ MORE</a>
                </li>
                <li class="mountain">
                    <div class="adventure-thumbnail">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/adventure-photos/mountain-hikers.jpg" alt="hikers"/>
                    </div>
                    <div class="adventure-time">
                        <h3 class="adventure-text">Taking in the View at Big Mountain</h3>
                    </div>
                    <a class="adventure-button" href="readmore">READ MORE</a>
                </li>
                <li class="stars">
                    <div class="adventure-thumbnail">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/adventure-photos/night-sky.jpg" alt="stars"/>
                    </div>
                    <div class="adventure-time">
                        <h3 class="adventure-text">Star-Gazing at the Night Sky</h3>
                    </div>
                    <a class="adventure-button" href="readmore">READ MORE</a>
                </li>
    </ul>
</section>
		</main><!-- #main -->
    </div><!-- #primary -->
<?php get_footer(); ?>