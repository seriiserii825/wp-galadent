<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bs-galadent
 */

get_header();
?>
    <div class="page-intro"
         style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/i/page-intro-about.jpg')">
        <div class="container">
            <h2 class="page-intro__title"><?php the_title(); ?></h2>
        </div>
    </div>

    <section class="single-post section single-post--reverse">
        <div class="container">
            <div class="single-post__content wow fadeIn">
                <header class="section__header">
                    <div class="section__title"><?php the_title(); ?></div>
                </header>
                <div class="single-post__text">
					<?php if ( have_posts() ): ?>
						<?php the_post(); ?>
						<?php the_content(); ?>
					<?php endif; ?>
                </div>
            </div>
			<?php echo kama_thumb_img( 'w=575' ); ?>
        </div>
    </section>

    <div class="container">
        <div class="services-single">
            <div class="services-single__item wow fadeInLeft">
                <header class="section__header">
                    <h2 class="section__title"><?php echo get_the_title( 15 ); ?></h2>
                </header>
                <ul class="simple-list">
					<?php $services = new WP_Query( [
						'category_name'  => 'services',
						'posts_per_page' => 4
					] ); ?>
					<?php if ( $services->have_posts() ): ?>
						<?php while ( $services->have_posts() ): ?>
							<?php $services->the_post(); ?>
							<?php $short_text = carbon_get_the_post_meta( 'crb_post_services_text' . get_lang() ); ?>
							<?php $short_text = get_short_text_clear( $short_text, 160 ); ?>
                            <li class="simple-list__item">
                                <a href="<?php the_permalink(); ?>"><b><?php the_title(); ?></b></a>
                                <p><?php echo $short_text; ?>...</p>
                            </li>
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
					<?php endif; ?>
                </ul>
            </div>
            <div class="services-single__item wow fadeIn">
                <header class="section__header">
                    <h2 class="section__title"><?php echo esc_html_e( 'Our specialists', 'bs-galadent' ); ?></h2>
                </header>
                <div class="blocks__content blocks__content-4">
					<?php $specialist = new WP_Query( [
						'post_type'      => 'specialist',
						'posts_per_page' => 2
					] ); ?>
					<?php if ( $specialist->have_posts() ): ?>
						<?php while ( $specialist->have_posts() ): ?>
							<?php $specialist->the_post(); ?>
							<?php $profession = get_the_terms( get_the_ID(), 'profession' )[0]->name; ?>

                            <div class="blocks__item">
								<?php echo kama_thumb_img( 'w=280' ); ?>
                                <div class="blocks__item-content">
                                    <div class="blocks__title"><?php the_title(); ?></div>
                                    <div class="blocks__colored"><?php echo $profession; ?></div>
                                </div>
                            </div>
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
					<?php endif; ?>

                </div>
            </div>
        </div>
    </div>
<?php
get_footer();
