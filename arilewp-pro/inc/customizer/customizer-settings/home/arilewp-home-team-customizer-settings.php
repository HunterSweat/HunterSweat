<?php
/**
 * Frontpage Team.
 *
 * @package arilewp
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'ArileWP_Customize_Homepage_Team_Option' ) ) :

	class ArileWP_Customize_Homepage_Team_Option extends ArileWP_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(

		        'arilewp_main_team_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
						'priority'        => 1,
						'label'   => esc_html__( 'Team Options', 'arilewp' ),
						'section' => 'arilewp_theme_team',
					),
				),
			
			    	
				'arilewp_team_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Enable/Disable', 'arilewp' ),
						'section'  => 'arilewp_theme_team',
					),
				),
				
				
				'arilewp_team_layout'     => array(
						'setting' => array(
							'default'           => 'arilewp_team_layout1',
							'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio',
							'priority'        => 3,
							'is_default_type' => true,
							'label'           => esc_html__( 'Team Layout', 'arilewp' ),
							'section'         => 'arilewp_theme_team',
							'choices'         => array(
								'arilewp_team_layout1'  => esc_html__( 'Layout One', 'arilewp' ),
								'arilewp_team_layout2' => esc_html__( 'Layout Two', 'arilewp' ),
							),
						),
			    ),	
				
				'arilewp_team_column_layout' => array(
					'setting' => array(
						'default'           => '3',
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'     => 'radio_image',
						'priority' => 11,
						'label'    => esc_html__( 'Column Layout', 'arilewp' ),
						'section'  => 'arilewp_theme_team',
						'choices'  => array(
							'2'     => ARILEWP_PARENT_INC_ICON_URI . '/theme-two-columns.png',
							'3'    => ARILEWP_PARENT_INC_ICON_URI . '/theme-three-columns.png',
							'4'    => ARILEWP_PARENT_INC_ICON_URI . '/theme-four-columns.png',
						),

					),
				),
				
				'arilewp_team_scroll_speed' => array(
					'setting' => array(
						'default'           => array(
							'slider' => 2500,
							'suffix' => 'ms',
						),
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_slider' ),
					),
					'control' => array(
						'type'        => 'slider',
						'priority'    => 20,
						'label'       => esc_html__( 'Animation Speed', 'arilewp' ),
						'section'     => 'arilewp_theme_team',
						'input_attrs' => array(
							'min'  => 1500,
							'max'  => 5000,
							'step' => 100,
						),
					),
				),
				
				'arilewp_team_smart_speed' => array(
					'setting' => array(
						'default'           => array(
							'slider' => 1000,
							'suffix' => 'ms',
						),
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_slider' ),
					),
					'control' => array(
						'type'        => 'slider',
						'priority'    => 25,
						'label'       => esc_html__( 'Smart Speed', 'arilewp' ),
						'section'     => 'arilewp_theme_team',
						'input_attrs' => array(
							'min'  => 100,
							'max'  => 3000,
							'step' => 100,
						),
					),
				),
				
				'arilewp_team_mouse_drag_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 30,
						'label'    => esc_html__( 'Mouse drag Enable/Disable', 'arilewp' ),
						'section'  => 'arilewp_theme_team',
					),
				),
				
				
				'arilewp_team_front_container_size'     => array(
						'setting' => array(
							'default'           => 'container',
							'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio',
							'priority'        => 32,
							'is_default_type' => true,
							'label'           => esc_html__( 'Container Width', 'arilewp' ),
							'section'         => 'arilewp_theme_team',
							'choices'         => array(
								'container'  => esc_html__( 'Container', 'arilewp' ),
								'container-full' => esc_html__( 'Container Full', 'arilewp' ),
							),
						),
			    ),	
				
				
				'arilewp_team_area_before_after_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
						'priority'        => 35,
						'label'   => esc_html__( 'Team Area Before After Content', 'arilewp' ),
						'section' => 'arilewp_theme_team',
					),
				),


			);

		}

	}

	new ArileWP_Customize_Homepage_Team_Option();

endif;
