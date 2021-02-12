	<?php
	/**
	 * The front page template file
	 * Template Name: Home
	 *
	 *
	 * @package WordPress
	 * @subpackage tenup
	 */

	?>

	<?php get_header(); ?>
	<div class="home">
		<?php include('template-parts/hero-top.php'); ?>
    <?php include('template-parts/hero-middle.php'); ?>
    <?php include('template-parts/banner.php'); ?>
  </div>
	<?php get_footer(); ?>
