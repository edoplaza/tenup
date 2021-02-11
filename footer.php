<?php

/**
 * Main footer
 *
 *
 * @package WordPress
 * @subpackage tenup
 */

?>
</main> 
<footer class="footer">
  <div class="footer__wrapper">
    <div class="footer__meta">
      <div class="footer__copyright">
        <p></p>
        <p></p>
      </div>
    </div>
    <div class="footer__navigation">
      <div class="footer__nav-list">
        <h3></h3>
        <?php wp_nav_menu(array('theme_location' => 'footer1', 'menu' => 'Footer 1', 'container' => false)); ?>
      </div>
    </div>
  </div>
  <?php get_template_part('template-parts/common/social'); ?>
</footer>
</div>
<?php wp_footer(); ?>
</body> 
</html>