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
            <div class="section__subtitle"><?php echo carbon_get_theme_option('crb_services_block_subtitle'.get_lang()); ?></div>
            <div class="section__title"><?php echo get_the_title(15); ?></div>
        </header>
        <div class="blocks__content">
            <?php $services = new WP_Query([
                'category_name' => 'services',
                'posts_per_page' => -1
            ]); ?>
            <?php if($services->have_posts()): ?>
            	<?php while($services->have_posts()): ?>
            		<?php $services->the_post(); ?>
                    <div class="blocks__item wow fadeIn">
                        <?php echo kama_thumb_img('w=380 &h=180'); ?>

                        <div class="blocks__item-content">
                            <div class="blocks__title"><?php the_title(); ?></div>
                            <div class="blocks__text"><?php the_content(); ?></div>
                            <a class="blocks__btn" href="<?php the_permalink(); ?>"><?php echo carbon_get_theme_option('crb_read_more'.get_lang()); ?></a>
                        </div>
                    </div>
            	<?php endwhile; ?>
            	<?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<section class="section our-specialists">
    <div class="container">
        <header class="section__header">
            <h3 class="section__subtitle"><?php echo carbon_get_theme_option('crb_specialist_title'.get_lang()); ?></h3>
            <h2 class="section__title"><?php echo carbon_get_theme_option('crb_specialist_subtitle'.get_lang()); ?></h2>
        </header>
        <div class="blocks__content blocks__content-4">
            <?php $specialists = new WP_Query([
                'post_type' => 'specialist',
                'posts_per_page' => -1
            ]); ?>

            <?php if($specialists->have_posts()): ?>
            	<?php while($specialists->have_posts()): ?>
            		<?php $specialists->the_post(); ?>
                    <?php $profession =  get_the_terms(get_the_ID(),'profession')[0]->name;?>
                    <div class="blocks__item wow fadeIn">
                        <img src="<?php echo getThePostThumbSrc(280, 216) ?>" alt="">

                        <div class="blocks__item-content">
                            <a href="<?php the_permalink(); ?>" class="blocks__title"><?php the_title(); ?></a>
                            <div class="blocks__colored"><?php echo $profession; ?></div>
                        </div>
                    </div>
            	<?php endwhile; ?>
            	<?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>

