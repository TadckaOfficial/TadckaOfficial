<?php get_header(); ?>

<div id="my-blog" class="my-blog-container">
        <div class="dashed-top-border-container">
            <div class="padding-top-border"></div>
        </div>
    <div class="my-blog-info">
        <?php if ($my_blog_logo = get_field('my_blog_logo')): ?>
        <a href="#my-blog"><img class="my-blog-logo" src="<?php echo $my_blog_logo; ?>" alt="My Blog Logo" height="90" width="440"></a>
        <?php endif; ?>

            <p class="xxx xxx-padding">xxx</p>
            <?php if($my_blog_text_below = get_field('my_blog_text_below')): ?>
            <p class="text-below"><?php echo $my_blog_text_below; ?></p>
        <?php endif; ?>

<div class="blog-posts">
<?php
    
    if (have_posts()):
    while (have_posts()) : the_post(); ?>
        <div class="post single-post-padding">
            <div class="space-thumbnail">
            <div class="blog-thumbnail">

                <?php if( has_post_thumbnail() ): ?>
                <img alt="thumbnail image" class="thumbnail single-post-thumbnail" src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>">
                <?php endif; ?>

            </div>
            </div>
                <div class="post-text">
                    <?php the_title( sprintf('<h3 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h3>' ); ?>
                    <small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('h:i'); ?></small>
                    <div class="border-after-date-cont">
                        <div class="border-after-date"></div>
                    </div>
                    <div class="text-width single-text-width"><?php the_content(); ?></div>
                </div>
        </div>
    <?php 
    endwhile; 
    
    endif;
    ?>

</div>

<div class="next-prev-page">
    <div class="col-xs-6 text-left">
        <?php next_posts_link('« PREVIOUS POST'); ?>
    </div>
    <div class="col-xs-6 text-right">
        <?php previous_posts_link('NEXT POST »'); ?>
    </div>
</div>

</div> <!-- my blog info end -->

    <div class="dashed-border-container">
        <div class="padding-bottom-border"></div>
    </div>
</div> <!-- my blog end -->

    <div class="footer-info">

</div> <!-- container end -->
<?php get_footer();  ?>