
<div class="widgets-content">
  <div class="widgets-content-position">
    <li class="widget">
      <a href="<?php bloginfo('home');?>">
        <?php _e('Home');?>
      </a>
    </li>
    <li class="widget">
      <ul>
        <?php wp_register(); ?>
        <li><?php wp_loginout(); ?></li>
        <?php wp_meta(); ?>
      </ul>
    </li>
    <li class="widget">
      <?php get_calendar(); ?>
    </li>
  </div>
</div>
