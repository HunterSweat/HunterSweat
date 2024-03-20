<?php
/**
 * Page Header Settings.
 *
 * @package arilewp
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
* Page Header Settings.
*/

if ( ! class_exists( 'ArileWP_Customize_Page_Header_Option' ) ) :

	class ArileWP_Customize_Page_Header_Option extends ArileWP_Customize_Base_Option {

		public function elements() {
			
			$arilewp_main_header_style = get_theme_mod('arilewp_main_header_style', 'standard');		
			if($arilewp_main_header_style == 'overlap_classic'){ $top = '12.5rem';  $bottom = '7rem'; $header_color = 'rgba(0,0,0,0.7)'; }
			else{ $top = '4rem';  $bottom = '4rem'; $header_color = ''; }

			return array(
			
			
			    'arilewp_page_header_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
						'priority'        => 1,
						'label'   => esc_html__( 'Page Header', 'arilewp' ),
						'section' => 'header_image',
					),
				),
			
				'arilewp_page_header_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 5,
						'label'    => esc_html__( 'Page Header Enable/Disable', 'arilewp' ),
						'section'  => 'header_image',
					),
				),
				
								
				'arilewp_page_header_background_color' => array(
					'setting' => array(
						'default'           => $header_color,
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_alpha_color' ),
					),
					'control' => array(
						'type'            => 'color',
						'priority'        => 7,
						'label'           => esc_html__( 'Background color', 'arilewp' ),
						'section'         => 'header_image',
						'choices'         => array(
							'alpha' => true,
						),
					),
				),
				
				
                'arilewp_page_header_layout' => array(
					'setting' => array(
						'default'           => 'arilewp_page_header_layout1',
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'     => 'radio_image',
						'priority' => 10,
						'label'    => esc_html__( 'Page Header Layouts', 'arilewp' ),
						'section'  => 'header_image',
						'choices'  => array(
							'arilewp_page_header_layout1'     => ARILEWP_PARENT_INC_ICON_URI . '/theme-breadcrumb-center.png',
							'arilewp_page_header_layout2'    => ARILEWP_PARENT_INC_ICON_URI . '/theme-breadcrumb-right.png',
						),

					),
				),
				
				
				'arilewp_page_header_container_size'     => array(
						'setting' => array(
							'default'           => 'container',
							'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio',
							'priority'        => 18,
							'is_default_type' => true,
							'label'           => esc_html__( 'Container Width', 'arilewp' ),
							'section'         => 'header_image',
							'choices'         => array(
								'container'  => esc_html__( 'Container', 'arilewp' ),
								'container-full' => esc_html__( 'Container Full', 'arilewp' ),
							),
						),
				),	
				
				'arilewp_page_header_padding'     => array(
					'setting' => array(
						'default'           => array(
							'top'    => $top,
							'bottom' => $bottom,
						),
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_dimensions' ),
					),
					'control' => array(
						'type'            => 'dimensions',
						'priority'        => 20,
						'label'           => esc_html__( 'Padding', 'arilewp' ),
						'section'         => 'header_image',
						'input_attrs'     => array(
							'min'  => 0,
							'step' => 1,
						),
					),
				),
				
			    'arilewp_page_breadcrumbs_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
						'priority'        => 25,
						'label'   => esc_html__( 'Breadcrumbs', 'arilewp' ),
						'section' => 'header_image',
					),
				),
				
					'arilewp_page_breadcrumbs_disabled'            => array(
						'setting' => array(
							'default'           => true,
							'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_checkbox' ),
						),
						'control' => array(
							'type'     => 'toggle',
							'priority' => 30,
							'label'    => esc_html__( 'Breadcrumbs Enable/Disable', 'arilewp' ),
							'section'  => 'header_image',
						),
					),
					
					'arilewp_breadcrumb_separator' => array(
						'setting' => array(
							'default'           => '::',
							'sanitize_callback' => 'wp_kses_post',
						),
						'control' => array(
							'type'            => 'text',
							'priority'        => 35,
							'label'           => esc_html__( 'Breadcrumb Separator', 'arilewp' ),
							'section'         => 'header_image',
						),
				    ),	
			  

			);

		}

	}

	new ArileWP_Customize_Page_Header_Option();

endif;
