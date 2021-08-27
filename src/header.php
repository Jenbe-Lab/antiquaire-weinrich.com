<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <div class="top">
      Tél: <a href="tel:+33658084516">06 58 08 45 16</a> -
      Mél: <a href="mailto:antiquaireweinrich@gmail.com">mailto:antiquaireweinrich@gmail.com</a>
    </div>

    <header class="header">
      <a href="<?php echo site_url(); ?>" class="header__logo">
        Weinrich Père et Fils
        <span class="d-none"><br>Antiquaire brocanteur</span>
      </a>

      <?php wp_nav_menu([
        'menu'            => 'header',
        'theme_location'  => 'header',
        'container'       => 'nav',
        'container_class' => 'header__nav',
        'before'          => '<div class="header__nav-toggle"></div>',
      ]); ?>
    </header>
