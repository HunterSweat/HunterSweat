<?php
/**
 * ArileWP Customizer partials.
 *
 * @package arilewp
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'ArileWP_Customizer_Partials' ) ) {

	/**
	 * Customizer Partials.
	 */
	class ArileWP_Customizer_Partials {

		/**
		 * Instance.
		 *
		 * @access private
		 * @var object
		 */
		private static $instance;

		/**
		 * Initiator.
		 */
		public static function get_instance() {
			if ( ! isset( self::$instance ) ) {
				self::$instance = new self();
			}

			return self::$instance;
		}

		// site title
		public static function customize_partial_blogname() {
			return get_bloginfo( 'name' );
		}

		// Site tagline
		public static function customize_partial_blogdescription() {
			return get_bloginfo( 'description' );
		}
		
		// service title
		public static function customize_partial_arilewp_service_area_title() {
			return get_theme_mod( 'arilewp_service_area_title' );
		}
		
		// service description
		public static function customize_partial_arilewp_service_area_des() {
			return get_theme_mod( 'arilewp_service_area_des' );
		}
		
		// project title
		public static function customize_partial_arilewp_project_area_title() {
			return get_theme_mod( 'arilewp_project_area_title' );
		}
		
		// project description
		public static function customize_partial_arilewp_project_area_des() {
			return get_theme_mod( 'arilewp_project_area_des' );
		}
		
	    // testimonial title
		public static function customize_partial_arilewp_testimonial_area_title() {
			return get_theme_mod( 'arilewp_testimonial_area_title' );
		}
		
		// testimonial description
		public static function customize_partial_arilewp_testimonial_area_des() {
			return get_theme_mod( 'arilewp_testimonial_area_des' );
		}

        // wooshop title
		public static function customize_partial_arilewp_wooshop_area_title() {
			return get_theme_mod( 'arilewp_wooshop_area_title' );
		}
		
		// wooshop description
		public static function customize_partial_arilewp_wooshop_area_des() {
			return get_theme_mod( 'arilewp_wooshop_area_des' );
		}
		
		
		// call to action title
		public static function customize_partial_arilewp_cta_area_title() {
			return get_theme_mod( 'arilewp_cta_area_title' );
		}
		
		// call to action subtitle
		public static function customize_partial_arilewp_cta_area_subtitle() {
			return get_theme_mod( 'arilewp_cta_area_subtitle' );
		}
		
		// call to action description
		public static function customize_partial_arilewp_cta_area_des() {
			return get_theme_mod( 'arilewp_cta_area_des' );
		}
		
	    // call to action button text
		public static function customize_partial_arilewp_cta_button_text() {
			return get_theme_mod( 'arilewp_cta_button_text' );
		}
		
		// call to action video text
		public static function customize_partial_arilewp_video_text() {
			return get_theme_mod( 'arilewp_video_text' );
		}

	    // team title
		public static function customize_partial_arilewp_team_area_title() {
			return get_theme_mod( 'arilewp_team_area_title' );
		}
		
		// team description
		public static function customize_partial_arilewp_team_area_des() {
			return get_theme_mod( 'arilewp_team_area_des' );
		}
		
	    // blog title
		public static function customize_partial_arilewp_blog_area_title() {
			return get_theme_mod( 'arilewp_blog_area_title' );
		}
		
		// blog description
		public static function customize_partial_arilewp_blog_area_des() {
			return get_theme_mod( 'arilewp_blog_area_des' );
		}

        // blog button text
		public static function customize_partial_arilewp_show_more_button_text() {
			return get_theme_mod( 'arilewp_show_more_button_text' );
		}

        // contact button
        public static function customize_partial_arilewp_contact() {
            return get_theme_mod( 'arilewp_show_more_button_text' );
        }
		
		// footer copyright text
		public static function customize_partial_arilewp_footer_copright_text() {
			return get_theme_mod( 'arilewp_footer_copright_text' );
		}

	}
}

ArileWP_Customizer_Partials::get_instance();
