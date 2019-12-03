<?php


function blog16_setup(){
  load_theme_textdomain('blog16', get_template_directory() . '/languages');
}
add_action('after_setup_theme', 'blog16_setup');

// Add styles and scripts to head
function blog16_scripts() {
  wp_enqueue_style( 'css-default', get_stylesheet_uri() );
  wp_enqueue_style( 'css-blog16', get_template_directory_uri() . '/build/main.css' );
  wp_enqueue_style( 'font-sanchez', 'https://fonts.googleapis.com/css?family=PT+Sans|Sanchez|Raleway' );
  wp_enqueue_script( 'js-blog16', get_template_directory_uri() . '/build/main.js' );
  // wp_enqueue_script( 'go-top', get_template_directory_uri() . '/js/go-top.js' );

  // wp_enqueue_script( 'go-top', get_template_directory_uri() . '/js/g-analytics.js' );
  // wp_enqueue_script( 'wurfl', '//wurfl.io/wurfl.js' );

}
add_action( 'wp_enqueue_scripts', 'blog16_scripts' );

// Add featured-image support
if ( function_exists( 'add_theme_support' ) ) {
  add_theme_support( 'post-thumbnails' );
}

if ( function_exists( 'add_image_size' ) ) {
  add_image_size( 'post-banner', 700, 250, true );
}

if ( function_exists('register_sidebar') ) {
  register_sidebar( array(
    'name' => 'Sidebar',
    'class' => 'sidebar',
    'before_widget' => '<section class="Widget l-contentBox l-padding20">',
    'before_title' => '<h2 class="Widget-title u-fontHekto">',
    'after_title' => '</h2>',
    'after_widget' => '</section>',
  ));

  register_sidebar( array(
    'name' => 'Footer',
    'id' => 'footer_bar',
    'before_widget' => '<div class="Footer-widget">',
    'after_widget' => '</div>',
  ));
}

// function evolution_clean_head() {
//   remove_action('wp_head', 'wp_print_scripts');
//   remove_action('wp_head', 'wp_print_head_scripts', 9);
//   remove_action('wp_head', 'wp_enqueue_scripts', 1);
// }

// add_action( 'wp_enqueue_scripts', 'evolution_clean_head' );


// Edit the read more link text
function custom_read_more_link() {
  return '<a class="Article-more" href="' . get_permalink() . '" title="' . get_the_title() . '"><span class="Icon Icon--arrow-right"></span></a>';
}
add_filter('get_the_content_more_link', 'custom_read_more_link');
add_filter('the_content_more_link', 'custom_read_more_link');


function the_author_twitter_url() {
  return 'https://twitter.com/#!/' . get_the_author_meta('twitter');
}

function get_tag_headline() {
  $tag_title = get_single_tag_title();
  return 'Tag:' . $tag_title . 'bla';
}


require_once('includes/components.php');


?>
