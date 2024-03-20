<?php
/**
 * Frontpage blog.
 *
 * @package arilewp
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'ArileWP_Customize_Homepage_Blog_Option' ) ) :

	class ArileWP_Customize_Homepage_Blog_Option extends ArileWP_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(

		        'arilewp_main_blog_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
						'priority'        => 1,
						'label'   => esc_html__( 'Blog Options', 'arilewp' ),
						'section' => 'arilewp_theme_blog',
					),
				),
			
			    	
				'arilewp_blog_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Enable/Disable', 'arilewp' ),
						'section'  => 'arilewp_theme_blog',
					),
				),
				
				
				'arilewp_blog_layout'     => array(
						'setting' => array(
							'default'           => 'arilewp_blog_layout1',
							'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio',
							'priority'        => 3,
							'is_default_type' => true,
							'label'           => esc_html__( 'Blog Layout', 'arilewp' ),
							'section'         => 'arilewp_theme_blog',
							'choices'         => array(
								'arilewp_blog_layout1'  => esc_html__( 'Layout One', 'arilewp' ),
								'arilewp_blog_layout2' => esc_html__( 'Layout Two', 'arilewp' ),
							),
						),
			    ),
				
				
				'arilewp_home_blog_meta_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 10,
						'label'    => esc_html__( 'Meta Enable/Disable', 'arilewp' ),
						'section'  => 'arilewp_theme_blog',
					),
				),
				
				'arilewp_home_blog_separator_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 11,
						'label'    => esc_html__( 'Separator Enable/Disable', 'arilewp' ),
						'section'  => 'arilewp_theme_blog',
						'active_callback' => array(
							array(
								'setting'  => 'arilewp_blog_layout',
								'operator' => '===',
								'value'    => 'arilewp_blog_layout1',
							),
						),
					),
				),
			
				'arilewp_show_more_button_link' => array(
					'setting' => array(
						'default'           => '#',
						'sanitize_callback' => 'sanitize_text_field',
					),
					'control' => array(
						'type'            => 'text',
						'priority'        => 13,
						'is_default_type' => true,
						'label'           => esc_html__( 'Button Link', 'arilewp' ),
						'section'         => 'arilewp_theme_blog',
					),
				),
				
				'arilewp_more_button_open_new_tab_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 14,
						'label'    => esc_html__( 'Open New Tab Enable/Disable', 'arilewp' ),
						'section'  => 'arilewp_theme_blog',
					),
				),
			
				
				'arilewp_blog_column_layout' => array(
					'setting' => array(
						'default'           => '4',
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'     => 'radio_image',
						'priority' => 15,
						'label'    => esc_html__( 'Column Layout', 'arilewp' ),
						'section'  => 'arilewp_theme_blog',
						'choices'  => array(
							'2'     => ARILEWP_PARENT_INC_ICON_URI . '/theme-two-columns.png',
							'3'    => ARILEWP_PARENT_INC_ICON_URI . '/theme-three-columns.png',
							'4'    => ARILEWP_PARENT_INC_ICON_URI . '/theme-four-columns.png',
						),
						'active_callback' => array(
							array(
								'setting'  => 'arilewp_blog_layout',
								'operator' => '===',
								'value'    => 'arilewp_blog_layout1',
							),
						),
					),
				),
				
				
				'arilewp_blog_front_container_size'     => array(
						'setting' => array(
							'default'           => 'container-full',
							'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio',
							'priority'        => 20,
							'is_default_type' => true,
							'label'           => esc_html__( 'Container Width', 'arilewp' ),
							'section'         => 'arilewp_theme_blog',
							'choices'         => array(
								'container'  => esc_html__( 'Container', 'arilewp' ),
								'container-full' => esc_html__( 'Container Full', 'arilewp' ),
							),
						),
			    ),	
				
				
				'arilewp_blog_area_before_after_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
						'priority'        => 35,
						'label'   => esc_html__( 'Blog Area Before After Content', 'arilewp' ),
						'section' => 'arilewp_theme_blog',
					),
				),


			);

		}

	}

	new ArileWP_Customize_Homepage_Blog_Option();

endif;
