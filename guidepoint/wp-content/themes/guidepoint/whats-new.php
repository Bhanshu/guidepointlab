<?php
/**
 * Template Name: What's New
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>


<script>

jQuery(document).ready(function(){
jQuery(".clickhere").click(function(){
jQuery('.serviceResult').html('<div class="main-load"><img class="loader1" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/loader1.gif"></div>'); 
		var spanvalue= jQuery(this).prev().val();
	
		jQuery(this).addClass('active');
		jQuery.ajax({
			type: "GET",
			url:"<?php bloginfo('template_url'); ?>/ajax/get_new.php",
			data:{spanvalue:spanvalue,format:'raw'},
			success:function(resp){
			//alert(resp);
			//$('#loaddata').html(resp);
			 jQuery('.serviceResult').html(resp);
			//window.location.assign("/new/photo/"+spanvalue);
			}
	    });
	});
	//$('.fancybox').fancybox();
});

</script>





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
        <section class="whats-new">
            <div class="container">
                <div class="whats-new-inner">
                    <h4>Whats New</h4>
                    <div class="whats-new-tabs">
                        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="customm"><a href="<?php echo site_url(); ?>/dev/whats-new/">Show All</a></li>
                        
                        
       <?php
	
		global $post;
		foreach( $wpdb->get_results("select a.*,b.* from im_term_taxonomy as a inner join im_terms as b on a.term_id=b.term_id where a.taxonomy='whats_new_category' ") as $key => $cat_row)
		{   
		$term_id = $cat_row->term_id;
		$cname = $cat_row->name;
		$slug = $cat_row->slug;
		$description=$cat_row->description;
		$term_taxonomy_id= $cat_row->term_taxonomy_id;
		
		?>
     
         <li role="presentation" class="inner_custom">
         <input type="hidden" class="spanvalue" name="cat" value="<?php echo $slug; ?>" />
         <a href="javascript:void(0)" class="clickhere"><?php echo $cname; ?></a></li>
        
        <?php  } ?>
                        
                   </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="show-all">
                                <div class="row">
                                <div class="serviceResult">   
                                <?php
		query_posts('post_type=whats_new&showposts=100&order=desc');
		while (have_posts()) : the_post();
		$postId=get_the_id();
		?>
                             
        <div class="col-md-3 col-sm-4 col-xs-6">
                                        <div class="whats-new-box">
                                            <figure>
                         <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(263,123));?></a>
                                                    <div class="overlay">
                                                        <div class="display-table">
                                                            <div class="display-table-cell">
                                                                <i class="plus-icon"></i>
                                                                <div class="see-now">See Now</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </figure>
                                            <h5><a href="<?php the_permalink(); ?>"><?php echo  substr(the_title('','',FALSE), 0, 20);?></a></h5>
                                            <i class="icons line-icon"></i>
                                        </div>
                                    </div>
                               
        <?php endwhile; wp_reset_query();  ?>
                               </div>        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php get_footer(); ?>