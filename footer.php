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
