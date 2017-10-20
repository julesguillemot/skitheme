<div>
  <li class="widget">
    Archives
    <?php get_calendar(); ?>
  </li>
  <li class="widget">
    <a href="<?php bloginfo('home');?>">
      <?php _e('Home');?>
    </a>
  </li>
  <li class="widget">
    <?php _e('Meta'); ?>
    <ul>
      <?php wp_register(); ?>
      <li><?php wp_loginout(); ?></li>
      <?php wp_meta(); ?>
    </ul>
  </li>
</div>
