<?php
/**
 * Theme functions and definitions
 *
 * @package ArileWP Pro Child Theme 
 */

/**
 * After setup theme hook
 */
require 'theme-custom-pd.php';
require 'inc/custom-post.php';
require 'inc/child_metabox.php';

function arilewp_pro_child_theme_setup(){
    /*
     * Make child theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    load_child_theme_textdomain( 'arilewp-pro-child-theme', get_stylesheet_directory() . '/languages' );	
}
add_action( 'after_setup_theme', 'arilewp_pro_child_theme_setup' );


/**
 * Load assets.
 */

function arilewp_pro_child_theme_css() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style('arilewp-pro-child-style',get_stylesheet_directory_uri() . '/style.css',array('parent-style'));
    pd_custom_pd_css();
}
add_action( 'wp_enqueue_scripts', 'arilewp_pro_child_theme_css', 99);

/**
* Import theme options from ArilWP, ArilWP child themes and ArileWP Pro theme to ArileWP Pro child theme.
*/
function arilewp_import_theme_mods_from_child_theme_to_pro_child_theme() {

    // Get the name of the previously active theme.
    $previous_theme = strtolower( get_option( 'theme_switched' ) );

    if ( ! in_array(
        $previous_theme, array(
            'arilewp',
			'business-street',
			'strangerwp',
			'arilewp-pro',
        )
    ) ) {
        return;
    }

    // Get the theme mods from the previous theme.
    $previous_theme_content = get_option( 'theme_mods_' . $previous_theme );


    if ( ! empty( $previous_theme_content ) ) {
        foreach ( $previous_theme_content as $previous_theme_mod_k => $previous_theme_mod_v ) {
            set_theme_mod( $previous_theme_mod_k, $previous_theme_mod_v );
        }
    }
}
add_action( 'after_switch_theme', 'arilewp_import_theme_mods_from_child_theme_to_pro_child_theme' );

/**
 *  Load Custom Scripts
 */

function enqueue_custom_scripts() {
    wp_enqueue_script( 'customScripts', '/wp-content/themes/arilewp-pro-child-theme/assets/js/custom.js', false);
}

add_action( 'wp_enqueue_scripts', 'enqueue_custom_scripts');


