<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
 * <?php the_header_image_tag(); ?>
 *
 * @link    https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package arilewp
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses arilewp_header_style()
 */
function arilewp_custom_header_setup() {
	$arilewp_main_header_style = get_theme_mod('arilewp_main_header_style', 'standard');		
	if($arilewp_main_header_style == 'overlap_classic'){	
		$header_image = get_template_directory_uri().'/assets/img/header-image.jpg';
	}else{ $header_image = ''; }
	add_theme_support( 'custom-header', apply_filters( 'arilewp_custom_header_args', array(
		'default-image'      => $header_image,
		'default-text-color' => '000000',
		'width'              => 1920,
		'height'             => 500,
		'flex-height'        => true,
		'flex-width'         => true,
		'wp-head-callback'   => 'arilewp_header_style',
	) ) );
}

add_action( 'after_setup_theme', 'arilewp_custom_header_setup' );

if ( ! function_exists( 'arilewp_header_style' ) ) :
	/**
	 * Styles the header image and text displayed on the blog.
	 *
	 * @see arilewp_custom_header_setup().
	 */
	function arilewp_header_style() {
		$header_text_color = get_header_textcolor();

		/*
		 * If no custom options for text are set, let's bail.
		 * get_header_textcolor() options: Any hex value, 'blank' to hide text. Default: add_theme_support( 'custom-header' ).
		 */
		if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
			return;
		}

		// If we get this far, we have custom styles. Let's do this.
		?>
		<style type="text/css">
			<?php
			// Has the text been hidden?
			if ( ! display_header_text() ) :
				?>
			.site-title,
			.site-description {
				position: absolute;
				clip: rect(1px, 1px, 1px, 1px);
			}

			<?php
			// If the user has set a custom color for the text use that.
			else :
				?>
			.site-title a,
			.site-description {
				color: #<?php echo esc_attr( $header_text_color ); ?> !important;
			}

			<?php endif; ?>
		</style>
		<?php
	}
endif;