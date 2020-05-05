<?php
/**
 * @package WordPress
 * @subpackage Portfolio
 * @since Portfolio 1.0
 */
?>
<nav class="w-100 navbar navbar-expand-md position-absolute navbar-dark bg-transparent">
  <a class="navbar-brand" href="<?php get_home_url(); ?>"><?php echo get_bloginfo( 'name' ); ?></a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#c-navbar" aria-controls="c-navbar" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>
  <?php get_template_part('template-parts/menu/menu', 'main'); ?>
</nav>
