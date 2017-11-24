<?php
/*Titre WP*/
function theme_support(){
  add_theme_support('title-tag');
}
add_action('after_setup_theme','theme_support');

/*Ajout css et js*/
function scripts(){
  wp_enqueue_style('style',get_stylesheet_uri());
  wp_enqueue_style('general',get_template_directory_uri().'/assets/css/general.css');
  wp_enqueue_style('actuality',get_template_directory_uri().'/assets/css/actuality.css');
  wp_enqueue_style('widgets',get_template_directory_uri().'/assets/css/widgets.css');
}
add_action('wp_enqueue_scripts','scripts');

/*Autoriser les commentaire anonyme*/
function comsapiok(){
  return true;
}
add_filter('rest_allow_anonymous_comments','comsapiok');
?>
