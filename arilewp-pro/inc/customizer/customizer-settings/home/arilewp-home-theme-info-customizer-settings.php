<?php
/**
 * Frontpage Theme Info.
 *
 * @package arilewp
 */

defined( 'ABSPATH' ) || exit;


if ( ! class_exists( 'ArileWP_Customize_Homepage_theme_info_Option' ) ) :

	class ArileWP_Customize_Homepage_theme_info_Option extends ArileWP_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(
			
				'arilewp_theme_info_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
						'priority'        => 1,
						'label'   => esc_html__( 'Theme Info Area Options', 'arilewp' ),
						'section' => 'arilewp_theme_info_area',
					),
				),
				
				'arilewp_theme_info_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Enable/Disable', 'arilewp' ),
						'section'  => 'arilewp_theme_info_area',
					),
				),
				
				'arilewp_theme_info_layout'     => array(
						'setting' => array(
							'default'           => 'arilewp_theme_info_layout1',
							'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio',
							'priority'        => 3,
							'is_default_type' => true,
							'label'           => esc_html__( 'Theme Info Layout', 'arilewp' ),
							'section'         => 'arilewp_theme_info_area',
							'choices'         => array(
								'arilewp_theme_info_layout1'  => esc_html__( 'Layout One', 'arilewp' ),
								'arilewp_theme_info_layout2' => esc_html__( 'Layout Two', 'arilewp' ),
							),
						),
			    ),
				
				'arilewp_theme_info_column_layout' => array(
					'setting' => array(
						'default'           => '3',
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'     => 'radio_image',
						'priority' => 11,
						'label'    => esc_html__( 'Column Layout', 'arilewp' ),
						'section'  => 'arilewp_theme_info_area',
						'choices'  => array(
							'2'     => ARILEWP_PARENT_INC_ICON_URI . '/theme-two-columns.png',
							'3'    => ARILEWP_PARENT_INC_ICON_URI . '/theme-three-columns.png',
							'4'    => ARILEWP_PARENT_INC_ICON_URI . '/theme-four-columns.png',
						),

					),
				),
				
				'arilewp_theme_info_back_color' => array(
					'setting' => array(
						'default'           => '',
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_alpha_color' ),
					),
					'control' => array(
						'type'            => 'color',
						'priority'        => 52,
						'label'           => esc_html__( 'Background color', 'arilewp' ),
						'section'         => 'arilewp_theme_info_area',
						'choices'         => array(
							'alpha' => true,
						),
					),
				),	

			);

		}

	}

	new ArileWP_Customize_Homepage_theme_info_Option();

endif;
