<!doctype html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <base href="/">
  <link rel="alternate" hreflang="x-default" href="<?php echo home_url(); ?>">
  <link rel="alternate" hreflang="en" href="<?php echo home_url(); ?>/en">
  <link rel="alternate" hreflang="ru" href="<?php echo home_url(); ?>/ru">
  <link rel="alternate" hreflang="ua" href="<?php echo home_url(); ?>/ua">
  <?php
  // ENQUEUE your css and js in inc/enqueues.php

    wp_head();
	?>
</head>
<body <?php echo body_class(); ?>>
  <!-- <div class="preloader"></div> -->
  <header id="header" class="header" role="banner">
    <div class="container px-8 md:px-0 mx-auto">
      <div class="header_content flex justify-between items-center py-4">
        <div class="header_order cursor-pointer">
          <div class="underline_03">
            Замовити он-лайн  
          </div>
        </div>
        <div class="header_menu hidden md:block">
          <?php wp_nav_menu([
            'theme_location' => 'head_menu',
            'container' => 'nav',
            'menu_id' => 'head_menu',
            'menu_class' => 'flex'
          ]); ?>
        </div>
        <div class="mobile_menu block md:hidden">
          <span class="mobile_menu_span"></span>
          <span class="mobile_menu_span"></span>
          <span class="mobile_menu_span"></span>
        </div>
      </div>
    </div>
  </header>
  <div class="mobile_cover block md:hidden bg-white">
    <?php wp_nav_menu([
      'theme_location' => 'head_menu',
      'container' => 'nav',
      'menu_id' => 'head_menu',
      'menu_class' => 'flex flex-col py-8 px-4 rotonda_font'
    ]); ?>
  </div>
  <section id="content" role="main">