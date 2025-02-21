<?php
/**
 * Override default customizer options.
 *
 * @package arilewp
 */

// Settings.
$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

if ( isset( $wp_customize->selective_refresh ) ) {
	
	// site title
	$wp_customize->selective_refresh->add_partial(
		'blogname',
		array(
			'selector'        => '.site-title a',
			'render_callback' => array( 'ArileWP_Customizer_Partials', 'customize_partial_blogname' ),
		)
	);

    // site tagline
	$wp_customize->selective_refresh->add_partial(
		'blogdescription',
		array(
			'selector'        => '.site-description',
			'render_callback' => array( 'ArileWP_Customizer_Partials', 'customize_partial_blogdescription' ),
		)
	);
	
    // Top header info
	$wp_customize->selective_refresh->add_partial(
		'arilewp_top_header_info_content',
		array(
			'selector'        => '.site-header .col-lg-9',
		)
	);
	
	// Top header social icons
	$wp_customize->selective_refresh->add_partial(
		'arilewp_top_header_social_content',
		array(
			'selector'        => '.site-header .col-lg-3',
		)
	);
	
	// main slider
	$wp_customize->selective_refresh->add_partial(
		'arilewp_main_slider_content',
		array(
			'selector'        => '.theme-main-slider .theme-slider-content',
		)
	);
	
	// theme info area
	$wp_customize->selective_refresh->add_partial(
		'arilewp_theme_info_content',
		array(
			'selector'        => '.row.theme-info-area',
		)
	);

    //contact asset
    $wp_customize->selective_refresh->add_partial(
        'arilewp_contact_template_info_content',
        array(
            'selector'      => '.container .row.contact'
        )
    );

    //contact accordion
    $wp_customize->selective_refresh->add_partial(
        'arilewp_contact_about_accordion',
        array(
            'selector'      => '.container .accordion-body .accordion'
        )
    );

	// service title
	$wp_customize->selective_refresh->add_partial(
		'arilewp_service_area_title',
		array(
			'selector'        => '.theme-services .theme-section-subtitle',
			'render_callback' => array( 'ArileWP_Customizer_Partials', 'customize_partial_arilewp_service_area_title' ),
		)
	);
	
	// service title
	$wp_customize->selective_refresh->add_partial(
		'arilewp_service_area_des',
		array(
			'selector'        => '.theme-services .theme-section-title',
			'render_callback' => array( 'ArileWP_Customizer_Partials', 'customize_partial_arilewp_service_area_des' ),
		)
	);
	
	// service content
	$wp_customize->selective_refresh->add_partial(
		'arilewp_service_content',
		array(
			'selector'        => '.theme-services .row.theme-services-content',
		)
	);
	
	// project title
	$wp_customize->selective_refresh->add_partial(
		'arilewp_project_area_title',
		array(
			'selector'        => '.theme-project .theme-section-subtitle',
			'render_callback' => array( 'ArileWP_Customizer_Partials', 'customize_partial_arilewp_project_area_title' ),
		)
	);
	
	// project description
	$wp_customize->selective_refresh->add_partial(
		'arilewp_project_area_des',
		array(
			'selector'        => '.theme-project .theme-section-title',
			'render_callback' => array( 'ArileWP_Customizer_Partials', 'customize_partial_arilewp_project_area_des' ),
		)
	);
	
    // funfact content
	$wp_customize->selective_refresh->add_partial(
		'arilewp_funfact_content',
		array(
			'selector'        => '.theme-funfact .container',
		)
	);
	
	
	// testimonial title
	$wp_customize->selective_refresh->add_partial(
		'arilewp_testimonial_area_title',
		array(
			'selector'        => '.theme-testimonial .theme-section-subtitle',
			'render_callback' => array( 'ArileWP_Customizer_Partials', 'customize_partial_arilewp_testimonial_area_title' ),
		)
	);
	
	// testimonial description
	$wp_customize->selective_refresh->add_partial(
		'arilewp_testimonial_area_des',
		array(
			'selector'        => '.theme-testimonial .theme-section-title',
			'render_callback' => array( 'ArileWP_Customizer_Partials', 'customize_partial_arilewp_testimonial_area_des' ),
		)
	);
	
    // testimonial content
	$wp_customize->selective_refresh->add_partial(
		'arilewp_testimonial_content',
		array(
			'selector'        => '.theme-testimonial .row.theme-testimonial-content',
		)
	);
	
	
	// wooshop title
	$wp_customize->selective_refresh->add_partial(
		'arilewp_wooshop_area_title',
		array(
			'selector'        => '.shop .theme-section-subtitle',
			'render_callback' => array( 'ArileWP_Customizer_Partials', 'customize_partial_arilewp_wooshop_area_title' ),
		)
	);
	
	// wooshop description
	$wp_customize->selective_refresh->add_partial(
		'arilewp_wooshop_area_des',
		array(
			'selector'        => '.shop .theme-section-title',
			'render_callback' => array( 'ArileWP_Customizer_Partials', 'customize_partial_arilewp_wooshop_area_des' ),
		)
	);	
	
	// call to action title
	$wp_customize->selective_refresh->add_partial(
		'arilewp_cta_area_title',
		array(
			'selector'        => '.theme-cta .cta-block h5',
			'render_callback' => array( 'ArileWP_Customizer_Partials', 'customize_partial_arilewp_cta_area_title' ),
		)
	);
	
	// call to action subtitle
	$wp_customize->selective_refresh->add_partial(
		'arilewp_cta_area_subtitle',
		array(
			'selector'        => '.theme-cta .cta-block h2',
			'render_callback' => array( 'ArileWP_Customizer_Partials', 'customize_partial_arilewp_cta_area_subtitle' ),
		)
	);
	
	// call to action description
	$wp_customize->selective_refresh->add_partial(
		'arilewp_cta_area_des',
		array(
			'selector'        => '.theme-cta .cta-block p',
			'render_callback' => array( 'ArileWP_Customizer_Partials', 'customize_partial_arilewp_cta_area_des' ),
		)
	);
	
	// call to action button text
	$wp_customize->selective_refresh->add_partial(
		'arilewp_cta_button_text',
		array(
			'selector'        => '.theme-cta .mx-auto mt-3',
			'render_callback' => array( 'ArileWP_Customizer_Partials', 'customize_partial_arilewp_cta_button_text' ),
		)
	);
	
	// call to action video text
	$wp_customize->selective_refresh->add_partial(
		'arilewp_video_text',
		array(
			'selector'        => '.theme-cta .youtube-click a',
			'render_callback' => array( 'ArileWP_Customizer_Partials', 'customize_partial_arilewp_video_text' ),
		)
	);
	
	// team title
	$wp_customize->selective_refresh->add_partial(
		'arilewp_team_area_title',
		array(
			'selector'        => '.team-mambers .theme-section-subtitle',
			'render_callback' => array( 'ArileWP_Customizer_Partials', 'customize_partial_arilewp_team_area_title' ),
		)
	);
	
	// team description
	$wp_customize->selective_refresh->add_partial(
		'arilewp_team_area_des',
		array(
			'selector'        => '.team-mambers .theme-section-title',
			'render_callback' => array( 'ArileWP_Customizer_Partials', 'customize_partial_arilewp_team_area_des' ),
		)
	);
	
    // team content
	$wp_customize->selective_refresh->add_partial(
		'arilewp_team_content',
		array(
			'selector'        => '.team-mambers .row.theme-team-content',
		)
	);
	
	// blog title
	$wp_customize->selective_refresh->add_partial(
		'arilewp_blog_area_title',
		array(
			'selector'        => '.theme-blog .theme-section-subtitle',
			'render_callback' => array( 'ArileWP_Customizer_Partials', 'customize_partial_arilewp_blog_area_title' ),
		)
	);
	
	// blog description
	$wp_customize->selective_refresh->add_partial(
		'arilewp_blog_area_des',
		array(
			'selector'        => '.theme-blog .theme-section-title',
			'render_callback' => array( 'ArileWP_Customizer_Partials', 'customize_partial_arilewp_blog_area_des' ),
		)
	);
	
    // blog button text
	$wp_customize->selective_refresh->add_partial(
		'arilewp_show_more_button_text',
		array(
			'selector'        => '.theme-blog .btn-small',
			'render_callback' => array( 'ArileWP_Customizer_Partials', 'customize_partial_arilewp_show_more_button_text' ),
		)
	);
	
	// client content
	$wp_customize->selective_refresh->add_partial(
		'arilewp_clients_content',
		array(
			'selector'        => '.theme-sponsors .theme-sponsors-content',
		)
	);
	
	// footer copyright text
	$wp_customize->selective_refresh->add_partial(
		'arilewp_footer_copright_text',
		array(
			'selector'        => '.site-footer .site-info',
			'render_callback' => array( 'ArileWP_Customizer_Partials', 'customize_partial_arilewp_footer_copright_text' ),
		)
	);
	
	
	
}