<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta charset="utf-8">
	<?php wp_head(); ?>
</head>

<body>
<header class="main-header">
    <div class="container">
        <div class="main-header__content">
            <div class="phone"><img class="phone__img"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/i/phone.svg" alt="">
                <span><?php echo carbon_get_theme_option('crb_phone_translate' . get_lang()); ?>:</span>
				<?php
				$phone = carbon_get_theme_option('crb_phone');
				$phone_clear = clear_phone($phone);
				?>
                <a href="tel:<?php echo $phone_clear; ?>"><?php echo $phone; ?></a>
            </div>
            <div class="socials">
                <img class="mail" src="<?php echo get_template_directory_uri(); ?>/assets/i/mail.svg">
                <a class="socials__email"
                   href="mailto:<?php echo carbon_get_theme_option('crb_mail'); ?>"><?php echo carbon_get_theme_option('crb_mail'); ?></a>
                <div class="socials__icons">
                    <a href="<?php echo carbon_get_theme_option('crb_facebook'); ?>"><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/i/facebook.svg" alt=""></a>
                    <a href="<?php echo carbon_get_theme_option('crb_twitter'); ?>"><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/i/twitter.svg" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="navigation">
    <div class="container">
        <div class="navigation__content">
            <div class="sandwitch-wrapper">
                <div class="sandwitch">
                    <div class="sandwitch__line sandwitch__line--top"></div>
                    <div class="sandwitch__line sandwitch__line--middle"></div>
                    <div class="sandwitch__line sandwitch__line--bottom"></div>
                </div>
            </div>
            <div class="logo">
                <?php the_custom_logo(); ?>
            </div>
			<?php wp_nav_menu([
				'theme_location' => '',
				'menu' => '',
				'container' => '',
				'container_class' => '',
				'container_id' => '',
				'menu_class' => 'main-menu',
				'menu_id' => 'js-main-menu',
				'echo' => true,
				'fallback_cb' => 'wp_page_menu',
				'before' => '',
				'after' => '',
				'link_before' => '',
				'link_after' => '',
				'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'depth' => 0,
				'walker' => '',
			]); ?>

            <div class="wpglobus-lang">
				<?php if (!dynamic_sidebar('language')): ?>
                    <span style="color: red;">Language widget</span>
				<?php endif; ?>
            </div>
        </div>
    </div>
</div>
