<?php
/**
 * Extend default customizer section.
 *
 * @package arilewp
 *
 * @see     WP_Customize_Section
 * @access  public
 */

require ARILEWP_PARENT_INC_DIR . '/customizer/webfont.php';
require ARILEWP_PARENT_INC_DIR . '/customizer/controls/code/arilewp-customize-typography-control.php';
require ARILEWP_PARENT_INC_DIR . '/customizer/controls/code/arilewp-customize-category-control.php';
require ARILEWP_PARENT_INC_DIR . '/customizer/controls/code/arilewp-customize-taxonomy-control.php';
$repeater_control = trailingslashit( get_template_directory() ) . '/inc/customizer/customizer-repeater/functions.php';
if ( file_exists( $repeater_control ) ) { require_once( $repeater_control ); }
$page_editor_path = trailingslashit( ARILEWP_PARENT_INC_DIR ) . '/customizer/customizer-page-editor/customizer-page-editor.php';
if ( file_exists( $page_editor_path ) ) { require_once( $page_editor_path ); }
function arilewp_frontpage_sections_settings( $wp_customize ){
	
	$active_callback    	= isset( $array['active_callback'] ) ? $array['active_callback'] : null;
	
	$wp_customize->get_section( 'header_image' )->panel = 'arilewp_theme_settings';
	$wp_customize->get_section( 'header_image' )->title    = __( 'Page Header', 'arilewp' );
    $wp_customize->get_section( 'header_image' )->priority = 40;
	
	// Sticky Bar Logo
	$wp_customize->add_setting( 'arilewp_sticky_bar_logo', array(
			'sanitize_callback' => 'esc_url_raw',
		)
	);
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'arilewp_sticky_bar_logo',
     	array(
			'label'    => esc_html__( 'Set Sticky Bar Logo', 'arilewp' ),
			'description'    => esc_html__( 'You can Upload the Standrad size of logo (210px*39px)', 'arilewp' ),
			'section'  => 'arilewp_theme_menu_bar',
			'settings' => 'arilewp_sticky_bar_logo',
			'priority'        => 15,
		)
	));
	
	// Transparent Logo
	$wp_customize->add_setting( 'arilewp_transparent_header_logo', array(
			'sanitize_callback' => 'esc_url_raw',
		)
	);
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'arilewp_transparent_header_logo',
     	array(
			'label'       => esc_html__( 'Transparent Header Logo', 'arilewp' ),
			'description' => esc_html__( 'Only apply when transparent header option is enabled (210px*39px).', 'arilewp' ),
			'section'  => 'arilewp_theme_menu_bar',
			'settings' => 'arilewp_transparent_header_logo',
			'priority'        => 16,
		) 
		
	));

			
	/* Register frontpage panel */
	$wp_customize->add_panel( 'arilewp_frontpage_settings', array(
		'priority'       => 25,
		'capability'     => 'edit_theme_options',
		'title'      => __('Frontpage Sections', 'arilewp'),
	) );
	
	
	
    /* Site Top Header */
	$wp_customize->add_section( 'arilewp_theme_top_header_area' , array(
		'title'      => __('Site Top Header', 'arilewp'),
		'panel'  => 'arilewp_frontpage_settings',
		'priority'   => 1,
	) );
	
	
	    if ( class_exists( 'ArileWP_Repeater' ) ) {
			$wp_customize->add_setting( 'arilewp_top_header_info_content', array( ) );
			$wp_customize->add_control( new ArileWP_Repeater( 
			$wp_customize, 'arilewp_top_header_info_content', array(
				'label'                             => esc_html__( 'Info Items Content', 'arilewp' ),
				'section'                           => 'arilewp_theme_top_header_area',
				'add_field_label'                   => esc_html__( 'Add new info', 'arilewp' ),
				'item_name'                         => esc_html__( 'Info Item', 'arilewp' ),
				'customizer_repeater_text_control'  => true,
				'customizer_repeater_icon_control'  => true,
				'customizer_repeater_link_control'  => true,
                'customizer_repeater_checkbox_control' => true,
			    ) ) );
		}
	
	
	    if ( class_exists( 'ArileWP_Repeater' ) ) {
			$wp_customize->add_setting( 'arilewp_top_header_social_content', array( ) );
			$wp_customize->add_control( new ArileWP_Repeater( 
			$wp_customize, 'arilewp_top_header_social_content', array(
						'label'                            => esc_html__( 'Social Items Content', 'arilewp' ),
						'section'                          => 'arilewp_theme_top_header_area',
						'add_field_label'                  => esc_html__( 'Add new icon', 'arilewp' ),
						'item_name'                        => esc_html__( 'Social Icon', 'arilewp' ),
						'customizer_repeater_icon_control'  => true,
						'customizer_repeater_link_control' => true,
						'customizer_repeater_checkbox_control' => true,
					)
				)
			);
		}
	
	/* Slider */
	$wp_customize->add_section( 'arilewp_main_theme_slider' , array(
		'title'      => __('Main Slider', 'arilewp'),
		'panel'  => 'arilewp_frontpage_settings',
		'priority'   => 2,
   	) ); 
	
	    if ( class_exists( 'ArileWP_Repeater' ) ) {
			$wp_customize->add_setting( 'arilewp_main_slider_content', array( ) );
            $wp_customize->add_control( new ArileWP_Repeater( 
			$wp_customize, 'arilewp_main_slider_content', array(
				'label'                             => esc_html__( 'Slider Items Content', 'arilewp' ),
				'section'                           => 'arilewp_main_theme_slider',
				'add_field_label'                   => esc_html__( 'Add new slide', 'arilewp' ),
				'item_name'                         => esc_html__( 'Slide Item', 'arilewp' ),
				'customizer_repeater_slide_format' => true,
				'customizer_repeater_title_control' => true,
				'customizer_repeater_text_control'  => true,
				'customizer_repeater_button_text_control' => true,
				'customizer_repeater_link_control'  => true,
				'customizer_repeater_image_control' => true,
				'customizer_repeater_checkbox_control' => true,
				) ) );
		}
			
	/* Info Area */
	$wp_customize->add_section( 'arilewp_theme_info_area' , array(
		'title'      => __('Theme Info Area', 'arilewp'),
		'panel'  => 'arilewp_frontpage_settings',
		'priority'   => 3,
   	) ); 		
			
        if ( class_exists( 'ArileWP_Repeater' ) ) {
			$wp_customize->add_setting( 'arilewp_theme_info_content', array( ) );
            $wp_customize->add_control( new ArileWP_Repeater( 
			$wp_customize, 'arilewp_theme_info_content', array(
				'label'                             => esc_html__( 'Info Items Content', 'arilewp' ),
				'section'                           => 'arilewp_theme_info_area',
				'add_field_label'                   => esc_html__( 'Add new info', 'arilewp' ),
				'item_name'                         => esc_html__( 'Info Item', 'arilewp' ),
				'customizer_repeater_title_control' => true,
				'customizer_repeater_text_control'  => true,
				'customizer_repeater_icon_control'  => true,
				'customizer_repeater_link_control'  => true,
                'customizer_repeater_checkbox_control' => true,
				) ) );
		}
		
			
	/* Service */
	$wp_customize->add_section( 'arilewp_theme_service' , array(
		'title'      => __('Service', 'arilewp'),
		'panel'  => 'arilewp_frontpage_settings',
		'priority'   => 4,
	) ); 
	
	
	    if ( class_exists( 'ArileWP_Repeater' ) ) {
			$wp_customize->add_setting( 'arilewp_service_content', array( ) );
            $wp_customize->add_control( new ArileWP_Repeater( 
			$wp_customize, 'arilewp_service_content', array(
				'label'                             => esc_html__( 'Service Items content', 'arilewp' ),
				'section'                           => 'arilewp_theme_service',
				'priority'                          => 10,
				'add_field_label'                   => esc_html__( 'Add new Service', 'arilewp' ),
				'item_name'                         => esc_html__( 'Service Item', 'arilewp' ),
				'customizer_repeater_icon_control'  => true,
				'customizer_repeater_title_control' => true,
				'customizer_repeater_text_control'  => true,
				'customizer_repeater_link_control'  => true,
				'customizer_repeater_checkbox_control' => true,
				'customizer_repeater_button_text_control' => true,
				'customizer_repeater_image_control' => true,
				) ) );
		}
		
		
			if ( class_exists( 'ArileWP_Page_Editor' ) ) {				
				$default = '';
				$wp_customize->add_setting(
					'arilewp_service_area_before_content', array(
						'default'           => $default,
					)
				);

				$wp_customize->add_control(
					new ArileWP_Page_Editor(
						$wp_customize, 'arilewp_service_area_before_content', array(
							'label'    => esc_html__( 'Before Content', 'arilewp' ),
							'section'  => 'arilewp_theme_service',
							'priority' => 15,
							'needsync' => true,
						)
					)
				);
			}
			
			if ( class_exists( 'ArileWP_Page_Editor' ) ) {				
				$default = '';
				$wp_customize->add_setting(
					'arilewp_service_area_after_content', array(
						'default'           => $default,
					)
				);

				$wp_customize->add_control(
					new ArileWP_Page_Editor(
						$wp_customize, 'arilewp_service_area_after_content', array(
							'label'    => esc_html__( 'After Content', 'arilewp' ),
							'section'  => 'arilewp_theme_service',
							'priority' => 20,
							'needsync' => true,
						)
					)
				);
			}
	
	
	
    /* Project */
	$wp_customize->add_section( 'arilewp_theme_project' , array(
		'title'      => __('Project', 'arilewp'),
		'panel'  => 'arilewp_frontpage_settings',
		'priority'   => 5,
	) ); 
	
	        $wp_customize->add_setting( 'arilewp_theme_project_category', array( 'default' => 2),
				array('capability'     => 'edit_theme_options', ) );	
				$wp_customize->add_control( new ArileWP_Customize_Taxonomy_Control( $wp_customize, 'arilewp_theme_project_category', array(
				'label'   => __('Choose Project Category for Layout One','arilewp'),
				'section' => 'arilewp_theme_project',
				'settings'   => 'arilewp_theme_project_category',
				'priority' => 22,
				'sanitize_callback' => 'sanitize_text_field',
			) ) );
	
	        if ( class_exists( 'ArileWP_Page_Editor' ) ) {				
				$default = '';
				$wp_customize->add_setting(
					'arilewp_project_area_before_content', array(
						'default'           => $default,
					)
				);

				$wp_customize->add_control(
					new ArileWP_Page_Editor(
						$wp_customize, 'arilewp_project_area_before_content', array(
							'label'    => esc_html__( 'Before Content', 'arilewp' ),
							'section'  => 'arilewp_theme_project',
							'priority' => 65,
							'needsync' => true,
						)
					)
				);
			}
			
			if ( class_exists( 'ArileWP_Page_Editor' ) ) {				
				$default = '';
				$wp_customize->add_setting(
					'arilewp_project_area_after_content', array(
						'default'           => $default,
					)
				);

				$wp_customize->add_control(
					new ArileWP_Page_Editor(
						$wp_customize, 'arilewp_project_area_after_content', array(
							'label'    => esc_html__( 'After Content', 'arilewp' ),
							'section'  => 'arilewp_theme_project',
							'priority' => 70,
							'needsync' => true,
						)
					)
				);
			}
	        		
		// Projects
		class WP_Add_Project_Customize_Control extends WP_Customize_Control {
			public $type = 'new_menu';
			/**
			* Render the control's content.
			*/
			public function render_content() {
			?>
			<a href="<?php bloginfo ( 'url' );?>/wp-admin/edit.php?post_type=arilewp_portfolio" class="button"  target="_blank"><?php _e( 'Click to Add Project', 'arilewp' ); ?></a>
			<?php
			}
	    }
		$wp_customize->add_setting( 'arilewp_add_project_button',
        array( 'capability'     => 'edit_theme_options', 
			'sanitize_callback' => 'sanitize_text_field',
		  )	);
		$wp_customize->add_control( new WP_Add_Project_Customize_Control( $wp_customize, 'arilewp_add_project_button', array(	
			'section' => 'arilewp_theme_project',
			'priority'   => 25, 
		)));

		/* Funfact */
		$wp_customize->add_section( 'arilewp_theme_funfact' , array(
			'title'      => __('Funfact', 'arilewp'),
			'panel'  => 'arilewp_frontpage_settings',
			'priority'   => 6,
		) ); 
	
	
	    if ( class_exists( 'ArileWP_Repeater' ) ) {
			$wp_customize->add_setting( 'arilewp_funfact_content', array( ) );
            $wp_customize->add_control( new ArileWP_Repeater( 
			$wp_customize, 'arilewp_funfact_content', array(
				'label'                             => esc_html__( 'Funfact Items content', 'arilewp' ),
				'section'                           => 'arilewp_theme_funfact',
				'priority'                          => 8,
				'add_field_label'                   => esc_html__( 'Add new funfact', 'arilewp' ),
				'item_name'                         => esc_html__( 'Funfact Item', 'arilewp' ),
				'customizer_repeater_icon_control'  => true,
				'customizer_repeater_title_control' => true,
				'customizer_repeater_text_control'  => true,
				) ) );
		}
			
			if ( class_exists( 'ArileWP_Page_Editor' ) ) {				
				$default = '';
				$wp_customize->add_setting(
					'arilewp_funfact_area_before_content', array(
						'default'           => $default,
					)
				);

				$wp_customize->add_control(
					new ArileWP_Page_Editor(
						$wp_customize, 'arilewp_funfact_area_before_content', array(
							'label'    => esc_html__( 'Before Content', 'arilewp' ),
							'section'  => 'arilewp_theme_funfact',
							'priority' => 30,
							'needsync' => true,
						)
					)
				);
			}
			
			if ( class_exists( 'ArileWP_Page_Editor' ) ) {				
				$default = '';
				$wp_customize->add_setting(
					'arilewp_funfact_area_after_content', array(
						'default'           => $default,
					)
				);

				$wp_customize->add_control(
					new ArileWP_Page_Editor(
						$wp_customize, 'arilewp_funfact_area_after_content', array(
							'label'    => esc_html__( 'After Content', 'arilewp' ),
							'section'  => 'arilewp_theme_funfact',
							'priority' => 35,
							'needsync' => true,
						)
					)
				);
			}

            //Funfact Background Image
			$wp_customize->add_setting( 'arilewp_funfact_background_image', array(
			  'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'arilewp_funfact_background_image', array(
			  'label'    => esc_html__( 'Background Image', 'arilewp' ),
			  'section'  => 'arilewp_theme_funfact',
			  'settings' => 'arilewp_funfact_background_image',
			  'priority'        => 25,
			) ) );			
	
   /* Testimonial */
	$wp_customize->add_section( 'arilewp_theme_testimonial' , array(
		'title'      => __('Testimonial', 'arilewp'),
		'panel'  => 'arilewp_frontpage_settings',
		'priority'   => 7,
	) ); 
	
	
	    if ( class_exists( 'ArileWP_Repeater' ) ) {
			$wp_customize->add_setting( 'arilewp_testimonial_content', array( ) );
            $wp_customize->add_control( new ArileWP_Repeater( 
			$wp_customize, 'arilewp_testimonial_content', array(
				'label'                             => esc_html__( 'Testimonial Items content', 'arilewp' ),
				'section'                           => 'arilewp_theme_testimonial',
				'add_field_label'                   => esc_html__( 'Add new Testimonial', 'arilewp' ),
				'item_name'                         => esc_html__( 'Testimonial Item', 'arilewp' ),
				'customizer_repeater_title_control' => true,
				'customizer_repeater_text_control'  => true,
				'customizer_repeater_link_control'  => true,
				'customizer_repeater_checkbox_control' => true,
				'customizer_repeater_image_control' => true,
				'customizer_repeater_designation_control' => true,
				) ) );
		}
	
	        if ( class_exists( 'ArileWP_Page_Editor' ) ) {				
				$default = '';
				$wp_customize->add_setting(
					'arilewp_testimonial_area_before_content', array(
						'default'           => $default,
					)
				);

				$wp_customize->add_control(
					new ArileWP_Page_Editor(
						$wp_customize, 'arilewp_testimonial_area_before_content', array(
							'label'    => esc_html__( 'Before Content', 'arilewp' ),
							'section'  => 'arilewp_theme_testimonial',
							'priority' => 40,
							'needsync' => true,
						)
					)
				);
			}
			
			if ( class_exists( 'ArileWP_Page_Editor' ) ) {				
				$default = '';
				$wp_customize->add_setting(
					'arilewp_testimonial_area_after_content', array(
						'default'           => $default,
					)
				);

				$wp_customize->add_control(
					new ArileWP_Page_Editor(
						$wp_customize, 'arilewp_testimonial_area_after_content', array(
							'label'    => esc_html__( 'After Content', 'arilewp' ),
							'section'  => 'arilewp_theme_testimonial',
							'priority' => 45,
							'needsync' => true,
						)
					)
				);
			}
			
		    //Testimonial Background Image
			$wp_customize->add_setting( 'arilewp_testomonial_background_image', array(
			  'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'arilewp_testomonial_background_image', array(
			  'label'    => esc_html__( 'Background Image', 'arilewp' ),
			  'section'  => 'arilewp_theme_testimonial',
			  'settings' => 'arilewp_testomonial_background_image',
			  'priority'        => 33,
			) ) );
	
	
	
	/* WooShop */
	$wp_customize->add_section( 'arilewp_theme_wooshop' , array(
		'title'      => __('WooCommerce Shop', 'arilewp'),
		'panel'  => 'arilewp_frontpage_settings',
		'priority'   => 8,
	) ); 
	
	        if ( class_exists( 'ArileWP_Page_Editor' ) ) {				
				$default = '';
				$wp_customize->add_setting(
					'arilewp_wooshop_area_before_content', array(
						'default'           => $default,
					)
				);

				$wp_customize->add_control(
					new ArileWP_Page_Editor(
						$wp_customize, 'arilewp_wooshop_area_before_content', array(
							'label'    => esc_html__( 'Before Content', 'arilewp' ),
							'section'  => 'arilewp_theme_wooshop',
							'priority' => 40,
							'needsync' => true,
						)
					)
				);
			}
			
			if ( class_exists( 'ArileWP_Page_Editor' ) ) {				
				$default = '';
				$wp_customize->add_setting(
					'arilewp_wooshop_area_after_content', array(
						'default'           => $default,
					)
				);

				$wp_customize->add_control(
					new ArileWP_Page_Editor(
						$wp_customize, 'arilewp_wooshop_area_after_content', array(
							'label'    => esc_html__( 'After Content', 'arilewp' ),
							'section'  => 'arilewp_theme_wooshop',
							'priority' => 45,
							'needsync' => true,
						)
					)
				);
			}
	
	
	
		
	/* Cta */
	$wp_customize->add_section( 'arilewp_theme_cta' , array(
		'title'      => __('Call to action', 'arilewp'),
		'panel'  => 'arilewp_frontpage_settings',
		'priority'   => 9,
	) ); 
	
	        //Cta Background Image
			$wp_customize->add_setting( 'arilewp_cta_background_image', array(
			  'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'arilewp_cta_background_image', array(
			  'label'    => esc_html__( 'Background Image', 'arilewp' ),
			  'section'  => 'arilewp_theme_cta',
			  'settings' => 'arilewp_cta_background_image',
			  'priority'        => 17,
			) ) );
	
	
	        if ( class_exists( 'ArileWP_Page_Editor' ) ) {				
				$default = '';
				$wp_customize->add_setting(
					'arilewp_cta_area_before_content', array(
						'default'           => $default,
					)
				);

				$wp_customize->add_control(
					new ArileWP_Page_Editor(
						$wp_customize, 'arilewp_cta_area_before_content', array(
							'label'    => esc_html__( 'Before Content', 'arilewp' ),
							'section'  => 'arilewp_theme_cta',
							'priority' => 40,
							'needsync' => true,
						)
					)
				);
			}
			
			if ( class_exists( 'ArileWP_Page_Editor' ) ) {				
				$default = '';
				$wp_customize->add_setting(
					'arilewp_cta_area_after_content', array(
						'default'           => $default,
					)
				);

				$wp_customize->add_control(
					new ArileWP_Page_Editor(
						$wp_customize, 'arilewp_cta_area_after_content', array(
							'label'    => esc_html__( 'After Content', 'arilewp' ),
							'section'  => 'arilewp_theme_cta',
							'priority' => 45,
							'needsync' => true,
						)
					)
				);
			}
	
    /* Team */
	$wp_customize->add_section( 'arilewp_theme_team' , array(
		'title'      => __('Team Members', 'arilewp'),
		'panel'  => 'arilewp_frontpage_settings',
		'priority'   => 10,
	) ); 
	
	
	    if ( class_exists( 'ArileWP_Repeater' ) ) {
			
			$wp_customize->add_setting( 'arilewp_team_content', array( ) );
			$wp_customize->add_control( new ArileWP_Repeater(
			$wp_customize, 'arilewp_team_content', array(
						'label'                            => esc_html__( 'Team Items content', 'arilewp' ),
						'section'                          => 'arilewp_theme_team',
						'priority'                         => 9,
						'add_field_label'                  => esc_html__( 'Add new Member', 'arilewp' ),
						'item_name'                        => esc_html__( 'Team Member', 'arilewp' ),
						'customizer_repeater_image_control' => true,
						'customizer_repeater_title_control' => true,
						'customizer_repeater_subtitle_control' => true,
						'customizer_repeater_link_control' => true,
						'customizer_repeater_checkbox_control' => true,
						'customizer_repeater_repeater_control' => true,
						
					)
				)
			);
		}
		
		
		    if ( class_exists( 'ArileWP_Page_Editor' ) ) {				
				$default = '';
				$wp_customize->add_setting(
					'arilewp_team_area_before_content', array(
						'default'           => $default,
					)
				);

				$wp_customize->add_control(
					new ArileWP_Page_Editor(
						$wp_customize, 'arilewp_team_area_before_content', array(
							'label'    => esc_html__( 'Before Content', 'arilewp' ),
							'section'  => 'arilewp_theme_team',
							'priority' => 40,
							'needsync' => true,
						)
					)
				);
			}
			
			if ( class_exists( 'ArileWP_Page_Editor' ) ) {				
				$default = '';
				$wp_customize->add_setting(
					'arilewp_team_area_after_content', array(
						'default'           => $default,
					)
				);

				$wp_customize->add_control(
					new ArileWP_Page_Editor(
						$wp_customize, 'arilewp_team_area_after_content', array(
							'label'    => esc_html__( 'After Content', 'arilewp' ),
							'section'  => 'arilewp_theme_team',
							'priority' => 45,
							'needsync' => true,
						)
					)
				);
			}
		
	
    /* Blog */
	$wp_customize->add_section( 'arilewp_theme_blog' , array(
		'title'      => __('Blog', 'arilewp'),
		'panel'  => 'arilewp_frontpage_settings',
		'priority'   => 11,
	) ); 
	
	
	        $wp_customize->add_setting( 'arilewp_theme_blog_category',array('capability'     => 'edit_theme_options',) );	
			$wp_customize->add_control( new ArileWP_Customize_Category_Control( $wp_customize, 'arilewp_theme_blog_category', array(
				'label'   => __('Blog Category','arilewp'),
				'section' => 'arilewp_theme_blog',
				'settings'   => 'arilewp_theme_blog_category',
				'sanitize_callback' => 'sanitize_text_field',
			) ) );
			
			
		    $wp_customize->add_setting( 'arilewp_theme_masonry_category',array('capability'     => 'edit_theme_options',) );	
			$wp_customize->add_control( new ArileWP_Customize_Category_Control( $wp_customize, 'arilewp_theme_masonry_category', array(
				'label'   => __('Select Blog Category for Masonry Templates','arilewp'),
				'section' => 'arilewp_masonry_view_blog',
				'settings'   => 'arilewp_theme_masonry_category',
				'sanitize_callback' => 'sanitize_text_field',
			) ) );
	
	
	        if ( class_exists( 'ArileWP_Page_Editor' ) ) {				
				$default = '';
				$wp_customize->add_setting(
					'arilewp_blog_area_before_content', array(
						'default'           => $default,
					)
				);

				$wp_customize->add_control(
					new ArileWP_Page_Editor(
						$wp_customize, 'arilewp_blog_area_before_content', array(
							'label'    => esc_html__( 'Before Content', 'arilewp' ),
							'section'  => 'arilewp_theme_blog',
							'priority' => 40,
							'needsync' => true,
						)
					)
				);
			}
			
			if ( class_exists( 'ArileWP_Page_Editor' ) ) {				
				$default = '';
				$wp_customize->add_setting(
					'arilewp_blog_area_after_content', array(
						'default'           => $default,
					)
				);

				$wp_customize->add_control(
					new ArileWP_Page_Editor(
						$wp_customize, 'arilewp_blog_area_after_content', array(
							'label'    => esc_html__( 'After Content', 'arilewp' ),
							'section'  => 'arilewp_theme_blog',
							'priority' => 45,
							'needsync' => true,
						)
					)
				);
			}
			
	
	
	/* Client */
	$wp_customize->add_section( 'arilewp_theme_client' , array(
		'title'      => __('Client', 'arilewp'),
		'panel'  => 'arilewp_frontpage_settings',
		'priority'   => 12,
	) ); 
	
	
	   	if ( class_exists( 'ArileWP_Repeater' ) ) {
			
			$wp_customize->add_setting( 'arilewp_clients_content', array( ) );
			$wp_customize->add_control(new ArileWP_Repeater(
			$wp_customize, 'arilewp_clients_content', array(
						'label'                            => esc_html__( 'Clients Content', 'arilewp' ),
						'section'                          => 'arilewp_theme_client',
						'add_field_label'                  => esc_html__( 'Add new client', 'arilewp' ),
						'item_name'                        => esc_html__( 'Client', 'arilewp' ),
						'customizer_repeater_image_control' => true,
						'customizer_repeater_link_control' => true,
						'customizer_repeater_checkbox_control' => true,
					)
				)
			);
		}
		
		    if ( class_exists( 'ArileWP_Page_Editor' ) ) {				
				$default = '';
				$wp_customize->add_setting(
					'arilewp_client_area_before_content', array(
						'default'           => $default,
					)
				);

				$wp_customize->add_control(
					new ArileWP_Page_Editor(
						$wp_customize, 'arilewp_client_area_before_content', array(
							'label'    => esc_html__( 'Before Content', 'arilewp' ),
							'section'  => 'arilewp_theme_client',
							'priority' => 40,
							'needsync' => true,
						)
					)
				);
			}
			
			if ( class_exists( 'ArileWP_Page_Editor' ) ) {				
				$default = '';
				$wp_customize->add_setting(
					'arilewp_client_area_after_content', array(
						'default'           => $default,
					)
				);

				$wp_customize->add_control(
					new ArileWP_Page_Editor(
						$wp_customize, 'arilewp_client_area_after_content', array(
							'label'    => esc_html__( 'After Content', 'arilewp' ),
							'section'  => 'arilewp_theme_client',
							'priority' => 45,
							'needsync' => true,
						)
					)
				);
			}
			
			
			        if ( class_exists( 'ArileWP_Repeater' ) ) {
						$wp_customize->add_setting( 'arilewp_contact_template_info_content', array( ) );
						$wp_customize->add_control( new ArileWP_Repeater( 
						$wp_customize, 'arilewp_contact_template_info_content', array(
							'label'                             => esc_html__( 'Contact Info Content', 'arilewp' ),
							'section'                           => 'arilewp_contact_template',
							'add_field_label'                   => esc_html__( 'Add new info', 'arilewp' ),
							'item_name'                         => esc_html__( 'Contact Info', 'arilewp' ),
							'customizer_repeater_title_control' => true,
							'customizer_repeater_text_control'  => true,
							'customizer_repeater_icon_control'  => true,
							'customizer_repeater_link_control'  => true,
							'customizer_repeater_checkbox_control' => true,
							) ) );
					}

                    if ( class_exists( 'ArileWP_Repeater' ) ) {
                        $wp_customize->add_setting( 'arilewp_contact_about_desc', array( ) );
                        $wp_customize->add_control( new ArileWP_Repeater(
                            $wp_customize, 'arilewp_contact_about_desc', array(
                            'label'                             => esc_html__( 'Accordion Section', 'arilewp' ),
                            'section'                           => 'arilewp_contact_template',
                            'add_field_label'                   => esc_html__( 'Add new info', 'arilewp' ),
                            'item_name'                         => esc_html__( 'Accordion Info', 'arilewp' ),
                            'customizer_repeater_title_control' => true,
                            'customizer_repeater_text_control'  => true,
                            'customizer_repeater_icon_control'  => false,
                            'customizer_repeater_link_control'  => false,
                            'customizer_repeater_checkbox_control' => false,
                        ) ) );
                    }

//                    $selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
//                    $wp_customize->add_setting( 'arilewp_contact_about_desc',
//                    array(
//                            'default' => 'Add About Us Description',
//                            'sanitize_callback' => 'sanitize_text_field',
//                            'transport' => $selective_refresh,
//                    ));
//					$wp_customize->add_control( 'arilewp_contact_about_desc',
//                    array(
//                            'label'     => esc_html__('Section Description', 'arilewp' ),
//                            'section'   => 'arilewp_contact_template',
//                            'priority'  => 53,
//                            'type'      => 'textarea',
//                    ));
					
		$wp_customize->add_setting( 'arilewp_typography_base_font_family', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'Open Sans',
		) );
		$wp_customize->add_control( new ArileWP_Customizer_Typography_Control( $wp_customize,'arilewp_typography_base_font_family', array(
			'label' 			=> esc_html__( 'Font Family', 'arilewp' ),
			'section' 			=> 'arilewp_base_typography',
			'settings' 			=> 'arilewp_typography_base_font_family',
			'priority' 			=> 10,
			'type' 				=> 'select',
			'active_callback' 	=> $active_callback,
		) ) );	
								
					
		$wp_customize->add_setting( 'arilewp_typography_menu_bar_font_family', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'Open Sans',
		) );
		$wp_customize->add_control( new ArileWP_Customizer_Typography_Control( $wp_customize,'arilewp_typography_menu_bar_font_family', array(
			'label' 			=> esc_html__( 'Font Family', 'arilewp' ),
			'section' 			=> 'arilewp_menu_bar_typography',
			'settings' 			=> 'arilewp_typography_menu_bar_font_family',
			'priority' 			=> 10,
			'type' 				=> 'select',
			'active_callback' 	=> $active_callback,
		) ) );		


        $wp_customize->add_setting( 'arilewp_typography_dropdown_bar_font_family', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'Open Sans',
		) );
		$wp_customize->add_control( new ArileWP_Customizer_Typography_Control( $wp_customize,'arilewp_typography_dropdown_bar_font_family', array(
			'label' 			=> esc_html__( 'Font Family', 'arilewp' ),
			'section' 			=> 'arilewp_menu_bar_typography',
			'settings' 			=> 'arilewp_typography_dropdown_bar_font_family',
			'priority' 			=> 65,
			'type' 				=> 'select',
			'active_callback' 	=> $active_callback,
		) ) );			
					
		$wp_customize->add_setting( 'arilewp_typography_h1_font_family', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'Source Sans Pro',
		) );
		$wp_customize->add_control( new ArileWP_Customizer_Typography_Control( $wp_customize,'arilewp_typography_h1_font_family', array(
			'label' 			=> esc_html__( 'Font Family', 'arilewp' ),
			'section' 			=> 'arilewp_headings1_typography',
			'settings' 			=> 'arilewp_typography_h1_font_family',
			'priority' 			=> 10,
			'type' 				=> 'select',
			'active_callback' 	=> $active_callback,
		) ) );

        $wp_customize->add_setting( 'arilewp_typography_h2_font_family', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'Source Sans Pro',
		) );
		$wp_customize->add_control( new ArileWP_Customizer_Typography_Control( $wp_customize,'arilewp_typography_h2_font_family', array(
			'label' 			=> esc_html__( 'Font Family', 'arilewp' ),
			'section' 			=> 'arilewp_headings2_typography',
			'settings' 			=> 'arilewp_typography_h2_font_family',
			'priority' 			=> 10,
			'type' 				=> 'select',
			'active_callback' 	=> $active_callback,
		) ) );	

        $wp_customize->add_setting( 'arilewp_typography_h3_font_family', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'Source Sans Pro',
		) );
		$wp_customize->add_control( new ArileWP_Customizer_Typography_Control( $wp_customize,'arilewp_typography_h3_font_family', array(
			'label' 			=> esc_html__( 'Font Family', 'arilewp' ),
			'section' 			=> 'arilewp_headings3_typography',
			'settings' 			=> 'arilewp_typography_h3_font_family',
			'priority' 			=> 10,
			'type' 				=> 'select',
			'active_callback' 	=> $active_callback,
		) ) );	
		
		$wp_customize->add_setting( 'arilewp_typography_h4_font_family', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'Source Sans Pro',
		) );
		$wp_customize->add_control( new ArileWP_Customizer_Typography_Control( $wp_customize,'arilewp_typography_h4_font_family', array(
			'label' 			=> esc_html__( 'Font Family', 'arilewp' ),
			'section' 			=> 'arilewp_headings4_typography',
			'settings' 			=> 'arilewp_typography_h4_font_family',
			'priority' 			=> 10,
			'type' 				=> 'select',
			'active_callback' 	=> $active_callback,
		) ) );		

        $wp_customize->add_setting( 'arilewp_typography_h5_font_family', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'Source Sans Pro',
		) );
		$wp_customize->add_control( new ArileWP_Customizer_Typography_Control( $wp_customize,'arilewp_typography_h5_font_family', array(
			'label' 			=> esc_html__( 'Font Family', 'arilewp' ),
			'section' 			=> 'arilewp_headings5_typography',
			'settings' 			=> 'arilewp_typography_h5_font_family',
			'priority' 			=> 10,
			'type' 				=> 'select',
			'active_callback' 	=> $active_callback,
		) ) );	

        $wp_customize->add_setting( 'arilewp_typography_h6_font_family', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'Source Sans Pro',
		) );
		$wp_customize->add_control( new ArileWP_Customizer_Typography_Control( $wp_customize,'arilewp_typography_h6_font_family', array(
			'label' 			=> esc_html__( 'Font Family', 'arilewp' ),
			'section' 			=> 'arilewp_headings6_typography',
			'settings' 			=> 'arilewp_typography_h6_font_family',
			'priority' 			=> 10,
			'type' 				=> 'select',
			'active_callback' 	=> $active_callback,
		) ) );	

		$wp_customize->add_setting( 'arilewp_typography_widget_title_font_family', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'Source Sans Pro',
		) );
		$wp_customize->add_control( new ArileWP_Customizer_Typography_Control( $wp_customize,'arilewp_typography_widget_title_font_family', array(
			'label' 			=> esc_html__( 'Font Family', 'arilewp' ),
			'section' 			=> 'arilewp_widgets_typography',
			'settings' 			=> 'arilewp_typography_widget_title_font_family',
			'priority' 			=> 10,
			'type' 				=> 'select',
			'active_callback' 	=> $active_callback,
		) ) );
}
add_action( 'customize_register', 'arilewp_frontpage_sections_settings' );


function arilewp_customizer_selective_refresh_settings($wp_customize) {
	
	$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';	
	
	// Services

		$wp_customize->add_setting( 'arilewp_service_area_title',
		array(
            'default' => 'Our Services',
			'sanitize_callback' => 'arilewp_sanitize_text',
			'transport' => $selective_refresh,
		));	
		$wp_customize->add_control( 'arilewp_service_area_title',
		array(
			'label'   => esc_html__( 'Section Title', 'arilewp' ),
			'section' => 'arilewp_theme_service',
			'priority'        => 4,
			'type' => 'text',
		));	
		
		$wp_customize->add_setting( 'arilewp_service_area_des',
		array(
            'default' => '<b>We provide the</b> best services',
			'sanitize_callback' => 'arilewp_sanitize_text',
			'transport' => $selective_refresh,
		));	
		$wp_customize->add_control( 'arilewp_service_area_des',
		array(
			'label'   => esc_html__( 'Section Description', 'arilewp' ),
			'section' => 'arilewp_theme_service',
			'priority'        => 5,
			'type' => 'textarea',
		));	
		
	
    // Project
	
		$wp_customize->add_setting( 'arilewp_project_area_title',
		array(
            'default' => 'Our Portfolio',
			'sanitize_callback' => 'arilewp_sanitize_text',
			'transport' => $selective_refresh,
		));	
		$wp_customize->add_control( 'arilewp_project_area_title',
		array(
			'label'   => esc_html__( 'Section Title', 'arilewp' ),
			'section' => 'arilewp_theme_project',
			'priority'        => 15,
			'type' => 'text',
		));	
		
			
		$wp_customize->add_setting( 'arilewp_project_area_des',
		array(
            'default' => '<b>Recent</b> Projects',
			'sanitize_callback' => 'arilewp_sanitize_text',
			'transport' => $selective_refresh,
		));	
		$wp_customize->add_control( 'arilewp_project_area_des',
		array(
			'label'   => esc_html__( 'Section Description', 'arilewp' ),
			'section' => 'arilewp_theme_project',
			'priority'        => 20,
			'type' => 'textarea',
		));	
		

	// Testimonial
	
		$wp_customize->add_setting( 'arilewp_testimonial_area_title',
		array(
            'default' => 'Testimonials',
			'sanitize_callback' => 'arilewp_sanitize_text',
			'transport' => $selective_refresh,
		));	
		$wp_customize->add_control( 'arilewp_testimonial_area_title',
		array(
			'label'   => esc_html__( 'Section Title', 'arilewp' ),
			'section' => 'arilewp_theme_testimonial',
			'priority'        => 4,
			'type' => 'text',
		));	
		
			
		$wp_customize->add_setting( 'arilewp_testimonial_area_des',
		array(
            'default' => '<b>What clients</b>  are say',
			'sanitize_callback' => 'arilewp_sanitize_text',
			'transport' => $selective_refresh,
		));	
		$wp_customize->add_control( 'arilewp_testimonial_area_des',
		array(
			'label'   => esc_html__( 'Section Description', 'arilewp' ),
			'section' => 'arilewp_theme_testimonial',
			'priority'        => 5,
			'type' => 'textarea',
		));
		
		
    // Wooshop
	
		$wp_customize->add_setting( 'arilewp_wooshop_area_title',
		array(
            'default' => 'Our Shop',
			'sanitize_callback' => 'arilewp_sanitize_text',
			'transport' => $selective_refresh,
		));	
		$wp_customize->add_control( 'arilewp_wooshop_area_title',
		array(
			'label'   => esc_html__( 'Section Title', 'arilewp' ),
			'section' => 'arilewp_theme_wooshop',
			'priority'        => 4,
			'type' => 'text',
		));	
		
		$wp_customize->add_setting( 'arilewp_wooshop_area_des',
		array(
            'default' => '<b>Best selling </b> products',
			'sanitize_callback' => 'arilewp_sanitize_text',
			'transport' => $selective_refresh,
		));	
		$wp_customize->add_control( 'arilewp_wooshop_area_des',
		array(
			'label'   => esc_html__( 'Section Description', 'arilewp' ),
			'section' => 'arilewp_theme_wooshop',
			'priority'        => 5,
			'type' => 'textarea',
		));	
		
	// Call to action
	
		$wp_customize->add_setting( 'arilewp_cta_area_title',
		array(
            'default' => 'Want to work with us?',
			'sanitize_callback' => 'arilewp_sanitize_text',
			'transport' => $selective_refresh,
		));	
		$wp_customize->add_control( 'arilewp_cta_area_title',
		array(
			'label'   => esc_html__( 'Title', 'arilewp' ),
			'section' => 'arilewp_theme_cta',
			'priority'        => 4,
			'type' => 'text',
		));	
		
		$wp_customize->add_setting( 'arilewp_cta_area_subtitle',
		array(
            'default' => 'Get Started Today.',
			'sanitize_callback' => 'arilewp_sanitize_text',
			'transport' => $selective_refresh,
		));	
		$wp_customize->add_control( 'arilewp_cta_area_subtitle',
		array(
			'label'   => esc_html__( 'Subtitle', 'arilewp' ),
			'section' => 'arilewp_theme_cta',
			'priority'        => 5,
			'type' => 'text',
		));	
		
		$wp_customize->add_setting( 'arilewp_cta_area_des',
		array(
            'default' => 'Also, people love our theme for these wonderful and efficient features which give the user complete freedom to manage theme.',
			'sanitize_callback' => 'arilewp_sanitize_text',
			'transport' => $selective_refresh,
		));	
		$wp_customize->add_control( 'arilewp_cta_area_des',
		array(
			'label'   => esc_html__( 'Description', 'arilewp' ),
			'section' => 'arilewp_theme_cta',
			'priority'        => 6,
			'type' => 'textarea',
		));	
		
		$wp_customize->add_setting( 'arilewp_cta_button_text',
		array(
            'default' => 'Contact Us',
			'sanitize_callback' => 'arilewp_sanitize_text',
			'transport' => $selective_refresh,
		));	
		$wp_customize->add_control( 'arilewp_cta_button_text',
		array(
			'label'   => esc_html__( 'Button Text', 'arilewp' ),
			'section' => 'arilewp_theme_cta',
			'priority'        => 10,
			'type' => 'text',
		));	
		
		$wp_customize->add_setting( 'arilewp_video_text',
		array(
            'default' => 'Watch Now',
			'sanitize_callback' => 'arilewp_sanitize_text',
			'transport' => $selective_refresh,
		));	
		$wp_customize->add_control( 'arilewp_video_text',
		array(
			'label'   => esc_html__( 'Video Text', 'arilewp' ),
			'section' => 'arilewp_theme_cta',
			'priority'        => 15,
			'type' => 'text',
		));	
		
	// Team
	
		$wp_customize->add_setting( 'arilewp_team_area_title',
		array(
            'default' => 'Our Team',
			'sanitize_callback' => 'arilewp_sanitize_text',
			'transport' => $selective_refresh,
		));	
		$wp_customize->add_control( 'arilewp_team_area_title',
		array(
			'label'   => esc_html__( 'Section Title', 'arilewp' ),
			'section' => 'arilewp_theme_team',
			'priority'        => 4,
			'type' => 'text',
		));	
		
		$wp_customize->add_setting( 'arilewp_team_area_des',
		array(
            'default' => '<b>Talented</b> People',
			'sanitize_callback' => 'arilewp_sanitize_text',
			'transport' => $selective_refresh,
		));	
		$wp_customize->add_control( 'arilewp_team_area_des',
		array(
			'label'   => esc_html__( 'Section Description', 'arilewp' ),
			'section' => 'arilewp_theme_team',
			'priority'        => 5,
			'type' => 'textarea',
		));
		
		
	// Blog
	
		$wp_customize->add_setting( 'arilewp_blog_area_title',
		array(
            'default' => 'Recent Updates',
			'sanitize_callback' => 'arilewp_sanitize_text',
			'transport' => $selective_refresh,
		));	
		$wp_customize->add_control( 'arilewp_blog_area_title',
		array(
			'label'   => esc_html__( 'Section Title', 'arilewp' ),
			'section' => 'arilewp_theme_blog',
			'priority'        => 4,
			'type' => 'text',
		));	
		
		$wp_customize->add_setting( 'arilewp_blog_area_des',
		array(
            'default' => '<b>Our Latest</b> News',
			'sanitize_callback' => 'arilewp_sanitize_text',
			'transport' => $selective_refresh,
		));	
		$wp_customize->add_control( 'arilewp_blog_area_des',
		array(
			'label'   => esc_html__( 'Section Description', 'arilewp' ),
			'section' => 'arilewp_theme_blog',
			'priority'        => 5,
			'type' => 'textarea',
		));
		
		$wp_customize->add_setting( 'arilewp_show_more_button_text',
		array(
            'default' => 'Show More Posts',
			'sanitize_callback' => 'arilewp_sanitize_text',
			'transport' => $selective_refresh,
		));	
		$wp_customize->add_control( 'arilewp_show_more_button_text',
		array(
			'label'   => esc_html__( 'Button Text', 'arilewp' ),
			'section' => 'arilewp_theme_blog',
			'priority'        => 12,
			'type' => 'text',
		));	
		
	// Footer copyright
		
		$wp_customize->add_setting( 'arilewp_footer_copright_text',
		array(
            'default' => '<p>Copyright &copy; 2021 <a href="https://themearile.com/">ThemeArile</a>. All right reserved</p>',
			'sanitize_callback' => 'arilewp_sanitize_text',
			'transport' => $selective_refresh,
		));	
		$wp_customize->add_control( 'arilewp_footer_copright_text',
		array(
			'label'   => esc_html__( 'Copyright Text', 'arilewp' ),
			'section' => 'arilewp_footer_copyright',
			'priority'        => 10,
			'type' => 'textarea',
		));	
		
		
		
}
add_action( 'customize_register', 'arilewp_customizer_selective_refresh_settings' );