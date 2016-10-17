<?php
function site_scripts() {
  global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way

  // Modernizr
  wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/assets/js/lib/modernizr.flexbox.js', array(), '2.7.1');

  // Adding scripts file in the footer
  wp_enqueue_script( 'site-js', get_template_directory_uri() . '/assets/js/min/scripts-min.js', array( 'jquery' ), '', true );

  // Hamburger Menu
  wp_enqueue_script( 'hamburger-js', get_template_directory_uri() . '/assets/js/min/hamburgers-min.js');

  // Slider
  wp_enqueue_script( 'unslider-js', get_template_directory_uri() . '/assets/js/min/unslider-min.js');

  // Modal
  wp_enqueue_script( 'simplemodal-js', get_template_directory_uri() . '/assets/js/min/jquery.simplemodal-min.js');
  
  // Custom Scrollbars
  wp_enqueue_script( 'mousewheel-js', get_template_directory_uri() . '/assets/js/min/jquery.mousewheel-min.js');
  wp_enqueue_script( 'mcustomscrollbar-js', get_template_directory_uri() . '/assets/js/min/jquery.mCustomScrollbar.concat.min.js');

  // Register main stylesheet
  wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/css/main.css', array(), '', 'all' );

  // Comment reply script for threaded comments
  if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
    wp_enqueue_script( 'comment-reply' );
  }
}
add_action('wp_enqueue_scripts', 'site_scripts', 999);
