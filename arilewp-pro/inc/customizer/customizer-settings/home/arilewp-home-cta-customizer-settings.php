<?php
/**
 * Frontpage Call to action
 *
 * @package arilewp
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'ArileWP_Customize_Homepage_Cta_Option' ) ) :

	class ArileWP_Customize_Homepage_Cta_Option extends ArileWP_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(

			    'arilewp_main_cta_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
				   		'priority'        => 1,
						'label'   => esc_html__( 'Call to Action Options', 'arilewp' ),
						'section' => 'arilewp_theme_cta',
					),
				),
			
			    	
				'arilewp_cta_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Enable/Disable', 'arilewp' ),
						'section'  => 'arilewp_theme_cta',
					),
				),
				
				'arilewp_cta_button_link' => array(
					'setting' => array(
						'default'           => '#',
						'sanitize_callback' => 'sanitize_text_field',
					),
					'control' => array(
						'type'            => 'text',
						'priority'        => 10,
						'is_default_type' => true,
						'label'           => esc_html__( 'Button Link', 'arilewp' ),
						'section'         => 'arilewp_theme_cta',
					),
				),
				
				'arilewp_cta_open_new_tab_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 11,
						'label'    => esc_html__( 'Open New Tab Enable/Disable', 'arilewp' ),
						'section'  => 'arilewp_theme_cta',
					),
				),
				
				
				'arilewp_callout_video_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 12,
						'label'    => esc_html__( 'Video Enable/Disable', 'arilewp' ),
						'section'  => 'arilewp_theme_cta',
					),
				),
				
				
				'arilewp_callout_video_link' => array(
					'setting' => array(
						'default'           => 'https://www.youtube.com/embed/oj0uS9ZlQHY',
						'sanitize_callback' => 'sanitize_text_field',
					),
					'control' => array(
						'type'            => 'text',
						'priority'        => 14,
						'is_default_type' => true,
						'label'           => esc_html__( 'Enter a YouTube URL', 'arilewp' ),
						'section'         => 'arilewp_theme_cta',
					),
				),			
				
			    'arilewp_cta_overlay_color' => array(
					'setting' => array(
						'default'           => '',
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_alpha_color' ),
					),
					'control' => array(
						'type'            => 'color',
						'priority'        => 16,
						'label'           => esc_html__( 'Background image overlay color', 'arilewp' ),
						'section'         => 'arilewp_theme_cta',
						'choices'         => array(
							'alpha' => true,
						),
					),
				),	
				
				
				'arilewp_cta_front_container_size'     => array(
						'setting' => array(
							'default'           => 'container',
							'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio',
							'priority'        => 17,
							'is_default_type' => true,
							'label'           => esc_html__( 'Container Width', 'arilewp' ),
							'section'         => 'arilewp_theme_cta',
							'choices'         => array(
								'container'  => esc_html__( 'Container', 'arilewp' ),
								'container-full' => esc_html__( 'Container Full', 'arilewp' ),
							),
						),
			    ),	
			
				
				'arilewp_cta_area_before_after_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
						'priority'        => 35,
						'label'   => esc_html__( 'Call to Action Area Before After Content', 'arilewp' ),
						'section' => 'arilewp_theme_cta',
					),
				),

			);

		}

	}

	new ArileWP_Customize_Homepage_Cta_Option();

endif;
