<form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <!-- With this hidden input you can define a specific post type. -->
  <input type="hidden" name="post_type" value="product" />
  <select name="category">
    <option value="" selected  disabled>Choose Category</option>
    <?php
global $post;
foreach( $wpdb->get_results("select a.*,b.* from im_term_taxonomy as a inner join im_terms as b on a.term_id=b.term_id where a.taxonomy='product_cat' ") as $key => $cat_row)
{
$term_id = $cat_row->term_id;
$cname = $cat_row->name;
$slug = $cat_row->slug;
$description=$cat_row->description;
$term_taxonomy_id= $cat_row->term_taxonomy_id;
?>
    <option value="<?php echo $slug; ?>"><?php echo $cname; ?></option>
    <?php } ?>
  </select>
  <input name="s" type="text"  placeholder="Search Products"/>
  <button type="submit">Submit</button>
</form>
