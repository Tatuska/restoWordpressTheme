<?php get_header(); ?>

<script type="text/javascript">
	//Kollar om jquery funkar på sidan
	/*window.onload = function() {
    if (window.jQuery) {  
        // jQuery is loaded  
        alert("Yeah!");
    } else {
        // jQuery is not loaded
        alert("Doesn't Work");
    }
}*/
</script>


<?php 
if(have_posts()):
	while(have_posts()):
		the_post();?>

		<article class="post">
			
			<h2>
				<a href="<?php the_permalink();?>"><?php the_title(); ?></a>
			</h2>
			
			<p class="post-info">
				<?php the_time("F j, Y - H:i"); ?> | by
				<?php the_author_posts_link() ?> | Posted in 
				<?php the_category(", "); ?>
			</p>
			
			<?php the_post_thumbnail( 'small-thumb' ); ?>
			<?php the_excerpt(); ?>
			<a href="<?php the_permalink();?>">Read more...</a>

			<!--Exempel på condition tags -->
			<!--<?php //if(is_single()): ?>
				<p><?php //the_content(); ?></p>
			<?php //else: ?>
				<p><?php //the_excerpt(); ?></p>
				<a href="<?php //the_permalink();?>">Read more...</a>
			<?php //endif; ?>-->

		</article>

		<?php
	endwhile;
else:
	echo "<p>No content found!</p>";
endif;
?>

<?php get_footer(); ?>