<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); 

while ( have_posts() ) : the_post();


the_title();
the_content();?>




<?php
endwhile;
?>

<?php get_footer(); ?>