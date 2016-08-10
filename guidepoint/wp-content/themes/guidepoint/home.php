<?php
/**
 * Template Name: Home Page
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
            <div class="wow slideInLeft">
              <div class="title ">
                <?php the_field('banner_heading'); ?>
              </div>
                </div>
              <?php the_field('banner_text'); ?>
              <a href="<?php the_field('banner_button_link'); ?>" class="button-transparent">
              <?php the_field('banner_button_text'); ?>
              </a> </div>
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
<section class="test-categories">
<div class="container">
<div class="test-categories-inner">
<h1>
  <?php the_field('below_banner_heading'); ?>
</h1>
<div class="text">
  <?php the_field('below_banner_text'); ?>
</div>
<div class="test-categories-list">
<ul>
<?php

					  $taxonomy     = 'product_cat';
					  $orderby      = 'name';  
					  $show_count   = 0;      // 1 for yes, 0 for no
					  $pad_counts   = 0;      // 1 for yes, 0 for no
					  $hierarchical = 1;      // 1 for yes, 0 for no  
					  $title        = '';  
					  $empty        = 0;
					
					  $args = array(
							 'taxonomy'     => $taxonomy,
							 'orderby'      => $orderby,
							 'show_count'   => $show_count,
							 'pad_counts'   => $pad_counts,
							 'hierarchical' => $hierarchical,
							 'title_li'     => $title,
							 'hide_empty'   => $empty,
							 'posts_per_page' => 3
					  );
					 $all_categories = get_categories( $args );
					 foreach ($all_categories as $cat) {
						if($cat->category_parent == 0) {
							$category_id = $cat->term_id;       
							//echo '<br /><a href="'. get_term_link($cat->slug, 'product_cat') .'">'. $cat->name .'</a>'; 
							 $category_link = get_category_link( $category_id ); ?>
<li>
    <a href="<?php echo esc_url( $category_link ); ?>">
  <figure>
    <div class="display-table">
      <div class="display-table-cell"><i class="icons <?php the_field('icon_class1', $taxonomy . '_' . $category_id);?>"></i></div>
    </div>
  </figure>
  <h5><?php echo  $cat->name ;?></h5>
  <p><?php echo substr($cat->category_description,0,50)  ;?>...</p></a>
</li>
<?php   
						
						}       
					}
					?>
    </ul>    
   <a href="#"> <button class="test-categories-list-button" type="submit">ORDER ONLINE NOW!</button></a>
    
</div>
</div>
</div>
</section>
<section class="featured-tests">
  <div class="container">
    <div class="featured-tests-inner">
      <h1>Featured Tests</h1>
      <div class="text"> <?php echo ot_get_option("featured_test"); ?> </div>
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
            <div class="featured-tests-list-box"> <a href="<?php the_permalink(); ?>">
              <figure><span><i class="icons <?php the_field('icon_class'); ?>"></i></span></figure>
              <p>
                <?php the_title(); ?>
              </p>
              </a> </div>
          </li>
          <?php   endwhile;
                            
                        endif;
                        
                        wp_reset_query(); 
                        
                        ?>
        </ul>
      </div>
      <div class="health-consulting">
        <div class="row">
          <div class="col-sm-6">
            <figure>
              <div class="figure-inner"><img src="<?php the_field('health_consulting_image'); ?>" alt="" title=""></div>
              <div class="overlay">Trusted Services</div>
            </figure>
          </div>
          <div class="col-sm-6">
            <div class="text">
              <?php the_field('health_consulting_text'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="aboutus-area" data-speed="2" data-type="background">
<div class="container">
<div class="aboutus-area-inner">
  <h1>
    <?php the_field('about_us_heading'); ?>
  </h1>
  <div class="text">
    <?php the_field('about_us_text'); ?>
  </div>
  <div class="aboutus-tabs">
    <ul class="nav nav-tabs" role="tablist">
      <?php 
	           query_posts( array ( 'post_type' => 'abouthome','posts_per_page'=>'6', 'order'=>'ASC'));
			  	global $post;
				$i=1;
				while (have_posts()) : the_post();
				if($i==1){
				?>
      <li role="presentation" class="active"><a href="#<?php echo $i; ?>" aria-controls="crp" role="tab" data-toggle="tab">
        <?php the_title(); ?>
        </a></li>
      <?php } else{ ?>
      <li role="presentation" class=""><a href="#<?php echo $i; ?>" aria-controls="crp" role="tab" data-toggle="tab">
        <?php the_title(); ?>
        </a></li>
      <?php } $i++; endwhile; ?>
      <?php wp_reset_query(); ?>
    </ul>
    <div class="tab-content">
      <?php 
	           query_posts( array ( 'post_type' => 'abouthome','posts_per_page'=>'6', 'order'=>'ASC'));
			  	global $post;
				$i=1;
				while (have_posts()) : the_post(); 							
							 if($i==1){?>
      <div role="tabpanel" class="tab-pane active" id="<?php echo $i; ?>">
        <?php } else{ ?>
        <div role="tabpanel" class="tab-pane" id="<?php echo $i; ?>">
          <?php } ?>
          <div class="row">
            <div class="col-sm-6">
              <figure>
                <?php the_post_thumbnail(); ?>
              </figure>
            </div>
            <div class="col-sm-6">
              <div class="text">
                <div class="title">
                  <?php the_field('title_top'); ?>
                </div>
                <?php the_content(); ?>
              </div>
            </div>
          </div>
        </div>
        <?php $i++; endwhile; ?>
        <?php wp_reset_query(); ?>
      </div>
    </div>
  </div>
</div>
</section>
<?php get_footer(); ?>
