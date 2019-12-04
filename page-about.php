<?php
/**
 * Template Name: О нас
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
get_header();
?>
<div class="page-intro" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/i/page-intro-about.jpg')">
    <div class="container">
        <h2 class="page-intro__title"><?php the_title(); ?></h2>
    </div>
</div>
<section class="single-post section">
    <div class="container">
        <div class="single-post__content wow zoomIn">
            <header class="section__header">
                <div class="section__subtitle">Primary care dental</div>
                <div class="section__title">Beautiful Natural Smiles</div>
            </header>
            <div class="single-post__text">
                <p>A general dentist is your primary care dental provider. This dentist diagnoses, treats, and manages
                    your overall oral health care needs, including gum care, root canals, fillings, crowns, veneers,
                    bridges, and preventive education.</p>
                <p>Promotes unrealistic expectations of what a healthy smile looks like and it is clearly having a
                    negative effect</p>
            </div>
            <a class="btn">Read more</a>
        </div>
        <img class="single-post__img" src="<?php echo get_template_directory_uri(); ?>/assets/i/single-post-image.jpg">
    </div>
</section>
<section class="single-post single-post--reverse section">
    <div class="container">
        <div class="single-post__content wow zoomIn">
            <header class="section__header">
                <div class="section__subtitle">Primary care dental</div>
                <div class="section__title">Beautiful Natural Smiles</div>
            </header>
            <div class="single-post__text">
                <p>A general dentist is your primary care dental provider. This dentist diagnoses, treats, and manages
                    your overall oral health care needs, including gum care, root canals, fillings, crowns, veneers,
                    bridges, and preventive education.</p>
                <p>Promotes unrealistic expectations of what a healthy smile looks like and it is clearly having a
                    negative effect</p>
            </div>
            <a class="btn">Read more</a>
        </div>
        <img class="single-post__img" src="<?php echo get_template_directory_uri(); ?>/assets/i/single-post-image.jpg">
    </div>
</section>
<div class="container">
    <section class="about-content">
        <div class="about-content__item wow fadeIn">
            <header class="section__header">
                <h2 class="section__title">Duis aute irure</h2>
            </header>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat.</p>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                labore et dolore magna aliqua.</p>
        </div>
        <div class="about-content__item wow fadeIn">
            <header class="section__header">
                <h2 class="section__title">Exercitation ullamco</h2>
            </header>
            <ul class="list">
                <li class="list__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/check-icon.svg" alt="">
                    <span>Behavioral health</span>
                </li>
                <li class="list__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/check-icon.svg" alt="">
                    <span>Behavioral health</span>
                </li>
                <li class="list__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/check-icon.svg" alt="">
                    <span>Behavioral health</span>
                </li>
                <li class="list__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/check-icon.svg" alt="">
                    <span>Behavioral health</span>
                </li>
                <li class="list__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/check-icon.svg" alt="">
                    <span>Behavioral health</span>
                </li>
                <li class="list__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/check-icon.svg" alt="">
                    <span>Behavioral health</span>
                </li>
                <li class="list__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/check-icon.svg" alt="">
                    <span>Behavioral health</span>
                </li>
                <li class="list__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/check-icon.svg" alt="">
                    <span>Behavioral health</span>
                </li>
            </ul>
        </div>
    </section>
</div>
<?php get_footer(); ?>
