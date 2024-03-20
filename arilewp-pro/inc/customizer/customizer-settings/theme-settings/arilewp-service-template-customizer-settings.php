<?php
/**
 * Service Template.
 *
 * @package     arilewp
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
* Service Template.
*/

if ( ! class_exists( 'ArileWP_Customize_Service_Template_Option' ) ) :

	class ArileWP_Customize_Service_Template_Option extends ArileWP_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(           

                'arilewp_service_service_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 1,
						'label'    => esc_html__( 'Service Enable/Disable', 'arilewp' ),
						'section'  => 'arilewp_service_template',
					),
				),
				
				'arilewp_service_funfact_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Funfact Enable/Disable', 'arilewp' ),
						'section'  => 'arilewp_service_template',
					),
				),
				
				'arilewp_service_testimonial_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 3,
						'label'    => esc_html__( 'Testimonial Enable/Disable', 'arilewp' ),
						'section'  => 'arilewp_service_template',
					),
				),
				
				'arilewp_service_client_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 4,
						'label'    => esc_html__( 'Client Enable/Disable', 'arilewp' ),
						'section'  => 'arilewp_service_template',
					),
				),
				
				'arilewp_service_cta_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 5,
						'label'    => esc_html__( 'Call to Action Enable/Disable', 'arilewp' ),
						'section'  => 'arilewp_service_template',
					),
				),


			);

		}

	}

	new ArileWP_Customize_Service_Template_Option();

endif;
