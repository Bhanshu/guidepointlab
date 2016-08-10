<?php
/**
 * Template Name: Education Center
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

<section class="education-search">
    <h2>SEARCH BOLG OR WEBSITE</h2>
    <span class="fa fa-search" aria-hidden="true"></span><input name="s" class="education-search-block" type="text" placeholder="Search">
    
</section>

        <section class="education-center">
            <div class="container">
                <div class="education-center-inner">
                   <?php the_field('content_below_banner'); ?>
                </div>
            </div>
        </section>
        <section class="patient-stories">
            <div class="container">
                <div class="patient-stories-inner">
                    <h4>Patient Stories</h4>
                    <div class="patient-stories-slider-main">
                        <div class="patient-stories-slider owl-carousel">
                        <?php 
	           query_posts( array ( 'post_type' => 'slider','posts_per_page'=>'4', 'order'=>'ASC'));
			  	global $post;
				while (have_posts()) : the_post();?>
							 <div class="item">
                                <div class="patient-stories-slide">
                                   <h4> <?php the_title(); ?></h4>
								  <?php the_content(); ?>
                                    <a href="<?php the_field('link_test'); ?>" class="read-more">Read More</a>
                                    <div class="name"> <?php the_field('name_test'); ?></div>
                                </div>
                            </div>
				<?php $i++; endwhile; ?>
				<?php wp_reset_query(); ?> 
                      
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="medical-news">
            <div class="container">
                <div class="medical-news-inner">
                    <div class="heading">
                        <h4>Medical News</h4>
					<p><?php the_field('medical'); ?></p>
						</div>
                    <div class="row">
					<?php   $args = array( 'numberposts' => '3' );
							$recent_posts = wp_get_recent_posts( $args );
							foreach( $recent_posts as $recent ){ 
							//echo '<pre>';print_r($recent);echo '</pre>';
							?>
					
					
                        <div class="col-sm-4">
                            <div class="medical-news-box">
                                <figure>
                                    <a href="<?php echo esc_url( get_permalink($recent[ID]) ); ?>"><?php echo get_the_post_thumbnail( $recent[ID], 'full' ); ?></a>
                                </figure>
                                <h5><a href="<?php echo esc_url( get_permalink($recent[ID]) ); ?>"><?php echo $recent['post_title'];?></a></h5>
                                <i class="icons line-icon"></i>
                                <div class="meta"><?php echo mysql2date( 'F',$recent["post_date"]);?> <?php echo mysql2date( 'j',$recent["post_date"]);?>, <?php echo mysql2date( 'Y',$recent["post_date"]);?> <span>/</span> by <?php echo $author = get_the_author(); ?> <span>/</span> <?php  $category_detail=get_the_category($recent[ID]);
								echo $category_detail[0]->name; ?></div>
                                <?php echo substr($recent["post_content"],0,150); ?>
                            </div>
                        </div>
						
							<?php 	 } ?> 
                 
                  
                    </div>
                </div>
            </div>
        </section>

<?php get_footer(); ?>