<?php
get_header();
?>
	<div class="page-intro" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/i/page-intro-about.jpg')">
		<div class="container">
			<h2 class="page-intro__title">404</h2>
		</div>
	</div>
	<div class="page-404">
		<h2 class="page-404__title wow zoomIn">404</h2>
		<h3 class="page-404__subtitle wow zoomInLeft"><?php echo esc_html__( 'Pagin nu a fost gasita', 'bs-galadent' ); ?></h3><a class="btn wow zoomInRight" href="<?php echo home_url(); ?>">Acasa</a>
	</div>
<?php
get_footer();
