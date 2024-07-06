<?php
/**
 * The template for displaying all pages
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

get_header();
if (get_post_meta( get_the_ID(), 'page_slider_enable', true )) {
	get_template_part( 'template-parts/index', 'slider' );
}
get_template_part('template-parts/site','breadcrumb');
$page_sidebar_layout = get_post_meta( get_the_ID(), '_sidebar_layout', true );
$page_container_layout = get_post_meta( get_the_ID(), '_page_layout', true );
if( empty($page_container_layout) ){ $page_container_layout = 'container'; }
if($page_container_layout == 'container-full'){$container = '9';}else{$container = '8';}
?>
<section class="theme-block theme-blog theme-bg-grey">
	<div class="<?php echo $page_container_layout; ?>">
		<div class="row">
		
		<?php 
			
			if($page_sidebar_layout == 'left-sidebar'):
				if ( class_exists( 'WooCommerce' ) ) {
					if( is_account_page() || is_cart() || is_checkout() ) {
						get_sidebar('woocommerce'); 
					}
					else{ 
						get_sidebar(); 
                    }	
				}
			    else{ 
					get_sidebar(); 
				}	
			 endif;
		    
			if($page_sidebar_layout == 'no-sidebar'):
			
		     	if ( class_exists( 'WooCommerce' ) ) {
					if( is_account_page() || is_cart() || is_checkout() ) {
						echo '<div class="col-lg-12 col-md-12 col-sm-12">'; 
					}
					else{ 
						echo '<div class="col-lg-12 col-md-12 col-sm-12">';
					}
				}
				else{ 
					echo '<div class="col-lg-12 col-md-12 col-sm-12">';
				}
				
			else:

                if ( class_exists( 'WooCommerce' ) ) {
					if( is_account_page() || is_cart() || is_checkout() ) {
						echo '<div class="col-lg-'.( !is_active_sidebar( "woocommerce" ) ?"12" : $container ).' col-md-'.( !is_active_sidebar( "woocommerce" ) ?"12" : $container ).' col-sm-12">'; 
					}
					else{ 
						echo '<div class="col-lg-'.( !is_active_sidebar( "sidebar-main" ) ?"12" : $container ).' col-md-'.( !is_active_sidebar( "sidebar-main" ) ?"12" : $container ).' col-sm-12">';
					}
				}
				else{ 
					echo '<div class="col-lg-'.( !is_active_sidebar( "sidebar-main" ) ?"12" : $container ).' col-md-'.( !is_active_sidebar( "sidebar-main" ) ?"12" : $container ).' col-sm-12">';
				}
			
			endif;
					
				if ( class_exists( 'WooCommerce' ) ) {
					if( is_account_page() || is_cart() || is_checkout() ) {
						while ( have_posts() ) : the_post();
						// Include the page
						get_template_part( 'template-parts/content', 'page' );
						comments_template( '', true ); // show comments
						endwhile;	
				    } 
					else
					{
						while ( have_posts() ) : the_post();
							// Include the page
							get_template_part( 'template-parts/content', 'page' );
							comments_template( '', true ); // show comments
						endwhile;
					}
				}
				else 
				{
					while ( have_posts() ) : the_post();
						// Include the page
						get_template_part( 'template-parts/content', 'page' );
						comments_template( '', true ); // show comments 
				    endwhile;
				}
				?>
			</div>
			
			<?php if($page_sidebar_layout == 'right-sidebar' || empty($page_sidebar_layout)):	
					if ( class_exists( 'WooCommerce' ) ) {
							if( is_account_page() || is_cart() || is_checkout() ) {
									get_sidebar('woocommerce'); 
							}
							else{ 
							get_sidebar();
							}
					}
					else{ 
					get_sidebar(); 
					}
			endif; ?>
					
		</div>
	</div>
</section>
<!--/Blog & Sidebar-->

<?php
get_footer();