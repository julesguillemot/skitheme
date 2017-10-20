<?php
  get_header();
 ?>
 <section>
   <h3>Section centrale</h3>
   <h3>Sans titre<h3>
 </section>
 <!--The loop-->
 <?php if(have_posts()):while(have_posts()):
   the_post(); ?>
   <h3><?php the_title(); ?></h3>
   <p><?php the_content(); ?></p>
   <small>Publié le <?php the_date('j F Y'); ?> à <?php the_time('G\hi'); ?>.</small>
 <?php endwhile;endif; ?>
 <?php get_sidebar(); ?>
<?php
  get_footer();
 ?>
