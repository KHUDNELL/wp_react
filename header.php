<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
        <header class="site-header">
        <h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
        <h4><?php bloginfo( 'description' ); ?></h4>
            <nav class="navigation-menu">
                <?php $args = [ 'theme_location' => 'primary' ]; ?>
                <?php wp_nav_menu( $args ) ?>
            </nav>
        </header>