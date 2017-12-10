<div class="about-me-container" id="about-me">  
    <div class="dashed-top-border-container">
        <div class="padding-top-border"></div>
    </div>

    <div class="about-me-info">
        <?php if ($about_me_logo = get_field('about_me_logo')): ?>
        <a href="#about-me"><img class="about-me-logo" src="<?php echo $about_me_logo ?>" alt="About Me Logo" height="90" width="440"></a>
        <?php endif; ?>

            <p class="xxx">xxx</p>
            <?php if($about_me_text_below = get_field('about_me_text_below')): ?>
            <p class="text-below"><?php echo $about_me_text_below; ?></p>
            <?php endif; ?>

                <div class="about-me-section">
                    <div class="hobbies">
                        <?php if ($i = have_rows('about_me_hobbies')): ?>
                            <ul>
                            <?php 
                            for($i = 0; $i <= 3; $i++): the_row();
                            $hobbies_logo = get_sub_field('hobbies_logo');
                            $hobbies_title = get_sub_field('hobbies_title');
                            $hobbies_button = get_sub_field('hobbies_button');
                            $hobbies_description = get_sub_field('hobbies_description');
                            ?>
                            <li>
                        <a href="#"><img class="hobbies-logo movies-logo" src="<?php echo $hobbies_logo ?>" alt="Movies Logo" height="120" width="120">
                            <h3><?php echo $hobbies_title; ?></h3></a>
                            <button class="accordion"><?php echo $hobbies_button; ?></button>
                            <div class="panel">
                                <?php echo $hobbies_description; ?>
                            </div>
                            </li>
                            <?php endfor; reset_rows(); ?>
                            </ul>
                            <?php endif; ?>
                    </div>
                </div>
    </div>

    <div class="dashed-border-container">
        <div class="padding-bottom-border"></div>
    </div>
</div>