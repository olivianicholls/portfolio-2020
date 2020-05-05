<?php
/**
 * @package WordPress
 * @subpackage Portfolio
 * @since Portfolio 1.0
 */
?>
<?php
get_header();
if (have_posts()) :
   while (have_posts()) :
      the_post();
         if (is_front_page()):
           get_template_part('template-parts/page/page', 'front');
         else:
           get_template_part('template-parts/page/page', get_post_type());
         endif;
   endwhile;
endif;
get_footer();
?>
