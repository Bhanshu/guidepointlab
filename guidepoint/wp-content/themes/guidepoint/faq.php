<?php
/**
 * Template Name: faq
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
		<div class="main-class">
		<?php                    
                                 $my_query = new WP_Query('post_type=faq&posts_per_page=-1');                
                               while ($my_query->have_posts()) : $my_query->the_post(); ?>
               <div class="faq-inner-class">
								 <div class="faq-questions-class">
								      <h2><?php the_title(); ?></h2>
								 </div>
								 <div class="faq-answers-class">
									  <?php the_content(); ?>
								  </div>
		            </div>						  
					<?php  
						 endwhile;
                        wp_reset_query(); 
                        
                        ?>
				
		 </div>
                                

<?php get_footer(); ?>