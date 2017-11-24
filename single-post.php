<?php
  get_header();
 ?>
 <section class="single-post-content">
 <!--The loop-->
 <?php the_post(); ?>
   <div class="article-content">
     <h4 class="article-title"><?php the_title(); ?></h4>
     <p class="article-sharing">Publié le <?php the_date('j F Y'); ?> à <?php the_time('G\hi'); ?>.</p>
     <div class="article-excerpt single-post-excerpt"><?php the_content(); ?></div>
   </div>

   <div class="article-comments-content">
     <?php if(comments_open() || get_comments_number()):
       comments_template();
     endif;?>
   </div>

   <div class="article-comments-number">
     <p class="article-comments single-post-comments"><?php comments_number('pas de commentaire','1 commentaire','% commentaires');?></p>
   </div>
   </section>
<?php get_sidebar(); ?>
<?php
  get_footer();
 ?>
