<?php
/*Titre WP*/
function theme_support(){
  add_theme_support('title-tag');
}
add_action('after_setup_theme','theme_support');
?>
