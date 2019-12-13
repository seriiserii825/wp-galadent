<?php
/**
 * Template Name: Контакты
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
get_header();
?>
<div class="page-intro"
     style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/i/page-intro-about.jpg')">
    <div class="container">
        <h2 class="page-intro__title"><?php the_title(); ?></h2>
    </div>
</div>

<div class="contacts-page">
    <div class="container">
        <div class="contacts-page__container">
            <div class="contacts-page__item wow fadeInLeft">
                <header class="section__header">
                    <h2 class="section__title">Contacteaza-ne</h2>
                </header>
                <div class="contacts-form">
                    <?php if(get_lang() == '_ru'): ?>
	                    <?php echo do_shortcode('[contact-form-7 id="80" title="Form ru"]'); ?>
                    <?php else: ?>
	                    <?php echo do_shortcode('[contact-form-7 id="94" title="Form ro"]'); ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="contacts-page__item wow fadeInRight">
                <header class="section__header">
                    <h2 class="section__title"><?php echo esc_html__( 'Adresa noastra', 'bs-galadent' ); ?></h2>
                </header>
                <p><?php echo esc_html__( 'Gasiți citeva minute pentru a ne contacta.', 'bs-galadent' ); ?></p>
                <ul class="contacts-page__list">
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/i/map.svg" alt="">
                        <span><?php echo carbon_get_theme_option('crb_address'.get_lang()); ?></span>
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/i/phone-fix.svg" alt="">
                        <div>
                            <a href="tel:<?php echo clear_phone(carbon_get_theme_option('crb_phone')); ?>"><?php echo carbon_get_theme_option('crb_phone'); ?></a>
                            <a href="tel:<?php echo clear_phone(carbon_get_theme_option('crb_phone_2')); ?>"><?php echo carbon_get_theme_option('crb_phone_2'); ?></a>
                            <a href="tel:<?php echo clear_phone(carbon_get_theme_option('crb_phone_3')); ?>"><?php echo carbon_get_theme_option('crb_phone_3'); ?></a>
                        </div>
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/i/mail-blue.svg" alt="">
                        <a href="mailto:<?php echo carbon_get_theme_option('crb_mail'); ?>"><?php echo carbon_get_theme_option('crb_mail'); ?></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2719.8747374477525!2d28.819407315462893!3d47.02306373609824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c97dcd7165caed%3A0x1d7c3c4d480b3c1a!2zU3RyYWRhIE1hcmlhIENlYm90YXJpIDExLCBDaGnImWluxIN1LCDQnNC-0LvQtNCw0LLQuNGP!5e0!3m2!1sru!2s!4v1576226791904!5m2!1sru!2s" width="100%" height="650" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </div>
</div>
<?php get_footer(); ?>
