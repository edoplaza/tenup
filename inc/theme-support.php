<?php
/**
 * Theme Support
 *
 *
 * @package WordPress
 * @subpackage tenup
 */


function tenup_custom_register_nav_menu() {
  register_nav_menus( array(
    'main' => 'Main'
  ));
}

add_action( 'after_setup_theme', 'tenup_custom_register_nav_menu' );


/* Post Thumbnails and Custom Images Sizes  */
add_action( 'after_setup_theme', 'tenup_setup' );

function tenup_setup() {
  add_theme_support('title-tag');
  add_theme_support( 'post-thumbnails' );
  add_image_size( 'blog', 900, 600, true );
  add_image_size( 'single', 1200, 800, true );
}

add_filter( 'image_size_names_choose', 'tenup_custom_image_sizes_choose' );
function tenup_custom_image_sizes_choose( $sizes ) {
    $custom_sizes = array(
        'custom' => 'Custom'
    );
    return array_merge( $sizes, $custom_sizes );
}

/* Limit Excerpt words */
function string_limit_words($string, $word_limit)
{
  $words = explode(' ', $string, ($word_limit + 1));
  if(count($words) > $word_limit)
  array_pop($words);
  return implode(' ', $words);
}


function remove_comments(){
        global $wp_admin_bar;
        $wp_admin_bar->remove_menu('comments');
}
add_action( 'wp_before_admin_bar_render', 'remove_comments' );

