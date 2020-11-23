<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php $image = get_field('favicon', 'option');  ?>
  <link rel="icon" href="<?php echo esc_url($image['url']); ?>" type="image/x-icon"/>
  <?php wp_head(); ?>
</head>
<body>
  <?php
  $class_header_bar ="";
  if ( is_user_logged_in() ) {
      $class_header_bar = "header-bar header-bar-login";
  } else {
      $class_header_bar = "header-bar";
  }
  ?>
  <header class="<?php echo $class_header_bar; ?>">
    <div class="header-bar-bottom"> 
      <div class="container"> 
        <div class="row"> 
          <div class="col-md-12"> 
            <div class="nav_menu">
              <div class="logo"> 
                <a href="<?php echo get_bloginfo('url') ?>"> 
                  <?php $image = get_field('logo', 'option'); ?>
                  <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                </a> 
              </div> 
              <nav class="nav-menu">
                <?php
                wp_nav_menu(
                  array(
                    'theme_location'     => "nav-main-menu",
                    'menu_class'        => "menu",
                    'container'         => "",
                    'menu_id'     => "menu",
                  )
                );
                ?>
            </nav>
            </div>
        </div> 
      </div> 
    </div> 
  </div>
  <div class="topnav fixed-header" id="myTopnav">
      <div class="nav-logo">
        <div class="logo-menu-mobile"><a href="<?php echo get_bloginfo('url') ?>"><img src="<?php echo esc_url($image['url']); ?>"></a></div>
        <div class="icon-menu"><a href="javascript:void(0);" onclick="myFunction()" ><i class="fas fa-bars"></i></a></div>
      </div>
      <div class="nav-menu">
        <div class="nav-menu-mobile" id="nav-menu-mobile">
          <?php
          wp_nav_menu(
            array(
              'theme_location'     => "nav-main-menu",
              'menu_class'        => "menu-mobile",
              'container'         => "",
              'menu_id'     => "mobile-menu",
            )
          );
          ?>
        </div>
      </div>
    </div>
</header>
