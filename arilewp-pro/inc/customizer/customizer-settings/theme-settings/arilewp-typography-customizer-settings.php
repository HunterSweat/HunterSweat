<?php
/**
 * Typography.
 * @package     arilewp
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/*========================================== TYPOGRAPHY ==========================================*/
if ( ! class_exists( 'ArileWP_Customize_Theme_Typography_Option' ) ) :

	/**
	 * Theme Typography option.
	 */
	class ArileWP_Customize_Theme_Typography_Option extends ArileWP_Customize_Base_Option {

		public function elements() {

			return array(
			
/* ---------- Enable/Disable TYPOGRAPHY -------------- */		
			
			    'arilewp_typography_disabled'            => array(
					'setting' => array(
						'default'           => false,
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Enable Typography', 'arilewp' ),
						'section'  => 'arilewp_enable_disable_typography',
					),
				),
				
			
/* ---------- Base -------------- */
                
				'arilewp_typography_base_font_wieght'     => array(
						'setting' => array(
							'default'           => '',
							'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio',
							'priority'        => 20,
							'is_default_type' => true,
							'label'           => esc_html__( 'Font Weight', 'arilewp' ),
							'description'           => esc_html__( 'Note: All fonts did not support every font-weight.', 'arilewp' ),
							'section'         => 'arilewp_base_typography',
							'choices'         => array(
								''  => esc_html__( 'Default', 'arilewp' ),
								'100' => esc_html__( 'Thin 100', 'arilewp' ),
								'200' => esc_html__( 'Light 200', 'arilewp' ),
								'300' => esc_html__( 'Book 300', 'arilewp' ),
								'400' => esc_html__( 'Normal 400', 'arilewp' ),
								'500' => esc_html__( 'Medium 500', 'arilewp' ),
								'600' => esc_html__( 'Semibold 600', 'arilewp' ),
								'700' => esc_html__( 'Bold 700', 'arilewp' ),
								'800' => esc_html__( 'Extra Bold 800', 'arilewp' ),
								'900' => esc_html__( 'Black 900', 'arilewp' ),
							),
						),
			    ),	
				
				'arilewp_typography_base_font_style'     => array(
						'setting' => array(
							'default'           => '',
							'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio',
							'priority'        => 20,
							'is_default_type' => true,
							'label'           => esc_html__( 'Font Style', 'arilewp' ),
							'section'         => 'arilewp_base_typography',
							'choices'         => array(
								''  => esc_html__( 'Default', 'arilewp' ),
								'normal' => esc_html__( 'Normal', 'arilewp' ),
								'italic' => esc_html__( 'Italic', 'arilewp' ),
							),
						),
			    ),        		
                
                				
				'arilewp_typography_base_text_transform'     => array(
						'setting' => array(
							'default'           => '',
							'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio',
							'priority'        => 30,
							'is_default_type' => true,
							'label'           => esc_html__( 'Text Transform', 'arilewp' ),
							'section'         => 'arilewp_base_typography',
							'choices'         => array(
								''  => esc_html__( 'Default', 'arilewp' ),
								'capitalize' => esc_html__( 'Capitalize', 'arilewp' ),
								'lowercase' => esc_html__( 'Lowercase', 'arilewp' ),
								'uppercase' => esc_html__( 'Uppercase', 'arilewp' ),
							),
						),
			    ),
				
				'arilewp_typography_base_font_size' => array(
					'setting' => array(
						'default'           => '1rem',
						'sanitize_callback' => 'arilewp_sanitize_text',
					),
					'control' => array(
						'type'            => 'text',
						'priority'        => 40,
						'label'           => esc_html__( 'Font Size', 'arilewp' ),
						'description'           => esc_html__( 'You can enter size in px or rem ', 'arilewp' ),
						'section'         => 'arilewp_base_typography',
					),
				),	
				
				'arilewp_typography_base_letter_spacing' => array(
					'setting' => array(
						'default'           => '0px',
						'sanitize_callback' => 'arilewp_sanitize_text',
					),
					'control' => array(
						'type'            => 'text',
						'priority'        => 41,
						'label'           => esc_html__( 'Letter Spacing', 'arilewp' ),
						'description'           => esc_html__( 'You can enter spacing in px or rem ', 'arilewp' ),
						'section'         => 'arilewp_base_typography',
					),
				),	
				
				
				'arilewp_typography_base_line_height' => array(
					'setting' => array(
						'default'           => array(
							'slider' => 1.75,
							'suffix' => '',
						),
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_slider' ),
					),
					'control' => array(
						'type'        => 'slider',
						'priority'    => 50,
						'label'       => esc_html__( 'Line Height', 'arilewp' ),
						'section'     => 'arilewp_base_typography',
						'input_attrs' => array(
							'min'  => 0,
							'max'  => 5,
							'step' => 0.1,
						),
					),
				),
            							



/* ---------- MenuBar -------------- */

        /* ---------- Parent Menu -------------- */
		
            'arilewp_parent_menu_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
						'priority'        => 5,
						'label'   => esc_html__( 'Parent Menu', 'arilewp' ),
						'section' => 'arilewp_menu_bar_typography',
					),
				),
			
            	'arilewp_typography_menu_bar_font_wieght'     => array(
						'setting' => array(
							'default'           => '',
							'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio',
							'priority'        => 20,
							'is_default_type' => true,
							'label'           => esc_html__( 'Font Weight', 'arilewp' ),
							'section'         => 'arilewp_menu_bar_typography',
							'choices'         => array(
								''  => esc_html__( 'Default', 'arilewp' ),
								'100' => esc_html__( 'Thin 100', 'arilewp' ),
								'200' => esc_html__( 'Light 200', 'arilewp' ),
								'300' => esc_html__( 'Book 300', 'arilewp' ),
								'400' => esc_html__( 'Normal 400', 'arilewp' ),
								'500' => esc_html__( 'Medium 500', 'arilewp' ),
								'600' => esc_html__( 'Semibold 600', 'arilewp' ),
								'700' => esc_html__( 'Bold 700', 'arilewp' ),
								'800' => esc_html__( 'Extra Bold 800', 'arilewp' ),
								'900' => esc_html__( 'Black 900', 'arilewp' ),
							),
						),
			    ),	
				
				'arilewp_typography_menu_bar_font_style'     => array(
						'setting' => array(
							'default'           => '',
							'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio',
							'priority'        => 20,
							'is_default_type' => true,
							'label'           => esc_html__( 'Font Style', 'arilewp' ),
							'section'         => 'arilewp_menu_bar_typography',
							'choices'         => array(
								''  => esc_html__( 'Default', 'arilewp' ),
								'normal' => esc_html__( 'Normal', 'arilewp' ),
								'italic' => esc_html__( 'Italic', 'arilewp' ),
							),
						),
			    ),        		
                
                				
				'arilewp_typography_menu_bar_text_transform'     => array(
						'setting' => array(
							'default'           => '',
							'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio',
							'priority'        => 30,
							'is_default_type' => true,
							'label'           => esc_html__( 'Text Transform', 'arilewp' ),
							'section'         => 'arilewp_menu_bar_typography',
							'choices'         => array(
								''  => esc_html__( 'Default', 'arilewp' ),
								'capitalize' => esc_html__( 'Capitalize', 'arilewp' ),
								'lowercase' => esc_html__( 'Lowercase', 'arilewp' ),
								'uppercase' => esc_html__( 'Uppercase', 'arilewp' ),
							),
						),
			    ),	
				
				
				'arilewp_typography_menu_bar_font_size' => array(
					'setting' => array(
						'default'           => '1rem',
						'sanitize_callback' => 'arilewp_sanitize_text',
					),
					'control' => array(
						'type'            => 'text',
						'priority'        => 40,
						'label'           => esc_html__( 'Font Size', 'arilewp' ),
						'description'           => esc_html__( 'You can enter font size in px or rem', 'arilewp' ),
						'section'         => 'arilewp_menu_bar_typography',
					),
				),
				
				'arilewp_typography_menu_bar_letter_spacing' => array(
					'setting' => array(
						'default'           => '0px',
						'sanitize_callback' => 'arilewp_sanitize_text',
					),
					'control' => array(
						'type'            => 'text',
						'priority'        => 41,
						'label'           => esc_html__( 'Letter Spacing', 'arilewp' ),
						'description'           => esc_html__( 'You can enter spacing in px or rem', 'arilewp' ),
						'section'         => 'arilewp_menu_bar_typography',
					),
				),
				
				
				'arilewp_typography_menu_bar_line_height' => array(
					'setting' => array(
						'default'           => array(
							'slider' => 2.5,
							'suffix' => '',
						),
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_slider' ),
					),
					'control' => array(
						'type'        => 'slider',
						'priority'    => 50,
						'label'       => esc_html__( 'Line Height', 'arilewp' ),
						'section'     => 'arilewp_menu_bar_typography',
						'input_attrs' => array(
							'min'  => 0,
							'max'  => 5,
							'step' => 0.1,
						),
					),
				),

			
             /* ---------- Dropdown Menu -------------- */

			
			'arilewp_dropdown_menu_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
						'priority'        => 60,
						'label'   => esc_html__( 'Dropdown Menu', 'arilewp' ),
						'section' => 'arilewp_menu_bar_typography',
					),
				),
			
            	'arilewp_typography_dropdown_bar_font_wieght'     => array(
						'setting' => array(
							'default'           => '',
							'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio',
							'priority'        => 70,
							'is_default_type' => true,
							'label'           => esc_html__( 'Font Weight', 'arilewp' ),
							'section'         => 'arilewp_menu_bar_typography',
							'choices'         => array(
								''  => esc_html__( 'Default', 'arilewp' ),
								'100' => esc_html__( 'Thin 100', 'arilewp' ),
								'200' => esc_html__( 'Light 200', 'arilewp' ),
								'300' => esc_html__( 'Book 300', 'arilewp' ),
								'400' => esc_html__( 'Normal 400', 'arilewp' ),
								'500' => esc_html__( 'Medium 500', 'arilewp' ),
								'600' => esc_html__( 'Semibold 600', 'arilewp' ),
								'700' => esc_html__( 'Bold 700', 'arilewp' ),
								'800' => esc_html__( 'Extra Bold 800', 'arilewp' ),
								'900' => esc_html__( 'Black 900', 'arilewp' ),
							),
						),
			    ),	
				
				'arilewp_typography_dropdown_bar_font_style'     => array(
						'setting' => array(
							'default'           => '',
							'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio',
							'priority'        => 80,
							'is_default_type' => true,
							'label'           => esc_html__( 'Font Style', 'arilewp' ),
							'section'         => 'arilewp_menu_bar_typography',
							'choices'         => array(
								''  => esc_html__( 'Default', 'arilewp' ),
								'normal' => esc_html__( 'Normal', 'arilewp' ),
								'italic' => esc_html__( 'Italic', 'arilewp' ),
							),
						),
			    ),        		
                
                				
				'arilewp_typography_dropdown_bar_text_transform'     => array(
						'setting' => array(
							'default'           => '',
							'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio',
							'priority'        => 90,
							'is_default_type' => true,
							'label'           => esc_html__( 'Text Transform', 'arilewp' ),
							'section'         => 'arilewp_menu_bar_typography',
							'choices'         => array(
								''  => esc_html__( 'Default', 'arilewp' ),
								'capitalize' => esc_html__( 'Capitalize', 'arilewp' ),
								'lowercase' => esc_html__( 'Lowercase', 'arilewp' ),
								'uppercase' => esc_html__( 'Uppercase', 'arilewp' ),
							),
						),
			    ),	
				
				
				'arilewp_typography_dropdown_bar_font_size' => array(
					'setting' => array(
						'default'           => '1rem',
						'sanitize_callback' => 'arilewp_sanitize_text',
					),
					'control' => array(
						'type'            => 'text',
						'priority'        => 100,
						'label'           => esc_html__( 'Font Size', 'arilewp' ),
						'description'           => esc_html__( 'You can enter font size in px or rem', 'arilewp' ),
						'section'         => 'arilewp_menu_bar_typography',
					),
				),	
				
				'arilewp_typography_dropdown_bar_letter_spacing' => array(
					'setting' => array(
						'default'           => '0px',
						'sanitize_callback' => 'arilewp_sanitize_text',
					),
					'control' => array(
						'type'            => 'text',
						'priority'        => 101,
						'label'           => esc_html__( 'Letter Spacing', 'arilewp' ),
						'description'           => esc_html__( 'You can enter spacing in px or rem', 'arilewp' ),
						'section'         => 'arilewp_menu_bar_typography',
					),
				),
				
				
				'arilewp_typography_dropdown_bar_line_height' => array(
					'setting' => array(
						'default'           => array(
							'slider' => 2.5,
							'suffix' => '',
						),
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_slider' ),
					),
					'control' => array(
						'type'        => 'slider',
						'priority'    => 110,
						'label'       => esc_html__( 'Line Height', 'arilewp' ),
						'section'     => 'arilewp_menu_bar_typography',
						'input_attrs' => array(
							'min'  => 0,
							'max'  => 5,
							'step' => 0.1,
						),
					),
				),	
				
				
				

/* ---------- Headings H1 to H6 -------------- */

     
	    /* ---------- H1 -------------- */

               	'arilewp_typography_h1_font_wieght'     => array(
						'setting' => array(
							'default'           => '',
							'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio',
							'priority'        => 20,
							'is_default_type' => true,
							'label'           => esc_html__( 'Font Weight', 'arilewp' ),
							'section'         => 'arilewp_headings1_typography',
							'choices'         => array(
								''  => esc_html__( 'Default', 'arilewp' ),
								'100' => esc_html__( 'Thin 100', 'arilewp' ),
								'200' => esc_html__( 'Light 200', 'arilewp' ),
								'300' => esc_html__( 'Book 300', 'arilewp' ),
								'400' => esc_html__( 'Normal 400', 'arilewp' ),
								'500' => esc_html__( 'Medium 500', 'arilewp' ),
								'600' => esc_html__( 'Semibold 600', 'arilewp' ),
								'700' => esc_html__( 'Bold 700', 'arilewp' ),
								'800' => esc_html__( 'Extra Bold 800', 'arilewp' ),
								'900' => esc_html__( 'Black 900', 'arilewp' ),
							),
						),
			    ),	
				
				'arilewp_typography_h1_font_style'     => array(
						'setting' => array(
							'default'           => '',
							'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio',
							'priority'        => 30,
							'is_default_type' => true,
							'label'           => esc_html__( 'Font Style', 'arilewp' ),
							'section'         => 'arilewp_headings1_typography',
							'choices'         => array(
								''  => esc_html__( 'Default', 'arilewp' ),
								'normal' => esc_html__( 'Normal', 'arilewp' ),
								'italic' => esc_html__( 'Italic', 'arilewp' ),
							),
						),
			    ),        		
                
                				
				'arilewp_typography_h1_text_transform'     => array(
						'setting' => array(
							'default'           => '',
							'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio',
							'priority'        => 40,
							'is_default_type' => true,
							'label'           => esc_html__( 'Text Transform', 'arilewp' ),
							'section'         => 'arilewp_headings1_typography',
							'choices'         => array(
								''  => esc_html__( 'Default', 'arilewp' ),
								'capitalize' => esc_html__( 'Capitalize', 'arilewp' ),
								'lowercase' => esc_html__( 'Lowercase', 'arilewp' ),
								'uppercase' => esc_html__( 'Uppercase', 'arilewp' ),
							),
						),
			    ),	
				
				
				'arilewp_typography_h1_font_size' => array(
					'setting' => array(
						'default'           => '3rem',
						'sanitize_callback' => 'arilewp_sanitize_text',
					),
					'control' => array(
						'type'            => 'text',
						'priority'        => 50,
						'label'           => esc_html__( 'Font Size', 'arilewp' ),
						'description'           => esc_html__( 'You can enter font size in px or rem', 'arilewp' ),
						'section'         => 'arilewp_headings1_typography',
					),
				),	
				
				'arilewp_typography_h1_letter_spacing' => array(
					'setting' => array(
						'default'           => '0px',
						'sanitize_callback' => 'arilewp_sanitize_text',
					),
					'control' => array(
						'type'            => 'text',
						'priority'        => 51,
						'label'           => esc_html__( 'Letter Spacing', 'arilewp' ),
						'description'           => esc_html__( 'You can enter spacing in px or rem', 'arilewp' ),
						'section'         => 'arilewp_headings1_typography',
					),
				),	
				
				
				'arilewp_typography_h1_line_height' => array(
					'setting' => array(
						'default'           => array(
							'slider' => 1.4,
							'suffix' => '',
						),
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_slider' ),
					),
					'control' => array(
						'type'        => 'slider',
						'priority'    => 60,
						'label'       => esc_html__( 'Line Height', 'arilewp' ),
						'section'     => 'arilewp_headings1_typography',
						'input_attrs' => array(
							'min'  => 0,
							'max'  => 5,
							'step' => 0.1,
						),
					),
				),


              /* ---------- H2 -------------- */

               	'arilewp_typography_h2_font_wieght'     => array(
						'setting' => array(
							'default'           => '',
							'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio',
							'priority'        => 20,
							'is_default_type' => true,
							'label'           => esc_html__( 'Font Weight', 'arilewp' ),
							'section'         => 'arilewp_headings2_typography',
							'choices'         => array(
								''  => esc_html__( 'Default', 'arilewp' ),
								'100' => esc_html__( 'Thin 100', 'arilewp' ),
								'200' => esc_html__( 'Light 200', 'arilewp' ),
								'300' => esc_html__( 'Book 300', 'arilewp' ),
								'400' => esc_html__( 'Normal 400', 'arilewp' ),
								'500' => esc_html__( 'Medium 500', 'arilewp' ),
								'600' => esc_html__( 'Semibold 600', 'arilewp' ),
								'700' => esc_html__( 'Bold 700', 'arilewp' ),
								'800' => esc_html__( 'Extra Bold 800', 'arilewp' ),
								'900' => esc_html__( 'Black 900', 'arilewp' ),
							),
						),
			    ),	
				
				'arilewp_typography_h2_font_style'     => array(
						'setting' => array(
							'default'           => '',
							'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio',
							'priority'        => 30,
							'is_default_type' => true,
							'label'           => esc_html__( 'Font Style', 'arilewp' ),
							'section'         => 'arilewp_headings2_typography',
							'choices'         => array(
								''  => esc_html__( 'Default', 'arilewp' ),
								'normal' => esc_html__( 'Normal', 'arilewp' ),
								'italic' => esc_html__( 'Italic', 'arilewp' ),
							),
						),
			    ),        		
                
                				
				'arilewp_typography_h2_text_transform'     => array(
						'setting' => array(
							'default'           => '',
							'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio',
							'priority'        => 40,
							'is_default_type' => true,
							'label'           => esc_html__( 'Text Transform', 'arilewp' ),
							'section'         => 'arilewp_headings2_typography',
							'choices'         => array(
								''  => esc_html__( 'Default', 'arilewp' ),
								'capitalize' => esc_html__( 'Capitalize', 'arilewp' ),
								'lowercase' => esc_html__( 'Lowercase', 'arilewp' ),
								'uppercase' => esc_html__( 'Uppercase', 'arilewp' ),
							),
						),
			    ),	
				
				
				'arilewp_typography_h2_font_size' => array(
					'setting' => array(
						'default'           => '2.62rem',
						'sanitize_callback' => 'arilewp_sanitize_text',
					),
					'control' => array(
						'type'            => 'text',
						'priority'        => 50,
						'label'           => esc_html__( 'Font Size', 'arilewp' ),
						'description'           => esc_html__( 'You can enter font size in px or rem', 'arilewp' ),
						'section'         => 'arilewp_headings2_typography',
					),
				),	
				
				'arilewp_typography_h2_letter_spacing' => array(
					'setting' => array(
						'default'           => '0px',
						'sanitize_callback' => 'arilewp_sanitize_text',
					),
					'control' => array(
						'type'            => 'text',
						'priority'        => 51,
						'label'           => esc_html__( 'Letter Spacing', 'arilewp' ),
						'description'           => esc_html__( 'You can enter spacing in px or rem', 'arilewp' ),
						'section'         => 'arilewp_headings2_typography',
					),
				),
				
				
				'arilewp_typography_h2_line_height' => array(
					'setting' => array(
						'default'           => array(
							'slider' => 1.4,
							'suffix' => '',
						),
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_slider' ),
					),
					'control' => array(
						'type'        => 'slider',
						'priority'    => 60,
						'label'       => esc_html__( 'Line Height', 'arilewp' ),
						'section'     => 'arilewp_headings2_typography',
						'input_attrs' => array(
							'min'  => 0,
							'max'  => 5,
							'step' => 0.1,
						),
					),
				),
				
				
				
		/* ---------- H3 -------------- */

               	'arilewp_typography_h3_font_wieght'     => array(
						'setting' => array(
							'default'           => '',
							'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio',
							'priority'        => 20,
							'is_default_type' => true,
							'label'           => esc_html__( 'Font Weight', 'arilewp' ),
							'section'         => 'arilewp_headings3_typography',
							'choices'         => array(
								''  => esc_html__( 'Default', 'arilewp' ),
								'100' => esc_html__( 'Thin 100', 'arilewp' ),
								'200' => esc_html__( 'Light 200', 'arilewp' ),
								'300' => esc_html__( 'Book 300', 'arilewp' ),
								'400' => esc_html__( 'Normal 400', 'arilewp' ),
								'500' => esc_html__( 'Medium 500', 'arilewp' ),
								'600' => esc_html__( 'Semibold 600', 'arilewp' ),
								'700' => esc_html__( 'Bold 700', 'arilewp' ),
								'800' => esc_html__( 'Extra Bold 800', 'arilewp' ),
								'900' => esc_html__( 'Black 900', 'arilewp' ),
							),
						),
			    ),	
				
				'arilewp_typography_h3_font_style'     => array(
						'setting' => array(
							'default'           => '',
							'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio',
							'priority'        => 30,
							'is_default_type' => true,
							'label'           => esc_html__( 'Font Style', 'arilewp' ),
							'section'         => 'arilewp_headings3_typography',
							'choices'         => array(
								''  => esc_html__( 'Default', 'arilewp' ),
								'normal' => esc_html__( 'Normal', 'arilewp' ),
								'italic' => esc_html__( 'Italic', 'arilewp' ),
							),
						),
			    ),        		
                
                				
				'arilewp_typography_h3_text_transform'     => array(
						'setting' => array(
							'default'           => '',
							'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio',
							'priority'        => 40,
							'is_default_type' => true,
							'label'           => esc_html__( 'Text Transform', 'arilewp' ),
							'section'         => 'arilewp_headings3_typography',
							'choices'         => array(
								''  => esc_html__( 'Default', 'arilewp' ),
								'capitalize' => esc_html__( 'Capitalize', 'arilewp' ),
								'lowercase' => esc_html__( 'Lowercase', 'arilewp' ),
								'uppercase' => esc_html__( 'Uppercase', 'arilewp' ),
							),
						),
			    ),	
				
				
				'arilewp_typography_h3_font_size' => array(
					'setting' => array(
						'default'           => '2.25rem',
						'sanitize_callback' => 'arilewp_sanitize_text',
					),
					'control' => array(
						'type'            => 'text',
						'priority'        => 50,
						'label'           => esc_html__( 'Font Size', 'arilewp' ),
						'description'           => esc_html__( 'You can enter font size in px or rem', 'arilewp' ),
						'section'         => 'arilewp_headings3_typography',
					),
				),	
				
				'arilewp_typography_h3_letter_spacing' => array(
					'setting' => array(
						'default'           => '0px',
						'sanitize_callback' => 'arilewp_sanitize_text',
					),
					'control' => array(
						'type'            => 'text',
						'priority'        => 51,
						'label'           => esc_html__( 'Letter Spacing', 'arilewp' ),
						'description'           => esc_html__( 'You can enter spacing in px or rem', 'arilewp' ),
						'section'         => 'arilewp_headings3_typography',
					),
				),
				
				
				'arilewp_typography_h3_line_height' => array(
					'setting' => array(
						'default'           => array(
							'slider' => 1.4,
							'suffix' => '',
						),
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_slider' ),
					),
					'control' => array(
						'type'        => 'slider',
						'priority'    => 60,
						'label'       => esc_html__( 'Line Height', 'arilewp' ),
						'section'     => 'arilewp_headings3_typography',
						'input_attrs' => array(
							'min'  => 0,
							'max'  => 5,
							'step' => 0.1,
						),
					),
				),


        		/* ---------- H4 -------------- */

               	'arilewp_typography_h4_font_wieght'     => array(
						'setting' => array(
							'default'           => '',
							'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio',
							'priority'        => 20,
							'is_default_type' => true,
							'label'           => esc_html__( 'Font Weight', 'arilewp' ),
							'section'         => 'arilewp_headings4_typography',
							'choices'         => array(
								''  => esc_html__( 'Default', 'arilewp' ),
								'100' => esc_html__( 'Thin 100', 'arilewp' ),
								'200' => esc_html__( 'Light 200', 'arilewp' ),
								'300' => esc_html__( 'Book 300', 'arilewp' ),
								'400' => esc_html__( 'Normal 400', 'arilewp' ),
								'500' => esc_html__( 'Medium 500', 'arilewp' ),
								'600' => esc_html__( 'Semibold 600', 'arilewp' ),
								'700' => esc_html__( 'Bold 700', 'arilewp' ),
								'800' => esc_html__( 'Extra Bold 800', 'arilewp' ),
								'900' => esc_html__( 'Black 900', 'arilewp' ),
							),
						),
			    ),	
				
				'arilewp_typography_h4_font_style'     => array(
						'setting' => array(
							'default'           => '',
							'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio',
							'priority'        => 30,
							'is_default_type' => true,
							'label'           => esc_html__( 'Font Style', 'arilewp' ),
							'section'         => 'arilewp_headings4_typography',
							'choices'         => array(
								''  => esc_html__( 'Default', 'arilewp' ),
								'normal' => esc_html__( 'Normal', 'arilewp' ),
								'italic' => esc_html__( 'Italic', 'arilewp' ),
							),
						),
			    ),        		
                
                				
				'arilewp_typography_h4_text_transform'     => array(
						'setting' => array(
							'default'           => '',
							'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio',
							'priority'        => 40,
							'is_default_type' => true,
							'label'           => esc_html__( 'Text Transform', 'arilewp' ),
							'section'         => 'arilewp_headings4_typography',
							'choices'         => array(
								''  => esc_html__( 'Default', 'arilewp' ),
								'capitalize' => esc_html__( 'Capitalize', 'arilewp' ),
								'lowercase' => esc_html__( 'Lowercase', 'arilewp' ),
								'uppercase' => esc_html__( 'Uppercase', 'arilewp' ),
							),
						),
			    ),	
				
				
				'arilewp_typography_h4_font_size' => array(
					'setting' => array(
						'default'           => '1.875rem',
						'sanitize_callback' => 'arilewp_sanitize_text',
					),
					'control' => array(
						'type'            => 'text',
						'priority'        => 50,
						'label'           => esc_html__( 'Font Size', 'arilewp' ),
						'description'           => esc_html__( 'You can enter font size in px or rem', 'arilewp' ),
						'section'         => 'arilewp_headings4_typography',
					),
				),	
				
				'arilewp_typography_h4_letter_spacing' => array(
					'setting' => array(
						'default'           => '0px',
						'sanitize_callback' => 'arilewp_sanitize_text',
					),
					'control' => array(
						'type'            => 'text',
						'priority'        => 51,
						'label'           => esc_html__( 'Letter Spacing', 'arilewp' ),
						'description'           => esc_html__( 'You can enter spacing in px or rem', 'arilewp' ),
						'section'         => 'arilewp_headings4_typography',
					),
				),
				
				
				'arilewp_typography_h4_line_height' => array(
					'setting' => array(
						'default'           => array(
							'slider' => 1.4,
							'suffix' => '',
						),
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_slider' ),
					),
					'control' => array(
						'type'        => 'slider',
						'priority'    => 60,
						'label'       => esc_html__( 'Line Height', 'arilewp' ),
						'section'     => 'arilewp_headings4_typography',
						'input_attrs' => array(
							'min'  => 0,
							'max'  => 5,
							'step' => 0.1,
						),
					),
				),

        /* ---------- H5 -------------- */

               	'arilewp_typography_h5_font_wieght'     => array(
						'setting' => array(
							'default'           => '',
							'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio',
							'priority'        => 20,
							'is_default_type' => true,
							'label'           => esc_html__( 'Font Weight', 'arilewp' ),
							'section'         => 'arilewp_headings5_typography',
							'choices'         => array(
								''  => esc_html__( 'Default', 'arilewp' ),
								'100' => esc_html__( 'Thin 100', 'arilewp' ),
								'200' => esc_html__( 'Light 200', 'arilewp' ),
								'300' => esc_html__( 'Book 300', 'arilewp' ),
								'400' => esc_html__( 'Normal 400', 'arilewp' ),
								'500' => esc_html__( 'Medium 500', 'arilewp' ),
								'600' => esc_html__( 'Semibold 600', 'arilewp' ),
								'700' => esc_html__( 'Bold 700', 'arilewp' ),
								'800' => esc_html__( 'Extra Bold 800', 'arilewp' ),
								'900' => esc_html__( 'Black 900', 'arilewp' ),
							),
						),
			    ),	
				
				'arilewp_typography_h5_font_style'     => array(
						'setting' => array(
							'default'           => '',
							'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio',
							'priority'        => 30,
							'is_default_type' => true,
							'label'           => esc_html__( 'Font Style', 'arilewp' ),
							'section'         => 'arilewp_headings5_typography',
							'choices'         => array(
								''  => esc_html__( 'Default', 'arilewp' ),
								'normal' => esc_html__( 'Normal', 'arilewp' ),
								'italic' => esc_html__( 'Italic', 'arilewp' ),
							),
						),
			    ),        		
                
                				
				'arilewp_typography_h5_text_transform'     => array(
						'setting' => array(
							'default'           => '',
							'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio',
							'priority'        => 40,
							'is_default_type' => true,
							'label'           => esc_html__( 'Text Transform', 'arilewp' ),
							'section'         => 'arilewp_headings5_typography',
							'choices'         => array(
								''  => esc_html__( 'Default', 'arilewp' ),
								'capitalize' => esc_html__( 'Capitalize', 'arilewp' ),
								'lowercase' => esc_html__( 'Lowercase', 'arilewp' ),
								'uppercase' => esc_html__( 'Uppercase', 'arilewp' ),
							),
						),
			    ),	
				
				
				'arilewp_typography_h5_font_size' => array(
					'setting' => array(
						'default'           => '1.5rem',
						'sanitize_callback' => 'arilewp_sanitize_text',
					),
					'control' => array(
						'type'            => 'text',
						'priority'        => 50,
						'label'           => esc_html__( 'Font Size', 'arilewp' ),
						'description'           => esc_html__( 'You can enter font size in px or rem', 'arilewp' ),
						'section'         => 'arilewp_headings5_typography',
					),
				),	
				
				'arilewp_typography_h5_letter_spacing' => array(
					'setting' => array(
						'default'           => '0px',
						'sanitize_callback' => 'arilewp_sanitize_text',
					),
					'control' => array(
						'type'            => 'text',
						'priority'        => 51,
						'label'           => esc_html__( 'Letter Spacing', 'arilewp' ),
						'description'           => esc_html__( 'You can enter spacing in px or rem', 'arilewp' ),
						'section'         => 'arilewp_headings5_typography',
					),
				),
				
				
				'arilewp_typography_h5_line_height' => array(
					'setting' => array(
						'default'           => array(
							'slider' => 1.4,
							'suffix' => '',
						),
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_slider' ),
					),
					'control' => array(
						'type'        => 'slider',
						'priority'    => 60,
						'label'       => esc_html__( 'Line Height', 'arilewp' ),
						'section'     => 'arilewp_headings5_typography',
						'input_attrs' => array(
							'min'  => 0,
							'max'  => 5,
							'step' => 0.1,
						),
					),
				),


                /* ---------- H6 -------------- */

               	'arilewp_typography_h6_font_wieght'     => array(
						'setting' => array(
							'default'           => '',
							'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio',
							'priority'        => 20,
							'is_default_type' => true,
							'label'           => esc_html__( 'Font Weight', 'arilewp' ),
							'section'         => 'arilewp_headings6_typography',
							'choices'         => array(
								''  => esc_html__( 'Default', 'arilewp' ),
								'100' => esc_html__( 'Thin 100', 'arilewp' ),
								'200' => esc_html__( 'Light 200', 'arilewp' ),
								'300' => esc_html__( 'Book 300', 'arilewp' ),
								'400' => esc_html__( 'Normal 400', 'arilewp' ),
								'500' => esc_html__( 'Medium 500', 'arilewp' ),
								'600' => esc_html__( 'Semibold 600', 'arilewp' ),
								'700' => esc_html__( 'Bold 700', 'arilewp' ),
								'800' => esc_html__( 'Extra Bold 800', 'arilewp' ),
								'900' => esc_html__( 'Black 900', 'arilewp' ),
							),
						),
			    ),	
				
				'arilewp_typography_h6_font_style'     => array(
						'setting' => array(
							'default'           => '',
							'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio',
							'priority'        => 30,
							'is_default_type' => true,
							'label'           => esc_html__( 'Font Style', 'arilewp' ),
							'section'         => 'arilewp_headings6_typography',
							'choices'         => array(
								''  => esc_html__( 'Default', 'arilewp' ),
								'normal' => esc_html__( 'Normal', 'arilewp' ),
								'italic' => esc_html__( 'Italic', 'arilewp' ),
							),
						),
			    ),        		
                
                				
				'arilewp_typography_h6_text_transform'     => array(
						'setting' => array(
							'default'           => '',
							'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio',
							'priority'        => 40,
							'is_default_type' => true,
							'label'           => esc_html__( 'Text Transform', 'arilewp' ),
							'section'         => 'arilewp_headings6_typography',
							'choices'         => array(
								''  => esc_html__( 'Default', 'arilewp' ),
								'capitalize' => esc_html__( 'Capitalize', 'arilewp' ),
								'lowercase' => esc_html__( 'Lowercase', 'arilewp' ),
								'uppercase' => esc_html__( 'Uppercase', 'arilewp' ),
							),
						),
			    ),	
				
				
				'arilewp_typography_h6_font_size' => array(
					'setting' => array(
						'default'           => '1rem',
						'sanitize_callback' => 'arilewp_sanitize_text',
					),
					'control' => array(
						'type'            => 'text',
						'priority'        => 50,
						'label'           => esc_html__( 'Font Size', 'arilewp' ),
						'description'           => esc_html__( 'You can enter font size in px or rem', 'arilewp' ),
						'section'         => 'arilewp_headings6_typography',
					),
				),	
				
				'arilewp_typography_h6_letter_spacing' => array(
					'setting' => array(
						'default'           => '0px',
						'sanitize_callback' => 'arilewp_sanitize_text',
					),
					'control' => array(
						'type'            => 'text',
						'priority'        => 51,
						'label'           => esc_html__( 'Letter Spacing', 'arilewp' ),
						'description'           => esc_html__( 'You can enter spacing in px or rem', 'arilewp' ),
						'section'         => 'arilewp_headings6_typography',
					),
				),
				
				
				'arilewp_typography_h6_line_height' => array(
					'setting' => array(
						'default'           => array(
							'slider' => 1.4,
							'suffix' => '',
						),
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_slider' ),
					),
					'control' => array(
						'type'        => 'slider',
						'priority'    => 60,
						'label'       => esc_html__( 'Line Height', 'arilewp' ),
						'section'     => 'arilewp_headings6_typography',
						'input_attrs' => array(
							'min'  => 0,
							'max'  => 5,
							'step' => 0.1,
						),
					),
				),




/* ----------------- Widgets ------------------ */


             /* ---------- Widget Title -------------- */
		
            'arilewp_widget_title_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
						'priority'        => 5,
						'label'   => esc_html__( 'Widget Title', 'arilewp' ),
						'section' => 'arilewp_widgets_typography',
					),
				),
			
            	'arilewp_typography_widget_title_font_wieght'     => array(
						'setting' => array(
							'default'           => '',
							'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio',
							'priority'        => 20,
							'is_default_type' => true,
							'label'           => esc_html__( 'Font Weight', 'arilewp' ),
							'section'         => 'arilewp_widgets_typography',
							'choices'         => array(
								''  => esc_html__( 'Default', 'arilewp' ),
								'100' => esc_html__( 'Thin 100', 'arilewp' ),
								'200' => esc_html__( 'Light 200', 'arilewp' ),
								'300' => esc_html__( 'Book 300', 'arilewp' ),
								'400' => esc_html__( 'Normal 400', 'arilewp' ),
								'500' => esc_html__( 'Medium 500', 'arilewp' ),
								'600' => esc_html__( 'Semibold 600', 'arilewp' ),
								'700' => esc_html__( 'Bold 700', 'arilewp' ),
								'800' => esc_html__( 'Extra Bold 800', 'arilewp' ),
								'900' => esc_html__( 'Black 900', 'arilewp' ),
							),
						),
			    ),	
				
				'arilewp_typography_widget_title_font_style'     => array(
						'setting' => array(
							'default'           => '',
							'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio',
							'priority'        => 30,
							'is_default_type' => true,
							'label'           => esc_html__( 'Font Style', 'arilewp' ),
							'section'         => 'arilewp_widgets_typography',
							'choices'         => array(
								''  => esc_html__( 'Default', 'arilewp' ),
								'normal' => esc_html__( 'Normal', 'arilewp' ),
								'italic' => esc_html__( 'Italic', 'arilewp' ),
							),
						),
			    ),        		
                
                				
				'arilewp_typography_widget_title_text_transform'     => array(
						'setting' => array(
							'default'           => '',
							'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio',
							'priority'        => 40,
							'is_default_type' => true,
							'label'           => esc_html__( 'Text Transform', 'arilewp' ),
							'section'         => 'arilewp_widgets_typography',
							'choices'         => array(
								''  => esc_html__( 'Default', 'arilewp' ),
								'capitalize' => esc_html__( 'Capitalize', 'arilewp' ),
								'lowercase' => esc_html__( 'Lowercase', 'arilewp' ),
								'uppercase' => esc_html__( 'Uppercase', 'arilewp' ),
							),
						),
			    ),	
				
				
				'arilewp_typography_widget_title_font_size' => array(
					'setting' => array(
						'default'           => '1.2rem',
						'sanitize_callback' => 'arilewp_sanitize_text',
					),
					'control' => array(
						'type'            => 'text',
						'priority'        => 50,
						'label'           => esc_html__( 'Font Size', 'arilewp' ),
						'description'           => esc_html__( 'You can enter font size in px or rem', 'arilewp' ),
						'section'         => 'arilewp_widgets_typography',
					),
				),	
				
				'arilewp_typography_widget_title_letter_spacing' => array(
					'setting' => array(
						'default'           => '0px',
						'sanitize_callback' => 'arilewp_sanitize_text',
					),
					'control' => array(
						'type'            => 'text',
						'priority'        => 50,
						'label'           => esc_html__( 'Letter Spacing', 'arilewp' ),
						'description'           => esc_html__( 'You can enter spacing in px or rem', 'arilewp' ),
						'section'         => 'arilewp_widgets_typography',
					),
				),
				
				
				'arilewp_typography_widget_title_line_height' => array(
					'setting' => array(
						'default'           => array(
							'slider' => 1.4,
							'suffix' => '',
						),
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_slider' ),
					),
					'control' => array(
						'type'        => 'slider',
						'priority'    => 60,
						'label'       => esc_html__( 'Line Height', 'arilewp' ),
						'section'     => 'arilewp_widgets_typography',
						'input_attrs' => array(
							'min'  => 0,
							'max'  => 5,
							'step' => 0.1,
						),
					),
				),


			);

		}

	}

	new ArileWP_Customize_Theme_Typography_Option();

endif;
