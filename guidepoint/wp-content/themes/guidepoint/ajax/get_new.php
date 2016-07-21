<?php
include('../../../../wp-config.php');
global $post;
$postId=get_the_id();
			 $slug= $_GET['spanvalue'];
		 	?>
			<?php
			$count=0;
            query_posts('post_type=whats_new&order=DESC&whats_new_category='.$slug);
            while (have_posts()) : the_post();
            ?>
                
            
            <div class="col-sm-3 col-xs-6">
                                        <div class="whats-new-box">
                                            <figure>
                         <a href="<?php the_permalink();?>"><?php the_post_thumbnail(array(263,123));?></a>
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
           
            
        <?php 
		$count++;
		endwhile ; wp_reset_query();  ?>
        
         <?php if($count==0){ ?>
                  <div class="container">
      <div class="result"><p>No content found in this category</p></div>
      
    </div>
						<?php }  ?>
         
            
    