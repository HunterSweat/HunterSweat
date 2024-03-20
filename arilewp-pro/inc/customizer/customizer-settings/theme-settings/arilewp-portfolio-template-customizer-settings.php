<?php
/**
 * Portfolio Template.
 *
 * @package     arilewp
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
* Portfolio Template.
*/

if ( ! class_exists( 'ArileWP_Customize_Portfolio_Template_Option' ) ) :

	class ArileWP_Customize_Portfolio_Template_Option extends ArileWP_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array( 

                'arilewp_portfolio_template_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
						'priority'        => 1,
						'label'   => esc_html__( 'Portfolio 2/3/4 Column', 'arilewp' ),
						'section' => 'arilewp_portfolio_template',
					),
				),			

                'arilewp_portfolio_templates_title' => array(
					'setting' => array(
						'default'           => 'Our Portfolio',
						'sanitize_callback' => 'wp_kses_post',
					),
					'control' => array(
						'type'            => 'text',
						'priority'        => 1,
						'label'           => esc_html__( 'Title', 'arilewp' ),
						'section'         => 'arilewp_portfolio_template',
					),
				),	
				
				'arilewp_portfolio_templates_desc' => array(
					'setting' => array(
						'default'           => '<b>Recent</b> Projects',
						'sanitize_callback' => 'wp_kses_post',
					),
					'control' => array(
						'type'            => 'text',
						'priority'        => 3,
						'label'           => esc_html__( 'Description', 'arilewp' ),
						'section'         => 'arilewp_portfolio_template',
					),
				),	
                			

                'arilewp_portfolio_category_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 5,
						'label'    => esc_html__( 'Category Bar Enable/Disable', 'arilewp' ),
						'section'  => 'arilewp_portfolio_template',
					),
				),
				
				'arilewp_portfolio_templates_container_size'     => array(
						'setting' => array(
							'default'           => 'container-full',
							'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio',
							'priority'        => 6,
							'is_default_type' => true,
							'label'           => esc_html__( 'Container Width', 'arilewp' ),
							'section'         => 'arilewp_portfolio_template',
							'choices'         => array(
								'container'  => esc_html__( 'Container', 'arilewp' ),
								'container-full' => esc_html__( 'Container Full', 'arilewp' ),
							),
						),
			    ),	
				
				
			    'arilewp_portfolio_category_template_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
						'priority'        => 10,
						'label'   => esc_html__( 'Portfolio Category Archive', 'arilewp' ),
						'section' => 'arilewp_portfolio_template',
					),
				),		
				
			    'arilewp_portfolio_category_templates_title' => array(
					'setting' => array(
						'default'           => 'Our Portfolio',
						'sanitize_callback' => 'wp_kses_post',
					),
					'control' => array(
						'type'            => 'text',
						'priority'        => 15,
						'label'           => esc_html__( 'Title', 'arilewp' ),
						'section'         => 'arilewp_portfolio_template',
					),
				),	
				
				'arilewp_portfolio_category_templates_desc' => array(
					'setting' => array(
						'default'           => '<b>Recent</b> Projects',
						'sanitize_callback' => 'wp_kses_post',
					),
					'control' => array(
						'type'            => 'text',
						'priority'        => 20,
						'label'           => esc_html__( 'Description', 'arilewp' ),
						'section'         => 'arilewp_portfolio_template',
					),
				),	
				
				
				'arilewp_portfolio_category_column_layout' => array(
					'setting' => array(
						'default'           => '3',
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'     => 'radio_image',
						'priority' => 25,
						'label'    => esc_html__( 'Column Layout', 'arilewp' ),
						'section'  => 'arilewp_portfolio_template',
						'choices'  => array(
							'2'     => ARILEWP_PARENT_INC_ICON_URI . '/theme-two-columns.png',
							'3'    => ARILEWP_PARENT_INC_ICON_URI . '/theme-three-columns.png',
							'4'    => ARILEWP_PARENT_INC_ICON_URI . '/theme-four-columns.png',
						),

					),
				),
				
				'arilewp_portfolio_archive_container_size'     => array(
						'setting' => array(
							'default'           => 'container-full',
							'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio',
							'priority'        => 26,
							'is_default_type' => true,
							'label'           => esc_html__( 'Container Width', 'arilewp' ),
							'section'         => 'arilewp_portfolio_template',
							'choices'         => array(
								'container'  => esc_html__( 'Container', 'arilewp' ),
								'container-full' => esc_html__( 'Container Full', 'arilewp' ),
							),
						),
			    ),	


			);

		}

	}

	new ArileWP_Customize_Portfolio_Template_Option();

endif;
