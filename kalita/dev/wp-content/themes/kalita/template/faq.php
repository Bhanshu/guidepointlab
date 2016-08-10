<?php
/*
 Template Name: FAQ's
 */
?>
<?php get_header(); 
global $post;
?>
 
  <section class="section3"> <i class="fa fa-fw fa-twitter"></i>
        <p>kalita <a href="<?php echo get_option_tree('twitter');?>"><?php echo get_option_tree('twitter');?></a> - 
		<?php echo get_option_tree('twitter_news_text');?></p>
  </section>
	 
    <section class="section-faq">
        <div class="container">
            <div class="faq-main">
                <h2><?php the_field('question_frequentes_text',$post->ID);?></h2> </div>
            <div class="faq-main-list">
				<div class="panel-group" id="accordion">
			<?php 
				$i=1;
					$args=array
					(
							'post_type'      =>'questionfrequentes',
							'posts_per_page' => -1,
							'order'          => 'ASC',
					);
					$questionfrequentes = new WP_Query($args);
					
					while( $questionfrequentes -> have_posts() ) : $questionfrequentes -> the_post();
				
					if($i>=1 && $i<=6)
					{
						//echo 'if called';
						//echo $i;
					?>
						<div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">  
								 <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i;?>" aria-expanded="false" class="collapsed">
								<span class="glyphicon glyphicon-plus minus"></span>
								<?php the_title();?>
								</a>
							</h4> 
						</div>
                        <!-- /panel heading -->
                        <div id="collapse<?php echo $i;?>" class="panel-collapse collapse" aria-expanded="true">
                            <div class="panel-body"><?php the_content();?></div>
                        </div>
                        <!-- /panel collapse -->
                    </div>
						
					<?php
					  
					}//end of if
					else
					{
						if($i==7)
						{		
						?>	
								</div>
								<div class="panel-group" id="accordion2">
						<?php
						}//end of 1st if
						
						if($i>=7 && $i<=12)
						{
					   ?>		
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion2" href="#collapse<?php echo $i;?>" aria-expanded="false" class="collapsed">
									<span class="glyphicon glyphicon-plus minus"></span><?php the_title();?>
									</a>
								</h4> 
							</div>
							<!-- /panel heading -->
							<div id="collapse<?php echo $i;?>" class="panel-collapse collapse" aria-expanded="true">
								<div class="panel-body"><?php the_content();?> </div>
							</div>
							<!-- /panel collapse -->
						</div>
						<!-- /panel -->  
							
						<?php
						}//end of 2nd if
						
					}//end of else
				
				    $i++;
					endwhile; 
					wp_reset_query();	
			    ?>
            </div>
    </section>
 
 
<?php get_footer(); ?>