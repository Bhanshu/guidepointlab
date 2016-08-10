<?php
/**
 * Single Product tabs
 *
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Filter tabs and allow third parties to add their own
 *
 * Each tab is an array containing title, callback and priority.
 * @see woocommerce_default_product_tabs()
 */
$tabs = apply_filters( 'woocommerce_product_tabs', array() );

if ( ! empty( $tabs ) ) : ?>
<section class="test-description-tabs">
            <div class="container">
                <div class="test-description-tabs-inner">
                    <ul class="nav panel-tabs">
                        <li class="active"><a href="#tab-description" data-toggle="tab">Description</a></li>
                        <li class=""><a href="<?php echo site_url(); ?>/contact-us/">Contact Us</a></li>
                    </ul>
					 <div class="tab-content">
                       
	
	
		<?php $i=1; foreach ( $tabs as $key => $tab ) : ?>
			<div class="tab-pane active" id="tab-<?php echo esc_attr( $key ); ?>">
			<?php call_user_func( $tab['callback'], $key, $tab ); ?>
			
			
				
			
		<?php $i++; endforeach; ?>
	

<?php endif; ?>
</div>
                </div>
            </div>
        </section>
		 <section class="see-video">
            <div class="container">
                <div class="see-video-inner">
                    <div class="video-box-main">
                        <a href="#"><div class="video-heading">See Video</div></a>
                     <?php the_field('video_section'); ?>
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
	<?php echo do_shortcode('[featured_products per_page="4" columns="4"]');?>
	</div>
                </div>
            </div>
        </section>