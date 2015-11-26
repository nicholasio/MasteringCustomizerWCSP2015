<?php
namespace Mastering_Customizer\Core;

/**
 * Enqueue scripts for front-end.
 *
 * @uses wp_enqueue_stylet() to load front end styles.
 *
 * @return void.
 */
function scripts() {

	wp_enqueue_style(
		'bootstrap',
		MASTERING_CUSTOMIZER_TEMPLATE_URL . '/assets/css/bootstrap.min.css',
		array(),
		MASTERING_CUSTOMIZER_VERSION
	);

	wp_enqueue_style(
		'mastering-customizer',
		get_stylesheet_uri(),
		array(),
		MASTERING_CUSTOMIZER_VERSION
	);
}

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\scripts' );

/**
 * Enable support for various features and functionalities.
 *
 * @link http://codex.wordpress.org/Function_Reference/add_theme_support
 */
function supports() {
	/**
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	/**
	 * Enable support for Title Tag on posts and pages.
	 *
	 * @link https://codex.wordpress.org/Title_Tag
	 */
	add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', __NAMESPACE__ . '\\supports' );

function customizer_styles() {
	echo '<!--Customizer CSS-->';
	$button_color = get_theme_mod( 'wordcamp_sp_button_color' );

	if ( $button_color ) :
	?>
		<style type="text/css">
			.jumbotron .btn {
				background-color : <?php echo esc_attr( $button_color ); ?>;
				border-color : <?php echo esc_attr( $button_color ); ?>;
			}
		</style>
	<?php
	endif;
	echo '<!--/Customizer CSS-->';
}

add_action( 'wp_head', __NAMESPACE__ . '\\customizer_styles' );