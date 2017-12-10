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


    <?php if (have_rows('portfolio_post')): ?>
        <?php 
        while(have_rows('portfolio_post')): the_row();
        $portfolio_post_image = get_sub_field('portfolio_post_image');
        $portfolio_post_image_title = get_sub_field('portfolio_post_image_title');
        $portfolio_post_image_icon = get_sub_field('portfolio_post_image_icon');
        ?>
    <div class="portfolio-post">
        <div class="portfolio-space-thumbnail">
            <div class="portfolio-image">
                <img class="portfolio-thumbnail" src="<?php echo $portfolio_post_image; ?>" alt="Blog Thumbnail" height="180" width="190">
                    <div class="start-fa">
                        <div class="fa-background">
                            <i class="fa fa-camera-retro" aria-hidden="true"></i>
                        </div>
                    </div>
                <div class="portfolio-post-text">
                    <h3><?php echo $portfolio_post_image_title; ?></h3>
                </div>
            </div>
        </div>
    </div>
    <?php 
    endwhile; reset_rows();
    endif; 
    wp_reset_postdata();
    wp_reset_query();
    ?>



</div> <!-- portfolio info -->

    <div class="dashed-border-container">
        <div class="padding-bottom-border"></div>
    </div>
</div>