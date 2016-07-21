<?php
/**
 * Template Name: Health Consulting
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
        <section class="gp-health-consultant">
            <div class="container">
                <div class="gp-health-consultant-inner">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="gp-health-consultant-box">
                               <?php the_field('text_below_featured_left_section'); ?>
							   <!--<a href="#" class="button-green">SCHEDULE CONSULTAION</a>-->
							   <button type="button" class="button-green" data-toggle="modal" data-target="#myModal">SCHEDULE CONSULTATION</button>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="gp-health-consultant-box">
                               <?php the_field('text_below_featured_right_section'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="types-of-telemedicine">
            <div class="container">
                <div class="types-of-telemedicine-inner">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="types-of-telemedicine-box left-side">
                                <div class="types-of-telemedicine-box-inner">
                                    <?php the_field('text_with_doctor_image_left_section'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="types-of-telemedicine-box right-side">
                                <?php the_field('text_with_doctor_image_right_section'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="cb-medical-records">
            <div class="container">
                <div class="cb-medical-records-inner">
                    <div class="row">
                        <div class="col-md-7 col-sm-6">
                            <div class="cb-medical-records-box">
                               <?php the_field('text_above_subscription_left'); ?>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-6">
                            <div class="cb-medical-records-box">
                                <figure><img src="<?php the_field('image_above_subscription_right_section'); ?>" alt="" title=""></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		<!-- Trigger the modal with a button -->
<!-- Modal -->
<div id="myModal" class="modal fade sc-popup" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">SCHEDULE CONSULTATION</h4>
      </div>
      <div class="modal-body">
       <?php echo do_shortcode('[contact-form-7 id="222" title="Schedule consultation"]'); ?>
      </div>
    </div>

  </div>
</div>
<?php get_footer(); ?>