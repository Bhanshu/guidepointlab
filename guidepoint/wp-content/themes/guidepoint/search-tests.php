<?php
/**
 * Template Name: Search Test
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<section class="banner">

<?php while(have_posts()): the_post() ;
$title= get_the_title();
$content= get_the_content(); 
 ?>

  <figure><?php the_post_thumbnail('banner'); ?></figure>
  
  <?php endwhile; wp_reset_query(); ?>
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
<section class="test-categories">
  <div class="container">
    <div class="test-categories-inner">
    <?php $recent = new WP_Query("page_id=7");
	while($recent->have_posts()) : $recent->the_post();?>
	
    <h1> <?php the_field('below_banner_heading'); ?></h1>
      <div class="text">
        <?php the_field('below_banner_text'); ?>
      </div>
    
	<?php endwhile; wp_reset_query(); ?>
      
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
          <li><a href="<?php echo esc_url( $category_link ); ?>">
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
      </div>
    </div>
  </div>
</section>
<section class="featured-tests">
  <div class="container">
    <div class="featured-tests-inner">
      <?php /*?><div class="search-category">
        <div class="search-category-inner">
          <div class="dropdown">
            <button class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">All Categories<i class="fa fa-angle-down"></i></button>
            <ul class="dropdown-menu" id="myid" aria-labelledby="dropdownMenu1">
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
              <li id="<?php echo $category_id; ?>"> <?php echo  $cat->name ;?> </li>
              <?php   
						
						}       
					}
					?>
            </ul>
          </div>
          <div class="dropdown">
            <button class="dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Category<i class="fa fa-angle-down"></i></button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
              <li><a href="#">Category</a></li>
              <li><a href="#">Category 1</a></li>
              <li><a href="#">Category 2</a></li>
              <li><a href="#">Category 3</a></li>
              <li><a href="#">Category 4</a></li>
            </ul>
          </div>
          <button class="button-gray">SEARCH</button>
        </div>
        <div class="note">Enter your desired category</div>
      </div><?php */?>
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
    </div>
  </div>
</section>
<section class="featured-tests">
  <div class="container">
    <div class="featured-tests-inner">
      <?php /*?><div class="search-category">
        <div class="search-category-inner">
          <div class="dropdown">
            <button class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">All Categories<i class="fa fa-angle-down"></i></button>
            <ul class="dropdown-menu" id="myid" aria-labelledby="dropdownMenu1">
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
              <li id="<?php echo $category_id; ?>"> <?php echo  $cat->name ;?> </li>
              <?php   
						
						}       
					}
					?>
            </ul>
          </div>
          <div class="dropdown">
            <button class="dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Category<i class="fa fa-angle-down"></i></button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
              <li><a href="#">Category</a></li>
              <li><a href="#">Category 1</a></li>
              <li><a href="#">Category 2</a></li>
              <li><a href="#">Category 3</a></li>
              <li><a href="#">Category 4</a></li>
            </ul>
          </div>
          <button class="button-gray">SEARCH</button>
        </div>
        <div class="note">Enter your desired category</div>
      </div><?php */?>
      <h1>Most Popular Test</h1>
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
    </div>
  </div>
</section>



<script>
		jQuery("#myid li").click(function() {
    //alert(this.id); // get id of clicked li
	
	 $e = jQuery(this);
        var data = this.id ;
        // gets the id  of select (1 for the first select)
        // You can map this to the corresponding select in database...
        jQuery.ajax({
            type: "POST",
            url: "<?php bloginfo('template_directory'); ?>/productfilter.php",
            data: { "locationSelect" : jQuery(this).val(), "selectid" : data},
            success: function() {
                // Do something here
            }
        });
});
		</script>
<?php get_footer(); ?>
