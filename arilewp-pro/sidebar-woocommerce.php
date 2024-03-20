<?php 
/**
 * The sidebar containing the woocommerce widget area
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package arilewp
 */

if ( is_active_sidebar( 'woocommerce' )  ) :
$page_container_layout = get_post_meta( get_the_ID(), '_page_layout', true );
if($page_container_layout == 'container-full'){$container = '3';}else{$container = '4';}  ?>
<div class="col-lg-<?php echo $container; ?> col-md-<?php echo $container; ?> col-sm-12">
	<div class="sidebar">
		<!--Sidebar-->
		<?php dynamic_sidebar( 'woocommerce' ); ?>
		<!--/Sidebar-->
	</div>
</div>	
<?php endif; ?>