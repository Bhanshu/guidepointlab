<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
   <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" type="image/x-icon">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,800,800italic,700italic' rel='stylesheet' type='text/css'>
    <link href="<?php bloginfo('template_directory'); ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<?php wp_head(); ?>
	 <link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<link href="<?php bloginfo('template_directory'); ?>/css/style.css" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
    <div class="main">
        <header class="header">
            <div class="header-top">
                <div class="container">
                    <div class="header-top-inner">
                        <div class="pull-left">
                            <div class="top-social">
                                <?php dynamic_sidebar('sidebar-2'); ?>
                            </div>
                        </div>
                        <div class="pull-right">
                            <div class="top-info">
                                <ul>
                            <?php if ( is_user_logged_in() ) { ?>
							    <li><a href="<?php echo site_url(); ?>/my-account/">My Account</a></li>
                                
                                 <li><?php dynamic_sidebar('sidebar-3'); ?></li>
                                    <li class="language-drop"><?php echo do_shortcode('[google-translator]'); ?></li>
                                    
							  <?php } else {?>
                              
                                    <li>
                                        <?php dynamic_sidebar('sidebar-3'); ?>
                                    </li>
                                    <li class="language-drop">
                                        <?php echo do_shortcode('[google-translator]'); ?>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <div class="container">
                    <div class="header-bottom-inner">
                        <div class="pull-left">
                            <a class="logo" href="<?php echo site_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="Logo" title=""></a>
                        </div>
                        <div class="pull-right">
                            <div class="contact-info">
                                <ul>
                                    <li class="phone">
                                        <?php dynamic_sidebar('sidebar-4'); ?></a>
                                    </li>
                                    <li class="phone">
                                       <?php dynamic_sidebar('sidebar-5'); ?>
                                    </li>
                                    <li class="top-cart">
                                        <a href="<?php echo WC()->cart->get_cart_url(); ?>"><i class="icons basket-icon"></i><span><?php echo WC()->cart->cart_contents_count ; ?></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <nav id="nav" class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
				<?php
				$defaults2 = array(
				'theme_location'  => '',
				'menu'            => 'topmenu',
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
        </nav>