<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
    <!-- JS -->
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo esc_url(home_url('wp-content/themes/assessmentone/assets/normalize.css')); ?>">
    <link rel="stylesheet" href="<?php echo esc_url(home_url('wp-content/themes/assessmentone/assets/custom-style.css')); ?>">
    <!-- Fonts -->
</head>
<body <?php body_class(); ?>>
    <header>
        <nav>
            <?php
            wp_nav_menu(array(
                'menu' => 'main',
                'theme_location' => '',
                'depth' => 2,
                'fallback_cb' => false
            ));
            ?>
        </nav>
    </header>