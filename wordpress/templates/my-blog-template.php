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
            <div class="text-width"><?php the_excerpt(); ?></div>
        </div>
</div>