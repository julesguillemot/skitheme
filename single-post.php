<?php
  get_header();
 ?>
 <section>
   <h3>Section centrale</h3>
   <h3>Sans titre<h3>
 </section>
 <!--The loop-->
 <?php the_post(); ?>
   <div class="article-content">
     <h4 class="article-title"><?php the_title(); ?></h4>
     <p class="article-sharing">Publié le <?php the_date('j F Y'); ?> à <?php the_time('G\hi'); ?>.</p>
     <div class="article-excerpt"><?php the_content(); ?></div>
     <p class="article-comments"><?php comments_number('pas de commentaire','1 commentaire','% commentaires');?></p>
     <?php if(comments_open() || get_comments_number()):
       comments_template();
     endif;?>
   </div>
<?php get_sidebar(); ?>
<?php
  get_footer();
 ?>
