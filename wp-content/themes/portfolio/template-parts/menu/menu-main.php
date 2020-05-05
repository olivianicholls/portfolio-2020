<?php
/**
 * @package WordPress
 * @subpackage Portfolio
 * @since Portfolio 1.0
 */
$menu_classes = array(
  'c-menu',
  'js-sf-menu'
);

wp_nav_menu( array(
    'theme_location' => 'main-menu',
    'depth'             => 2,
    'container'         => 'div',
    'container_class'   => 'collapse navbar-collapse',
    'container_id'      => 'c-navbar',
    'menu_class'        => 'nav navbar-nav',
    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
    'walker'            => new WP_Bootstrap_Navwalker(),
    )
  );
?>
