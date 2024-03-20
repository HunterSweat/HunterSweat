<?php
/**
 * Frontpage Service.
 *
 * @package arilewp
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'ArileWP_Customize_Homepage_Service_Option' ) ) :

	class ArileWP_Customize_Homepage_Service_Option extends ArileWP_Customize_Base_Option {

 

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(

			    'arilewp_main_service_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
						'priority'        => 1,
						'label'   => esc_html__( 'Service Options', 'arilewp' ),
						'section' => 'arilewp_theme_service',
					),
				),
			
			    	
				'arilewp_service_area_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Service Enable/Disable', 'arilewp' ),
						'section'  => 'arilewp_theme_service',
					),
				),
				
				
				'arilewp_service_layout'     => array(
						'setting' => array(
							'default'           => 'arilewp_service_layout1',
							'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio',
							'priority'        => 3,
							'is_default_type' => true,
							'label'           => esc_html__( 'Service Layout', 'arilewp' ),
							'section'         => 'arilewp_theme_service',
							'choices'         => array(
								'arilewp_service_layout1'  => esc_html__( 'Layout One', 'arilewp' ),
								'arilewp_service_layout2' => esc_html__( 'Layout Two', 'arilewp' ),
							),
						),
			    ),
				
				
				'arilewp_service_column_layout' => array(
					'setting' => array(
						'default'           => '3',
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'     => 'radio_image',
						'priority' => 11,
						'label'    => esc_html__( 'Column Layout', 'arilewp' ),
						'section'  => 'arilewp_theme_service',
						'choices'  => array(
							'2'     => ARILEWP_PARENT_INC_ICON_URI . '/theme-two-columns.png',
							'3'    => ARILEWP_PARENT_INC_ICON_URI . '/theme-three-columns.png',
							'4'    => ARILEWP_PARENT_INC_ICON_URI . '/theme-four-columns.png',
						),

					),
				),
				
				
				'arilewp_service_front_container_size'     => array(
						'setting' => array(
							'default'           => 'container',
							'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio',
							'priority'        => 12,
							'is_default_type' => true,
							'label'           => esc_html__( 'Container Width', 'arilewp' ),
							'section'         => 'arilewp_theme_service',
							'choices'         => array(
								'container'  => esc_html__( 'Container', 'arilewp' ),
								'container-full' => esc_html__( 'Container Full', 'arilewp' ),
							),
						),
			    ),
				
				
				'arilewp_service_area_before_after_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
						'priority'        => 12,
						'label'   => esc_html__( 'Service Area Before After Content', 'arilewp' ),
						'section' => 'arilewp_theme_service',
					),
				),

			);

		}

	}

	new ArileWP_Customize_Homepage_Service_Option();

endif;
