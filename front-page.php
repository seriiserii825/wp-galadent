<?php
/**
 * Template Name: Главная
 */
?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta charset="utf-8">
<!--    <link rel="stylesheet" type="text/css" href="assets/libs/wow/animate.min.css">-->
<!--    <link rel="stylesheet" type="text/css" href="assets/css/my.css">-->
    <?php wp_head(); ?>
</head>

<body>
<header class="main-header">
    <div class="container">
        <div class="main-header__content">
            <div class="phone"><img class="phone__img" src="<?php echo get_template_directory_uri(); ?>/assets/i/phone.svg" alt="">
                <span>Phone:</span>
                <a href="tel:+37379505748">+ (373) 79 505 748</a>
            </div>
            <div class="socials"><img class="mail" src="<?php echo get_template_directory_uri(); ?>/assets/i/mail.svg">
                <a class="socials__email" href="mailto:clinic_dental@gmail.com">clinic_dental@gmail.com</a>
                <div class="socials__icons">
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/facebook.svg" alt=""></a>
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/twitter.svg" alt=""></a>
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
            <a class="logo" href="index.html"><img class="logo__img" src="<?php echo get_template_directory_uri(); ?>/assets/i/logo.svg">
                <span class="logo__text">DENTOFLEX</span>
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
<section class="slider-wrap">
    <div class="slider__buttons">
        <a class="slider__button slider__button--left" href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/arrow-left.svg" alt=""></a>
        <a class="slider__button slider__button--right" href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/arrow-right.svg" alt=""></a>
    </div>
    <div class="slider" id="js-slider">
        <div class="slider__item">
            <div class="slider__img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/i/slider/slide-1.jpg')"></div>
            <div class="slider__content">
                <h2 class="slider__title">For a Good ORAL HEALTH</h2>
                <p class="slider__text">Dentist is your primary care dental provider.<br> This dentist diagnoses and
                    treats.</p>
                <a class="btn" href="#">Read more</a>
            </div>
        </div>
        <div class="slider__item">
            <div class="slider__img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/i/slider/slide-1.jpg')"></div>
            <div class="slider__content">
                <h2 class="slider__title">For a Good</h2>
                <p class="slider__text">Dentist is your primary care dental provider.<br> This dentist diagnoses and
                    treats.</p>
                <a class="btn" href="#">Read more</a>
            </div>
        </div>
        <div class="slider__item">
            <div class="slider__img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/i/slider/slide-1.jpg')"></div>
            <div class="slider__content">
                <h2 class="slider__title">For HEALTH</h2>
                <p class="slider__text">Dentist is your primary care dental provider.<br> This dentist diagnoses and
                    treats.</p>
                <a class="btn" href="#">Read more</a>
            </div>
        </div>
    </div>
</section>
<section class="testimonials">
    <div class="container">
        <div class="testimonials__content">
            <div class="testimonials__item">
                <div class="testimonials__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/testimonials/1.svg" alt=""></div>
                <h3 class="testimonials__title">Therapy</h3>
                <p class="testimonials__text">The results are part of National Smile Month, a nationwide health campaign
                    that promotes the benefits of a healthy smile.</p>
            </div>
            <div class="testimonials__item">
                <div class="testimonials__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/testimonials/2.svg" alt=""></div>
                <h3 class="testimonials__title">Orthodontics</h3>
                <p class="testimonials__text">The results are part of National Smile Month, a nationwide health campaign
                    that promotes the benefits of a healthy smile.</p>
            </div>
            <div class="testimonials__item">
                <div class="testimonials__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/testimonials/3.svg" alt=""></div>
                <h3 class="testimonials__title">Therapy</h3>
                <p class="testimonials__text">The results are part of National Smile Month, a nationwide health campaign
                    that promotes the benefits of a healthy smile.</p>
            </div>
            <div class="testimonials__item">
                <div class="testimonials__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/testimonials/4.svg" alt=""></div>
                <h3 class="testimonials__title">Surgery</h3>
                <p class="testimonials__text">The results are part of National Smile Month, a nationwide health campaign
                    that promotes the benefits of a healthy smile.</p>
            </div>
        </div>
    </div>
</section>
<section class="single-post section">
    <div class="container">
        <div class="single-post__content wow slideInLeft">
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
        <img class="single-post__img wow slideInRight" src="<?php echo get_template_directory_uri(); ?>/assets/i/single-post-image.jpg">
    </div>
</section>
<section class="blocks-section section section--dark">
    <div class="container">
        <header class="section__header">
            <div class="section__subtitle">Types of services</div>
            <div class="section__title">Our Services</div>
        </header>
        <div class="blocks__content">
            <div class="blocks__item wow fadeIn"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/our-services/1.jpg" alt="">
                <div class="blocks__item-content">
                    <div class="blocks__title">Protetica dentara</div>
                    <div class="blocks__text">The results are part of National Smile Month, a nationwide health campaign
                        that promotes the benefits of a healthy smile.
                    </div>
                    <a class="blocks__btn" href="services-single.html">Read more</a>
                </div>
            </div>
            <div class="blocks__item wow fadeIn"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/our-services/2.jpg" alt="">
                <div class="blocks__item-content">
                    <div class="blocks__title">Chirurgie</div>
                    <div class="blocks__text">The results are part of National Smile Month, a nationwide health campaign
                        that promotes the benefits of a healthy smile.
                    </div>
                    <a class="blocks__btn" href="services-single.html">Read more</a>
                </div>
            </div>
            <div class="blocks__item wow fadeIn"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/our-services/3.jpg" alt="">
                <div class="blocks__item-content">
                    <div class="blocks__title">Terapie dentara si parodontala</div>
                    <div class="blocks__text">The results are part of National Smile Month, a nationwide health campaign
                        that promotes the benefits of a healthy smile.
                    </div>
                    <a class="blocks__btn" href="services-single.html">Read more</a>
                </div>
            </div>
            <div class="blocks__item wow fadeIn"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/our-services/2.jpg" alt="">
                <div class="blocks__item-content">
                    <div class="blocks__title">Carie dentara</div>
                    <div class="blocks__text">The results are part of National Smile Month, a nationwide health campaign
                        that promotes the benefits of a healthy smile.
                    </div>
                    <a class="blocks__btn" href="services-single.html">Read more</a>
                </div>
            </div>
            <div class="blocks__item wow fadeIn"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/our-services/3.jpg" alt="">
                <div class="blocks__item-content">
                    <div class="blocks__title">Endodontia</div>
                    <div class="blocks__text">The results are part of National Smile Month, a nationwide health campaign
                        that promotes the benefits of a healthy smile.
                    </div>
                    <a class="blocks__btn" href="services-single.html">Read more</a>
                </div>
            </div>
            <div class="blocks__item wow fadeIn"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/our-services/1.jpg" alt="">
                <div class="blocks__item-content">
                    <div class="blocks__title">Prosthodontics</div>
                    <div class="blocks__text">The results are part of National Smile Month, a nationwide health campaign
                        that promotes the benefits of a healthy smile.
                    </div>
                    <a class="blocks__btn" href="services-single.html">Read more</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section our-specialists">
    <div class="container">
        <header class="section__header">
            <h3 class="section__subtitle">Our specialists</h3>
            <h2 class="section__title">Our team of doctors</h2>
        </header>
        <div class="blocks__content blocks__content-4">
            <div class="blocks__item wow fadeIn"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/our-specialists/1.jpg" alt="">
                <div class="blocks__item-content">
                    <div class="blocks__title">Anastasia Zubkova</div>
                    <div class="blocks__colored">Orthodontics</div>
                </div>
            </div>
            <div class="blocks__item wow fadeIn"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/our-specialists/2.jpg" alt="">
                <div class="blocks__item-content">
                    <div class="blocks__title">Serghey Dandist</div>
                    <div class="blocks__colored">Dantist</div>
                </div>
            </div>
            <div class="blocks__item wow fadeIn"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/our-specialists/3.jpg" alt="">
                <div class="blocks__item-content">
                    <div class="blocks__title">Oleg Pasta</div>
                    <div class="blocks__colored">Surgeon</div>
                </div>
            </div>
            <div class="blocks__item wow fadeIn"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/our-specialists/1.jpg" alt="">
                <div class="blocks__item-content">
                    <div class="blocks__title">Stanislav Karies</div>
                    <div class="blocks__colored">Orthodontics</div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="main-footer">
    <div class="container">
        <div class="modal-block-wrap wow fadeInRightBig">
            <div class="modal-block">
                <div class="modal-block__text">Booking by phone or fill out the form:</div>
                <a class="modal-block__phone" href="tel:37379505748">+ (373) 79 505 748</a>
                <a class="btn btn--white" id="js-show-popup" href="#">Booking</a>
            </div>
        </div>
        <ul class="main-footer__menu">
            <li>
                <a href="#">About</a>
            </li>
            <li>
                <a href="#">Products</a>
            </li>
            <li>
                <a href="#">Price list</a>
            </li>
            <li>
                <a href="#">Contacts</a>
            </li>
        </ul>
    </div>
</footer>
<div class="copyright">© 2019 Industry. All rights reserved.</div>
<div class="overlay" id="js-overlay"></div>
<div class="popup" id="js-popup">
    <div class="popup__content">
        <button class="popup__close" id="js-popup-close"></button>
        <header class="section__header">
            <h2 class="section__title">Get in touch</h2>
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
</div>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/assets/libs/html5shiv/es5-shim.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/libs/html5shiv/html5shiv.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/libs/html5shiv/respond.min.js"></script>
<!--<![endif]-->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
<!--<script src="<?php echo get_template_directory_uri(); ?>/assets/libs/wow/wow.min.js"></script>-->
<!--<script src="<?php echo get_template_directory_uri(); ?>/assets/libs/jquery-easy-scroll/jquery.easeScroll.js"></script>-->
<!--<script src="<?php echo get_template_directory_uri(); ?>/assets/libs/slick/slick/slick.min.js"></script>-->
<!--<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>-->
<?php wp_footer(); ?>
</body>
</html>
