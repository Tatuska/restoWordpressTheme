<?php get_header(); ?>

<?php if( have_posts() ) : ?>
	<?php while( have_posts() ) : the_post() ?>
		<h2><a href='<?php the_permalink() ?>'><?php the_title() ?></a></h2>
		<div class="content">
			<?php if( is_singular() ) : ?>
				<?php the_content() ?>
			<?php else : ?>
				<?php the_excerpt() ?>
				<a href='<?php the_permalink() ?>'>Read more...</a>
			<?php endif ?>
		</div>
	<?php endwhile ?>
<?php else : ?>
	<p>Oh No, there are no posts!</p>
<?php endif ?>

<div id='site-sidebar'>
    <?php dynamic_sidebar( 'mat-sidebar' ); ?>
</div>

<?php get_footer(); ?>
