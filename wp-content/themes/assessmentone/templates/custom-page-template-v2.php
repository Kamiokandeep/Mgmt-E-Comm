<?php
/**
 * Template Name: Custom Page Template V2
 * Template Post Type: page
 */
get_header();
  if ( have_posts() ) : while ( have_posts() ) : the_post();
    the_content();
  endwhile; else:
?>
    <p>Sorry, no posts matched your criteria.</p>
<?php
  endif;
  ?>
<?php get_footer(); ?>