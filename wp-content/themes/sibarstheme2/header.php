<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


  <div id="site-header">
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
    <a href="<?php echo home_url(); ?>">
      <img src="<?php bloginfo("template_url")?>/img/logo.png" title="<?php bloginfo("name");?>">
    </a>
    </div>

  </div>
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
    <div id="navmenu">
    </div>

       <?php wp_nav_menu( array(
           'container_id' => 'navmenu',
           'menu_id' => '',
           'menu_class' => 'ul_menu',
           'theme_location' => 'header-menu'
       ) ); ?>


</div>
      </div>

     