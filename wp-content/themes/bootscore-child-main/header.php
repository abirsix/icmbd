<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootscore
 * 
 * @version 5.2.0.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180"
    href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/favicon.png">
  <link rel="icon" type="image/png" sizes="32x32"
    href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/favicon.png">
  <link rel="icon" type="image/png" sizes="16x16"
    href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/favicon.png">
  <link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/favicon.png">
  <link rel="mask-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/favicon.png" color="#0d6efd">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <?php wp_body_open(); ?>

  <div id="" class="site">

    <header id="masthead" class="site-header">

      <div class="fixed-top bg-transparent">

        <nav id="nav-main" class="navbar navbar-expand-lg pb-0">

          <div class="container d-block">


            <div class="navbar-l-s">
              <!-- Navbar Brand -->
              <a class="navbar-brand xs d-md-none" href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/logo/ICM-logo.jpg
              " alt="logo" width="70px" class="logo xs"></a>
              <a class="navbar-brand md d-none d-md-block" href="<?php echo esc_url(home_url()); ?>"><img
                  src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/logo/ICM-logo.jpg" alt="logo"
                  width="70px" class="logo md"></a>
            </div>
            <div class="navbar-m-s">
              <div id="navbar-info" class="row">
                <div class="col-md-8">
                  <p class="text-light navbar-tag">Institute of Compliance Modernization</p>
                </div>
                <div class="col-md-4 navbar-social">
                  <a class="float-end ms-3" href="#"><i class="fa-brands fa-square-facebook"></i></a>
                  <a class="float-end ms-3" href="#"><i class="fa-brands fa-twitter"></i></a>
                  <a class="float-end ms-3" href="#"><i class="fa-brands fa-instagram"></i></a>
                  <a class="float-end ms-3" href="#"><i class="fa-brands fa-youtube"></i></a>
                </div>
              </div>

              <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas-navbar">
                <div class="offcanvas-header bg-light">
                  <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/logo/ICM-logo.jpg
                                                    " alt="logo" width="70px" class="logo xs">
                  <span class="h5 mb-0">
                    <?php esc_html_e('Institute of Compliance Modernization', 'bootscore'); ?>
                  </span>
                  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <!-- Bootstrap 5 Nav Walker Main Menu -->
                  <?php
                  wp_nav_menu(
                    array(
                      'theme_location' => 'main-menu',
                      'container' => false,
                      'menu_class' => '',
                      'fallback_cb' => '__return_false',
                      'items_wrap' => '<ul id="bootscore-navbar" class="navbar-nav %2$s">%3$s</ul>',
                      'depth' => 2,
                      'walker' => new bootstrap_5_wp_nav_menu_walker()
                    )
                  );
                  ?>
                  <!-- Bootstrap 5 Nav Walker Main Menu End -->
                  <button type="button" class="btn call-btn float-md-end"><i class="fas fa-phone"></i> Call Us
                    Now</button>
                </div>

              </div>
            </div>

            <!-- Offcanvas Navbar -->
            <div class="navbar-m-s navbar-res header-actions d-flex align-items-center">

              <!-- Top Nav Widget -->
              <div class="top-nav-widget">
                <?php if (is_active_sidebar('top-nav')): ?>
                  <div>
                    <?php dynamic_sidebar('top-nav'); ?>
                  </div>
                <?php endif; ?>
              </div>

              <!-- Searchform Large -->
              <div class="d-none d-lg-block ms-1 ms-md-2 top-nav-search-lg">
                <?php if (is_active_sidebar('top-nav-search')): ?>
                  <div>
                    <?php dynamic_sidebar('top-nav-search'); ?>
                  </div>
                <?php endif; ?>
              </div>

              <!-- Search Toggler Mobile -->
              <button class="btn btn-outline-secondary d-lg-none ms-1 ms-md-2 top-nav-search-md" type="button"
                data-bs-toggle="collapse" data-bs-target="#collapse-search" aria-expanded="false"
                aria-controls="collapse-search">
                <i class="fa-solid fa-magnifying-glass"></i><span class="visually-hidden-focusable">Search</span>
              </button>

              <!-- Navbar Toggler -->
              <button class="btn btn-outline-secondary d-lg-none ms-1 ms-md-2" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvas-navbar" aria-controls="offcanvas-navbar">
                <i class="fa-solid fa-bars"></i><span class="visually-hidden-focusable">Menu</span>
              </button>

            </div><!-- .header-actions -->

          </div>




      </div><!-- .container -->

      </nav><!-- .navbar -->

      <!-- Top Nav Search Mobile Collapse -->
      <div class="collapse container d-lg-none" id="collapse-search">
        <?php if (is_active_sidebar('top-nav-search')): ?>
          <div class="mb-2">
            <?php dynamic_sidebar('top-nav-search'); ?>
          </div>
        <?php endif; ?>
      </div>

  </div><!-- .fixed-top .bg-light -->

  </header><!-- #masthead -->