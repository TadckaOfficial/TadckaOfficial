<div id="top-header" class="container">	
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">

        <?php if ($mobile_logo = get_field('retro_logo_mobile', 'option')): ?>
        <a href="#top-header" class="slide-section"><img class="navbar-brand phone-tablet-show-logo" src="<?php echo $mobile_logo; ?>" alt="JD Logo"></a>
        <?php endif; ?>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <div class="nav-retro">
                
                <div class="nav-left">
                <?php wp_nav_menu(array (
                'menu' => 'primary-navigation',
                'theme_location' => 'primary-navigation',             
                'menu_class' => 'slide-section',
                )); ?> 
                </div>

                    <?php if ($logo = get_field('retro_logo', 'option')): ?>
                    <a href="#top-header" class="slide-section jd-padding"><img class="logo-at-the-top large-show-logo" src="<?php echo $logo; ?>" alt="JD Logo" ></a>
                    <?php endif; ?>
                
                <div class="nav-right">
                <?php wp_nav_menu(array (
                'menu' => 'secondary-navigation',
                'theme_location' => 'secondary-navigation',
                'menu_class' => 'slide-section',
                )); ?>
                </div>

            </div>
        </div>
    </nav>