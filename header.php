<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <?php wp_head(); ?>
  </head>
  <body>
    <header>
      <h1><?php bloginfo ('name'); ?></h1>
      <h2><?php bloginfo ('description'); ?></h2>
      <nav>
        <?php wp_page_menu('show_home=1'); ?>
      </nav>
    </header>
