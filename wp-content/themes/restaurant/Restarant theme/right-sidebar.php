<?php 
/*
Template name: Left Sidebar
*/
?>

<?php get_header(); ?>
<div class="row">
	<div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 text-center" >
		<div id='site-sidebar'>
			<?php dynamic_sidebar( 'mat-sidebar' ); ?>
		</div>
		</div>
	<div class="col-xs-8 col-sm-9 col-md-9 col-lg-9 text-center" >
<?php if( have_posts() ) : ?>
	<div  class="cat_content">
	<?php while( have_posts() ) : the_post() ?>
		<h2 id="cat_title"><?php the_title() ?></h2>
		<div id="text">
			<?php the_content() ?>
		</div>
		</div>
	<?php endwhile ?>
<?php else : ?>
	<p>Oh No, there are no posts!</p>
<?php endif ?>
		</div>
	</div>



<?php get_footer(); ?>
