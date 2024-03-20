<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>	
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php esc_url(bloginfo( 'pingback_url' )); ?>">
	<?php endif; ?>

	<?php wp_head(); ?>
</head>
<?php 
	$arilewp_theme_layout = get_theme_mod('arilewp_theme_layout','theme-wide');
	if($arilewp_theme_layout == 'theme-boxed'): $class='theme-boxed'; else: $class='theme-wide';  endif;
?>
<body <?php body_class($class); ?> >
<div id="wrapper">


<?php get_template_part('template-parts/site','header'); ?>
<?php get_template_part('template-parts/site','navbar'); ?>