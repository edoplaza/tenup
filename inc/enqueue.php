<?php

/**
 * Frontend enqueue functions
 *
 *
 * @package WordPress
 * @subpackage tenup
 */

function custom_load_scripts()
{

  // Common resources
  wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.0.8/css/all.css', [], '5.0.8');

  wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/css/main.css', [], filemtime(get_template_directory() . '/assets/css/main.css'));

  wp_deregister_script('jquery');
  wp_register_script('jquery', get_template_directory_uri() . '/assets/js/vendor/jquery-3.2.1.min.js', false, '3.2.1', true);
  wp_enqueue_script('jquery');

  wp_register_script('tweenmax', '//cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js', false, '3.2.1', true);
  wp_enqueue_script('tweenmax');

  wp_register_script('main-js', get_template_directory_uri() . '/assets/js/main.min.js', false, filemtime(get_template_directory() . '/assets/js/main.min.js'), true);
  wp_enqueue_script('main-js');

  wp_register_script('home-js', get_template_directory_uri() . '/assets/js/home.min.js', false, filemtime(get_template_directory() . '/assets/js/home.min.js'), true);

  if (is_front_page() || is_page('home')) {
    wp_enqueue_script('home-js');
  }
}

add_action('wp_enqueue_scripts', 'custom_load_scripts');


