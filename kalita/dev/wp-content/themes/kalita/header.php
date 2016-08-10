<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<?php wp_head(); ?>
	<!--PROJECT HTML HEAD SECTION-->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Bootstrap -->
    <link href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri();?>/css/style.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri();?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri();?>/css/animate.css" rel="stylesheet">
   
    <!-- Modernizr -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
</head>
<body>
    <header>
        <nav class="navbar navbar-default ">
            <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo site_url();?>"><img class="img-responsive" src="<?php echo get_option_tree('logo_image');?>"></a>
                
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
           <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="social-links">
                    <li><a href="<?php echo get_option_tree('twitter');?>" class="btn-social"><i class="fa fa-fw fa-twitter"></i></a></li>
                    <li><a href="<?php echo get_option_tree('facebook');?>" class="btn-social"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="<?php echo get_option_tree('google_plus');?>" class="btn-social"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    <li><a href="<?php echo get_option_tree('instagram');?>" class="btn-social"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="<?php echo get_option_tree('tumblr');?>" class="btn-social"><i class="fa fa-tumblr" aria-hidden="true"></i></a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                 
					<!--START CODE USE FOR GETTING HEADER MENU-->
					<?php
						$defaults = array(
						'theme_location'  => '',
						'menu'            => 'Header_menu',
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
				<!--END OF CODE USE FOR GETTING HEADER MENU-->	  
				</ul>
            </div> <a href="#" class="comments"><i class="fa fa-comments-o" aria-hidden="true"></i></a>
    </nav>
    </header>
                                                                                                                                      