<?php 
$arilewp_service_content  = get_theme_mod( 'arilewp_service_content'); 
$arilewp_service_area_disabled = get_theme_mod('arilewp_service_area_disabled', true); 
$arilewp_service_layout = get_theme_mod('arilewp_service_layout', 'arilewp_service_layout1');
$arilewp_service_area_title = get_theme_mod('arilewp_service_area_title', 'Our Services');
$arilewp_service_area_des = get_theme_mod('arilewp_service_area_des', '<b>We provide the</b> best services');
$arilewp_service_column_layout = get_theme_mod('arilewp_service_column_layout', '3');
$arilewp_service_column_layout = 12/$arilewp_service_column_layout;
$arilewp_service_front_container_size = get_theme_mod('arilewp_service_front_container_size', 'container');
$arilewp_service_area_before_content = get_theme_mod('arilewp_service_area_before_content');
$arilewp_service_area_after_content = get_theme_mod('arilewp_service_area_after_content');

if($arilewp_service_area_before_content != null):
echo do_shortcode($arilewp_service_area_before_content);
endif;
if($arilewp_service_area_disabled == true): ?>
<section class="theme-block theme-services" id="theme-services">
	<div class="<?php echo $arilewp_service_front_container_size; ?>">
	<?php  
	if( ($arilewp_service_area_title) || ($arilewp_service_area_des)!='' ): ?>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-xs-12">
					<div class="theme-section-module text-center">
					<?php if($arilewp_service_area_title != null): ?>
						<p class="theme-section-subtitle wow animate fadeInLeft" data-wow-delay=".3s"><?php echo $arilewp_service_area_title; ?></p>
					<?php endif; ?>
					<?php if($arilewp_service_area_des != null): ?>
						<h2 class="theme-section-title wow animate fadeInRight" data-wow-delay=".3s"><?php echo $arilewp_service_area_des; ?></h2>
					<?php endif; ?>
						<div class="theme-separator-line-horrizontal-full wow animate fadeInUpBig" data-wow-delay=".3s"></div>
					</div>
				</div>
			</div>
		<?php endif; ?>
	<div class="row theme-services-content wow animate fadeInUp" data-wow-delay=".3s">
		<?php
	
		if ( ! empty( $arilewp_service_content ) ) {
		$allowed_html = array(
		'br'     => array(),
		'em'     => array(),
		'strong' => array(),
		'b'      => array(),
		'i'      => array(),
		);
		$arilewp_service_content = json_decode( $arilewp_service_content );
		foreach ( $arilewp_service_content as $features_item ) {
			$icon = ! empty( $features_item->icon_value ) ? apply_filters( 'arilewp_translate_single_string', $features_item->icon_value, 'Theme Service' ) : '';
			$title = ! empty( $features_item->title ) ? apply_filters( 'arilewp_translate_single_string', $features_item->title, 'Theme Service' ) : '';
			$text = ! empty( $features_item->text ) ? apply_filters( 'arilewp_translate_single_string', $features_item->text, 'Theme Service' ) : '';
			$button_text = ! empty( $features_item->button_text ) ? apply_filters( 'arilewp_translate_single_string', $features_item->button_text, 'Theme Service' ) : '';
			$link = ! empty( $features_item->link ) ? apply_filters( 'arilewp_translate_single_string', $features_item->link, 'Theme Service' ) : '';
			$image = ! empty( $features_item->image_url ) ? apply_filters( 'arilewp_translate_single_string', $features_item->image_url, 'Theme Service' ) : '';

				if( !empty($features_item->open_new_tab)){ 
					$open_new_tab = $features_item->open_new_tab;
				} else{ $open_new_tab = 'no'; }

			?>
			<div class="col-lg-<?php echo $arilewp_service_column_layout; ?> col-md-6 col-sm-12">				
		        
					<article class="<?php if($arilewp_service_layout == 'arilewp_service_layout1'){echo 'service-content text-center';}else{echo 'service-content-two media';} ?>">
					
					<?php if($features_item->choice == 'customizer_repeater_image'){ ?>
							<?php if ( ! empty( $image ) ) : ?>
							<figure class="service-content-thumbnail<?php if($arilewp_service_layout == 'arilewp_service_layout2'){echo '-two';} ?>">
								<?php if ( ! empty( $link ) ) : ?>
									<a href="<?php echo $link; ?>" <?php if($open_new_tab== 'yes' || $open_new_tab== 'on') { echo "target='_blank'"; } ?>>
									   <img class="img-fluid" src="<?php echo esc_url( $image ); ?>" <?php if ( ! empty( $title ) ) : ?> alt="<?php echo esc_attr( $title ); ?>" title="<?php echo esc_attr( $title ); ?>" <?php endif; ?> />
									</a>
								<?php endif; ?>	
								<?php if ( empty( $link ) ) : ?>	
										<img class="img-fluid" src="<?php echo esc_url( $image ); ?>" <?php if ( ! empty( $title ) ) : ?> alt="<?php echo esc_attr( $title ); ?>" title="<?php echo esc_attr( $title ); ?>" <?php endif; ?> />
                                <?php endif; ?>	
                            </figure>								
							<?php endif; ?>
						<?php } else if($features_item->choice =='customizer_repeater_icon'){ ?>
							<?php if ( ! empty( $icon ) ) :?>
							<figure class="service-content-thumbnail<?php if($arilewp_service_layout == 'arilewp_service_layout2'){echo '-two';} ?>">
									<?php if ( ! empty( $link ) ) : ?>
											<a href="<?php echo $link; ?>" <?php if($open_new_tab== 'yes' || $open_new_tab== 'on') { echo "target='_blank'"; } ?>><i class="fa <?php echo esc_html( $icon ); ?>"></i></a>
									<?php endif; ?>
									<?php if ( empty( $link ) ) : ?>
											<i class="fa <?php echo esc_html( $icon ); ?>"></i>	
									<?php endif; ?>
							</figure>
							<?php endif; ?>
						<?php } ?>
						
						<?php if($arilewp_service_layout == 'arilewp_service_layout2'){echo '<div class="media-body">';} ?>
							<?php if ( ! empty( $title ) ) : 
								if(empty($link)){ ?>
									<h5 class="service-title"><?php echo esc_html( $title ); ?></h5><?php
								}else{
									?>
									<h5 class="service-title"><a href="<?php echo $link; ?>" <?php if($open_new_tab =='yes'){?>target="_blank" <?php }?> ><?php echo esc_html( $title ); ?></a></h5><?php
								}
							?>
							<?php endif; ?>
							<?php if ( ! empty( $text ) ) : ?>
								<p><?php echo wp_kses_post( html_entity_decode( $text ) ); ?></p>
							<?php endif; ?>
							
						<?php if(!empty($button_text)):?>
							<?php if(!empty($link)):?>
							<div class="service-links<?php if($arilewp_service_layout == 'arilewp_service_layout2'){echo '-two';} ?>"><a href="<?php echo esc_url( $link ); ?>" <?php if($open_new_tab =='yes'){echo "target='_blank'";} ?> ><?php echo esc_html($button_text); ?></a></div>
							<?php else: ?>
							<div class="service-links<?php if($arilewp_service_layout == 'arilewp_service_layout2'){echo '-two';} ?>"><a><?php echo esc_html($button_text); ?></a></div>
							<?php endif; ?>
						<?php endif; ?>	
							
							
						<?php if($arilewp_service_layout == 'arilewp_service_layout2'){echo '</div>';} ?>
						
					</article>
				
			</div>
			<?php
			} }
			else
			{   ?>
				<div class="col-lg-<?php echo $arilewp_service_column_layout; ?> col-md-6 col-sm-12">				
					<article class="<?php if($arilewp_service_layout == 'arilewp_service_layout1'){echo 'service-content text-center';}else{echo 'service-content-two media';} ?>">
						<figure class="service-content-thumbnail<?php if($arilewp_service_layout == 'arilewp_service_layout2'){echo '-two';} ?>">	
							<a href="#"><i class="fa fa-mobile"></i></a>
						</figure>
					<?php if($arilewp_service_layout == 'arilewp_service_layout2'){echo '<div class="media-body">';} ?>
						<h5 class="service-title"><a href="#"><?php esc_html_e('Pixel Perfect Design','arilewp'); ?></a></h5>
						<p><?php esc_html_e('Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.','arilewp'); ?></p>
						<div class="service-links<?php if($arilewp_service_layout == 'arilewp_service_layout2'){echo '-two';} ?>"><a href="#"><?php esc_html_e('Read More','arilewp'); ?></a></div>
					<?php if($arilewp_service_layout == 'arilewp_service_layout2'){echo '</div>';} ?>
					</article>
				</div>
				<div class="col-lg-<?php echo $arilewp_service_column_layout; ?> col-md-6 col-sm-12">				
					<article class="<?php if($arilewp_service_layout == 'arilewp_service_layout1'){echo 'service-content text-center';}else{echo 'service-content-two media';} ?>">
						<figure class="service-content-thumbnail<?php if($arilewp_service_layout == 'arilewp_service_layout2'){echo '-two';} ?>">	
							<a href="#"><i class="fa fa-opencart"></i></a>
						</figure>
					<?php if($arilewp_service_layout == 'arilewp_service_layout2'){echo '<div class="media-body">';} ?>
						<h5 class="service-title"><a href="#"><?php esc_html_e('WooCommerce Ready','arilewp'); ?></a></h5>
						<p><?php esc_html_e('Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.','arilewp'); ?></p>
						<div class="service-links<?php if($arilewp_service_layout == 'arilewp_service_layout2'){echo '-two';} ?>"><a href="#"><?php esc_html_e('Read More','arilewp'); ?></a></div>
					<?php if($arilewp_service_layout == 'arilewp_service_layout2'){echo '</div>';} ?>
					</article>
				</div>
				<div class="col-lg-<?php echo $arilewp_service_column_layout; ?> col-md-6 col-sm-12">				
					<article class="<?php if($arilewp_service_layout == 'arilewp_service_layout1'){echo 'service-content text-center';}else{echo 'service-content-two media';} ?>">
						<figure class="service-content-thumbnail<?php if($arilewp_service_layout == 'arilewp_service_layout2'){echo '-two';} ?>">	
							<a href="#"><i class="fa fa-users"></i></a>
						</figure>
					<?php if($arilewp_service_layout == 'arilewp_service_layout2'){echo '<div class="media-body">';} ?>
						<h5 class="service-title"><a href="#"><?php esc_html_e('Satisfied Clients','arilewp'); ?></a></h5>
						<p><?php esc_html_e('Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.','arilewp'); ?></p>
						<div class="service-links<?php if($arilewp_service_layout == 'arilewp_service_layout2'){echo '-two';} ?>"><a href="#"><?php esc_html_e('Read More','arilewp'); ?></a></div>
					<?php if($arilewp_service_layout == 'arilewp_service_layout2'){echo '</div>';} ?>
					</article>
				</div>		
			<?Php	
		    } 
			?>
		</div>
	</div>
</section>
<?php 
endif; 
if($arilewp_service_area_after_content != null):
echo do_shortcode($arilewp_service_area_after_content);
endif;
?>	