<?php 
/* Top header content  */
if ( ! function_exists( 'arilewp_theme_top_header_default_content' ) ) :		
    function arilewp_theme_top_header_default_content( $wp_customize ){
			$arilewp_theme_top_header_content_control = $wp_customize->get_setting( 'arilewp_top_header_info_content' );
				if ( ! empty( $arilewp_theme_top_header_content_control ) ) {
					$arilewp_theme_top_header_content_control->default = json_encode( array(
						array(
						'icon_value' => 'fa fa-map-marker',
						'text'       => esc_html__( '2130 Fulton Street, San Francisco, CA 94117-1080 USA', 'arilewp' ),
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b37',
						),
						array(
						'icon_value' => 'fa fa-phone',
						'text'       => '+14 1-800-1234-567',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b47',
						),
						array(
						'icon_value' => 'fa fa-envelope-o',
						'text'       => esc_html__( 'info@arilewp.com', 'arilewp' ),
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b57',
						),
						
					) );

				}
	    }
add_action( 'customize_register', 'arilewp_theme_top_header_default_content' );
endif;

/* Top header social icons  */
if ( ! function_exists( 'arilewp_theme_header_social_default_content' ) ) :		
    function arilewp_theme_header_social_default_content( $wp_customize ){
			$arilewp_theme_top_header_social_content_control = $wp_customize->get_setting( 'arilewp_top_header_social_content' );
				if ( ! empty( $arilewp_theme_top_header_social_content_control ) ) {
					$arilewp_theme_top_header_social_content_control->default = json_encode( array(
						array(
						'icon_value' => 'fa fa-facebook',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b37',
						),
						array(
						'icon_value' => 'fa fa-twitter',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b47',
						),
						array(
						'icon_value' => 'fa fa-google-plus',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b57',
						),
						array(
						'icon_value' => 'fa fa-linkedin',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b57',
						),
						array(
						'icon_value' => 'fa fa-instagram',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b57',
						),
                        array(
						'icon_value' => 'fa fa-youtube',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b57',
						),
						array(
						'icon_value' => 'fa fa-skype',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b57',
						),
						
					) );

				}
	    }
add_action( 'customize_register', 'arilewp_theme_header_social_default_content' );
endif;

if ( ! function_exists( 'arilewp_main_slider_default_content' ) ) :
		/* Main slider content  */
		function arilewp_main_slider_default_content( $wp_customize ){
				
					$arilewp_main_slider_content_control = $wp_customize->get_setting( 'arilewp_main_slider_content' );
						if ( ! empty( $arilewp_main_slider_content_control ) ) {
						$arilewp_main_slider_content_control->default = json_encode( array(
						array(
						'title'      => esc_html__( 'We Create Amazing WordPress Themes', 'arilewp' ),
						'text'       => esc_html__( 'We are very happy to present to you ArileWP, the powerful and flexible multi-purpose WordPress theme. Not only does ArileWP outstand with many new features but suitable for all creatives and businesses. Join 2500+ customers.', 'arilewp' ),
						'button_text'      => __('Check it out','arilewp'),
						'link'       => '#',
						'image_url'  => get_template_directory_uri().'/assets/img/slider/theme-slide1.jpg',
						'slide_format' => 'left',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b10',
						),
						array(
						'title'      => esc_html__( 'Best Digital Marketing Solutions', 'arilewp' ),
						'text'       => esc_html__( 'We are very happy to present to you ArileWP, the powerful and flexible multi-purpose WordPress theme. Not only does ArileWP outstand with many new features but suitable for all creatives and businesses. Join 2500+ customers.', 'arilewp' ),
						'button_text'      => __('Check it out','arilewp'),
						'link'       => '#',
						'image_url'  => get_template_directory_uri().'/assets/img/slider/theme-slide2.jpg',
						'slide_format' => 'left',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b11',
						),
						array(
						'title'      => esc_html__( 'We are very happy to present to you', 'arilewp' ),
						'text'       => esc_html__( 'We are very happy to present to you ArileWP, the powerful and flexible multi-purpose WordPress theme. Not only does ArileWP outstand with many new features but suitable for all creatives and businesses. Join 2500+ customers.', 'arilewp' ),
						'button_text'      => __('Check it out','arilewp'),
						'link'       => '#',
						'image_url'  => get_template_directory_uri().'/assets/img/slider/theme-slide3.jpg',
						'slide_format' => 'left',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b12',
						),


					) 
					
				);

			}
		}
add_action( 'customize_register', 'arilewp_main_slider_default_content' );
endif;


/* Service content  */
if ( ! function_exists( 'arilewp_theme_info_default_content' ) ) :		
    function arilewp_theme_info_default_content( $wp_customize ){
			$arilewp_theme_info_content_control = $wp_customize->get_setting( 'arilewp_theme_info_content' );
				if ( ! empty( $arilewp_theme_info_content_control ) ) {
					$arilewp_theme_info_content_control->default = json_encode( array(
						array(
						'icon_value' => 'fa fa-user-o',
						'title'      => esc_html__( 'Trusted Services', 'arilewp' ),
						'text'       => esc_html__( 'We are trusted our customers', 'arilewp' ),
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b21',
						),
						array(
						'icon_value' => 'fa fa-headphones',
						'title'      => esc_html__( '24/7 Support', 'arilewp' ),
						'text'       => '014 1547 925 - 123 4567 890',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b22',
						),
						array(
						'icon_value' => 'fa fa-trophy',
						'title'      => esc_html__( 'Well Experienced', 'arilewp' ),
						'text'       => esc_html__( '18 years of experience', 'arilewp' ),
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b23',
						),
						
					) );

				}
	    }
add_action( 'customize_register', 'arilewp_theme_info_default_content' );
endif;



/* Service content  */
if ( ! function_exists( 'arilewp_service_default_content' ) ) :		
    function arilewp_service_default_content( $wp_customize ){
			$arilewp_service_content_control = $wp_customize->get_setting( 'arilewp_service_content' );
				if ( ! empty( $arilewp_service_content_control ) ) {
					$arilewp_service_content_control->default = json_encode( array(
						array(
						'icon_value' => 'fa-laptop',
						'title'      => esc_html__( 'Pixel Perfect Design', 'arilewp' ),
						'text'       => 'Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.',
						'button_text'      => __('Read More','arilewp'),
						'choice'    => 'customizer_repeater_icon',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b15',
						),
						array(
						'icon_value' => 'fa fa-opencart',
						'title'      => esc_html__( 'WooCommerce Ready', 'arilewp' ),
						'text'       => 'Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.',
						'button_text'      => __('Read More','arilewp'),
						'choice'    => 'customizer_repeater_icon',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b16',
						),
						array(
						'icon_value' => 'fa fa-users',
						'title'      => esc_html__( 'Satisfied Clients', 'arilewp' ),
						'text'       => 'Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.',
						'button_text'      => __('Read More','arilewp'),
						'choice'    => 'customizer_repeater_icon',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b17',
						),
						
					) );

				}
	    }
add_action( 'customize_register', 'arilewp_service_default_content' );
endif;

		
if ( ! function_exists( 'arilewp_funfact_default_content' ) ) :		
	/* Funfact content  */	
    function arilewp_funfact_default_content( $wp_customize ){	
		$arilewp_funfact_content_control = $wp_customize->get_setting( 'arilewp_funfact_content' );
					if ( ! empty( $arilewp_funfact_content_control ) ) {
						$arilewp_funfact_content_control->default = json_encode( array(
							array(
							'icon_value' => 'fa fa-coffee theme-funfact-icon',
							'title'      => esc_html__( 'Coffee Cups', 'arilewp' ),
							'text'       => '507',
							'id'         => 'customizer_repeater_56d7ea7f40b20',
							),
							array(
							'icon_value' => 'fa fa-briefcase theme-funfact-icon',
							'title'      => esc_html__( 'Projects', 'arilewp' ),
							'text'       => '175',
							'id'         => 'customizer_repeater_56d7ea7f40b24',
							),
							array(
							'icon_value' => 'fa fa-line-chart theme-funfact-icon',
							'title'      => esc_html__( 'Business Growth', 'arilewp' ),
							'text'       => '98%',
							'id'         => 'customizer_repeater_56d7ea7f40b21',
							),
							
							array(
							'icon_value' => 'fa fa-smile-o theme-funfact-icon',
							'title'      => esc_html__( 'Cups of Coffee', 'arilewp' ),
							'text'       => '1350',
							'id'         => 'customizer_repeater_56d7ea7f40b22',
							),
							
						) );

					}
		
		}	
add_action( 'customize_register', 'arilewp_funfact_default_content' );
endif;

		

if ( ! function_exists( 'arilewp_testimonial_default_content' ) ) :		
	/* Testimonial content  */
	function arilewp_testimonial_default_content( $wp_customize ){

			$arilewp_testimonial_content_control = $wp_customize->get_setting( 'arilewp_testimonial_content' );
				if ( ! empty( $arilewp_testimonial_content_control ) ) 
				{
					$arilewp_testimonial_content_control->default = json_encode( array(
						array(
						'title'      => 'Olivia Kevinson',
						'text'       => '"You guys are legendary! You guys are great and having amazing support & service. I couldn’t ask for any better. Thank you!"',
						'designation' => __('Founder','arilewp'),
						'link'       => '#',
						'image_url'  => get_template_directory_uri().'/assets/img/testimonial/theme-testi1.jpg',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b30',
						
						),
						array(
						'title'      => 'Mitchell Harris',
						'text'       => '"You guys are legendary! You guys are great and having amazing support & service. I couldn’t ask for any better. Thank you!"',
						'designation' => __('Financer','arilewp'),
						'link'       => '#',
						'image_url'  => get_template_directory_uri().'/assets/img/testimonial/theme-testi2.jpg',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b31',
						),
						array(
						'title'      => 'Julia Cloe',
						'text'       => '"You guys are legendary! You guys are great and having amazing support & service. I couldn’t ask for any better. Thank you!"',
						'designation' => __('Sales Manager','arilewp'),
						'link'       => '#',
						'image_url'  => get_template_directory_uri().'/assets/img/testimonial/theme-testi3.jpg',
						'id'         => 'customizer_repeater_56d7ea7f40b32',
						'open_new_tab' => 'no',
						),
						
					) );
				}
        }
add_action( 'customize_register', 'arilewp_testimonial_default_content' );
endif;
		
		
if ( ! function_exists( 'arilewp_team_default_content' ) ) :
		/* Team content  */
	function arilewp_team_default_content( $wp_customize ){
				$arilewp_team_content_control = $wp_customize->get_setting( 'arilewp_team_content' );
				if ( ! empty( $arilewp_team_content_control ) ) 
				{
				$arilewp_team_content_control->default = json_encode( array(
					array(
					'image_url'  => get_template_directory_uri().'/assets/img/team/theme-team1.jpg',
					'title'           => 'Mariana Huffington',
					'subtitle'        => esc_html__( 'Founder', 'arilewp' ),
					'open_new_tab' => 'no',
					'id'              => 'customizer_repeater_56d7ea7f40c35',
					'social_repeater' => json_encode(
						array(
							array(
								'id'   => 'customizer-repeater-social-repeater-57fb908674e05',
								'link' => 'facebook.com',
								'icon' => 'fa-facebook',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-57fb9148530dc',
								'link' => 'twitter.com',
								'icon' => 'fa-twitter',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-57fb9150e1e78',
								'link' => 'linkedin.com',
								'icon' => 'fa-linkedin',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-57fb9150e1e78',
								'link' => 'skype.com',
								'icon' => 'fa-skype',
							),
						)
					),
				),
				array(
					'image_url'  => get_template_directory_uri().'/assets/img/team/theme-team2.jpg',
					'title'           => 'Robert Starford',
					'subtitle'        => esc_html__( 'Developer', 'arilewp' ),
					'open_new_tab' => 'no',
					'id'              => 'customizer_repeater_56d7ea7f40c36',
					'social_repeater' => json_encode(
						array(
							array(
								'id'   => 'customizer-repeater-social-repeater-57fb9155a1067',
								'link' => 'facebook.com',
								'icon' => 'fa-facebook',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-57fb9160ab690',
								'link' => 'twitter.com',
								'icon' => 'fa-twitter',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-57fb916ddffj9',
								'link' => 'linkedin.com',
								'icon' => 'fa-linkedin',
							),
						    array(
								'id'   => 'customizer-repeater-social-repeater-57fb9150e1e78',
								'link' => 'skype.com',
								'icon' => 'fa-skype',
							),
						)
					),
				),
				array(
					'image_url'  => get_template_directory_uri().'/assets/img/team/theme-team3.jpg',
					'title'           => 'Olivia Kevinson',
					'subtitle'        => esc_html__( 'Manager', 'arilewp' ),
					'open_new_tab' => 'no',
					'id'              => 'customizer_repeater_56d7ea7f40c37',
					'social_repeater' => json_encode(
						array(
							array(
								'id'   => 'customizer-repeater-social-repeater-57fb917e4c64t',
								'link' => 'facebook.com',
								'icon' => 'fa-facebook',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-57fb91830828p',
								'link' => 'twitter.com',
								'icon' => 'fa-twitter',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-57fb918d65f53',
								'link' => 'linkedin.com',
								'icon' => 'fa-linkedin',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-57fb9150e1e78',
								'link' => 'skype.com',
								'icon' => 'fa-skype',
							),
						)
					),
				),
				
				) );

			}
        }
add_action( 'customize_register', 'arilewp_team_default_content' );
endif;		


if ( ! function_exists( 'arilewp_client_default_content' ) ) :		
		/* Clients content  */
		function arilewp_client_default_content( $wp_customize ){
				$arilewp_client_content_control = $wp_customize->get_setting( 'arilewp_clients_content' );
				if ( ! empty( $arilewp_client_content_control ) ) 
				{
				$arilewp_client_content_control->default = json_encode( array(
					array(
					'link'       => '#',
					'image_url'  => get_template_directory_uri().'/assets/img/sponsors/theme-client1.png',
					'open_new_tab' => 'no',
					'id'         => 'customizer_repeater_56d7ea7f40b71',
					),
					array(
					'link'       => '#',
					'image_url'  => get_template_directory_uri().'/assets/img/sponsors/theme-client2.png',
					'open_new_tab' => 'no',
					'id'         => 'customizer_repeater_56d7ea7f40b72',
					),
					array(
					'link'       => '#',
					'image_url'  => get_template_directory_uri().'/assets/img/sponsors/theme-client3.png',
					'open_new_tab' => 'no',
					'id'         => 'customizer_repeater_56d7ea7f40b73',
					),
					array(
					'link'       => '#',
					'image_url'  => get_template_directory_uri().'/assets/img/sponsors/theme-client4.png',
					'open_new_tab' => 'no',
					'id'         => 'customizer_repeater_56d7ea7f40b74',
					),
					array(
					'link'       => '#',
					'image_url'  => get_template_directory_uri().'/assets/img/sponsors/theme-client5.png',
					'open_new_tab' => 'no',
					'id'         => 'customizer_repeater_56d7ea7f40b75',
					),
					array(		
					'link'       => '#',
					'image_url'  => get_template_directory_uri().'/assets/img/sponsors/theme-client6.png',
					'open_new_tab' => 'no',
					'id'         => 'customizer_repeater_56d7ea7f40b76',
					),
					array(		
					'link'       => '#',
					'image_url'  => get_template_directory_uri().'/assets/img/sponsors/theme-client7.png',
					'open_new_tab' => 'no',
					'id'         => 'customizer_repeater_56d7ea7f40b76',
					),
					array(		
					'link'       => '#',
					'image_url'  => get_template_directory_uri().'/assets/img/sponsors/theme-client8.png',
					'open_new_tab' => 'no',
					'id'         => 'customizer_repeater_56d7ea7f40b76',
					),
					
				) );

			}
        }
add_action( 'customize_register', 'arilewp_client_default_content' );
endif;

/* Contact info content  */
if ( ! function_exists( 'arilewp_theme_contact_info_default_content' ) ) :		
    function arilewp_theme_contact_info_default_content( $wp_customize ){
			$arilewp_theme_contact_info_content_control = $wp_customize->get_setting( 'arilewp_contact_template_info_content' );
				if ( ! empty( $arilewp_theme_contact_info_content_control ) ) {
					$arilewp_theme_contact_info_content_control->default = json_encode( array(
						array(
						'icon_value' => 'fa fa-phone',
						'title'      => esc_html__( 'Phone', 'arilewp' ),
						'text'       => esc_html__( '+14 1-800-1234-567', 'arilewp' ),
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b86',
						),
						array(
						'icon_value' => 'fa fa-street-view',
						'title'      => esc_html__( 'Address', 'arilewp' ),
						'text'       => '2130 Fulton Street, San Francisco, USA',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b87',
						),
						array(
						'icon_value' => 'fa fa-envelope-open-o',
						'title'      => esc_html__( 'Email', 'arilewp' ),
						'text'       => esc_html__( '', 'arilewp' ),
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b88',
						),
						
					) );

				}
	    }
add_action( 'customize_register', 'arilewp_theme_contact_info_default_content' );
endif;