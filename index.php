<?php
  get_header();
 ?>
 <section>
   <h3>Section centrale</h3>
   <h3>Sans titre<h3>
<<<<<<< HEAD
     <!--The loop-->
     <?php if(have_posts()):while(have_posts()):
       the_post(); ?>
       <h3><?php the_title(); ?></h3>
       <p><?php the_content(); ?></p>
     <?php endwhile;endif; ?>
=======
>>>>>>> 19c652921b159a3e401c24f7f8b5f5afc7c72f67
 </section>
<?php
  get_footer();
 ?>
