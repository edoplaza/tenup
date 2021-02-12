<?php

/**
 * Main header
 *
 * @package WordPress
 * @subpackage tenup
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class="header">
    <div class="header-inner container-wide">
      <?php get_template_part('svg/main-logo'); ?>
      <button class="pull" type="button">
        <span class="pull-box">
          <span class="pull-inner"></span>
        </span>
      </button>
      <?php get_template_part('/template-parts/menu'); ?>
    </div>
     
  </header>
  <main class="main">
