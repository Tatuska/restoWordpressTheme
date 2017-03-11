<?php get_header(); ?>

<?php 
if(have_posts()):
	while(have_posts()):
		the_post();?>

		<article class="post">
			
			<h2>
				<?php the_title(); ?>
			</h2>
			
			<p class="post-info">
				<?php the_time("F j, Y - H:i"); ?> | by
				<?php the_author_posts_link() ?> | Posted in 
				<?php the_category(", "); ?>
			</p>

			<?php the_post_thumbnail( 'banner-image' ); ?>
			<p><?php the_content(); ?></p>
			
		</article>

		<?php
	endwhile;
else:
	echo "<p>No content found!</p>";
endif;
?>

<?php get_footer(); ?>