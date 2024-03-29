<?php
/**
 * Implement an optional custom header for ZeroGravity
 *
 * See http://codex.wordpress.org/Custom_Headers
 *
 * @since ZeroGravity 1.0
 */

/**
 * Set up the WordPress core custom header arguments and settings.
 *
 * @uses add_theme_support() to register support for 3.4 and up.
 * @uses zerogravity_header_style() to style front-end.
 *
 * @since ZeroGravity 1.0
 */
function zerogravity_custom_header_setup() {
	$args = array(
		// Text color and image (empty to use none).
		'default-text-color'     => 'ffffff',
		'default-image'          => '',

		// Set height and width, with a maximum value for the width.
		'height'                 => 250,
		'width'                  => 1096,
		'max-width'              => 2000,

		// Support flexible height and width.
		'flex-height'            => true,
		'flex-width'             => true,

		// Random image rotation off by default.
		'random-default'         => false,

		// Callbacks for styling the header and the admin preview.
		'wp-head-callback'       => 'zerogravity_header_style',
	);

	add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'zerogravity_custom_header_setup' );

/**
 * Load our special font CSS file.
 *
 * @since ZeroGravity 1.0
 */
function zerogravity_custom_header_fonts() {
	$font_url = zerogravity_get_font_url();
	if ( ! empty( $font_url ) )
		wp_enqueue_style( 'zerogravity-fonts', esc_url_raw( $font_url ), array(), null );
}
add_action( 'admin_print_styles-appearance_page_custom-header', 'zerogravity_custom_header_fonts' );

/**
 * Style the header text displayed on the blog.
 *
 * get_header_textcolor() options: ffffff is default, hide text (returns 'blank'), or any hex value.
 *
 * @since ZeroGravity 1.0
 */
function zerogravity_header_style() {
	$text_color = get_header_textcolor();

	// If no custom options for text are set, let's bail
	if ( $text_color == get_theme_support( 'custom-header', 'default-text-color' ) )
		return;

	// If we get this far, we have custom styles.
	?>
	<style type="text/css" id="zerogravity-header-css">
	<?php
		// Has the text been hidden?
		if ( ! display_header_text() ) :
	?>
		.site-title,
		.site-description {
			position: absolute;
			clip: rect(1px 1px 1px 1px); /* IE7 */
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php
		// If the user has set a custom color for the text, use that.
		else :
	?>
		.site-header h1 a,
		.site-header h2 {
			color: #<?php echo $text_color; ?>;
		}
	<?php endif; ?>
	</style>
	<?php
}
