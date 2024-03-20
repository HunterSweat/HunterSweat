<?php
/**
 * List View blog layout.
 *
 * @package     arilewp
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'ArileWP_Customize_List_View_Blog_Option' ) ) :

	/**
	 * List View blog layout.
	 */
	class ArileWP_Customize_List_View_Blog_Option extends ArileWP_Customize_Base_Option {

		public function elements() {

			return array(

                'arilewp_list_view_blog_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
				   		'priority'        => 1,
						'label'   => esc_html__( 'List View Layout', 'arilewp' ),
						'section' => 'arilewp_list_view_blog',
					),
				),
				
				'arilewp_list_view_content_ordering'        => array(
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
						'label'       => esc_html__( 'Below options apply for list view templates.', 'arilewp' ),
						'description' => esc_html__( 'Drag & Drop post items to re-arrange the order', 'arilewp' ),
						'section'     => 'arilewp_list_view_blog',
						'choices'     => array(
							'meta-one' => esc_attr__( 'Meta One', 'arilewp' ),
							'title'          => esc_attr__( 'Title', 'arilewp' ),
							'meta-two'          => esc_attr__( 'Meta Two', 'arilewp' ),
						),
					),
				), 
				
				'arilewp_list_view_container_size'     => array(
							'setting' => array(
								'default'           => 'container',
								'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
							),
							'control' => array(
								'type'            => 'radio',
								'priority'        => 20,
								'is_default_type' => true,
								'label'           => esc_html__( 'Container Width', 'arilewp' ),
								'section'         => 'arilewp_list_view_blog',
								'choices'         => array(
									'container'  => esc_html__( 'Container', 'arilewp' ),
									'container-full' => esc_html__( 'Container Full', 'arilewp' ),
								),
						),
				),


			);

		}

	}

	new ArileWP_Customize_List_View_Blog_Option();

endif;
