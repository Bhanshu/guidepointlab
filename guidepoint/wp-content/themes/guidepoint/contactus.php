<?php
/**
 * Template Name: Contactus
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
 <section class="contact-page" data-speed="2" data-type="background">
            <div class="container">
                <div class="contact-page-inner">
                    <div class="contact-heading">
                        <div class="row">
                            <div class="col-xs-1">
                                <div class="heading-line"></div>
                            </div>
                            <div class="col-xs-11">
                                <h4><?php the_title(); ?></h4>
                                <p><?php the_field('top_text'); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="contact-infofor">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="contact-infofor-box">
                                    <div class="title">WHERE WE ARE</div>
                                    <address class="info">
                                       <?php the_field('address_information'); ?>
                                    </address>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="map">
                                    <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3467.3143674867374!2d-82.42463687627736!3d29.65265071425371!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88e8bc8f80ed1611%3A0x2875499e7c568808!2s7550+W+University+Ave%2C+Gainesville%2C+FL+32607%2C+USA!5e0!3m2!1sen!2sin!4v1449483334007" frameborder="0" style="border:0" allowfullscreen></iframe>-->
								<?php echo do_shortcode('[wpgmza id="1"]'); ?>
							   </div>
                            </div>
                        </div>
                    </div>
                    <div class="contact-form">
                
                            <div class="schedule-call">
                               <?php the_field('text_on_side_of_the_button'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="directions-gainesville">
                        <h5><?php the_field('heading_new'); ?></h5>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="directions-gainesville-box">
                                   <?php the_field('content_left'); ?>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="directions-gainesville-box">
                                    <?php the_field('content_right'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php get_footer(); ?>