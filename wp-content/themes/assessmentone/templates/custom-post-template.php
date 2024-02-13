<?php
/**
* Template Name: Custom Post Template
* Template Post Type: post
**/
get_header();
$backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
?>

<section class="post" style="background: url('<?php echo $backgroundImg[0]; ?>');">
  <div>
    <h1><?php the_title(); ?></h1>
  </div>
</section>

<?php get_footer(); ?>
