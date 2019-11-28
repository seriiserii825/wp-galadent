<footer class="main-footer">
    <div class="container">
        <div class="modal-block-wrap wow fadeInRightBig">
            <div class="modal-block">
				<?php
				$phone       = carbon_get_theme_option( 'crb_phone' );
				$phone_clear = clear_phone( $phone );
				?>
                <div class="modal-block__text"><?php echo carbon_get_theme_option( 'crb_form_title' . get_lang() ) ?>:
                </div>
                <a class="modal-block__phone" href="tel:<?php echo $phone_clear; ?>"><?php echo $phone; ?></a>
                <a class="btn btn--white" id="js-show-popup"
                   href="#"><?php echo carbon_get_theme_option( 'crb_form_btn' . get_lang() ); ?></a>
            </div>
        </div>
		<?php wp_nav_menu( [
			'theme_location'  => '',
			'menu'            => '',
			'container'       => '',
			'container_class' => '',
			'container_id'    => '',
			'menu_class'      => 'main-footer__menu',
			'menu_id'         => '',
			'echo'            => true,
			'fallback_cb'     => 'wp_page_menu',
			'before'          => '',
			'after'           => '',
			'link_before'     => '',
			'link_after'      => '',
			'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			'depth'           => 0,
			'walker'          => '',
		] ); ?>
    </div>
</footer>
<div class="copyright"><?php echo carbon_get_theme_option( 'crb_copyright' . get_lang() ); ?></div>
<div class="overlay" id="js-overlay"></div>
<div class="popup" id="js-popup">
    <div class="popup__content">
        <button class="popup__close" id="js-popup-close"></button>
        <header class="section__header">
            <h2 class="section__title"><?php echo carbon_get_theme_option( 'crb_form_btn' . get_lang() ); ?></h2>
        </header>
        <div class="contacts-form">
            <?php if(get_lang() == '_ro'): ?>
	            <?php echo do_shortcode('[contact-form-7 id="81" title="Form ro"]'); ?>
            <?php else: ?>
	            <?php echo do_shortcode( '[contact-form-7 id="80" title="Form ru"]' ); ?>
            <?php endif; ?>
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

