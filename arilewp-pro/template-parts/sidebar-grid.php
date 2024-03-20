<?php
/**
 * The sidebar containing the main widget area
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package arilewp
 */


if ( is_active_sidebar( 'sidebar-main' ) ) : ?>

<?php 
$arilewp_grid_view_container_size = get_theme_mod('arilewp_grid_view_container_size', 'container-full');
if($arilewp_grid_view_container_size == 'container-full'){$container = '3';}else{$container = '4';}

?>

<div class="col-lg-<?php echo $container; ?> col-md-<?php echo $container; ?> col-sm-12">

	<div class="sidebar">
	
		<?php // call main sidebar.

		dynamic_sidebar( 'sidebar-main' ); ?>	
		
	</div>
	
</div>	


<?php endif; ?>