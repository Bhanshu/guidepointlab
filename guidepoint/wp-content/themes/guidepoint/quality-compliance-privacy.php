<?php
/**
 * Template Name: Quality Privacy
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
                                    <div class="title"> <?php the_field('banner_heading'); ?></div>
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
         <section class="featured-tests">
            <div class="container">
              <div class="featured-tests-inner">
                    <h1>Featured Tests</h1>
                    <div class="text">
                        <?php echo ot_get_option("featured_test"); ?>
                    </div>
                    <div class="featured-tests-list">
                      <?php echo do_shortcode('[featured_products per_page="4" columns="4"]');?>
                    </div>
                </div>
            </div>
        </section>
        <section class="privacy-practices">
            <div class="container">
                <div class="privacy-practices-inner">
                     <?php the_field('privacy_practices'); ?>
                </div>
            </div>
        </section>
        <section class="privacy-practices">
            <div class="container">
                <div class="privacy-practices-inner">
                    <?php the_field('uses_and_disclosures_with_your_authorization'); ?>
                </div>
            </div>
        </section>
        <section class="privacy-practices">
            <div class="container">
                <div class="privacy-practices-inner">
                    <?php the_field('your_individual_rights'); ?>
                </div>
            </div>
        </section>
        <section class="privacy-practices">
            <div class="container">
                <div class="privacy-practices-inner">
                    <?php the_field('changes_to_this_notice'); ?>
                </div>
            </div>
        </section>
        <section class="qus-conc" data-speed="2" data-type="background">
            <div class="container">
                <div class="qus-conc-inner">
                   <?php the_field('questions,_concerns,_or_complaints'); ?></div>
            </div>
        </section>
<?php get_footer(); ?>