<?php
/**
 * Header Settings.
 *
 * @package arilewp
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
* Header Settings.
*/

if ( ! class_exists( 'ArileWP_Customize_Header_Option' ) ) :

	class ArileWP_Customize_Header_Option extends ArileWP_Customize_Base_Option {
		
		public function elements() {

			return array(
			
			
			    'arilewp_main_header_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
				   		'priority'        => 1,
						'label'   => esc_html__( 'Theme Header ', 'arilewp' ),
						'section' => 'arilewp_theme_header',
					),
				),
			
	            	'arilewp_main_header_style'     => array(
						'setting' => array(
							'default'           => 'standard',
							'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio',
							'priority'        => 5,
							'is_default_type' => true,
							'label'           => esc_html__( 'Header Style', 'arilewp' ),
							'section'         => 'arilewp_theme_header',
							'choices'         => array(
								'standard'  => esc_html__( 'Standard Header', 'arilewp' ),
								'transparent' => esc_html__( 'Transparent Header', 'arilewp' ),
								'center_logo' => esc_html__( 'Center Logo Header', 'arilewp' ),
								'overlap_classic' => esc_html__( 'Overlap Classic Header', 'arilewp' ),
							),
						),
					),	

			);

		}

	}

	new ArileWP_Customize_Header_Option();

endif;
