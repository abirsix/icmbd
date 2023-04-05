<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootscore
 *
 * @version 5.2.0.0
 */

?>

<footer>

  <div class="bootscore-footer pt-5 pb-3">
    <div class="container">

      <!-- Top Footer Widget -->
      <?php if (is_active_sidebar('top-footer')): ?>
        <div>
          <?php dynamic_sidebar('top footer'); ?>
        </div>
      <?php endif; ?>

      <div class="row">

        <!-- Footer 1 Widget -->
        <div class="col-md-6 col-lg-3">
          <?php if (is_active_sidebar('footer-1')): ?>
            <div>
              <?php dynamic_sidebar('footer-1'); ?>
            </div>
          <?php endif; ?>
        </div>

        <!-- Footer 2 Widget -->
        <div class="col-md-6 col-lg-3">
          <?php if (is_active_sidebar('footer-2')): ?>
            <div>
              <?php dynamic_sidebar('footer-2'); ?>
            </div>
          <?php endif; ?>
        </div>

        <!-- Footer 3 Widget -->
        <div class="col-md-6 col-lg-3">
          <?php if (is_active_sidebar('footer-3')): ?>
            <div>
              <?php dynamic_sidebar('footer-3'); ?>
            </div>
          <?php endif; ?>
        </div>

        <!-- Footer 4 Widget -->
        <div class="col-md-6 col-lg-3">
          <?php if (is_active_sidebar('footer-4')): ?>
            <div>
              <?php dynamic_sidebar('footer-4'); ?>
            </div>
          <?php endif; ?>
        </div>
        <!-- Footer Widgets End -->

      </div>

      <!-- Bootstrap 5 Nav Walker Footer Menu -->
      <h4 class="imp-link">Important Links</h4>
      <?php
      wp_nav_menu(
        array(
          'theme_location' => 'footer-menu',
          'container' => false,
          'menu_class' => '',
          'fallback_cb' => '__return_false',
          'items_wrap' => '<ul id="footer-menu" class="nav %2$s">%3$s</ul>',
          'depth' => 1,
          'walker' => new bootstrap_5_wp_nav_menu_walker()
        )
      );
      ?>
      <!-- Bootstrap 5 Nav Walker Footer Menu End -->

    </div>
  </div>
  <div class="container border-top">
    <div class="row">
      <div class="col-8">
        <div class="bootscore-info text-muted py-2 text-left">
          <div class="container">
            <a class="text-muted" href="<?php echo esc_url(home_url()); ?>"><img
                src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/logo/ICM-logo.jpg" alt="logo"
                width="40px"></a>

            <span class="logo-name-footer"> Institute of Compliance Modernization</span>
            <small class="copy-right-text">
              &copy;&nbsp;
              <?php echo Date('Y'); ?> -
              <?php bloginfo('name'); ?> design and developed by icmbd
            </small>
          </div>
        </div>
      </div>
      <div class="col-4 pt-3 ps-0">
        <a class="float-end ms-3" href="#"><i class="fa-brands fa-square-facebook"></i></a>
        <a class="float-end ms-3" href="#"><i class="fa-brands fa-twitter"></i></a>
        <a class="float-end ms-3" href="#"><i class="fa-brands fa-instagram"></i></a>
        <a class="float-end ms-3" href="#"><i class="fa-brands fa-youtube"></i></a>
      </div>

    </div>
  </div>
  <div class="col-12 d-md-none" style="background-color: #001e04;">
    <div class="bootscore-info text-muted py-2 text-center">
      <div class="container">
        <small>
          &copy;&nbsp;
          <?php echo Date('Y'); ?> -
          <?php bloginfo('name'); ?> design and developed by icmbd
        </small>
      </div>
    </div>
  </div>



</footer>

<!-- To top button -->
<a href="#" class="btn btn-primary shadow top-button position-fixed zi-1020"><i class="fa-solid fa-chevron-up"></i><span
    class="visually-hidden-focusable">To top</span></a>



<?php wp_footer(); ?>

</body>

</html>