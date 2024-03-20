<?php 
$arilewp_theme_info_content  = get_theme_mod( 'arilewp_theme_info_content');
$arilewp_theme_info_disabled = get_theme_mod('arilewp_theme_info_disabled', true);
$arilewp_theme_info_column_layout = get_theme_mod('arilewp_theme_info_column_layout', '3');
$arilewp_theme_info_column_layout = 12/$arilewp_theme_info_column_layout;
$arilewp_theme_info_back_color = get_theme_mod('arilewp_theme_info_back_color', '#f3f8fe');
$arilewp_theme_info_layout = get_theme_mod('arilewp_theme_info_layout', 'arilewp_theme_info_layout1');
?>
<?php if($arilewp_theme_info_disabled == true): ?>
<!-- Theme info Area -->
<?php if(!is_page_template('page-templates/about-one.php') && !is_page_template('page-templates/about-two.php')) { ?>
<div class="container <?php if($arilewp_theme_info_layout == 'arilewp_theme_info_layout2'){ echo 'vrsn-two';} ?>" id="theme-info-area">
<?php } ?>
	<div class="row theme-info-area wow animate fadeInDown" data-wow-delay=".3s" <?php if(is_page_template('page-templates/about-one.php') || is_page_template('page-templates/about-two.php')) {echo 'pb-1 mb-3';} ?>>
				<?php 
				if ( ! empty( $arilewp_theme_info_content ) ) {
				$allowed_html = array(
				'br'     => array(),
				'em'     => array(),
				'strong' => array(),
				'b'      => array(),
				'i'      => array(),
				);
				$arilewp_theme_info_content = json_decode( $arilewp_theme_info_content );
				foreach ( $arilewp_theme_info_content as $info_item ) {
				$icon = ! empty( $info_item->icon_value ) ? apply_filters( 'arilewp_translate_single_string',$info_item->icon_value, 'Theme Info Area' ) : '';
				$title = ! empty( $info_item->title ) ? apply_filters( 'arilewp_translate_single_string', $info_item->title, 'Theme Info Area' ) : '';
				$text = ! empty( $info_item->text ) ? apply_filters( 'arilewp_translate_single_string',
				$info_item->text, 'Theme Info Area' ) : '';
				$link = ! empty( $info_item->link ) ? apply_filters( 'arilewp_translate_single_string', $info_item->link, 'Theme Info Area' ) : '';
				
				if( !empty($info_item->open_new_tab)){ 
					$open_new_tab = $info_item->open_new_tab;
				} else{ $open_new_tab = 'no'; }
				
				?>
						<div class="col-lg-<?php echo $arilewp_theme_info_column_layout; ?> col-md-6 col-xs-12">
							<div class="media">
								<?php if ( ! empty( $icon ) ) :?>
									<i class="icon fa <?php echo esc_html( $icon ); ?>"></i>
								<?php endif; ?>	
								<div class="media-body align-self-center">
								<?php if ( ! empty( $title ) ) : 
									if(empty($link)){ ?>
										<h5 class="theme-info-area-title"><?php echo esc_html( $title ); ?></h5><?php
									}else{
										?>
										<h5 class="theme-info-area-title"><a href="<?php echo $link; ?>" <?php if($open_new_tab =='yes'){?>target="_blank" <?php }?> ><?php echo esc_html( $title ); ?></a></h5><?php
									} ?>
								<?php endif; ?>
								<?php if ( ! empty( $text ) ) : ?>		
									<span class="info-details"><?php echo wp_kses( html_entity_decode( $text ), $allowed_html ); ?></span>
								<?php endif; ?>			
								</div>
							</div>
						</div>
				<?php } } else { ?>
						<div class="col-lg-<?php echo $arilewp_theme_info_column_layout; ?> col-md-6 col-xs-12">
							<div class="media">
								<i class="icon fa fa-user-o"></i>
								<div class="media-body align-self-center">
									<h5 class="theme-info-area-title"><?php esc_html_e('Trusted Services','arilewp'); ?></h5>
									<span class="info-details"><?php esc_html_e('We are trusted our customers','arilewp'); ?></span>
								</div>
							</div>
						</div>
						<div class="col-lg-<?php echo $arilewp_theme_info_column_layout; ?> col-md-6 col-xs-12">
							<div class="media">
								<i class="icon fa fa-headphones"></i>
								<div class="media-body align-self-center">
									<h5 class="theme-info-area-title"><?php esc_html_e('24/7 Support','arilewp'); ?></h5>
									<span class="info-details"><?php esc_html_e('014 1547 925 - 123 4567 890','arilewp'); ?></span>
								</div>
							</div>
						</div>
						<div class="col-lg-<?php echo $arilewp_theme_info_column_layout; ?> col-md-6 col-xs-12">
							<div class="media">
								<i class="icon fa fa-trophy"></i>
								<div class="media-body align-self-center">
									<h5 class="theme-info-area-title"><?php esc_html_e('Well Experienced','arilewp'); ?></h5>
									<span class="info-details"><?php esc_html_e('18 years of experience','arilewp'); ?></span>
								</div>
							</div>
						</div>				
				<?php } ?>
	</div>
<?php if(!is_page_template('page-templates/about-one.php') || !is_page_template('page-templates/about-two.php')) { ?>
</div>
<?php } ?>
<?php endif; ?>