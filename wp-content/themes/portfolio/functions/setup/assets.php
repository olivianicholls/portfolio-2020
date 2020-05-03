<?php
/**
 * @package WordPress
 * @subpackage Portfolio
 * @since Portfolio 1.0
 */
?>

<?php

function portfolio_enqueue_scripts() {
  wp_enqueue_script( 'bootstrap_js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery'), NULL, true );

     wp_enqueue_style( 'bootstrap_css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', false, NULL, 'all' );
}
add_action('wp_enqueue_scripts', 'portfolio_enqueue_scripts');

 ?>
