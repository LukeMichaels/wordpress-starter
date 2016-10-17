<aside class="sidebar" role="complementary">

  <div class="content-wrap">
    <h2>Stay Updated</h2>
    <?php 
      $args = array(
        'title_li' => __( '' ),
      );
      wp_list_categories( $args ); 
    ?>
  </div>

</aside>
