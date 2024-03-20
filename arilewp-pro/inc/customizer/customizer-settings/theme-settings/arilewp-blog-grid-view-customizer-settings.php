<?php
/**
 * Grid_View blog layout.
 *
 * @package     arilewp
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'ArileWP_Customize_Blog_Grid_View_Option' ) ) :

	/**
	 * Grid_View blog layout.
	 */
	class ArileWP_Customize_Blog_Grid_View_Option extends ArileWP_Customize_Base_Option {

		public function elements() {

			return array(
			
                'arilewp_grid_blog_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
				   		'priority'        => 1,
						'label'   => esc_html__( 'Grid Layout', 'arilewp' ),
						'section' => 'arilewp_grid_view_blog',
					),
				),
				
				'arilewp_grid_view_content_ordering'        => array(
					'setting' => array(
						'default'           => array(
							'meta',
							'title',
						),
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_sortable' ),
					),
					'control' => array(
						'type'        => 'sortable',
						'priority'    => 5,
						'label'       => esc_html__( 'Below options apply for grid view templates.', 'arilewp' ),
						'description' => esc_html__( 'Drag & Drop post items to re-arrange the order', 'arilewp' ),
						'section'     => 'arilewp_grid_view_blog',
						'choices'     => array(
							'meta' => esc_attr__( 'Meta', 'arilewp' ),
							'title'          => esc_attr__( 'Title', 'arilewp' ),
						),
					),
				),
				
				'arilewp_grid_view_column_layout' => array(
					'setting' => array(
						'default'           => '3',
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'     => 'radio_image',
						'priority' => 11,
						'label'    => esc_html__( 'Column Layout', 'arilewp' ),
						'section'  => 'arilewp_grid_view_blog',
						'choices'  => array(
							'2'     => ARILEWP_PARENT_INC_ICON_URI . '/theme-two-columns.png',
							'3'    => ARILEWP_PARENT_INC_ICON_URI . '/theme-three-columns.png',
							'4'    => ARILEWP_PARENT_INC_ICON_URI . '/theme-four-columns.png',
						),

					),
				),
				
				
				'arilewp_grid_view_container_size'     => array(
							'setting' => array(
								'default'           => 'container-full',
								'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
							),
							'control' => array(
								'type'            => 'radio',
								'priority'        => 25,
								'is_default_type' => true,
								'label'           => esc_html__( 'Container Width', 'arilewp' ),
								'section'         => 'arilewp_grid_view_blog',
								'choices'         => array(
									'container'  => esc_html__( 'Container', 'arilewp' ),
									'container-full' => esc_html__( 'Container Full', 'arilewp' ),
								),
						),
				),

			);

		}

	}

	new ArileWP_Customize_Blog_Grid_View_Option();

endif;
