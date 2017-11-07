<?php
  get_header();
 ?>
 <section>
   <h3>Section centrale</h3>
   <h3>Sans titre<h3>
 </section>
 <!--The loop-->
 <?php the_post(); ?>
   <a href="<?php the_permalink();?>"><h3><?php the_title(); ?></h3></a>
   <p><?php the_content(); ?></p>
   <small>Publié le <?php the_date('j F Y'); ?> à <?php the_time('G\hi'); ?>.</small>
   <p>Le post a suscité <?php comments_number('aucune réaction','1 réaction','% réactions');?></p>
 <?php if(comments_open() || get_comments_number()):
 comments_template();
 endif;
 ?>
<?php get_sidebar(); ?>
<?php
  get_footer();
 ?>
