<?php
/**
 * @package WordPress
 * @subpackage Portfolio
 * @since Portfolio 1.0
 */

 function portfolio_custom_new_menu() {
   register_nav_menus(
     array(
       'main-menu' => __( 'Main Menu' ),
       'mobile-menu' => __( 'Mobile Menu' ),
       'footer-menu' => __( 'Footer Menu' )
     )
   );
 }
 add_action( 'init', 'portfolio_custom_new_menu' );
?>
