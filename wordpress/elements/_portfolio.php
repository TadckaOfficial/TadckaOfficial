<div id="portfolio" class="portfolio-container">
        <div class="dashed-top-border-container">
            <div class="padding-top-border"></div>
        </div>

    <div class="portfolio-info">
        <?php if ($portfolio_logo = get_field('portfolio_logo')): ?>
        <a href="#portfolio"><img class="portfolio-logo" src="<?php echo $portfolio_logo; ?>" alt="Portfolio Logo" height="90" width="440"></a>
        <?php endif; ?>
            <p class="xxx">xxx</p>
            <?php if($portfolio_text_below = get_field('portfolio_text_below')): ?>
            <p class="text-below"><?php echo $portfolio_text_below; ?></p>
            <?php endif; ?>
                <div class="tags">
                    <div class="filter-a"><p>Filter by</p></div>
                    <div class="filter"><a href="#">design</a></div>
                    <div class="filter"><a href="#">logo</a></div>
                    <div class="filter"><a href="#">photography</a></div>
                    <div class="filter"><a href="#">poster</a></div>
                    <div class="filter"><a href="#">resources</a></div>
                    <div class="filter"><a href="#">retro</a></div>
                    <div class="filter"><a href="#">t-shirts</a></div>
                    <div class="filter"><a href="#">videos</a></div>

                </div>

    <div class="portfolio-post-container">
    <?php
    /* $get_cat = get_categories();
    print_r($get_cat);  pasiziureti galima */
    $args_cat = array(
                'include' => '23, 21, 19, 1',
            );
            $categories = get_categories($args_cat);
            foreach($categories as $category):
                $args = array( 
                    'type' => 'post',
                    'posts_per_page' => 1,
                    'category__in' => $category->term_id,
                    /* 'category__not_in' => array( 10 ), */
                );

    $port_query = new WP_Query( $args );
    // $port_query->query('posts_per_page=4' . '&paged='.$paged);
    if ($port_query->have_posts()):
    while ($port_query->have_posts()) : $port_query->the_post(); ?>
    <div class="portfolio-post">
        <div class="portfolio-space-thumbnail">
            <div class="portfolio-image">
                <img alt="thumbnail image" class="portfolio-thumbnail" src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" style="width:190px; height:200px;">
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
    <?php 
    endwhile; 
    endif;
    wp_reset_postdata();
    wp_reset_query();
    endforeach;
    ?>
    </div>

<div class="border-line-father">
    <div class="border-line"></div>
</div>

<button class="show-more-portfolio-posts" data-page="1" data-url="<?php echo admin_url('admin-ajax.php'); ?>">SHOW MORE POSTS</button>

</div> <!-- portfolio info -->

    <div class="dashed-border-container">
        <div class="padding-bottom-border"></div>
    </div>
</div>