<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	 <section class="subscribe-area">
            <div class="container">
                <div class="subscribe-area-inner">
                    <h3>Subscribe To Our Updates</h3>
                    <div class="subscribe-form">
                     <?php echo do_shortcode('[mc4wp_form id="224"]');?>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer">
            <div class="container">
                <div class="widgets">
                    <div class="row">
                        <div class="col-md-3 col-xs-6">
                            <div class="widget">
                                <h6>About guide point</h6>
                              <?php dynamic_sidebar('sidebar-6'); ?>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <div class="widget">
                                <h6>Test categories</h6>
                                <ul class="footer-link">
							<?php 	$args = array(
								'number'     => $number,
								'orderby'    => 'title',
								'order'      => 'ASC',
								'hide_empty' => $hide_empty,
								'include'    => $ids
								
							);
							$product_categories = get_terms( 'product_cat', $args );
							$count = count($product_categories);
							$i=1;
							if ( $count > 0 ){
								foreach ( $product_categories as $product_category ) {
									echo ' <li><a href="' . get_term_link( $product_category ) . '">' . $product_category->name . '</a></li>';
								   if($i==6){
									   
									   break;
								   }
								 
									$i++;    
									} }?>
                                   
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <div class="widget">
                                <h6>other links</h6>
                                <ul class="footer-link">
                                    <?php
				$defaults2 = array(
				'theme_location'  => '',
				'menu'            => 'footermenu',
				'container'       => '',
				'container_class' => '',
				'container_id'    => '',
				'menu_class'      => 'menu',
				'menu_id'         => '',
				'echo'            => true,
				'fallback_cb'     => 'wp_page_menu',
				'before'          => '',
				'after'           => '',
				'link_before'     => '',
				'link_after'      => '',
				'items_wrap'      => '%3$s',
				'depth'           => 0,
				'walker'          => ''
				);

				wp_nav_menu( $defaults2 );
				?>     
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <div class="widget">
                                <h6>Contact Information</h6>
                                <address>
                                     <?php dynamic_sidebar('sidebar-7'); ?>
                                </address>
                                <ul class="social">
                                    <?php dynamic_sidebar('sidebar-8'); ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-inner">
                <div class="container">
                    <div class="copyright"> <?php dynamic_sidebar('sidebar-9'); ?>
                        Powered By: <a target="_blank" href="http://www.imarkinfotech.com"><u>Imark Infotech</u></a></div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Jquery Files Link -->
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-2.1.4.min.js"></script>

    <!-- Sticky Nav -->
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.sticky.js"></script>
    <script type="text/javascript">
        jQuery(window).load(function () {
            jQuery("#nav").sticky({
                topSpacing: 0
            });
        });
    </script>

    <!-- Carousel Testimonial Slider -->
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/owl.carousel.min.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            jQuery(".patient-stories-slider").owlCarousel({
                navigation: false,
                slideSpeed: 1000,
                paginationSpeed: 1000,
                autoPlay: 8000,
                singleItem: true
            });
			
			jQuery('.whats-new-tabs ul li.customm').addClass('active');
			jQuery('.whats-new-tabs ul li.inner_custom').on('click', function(){
			jQuery('.whats-new-tabs ul li.customm').removeClass('active');
			});
        });
    </script>

    <!-- IE Smooth Scrool -->
    <script type="text/javascript">
        if (navigator.userAgent.match(/Trident\/7\./)) { // if IE
            jQuery('body').on("mousewheel", function () {
                // remove default behavior
                event.preventDefault();

                //scroll without smoothing
                var wheelDelta = event.wheelDelta;
                var currentScrollPosition = window.pageYOffset;
                window.scrollTo(0, currentScrollPosition - wheelDelta);
            });
        }
		
		if(jQuery("select option:selected").index() > 0) {
		  jQuery("select option:selected").index();
		}
    </script>

    <!-- Mobile Menu -->
    <script type="text/javascript">
        
        jQuery(".menu-item:has(ul)").click(function () {
            jQuery(this).toggleClass("sub-open");
            jQuery.not(this).removeClass("sub-open");
        });
		
jQuery(".close").on("click",function(){
  jQuery("form p input").removeClass("error");
  jQuery("form p label").removeClass("error");
  jQuery("form p span > label").remove("label");
  jQuery('form').trigger( 'reset' );
});
		
       jQuery(".banner-caption .text").addClass('wow slideInLeft'); 
    </script>
    	 <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
      <script>
       new WOW().init();
      </script>
    
    

    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>

<?php wp_footer(); ?>

</body>
</html>
