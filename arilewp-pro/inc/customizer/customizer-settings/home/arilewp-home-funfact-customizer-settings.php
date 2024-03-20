<?php
/**
 * Frontpage Funfact.
 *
 * @package     arilewp
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'ArileWP_Customize_Homepage_Funfact_Option' ) ) :

	class ArileWP_Customize_Homepage_Funfact_Option extends ArileWP_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(
			
			    'arilewp_main_funfact_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
						'priority'        => 1,
						'label'   => esc_html__( 'Funfact Options', 'arilewp' ),
						'section' => 'arilewp_theme_funfact',
					),
				),
			
			    	
				'arilewp_funfact_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Enable/Disable', 'arilewp' ),
						'section'  => 'arilewp_theme_funfact',
					),
				),
				
				
				'arilewp_funfact_layout'     => array(
						'setting' => array(
							'default'           => 'arilewp_funfact_layout1',
							'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio',
							'priority'        => 3,
							'is_default_type' => true,
							'label'           => esc_html__( 'Funfact Layout', 'arilewp' ),
							'section'         => 'arilewp_theme_funfact',
							'choices'         => array(
								'arilewp_funfact_layout1'  => esc_html__( 'Layout One', 'arilewp' ),
								'arilewp_funfact_layout2' => esc_html__( 'Layout Two', 'arilewp' ),
							),
						),
			    ),
				
				
				'arilewp_funfact_overlay_disable'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 16,
						'label'    => esc_html__( 'Overlay Enable/Disable', 'arilewp' ),
						'section'  => 'arilewp_theme_funfact',
					),
				),
				
				'arilewp_funfact_overlay_color' => array(
					'setting' => array(
						'default'           => '',
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_alpha_color' ),
					),
					'control' => array(
						'type'            => 'color',
						'priority'        => 17,
						'label'           => esc_html__( 'Background image overlay color', 'arilewp' ),
						'section'         => 'arilewp_theme_funfact',
						'choices'         => array(
							'alpha' => true,
						),
					),
				),	
				
				'arilewp_funfact_column_layout' => array(
					'setting' => array(
						'default'           => '4',
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'     => 'radio_image',
						'priority' => 20,
						'label'    => esc_html__( 'Column Layout', 'arilewp' ),
						'section'  => 'arilewp_theme_funfact',
						'choices'  => array(
							'2'     => ARILEWP_PARENT_INC_ICON_URI . '/theme-two-columns.png',
							'3'    => ARILEWP_PARENT_INC_ICON_URI . '/theme-three-columns.png',
							'4'    => ARILEWP_PARENT_INC_ICON_URI . '/theme-four-columns.png',
						),

					),
				),
				
				
				'arilewp_funfact_front_container_size'     => array(
						'setting' => array(
							'default'           => 'container',
							'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio',
							'priority'        => 22,
							'is_default_type' => true,
							'label'           => esc_html__( 'Container Width', 'arilewp' ),
							'section'         => 'arilewp_theme_funfact',
							'choices'         => array(
								'container'  => esc_html__( 'Container', 'arilewp' ),
								'container-full' => esc_html__( 'Container Full', 'arilewp' ),
							),
						),
			    ),
				
				
				'arilewp_funfact_area_before_after_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
						'priority'        => 25,
						'label'   => esc_html__( 'Funfact Area Before After Content', 'arilewp' ),
						'section' => 'arilewp_theme_funfact',
					),
				),



			);
			
		}

	}

	new ArileWP_Customize_Homepage_Funfact_Option();

endif;
