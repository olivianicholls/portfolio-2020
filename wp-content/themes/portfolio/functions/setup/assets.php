<?php
/**
 * @package WordPress
 * @subpackage Portfolio
 * @since Portfolio 1.0
 */
?>

<?php

function portfolio_enqueue_scripts() {
 
  wp_enqueue_style( 'portfolio-stylesheet', get_template_directory_uri() . '/assets/css/style.css', false, NULL, 'all' );
 
  wp_enqueue_script( 'jquery' );

  wp_enqueue_script( 'bootstrap_js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery'), NULL, true );
  
  // LIB SCRIPTS
  wp_enqueue_script( 'portfolio-lib-superfish', get_template_directory_uri() . '/assets/js/lib/superfish.js', array(), '1.7.8', true );
  
  // APP SCRIPTS
  wp_enqueue_script( 'portfolio-app-main-menu', get_template_directory_uri() . '/assets/js/app/menumain.js', array ( 'jquery' ), 1.1, true );

}
add_action('wp_enqueue_scripts', 'portfolio_enqueue_scripts');

 ?>
