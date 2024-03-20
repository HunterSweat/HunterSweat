<?php 
$arilewp_page_header_disabled = get_theme_mod('arilewp_page_header_disabled', true);
$arilewp_page_header_layout = get_theme_mod('arilewp_page_header_layout', 'arilewp_page_header_layout1');
$arilewp_page_header_container_size = get_theme_mod('arilewp_page_header_container_size', 'container');
$arilewp_page_breadcrumbs_disabled = get_theme_mod('arilewp_page_breadcrumbs_disabled', true);
$arilewp_breadcrumb_separator = get_theme_mod('arilewp_breadcrumb_separator', '::');
$arilewp_page_header_background_color = get_theme_mod('arilewp_page_header_background_color');
?>
<?php if($arilewp_page_header_disabled == true): ?>
<!-- Theme Page Header Area -->		
	<section class="theme-page-header-area">
	<?php if($arilewp_page_header_background_color != null): ?>
		<div class="overlay" style="background-color: <?php echo $arilewp_page_header_background_color; ?>;"></div>
    <?php else: ?>
        <div class="overlay"></div>
	<?php endif; ?>	
		<div class="<?php echo $arilewp_page_header_container_size; ?>">
			<div class="row wow animate fadeInDown" data-wow-delay="0.3s">
			<?php if($arilewp_page_header_layout == 'arilewp_page_header_layout1') : ?>
				<div class="col-lg-12 col-md-12 col-sm-12">
				<?php 
                    if(is_home() || is_front_page()) {
                        echo '<div class="page-header-title text-center"><h1 class="text-white">'; echo single_post_title(); echo '</h1></div>';
                    } else{
                        arilewp_theme_page_header_title();
                    }

				if($arilewp_page_breadcrumbs_disabled == true):	
                    arilewp_page_header_breadcrumbs();	
                endif;					
				?>
				</div>
			<?php else: ?>
			    <div class="col-lg-6 col-md-6 col-sm-12">
			        <?php 
                    if(is_home() || is_front_page()) {
                        echo '<div class="page-header-title"><h1 class="text-white">'; echo single_post_title(); echo '</h1></div>';
                    } else{
                        arilewp_theme_page_header_title();
                    } ?>
			
			    </div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<?php 
						if($arilewp_page_breadcrumbs_disabled == true):	
                          arilewp_page_header_breadcrumbs();	
                        endif;	
			        ?>
			    </div>
			<?php endif; ?>
			</div>
		</div>	
	</section>	
<!-- Theme Page Header Area -->		
<?php endif; ?>