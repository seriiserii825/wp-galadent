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
            <div class="phone"><img class="phone__img" src="<?php echo get_template_directory_uri(); ?>/assets/i/phone.svg" alt="">
                <span><?php echo carbon_get_theme_option('crb_phone_translate'.get_lang()); ?>:</span>
                <?php
                    $phone = carbon_get_theme_option('crb_phone');
                    $phone_clear = clear_phone($phone);
                ?>
                <a href="tel:<?php echo $phone_clear; ?>"><?php echo $phone; ?></a>
            </div>
            <div class="socials">
                <img class="mail" src="<?php echo get_template_directory_uri(); ?>/assets/i/mail.svg">
                <a class="socials__email" href="mailto:<?php echo carbon_get_theme_option('crb_mail'); ?>"><?php echo carbon_get_theme_option('crb_mail'); ?></a>
                <div class="socials__icons">
                    <a href="<?php echo carbon_get_theme_option('crb_facebook'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/facebook.svg" alt=""></a>
                    <a href="<?php echo carbon_get_theme_option('crb_twitter'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/twitter.svg" alt=""></a>
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
            <a class="logo" href="<?php echo home_url(); ?>">
                <img class="logo__img" src="<?php echo carbon_get_theme_option('crb_logo_image'); ?>">
                <span class="logo__text"><?php echo bloginfo('name'); ?></span>
            </a>
            <ul class="main-menu" id="js-main-menu">
                <li class="current-menu-item">
                    <a href="about.html">About us</a>
                </li>
                <li>
                    <a href="services.html">Services</a>
                </li>
                <li>
                    <a href="price-list.html">Price list</a>
                </li>
                <li>
                    <a href="contacts.html">Contacts</a>
                </li>
            </ul>
            <div class="wpglobus-lang">
                <div class="list">
                    <a class="wpglobus-selector-link wpglobus-current-language" href="#"><img
                                src="https://euconsult.md/wp-content/plugins/wpglobus/flags/ro.png" alt="">
                        <span class="name">Rom&acirc;n&abreve;</span>
                        <span class="code">RO</span>
                    </a>
                    <a class="wpglobus-selector-link" href="#"><img
                                src="https://euconsult.md/wp-content/plugins/wpglobus/flags/ru.png" alt="">
                        <span class="name">&Rcy;&ucy;&scy;&scy;&kcy;&icy;&jcy;</span>
                        <span class="code">RU</span>
                    </a>
                    <a class="wpglobus-selector-link" href="#"><img
                                src="https://euconsult.md/wp-content/plugins/wpglobus/flags/us.png" alt="">
                        <span class="name">English</span>
                        <span class="code">EN</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
