<?php
/**
 * About Template.
 *
 * @package     arilewp
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
* About Template.
*/

if ( ! class_exists( 'ArileWP_Customize_About_Custom_Template_Option' ) ) :

	class ArileWP_Customize_About_Custom_Template_Option extends ArileWP_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(           

                'arilewp_about_site_info_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 1,
						'label'    => esc_html__( 'Site Info Area Enable/Disable', 'arilewp' ),
						'section'  => 'arilewp_about_template',
					),
				),
				
				'arilewp_about_funfact_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Funfact Enable/Disable', 'arilewp' ),
						'section'  => 'arilewp_about_template',
					),
				),
				
			    'arilewp_about_team_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 3,
						'label'    => esc_html__( 'Team Enable/Disable', 'arilewp' ),
						'section'  => 'arilewp_about_template',
					),
				),
				
								
			    'arilewp_about_client_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 4,
						'label'    => esc_html__( 'Client Enable/Disable', 'arilewp' ),
						'section'  => 'arilewp_about_template',
					),
				),
				
				'arilewp_about_cta_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 4,
						'label'    => esc_html__( 'Call to Action Enable/Disable', 'arilewp' ),
						'section'  => 'arilewp_about_template',
					),
				),



			);

		}

	}

	new ArileWP_Customize_About_Custom_Template_Option();

endif;
