<?php
/**
* Template Name:  Custom Page Template
* Template Post Type: Page 
**/
get_header();?>

<main>
    <section class="container">
        <div>
            <h1> <?php the_field( 'title' ); ?> </h1>
            <p> <?php the_field( 'introduction' ); ?> </p>
            <?php $image = get_field( 'image' ); ?>
            <?php if ( $image ) : ?>
                <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
            <?php endif; ?>
            <p> <?php the_field( 'textx' ); ?> </p>
        </div>
    </section>
</main>

<?php get_footer(); ?>