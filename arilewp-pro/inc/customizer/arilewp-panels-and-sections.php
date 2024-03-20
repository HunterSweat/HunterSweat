<?php
/**
 * Register customizer panels and sections.
 *
 * @package arilewp
 */

/* Theme Settings. */
 
$wp_customize->add_panel( new ArileWP_Customize_Panel( $wp_customize, 'arilewp_theme_settings', array(
	'priority'   => 28,
	'title'      => esc_html__( 'Theme Options', 'arilewp' ),
	'capabitity' => 'edit_theme_options',
) ) );


// Section: General.
	
	$wp_customize->add_section( new ArileWP_Customize_Section( $wp_customize, 'arilewp_theme_general', array(
		'title'    => esc_html__( 'General', 'arilewp' ),
		'panel'    => 'arilewp_theme_settings',
		'priority' => 9,
	) ) );


// Section: Header.
	
	$wp_customize->add_section( new ArileWP_Customize_Section( $wp_customize, 'arilewp_theme_header', array(
		'title'    => esc_html__( 'Header', 'arilewp' ),
		'panel'    => 'arilewp_theme_settings',
		'priority' => 10,
	) ) );
	

// Section: Menu.
	
	$wp_customize->add_section( new ArileWP_Customize_Section( $wp_customize, 'arilewp_theme_menu_bar', array(
		'title'    => esc_html__( 'Menu', 'arilewp' ),
		'panel'    => 'arilewp_theme_settings',
		'priority' => 20,
	) ) );


// Section: Blog.

	$wp_customize->add_section( new ArileWP_Customize_Section( $wp_customize, 'arilewp_theme_blog_settings', array(
		'title'    => esc_html__( 'Blog', 'arilewp' ),
		'panel'    => 'arilewp_theme_settings',
		'priority' => 30,
	) ) );
	
		$wp_customize->add_section( new ArileWP_Customize_Section( $wp_customize, 'arilewp_blog_general', array(
			'title'    => esc_html__( 'General', 'arilewp' ),
			'panel'    => 'arilewp_theme_settings',
			'section'  => 'arilewp_theme_blog_settings',
			'priority' => 10,
		) ) );
		
		$wp_customize->add_section( new ArileWP_Customize_Section( $wp_customize, 'arilewp_grid_view_blog', array(
			'title'    => esc_html__( 'Grid View', 'arilewp' ),
			'panel'    => 'arilewp_theme_settings',
			'section'  => 'arilewp_theme_blog_settings',
			'priority' => 20,
		) ) );
		
		$wp_customize->add_section( new ArileWP_Customize_Section( $wp_customize, 'arilewp_list_view_blog', array(
			'title'    => esc_html__( 'List View', 'arilewp' ),
			'panel'    => 'arilewp_theme_settings',
			'section'  => 'arilewp_theme_blog_settings',
			'priority' => 30,
		) ) );
		
		$wp_customize->add_section( new ArileWP_Customize_Section( $wp_customize, 'arilewp_masonry_view_blog', array(
			'title'    => esc_html__( 'Masonry', 'arilewp' ),
			'panel'    => 'arilewp_theme_settings',
			'section'  => 'arilewp_theme_blog_settings',
			'priority' => 40,
		) ) );


// Section: Page Header.
	
	$wp_customize->add_section( new ArileWP_Customize_Section( $wp_customize, 'arilewp_theme_page_header', array(
		'title'    => esc_html__( 'Page Header', 'arilewp' ),
		'panel'    => 'arilewp_theme_settings',
		'priority' => 40,
	) ) );


// Section: Footer.

	$wp_customize->add_section( new ArileWP_Customize_Section( $wp_customize, 'arilewp_theme_footer', array(
		'title'    => esc_html__( 'Footer', 'arilewp' ),
		'panel'    => 'arilewp_theme_settings',
		'priority' => 50,
	) ) );
	
		$wp_customize->add_section( new ArileWP_Customize_Section( $wp_customize, 'arilewp_footer_widgets', array(
			'title'    => esc_html__( 'Footer Widgets', 'arilewp' ),
			'panel'    => 'arilewp_theme_settings',
			'section'  => 'arilewp_theme_footer',
			'priority' => 10,
		) ) );
		
		$wp_customize->add_section( new ArileWP_Customize_Section( $wp_customize, 'arilewp_footer_copyright', array(
			'title'    => esc_html__( 'Footer Copyright', 'arilewp' ),
			'panel'    => 'arilewp_theme_settings',
			'section'  => 'arilewp_theme_footer',
			'priority' => 20,
		) ) );
		
		$wp_customize->add_section( new ArileWP_Customize_Section( $wp_customize, 'arilewp_footer_scroll_to_top', array(
			'title'    => esc_html__( 'Scroll to Top', 'arilewp' ),
			'panel'    => 'arilewp_theme_settings',
			'section'  => 'arilewp_theme_footer',
			'priority' => 30,
		) ) );

/**
 * Panel: Typography.
 */
$wp_customize->add_panel( new ArileWP_Customize_Panel( $wp_customize, 'arilewp_theme_typography', array(
	'priority'   => 32,
	'title'      => esc_html__( 'Typography', 'arilewp' ),
	'capabitity' => 'edit_theme_options',
) ) );

    // Section: Typography > Base typography.
	$wp_customize->add_section( new ArileWP_Customize_Section( $wp_customize, 'arilewp_enable_disable_typography', array(
		'title'    => esc_html__( 'Enable Typography', 'arilewp' ),
		'panel'    => 'arilewp_theme_typography',
		'priority' => 5,
	) ) );

	// Section: Typography > Base typography.
	$wp_customize->add_section( new ArileWP_Customize_Section( $wp_customize, 'arilewp_base_typography', array(
		'title'    => esc_html__( 'Base Typography', 'arilewp' ),
		'panel'    => 'arilewp_theme_typography',
		'priority' => 10,
	) ) );

	// Section: Typography > Primary Menu Typography.
	$wp_customize->add_section( new ArileWP_Customize_Section( $wp_customize, 'arilewp_menu_bar_typography', array(
		'title'    => esc_html__( 'Menu Bar', 'arilewp' ),
		'panel'    => 'arilewp_theme_typography',
		'priority' => 30,
	) ) );

	// Section: Typography > Headings ( h1 - h6 ) Typography.
	$wp_customize->add_section( new ArileWP_Customize_Section( $wp_customize, 'arilewp_headings1_typography', array(
		'title'    => esc_html__( 'Headings H1', 'arilewp' ),
		'panel'    => 'arilewp_theme_typography',
		'priority' => 70,
	) ) );
	
	$wp_customize->add_section( new ArileWP_Customize_Section( $wp_customize, 'arilewp_headings2_typography', array(
		'title'    => esc_html__( 'Headings H2', 'arilewp' ),
		'panel'    => 'arilewp_theme_typography',
		'priority' => 80,
	) ) );
	
	$wp_customize->add_section( new ArileWP_Customize_Section( $wp_customize, 'arilewp_headings3_typography', array(
		'title'    => esc_html__( 'Headings H3', 'arilewp' ),
		'panel'    => 'arilewp_theme_typography',
		'priority' => 90,
	) ) );
	
	$wp_customize->add_section( new ArileWP_Customize_Section( $wp_customize, 'arilewp_headings4_typography', array(
		'title'    => esc_html__( 'Headings H4', 'arilewp' ),
		'panel'    => 'arilewp_theme_typography',
		'priority' => 100,
	) ) );
	
	$wp_customize->add_section( new ArileWP_Customize_Section( $wp_customize, 'arilewp_headings5_typography', array(
		'title'    => esc_html__( 'Headings H5', 'arilewp' ),
		'panel'    => 'arilewp_theme_typography',
		'priority' => 110,
	) ) );

    $wp_customize->add_section( new ArileWP_Customize_Section( $wp_customize, 'arilewp_headings6_typography', array(
		'title'    => esc_html__( 'Headings H6', 'arilewp' ),
		'panel'    => 'arilewp_theme_typography',
		'priority' => 120,
	) ) );


	// Section: Typography > Widgets Typography.
	$wp_customize->add_section( new ArileWP_Customize_Section( $wp_customize, 'arilewp_widgets_typography', array(
		'title'    => esc_html__( 'Widgets', 'arilewp' ),
		'panel'    => 'arilewp_theme_typography',
		'priority' => 150,
	) ) );
	
	
/**
 * Panel: Frontpage Section Ordering.
 */
	$wp_customize->add_section( new ArileWP_Customize_Section( $wp_customize, 'arilewp_section_order', array(
		'title'    => esc_html__( 'Frontpage Section Ordering', 'arilewp' ),
		'priority' => 30,
	) ) );
		
/**
 * Panel: Theme Color Scheme.
 */
	$wp_customize->add_section( new ArileWP_Customize_Section( $wp_customize, 'arilewp_theme_color_scheme', array(
		'title'    => esc_html__( 'Theme Color Scheme', 'arilewp' ),
		'priority' => 31,
	) ) );

/**
 * Panel: Page Templates.
 */
 
$wp_customize->add_panel( new ArileWP_Customize_Panel( $wp_customize, 'arilewp_theme_custom_template', array(
	'priority'   => 40,
	'title'      => esc_html__( 'Page Templates', 'arilewp' ),
	'capabitity' => 'edit_theme_options',
) ) );
 
	$wp_customize->add_section( new ArileWP_Customize_Section( $wp_customize, 'arilewp_about_template', array(
		'title'    => esc_html__( 'About', 'arilewp' ),
		'panel'    => 'arilewp_theme_custom_template',
		'priority' => 30,
	) ) );

    $wp_customize->add_section( new ArileWP_Customize_Section( $wp_customize, 'arilewp_service_template', array(
		'title'    => esc_html__( 'Service', 'arilewp' ),
		'panel'    => 'arilewp_theme_custom_template',
		'priority' => 31,
	) ) );

    $wp_customize->add_section( new ArileWP_Customize_Section( $wp_customize, 'arilewp_portfolio_template', array(
		'title'    => esc_html__( 'Portfolio', 'arilewp' ),
		'panel'    => 'arilewp_theme_custom_template',
		'priority' => 32,
	) ) );
	
	$wp_customize->add_section( new ArileWP_Customize_Section( $wp_customize, 'arilewp_contact_template', array(
		'title'    => esc_html__( 'Contact', 'arilewp' ),
		'panel'    => 'arilewp_theme_custom_template',
		'priority' => 33,
	) ) );