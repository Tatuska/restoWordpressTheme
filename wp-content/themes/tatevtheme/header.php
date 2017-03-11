<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo("charset");?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		<?php wp_title("|", true, "right"); ?>
		<?php bloginfo("name") ?>
	</title>
	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

	<header class="site-header">
		<a href="<?php echo home_url(); ?>">
			<img src="<?php bloginfo("template_url")?>/img/logo.png" title="<?php bloginfo("name");?>">
		</a>
		
		<h3><?php bloginfo("description");?></h3>
		
		<nav class="main-nav">
			<?php wp_list_pages();?>
		</nav>
	</header>

	<div class="jumbotron">
  		<div class="container">
