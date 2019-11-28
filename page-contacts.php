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
                    <h2 class="section__title">Get In Touch</h2>
                </header>
                <div class="contacts-form">
                    <input type="text" name="name" placeholder="Name">
                    <div class="contacts-form__group">
                        <input type="email" name="name" placeholder="Email">
                        <input type="number" name="name" placeholder="Phone">
                    </div>
                    <textarea placeholder="Message"></textarea>
                    <input class="btn" type="submit" value="Send Message">
                </div>
            </div>
            <div class="contacts-page__item wow fadeInRight">
                <header class="section__header">
                    <h2 class="section__title">incididunt ut labore</h2>
                </header>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                <ul class="contacts-page__list">
                    <li><img src="assets/i/map.svg" alt="">
                        <span>Chișinău, Bulevardul Constantin Negruzzi 102</span>
                    </li>
                    <li><img src="assets/i/phone-fix.svg" alt="">
                        <span><a href="tel:(+373) 79 580 458">(+373) 79 580 458</a>, <a href="tel:(+373) 79 980 458">(+373) 79 980 458</a></span>
                    </li>
                    <li><img src="assets/i/mail-blue.svg" alt="">
                        <span><a href="mailto:clinic_dental@gmail.com">clinic_dental@gmail.com</a>,<br> <a
                                    href="mailto:support_dental@gmail.com">support_dental@gmail.com</a></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
