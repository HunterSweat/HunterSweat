<?php
/**
 * Frontpage Project.
 *
 * @package arilewp
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'ArileWP_Customize_Homepage_Project_Option' ) ) :

	class ArileWP_Customize_Homepage_Project_Option extends ArileWP_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(

	            'arilewp_main_project_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
						'priority'        => 1,
						'label'   => esc_html__( 'Project Options', 'arilewp' ),
						'section' => 'arilewp_theme_project',
					),
				),
			
			    	
				'arilewp_project_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 5,
						'label'    => esc_html__( 'Project Enable/Disable', 'arilewp' ),
						'section'  => 'arilewp_theme_project',
					),
				),
				
				
				'arilewp_project_layout'     => array(
						'setting' => array(
							'default'           => 'arilewp_project_layout1',
							'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio',
							'priority'        => 10,
							'is_default_type' => true,
							'label'           => esc_html__( 'Project Layout', 'arilewp' ),
							'section'         => 'arilewp_theme_project',
							'choices'         => array(
								'arilewp_project_layout1'  => esc_html__( 'Layout One', 'arilewp' ),
								'arilewp_project_layout2' => esc_html__( 'Layout Two', 'arilewp' ),
							),
						),
			    ),
				
				'arilewp_project_column_layout' => array(
					'setting' => array(
						'default'           => '4',
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'     => 'radio_image',
						'priority' => 25,
						'label'    => esc_html__( 'Column Layout', 'arilewp' ),
						'section'  => 'arilewp_theme_project',
						'choices'  => array(
							'2'     => ARILEWP_PARENT_INC_ICON_URI . '/theme-two-columns.png',
							'3'    => ARILEWP_PARENT_INC_ICON_URI . '/theme-three-columns.png',
							'4'    => ARILEWP_PARENT_INC_ICON_URI . '/theme-four-columns.png',
						),

					),
				),
				
				'arilewp_project_scroll_speed' => array(
					'setting' => array(
						'default'           => array(
							'slider' => 2500,
							'suffix' => 'ms',
						),
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_slider' ),
					),
					'control' => array(
						'type'        => 'slider',
						'priority'    => 35,
						'label'       => esc_html__( 'Animation Speed', 'arilewp' ),
						'section'     => 'arilewp_theme_project',
						'input_attrs' => array(
							'min'  => 1500,
							'max'  => 5000,
							'step' => 100,
						),
						'active_callback' => array(
							array(
								'setting'  => 'arilewp_project_layout',
								'operator' => '===',
								'value'    => 'arilewp_project_layout1',
							),
						),
					),
				),
				
				'arilewp_project_smart_speed' => array(
					'setting' => array(
						'default'           => array(
							'slider' => 1000,
							'suffix' => 'ms',
						),
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_slider' ),
					),
					'control' => array(
						'type'        => 'slider',
						'priority'    =>40,
						'label'       => esc_html__( 'Smart Speed', 'arilewp' ),
						'section'     => 'arilewp_theme_project',
						'input_attrs' => array(
							'min'  => 100,
							'max'  => 3000,
							'step' => 100,
						),
						'active_callback' => array(
							array(
								'setting'  => 'arilewp_project_layout',
								'operator' => '===',
								'value'    => 'arilewp_project_layout1',
							),
						),
					),
				),
				
				'arilewp_project_mouse_drag_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 45,
						'label'    => esc_html__( 'Mouse drag Enable/Disable', 'arilewp' ),
						'section'  => 'arilewp_theme_project',
						'active_callback' => array(
							array(
								'setting'  => 'arilewp_project_layout',
								'operator' => '===',
								'value'    => 'arilewp_project_layout1',
							),
						),
					),
				),	

				
				'arilewp_project_front_container_size'     => array(
						'setting' => array(
							'default'           => 'container-full',
							'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio',
							'priority'        => 50,
							'is_default_type' => true,
							'label'           => esc_html__( 'Container Width', 'arilewp' ),
							'section'         => 'arilewp_theme_project',
							'choices'         => array(
								'container'  => esc_html__( 'Container', 'arilewp' ),
								'container-full' => esc_html__( 'Container Full', 'arilewp' ),
							),
						),
			    ),	
				
				
				
				'arilewp_project_area_before_after_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
						'priority'        => 60,
						'label'   => esc_html__( 'Project Area Before After Content', 'arilewp' ),
						'section' => 'arilewp_theme_project',
					),
				),
				
				
			);

		}

	}

	new ArileWP_Customize_Homepage_Project_Option();

endif;
