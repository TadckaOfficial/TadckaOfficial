<div class="portfolio-post">
    <div class="portfolio-space-thumbnail">
        <div class="portfolio-image">
        	<?php if( has_post_thumbnail() ): ?>
            <img alt="thumbnail image" class="portfolio-thumbnail" src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" style="width:190px; height:200px;">
            <?php endif; ?>
                <div class="start-fa">
                    <div class="fa-background">
                        <i class="fa fa-camera" aria-hidden="true"></i>
                    </div>
                </div>
            <div class="portfolio-post-text">
                <?php the_title( sprintf('<h3><a href="%s">', esc_url( get_permalink() ) ),'</a></h3>' ); ?>
            </div>
        </div>
    </div>
</div>