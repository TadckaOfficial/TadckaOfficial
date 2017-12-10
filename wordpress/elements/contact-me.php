<div id="contact-me" class="footer-one">
    <div class="dashed-top-border-container">
        <div class="padding-top-border"></div>
    </div>

    <div class="footer-info">
        <?php if ($retro_contact_logo = get_field('retro_contact_logo')): ?>
        <a href="<?php bloginfo('wpurl'); ?>">
            <img class="footer-logo" src="<?php echo $retro_contact_logo; ?>" alt="Contact Me Logo" height="90" width="440"></a>
            <?php endif; ?>

            <p class="bottom-xxx">xxx</p>
            <?php if($retro_contact_text_below = get_field('retro_contact_text_below')): ?>
            <p class="text-below"><?php echo $retro_contact_text_below; ?></p>
            <?php endif; ?>
            <div class="retro-form">
                <div class="contact-form">
                   <form>
                        <input class="send-form" type="text" placeholder="Name" maxlength="20" required>
                        <input class="send-form" type="email" placeholder="Email" maxlength="50" required>
                        <input class="send-form" type="text" placeholder="Subject" maxlength="20" required>
                        <textarea class="send-message" placeholder="Your message" maxlength="500" required></textarea>
                        <input class="send-submit" type="submit" value="Send Message">
                   </form>
                </div>
            </div>
    </div>
</div>

