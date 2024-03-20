<?php
/**
 * Footer widgets.
 *
 * @package     arilewp
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'ArileWP_Customize_Footer_Widget_Option' ) ) :

	/**
	 * Option: Footer widget.
	 */
	class ArileWP_Customize_Footer_Widget_Option extends ArileWP_Customize_Base_Option {

		public function elements() {

			return array(

				'arilewp_footer_widgets_enabled'                  => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 10,
						'label'    => esc_html__( 'Footer Widget Area Enable/Disable', 'arilewp' ),
						'section'  => 'arilewp_footer_widgets',
					),
				),
				
				'arilewp_footer_style'     => array(
						'setting' => array(
							'default'           => 'dark',
							'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio',
							'priority'        => 16,
							'is_default_type' => true,
							'label'           => esc_html__( 'Footer Style', 'arilewp' ),
							'section'         => 'arilewp_footer_widgets',
							'choices'         => array(
								'dark'  => esc_html__( 'Dark', 'arilewp' ),
								'light' => esc_html__( 'light', 'arilewp' ),
							),
						),
				),	
						
				'arilewp_footer_widgets_coloumn_layout'                    => array(
					'setting' => array(
						'default'           => '4',
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'            => 'radio_image',
						'priority'        => 20,
						'label'           => esc_html__( 'Footer Widgets Layout', 'arilewp' ),
						'section'         => 'arilewp_footer_widgets',
						'choices'         => array(
							'1'   => ARILEWP_PARENT_INC_ICON_URI . '/theme-one-column.png',
							'2'   => ARILEWP_PARENT_INC_ICON_URI . '/theme-two-columns.png',
							'3' => ARILEWP_PARENT_INC_ICON_URI . '/theme-three-columns.png',
							'4'  => ARILEWP_PARENT_INC_ICON_URI . '/theme-four-columns.png',
						),
					),
				),
				
								
				'arilewp_footer_container_size'     => array(
						'setting' => array(
							'default'           => 'container-full',
							'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio',
							'priority'        => 25,
							'is_default_type' => true,
							'label'           => esc_html__( 'Container Width', 'arilewp' ),
							'section'         => 'arilewp_footer_widgets',
							'choices'         => array(
								'container'  => esc_html__( 'Container', 'arilewp' ),
								'container-full' => esc_html__( 'Container Full', 'arilewp' ),
							),
						),
				),	
				
				

			);

		}

	}

	new ArileWP_Customize_Footer_Widget_Option();

endif;
