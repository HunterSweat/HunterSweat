<?php
/**
 *
 * Template Name: Frontpage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package arilewp
 */
?>

<?php

get_header();

$arilewp_forntpage_section_ordering = get_theme_mod( 'arilewp_forntpage_section_ordering', array( 'site-info', 'service', 'project', 'funfact', 'testimonial', 'wooshop', 'callout', 'team', 'blog', 'client', ));
        get_template_part( 'template-parts/index', 'slider' );
    foreach ( $arilewp_forntpage_section_ordering as $arilewp_forntpage_section_order ) :
        if ( 'site-info' === $arilewp_forntpage_section_order ) :
			get_template_part( 'template-parts/index', 'siteinfo' );
        elseif ( 'service' === $arilewp_forntpage_section_order ) :
			get_template_part( 'template-parts/index', 'service' );	
        elseif ( 'project' === $arilewp_forntpage_section_order ) :
			get_template_part( 'template-parts/index', 'project' );
        elseif ( 'funfact' === $arilewp_forntpage_section_order ) :
			get_template_part( 'template-parts/index', 'funfact' );
        elseif ( 'testimonial' === $arilewp_forntpage_section_order ) :
			get_template_part( 'template-parts/index', 'testimonial' );
        elseif ( 'wooshop' === $arilewp_forntpage_section_order ) :
			get_template_part( 'template-parts/index', 'wooshop' );
        elseif ( 'callout' === $arilewp_forntpage_section_order ) :
			get_template_part( 'template-parts/index', 'cta' );
        elseif ( 'team' === $arilewp_forntpage_section_order ) :
			get_template_part( 'template-parts/index', 'team' );
        elseif ( 'blog' === $arilewp_forntpage_section_order ) :
			get_template_part( 'template-parts/index', 'blog' );
        elseif ( 'client' === $arilewp_forntpage_section_order ) :
			get_template_part( 'template-parts/index', 'client' );
	    endif;
	endforeach;
?>

<?php get_footer(); ?>
