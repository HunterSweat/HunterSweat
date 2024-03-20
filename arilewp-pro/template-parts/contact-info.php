<?php 
$arilewp_contact_template_info_content  = get_theme_mod( 'arilewp_contact_template_info_content');
$arilewp_contact_info_column_layout = get_theme_mod('arilewp_contact_info_column_layout', '3');
$arilewp_contact_info_column_layout = 12/$arilewp_contact_info_column_layout;
?><!-- Contact info Area -->

    <div class="row">
		<?php 
				if ( ! empty( $arilewp_contact_template_info_content ) ) {
				$allowed_html = array(
				'br'     => array(),
				'em'     => array(),
				'strong' => array(),
				'b'      => array(),
				'i'      => array(),
				);
				$arilewp_contact_template_info_content = json_decode( $arilewp_contact_template_info_content );
				foreach ( $arilewp_contact_template_info_content as $info_item ) {
				$icon = ! empty( $info_item->icon_value ) ? apply_filters( 'arilewp_translate_single_string',$info_item->icon_value, 'Theme Contact Info' ) : '';
				$title = ! empty( $info_item->title ) ? apply_filters( 'arilewp_translate_single_string', $info_item->title, 'Theme Contact Info' ) : '';
				$text = ! empty( $info_item->text ) ? apply_filters( 'arilewp_translate_single_string',
				$info_item->text, 'Theme Contact Info' ) : '';
				$link = ! empty( $info_item->link ) ? apply_filters( 'arilewp_translate_single_string', $info_item->link, 'Theme Contact Info' ) : '';
				if( !empty($info_item->open_new_tab)){ 
					$open_new_tab = $info_item->open_new_tab;
				} else{ $open_new_tab = 'no'; }
				?>
						<div class="col-lg-<?php echo $arilewp_contact_info_column_layout; ?> col-md-6 col-sm-12">

                            <div class="theme-contact-widget text-center wow animate fadeInUp" data-wow-delay=".3s">
							
								<?php if ( ! empty( $icon ) ) :?>
									<i class="fa <?php echo esc_html( $icon ); ?>"></i>
								<?php endif; ?>	
								<?php if ( ! empty( $title ) ) : 
									if(empty($link)){ ?>
										<h5 class="theme-contact-widget-title"><?php echo esc_html( $title ); ?></h5><?php
									}else{
										?>
										<h5 class="theme-contact-widget-title"><a href="<?php echo $link; ?>" <?php if($open_new_tab =='yes'){?>target="_blank" <?php }?> ><?php echo esc_html( $title ); ?></a></h5><?php
									} ?>
								<?php endif; ?>
								<?php if ( ! empty( $text ) ) : ?>		
									<p class="theme-contact-widget-info"><?php echo wp_kses( html_entity_decode( $text ), $allowed_html ); ?></p>
								<?php endif; ?>

                            </div>
								
                        </div>
						
						
				<?php } } else { ?>
						<div class="col-lg-<?php echo $arilewp_contact_info_column_layout; ?> col-md-6 col-sm-12">				
							<div class="theme-contact-widget text-center wow animate fadeInUp" data-wow-delay=".3s">
								<i class="fa fa-phone"></i>						
								<h5 class="theme-contact-widget-title"><?php esc_html_e('Phone','arilewp'); ?></h5>
								<p class="theme-contact-widget-info"><?php esc_html_e('+14 1-800-1234-567','arilewp'); ?></p>
							</div>
						</div>	
						<div class="col-lg-<?php echo $arilewp_contact_info_column_layout; ?> col-md-6 col-sm-12">				
							<div class="theme-contact-widget text-center wow animate fadeInUp" data-wow-delay=".3s">
								<i class="fa fa-street-view"></i>						
								<h5 class="theme-contact-widget-title"><?php esc_html_e('Address','arilewp'); ?></h5>
								<p class="theme-contact-widget-info"><?php esc_html_e('2130 Fulton Street, San Francisco, USA','arilewp'); ?></p>
							</div>
						</div>	
						<div class="col-lg-<?php echo $arilewp_contact_info_column_layout; ?> col-md-6 col-sm-12">				
							<div class="theme-contact-widget text-center wow animate fadeInUp" data-wow-delay=".3s">
								<i class="fa fa-envelope-open-o"></i>						
								<h5 class="theme-contact-widget-title"><?php esc_html_e('Email','arilewp'); ?></h5>
								<p class="theme-contact-widget-info"><?php esc_html_e('info@arilewp.com','arilewp'); ?></p>
							</div>
						</div>					
		        <?php } ?>	
		
    </div>