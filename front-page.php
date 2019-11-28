<?php
/**
 * Template Name: Главная
 */
?>
<?php get_header(); ?>
<section class="slider-wrap">
    <div class="slider__buttons">
        <a class="slider__button slider__button--left" href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/arrow-left.svg" alt=""></a>
        <a class="slider__button slider__button--right" href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/arrow-right.svg" alt=""></a>
    </div>
    <div class="slider" id="js-slider">
        <?php $slider = new WP_Query([
            'post_type' => 'slider',
            'posts_per_page' => -1
        ]); ?>

        <?php if($slider->have_posts()): ?>
        	<?php while($slider->have_posts()): ?>
        		<?php $slider->the_post(); ?>
                <div class="slider__item">
                    <div class="slider__img" style="background-image: url('<?php echo getThePostThumbSrc(1920, 600) ?>')"></div>
                    <div class="slider__content">
                        <h2 class="slider__title"><?php the_title(); ?></h2>
                        <p class="slider__text"><?php echo carbon_get_the_post_meta('crb_slider_text'.get_lang()); ?></p>
                    </div>
                </div>
        	<?php endwhile; ?>
        	<?php wp_reset_postdata(); ?>
        <?php endif; ?>
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
<?php wp_footer(); ?>
