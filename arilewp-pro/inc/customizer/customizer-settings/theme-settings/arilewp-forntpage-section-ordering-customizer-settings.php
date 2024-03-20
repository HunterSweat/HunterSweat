<?php
/**
 * Frontpage Section Reordering.
 *
 * @package     arilewp
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
* Frontpage Section options.
*/

if ( ! class_exists( 'ArileWP_Customize_Frontpage_Section_Order_Option' ) ) :

	class ArileWP_Customize_Frontpage_Section_Order_Option extends ArileWP_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(

				'arilewp_forntpage_section_ordering'        => array(
					'setting' => array(
						'default'           => array(
							'site-info',
							'service',
							'project',
							'funfact',
							'testimonial',
							'wooshop',
							'callout',
							'team',
							'blog',
							'client',
						),
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_sortable' ),
					),
					'control' => array(
						'type'        => 'sortable',
						'priority'    => 10,
						'label'       => esc_html__( 'Frontpage Section Order', 'arilewp' ),
						'description' => esc_html__( 'Drag & Drop items to re-arrange the order and', 'arilewp' ),
						'section'     => 'arilewp_section_order',
						'choices'     => array(
							'site-info' => esc_attr__( 'Site Info', 'arilewp' ),
							'service'          => esc_attr__( 'Service', 'arilewp' ),
							'project'           => esc_attr__( 'Project', 'arilewp' ),
							'funfact'        => esc_attr__( 'Funfact', 'arilewp' ),
							'testimonial' => esc_attr__( 'Testimonial', 'arilewp' ),
							'wooshop'          => esc_attr__( 'WooCommerce Shop', 'arilewp' ),
							'callout'           => esc_attr__( 'Call to Action', 'arilewp' ),
							'team'        => esc_attr__( 'Team Members', 'arilewp' ),
						    'blog'           => esc_attr__( 'Blog', 'arilewp' ),
							'client'        => esc_attr__( 'Client', 'arilewp' ),
						),
					),
				),

			);

		}

	}

	new ArileWP_Customize_Frontpage_Section_Order_Option();

endif;
