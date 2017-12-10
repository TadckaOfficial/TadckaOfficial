<div id="my-blog" class="my-blog-container">
        <div class="dashed-top-border-container">
            <div class="padding-top-border"></div>
        </div>
    <div class="my-blog-info">
        <?php if ($my_blog_logo = get_field('my_blog_logo')): ?>
        <a href="#my-blog"><img class="my-blog-logo" src="<?php echo $my_blog_logo; ?>" alt="My Blog Logo" height="90" width="440"></a>
        <?php endif; ?>

            <p class="xxx">xxx</p>
            <?php if($my_blog_text_below = get_field('my_blog_text_below')): ?>
            <p class="text-below"><?php echo $my_blog_text_below; ?></p>
        <?php endif; ?>

<div class="blog-posts show-more-posts-container">
<?php
       

    $temp = $wp_query; $wp_query = null;
    $wp_query = new WP_Query();
    $wp_query->query('posts_per_page=3' . '&paged='.$paged);
    while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
        <div class="post">
            <div class="space-thumbnail">
            <div class="blog-thumbnail">

                <?php if( has_post_thumbnail() ): ?>
                <img alt="thumbnail image" class="thumbnail" src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" style="width:240px; height:200px;">
                <?php endif; ?>

            </div>
            </div>
                <div class="post-text">
                    <?php the_title( sprintf('<h3><a href="%s">', esc_url( get_permalink() ) ),'</a></h3>' ); ?>
                    <small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('h:i'); ?></small>
                    <div class="border-after-date-cont">
                        <div class="border-after-date"></div>
                    </div>
                    <div class="text-width"><?php the_excerpt(); ?>
                    </div>
                    <!-- <a href="<?php echo esc_url(get_permalink());?>">
                    <button class="btn blog-button category-read-more-button">
                        Read more
                    </button>
                </a> -->
                </div>
        </div>
    <?php 
    endwhile; 
    wp_reset_postdata();
    wp_reset_query();
    ?>
    </div>

<div class="border-line-father">
    <div class="border-line"></div>
</div>

    <button class="show-more-posts" data-page="1" data-url="<?php echo admin_url('admin-ajax.php'); ?>">SHOW MORE POSTS</button>

</div> <!-- my blog info end -->

    <div class="dashed-border-container">
        <div class="padding-bottom-border"></div>
    </div>
</div> <!-- my blog end -->