<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

 <footer>
	 <div class="footer1">
    <section class="section7">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="section7-col1">
					<!--**********  GETTING CONTACT DETAILs *************** -->
                        <h2><?php echo get_option_tree('kalita_heading');?></h2>
                        <p><?php echo get_option_tree('addres');?>
						
                            <br><?php echo get_option_tree('email_text');?><a href="mailto:<?php echo get_option_tree('email_address');?>" target="_top"><?php echo get_option_tree('email_address');?></a>
							
                            <br><?php echo get_option_tree('phone_text');?><a href="tel:+<?php echo get_option_tree('phone_number');?>">&nbsp;+<?php echo get_option_tree('phone_number');?></a>
							
                            <br><?php echo get_option_tree('fax_text');?><a href="#">&nbsp;+<?php echo get_option_tree('fax_number');?></a>
						</p>
							
                        <ul class="social-links-footer">
                            <li><a href="<?php echo get_option_tree('twitter');?>" class="btn-social"><i class="fa fa-fw fa-twitter"></i></a></li>
                            <li><a href="<?php echo get_option_tree('facebook');?>" class="btn-social"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="<?php echo get_option_tree('google_plus');?>" class="btn-social"><i class="fa fa-google-plus" aria-hidden="true"></i></i></a></li>
                            <li><a href="<?php echo get_option_tree('instagram');?>" class="btn-social"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="<?php echo get_option_tree('tumblr');?>" class="btn-social"><i class="fa fa-tumblr" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="section7-col2">
                        <h2>SUR NOTRE SITE</h2>
                        <ul class="section7-col2-list">
                            <!--START CODE USE FOR GETTING FOOTER MENU SUR NOTRE SITE-->
								<?php

									$defaults = array(
									'theme_location'  => '',
									'menu'            => 'Sur_Notre_Site_Footer_Menu',
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

									wp_nav_menu( $defaults );
							?>
						<!--END OF CODE USE FOR GETTING FOOTER MENU SUR NOTRE SITE-->
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="section7-col2">
                        <h2>QUELQUES LIENS UTILES</h2>
                        <ul class="section7-col2-list">
						
                            <!--START CODE USE FOR GETTING FOOTER MENU QUELQUES LIENS UTILES-->
								<?php

									$defaults = array(
									'theme_location'  => '',
									'menu'            => 'Quelques_Liens_Utiles_Footer_Menu',
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

									wp_nav_menu( $defaults );
							?>
						<!--END OF CODE USE FOR GETTING FOOTER MENU QUELQUES LIENS UTILES-->
							
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="section7-col3">
						<a href="<?php echo get_option_tree('cgu_url');?>"><h2><?php echo get_option_tree('cgu');?></h2></a> 
						<a href="<?php echo get_option_tree('mentions_l_gales_url');?>"><h3><?php echo get_option_tree('mentions_l_gales');?></h3></a> 
						<a href="<?php echo get_option_tree('plan_du_site_url');?>"><h4><?php echo get_option_tree('plan_du_site');?></h4></a> 
					</div>
                </div>
            </div>
        </div>
        <div class="arrow-scroll"> <a href="#0" class="cd-top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a> </div>
    </section>
	</div>
		<div class="footer2">
        <div class="container"> 
          
                
                
                    <img src="<?php echo get_template_directory_uri();?>/images/footer1.jpg" class="footer-first-img">

             <div class="powered-by">
                    <p>Powered By:
                        <a href="http://www.zats.biz/" target="_blank">zats</a>
                    </p>
                </div>
            
            
                    <img src="<?php echo get_template_directory_uri();?>/images/footer2.png" class="footer-last-img"> 
        </div>
            
		</div>

    </footer>
    
<!--Script by html designer-->	
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo get_template_directory_uri();?>/js/main.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/js/bootstrap.min.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/js/parallax.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/js/parallax2.js"></script>	
    <script src="<?php echo get_template_directory_uri();?>/js/modernizr.js"></script>
    <script>
        jQuery(document).ready(function () {
            //Check to see if the window is top if not then display button
            jQuery(window).scroll(function () {
                if (jQuery(this).scrollTop() > 100) {
                    jQuery('.scrollToTop').fadeIn();
                }
                else {
                    jQuery('.scrollToTop').fadeOut();
                }
            });
            //Click event to scroll to top
            jQuery('.scrollToTop').click(function () {
                jQuery('html, body').animate({
                    scrollTop: 0
                }, 800);
                return false;
            });
        });
    </script>
	

		
	 
	<script>
       jQuery(function () {

           var $window = jQuery(window); //Window object

           var scrollTime = 0.6; //Scroll time
           var scrollDistance = 170; //Distance. Use smaller value for shorter scroll and greater value for longer scroll

           $window.on("mousewheel DOMMouseScroll", function (event) {

               event.preventDefault();

               var delta = event.originalEvent.wheelDelta / 120 || -event.originalEvent.detail / 3;
               var scrollTop = $window.scrollTop();
               var finalScroll = scrollTop - parseInt(delta * scrollDistance);

               TweenMax.to($window, scrollTime, {
                   scrollTo: {
                       y: finalScroll,
                       autoKill: true
                   },
                   ease: Power1.easeOut, //For more easing functions see http://api.greensock.com/js/com/greensock/easing/package-detail.html
                   autoKill: true,
                   overwrite: 5
               });

           });

       });
</script>
   


<!--Script by html designer-->	


<!-- ******************* START SCRIPT ADDED BY DEVELOPER **************************-->
 <script>
 jQuery(document).ready(function () {
	 
	 jQuery('#menu-item-94 a:first,#menu-item-106 a:first,#menu-item-104 a:first,#menu-item-100 a:first').addClass('dropdown-toggle');
     jQuery('.sub-menu').addClass('dropdown-menu');
	 jQuery('#menu-item-94 a:first,#menu-item-106 a:first,#menu-item-104 a:first,#menu-item-100 a:first').attr("data-toggle", "dropdown");
	 
 });
</script>
<!-- ******************* END OF SCRIPT ADDED BY DEVELOPER **************************-->
<?php wp_footer(); ?>
</body>
</html>
