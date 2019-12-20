<?php
/**
 * Template Name: О нас
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
<div class="page-about">
	<?php if ( have_posts() ): ?>
		<?php the_post(); ?>
        <section class="single-post section">
            <div class="container">
                <div class="single-post__content wow zoomIn">
                    <header class="section__header">
                        <div class="section__subtitle"><?php echo esc_html__( 'Clinica stomatologica', 'bs-galadent' ); ?></div>
                        <div class="section__title"><?php echo bloginfo('name'); ?></div>
                    </header>
                    <div class="single-post__text">
						<?php the_content(); ?>
                    </div>
                </div>
                <img class="single-post__img"
                     src="<?php echo get_template_directory_uri(); ?>/assets/i/single-post-image.jpg">
            </div>
        </section>

	<?php endif; ?>
</div>
<?php get_footer(); ?>
