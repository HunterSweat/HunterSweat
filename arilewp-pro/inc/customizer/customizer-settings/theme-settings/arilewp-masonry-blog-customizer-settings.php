<?php
/**
 * Masonry blog layout.
 *
 * @package     arilewp
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'ArileWP_Customize_Masonry_Blog_Option' ) ) :

	/**
	 * Masonry blog layout.
	 */
	class ArileWP_Customize_Masonry_Blog_Option extends ArileWP_Customize_Base_Option {

		public function elements() {

			return array(
			
			
			    'arilewp_masonry_blog_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
				   		'priority'        => 1,
						'label'   => esc_html__( 'Masonry Layout', 'arilewp' ),
						'section' => 'arilewp_masonry_view_blog',
					),
				),
				
				'arilewp_masonry_view_content_ordering'        => array(
					'setting' => array(
						'default'           => array(
							'meta',
							'title',
							'content',
						),
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_sortable' ),
					),
					'control' => array(
						'type'        => 'sortable',
						'priority'    => 5,
						'label'       => esc_html__( 'Below options apply for masonry layout templates.', 'arilewp' ),
						'description' => esc_html__( 'Drag & Drop post items to re-arrange the order', 'arilewp' ),
						'section'     => 'arilewp_masonry_view_blog',
						'choices'     => array(
							'meta' => esc_attr__( 'Meta', 'arilewp' ),
							'title'          => esc_attr__( 'Title', 'arilewp' ),
						),
					),
				), 
				
				'arilewp_masonry_view_container_size'     => array(
							'setting' => array(
								'default'           => 'container-full',
								'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
							),
							'control' => array(
								'type'            => 'radio',
								'priority'        => 20,
								'is_default_type' => true,
								'label'           => esc_html__( 'Container Width', 'arilewp' ),
								'section'         => 'arilewp_masonry_view_blog',
								'choices'         => array(
									'container'  => esc_html__( 'Container', 'arilewp' ),
									'container-full' => esc_html__( 'Container Full', 'arilewp' ),
								),
						),
				),


			);

		}

	}

	new ArileWP_Customize_Masonry_Blog_Option();

endif;
