<?php
/**
 * Template Name: Quality Compliance
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
        <section class="compliance-statements">
            <div class="container">
                <div class="compliance-statements-inner">
                    <?php the_field('compliance_statements'); ?>
                </div>
            </div>
        </section>
        <section class="hipaa-compliance" data-speed="2" data-type="background">
            <div class="container">
                <div class="hipaa-compliance-inner">
                   <?php the_field('hipaa_compliance'); ?>
                </div>
            </div>
        </section>
        <section class="quality-assurance">
            <div class="container">
                <div class="quality-assurance-inner">
                   <?php the_field('quality_assurance'); ?>
                </div>
            </div>
        </section>
        <section class="licensures">
            <div class="container">
                <div class="licensures-inner">
                    <h4><?php the_field('licensures_and_accreditations_heading'); ?></h4>
                    <div class="licensures-box">
                       <?php the_field('licensures_and_accreditations_text'); ?>
                    </div>
                </div>
            </div>
        </section>
<?php get_footer(); ?>