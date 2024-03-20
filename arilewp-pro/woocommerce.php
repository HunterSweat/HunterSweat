<?php
get_header();
global $woocommerce;
$shop_page_id = get_option( 'woocommerce_shop_page_id' );
if (get_post_meta( $shop_page_id, 'page_slider_enable', true )) {
	get_template_part( 'template-parts/index', 'slider' );
}
get_template_part('template-parts/site','breadcrumb');

$page_container_layout = get_post_meta( $shop_page_id, '_page_layout', true );
if( empty($page_container_layout) ){ $page_container_layout = 'container'; }
if($page_container_layout == 'container-full'){$container = '9';}else{$container = '8';}

$page_sidebar_layout = get_post_meta( $shop_page_id, '_sidebar_layout', true );
if( empty($page_sidebar_layout) ){ $page_container_layout = 'container'; }

if($page_container_layout == 'container-full'){$sidebar_container = '3';}else{$sidebar_container = '4';}

?>
<section class="theme-block">

	<div class="<?php echo $page_container_layout; ?>">
	
		<div class="row">
		
		    <?php 
		    if($page_sidebar_layout == 'left-sidebar'):
		        if ( is_active_sidebar( 'woocommerce' )  ) :
					echo '<div class="col-lg-'.$sidebar_container.' col-md-'.$sidebar_container.' col-sm-12"><div class="sidebar">';
							dynamic_sidebar( 'woocommerce' );
					echo '</div></div>';
                 endif;
            endif;
			
			if($page_sidebar_layout == 'no-sidebar'):
               echo '<div class="col-lg-12 col-md-12 col-sm-12 wow animate fadeInUp" data-wow-delay=".3s">';
			   woocommerce_content();
			   echo '</div>';
			endif;
		   
		   if($page_sidebar_layout == 'right-sidebar' || $page_sidebar_layout == 'left-sidebar' || empty($page_sidebar_layout)):
			echo '<div class="col-lg-'.( !is_active_sidebar( "woocommerce" ) ?"12" : $container ).' col-md-'.( !is_active_sidebar( "woocommerce" ) ?"12" : $container ).' col-sm-12 wow animate fadeInUp" data-wow-delay=".3s">';
				woocommerce_content();
			echo '</div>';
		    endif;
			
			if($page_sidebar_layout == 'right-sidebar' || empty($page_sidebar_layout)):
			    if ( is_active_sidebar( 'woocommerce' )  ) :
					echo '<div class="col-lg-'.$sidebar_container.' col-md-'.$sidebar_container.' col-sm-12"><div class="sidebar">';
							dynamic_sidebar( 'woocommerce' );
					echo '</div></div>';
                endif;
			endif;
			?>
			
		</div>
		
	</div>
	
</section>
<?php get_footer(); ?>