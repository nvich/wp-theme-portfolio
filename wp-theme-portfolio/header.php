<!DOCTYPE html>
<html <?php language_attributes(); ?> dir="ltr">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header>
      <h1>HEADER</h1>
      <nav>
        <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
      </nav>
    </header>
