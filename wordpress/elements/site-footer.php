<div class="footer-two">
<div class="vargas-buvo">
               <p class="social">I AM SOCIAL</p>
                    <div class="border-line-father">
                        <div class="border-top-line"></div>
                    </div>

                    <?php if(have_rows('retro_social_media', 'option')): ?>
	            <ul class="social-icons">
                    <?php while (have_rows('retro_social_media', 'option')): the_row();
                        $social_url = get_sub_field('retro_link', 'option');
                        $social_icon = get_sub_field('retro_icon', 'option');
                    ?>
	                <li><a href="<?php echo $social_url; ?>" target="_blank"><img class="phone-tablet-icon-size" src="<?php echo $social_icon; ?>" aria-hidden="true" alt="Social Icon"></a></li>
                    <?php endwhile; reset_rows(); ?>
                </ul>
            <?php endif; ?>
<div class="dashed-border-container">
    <div class="padding-bottom-border"></div>
</div>
</div>
</div>
</div> <!-- container end -->