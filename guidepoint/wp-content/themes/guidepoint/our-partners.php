<?php
/**
 * Template Name: our partners
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
        <section class="community-service-part" data-speed="2" data-type="background">
            <div class="container">
                <div class="community-service-part-inner">
                    <?php the_field('below_featured_test_heading'); ?>
                </div>
            </div>
        </section>
        <section class="our-Partners-3boxs">
            <div class="container">
                <div class="our-Partners-3boxs-inner">
                    <div class="row">
					<?php
					query_posts('cat=12','&posts_per_page=3');
					while (have_posts()) : the_post();			
					?>       <div class="col-sm-4">
                            <div class="our-Partners-3box">
                                <figure>
                                    <a href="<?php the_permalink(); ?> "><?php the_post_thumbnail(); ?></a>
                                </figure>
                                <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                <i class="icons line-icon"></i>
                              <?php  the_content(); ?><a href="<?php the_permalink(); ?>">Learn more</a>
                            </div>
                        </div>
						<?php endwhile; ?>
                      
                    
                    </div>
                </div>
            </div>
        </section>
        <section class="laboratory-partners">
            <div class="container">
                <div class="laboratory-partners-inner">
                    <h4>Laboratory Partners</h4>
                    <div class="laboratory-partners-box">
					 <?php 
	           query_posts( array ( 'post_type' => 'partner','posts_per_page'=>'-1', 'order'=>'ASC'));
			  	global $post;
				while (have_posts()) : the_post();?>
					
					
					
                        <div class="row">
                            <div class="col-sm-2">
                                <figure><?php the_post_thumbnail(); ?></figure>
                            </div>
                            <div class="col-sm-10">
                                <div class="text">
                                    <div class="title"><?php the_title() ?></div>
                                   <?php the_content() ?>
                                </div>
                            </div>
                        </div>
						
						
						<?php $i++; endwhile; ?>
				<?php wp_reset_query(); ?> 
                      
                    </div>
                </div>
            </div>
        </section>
        <section class="our-awards">
            <div class="container">
                <div class="our-awards-inner">
                    <div class="our-awards-box">
                    <div class="row">
                            <div class="col-sm-3 col-xs-5">
                                <figure><img src="<?php the_field('medsherpa_image'); ?>" alt="" title=""></figure>
                            </div>
                            <div class="col-sm-9 col-xs-7">
                                <div class="text">
                                  <?php the_field('medsherpa'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 col-xs-5">
                                <figure><img src="<?php the_field('our_awards_image'); ?>" alt="" title=""></figure>
                            </div>
                            <div class="col-sm-9 col-xs-7">
                                <div class="text">
                                    <?php the_field('our_awards_text'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php get_footer(); ?>