<?php
/*
 Template Name: Actualités
 */
?>
<?php get_header(); 


		function get_numerics ($str)
		{
		preg_match_all('/\d+/', $str, $matches);
		return $matches[0];
		}
?>
  <section class="section3"> <i class="fa fa-fw fa-twitter"></i>
        <p>kalita <a href="<?php echo get_option_tree('twitter');?>"><?php echo get_option_tree('twitter');?></a> - 
		<?php echo get_option_tree('twitter_news_text');?></p>
    </section>
  <section>
        <div class="actualities">
            <div class="container">
                <h5>ACTUALITES</h5>
                <div class="actualities-main">
					<div class="mosaicflow__column">
				<?php 
					$i=0;
					$args=array
					(
							'post_type'      =>'post',
							'posts_per_page' => -1,
							'order'          => 'ASC',
					);
					$act_post = new WP_Query($args);
					
					while( $act_post -> have_posts() ) : $act_post -> the_post();
					
						$show=get_field('show_on_front',$act_post->ID);
	
						switch ($show) 
						{
							case "Image":	
								?>	
									<div class="mosaicflow__item">
										<div class="actualities-img"> <img src="<?php echo get_template_directory_uri();?>/images/actualities-img1.jpg">
											<div class="actualities-inner"> <h2><a href="#"><?php echo strtoupper (the_title());?></a></h2>
												<?php the_content();?> <small><?php echo get_the_date(); ?> / <a href="#"> 2 Comments</a></small> 
											</div>
										</div>
									</div>
								<?php break;
								
							case "Gallery":
								
								?>
										<div class="mosaicflow__item">
											<div class="actualities-slider">
												<div id="myCarousel" class="carousel slide" data-ride="carousel">
													<div class="carousel-inner" role="listbox">
												<?php
												// echo '<pre>'; 												
												 // print_r($act_post);
												 // echo '</pre>';
												  $one1 = get_post_meta(186,'gallery',true); 	
												  $arr1=get_numerics($one1);
													$j=0;
													foreach($arr1 as $val1)
													{
														$small_image_url1 = wp_get_attachment_image_src($val1, 'full');
												
														if($j==0)
														{
												?>	
														<div class="item active"><img src="<?php echo $small_image_url1[0]; ?>"> 
														</div>
												<?php		
														}
														else
														{
												?>
															<div class="item"><img src="<?php echo $small_image_url1[0]; ?>"> 
														</div>
												<?php		
														}
														$j++;
													}
												?>
													</div>
													<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
													<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
												</div>
												<div class="actualities-inner">
														<h2><a href="#"><?php echo strtoupper (the_title());?></a></h2>
													<?php the_content();?> <small><?php echo get_the_date(); ?> / <a href=""> 1 Comments</a></small> 
												</div>
											</div>
										</div>
								
								<?php break;
								
							case "Audio":
								
								?>
								
									 <div class="mosaicflow__item">
											<div class="actualities-audio"> <img src="<?php echo get_template_directory_uri();?>/images/audio.jpg">
												<div class="actualities-inner">
												    <h2><a href="#"><?php echo strtoupper (the_title());?></a></h2>
													<?php the_content();?> <small><?php echo get_the_date(); ?> / <a href=""> 2 Comments</a></small> </div>
											</div>
									</div>
								
								<?php break;
								
							case "Video":
								
								?>
									
										<div class="mosaicflow__item">
											<div class="actualities-video"> 
											<?php the_field("video",$act_post->ID);?> 
												<div class="actualities-inner">
													<h2><a href="#"><?php echo strtoupper (the_title());?></a></h2>
													<?php the_content();?>
													<small><?php echo get_the_date(); ?> / <a href=""> 2 Comments</a></small> 
												</div>
											</div>
										</div>
									
								<?php break;

							case "Quote":
							?>
									<div class="mosaicflow__item">
											<div class="actualities-quote">
												<div class="actualities-inner"> <small><?php the_title();?> / <a href=""> 0 Comments</a></small>
													<div class="quotes">
														<?php the_content();?>
													</div>
												</div>
											</div>
										</div>
							<?php break;
                            								
							default:
								echo "Case Default Front end show only image";
						}//end of switch
					$i++;
					if($i%3==0)
					{
					?>
						</div>
							<div class="mosaicflow__column">
					<?php
					}						
					endwhile; 
					wp_reset_query();
					
				?>      
                </div>
                
                <div class="actualities-btn">
                    <button type="submit" class="show-more-btn">SHOW MORE </button>
                </div>
                
            </div>
        </div>
    </section> 
 
 
 
<?php get_footer(); ?>