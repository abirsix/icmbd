<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Bootscore
 */

get_header();
?>
<div id="content" class="site-content site-padding-2 container">
  <div id="primary" class="content-area">

    <main id="main" class="site-main">

      <section class="error-404 not-found">
        <div class="page-404">

          <h1 class="mb-3">404</h1>
          <!-- Remove this line and place some widgets -->
          <p class="alert alert-info mb-4">
            <?php esc_html_e('Page not found.', 'bootscore'); ?>
          </p>
          <!-- 404 Widget -->
          <?php if (is_active_sidebar('Services')): ?>
            <div>
              <?php dynamic_sidebar('Services'); ?>
            </div>
          <?php endif; ?>
          <a class="btn btn-outline-primary" href="<?php echo esc_url(home_url()); ?>" role="button"><?php esc_html_e('Back Home &raquo;', 'bootscore'); ?></a>
        </div>
      </section><!-- .error-404 -->

    </main><!-- #main -->

  </div><!-- #primary -->
</div><!-- #content -->

<?php
get_footer();