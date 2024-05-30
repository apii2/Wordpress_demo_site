<?php 
/*
Contains header here.
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( "charset" ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  
  <!-- Header -->
  <header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

    <?php
      $custom_logo_id = get_theme_mod('custom_logo');
      $logo = wp_get_attachment_image_src( $custom_logo_id, "full");

      if(has_custom_logo()):
        printf(
          '<a href="%1$s" class="logo d-flex align-items-center scrollto me-auto me-lg-0"><img src="%2$s"></a>',
          esc_url(home_url()),
          esc_url($logo[0])
        );
      else:
        echo bloginfo('name');
      endif;
    ?>

    <!-- navbar -->
    <nav id="navbar" class="navbar">
      <?php
        if(has_nav_menu( 'primary' )):
          wp_nav_menu([
            'theme_location' => 'primary',
            'container' => false,
            'menu_class' => '',
            'menu_id' => '',
            'depth' => 3
          ]);
        else:
          printf(
            '<a href="%1$s">%2$s</a>',
            esc_url(admin_url('/nav-menus.php')),
            esc_html__('Assign a menu','mytheme')
          );
        endif;
      ?>
      
      <i class="bi bi-list mobile-nav-toggle d-none"></i>
    </nav>

    <?php
      if(has_nav_menu( 'header-action' )):
        wp_nav_menu( [
          'theme_location' => 'header-action',
          'container' => false,
          'menu_class' => 'header_menu_action',
          'menu_id' => '',
          'depth' => 3
        ] );
      else:
        printf(
          '<a href="%1$s">%2$s</a>',
          esc_url(admin_url('/nav-menus.php')),
          esc_html__('Action menu','mytheme')
        );
      endif;
    ?>

    </div>
  </header>