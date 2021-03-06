<?php
/**
 * Template Name: Patients
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<?php 
  $post_id =210;
  ?>
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
                    <h1>Featured Tests</h1>
                    <div class="text">
                        <?php echo ot_get_option("featured_test"); ?>
                    </div>
                    <div class="featured-tests-list">
                        <ul>
							 <?php                    
                        $args = array(
                            'post_type' => 'product',
                            'meta_key' => '_featured',
                            'meta_value' => 'yes',
                            'posts_per_page' => 4
                        );
                         
                        $featured_query = new WP_Query( $args );
                            
                        if ($featured_query->have_posts()) : 
                        
                            while ($featured_query->have_posts()) : 
                            
                                $featured_query->the_post();
                                
                                $product = get_product( $featured_query->post->ID ); ?>
                                
                                <li>
                                <div class="featured-tests-list-box">
                                    <a href="<?php the_permalink(); ?>">
                                        <figure><span><i class="icons <?php the_field('icon_class'); ?>"></i></span></figure>
                                        <p><?php the_title(); ?></p>
                                    </a>
                                </div>
                            </li>
                                
                         <?php   endwhile;
                            
                        endif;
                        
                        wp_reset_query(); 
                        
                        ?>
                                                    

                        </ul>
                    </div>
                </div>
            </div>
        </section>
		<section class="for-paragraph" >
		
		<div>
		<?php if (is_page($post_id ) ):?>
             <h2><?php the_title();?></h2>
             <?php endif; ?>
		
		<?php the_content();?>
		</div>
		
		</section>
        <section class="for-patients-points" data-speed="2" data-type="background">
            <h2>ADVANTAGES</h2>
            

            <div class="container">
                <div class="for-patients-points-inner">
                    <div class="for-patients-points-box">
                        <?php the_field('text_below_featured_text'); ?>
                    </div>
                    <div class="for-patients-points-box">
                       <?php the_field('second_text_below_featured_text'); ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="for-patients-knowledge">
            <div class="container">
                <div class="for-patients-knowledge-inner">
                   <?php the_field('below_text'); ?>
                </div>
            </div>
        </section>

<?php get_footer(); ?>