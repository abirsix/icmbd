<?php

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
// Widgets
if (!function_exists('bootscore_widgets_init')):

  function bootscore_widgets_init()
  {
    register_sidebar(
      array(
        'name' => esc_html__('Services', 'bootscore'),
        'id' => 'services',
        'description' => esc_html__('Add widgets here.', 'bootscore'),
        'before_widget' => '<section id="%1$s" class="widget %2$s card card-body mb-4 sidebar-services border-0">',
        'after_widget' => '</section>',
        'before_title' => '<h4 class="widget-title card-title border-bottom">',
        'after_title' => '</h4>',
      )
    );
  }
  add_action('widgets_init', 'bootscore_widgets_init');


endif;
// Widgets END

// style and scripts
add_action('wp_enqueue_scripts', 'bootscore_child_enqueue_styles');
function bootscore_child_enqueue_styles()
{

  // style.css
  wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

  // Compiled main.css
  $modified_bootscoreChildCss = date('YmdHi', filemtime(get_stylesheet_directory() . '/css/main.css'));
  wp_enqueue_style('main', get_stylesheet_directory_uri() . '/css/main.css', array('parent-style'), $modified_bootscoreChildCss);

  // custom.js
  wp_enqueue_script('slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js', array(), null, true);
  wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/js/custom.js', false, '', true);


  // wp_enqueue_script('flat-ui', 'https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/css/flat-ui.min.css', array(), null, true);
  // wp_enqueue_script('flat-uivendor', 'https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/js/vendor/jquery.min.js', array(), null, true);


}
add_filter('excerpt_length', function ($length) {
  return 15;
});