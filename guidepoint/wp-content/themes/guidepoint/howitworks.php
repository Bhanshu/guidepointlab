<?php
/**
 * Template Name: How it Works
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
    <section class="banner">
            <figure><img src="<?php the_field('banner_image'); ?>" alt="" title=""></figure>
            <div class="banner-caption">
                <div class="container">
                    <div class="figcaption">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <div class="text">
                                    <div class="title"><?php the_field('banner_heading'); ?></div>
                                   <?php the_field('banner_text'); ?>
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
  <section class="process">
            <div class="container">
                <div class="process-inner">
                    <?php the_field('text_below_banner'); ?>
                    <div class="process-box">
                       <?php the_field('content_first_part'); ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="process">
            <div class="container">
                <div class="process-inner">
                     <?php the_field('content_second_part'); ?>
                </div>
            </div>
        </section>
<?php get_footer(); ?>