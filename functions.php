<?php
/*Titre WP*/
function theme_support(){
  add_theme_support('title-tag');
}
add_action('after_setup_theme','theme_support');

/*Ajout css et js*/
function scripts(){
  wp_enqueue_style('style',get_stylesheet_uri());
  wp_enqueue_style('general',get_template_directory_uri().'css/general.css');
}
add_action('wp_enqueue_scripts','scripts');
?>
