<?php
/** 
 * ArileWP Customizer Class
 *
 * @package arilewp
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'ArileWP_Customizer' ) ) :

	// ArileWP Customizer class
	
	class ArileWP_Customizer {
		
		// Constructor customizer
		public function __construct() {

			add_action( 'customize_register', array( $this, 'arilewp_customizer_panel_control' ) );
			add_action( 'customize_register', array( $this, 'arilewp_customizer_register' ) );
			add_action( 'customize_register', array( $this, 'arilewp_customizer_selective_refresh' ) );
			add_action( 'customize_preview_init', array( $this, 'arilewp_customizer_preview_js' ) );
			add_action( 'after_setup_theme', array( $this, 'arilewp_customizer_settings' ) );

		}

		// Register custom controls
		public function arilewp_customizer_panel_control( $wp_customize ) {

			// Controls path.
			$control_dir = ARILEWP_PARENT_INC_DIR . '/customizer/controls';
			$setting_dir = ARILEWP_PARENT_INC_DIR . '/customizer/settings';

			// Load customizer options extending classes.
			require ARILEWP_PARENT_CUSTOMIZER_DIR . '/custom-customizer/arilewp-customizer-panel.php';
			require ARILEWP_PARENT_CUSTOMIZER_DIR . '/custom-customizer/arilewp-customizer-section.php';

			// Register extended classes.
			$wp_customize->register_panel_type( 'ArileWP_Customize_Panel' );
			$wp_customize->register_section_type( 'ArileWP_Customize_Section' );

			// Load base class for controls.
			require_once $control_dir . '/code/arilewp-customize-base-control.php';
			// Load custom control classes.
			require_once $control_dir . '/code/arilewp-customize-background-control.php';
			require_once $control_dir . '/code/arilewp-customize-color-control.php';
			require_once $control_dir . '/code/arilewp-customize-dimensions-control.php';
			require_once $control_dir . '/code/arilewp-customize-heading-control.php';
			require_once $control_dir . '/code/arilewp-customize-editor-control.php';
			require_once $control_dir . '/code/arilewp-customize-radio-image-control.php';
			require_once $control_dir . '/code/arilewp-customize-radio-buttonset-control.php';
			require_once $control_dir . '/code/arilewp-customize-slider-control.php';
			require_once $control_dir . '/code/arilewp-customize-sortable-control.php';
			require_once $control_dir . '/code/arilewp-customize-text-control.php';
			require_once $control_dir . '/code/arilewp-customize-toggle-control.php';

			// Register JS-rendered control types.
			$wp_customize->register_control_type( 'ArileWP_Customize_Background_Control' );
			$wp_customize->register_control_type( 'ArileWP_Customize_Color_Control' );
			$wp_customize->register_control_type( 'ArileWP_Customize_Heading_Control' );
			$wp_customize->register_control_type( 'ArileWP_Customize_Editor_Control' );
			$wp_customize->register_control_type( 'ArileWP_Customize_Dimensions_Control' );
			$wp_customize->register_control_type( 'ArileWP_Customize_Radio_Image_Control' );
			$wp_customize->register_control_type( 'ArileWP_Customize_Radio_Buttonset_Control' );
			$wp_customize->register_control_type( 'ArileWP_Customize_Slider_Control' );
			$wp_customize->register_control_type( 'ArileWP_Customize_Sortable_Control' );
			$wp_customize->register_control_type( 'ArileWP_Customize_Text_Control' );
			$wp_customize->register_control_type( 'ArileWP_Customize_Toggle_Control' );

		}

		// Customizer selective refresh.
		public function arilewp_customizer_selective_refresh() {

			require_once ARILEWP_PARENT_INC_DIR . '/customizer/arilewp-customizer-sanitize.php';
			require_once ARILEWP_PARENT_INC_DIR . '/customizer/arilewp-customizer-partials.php';

		}


		// Add postMessage support for site title and description for the Theme Customizer.

		public function arilewp_customizer_register( $wp_customize ) {

			// Customizer selective
			require ARILEWP_PARENT_CUSTOMIZER_DIR . '/arilewp-customizer-selective.php';

			// Register panels and sections.
			require ARILEWP_PARENT_CUSTOMIZER_DIR . '/arilewp-panels-and-sections.php';

		}

        // Theme Customizer preview reload changes asynchronously.
		public function arilewp_customizer_preview_js() {

			wp_enqueue_script( 'arilewp-customizer', ARILEWP_PARENT_INC_URI . '/customizer/assets/js/customizer.js', array( 'customize-preview' ), ARILEWP_THEME_VERSION, true );

		}

		// Include customizer customizer settings.
	
		public function arilewp_customizer_settings() {
			
			// Base class.
			require ARILEWP_PARENT_CUSTOMIZER_DIR . '/customizer-settings/arilewp-customize-base-customizer-settings.php';
			// Frontpage Sections.
			require ARILEWP_PARENT_CUSTOMIZER_DIR . '/customizer-settings/home/arilewp-home-site-top-header-customizer-settings.php';
			require ARILEWP_PARENT_CUSTOMIZER_DIR . '/customizer-settings/home/arilewp-home-slider-customizer-settings.php';
			require ARILEWP_PARENT_CUSTOMIZER_DIR . '/customizer-settings/home/arilewp-home-theme-info-customizer-settings.php';
			require ARILEWP_PARENT_CUSTOMIZER_DIR . '/customizer-settings/home/arilewp-home-service-customizer-settings.php';
			require ARILEWP_PARENT_CUSTOMIZER_DIR . '/customizer-settings/home/arilewp-home-project-customizer-settings.php';
			require ARILEWP_PARENT_CUSTOMIZER_DIR . '/customizer-settings/home/arilewp-home-funfact-customizer-settings.php';
			require ARILEWP_PARENT_CUSTOMIZER_DIR . '/customizer-settings/home/arilewp-home-testimonial-customizer-settings.php';
			require ARILEWP_PARENT_CUSTOMIZER_DIR . '/customizer-settings/home/arilewp-home-wooshop-customizer-settings.php';
			require ARILEWP_PARENT_CUSTOMIZER_DIR . '/customizer-settings/home/arilewp-home-cta-customizer-settings.php';
			require ARILEWP_PARENT_CUSTOMIZER_DIR . '/customizer-settings/home/arilewp-home-team-customizer-settings.php';
			require ARILEWP_PARENT_CUSTOMIZER_DIR . '/customizer-settings/home/arilewp-home-blog-customizer-settings.php';
			require ARILEWP_PARENT_CUSTOMIZER_DIR . '/customizer-settings/home/arilewp-home-client-customizer-settings.php';
			// General.
			require ARILEWP_PARENT_CUSTOMIZER_DIR . '/customizer-settings/theme-settings/arilewp-general-customizer-settings.php';
			// Header.
			require ARILEWP_PARENT_CUSTOMIZER_DIR . '/customizer-settings/theme-settings/arilewp-header-customizer-settings.php';
			// Menu.
			require ARILEWP_PARENT_CUSTOMIZER_DIR . '/customizer-settings/theme-settings/arilewp-menu-bar-customizer-settings.php';
			// Page Header.
			require ARILEWP_PARENT_CUSTOMIZER_DIR . '/customizer-settings/theme-settings/arilewp-page-header-customizer-settings.php';
			// Blog.
			require ARILEWP_PARENT_CUSTOMIZER_DIR . '/customizer-settings/theme-settings/arilewp-blog-general-customizer-settings.php';
			require ARILEWP_PARENT_CUSTOMIZER_DIR . '/customizer-settings/theme-settings/arilewp-blog-grid-view-customizer-settings.php';
			require ARILEWP_PARENT_CUSTOMIZER_DIR . '/customizer-settings/theme-settings/arilewp-list-view-blog-customizer-settings.php';
			require ARILEWP_PARENT_CUSTOMIZER_DIR . '/customizer-settings/theme-settings/arilewp-masonry-blog-customizer-settings.php';
			// Footer.
			require ARILEWP_PARENT_CUSTOMIZER_DIR . '/customizer-settings/theme-settings/arilewp-footer-copyright-customizer-settings.php';
			require ARILEWP_PARENT_CUSTOMIZER_DIR . '/customizer-settings/theme-settings/arilewp-footer-widget-customizer-settings.php';
			require ARILEWP_PARENT_CUSTOMIZER_DIR . '/customizer-settings/theme-settings/arilewp-scroll-to-top-customizer-settings.php';
            // Color Scheme.
			require ARILEWP_PARENT_CUSTOMIZER_DIR . '/customizer-settings/theme-settings/arilewp-theme-color-scheme-customizer-settings.php';
			// Template.
			require ARILEWP_PARENT_CUSTOMIZER_DIR . '/customizer-settings/theme-settings/arilewp-about-template-customizer-settings.php';
			require ARILEWP_PARENT_CUSTOMIZER_DIR . '/customizer-settings/theme-settings/arilewp-service-template-customizer-settings.php';
			require ARILEWP_PARENT_CUSTOMIZER_DIR . '/customizer-settings/theme-settings/arilewp-portfolio-template-customizer-settings.php';
			require ARILEWP_PARENT_CUSTOMIZER_DIR . '/customizer-settings/theme-settings/arilewp-contact-template-customizer-settings.php';
			// Ordering.
			require ARILEWP_PARENT_CUSTOMIZER_DIR . '/customizer-settings/theme-settings/arilewp-forntpage-section-ordering-customizer-settings.php';
			// Typography.
			require ARILEWP_PARENT_CUSTOMIZER_DIR . '/customizer-settings/theme-settings/arilewp-typography-customizer-settings.php';

		}
	

	}
endif;

new ArileWP_Customizer();