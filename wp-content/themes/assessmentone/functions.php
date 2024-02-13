<?php
// Navigation
function mytheme_theme_setup(){
    register_nav_menus(array(
        'header' => 'Header menu',
        'footer' => 'Footer menu'
    ));
}
add_action('after_setup_theme', 'mytheme_theme_setup');

// Add Featured image support to our posts
add_theme_support( 'post-thumbnails' );

// Create our custom shortcode for our custom plugin
function custom_post_page_query(){
    $query = new WP_Query(array('post_type' => 'Front-End', 'post_per_page' => 10, 'order' => 'asc'));
    while ($query -> have_posts()) : $query-> the_post(); ?>
    <div class="container col-sm-12 col-md-6 col-lg-3">
      <div>
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
      </div>
      <div>
        <h4><?php the_title(); ?></h4>
        <?php the_content(); ?>
        <p><a href="<?php the_permalink(); ?>">Learn More</a></p>
      </div>
    </div>
    <?php wp_reset_postdata(); ?>
    <?php
      endwhile;
      wp_reset_postdata();
  }
  // register shortcode
  add_shortcode('Front-End', 'custom_post_page_query');



?>
