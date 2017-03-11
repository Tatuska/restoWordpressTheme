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

                <!--            <img class="img-responsive about_img" src="--><?php //bloginfo("template_url")?><!--/img/food.jpeg" title="--><?php //bloginfo("name");?><!--">-->
                <?php
                $images = get_attached_media('image', $post->ID);
                foreach($images as $image) { ?>
                    <img class="cat_img" src="<?php echo wp_get_attachment_image_url($image->ID,'full'); ?>" />
                <?php } ?>
                <!--            <img class="img-responsive about_img" src=" --><?php //get_attached_media( 'image', ) ?><!--" title="--><?php //bloginfo("name");?><!--">-->
            </div>
</div>
<div class="row">
    <div class="col-xs-8 col-sm-9 col-md-9 col-lg-9 col-xs-offset-4 col-sm-offset-3 col-md-offset-3 col-lg-offset-3 text-center" >
        <?php if (have_posts()) : while (have_posts()) : the_post();?>
            <div id="cat_text"><p>
                    <!-- --><?php //the_content(); ?>
                    <?php echo strip_shortcodes(wp_trim_words( get_the_content(), 200 )); ?>
                </p></div>
        <?php endwhile; endif; ?>

    </div>
    </div>





<?php get_footer(); ?>
