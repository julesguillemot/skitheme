<?php
  include ('header.php');
 ?>
 <section>
   <h3>Section centrale</h3>
   <h3>Sans titre<h3>
     <!--The loop-->
     <?php if(have_posts()):while(have_posts()):
       the_post(); ?>
       <h3><?php the_title(); ?></h3>
       <p><?php the_content(); ?></p>
     <?php endwhile;endif; ?>
 </section>
<?php
  include ('footer.php');
 ?>
