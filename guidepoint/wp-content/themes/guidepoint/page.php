<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<section class="banner">
    <figure><img src="<?php bloginfo('template_directory'); ?>/images/search-tests-banner.jpg" alt="" title=""></figure>
    <div class="banner-caption">
        <div class="container">
            <div class="figcaption">
                <div class="display-table">
                    <div class="display-table-cell">
                        <div class="text">
                            <div class="title">SEARCH TESTS</div>
                            <p>Suspendisse gravida, ex eget mattis accumsan, enim quam accumsan leo, sit amet molestie augue lectus eget augue. Nunc vel faucibus eros. dui accumsan et.</p>
                        </div>
                        <div class="search-category">
                            <div class="search-category-inner">
                                <?php get_sidebar('product-form'); ?>
                            </div>
                            <div class="note">Enter your desired category</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="default-page">
    <div class="container">
        <div class="default-page-inner">
            
            <?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'content', 'page' );
        // End the loop.
		endwhile;
		?>
        </div>
    </div>
</section>

<?php get_footer(); ?>