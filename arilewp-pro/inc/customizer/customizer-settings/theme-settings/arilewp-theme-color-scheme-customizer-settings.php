<?php
/**
 * Theme Color Scheme.
 * @package     arilewp
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'ArileWP_Customize_Theme_Color_Option' ) ) :

	class ArileWP_Customize_Theme_Color_Option extends ArileWP_Customize_Base_Option {

		/**
		 * Arguments for options.
		 * @return array
		 */
		public function elements() {

			return array(
			
			
			    'arilewp_main_theme_color_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
				   		'priority'        => 1,
						'label'   => esc_html__( 'Predefined Color Scheme', 'arilewp' ),
						'section' => 'arilewp_theme_color_scheme',
					),
				),
			

					'arilewp_theme_color' => array(
						'setting' => array(
							'default'           => 'theme-default',
							'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'     => 'radio_image',
							'priority' => 3,
							'label'    => esc_html__( 'Select Theme Colors', 'arilewp' ),
							'section'  => 'arilewp_theme_color_scheme',
							'choices'  => array(
								'theme-default'     => ARILEWP_PARENT_INC_ICON_URI . '/theme-default.png',
								'theme-red'    => ARILEWP_PARENT_INC_ICON_URI . '/theme-red.png',
								'theme-green'     => ARILEWP_PARENT_INC_ICON_URI . '/theme-green.png',
								'theme-orange'    => ARILEWP_PARENT_INC_ICON_URI . '/theme-orange.png',
								'theme-blue-sky'     => ARILEWP_PARENT_INC_ICON_URI . '/theme-blue-sky.png',
								'theme-pink'    => ARILEWP_PARENT_INC_ICON_URI . '/theme-pink.png',
								'theme-blue-strong'     => ARILEWP_PARENT_INC_ICON_URI . '/theme-blue-strong.png',
								'theme-golden'    => ARILEWP_PARENT_INC_ICON_URI . '/theme-golden.png',
								'theme-porsche'    => ARILEWP_PARENT_INC_ICON_URI . '/theme-porsche.png',
								'theme-selective-yellow'    => ARILEWP_PARENT_INC_ICON_URI . '/theme-selective-yellow.png',	
							),

						),
					),
				
				
				'arilewp_theme_custom_color_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
				   		'priority'        => 5,
						'label'   => esc_html__( 'Custom Color', 'arilewp' ),
						'section' => 'arilewp_theme_color_scheme',
					),
				),
				
					'arilewp_theme_custom_color_disabled'            => array(
						'setting' => array(
							'default'           => false,
							'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_checkbox' ),
						),
						'control' => array(
							'type'     => 'toggle',
							'priority' => 8,
							'label'    => esc_html__( 'Custom Color Enable/Disable', 'arilewp' ),
							'section'  => 'arilewp_theme_color_scheme',
						),
					),
					
					'arilewp_theme_custom_color' => array(
						'setting' => array(
							'default'           => '#007bff',
							'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_alpha_color' ),
						),
						'control' => array(
							'type'            => 'color',
							'priority'        => 9,
							'label'           => esc_html__( 'Select Custom color', 'arilewp' ),
							'section'         => 'arilewp_theme_color_scheme',
							'choices'         => array(
								'alpha' => true,
							),
						),
				    ),		
				
				'arilewp_theme_color_skin_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
				   		'priority'        => 10,
						'label'   => esc_html__( 'Theme Color Skins', 'arilewp' ),
						'section' => 'arilewp_theme_color_scheme',
					),
				),
					
					
				'arilewp_theme_color_skin' => array(
					'setting' => array(
						'default'           => 'theme-light',
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'     => 'radio_image',
						'priority' => 11,
						'label'    => esc_html__( 'Select Theme Color Skin', 'arilewp' ),
						'section'  => 'arilewp_theme_color_scheme',
						'choices'  => array(
							'theme-light'     => ARILEWP_PARENT_INC_ICON_URI . '/theme-skin-light.png',
							'theme-dark'    => ARILEWP_PARENT_INC_ICON_URI . '/theme-skin-dark.png',
						),

					),
				),
			
				
				'arilewp_theme_layout_background_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
				   		'priority'        => 12,
						'label'   => esc_html__( 'Layout And Background', 'arilewp' ),
						'section' => 'arilewp_theme_color_scheme',
					),
				),
					
					
					'arilewp_theme_layout' => array(
						'setting' => array(
							'default'           => 'theme-wide',
							'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'     => 'radio_image',
							'priority' => 15,
							'label'    => esc_html__( 'Select Layout', 'arilewp' ),
							'section'  => 'arilewp_theme_color_scheme',
							'choices'  => array(
								'theme-wide'     => ARILEWP_PARENT_INC_ICON_URI . '/theme-wide.png',
								'theme-boxed'    => ARILEWP_PARENT_INC_ICON_URI . '/theme-boxed.png',
							),

						),
					),
		
		
		        'arilewp_theme_background_image' => array(
						'setting' => array(
							'default'           => 'bg-patternm1',
							'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'     => 'radio_image',
							'priority' => 20,
							'label'    => esc_html__( 'Select Background', 'arilewp' ),
							'section'  => 'arilewp_theme_color_scheme',
							'choices'  => array(
								'bg-patternm1'     => ARILEWP_PARENT_INC_ICON_URI . '/theme-bg-pattern-small1.png',
								'bg-patternm2'    => ARILEWP_PARENT_INC_ICON_URI . '/theme-bg-pattern-small2.png',
								'bg-patternm3'     => ARILEWP_PARENT_INC_ICON_URI . '/theme-bg-pattern-small3.png',
								'bg-patternm4'    => ARILEWP_PARENT_INC_ICON_URI . '/theme-bg-pattern-small4.png',
								'bg-imagem1'     => ARILEWP_PARENT_INC_ICON_URI . '/theme-bg-image1.jpg',
								'bg-imagem2'    => ARILEWP_PARENT_INC_ICON_URI . '/theme-bg-image2.jpg',
								'bg-imagem3'     => ARILEWP_PARENT_INC_ICON_URI . '/theme-bg-image3.jpg',
								'bg-imagem4'    => ARILEWP_PARENT_INC_ICON_URI . '/theme-bg-image4.jpg',
							),
							'active_callback' => array(
							array(
								'setting'  => 'arilewp_theme_layout',
								'operator' => '===',
								'value'    => 'theme-boxed',
							),
						),

						),
					),
		
		
		

			);

		}

	}

	new ArileWP_Customize_Theme_Color_Option();

endif;
