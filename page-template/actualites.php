<?php
/*
Template Name: Actualites
*/
  $args = array('post_type' => 'post' , );
  $query = new WP_Query($args);
?>
<?php
  get_header();
?>
 <section class="actuality-content">
   <div class="actuality-content-position">
      <h3 class="actuality-title">Actualités</h3>
   </div>
 <!--The loop-->
 <?php if($query->have_posts()):while($query->have_posts()):$query->the_post() ?>
   <div class="article-content">
     <a href="<?php the_permalink();?>" class="article-title-link"><h4 class="article-title"><?php the_title(); ?></h4></a>
     <p class="article-sharing">Publié le <?php the_date('j F Y'); ?> à <?php the_time('G\hi'); ?>.</p>
     <div class="article-excerpt"><?php the_excerpt(); ?></div>
     <p class="article-comments"><?php comments_number('pas de commentaire','1 commentaire','% commentaires');?></p>
   </div>
 <?php endwhile;endif; wp_reset_query(); ?>
 </section>
 <section class="">
   <div class="widgets">
     <?php get_sidebar(); ?>
   </div>
 </section>
<?php
  get_footer();
 ?>
