<?php
/**
 * Single Product title
 *
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>
<div class="overlay"><?php the_title(); ?></div>
                            </figure>
                        </div> <div class="col-sm-6">
                            <div class="text">
                                <h4><?php the_title(); ?></h4>
                                <div class="test-description-social">
                                   <?php echo do_shortcode( '[woocommerce_social_media_share_buttons]' ); ?>
								   <!--<a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-plus"></i></a>
                                    <a href="#"><i class="fa fa-envelope-o"></i></a>-->
                                </div>
