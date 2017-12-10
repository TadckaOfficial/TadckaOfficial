<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" width="device-width,initial-scale=1">
        <title><?php wp_title(' - ', true, 'right'); bloginfo( 'name' ); ?></title>
        <link rel="shortcut icon" href="<?php echo get_bloginfo('template_url') . '/assets/images/logo-JD.png'; ?> ">
        <?php wp_head(); ?>
    </head>
    <body>
    	<?php get_template_part('elements/site-header'); ?>