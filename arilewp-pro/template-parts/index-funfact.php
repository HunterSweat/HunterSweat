<?php 
$arilewp_funfact_content  = get_theme_mod( 'arilewp_funfact_content');
$arilewp_funfact_disabled = get_theme_mod('arilewp_funfact_disabled', true); 
$arilewp_funfact_layout = get_theme_mod('arilewp_funfact_layout', 'arilewp_funfact_layout1');
$arilewp_funfact_overlay_disable = get_theme_mod('arilewp_funfact_overlay_disable', true);
$arilewp_funfact_overlay_color = get_theme_mod('arilewp_funfact_overlay_color', 'rgba(0, 123, 255, 0.95)');
$arilewp_funfact_column_layout = get_theme_mod('arilewp_funfact_column_layout', '4');
$arilewp_funfact_column_layout = 12/$arilewp_funfact_column_layout;
$arilewp_funfact_front_container_size = get_theme_mod('arilewp_funfact_front_container_size', 'container');
$arilewp_funfact_area_before_content = get_theme_mod('arilewp_funfact_area_before_content');
$arilewp_funfact_area_after_content = get_theme_mod('arilewp_funfact_area_after_content');
if($arilewp_funfact_area_before_content != null):
echo do_shortcode($arilewp_funfact_area_before_content);
endif;
if($arilewp_funfact_disabled == true): ?>
<!-- Funfact Section -->
<section class="theme-funfact <?php if($arilewp_funfact_layout == 'arilewp_funfact_layout2'){echo 'vrsn-two';} ?>" id="theme-funfact">
<?php if($arilewp_funfact_overlay_disable == true): 
if($arilewp_funfact_layout != 'arilewp_funfact_layout2'){ ?>
	<div class="theme-funfact-overlay"></div>
<?php } endif; ?>	
		<div class="<?php echo $arilewp_funfact_front_container_size; ?>">
			<div class="row">
				<?php 
				if ( ! empty( $arilewp_funfact_content ) ) {
				$allowed_html = array(
				'br'     => array(),
				'em'     => array(),
				'strong' => array(),
				'b'      => array(),
				'i'      => array(),
				);
				$arilewp_funfact_content = json_decode( $arilewp_funfact_content );
				foreach ( $arilewp_funfact_content as $features_item ) {
				$icon = ! empty( $features_item->icon_value ) ? apply_filters( 'arilewp_translate_single_string',$features_item->icon_value, 'Theme Funfact' ) : '';
				$title = ! empty( $features_item->title ) ? apply_filters( 'arilewp_translate_single_string', $features_item->title, 'Theme Funfact' ) : '';
				$text = ! empty( $features_item->text ) ? apply_filters( 'arilewp_translate_single_string',
				$features_item->text, 'Theme Funfact' ) : '';
				?>
						<div class="col-lg-<?php echo $arilewp_funfact_column_layout; ?> col-md-6 col-sm-12">	
							<div class="theme-funfact-inner wow animate fadeInUp <?php if($arilewp_funfact_layout == 'arilewp_funfact_layout2'){echo 'media';} ?>" data-wow-delay=".3s">
								<?php if ( ! empty( $icon ) ) :?>
									<i class="fa <?php echo esc_html( $icon ); ?> theme-funfact-icon"></i>
								<?php endif; ?>	
                            <?php if($arilewp_funfact_layout == 'arilewp_funfact_layout1') : ?>
								<?php if ( ! empty( $title ) ) : ?>	
									<p class="text-white"><?php echo esc_html( $title ); ?></p>
								<?php endif; ?>	
								<?php if ( ! empty( $text ) ) : ?>	
									<h2 class="theme-funfact-title"><?php echo wp_kses( html_entity_decode( $text ), $allowed_html ); ?></h2>
								<?php endif; ?>	
							<?php endif; ?>
                            <?php if($arilewp_funfact_layout == 'arilewp_funfact_layout2') : ?>
							<div class="media-body">
								<?php if ( ! empty( $text ) ) : ?>	
									<h2 class="theme-funfact-title"><?php echo wp_kses( html_entity_decode( $text ), $allowed_html ); ?></h2>
								<?php endif; ?>
								<?php if ( ! empty( $title ) ) : ?>	
									<p><?php echo esc_html( $title ); ?></p>
								<?php endif; ?>		
							</div>
							<?php endif; ?>								
								
							</div>  
						</div>
				<?php } } else { ?>				
						<div class="col-lg-<?php echo $arilewp_funfact_column_layout; ?> col-md-6 col-sm-12">		
							<div class="theme-funfact-inner wow animate fadeInLeft <?php if($arilewp_funfact_layout == 'arilewp_funfact_layout2'){echo 'media';} ?>" data-wow-delay=".3s">
								<i class="fa fa-coffee theme-funfact-icon"></i>
							<?php if($arilewp_funfact_layout == 'arilewp_funfact_layout1') : ?>
								<p class="text-white"><?php esc_html_e('Coffee Cups','arilewp'); ?></p>
								<h2 class="theme-funfact-title"><?php _e('507','arilewp'); ?></h2>
							<?php endif; ?>
							<?php if($arilewp_funfact_layout == 'arilewp_funfact_layout2') : ?>
							<div class="media-body">
							    <h2 class="theme-funfact-title"><?php _e('507','arilewp'); ?></h2>
								<p><?php esc_html_e('Coffee Cups','arilewp'); ?></p>
							</div>
							<?php endif; ?>
							</div>  
						</div>
						<div class="col-lg-<?php echo $arilewp_funfact_column_layout; ?> col-md-6 col-sm-12">		
							<div class="theme-funfact-inner wow animate fadeInLeft <?php if($arilewp_funfact_layout == 'arilewp_funfact_layout2'){echo 'media';} ?>" data-wow-delay=".3s">
								<i class="fa fa-briefcase theme-funfact-icon"></i>
								<?php if($arilewp_funfact_layout == 'arilewp_funfact_layout1') : ?>
									<p class="text-white"><?php esc_html_e('Projects','arilewp'); ?></p>
									<h2 class="theme-funfact-title"><?php _e('175','arilewp'); ?></h2>
								<?php endif; ?>
								<?php if($arilewp_funfact_layout == 'arilewp_funfact_layout2') : ?>
								<div class="media-body">
									<h2 class="theme-funfact-title"><?php _e('175','arilewp'); ?></h2>
									<p><?php esc_html_e('Projects','arilewp'); ?></p>
								</div>
								<?php endif; ?>							
							</div>  
						</div>
						<div class="col-lg-<?php echo $arilewp_funfact_column_layout; ?> col-md-6 col-sm-12">	
							<div class="theme-funfact-inner wow animate fadeInRight <?php if($arilewp_funfact_layout == 'arilewp_funfact_layout2'){echo 'media';} ?>" data-wow-delay=".3s">
								<i class="fa fa-line-chart theme-funfact-icon"></i>
								<?php if($arilewp_funfact_layout == 'arilewp_funfact_layout1') : ?>
									<p class="text-white"><?php esc_html_e('Business Growth','arilewp'); ?></p>
									<h2 class="theme-funfact-title"><?php _e('98%','arilewp'); ?></h2>
								<?php endif; ?>
								<?php if($arilewp_funfact_layout == 'arilewp_funfact_layout2') : ?>
								<div class="media-body">
									<h2 class="theme-funfact-title"><?php _e('98%','arilewp'); ?></h2>
									<p><?php esc_html_e('Business Growth','arilewp'); ?></p>
								</div>
								<?php endif; ?>		
							</div>  
						</div>
						<div class="col-lg-<?php echo $arilewp_funfact_column_layout; ?> col-md-6 col-sm-12">		
							<div class="theme-funfact-inner wow animate fadeInRight <?php if($arilewp_funfact_layout == 'arilewp_funfact_layout2'){echo 'media';} ?>" data-wow-delay=".3s">
								<i class="fa fa-smile-o theme-funfact-icon"></i>
								<?php if($arilewp_funfact_layout == 'arilewp_funfact_layout1') : ?>
									<p class="text-white"><?php esc_html_e('Happy Clients','arilewp'); ?></p>
									<h2 class="theme-funfact-title"><?php _e('125','arilewp'); ?></h2>
								<?php endif; ?>
								<?php if($arilewp_funfact_layout == 'arilewp_funfact_layout2') : ?>
								<div class="media-body">
									<h2 class="theme-funfact-title"><?php _e('125','arilewp'); ?></h2>
									<p><?php esc_html_e('Happy Clients','arilewp'); ?></p>
								</div>
								<?php endif; ?>		
							</div>  
						</div>
				<?php } ?>
		    </div>	 
	</div>
</section>
<?php
endif;
if($arilewp_funfact_area_after_content != null):
echo do_shortcode($arilewp_funfact_area_after_content);
endif; 
?>