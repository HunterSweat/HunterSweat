<?php
/**
 * Contact Template.
 *
 * @package     arilewp
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
* Contact Template.
*/

if ( ! class_exists( 'ArileWP_Customize_Contact_Template_Option' ) ) :

	class ArileWP_Customize_Contact_Template_Option extends ArileWP_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(   


                'arilewp_contact_info_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
						'priority'        => 1,
						'label'   => esc_html__( 'Contact Info Area', 'arilewp' ),
						'section' => 'arilewp_contact_template',
					),
				),			

                'arilewp_contact_info_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Enable/Disable', 'arilewp' ),
						'section'  => 'arilewp_contact_template',
					),
				),
				
				'arilewp_contact_info_column_layout' => array(
					'setting' => array(
						'default'           => '3',
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'     => 'radio_image',
						'priority' => 5,
						'label'    => esc_html__( 'Column Layout', 'arilewp' ),
						'section'  => 'arilewp_contact_template',
						'choices'  => array(
							'2'     => ARILEWP_PARENT_INC_ICON_URI . '/theme-two-columns.png',
							'3'    => ARILEWP_PARENT_INC_ICON_URI . '/theme-three-columns.png',
							'4'    => ARILEWP_PARENT_INC_ICON_URI . '/theme-four-columns.png',
						),

					),
				),
				
				
                'arilewp_google_map_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
						'priority'        => 10,
						'label'   => esc_html__( 'Google Map', 'arilewp' ),
						'section' => 'arilewp_contact_template',
					),
				),			
				
				'arilewp_google_map_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 15,
						'label'    => esc_html__( 'Enable/Disable', 'arilewp' ),
						'section'  => 'arilewp_contact_template',
					),
				),
				
				'arilewp_google_map_title' => array(
					'setting' => array(
						'default'           => 'Find Us On The Map',
						'sanitize_callback' => 'wp_kses_post',
					),
					'control' => array(
						'type'            => 'text',
						'priority'        => 18,
						'label'           => esc_html__( 'Map Title', 'arilewp' ),
						'section'         => 'arilewp_contact_template',
					),
				),
				
				'arilewp_google_map_shortcode' => array(
					'setting' => array(
						'sanitize_callback' => 'wp_kses_post',
					),
					'control' => array(
						'type'            => 'text',
						'priority'        => 19,
						'label'           => esc_html__( 'Google Map Shortcode', 'arilewp' ),
						'section'         => 'arilewp_contact_template',
					),
				),
								
                'arilewp_contact_form_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
						'priority'        => 25,
						'label'   => esc_html__( 'Contact Form', 'arilewp' ),
						'section' => 'arilewp_contact_template',
					),
				),	
				
				'arilewp_contact_form_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 30,
						'label'    => esc_html__( 'Enable/Disable', 'arilewp' ),
						'section'  => 'arilewp_contact_template',
					),
				),

                'arilewp_contact_form_title' => array(
					'setting' => array(
						'default'           => 'Drop Us a Message',
						'sanitize_callback' => 'wp_kses_post',
					),
					'control' => array(
						'type'            => 'text',
						'priority'        => 35,
						'label'           => esc_html__( 'Title', 'arilewp' ),
						'section'         => 'arilewp_contact_template',
					),
				),

                'arilewp_contact_about_heading'     => array(
                    'setting' => array(),
                    'control' => array(
                        'type'    => 'heading',
                        'priority'        => 38,
                        'label'   => esc_html__( 'Read About Us', 'arilewp' ),
                        'section' => 'arilewp_contact_template',
                    ),
                ),

                'arilewp_contact_about_title' => array(
                    'setting' => array(
                        'default'           => 'Read About Us',
                        'sanitize_callback' => 'wp_kses_post',
                    ),
                    'control' => array(
                        'type'            => 'text',
                        'priority'        => 39,
                        'label'           => esc_html__( 'Title', 'arilewp' ),
                        'section'         => 'arilewp_contact_template',
                    ),
                ),


            );

		}

	}

	new ArileWP_Customize_Contact_Template_Option();

endif;
