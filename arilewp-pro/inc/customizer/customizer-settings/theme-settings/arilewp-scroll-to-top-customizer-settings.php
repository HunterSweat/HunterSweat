<?php
/**
 * Scroll to top.
 *
 * @package     arilewp
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'ArileWP_Customize_Scroll_To_Top_Option' ) ) :

	class ArileWP_Customize_Scroll_To_Top_Option extends ArileWP_Customize_Base_Option {

		public function elements() {

			return array(
			    
				'arilewp_scroll_to_top_enabled'        => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 5,
						'label'    => esc_html__( 'Scroll to Top Enable/Disable', 'arilewp' ),
						'section'  => 'arilewp_footer_scroll_to_top',
						'choices'  => array(
							'alpha' => true,
						),
					),
				),

			);

		}

	}

	new ArileWP_Customize_Scroll_To_Top_Option();

endif;
