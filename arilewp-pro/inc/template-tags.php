<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package arilewp
 */
 
 if ( ! function_exists( 'arilewp_sanitize_select' ) ) :
	/**
	 * Sanitize select, radio.
	 *
	 * @since BlogSlog 1.0.0
	 *
	 * @param mixed                $input The value to sanitize.
	 * @param WP_Customize_Setting $setting WP_Customize_Setting instance.
	 * @return mixed Sanitized value.
	 */
	function arilewp_sanitize_select( $input, $setting ) {
		// Get list of choices from the control associated with the setting.
		$choices = $setting->manager->get_control( $setting->id )->choices;

		// If the input is a valid key, return it; otherwise, return the default.
		return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
	}
endif;

function arilewp_sanitize_text( $input ) {
		return wp_kses_post( force_balance_tags( $input ) );
}

function arilewp_custom_customizer_options() { 

$arilewp_top_header_bac_color = get_theme_mod('arilewp_top_header_bac_color');
$arilewp_main_slider_overlay_color = get_theme_mod('arilewp_main_slider_overlay_color','rgba(0, 0, 0, .35)');
$arilewp_theme_info_back_color = get_theme_mod('arilewp_theme_info_back_color');
$arilewp_testomonial_background_image = get_theme_mod('arilewp_testomonial_background_image');
$arilewp_cta_background_image = get_theme_mod('arilewp_cta_background_image');
$arilewp_cta_overlay_color = get_theme_mod('arilewp_cta_overlay_color');
$arilewp_funfact_background_image = get_theme_mod('arilewp_funfact_background_image');
$arilewp_page_header_background_image = get_theme_mod('arilewp_page_header_background_image');
$arilewp_main_header_style = get_theme_mod('arilewp_main_header_style', 'standard');
if($arilewp_main_header_style == 'overlap_classic'){
$arilewp_page_header_padding = get_theme_mod('arilewp_page_header_padding', array('top' => '14rem', 'bottom' => '7rem',) );
}
else{
$arilewp_page_header_padding = get_theme_mod('arilewp_page_header_padding', array('top' => '4rem', 'bottom' => '4rem',) );
}

$arilewp_breadcrumb_separator = get_theme_mod('arilewp_breadcrumb_separator', '::');
$arilewp_sticky_bar_background_color = get_theme_mod('arilewp_sticky_bar_background_color');

$arilewp_sticky_bar_logo = get_theme_mod('arilewp_sticky_bar_logo');
$arilewp_home_blog_separator_disabled = get_theme_mod('arilewp_home_blog_separator_disabled', true);
$arilewp_custom_logo_size = get_theme_mod('arilewp_custom_logo_size', array('slider' => 210,'suffix' => 'px',));

$arilewp_transparent_header_logo = get_theme_mod('arilewp_transparent_header_logo');
$arilewp_top_header_icon_color = get_theme_mod('arilewp_top_header_icon_color');
$arilewp_main_slider_height = get_theme_mod('arilewp_main_slider_height', array('slider' => 800,'suffix' => 'px',));

$arilewp_funfact_overlay_color = get_theme_mod('arilewp_funfact_overlay_color');
$arilewp_testimonial_overlay_color = get_theme_mod('arilewp_testimonial_overlay_color');

?>
    <style type="text/css">	
	
	<?php if(!empty($arilewp_top_header_bac_color)) { ?>
		.site-header { background: <?php echo $arilewp_top_header_bac_color; ?> !important; }
    <?php } ?>
		
	.theme-main-slider .overlay { background-color: <?php echo $arilewp_main_slider_overlay_color; ?>; }
		
	<?php if(!empty($arilewp_theme_info_back_color)) { ?>	
		.theme-info-area { background-color: <?php echo $arilewp_theme_info_back_color; ?> !important; }
	<?php } ?>

	
	<?php if($arilewp_custom_logo_size['slider'] != null){ ?>
        .navbar img.custom-logo, .theme-header-logo-center img.custom-logo {
			max-width: <?php echo $arilewp_custom_logo_size['slider']; ?>px;
			height: auto;
		}
    <?php } ?>
		
	<?php if($arilewp_main_slider_height['slider'] != null){ ?>
        #theme-main-slider .item {
			height: <?php echo $arilewp_main_slider_height['slider']; ?>px;;
		}
    <?php } ?>
		
	<?php if($arilewp_testomonial_background_image != null) : ?>
		.theme-testimonial { 
		        background-image: url(<?php echo $arilewp_testomonial_background_image; ?>) !important; 
                background-size: cover !important;
				background-position: center center !important;
		}
    <?php endif; ?>
	
	<?php if(!empty($arilewp_top_header_icon_color)) { ?>
		.theme-contact-block i { color: <?php echo $arilewp_top_header_icon_color; ?>; }
	<?php } ?>
		
    <?php if(!empty($arilewp_cta_overlay_color)) { ?>
		.theme-cta { background-color: <?php echo $arilewp_cta_overlay_color; ?> !important; }
	<?php } ?>
	
	<?php if(!empty($arilewp_funfact_overlay_color)) { ?>
		.theme-funfact-overlay { background-color: <?php echo $arilewp_funfact_overlay_color; ?> !important; }
	<?php } ?>
	
	<?php if(!empty($arilewp_testimonial_overlay_color)) { ?>
		.theme-testimonial .overlay { background-color: <?php echo $arilewp_testimonial_overlay_color; ?> !important; }
	<?php } ?>
	
	<?php if($arilewp_cta_background_image != null) : ?>
		.theme-cta { 
		        background-image: url(<?php echo $arilewp_cta_background_image; ?>) !important; 
                background-size: cover !important;
				background-position: center center !important;
		}
	    .theme-cta-overlay {
			background-color: <?php echo $arilewp_cta_overlay_color; ?>;
			position: absolute;
			top: 0;
			bottom: 0;
			left: 0;
			right: 0;
			height: 100%;
			width: 100%;
        }
    <?php endif; ?>
	
		<?php if($arilewp_funfact_background_image != null) : ?>
		.theme-funfact { background-image: url(<?php echo $arilewp_funfact_background_image; ?>); }
		<?php endif; ?>
		
		.theme-page-header-area {
			padding: <?php echo $arilewp_page_header_padding['top']; ?> 0 <?php echo $arilewp_page_header_padding['bottom']; ?> 0;
        }
		
		<?php if ( is_user_logged_in() && is_admin_bar_showing() ) { ?>
            @media (min-width: 600px){
                .navbar.header-fixed-top{top:32px;}
            }
        <?php  } ?>
		
		<?php if ( has_header_image() ) : ?>
			.theme-page-header-area {
				background: #17212c url(<?php echo esc_url( get_header_image() ); ?>);
				background-attachment: scroll;
				background-position: top center;
				background-repeat: no-repeat;
				background-size: cover;
			}
		<?php endif; ?>
		<?php if($arilewp_main_header_style == 'overlap_classic'){ ?>
			.theme-page-header-area .overlay {
				background-color: rgba(0, 0, 0, 0.7);
			}
		<?php } ?>
		
		.page-breadcrumb > li + li:before {
			content: "<?php echo $arilewp_breadcrumb_separator; ?>";
        }
		
		<?php if(!empty($arilewp_sticky_bar_background_color)) { ?>
		.header-fixed-top { background-color: <?php echo $arilewp_sticky_bar_background_color; ?> !important; }
		<?php } ?>
		
		<?php if($arilewp_sticky_bar_logo != null) : ?>
			.header-fixed-top .navbar-brand {
				display: none !important;
			}
            .not-sticky .sticky-navbar-brand {
				display: none !important;
			}
		<?php endif; ?>
		
		<?php if($arilewp_home_blog_separator_disabled == false) : ?>
		.theme-blog .post .entry-header {
            margin: 0 0 1.188rem;
         }
        .theme-blog .post .entry-header::before{ display: none; }
		<?php endif; ?>
		
   </style>
<?php }
add_action('wp_footer','arilewp_custom_customizer_options');