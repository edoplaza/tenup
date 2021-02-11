<?php

/**
 * Options pages for Advanced Custom Fields
 *
 *
 * @package WordPress
 * @subpackage tenup
 */

if (function_exists('acf_add_options_page')) {

  acf_add_options_page(array(
    'page_title'  => 'Dispensary info',
    'menu_title'  => 'Dispensary info',
    'menu_slug'   => 'hannover',
    'capability'  => 'edit_posts',
    'position' => '2.1',
    'redirect'    => false
  ));


  acf_add_options_page(array(
    'page_title'  => 'Home Banner',
    'menu_title'  => 'Home Banner',
    'menu_slug'   => 'home_middle_banner',
    'capability'  => 'edit_posts',
    'position' => '2.3',
    'redirect'    => false
  ));

 


  acf_add_options_page(array(
    'page_title'  => 'Footer',
    'menu_title'  => 'Footer',
    'menu_slug'   => 'footer_settings',
    'capability'  => 'edit_posts',
    'position' => '2.5',
    'redirect'    => false
  ));



 
}

// -------------------- JSON Api for ACF

// Saving Fields

add_filter('acf/settings/save_json', 'tenup_acf_json_save_point');

function tenup_acf_json_save_point($path)
{
  $path = get_stylesheet_directory() . '/acf-json';
  return $path;
}

// Loading fields

add_filter('acf/settings/load_json', 'tenup_acf_json_load_point');

function tenup_acf_json_load_point($paths)
{
  unset($paths[0]);
  $paths[] = get_stylesheet_directory() . '/acf-json';
  return $paths;
}








