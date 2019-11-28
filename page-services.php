<?php
/**
 * Template Name: Услуги
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
<?php get_footer(); ?>
