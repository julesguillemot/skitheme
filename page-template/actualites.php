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
   <a href="<?php the_permalink();?>"><h3><?php the_title(); ?></h3></a>
   <p><?php the_excerpt(); ?></p>
   <small>Publié le <?php the_date('j F Y'); ?> à <?php the_time('G\hi'); ?>.</small>
   <p>Le post a suscité <?php comments_number('aucune de réaction','1 réaction','% réactions');?></p>
 <?php endwhile;endif; ?>
 <?php get_sidebar(); ?>
<?php
  get_footer();
 ?>
