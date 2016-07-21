<?php
/**
 * Template Name: our people
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
 <section class="banner">
            <figure><img src=" <?php the_field('banner_image'); ?>" alt="" title=""></figure>
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
        <section class="our-success">
            <div class="container">
                <div class="our-success-inner">
                    <div class="our-success-box">
                     <?php the_field('text_below_featured'); ?>
                    </div>
                    <div class="our-success-tabs">
                        <ul class="nav nav-tabs" role="tablist">
						
									<?php 
						   query_posts( array ( 'post_type' => 'people','posts_per_page'=>'5', 'order'=>'ASC'));
							global $post; $k=1;
							while (have_posts()) : the_post();
							if($k==1){
							?>
				
                            <li role="presentation" class="active"><a href="#<?php echo $k; ?>" aria-controls="crp" role="tab" data-toggle="tab"><?php the_title(); ?></a></li>
							<?php  } else{ ?>
							<li role="presentation" class=""><a href="#<?php echo $k; ?>" aria-controls="crp" role="tab" data-toggle="tab"><?php the_title(); ?></a></li>
							<?php } ?>
							
							<?php $k++; endwhile; ?>
							<?php wp_reset_query(); ?> 
							
                        </ul>
                        <div class="tab-content">
						<?php 
						   query_posts( array ( 'post_type' => 'people','posts_per_page'=>'5', 'order'=>'ASC'));
							global $post; $k=1;
							while (have_posts()) : the_post();
							if($k==1){
							?>
						
                            <div role="tabpanel" class="tab-pane active" id="<?php echo $k; ?>">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <figure><?php the_post_thumbnail(); ?></figure>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="text">
                                           <?php the_content(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
							
							<?php } else { ?>
							  <div role="tabpanel" class="tab-pane" id="<?php echo $k; ?>">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <figure><?php the_post_thumbnail(); ?></figure>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="text">
                                           <?php the_content(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
							
							
							
							<?php } $k++; endwhile; ?>
							<?php wp_reset_query(); ?> 
                    
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php get_footer(); ?>