<?php
/**
 * Template Name: Testimonials
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
		 <section class="featured-tests">
            <div class="container">
               <div class="featured-tests-inner">
                    <h1>Testimonials</h1>
                    <div class="text">
                        <?php echo ot_get_option("Testimonials"); ?>
                    </div>
                    <div class="featured-tests-list-testimonial">
                        <ul>
							 <?php                    
                                 $my_query = new WP_Query('post_type=Testimonials&posts_per_page=5');                
                               while ($my_query->have_posts()) : $my_query->the_post(); ?>
                                

                                
                                <li>
                                <div class="featured-tests-list-box-testimonial">
                                     <?php the_title(); ?>
									   <?php the_content(); ?>
                                </div>
                            </li>
                                
                         <?php  
						 endwhile;
                        wp_reset_query(); 
                        
                        ?>
                                                    

                        </ul>
                    </div>
                </div>
            </div>
        </section>






<?php get_footer(); ?>