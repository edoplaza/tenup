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
  <div class="site">
    <header class="header">
      <div class="header__bar">
        <nav class="header__navigation" role="navigation">
          <?php wp_nav_menu(array('theme_location' => 'main', 'menu' => 'Main', 'container' => false)); ?>
        </nav>
      </div>
      <?php get_template_part('/template-parts/common/side-menu'); ?>
    </header>
    <main class="main">
