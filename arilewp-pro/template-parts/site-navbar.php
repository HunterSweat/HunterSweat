<?php 
$arilewp_main_header_style = get_theme_mod('arilewp_main_header_style', 'standard');
$arilewp_menu_style = get_theme_mod('arilewp_menu_style', 'sticky');   
$arilewp_menu_container_size = get_theme_mod('arilewp_menu_container_size', 'container-full');  
$arilewp_cart_icon_disabled = get_theme_mod('arilewp_cart_icon_disabled', true); 
$arilewp_search_icon_disabled = get_theme_mod('arilewp_search_icon_disabled', true); 
$arilewp_quote_button_disabled = get_theme_mod('arilewp_quote_button_disabled', true);
$arilewp_quote_button_text = get_theme_mod('arilewp_quote_button_text', 'Get a Quote');
$arilewp_quote_button_link = get_theme_mod('arilewp_quote_button_link', 'localhost/testsite/about');
$arilewp_quote_button_open_new_tab_disabled = get_theme_mod('arilewp_quote_button_open_new_tab_disabled', true);
if($arilewp_quote_button_open_new_tab_disabled == true):
$button_target = 'target="_blank"';
else: $button_target = ''; endif;
 ?>
 
 <?php if($arilewp_main_header_style != 'center_logo'){ ?>
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg not-sticky navbar-light<?php if($arilewp_main_header_style == 'overlap_classic'){ echo ' navbar-header-wrap classic-header'; }?><?php if($arilewp_main_header_style == 'transparent' && is_page_template('page-templates/frontpage.php')){ echo ' navbar-header-wrap'; }?> <?php if($arilewp_menu_style == 'sticky'){echo 'header-sticky'; }?>">
		<div class="<?php echo $arilewp_menu_container_size; ?>">
			<div class="row align-self-center">
			
				<div class="align-self-center">	
					<?php echo arilewp_header_logo(); ?>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
				</div>

				<?php 
				$wooshop_cart = '<ul class="%2$s">%3$s';
				 
				$wooshop_cart .= '<div class="themes-header-top">';
				 
				if($arilewp_cart_icon_disabled == true): 
				 
				 if ( class_exists( 'WooCommerce' ) ) {
					$wooshop_cart .= '<div class="woo-cart-block float-left">';

							global $woocommerce; 
							$link = function_exists( 'wc_get_cart_url' ) ? wc_get_cart_url() : $woocommerce->cart->get_cart_url();
							$wooshop_cart .= '<a class="cart-icon" href="'.$link.'" >';	
							if ($woocommerce->cart->cart_contents_count == 0){
								$wooshop_cart .= '<i class="fa fa-shopping-basket" aria-hidden="true"></i>';
							}else{
								$wooshop_cart .= '<i class="fa fa-shopping-basket" aria-hidden="true"></i>'; }   
								$wooshop_cart .= '</a>';
								$wooshop_cart .= '<a href="'.$link.'" ><span class="cart-total">
									'.sprintf(_n('%d item', $woocommerce->cart->cart_contents_count, 'arilewp'), $woocommerce->cart->cart_contents_count).'</span></a>'; $wooshop_cart .= '</div>'; }
				endif;					
						if($arilewp_search_icon_disabled == true): 							
						$wooshop_cart .= '<div class="theme-search-block float-left">';
						$wooshop_cart .= '<a href="#search-popup"><i class="fa fa-search"></i></a>';
						$wooshop_cart .= '</div>';
						endif;
						if($arilewp_quote_button_disabled == true):
						$wooshop_cart .= '<div class="pl-4 float-left">';
						$wooshop_cart .= '<a href="'.$arilewp_quote_button_link.'" '.$button_target.' class="btn-ex-small btn-border">'.$arilewp_quote_button_text.'</a>';					
						endif;
					$wooshop_cart .= '</ul>';
				?>
						<?php
							wp_nav_menu( array(
								 'theme_location'  => 'primary',
								 'container'       => 'div',
								 'container_class' => 'collapse navbar-collapse',
								 'container_id' => 'navbarNavDropdown',
								 'menu_class'      => 'nav navbar-nav m-right-auto',
								 'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
								 'items_wrap'  => $wooshop_cart,
								 'walker'          => new wp_bootstrap_navwalker()
							) );
							
						?>
				
			</div>
		</div>
	</nav>
	<!-- /End of Navbar -->
	
 <?php } ?>
 
 <?php if($arilewp_main_header_style == 'center_logo'){ ?>
 
	<!-- Header Center Logo -->
	<section class="theme-header-logo-center">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					
						<?php echo arilewp_header_logo(); ?>
														
				</div>
			</div>	
		</div>
	</section>
	<!-- /End of Header Center Logo -->
 
 
	<!-- Navbar Header Center -->
	<nav class="navbar navbar-expand-lg not-sticky navbar-light navbar-header-center <?php if($arilewp_menu_style == 'sticky'){echo 'header-sticky'; }?>">
		<div class="<?php echo $arilewp_menu_container_size; ?>">
			<div class="row align-self-center">
			
				<div class="align-self-center">	
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
				</div>

				<?php 
				$wooshop_cart = '<ul class="%2$s">%3$s';
				 
				$wooshop_cart .= '<div class="themes-header-top">';
				 
				if($arilewp_cart_icon_disabled == true): 
				 
				 if ( class_exists( 'WooCommerce' ) ) {
					$wooshop_cart .= '<div class="woo-cart-block float-left">';

							global $woocommerce; 
							$link = function_exists( 'wc_get_cart_url' ) ? wc_get_cart_url() : $woocommerce->cart->get_cart_url();
							$wooshop_cart .= '<a class="cart-icon" href="'.$link.'" >';	
							if ($woocommerce->cart->cart_contents_count == 0){
								$wooshop_cart .= '<i class="fa fa-shopping-basket" aria-hidden="true"></i>';
							}else{
								$wooshop_cart .= '<i class="fa fa-shopping-basket" aria-hidden="true"></i>'; }   
								$wooshop_cart .= '</a>';
								$wooshop_cart .= '<a href="'.$link.'" ><span class="cart-total">
									'.sprintf(_n('%d item', $woocommerce->cart->cart_contents_count, 'arilewp'), $woocommerce->cart->cart_contents_count).'</span></a>'; $wooshop_cart .= '</div>'; }
				endif;					
						if($arilewp_search_icon_disabled == true): 							
						$wooshop_cart .= '<div class="theme-search-block float-left">';
						$wooshop_cart .= '<a href="#search-popup"><i class="fa fa-search"></i></a>';
						$wooshop_cart .= '</div>';
						endif;
						if($arilewp_quote_button_disabled == true):
						$wooshop_cart .= '<div class="pl-4 float-left">';
						$wooshop_cart .= '<a href="'.$arilewp_quote_button_link.'" '.$button_target.' class="btn-ex-small btn-border">'.$arilewp_quote_button_text.'</a>';					
						endif;
					$wooshop_cart .= '</ul>';
				?>
				

				<?php
					wp_nav_menu( array(
						 'theme_location'  => 'primary',
						 'container'       => 'div',
						 'container_class' => 'collapse navbar-collapse',
						 'container_id' => 'navbarNavDropdown',
						 'menu_class'      => 'nav navbar-nav m-right-left-auto',
						 'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
						 'items_wrap'  => $wooshop_cart,
						 'walker'          => new wp_bootstrap_navwalker()
					) );
					
				?>
				
			</div>
		</div>
	</nav>
	<!-- /End of Navbar Header Center -->
 
 
  <?php } ?>
	
	<div id="search-popup">
		<button type="button" class="close">×</button>
		<form method="get" id="searchform" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
			<input type="search" placeholder="<?php esc_attr_e( 'Search here', 'arilewp' ); ?>" name="s" id="s" />
			<button type="submit" class="btn btn-primary"><?php esc_html_e( 'Search', 'arilewp' ); ?></button>
		</form>
	</div>
	