<?php
/**
 * Frontpage Main Slider.
 *
 * @package arilewp
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'ArileWP_Customize_Homepage_Slider_Option' ) ) :

	class ArileWP_Customize_Homepage_Slider_Option extends ArileWP_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(
			
				'arilewp_main_slider_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
						'priority'        => 1,
						'label'   => esc_html__( 'Slider Options', 'arilewp' ),
						'section' => 'arilewp_main_theme_slider',
					),
				),
				
	
				'arilewp_main_slider_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Slider Enable/Disable', 'arilewp' ),
						'section'  => 'arilewp_main_theme_slider',
					),
				),	
				
				
                'arilewp_slider_caption_layout'     => array(
						'setting' => array(
							'default'           => 'arilewp_slider_captoin_layout1',
							'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio',
							'priority'        => 5,
							'is_default_type' => true,
							'label'           => esc_html__( 'Caption Layout', 'arilewp' ),
							'section'         => 'arilewp_main_theme_slider',
							'choices'         => array(
								'arilewp_slider_captoin_layout1'  => esc_html__( 'Layout One', 'arilewp' ),
								'arilewp_slider_captoin_layout2' => esc_html__( 'Layout Two', 'arilewp' ),
							),
						),
			    ),
				
				'arilewp_main_slider_overlay_disable'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 51,
						'label'    => esc_html__( 'Overlay Enable/Disable', 'arilewp' ),
						'section'  => 'arilewp_main_theme_slider',
					),
				),

				'arilewp_main_slider_overlay_color' => array(
					'setting' => array(
						'default'           => 'rgba(0, 0, 0, .35)',
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_alpha_color' ),
					),
					'control' => array(
						'type'            => 'color',
						'priority'        => 52,
						'label'           => esc_html__( 'Image overlay color', 'arilewp' ),
						'section'         => 'arilewp_main_theme_slider',
						'choices'         => array(
							'alpha' => true,
						),
					),
				),	
				
			    'arilewp_main_slider_height' => array(
					'setting' => array(
						'default'           => array(
							'slider' => 800,
							'suffix' => 'px',
						),
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_slider' ),
					),
					'control' => array(
						'type'        => 'slider',
						'priority'    => 53,
						'label'       => esc_html__( 'Slider Height', 'arilewp' ),
						'section'     => 'arilewp_main_theme_slider',
						'input_attrs' => array(
							'min'  => 500,
							'max'  => 1200,
							'step' => 5,
						),
					),
				),
				
				'arilewp_main_slider_aniamte_type'  => array(
					'setting' => array(
						'default'           => 'slide',
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'            => 'select',
						'priority'        => 54,
						'is_default_type' => true,
						'label'           => esc_html__( 'Animation type', 'arilewp' ),
						'section'         => 'arilewp_main_theme_slider',
						'choices'         => array(
							'slide'         => esc_html__( 'Slide', 'arilewp' ),
							'fade'    => esc_html__( 'Fade', 'arilewp' ),
						),
					),
				),
				
				'arilewp_main_slider_scroll_speed' => array(
					'setting' => array(
						'default'           => array(
							'slider' => 2500,
							'suffix' => 'ms',
						),
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_slider' ),
					),
					'control' => array(
						'type'        => 'slider',
						'priority'    => 55,
						'label'       => esc_html__( 'Animation Speed', 'arilewp' ),
						'section'     => 'arilewp_main_theme_slider',
						'input_attrs' => array(
							'min'  => 1500,
							'max'  => 5000,
							'step' => 100,
						),
					),
				),
				
				'arilewp_main_slider_smart_speed' => array(
					'setting' => array(
						'default'           => array(
							'slider' => 1000,
							'suffix' => 'ms',
						),
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_slider' ),
					),
					'control' => array(
						'type'        => 'slider',
						'priority'    => 55,
						'label'       => esc_html__( 'Smart Speed', 'arilewp' ),
						'section'     => 'arilewp_main_theme_slider',
						'input_attrs' => array(
							'min'  => 100,
							'max'  => 3000,
							'step' => 100,
						),
					),
				),
				
				'arilewp_main_slider_mouse_drag_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 56,
						'label'    => esc_html__( 'Mouse drag Enable/Disable', 'arilewp' ),
						'section'  => 'arilewp_main_theme_slider',
					),
				),
				

			);

		}

	}

	new ArileWP_Customize_Homepage_Slider_Option();

endif;
