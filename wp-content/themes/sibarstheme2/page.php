<?php
get_header();
?>



    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
<!--            <img class="img-responsive about_img" src="--><?php //bloginfo("template_url")?><!--/img/food.jpeg" title="--><?php //bloginfo("name");?><!--">-->
            <?php
            $images = get_attached_media('image', $post->ID);
            foreach($images as $image) { ?>
                <img class="img-responsive about_img" src="<?php echo wp_get_attachment_image_url($image->ID,'full'); ?>" />
            <?php } ?>
<!--            <img class="img-responsive about_img" src=" --><?php //get_attached_media( 'image', ) ?><!--" title="--><?php //bloginfo("name");?><!--">-->
        </div>
        </div>


<?php if (have_posts()) : while (have_posts()) : the_post();?>
    <div id="post_design"><p>
<!-- --><?php //the_content(); ?>
            <?php echo strip_shortcodes(wp_trim_words( get_the_content(), 200 )); ?>
    </p></div>
<?php endwhile; endif; ?>

    
<?php
get_footer();?>