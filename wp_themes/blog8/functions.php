<?php

// register CSS
function blog8_enqueue_style() {
    wp_enqueue_style( 'blog8-css', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'blog8_enqueue_style' );

// register js
function blog8_enqueue_script() {
//    wp_enqueue_script( 'blog8-js', get_template_directory_uri() . '/js/main.js' ); 
    wp_enqueue_script( 'go-top', get_template_directory_uri() . '/js/go-top.js' ); 
    wp_enqueue_script( 'go-top', get_template_directory_uri() . '/js/g-analytics.js' ); 
    wp_enqueue_script( 'wurfl', '//wurfl.io/wurfl.js' ); 
}
add_action( 'wp_enqueue_scripts', 'blog8_enqueue_script' );


if ( function_exists('register_sidebar') ) {
    register_sidebar( array(
        'name' => 'Sidebar', 
        'class' => 'sidebar',
        'before_widget' => '<section class="widget content">',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
        'after_widget' => '</section>',
    ) );
    
    register_sidebar( array(
        'name' => 'Footer', 
        'id' => 'footer_bar',
        'before_widget' => '<div class="footer-widget">',
        'after_widget' => '</div>',
    ) );
}

if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 150, 150 ); // default Post Thumbnail dimensions   
}

if ( function_exists( 'add_image_size' ) ) { 
    add_image_size( 'post-banner', 700, 250, true );
}

function evolution_clean_head() {

	remove_action('wp_head', 'wp_print_scripts'); 
	remove_action('wp_head', 'wp_print_head_scripts', 9); 
	remove_action('wp_head', 'wp_enqueue_scripts', 1); 
}

add_action( 'wp_enqueue_scripts', 'evolution_clean_head' );

if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
}

/* Remove Anchor from More link */
/*function remove_more_link_scroll( $link ) {
	$link = preg_replace( '|#more-[0-9]+|', '', $link );
	return $link;
}
add_filter( 'the_content_more_link', 'remove_more_link_scroll' );
*/


// Edit the read more link text
function custom_read_more_link() {
	return '<a class="more-link" href="' . get_permalink() . '" title="' . get_the_title() . '"><span class="icon-arrow-right"></span></a>';
}
add_filter('get_the_content_more_link', 'custom_read_more_link');
add_filter('the_content_more_link', 'custom_read_more_link');

?>
