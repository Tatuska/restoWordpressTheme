<?php get_header(); ?>


<?php //echo do_shortcode([huge_it_portfolio id=2]); ?>
<?php
if (is_home() || is_front_page()) {
	echo do_shortcode("[metaslider id=63]"); // replace 123 with your slideshow ID
}
?>
<?php if (have_posts()) : while (have_posts()) : the_post();?>
	<div id="welcome"><p>
			<div id="title"><?php	echo get_the_title();?></div>
			<div id="text"><?php echo strip_shortcodes(wp_trim_words( get_the_content(), 200 )); ?>
		</p></div>
	</div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>