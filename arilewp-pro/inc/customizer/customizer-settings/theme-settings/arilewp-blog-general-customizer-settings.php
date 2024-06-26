<?php
/**
 * General Blog.
 *
 * @package     arilewp
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'ArileWP_Customize_Blog_General_Option' ) ) :

	/**
	 * General Blog..
	 */
	class ArileWP_Customize_Blog_General_Option extends ArileWP_Customize_Base_Option {

		public function elements() {

			return array(
			
			    'arilewp_general_arcive_single_blog_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
				   		'priority'        => 1,
						'label'   => esc_html__( 'Blog/Archive/Single', 'arilewp' ),
						'section' => 'arilewp_blog_general',
					),
				),

				'arilewp_general_blog_arcive_single_content_ordering'        => array(
					'setting' => array(
						'default'           => array(
							'meta-one',
							'title',
							'meta-two',
						),
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_sortable' ),
					),
					'control' => array(
						'type'        => 'sortable',
						'priority'    => 5,
						'label'       => esc_html__( 'General Post', 'arilewp' ),
						'description' => esc_html__( 'Drag & Drop post items to re-arrange the order', 'arilewp' ),
						'section'     => 'arilewp_blog_general',
						'choices'     => array(
							'meta-one' => esc_attr__( 'Meta One', 'arilewp' ),
							'title'          => esc_attr__( 'Title', 'arilewp' ),
							'meta-two'           => esc_attr__( 'Meta Two', 'arilewp' ),
						),
					),
				),
				
				'arilewp_general_blog_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
				   		'priority'        => 10,
						'label'   => esc_html__( 'Blog Pages', 'arilewp' ),
						'section' => 'arilewp_blog_general',
					),
				),
				    				
					'arilewp_general_blog_container_size'     => array(
							'setting' => array(
								'default'           => 'container',
								'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
							),
							'control' => array(
								'type'            => 'radio',
								'priority'        => 12,
								'is_default_type' => true,
								'label'           => esc_html__( 'Container Width', 'arilewp' ),
								'section'         => 'arilewp_blog_general',
								'choices'         => array(
									'container'  => esc_html__( 'Container', 'arilewp' ),
									'container-full' => esc_html__( 'Container Full', 'arilewp' ),
								),
							),
					),	
				
                
				
				'arilewp_archive_blog_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
				   		'priority'        => 15,
						'label'   => esc_html__( 'Archive Blog Pages', 'arilewp' ),
						'section' => 'arilewp_blog_general',
					),
				),  
				
				
					'arilewp_archive_blog_pages_layout'                    => array(
						'setting' => array(
							'default'           => 'arilewp_right_sidebar',
							'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio_image',
							'priority'        => 20,
							'label'           => esc_html__( 'Layout', 'arilewp' ),
							'section'         => 'arilewp_blog_general',
							'choices'         => array(
								'arilewp_right_sidebar'   => ARILEWP_PARENT_INC_ICON_URI . '/theme-right-sidebar.png',
								'arilewp_left_sidebar'   => ARILEWP_PARENT_INC_ICON_URI . '/theme-left-sidebar.png',
								'arilewp_no_sidebar' => ARILEWP_PARENT_INC_ICON_URI . '/theme-fullwidth.png',
							),
						),
					),
				
				
				
					'arilewp_archive_blog_container_size'     => array(
							'setting' => array(
								'default'           => 'container',
								'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
							),
							'control' => array(
								'type'            => 'radio',
								'priority'        => 25,
								'is_default_type' => true,
								'label'           => esc_html__( 'Container Width', 'arilewp' ),
								'section'         => 'arilewp_blog_general',
								'choices'         => array(
									'container'  => esc_html__( 'Container', 'arilewp' ),
									'container-full' => esc_html__( 'Container Full', 'arilewp' ),
								),
							),
					),
					
				
				'arilewp_single_blog_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
				   		'priority'        => 30,
						'label'   => esc_html__( 'Single Blog Pages', 'arilewp' ),
						'section' => 'arilewp_blog_general',
					),
				),
				
				    'arilewp_single_blog_pages_layout'                    => array(
						'setting' => array(
							'default'           => 'arilewp_right_sidebar',
							'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio_image',
							'priority'        => 35,
							'label'           => esc_html__( 'Layout', 'arilewp' ),
							'section'         => 'arilewp_blog_general',
							'choices'         => array(
								'arilewp_right_sidebar'   => ARILEWP_PARENT_INC_ICON_URI . '/theme-right-sidebar.png',
								'arilewp_left_sidebar'   => ARILEWP_PARENT_INC_ICON_URI . '/theme-left-sidebar.png',
								'arilewp_no_sidebar' => ARILEWP_PARENT_INC_ICON_URI . '/theme-fullwidth.png',
							),
						),
					),
				
				
					'arilewp_single_blog_container_size'     => array(
							'setting' => array(
								'default'           => 'container',
								'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
							),
							'control' => array(
								'type'            => 'radio',
								'priority'        => 40,
								'is_default_type' => true,
								'label'           => esc_html__( 'Container Width', 'arilewp' ),
								'section'         => 'arilewp_blog_general',
								'choices'         => array(
									'container'  => esc_html__( 'Container', 'arilewp' ),
									'container-full' => esc_html__( 'Container Full', 'arilewp' ),
								),
							),
					),
					
					'arilewp_related_single_blog_disabled' => array(
						'setting' => array(
							'default'           => true,
							'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_checkbox' ),
						),
						'control' => array(
							'type'     => 'toggle',
							'priority' => 41,
							'label'    => esc_html__( 'Related Posts Enable/Disable', 'arilewp' ),
							'section'  => 'arilewp_blog_general',
						),
				    ),
					
				'arilewp_custom_logo_size' => array(
					'setting' => array(
						'default'           => array(
							'slider' => 210,
							'suffix' => 'px',
						),
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_slider' ),
					),
					'control' => array(
						'type'        => 'slider',
						'priority'    => 55,
						'label'       => esc_html__( 'Logo Width', 'arilewp' ),
						'section'     => 'title_tagline',
						'input_attrs' => array(
							'min'  => 0,
							'max'  => 600,
							'step' => 3,
						),
					),
				),
				

			);

		}

	}

	new ArileWP_Customize_Blog_General_Option();

endif;
