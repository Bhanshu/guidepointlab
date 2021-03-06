<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<section class="default-page">
    <div class="container">
        <div class="default-page-inner">
            <div class="single-post-page">
                <?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			/*
			 * Include the post format-specific template for the content. If you want to
			 * use this in a child theme, then include a file called called content-___.php
			 * (where ___ is the post format) and that will be used instead.
			 */
			get_template_part( 'content', get_post_format() );

			
		endwhile;
		?>
            </div>
        </div>
    </div>
</section>
<!-- .content-area -->

<?php get_footer(); ?>
