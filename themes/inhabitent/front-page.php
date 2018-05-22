<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
    <header>
    </header>

<div id="content" class="site-content">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <section class="hero-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/inhabitent-logo-full.svg" alt="Inhabitent Hero Logo"/>
            </section>
            <section class="product-container">
                <h2>Shop Stuff</h2>
                <div class="products">
                    <div class="product-type">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product-type-icons/do.svg" alt="do"/>
                        <p>Get back to nature with all the tools and toys you need to enjoy the great outdoors.</p>
                        <p>
                            <a href="">Do Stuff</a>
                        </p>
                        </div>
                        <div class="product-type">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product-type-icons/eat.svg" alt="eat"/>
                        <p>Nothing beats food cooked over a fire. We have all you need for good camping eats.</p>
                        <p>
                            <a href="">Eat Stuff</a>
                        </p>
                        </div>
                        <div class="product-type">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product-type-icons/sleep.svg" alt="sleep"/>
                        <p>Get a good night's rest in the wild in a home away from home that travels well.</p>
                        <p>
                            <a href="">Sleep Stuff</a>
                        </p>
                        </div>
                        <div class="product-type">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product-type-icons/wear.svg" alt="wear"/>
                        <p>From flannel shirts to toques, look the part while roughing it in the great outdoors.</p>
                        <p>
                            <a href="">Wear Stuff</a>
                        </p>
                        </div>
</div>
</div>
</section> <!--end of content -->

<section class="journal">
    <div class="journal-container">
        <h2>Inhabitent Journal</h2>
            <ul>
                <li>
                    <div class="journal-thumbnail">
                        <img width="640px" height="438" src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-photos/van-camper.jpg" alt="van"/>
                    </div>
                    <div class="journal-post">
                        <h3 class="journal-texts">Van Camping Photo Contest</h3>
                    </div>
                    <a class="journal-button" href="readentry">READ ENTRY</a>
                </li>
                <li>
                    <div class="journal-thumbnail">
                        <img width="640px" height="438" src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-photos/warm-cocktail.jpg" alt="cocktail"/>
                    </div>
                    <div class="journal-post">
                        <h3 class="journal-texts">FIRESIDE LIBATIONS: 3 WARM COCKTAIL RECIPES</h3>
                    </div>
                    <a class="journal-button" href="readentry">READ ENTRY</a>
                </li>
                <li>
                    <div class="journal-thumbnail">
                        <img width="640px" height="438" src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-photos/healthy-camp-food.jpg" alt="healthy"/>
                    </div>
                    <div class="journal-post">
                        <h3 class="journal-texts">VHOW TO: EATING HEALTHY MEALS IN THE WILD</h3>
                    </div>
                    <a class="journal-button" href="readentry">READ ENTRY</a>
                </li>
            </ul>
    </div>
</section>
<section class="adventure">
    <h2>LATEST ADVENTURES</h2>
    <ul>
                <li>
                    <div class="adventure-thumbnail">
                        <img width="3000px" height="2000" src="<?php echo get_template_directory_uri(); ?>/assets/images/adventure-photos/canoe-girl.jpg" alt="van"/>
                    </div>
                    <div class="adventure-time">
                        <h3 class="adventure-text">Getting Back to Nature in a Canoe</h3>
                    </div>
                    <a class="adventure-button" href="readmore">READ MORE</a>
                </li>
                <li>
                    <div class="adventure-thumbnail">
                        <img width="3000px" height="2000" src="<?php echo get_template_directory_uri(); ?>/assets/images/adventure-photos/beach-bonfire.jpg" alt="van"/>
                    </div>
                    <div class="adventure-time">
                        <h3 class="adventure-text">A Night with Friends at the Beach</h3>
                    </div>
                    <<a class="adventure-button" href="readmore">READ MORE</a>
                </li>
                <li>
                    <div class="adventure-thumbnail">
                        <img width="3000px" height="2000" src="<?php echo get_template_directory_uri(); ?>/assets/images/adventure-photos/mountain-hikers.jpg" alt="van"/>
                    </div>
                    <div class="adventure-time">
                        <h3 class="adventure-text">Taking in the View at Big Mountain</h3>
                    </div>
                    <a class="adventure-button" href="readmore">READ MORE</a>
                </li>
                <li>
                    <div class="adventure-thumbnail">
                        <img width="3000px" height="2000" src="<?php echo get_template_directory_uri(); ?>/assets/images/adventure-photos/night-sky.jpg" alt="van"/>
                    </div>
                    <div class="adventure-time">
                        <h3 class="adventure-text">Star-Gazing at the Night Sky</h3>
                    </div>
                    <a class="adventure-button" href="readmore">READ MORE</a>
                </li>
                <li>
                    <div class="adventure-thumbnail">
                        <img width="3000px" height="2000" src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-photos/van-camper.jpg" alt="van"/>
                    </div>
                    <div class="adventure-time">
                        <h3 class="adventure-text">Getting Back to Nature in a Canoe</h3>
                    </div>
                    <a class="adventure-button" href="readmore">READ MORE</a>
                </li>
            </ul>
</section>
		</main><!-- #main -->
    </div><!-- #primary -->
</div><!-- #content -->

<?php get_footer(); ?>
