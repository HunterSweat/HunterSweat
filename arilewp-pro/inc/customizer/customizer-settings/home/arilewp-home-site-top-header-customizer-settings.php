<?php
/**
 * Frontpage Site Top Header.
 *
 * @package arilewp
 */

defined( 'ABSPATH' ) || exit;

/**
* Site Top Header customizer options.
*/
if ( ! class_exists( 'ArileWP_Customize_Homepage_Site_Top_Header_Option' ) ) :

	class ArileWP_Customize_Homepage_Site_Top_Header_Option extends ArileWP_Customize_Base_Option {

		/**
		 * @return array
		 */
		public function elements() {

			return array(
			
			    'arilewp_site_top_header_content_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
						'priority'        => 1,
						'label'   => esc_html__( 'Top Header Options', 'arilewp' ),
						'section' => 'arilewp_theme_top_header_area',
					),
				),
			
				'arilewp_site_top_header_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Header Enable/Disable', 'arilewp' ),
						'section'  => 'arilewp_theme_top_header_area',
					),
				),
				
			    'arilewp_site_top_header_info_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 3,
						'label'    => esc_html__( 'Info Enable/Disable', 'arilewp' ),
						'section'  => 'arilewp_theme_top_header_area',
					),
				),
				
			    'arilewp_site_top_header_social_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 4,
						'label'    => esc_html__( 'Social Icon Enable/Disable', 'arilewp' ),
						'section'  => 'arilewp_theme_top_header_area',
					),
				),
				
				'arilewp_top_header_bac_color' => array(
					'setting' => array(
						'default'           => '',
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_alpha_color' ),
					),
					'control' => array(
						'type'            => 'color',
						'priority'        => 12,
						'label'           => esc_html__( 'Background Color', 'arilewp' ),
						'section'         => 'arilewp_theme_top_header_area',
						'choices'         => array(
							'alpha' => true,
						),
					),
				),	
				
				'arilewp_top_header_icon_color' => array(
					'setting' => array(
						'default'           => '',
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_alpha_color' ),
					),
					'control' => array(
						'type'            => 'color',
						'priority'        => 13,
						'label'           => esc_html__( 'Icon Color', 'arilewp' ),
						'section'         => 'arilewp_theme_top_header_area',
						'choices'         => array(
							'alpha' => true,
						),
					),
				),	

                'arilewp_top_header_container_size'     => array(
						'setting' => array(
							'default'           => 'container-full',
							'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio',
							'priority'        => 20,
							'is_default_type' => true,
							'label'           => esc_html__( 'Container Width', 'arilewp' ),
							'section'         => 'arilewp_theme_top_header_area',
							'choices'         => array(
								'container'  => esc_html__( 'Container', 'arilewp' ),
								'container-full' => esc_html__( 'Container Full', 'arilewp' ),
							),
						),
			    ),	
											
			

			);

		}

	}

	new ArileWP_Customize_Homepage_Site_Top_Header_Option();

endif;