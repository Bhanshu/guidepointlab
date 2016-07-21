<?php wp_head(); ?>
<?php $c=$_POST['selectid']; 
 $args = array(
       'hierarchical' => 1,
       'show_option_none' => '',
       'hide_empty' => 0,
       'parent' => $c,
       'taxonomy' => 'product_cat'
    );
  $subcats = get_categories($args);
    echo '<ul class="wooc_sclist">';
      foreach ($subcats as $sc) {
        $link = get_term_link( $sc->slug, $sc->taxonomy );
          echo '<li><a href="'. $link .'">'.$sc->name.'</a></li>';
      }
    echo '</ul>';

die;
 ?>