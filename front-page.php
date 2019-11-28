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
            <?php $testimonials = carbon_get_theme_option('crb_testimonials_fields'); ?>
            <?php foreach($testimonials as $item): ?>
                <div class="testimonials__item">
                    <div class="testimonials__img"><img src="<?php echo $item['image'];?>" alt=""></div>
                    <h3 class="testimonials__title"><?php echo $item['title'.get_lang()]; ?></h3>
                    <p class="testimonials__text"><?php echo $item['text'.get_lang()]; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php $exclusive = new WP_Query([
    'category_name' => 'exclusive',
    'posts_per_page' => 1
]); ?>
<?php if($exclusive->have_posts()): ?>
	<?php while($exclusive->have_posts()): ?>
		<?php $exclusive->the_post(); ?>
        <section class="single-post section">
            <div class="container">
                <div class="single-post__content wow slideInLeft">
                    <header class="section__header">
                        <div class="section__title"><?php the_title(); ?></div>
                    </header>
                    <div class="single-post__text">
	                    <?php the_content(); ?>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="btn"><?php echo carbon_get_theme_option('crb_read_more'.get_lang()); ?></a>
                </div>
                <img class="single-post__img wow slideInRight" src="<?php echo getThePostThumbSrc(580, 470); ?>">
            </div>
        </section>
	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
<?php endif; ?>

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
