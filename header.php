<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,400i,700,900" rel="stylesheet">
    <?php wp_head(); ?>
  </head>
  <body>
    <header>
      <div class="header-background">
        <div class="header-content">
          <h1 class="header-title"><?php bloginfo ('name'); ?></h1>
          <h2 class="header-subtitle"><?php bloginfo ('description'); ?></h2>
        </div>
      </div>
      <div class="header-nav">
        <div class="header-nav-center">
          <nav>
            <?php wp_page_menu('show_home=1'); ?>
          </nav>
        </div>
      </div>
    </header>
