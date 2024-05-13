<?php
/**
 * Admin functions.
 *
 * @package RT Education School
 */

define('RT_EDUCATION_SCHOOL_SUPPORT',__('https://wordpress.org/support/theme/rt-education-school/','rt-education-school'));
define('RT_EDUCATION_SCHOOL_REVIEW',__('https://wordpress.org/support/theme/rt-education-school/reviews/#new-post','rt-education-school'));
define('RT_EDUCATION_SCHOOL_DOC_URL',__('https://preview.wpradiant.net/tutorial/rt-education-school/','rt-education-school'));
define('RT_EDUCATION_SCHOOL_BUY_NOW',__('https://www.wpradiant.net/products/school-wordpress-theme/','rt-education-school'));
define('RT_EDUCATION_SCHOOL_LIVE_DEMO',__('https://preview.wpradiant.net/education-school-blocks/','rt-education-school'));
define('RT_EDUCATION_SCHOOL_PRO_DOC',__('https://preview.wpradiant.net/tutorial/education-school-pro/','rt-education-school'));

/**
 * Register admin page.
 *
 * @since 1.0.0
 */

function rt_education_school_admin_menu_page() {

	$rt_education_school_theme = wp_get_theme( get_template() );

	add_theme_page(
		$rt_education_school_theme->display( 'Name' ),
		$rt_education_school_theme->display( 'Name' ),
		'manage_options',
		'rt-education-school',
		'rt_education_school_do_admin_page'
	);

}
add_action( 'admin_menu', 'rt_education_school_admin_menu_page' );

function rt_education_school_admin_theme_style() {
	wp_enqueue_style('rt-education-school-custom-admin-style', esc_url(get_template_directory_uri()) . '/get-started/getstart.css');
	wp_enqueue_script( 'admin-notice-script', get_template_directory_uri() . '/get-started/js/admin-notice-script.js', array( 'jquery' ) );
    wp_localize_script('admin-notice-script', 'example_ajax_obj', array('ajaxurl' => admin_url('admin-ajax.php')));
}
add_action('admin_enqueue_scripts', 'rt_education_school_admin_theme_style');

/**
 * Render admin page.
 *
 * @since 1.0.0
 */
function rt_education_school_do_admin_page() {

	$rt_education_school_theme = wp_get_theme( get_template() );
	?>
	<div class="rt-education-school-appearence wrap about-wrap">
		<div class="head-btn">
			<div><h1><?php echo $rt_education_school_theme->display( 'Name' ); ?></h1></div>
			<div class="demo-btn">
				<span>
					<a class="button button-pro" href="<?php echo esc_url( RT_EDUCATION_SCHOOL_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Buy Now', 'rt-education-school' ); ?></a>
				</span>
				<span>
					<a class="button button-demo" href="<?php echo esc_url( RT_EDUCATION_SCHOOL_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e( 'Demo', 'rt-education-school' ); ?></a>
				</span>
				<span>
					<a class="button button-doc" href="<?php echo esc_url( RT_EDUCATION_SCHOOL_PRO_DOC ); ?>" target="_blank"><?php esc_html_e( 'Documentation', 'rt-education-school' ); ?></a>
				</span>
			</div>
		</div>
		
		<div class="two-col">

			<div class="about-text">
				<?php
					$description_raw = $rt_education_school_theme->display( 'Description' );
					$main_description = explode( 'Official', $description_raw );
					?>
				<?php echo wp_kses_post( $main_description[0] ); ?>
			</div><!-- .col -->

			<div class="about-img">
				<a href="<?php echo esc_url( $rt_education_school_theme->display( 'ThemeURI' ) ); ?>" target="_blank"><img src="<?php echo trailingslashit( get_template_directory_uri() ); ?>screenshot.png" alt="<?php echo esc_attr( $rt_education_school_theme->display( 'Name' ) ); ?>" /></a>
			</div><!-- .col -->

		</div><!-- .two-col -->
		<div class="four-col">

			<div class="col">

				<h3><i class="dashicons dashicons-book-alt"></i><?php esc_html_e( 'Free Theme Directives', 'rt-education-school' ); ?></h3>

				<p>
					<?php esc_html_e( 'This article will walk you through the different phases of setting up and handling your WordPress website.' ); ?>
				</p>

				<p>
					<a class="button green button-primary" href="<?php echo esc_url( RT_EDUCATION_SCHOOL_DOC_URL ); ?>" target="_blank"><?php esc_html_e( 'Free Documentation', 'rt-education-school' ); ?></a>
				</p>

			</div><!-- .col -->

			<div class="col">

				<h3><i class="dashicons dashicons-admin-customizer"></i><?php esc_html_e( 'Full Site Editing', 'rt-education-school' ); ?></h3>

				<p>
					<?php esc_html_e( 'We have used Full Site Editing which will help you preview your changes live and fast.', 'rt-education-school' ); ?>
				</p>

				<p>
					<a class="button button-primary" href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>" ><?php esc_html_e( 'Use Site Editor', 'rt-education-school' ); ?></a>
				</p>

			</div><!-- .col -->

			<div class="col">

				<h3><i class="dashicons dashicons-book-alt"></i><?php esc_html_e( 'Leave us a review', 'rt-education-school' ); ?></h3>
				<p>
					<?php esc_html_e( 'We would love to hear your feedback.', 'rt-education-school' ); ?>
				</p>

				<p>
					<a class="button button-primary" href="<?php echo esc_url( RT_EDUCATION_SCHOOL_REVIEW ); ?>" target="_blank"><?php esc_html_e( 'Review', 'rt-education-school' ); ?></a>
				</p>

			</div><!-- .col -->


			<div class="col">

				<h3><i class="dashicons dashicons-sos"></i><?php esc_html_e( 'Help &amp; Support', 'rt-education-school' ); ?></h3>

				<p>
					<?php esc_html_e( 'If you have any question/feedback regarding theme, please post in our official support forum.', 'rt-education-school' ); ?>
				</p>

				<p>
					<a class="button button-primary" href="<?php echo esc_url( RT_EDUCATION_SCHOOL_SUPPORT ); ?>" target="_blank"><?php esc_html_e( 'Get Support', 'rt-education-school' ); ?></a>
				</p>

			</div><!-- .col -->

		</div><!-- .four-col -->


	</div><!-- .wrap -->
	<?php

}