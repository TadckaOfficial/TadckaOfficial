<div class="retro-container">
    <div class="retro-info">
        <?php if ($retro_main_logo = get_field('retro_main_logo')): ?>
        <p><img class="retro-logo" src="<?php echo $retro_main_logo; ?>" alt="Retro Logo" height="90" width="440"></p>
    <?php endif; ?>

        <?php if ($retro_below_logo = get_field('retro_below_logo')): ?>
        <p><img class="old-style-logo" src="<?php echo $retro_below_logo; ?>" alt="Old Style Logo"></p>
        <?php endif; ?>

    <div class="start-slide">
        
    <div class="slide-container">
    <div class="retro-slide">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">

            <?php 
            $args_cat = array(
                'include' => 'category',
            );
            $categories = get_categories($args_cat);
            $count = 0;
            foreach($categories as $category):
                $args = array( 
                    'type' => 'post',
                    'posts_per_page' => 1,
                    'category__in' => $category->term_id,
                    /* 'category__not_in' => array( 10 ), */
                );
                
                $lastBlog = new WP_Query( $args );
                if( $lastBlog->have_posts() ): 
                    while( $lastBlog->have_posts() ): $lastBlog->the_post() ; ?>

                <div class="carousel-item <?php if($count == 0): echo 'active'; endif; ?>">
                    
                    <a href="#my-blog" class="slide-section"><img alt="Slideshow Image" src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" style="width:700px; height:350px; cursor:pointer"></a>
                    
                    <div class="test-test"></div>
                    <p class="top-news">TOP NEWS<p>
                    <div class="slide-text-container">
                        <?php the_title( sprintf('<h3><a class="slide-text slide-section" href="#my-blog">', esc_url( get_permalink() ) ),'</a></h3>' ); ?>
                    </div>
                </div>
                <?php endwhile;
                    endif;
                wp_reset_postdata();
            $count++; 
        endforeach;
                ?>
            </div> <!-- uzsidaro active slide -->
               <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <div class="background-pre"><span class="carousel-control-prev-icon" aria-hidden="true"></span></div>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
    
    <div class="artist-name">
        <?php if($artist_name = get_field('retro_artist_name')): ?>
        <h3><?php echo $artist_name; ?></h3>
        <?php endif; ?>

        <?php if($artist_name_sub = get_field('retro_artist_name_subtitle')): ?>
        <h4><?php echo $artist_name_sub; ?></h4>
        <?php endif; ?>
    </div>

</div>

    <div class="dashed-border-container">
        <div class="padding-bottom-border"></div>
    </div>
</div>