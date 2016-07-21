<?php
/**
 * Template Name: Aboutus
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
        <section class="knowmore" data-speed="2" data-type="background">
            <div class="container">
                <div class="knowmore-inner">
                   <?php the_field('text_below_featured'); ?>
                </div>
            </div>
        </section>
        <section class="labs-different">
            <div class="container">
                <div class="labs-different-inner">
                    <h4><?php the_field('heading'); ?></h4>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="labs-different-box">
                                <figure>
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <i class="icons guided-diagnostics-icon"></i>
                                        </div>
                                    </div>
                                </figure>
                                <div class="text">
                                   <?php the_field('left_section_first'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="labs-different-box">
                                <figure>
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <i class="icons comprehensive-clinically-icon"></i>
                                        </div>
                                    </div>
                                </figure>
                                <div class="text">
                                   <?php the_field('right_section_first'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="labs-different-box">
                                <figure>
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <i class="icons genetic-icon"></i>
                                        </div>
                                    </div>
                                </figure>
                                <div class="text">
                                   <?php the_field('left_section_second'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="labs-different-box">
                                <figure>
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <i class="icons non-invasive-laboratory-icon"></i>
                                        </div>
                                    </div>
                                </figure>
                                <div class="text">
                                   <?php the_field('right_section_second'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="labs-different-box">
                                <figure>
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <i class="icons enhanced-reports-icon"></i>
                                        </div>
                                    </div>
                                </figure>
                                <div class="text">
                                   <?php the_field('left_section_third'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="labs-different-box">
                                <figure>
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <i class="icons dna-risk-icon"></i>
                                        </div>
                                    </div>
                                </figure>
                                <div class="text">
                                   <?php the_field('right_section_third'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="labs-different-box">
                                <figure>
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <i class="icons personal-health-plans-icon"></i>
                                        </div>
                                    </div>
                                </figure>
                                <div class="text">
                                    <h6><?php the_field('first_point'); ?></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="labs-different-box">
                                <figure>
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <i class="icons dietary-counseling-icon"></i>
                                        </div>
                                    </div>
                                </figure>
                                <div class="text">
                                    <h6><?php the_field('second_point'); ?></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="labs-different-box">
                                <figure>
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <i class="icons medically-relevant-icon"></i>
                                        </div>
                                    </div>
                                </figure>
                                <div class="text">
                                    <h6><?php the_field('third_point'); ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php get_footer(); ?>