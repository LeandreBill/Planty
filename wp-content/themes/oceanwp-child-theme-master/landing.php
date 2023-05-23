<?php
/**
 * Template Name: Landing Page
 *
 * @package OceanWP WordPress theme
 */

?>

<!DOCTYPE html>
<html class="<?php echo esc_attr( oceanwp_html_classes() ); ?>" <?php language_attributes(); ?>>
	<head>

		<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5SMKXCH');</script>
<!-- End Google Tag Manager -->


		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<link rel="profile" href="http://gmpg.org/xfn/11">

		<?php wp_head(); ?>
	</head>






	<body <?php body_class(); ?> <?php oceanwp_schema_markup( 'html' ); ?>>

	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5SMKXCH"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<?php wp_body_open(); ?>

<?php do_action( 'ocean_before_outer_wrap' ); ?>

<div id="outer-wrap" class="site clr">

	<a class="skip-link screen-reader-text" href="#main"><?php echo esc_html( oceanwp_theme_strings( 'owp-string-header-skip-link', false ) ); ?></a>

	<?php do_action( 'ocean_before_wrap' ); ?>

	<div id="wrap" class="clr">

		<?php do_action( 'ocean_top_bar' ); ?>

		<?php do_action( 'ocean_header' ); ?>

		<?php do_action( 'ocean_before_main' ); ?>

		<main id="main" class="site-main clr"<?php oceanwp_schema_markup( 'main' ); ?> role="main">

			<?php do_action( 'ocean_page_header' ); ?>







	<!-- Begin Body -->
	<body <?php body_class(); ?> <?php oceanwp_schema_markup( 'html' ); ?>>

		<?php wp_body_open(); ?>

		<?php do_action( 'ocean_before_outer_wrap' ); ?>

		<div id="outer-wrap" class="site clr">

		<a class="skip-link screen-reader-text" href="#main"><?php echo esc_html( oceanwp_theme_strings( 'owp-string-header-skip-link', false ) ); ?></a>

			<?php do_action( 'ocean_before_wrap' ); ?>

			<div id="wrap" class="clr">

				<?php do_action( 'ocean_before_main' ); ?>

				<main id="main" class="site-main clr" style="background-color: #3B8E46"><?php oceanwp_schema_markup( 'main' ); ?>

					<?php do_action( 'ocean_before_content_wrap' ); ?>

					<div id="content-wrap" class="container clr">

						<?php do_action( 'ocean_before_primary' ); ?>

						<section id="primary" class="content-area clr">

							<?php do_action( 'ocean_before_content' ); ?>

							<div id="content" class="site-content clr">

								<?php do_action( 'ocean_before_content_inner' ); ?>

								<?php
								while ( have_posts() ) :
									the_post();
									?>

									<div class="entry-content entry clr">
										<?php the_content(); ?>
									</div><!-- .entry-content -->

								<?php endwhile; ?>

								<?php do_action( 'ocean_after_content_inner' ); ?>

							</div><!-- #content -->

							<?php do_action( 'ocean_after_content' ); ?>

						</section><!-- #primary -->

						<?php do_action( 'ocean_after_primary' ); ?>

					</div><!-- #content-wrap -->

					<?php do_action( 'ocean_after_content_wrap' ); ?>

				</main><!-- #main-content -->

				<?php do_action( 'ocean_after_main' ); ?>

			</div><!-- #wrap -->

			<?php do_action( 'ocean_after_wrap' ); ?>

		</div><!-- .outer-wrap -->

		<?php do_action( 'ocean_after_outer_wrap' ); ?>

		<?php wp_footer(); ?>






		</main><!-- #main -->

<?php do_action( 'ocean_after_main' ); ?>

<?php do_action( 'ocean_before_footer' ); ?>

<?php
// Elementor `footer` location.
if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'footer' ) ) {
	?>

	<?php do_action( 'ocean_footer' ); ?>

<?php } ?>

<?php do_action( 'ocean_after_footer' ); ?>

</div><!-- #wrap -->

<?php do_action( 'ocean_after_wrap' ); ?>

</div><!-- #outer-wrap -->

<?php do_action( 'ocean_after_outer_wrap' ); ?>

<?php
// If is not sticky footer.
if ( ! class_exists( 'Ocean_Sticky_Footer' ) ) {
get_template_part( 'partials/scroll-top' );
}
?>

<?php
// Search overlay style.
if ( 'overlay' === oceanwp_menu_search_style() ) {
get_template_part( 'partials/header/search-overlay' );
}
?>

<?php
// If sidebar mobile menu style.
if ( 'sidebar' === oceanwp_mobile_menu_style() ) {

// Mobile panel close button.
if ( get_theme_mod( 'ocean_mobile_menu_close_btn', true ) ) {
	get_template_part( 'partials/mobile/mobile-sidr-close' );
}
?>

<?php
// Mobile Menu (if defined).
get_template_part( 'partials/mobile/mobile-nav' );
?>

<?php
// Mobile search form.
if ( get_theme_mod( 'ocean_mobile_menu_search', true ) ) {
	ob_start();
	get_template_part( 'partials/mobile/mobile-search' );
	echo ob_get_clean();
}
}
?>

<?php
// If full screen mobile menu style.
if ( 'fullscreen' === oceanwp_mobile_menu_style() ) {
get_template_part( 'partials/mobile/mobile-fullscreen' );
}
?>

<?php wp_footer(); ?>
</body>
</html>











	</body>
</html>
