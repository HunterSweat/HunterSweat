<?php 
/**
 *
 * Template Name: Service Two
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
$arilewp_service_service_disabled = get_theme_mod('arilewp_service_service_disabled', true);
$arilewp_service_funfact_disabled = get_theme_mod('arilewp_service_funfact_disabled', true);
$arilewp_service_testimonial_disabled = get_theme_mod('arilewp_service_testimonial_disabled', true);
$arilewp_service_client_disabled = get_theme_mod('arilewp_service_client_disabled', true);
$arilewp_service_cta_disabled = get_theme_mod('arilewp_service_cta_disabled', true);
?>				

<!--Service-->
<?php if($arilewp_service_service_disabled == true) : ?>


<?php 
$arilewp_service_content  = get_theme_mod( 'arilewp_service_content'); 
$arilewp_service_area_title = get_theme_mod('arilewp_service_area_title', 'Our Services');
$arilewp_service_area_des = get_theme_mod('arilewp_service_area_des', '<b>We provide the</b> best services');
$arilewp_service_column_layout = get_theme_mod('arilewp_service_column_layout', '3');
$arilewp_service_column_layout = 12/$arilewp_service_column_layout;
$arilewp_service_front_container_size = get_theme_mod('arilewp_service_front_container_size', 'container');
?>
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
					<article class="service-content-two media">
					<?php if($features_item->choice == 'customizer_repeater_image'){ ?>
							<?php if ( ! empty( $image ) ) : ?>
							<figure class="service-content-thumbnail-two">
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
							<figure class="service-content-thumbnail-two">
									<?php if ( ! empty( $link ) ) : ?>
											<a href="<?php echo $link; ?>" <?php if($open_new_tab== 'yes' || $open_new_tab== 'on') { echo "target='_blank'"; } ?>><i class="fa <?php echo esc_html( $icon ); ?>"></i></a>
									<?php endif; ?>
									<?php if ( empty( $link ) ) : ?>
											<i class="fa <?php echo esc_html( $icon ); ?>"></i>	
									<?php endif; ?>
							</figure>
							<?php endif; ?>
						<?php } ?>
						
						<div class="media-body">
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
								<div class="service-links-two"><a href="<?php echo esc_url( $link ); ?>" <?php if($open_new_tab =='yes'){echo "target='_blank'";} ?> ><?php echo esc_html($button_text); ?></a></div>
								<?php else: ?>
								<div class="service-links-two"><a><?php echo esc_html($button_text); ?></a></div>
								<?php endif; ?>
							<?php endif; ?>	
						</div>
					</article>
				
			</div>
			<?php
			} } else { ?>
				<div class="col-lg-<?php echo $arilewp_service_column_layout; ?> col-md-6 col-sm-12">				
					<article class="service-content-two media">
						<figure class="service-content-thumbnail-two">	
							<a href="#"><i class="fa fa-mobile"></i></a>
						</figure>
					<div class="media-body">
						<h5 class="service-title"><a href="#"><?php esc_html_e('Pixel Perfect Design','arilewp'); ?></a></h5>
						<p><?php esc_html_e('Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.','arilewp'); ?></p>
						<div class="service-links-two"><a href="#"><?php esc_html_e('Read More','arilewp'); ?></a></div>
					</div>
					</article>
				</div>
				<div class="col-lg-<?php echo $arilewp_service_column_layout; ?> col-md-6 col-sm-12">				
					<article class="service-content-two media">
						<figure class="service-content-thumbnail-two">	
							<a href="#"><i class="fa fa-mobile"></i></a>
						</figure>
					<div class="media-body">
						<h5 class="service-title"><a href="#"><?php esc_html_e('WooCommerce Ready','arilewp'); ?></a></h5>
						<p><?php esc_html_e('Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.','arilewp'); ?></p>
						<div class="service-links-two"><a href="#"><?php esc_html_e('Read More','arilewp'); ?></a></div>
					</div>
					</article>
				</div>
				<div class="col-lg-<?php echo $arilewp_service_column_layout; ?> col-md-6 col-sm-12">				
					<article class="service-content-two media">
						<figure class="service-content-thumbnail-two">	
							<a href="#"><i class="fa fa-mobile"></i></a>
						</figure>
					<div class="media-body">
						<h5 class="service-title"><a href="#"><?php esc_html_e('Satisfied Clients','arilewp'); ?></a></h5>
						<p><?php esc_html_e('Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.','arilewp'); ?></p>
						<div class="service-links-two"><a href="#"><?php esc_html_e('Read More','arilewp'); ?></a></div>
					</div>
					</article>
				</div>	
			<?Php	
		    } 
			?>
		</div>
	</div>
</section>
<?php endif; ?>
<!-- /Service -->


<!-- funfact-->
<?php if($arilewp_service_funfact_disabled == true) :

$arilewp_funfact_content  = get_theme_mod( 'arilewp_funfact_content');
$arilewp_funfact_overlay_disable = get_theme_mod('arilewp_funfact_overlay_disable', true);
$arilewp_funfact_column_layout = get_theme_mod('arilewp_funfact_column_layout', '4');
$arilewp_funfact_column_layout = 12/$arilewp_funfact_column_layout;
$arilewp_funfact_front_container_size = get_theme_mod('arilewp_funfact_front_container_size', 'container');
?>
<section class="theme-funfact vrsn-two bg-theme-grey" id="theme-funfact">
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
							<div class="theme-funfact-inner media wow animate fadeInUp" data-wow-delay=".3s">
								<?php if ( ! empty( $icon ) ) :?>
									<i class="fa <?php echo esc_html( $icon ); ?> theme-funfact-icon"></i>
								<?php endif; ?>
							<div class="media-body">
								<?php if ( ! empty( $text ) ) : ?>	
									<h2 class="theme-funfact-title"><?php echo wp_kses( html_entity_decode( $text ), $allowed_html ); ?></h2>
								<?php endif; ?>
								<?php if ( ! empty( $title ) ) : ?>	
									<p><?php echo esc_html( $title ); ?></p>
								<?php endif; ?>		
							</div>							
								
							</div>  
						</div>
				<?php } } else { ?>				
						<div class="col-lg-<?php echo $arilewp_funfact_column_layout; ?> col-md-6 col-sm-12">		
							<div class="theme-funfact-inner media wow animate fadeInLeft" data-wow-delay=".3s">
								<i class="fa fa-coffee theme-funfact-icon"></i>
							<div class="media-body">
							    <h2 class="theme-funfact-title"><?php _e('507','arilewp'); ?></h2>
								<p><?php esc_html_e('Coffee Cups','arilewp'); ?></p>
							</div>
							</div>  
						</div>
						<div class="col-lg-<?php echo $arilewp_funfact_column_layout; ?> col-md-6 col-sm-12">		
							<div class="theme-funfact-inner media wow animate fadeInLeft" data-wow-delay=".3s">
								<i class="fa fa-briefcase theme-funfact-icon"></i>
								<div class="media-body">
									<h2 class="theme-funfact-title"><?php _e('175','arilewp'); ?></h2>
									<p><?php esc_html_e('Projects','arilewp'); ?></p>
								</div>					
							</div>  
						</div>
						<div class="col-lg-<?php echo $arilewp_funfact_column_layout; ?> col-md-6 col-sm-12">	
							<div class="theme-funfact-inner media wow animate fadeInRight" data-wow-delay=".3s">
								<i class="fa fa-line-chart theme-funfact-icon"></i>
								<div class="media-body">
									<h2 class="theme-funfact-title"><?php _e('98%','arilewp'); ?></h2>
									<p><?php esc_html_e('Business Growth','arilewp'); ?></p>
								</div>	
							</div>  
						</div>
						<div class="col-lg-<?php echo $arilewp_funfact_column_layout; ?> col-md-6 col-sm-12">		
							<div class="theme-funfact-inner media wow animate fadeInRight" data-wow-delay=".3s">
								<i class="fa fa-smile-o theme-funfact-icon"></i>
								<div class="media-body">
									<h2 class="theme-funfact-title"><?php _e('125','arilewp'); ?></h2>
									<p><?php esc_html_e('Happy Clients','arilewp'); ?></p>
								</div>	
							</div>  
						</div>
				<?php } ?>
		    </div>	 
	</div>
</section>
<?php endif; ?> 
<!-- /funfact-->

<!--Testimonial-->
<?php if($arilewp_service_testimonial_disabled == true): 

$arilewp_testimonial_options = get_theme_mod('arilewp_testimonial_content');
$arilewp_testimonial_area_title = get_theme_mod('arilewp_testimonial_area_title', 'Testimonials');
$arilewp_testimonial_area_des = get_theme_mod('arilewp_testimonial_area_des', '<b>What clients</b>  are say');
$arilewp_testimonial_front_container_size = get_theme_mod('arilewp_testimonial_front_container_size', 'container'); 
$arilewp_testimonial_overlay_disable = get_theme_mod('arilewp_testimonial_overlay_disable', false);
?>
<section class="theme-block theme-testimonial vrsn-two theme-bg-default" id="theme-testimonial">

    <?php if($arilewp_testimonial_overlay_disable == true) {?>
		<div class="overlay"></div>
	<?php } ?>
	
	<div class="<?php echo $arilewp_testimonial_front_container_size; ?>">	
	     <?php if($arilewp_testimonial_area_title != null || $arilewp_testimonial_area_des != null): ?>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-xs-12">
					<div class="theme-section-module text-center">
					<?php if($arilewp_testimonial_area_title != null): ?>
						<p class="theme-section-subtitle text-light wow animate fadeInLeft" data-wow-delay=".3s"><?php echo $arilewp_testimonial_area_title; ?></p>
					<?php endif; ?>
					<?php if($arilewp_testimonial_area_des != null): ?>
						<h2 class="theme-section-title text-light wow animate fadeInRight" data-wow-delay=".3s"><?php echo $arilewp_testimonial_area_des; ?></h2>
					<?php endif; ?>
						<div class="theme-separator-line-horrizontal-full theme-bg-light wow animate fadeInUpBig" data-wow-delay=".3s"></div>
					</div>
				</div>
			</div>
	    <?php endif; ?>
			<div class="row theme-testimonial-content wow animate fadeInUp" data-wow-delay=".3s">
				<div id="testimonial-slider" class="owl-carousel owl-theme col-md-12">
					<?php
					$arilewp_testimonial_options = json_decode($arilewp_testimonial_options);
					if( $arilewp_testimonial_options!='' )
						{
						$allowed_html = array(
								'br'     => array(),
								'em'     => array(),
								'strong' => array(),
								'b'      => array(),
								'i'      => array(),
								);	
							
					foreach($arilewp_testimonial_options as $testimonial_iteam){ 
					
							$title = ! empty( $testimonial_iteam->title ) ? apply_filters( 'arilewp_translate_single_string', $testimonial_iteam->title, 'Theme Testimonial' ) : '';
							$test_desc = ! empty( $testimonial_iteam->text ) ? apply_filters( 'arilewp_translate_single_string', $testimonial_iteam->text, 'Theme Testimonial' ) : '';
							$test_link     = ! empty( $testimonial_iteam->link ) ? apply_filters( 'arilewp_translate_single_string', $testimonial_iteam->link, 'Theme Testimonial' ) : '';
								if( !empty($testimonial_iteam->open_new_tab)){ 
									$open_new_tab = $testimonial_iteam->open_new_tab;
								} else{ $open_new_tab = 'no'; }
							$designation = ! empty( $testimonial_iteam->designation ) ? apply_filters( 'arilewp_translate_single_string', $testimonial_iteam->designation, 'Theme Testimonial' ) : '';
					?>
					    <div class="item">
						    <article class="theme-testimonial-block vrsn-two">
								<div class="testimonial-content vrsn-two">
									<?php if($test_desc != null): ?>
										<p><?php echo wp_kses( html_entity_decode( $test_desc ), $allowed_html ); ?></p>
									<?php endif; ?>	
								</div>
								<div class="media">
									<?php if($testimonial_iteam->image_url != null): ?>
										<figure class="thumbnail">
										<?php if($test_link != null): ?>
											<a href="<?php echo $test_link; ?>" <?php if($open_new_tab == 'yes'){ echo 'target="_blank"';}?>>
												<img src="<?php echo $testimonial_iteam->image_url; ?>" class="img-fluid rounded-circle" alt="<?php echo $title; ?>" >
											</a>
										<?php endif; ?>
										<?php if($test_link == null): ?>
												<img src="<?php echo $testimonial_iteam->image_url; ?>" class="img-fluid rounded-circle" alt="<?php echo $title; ?>" >
										<?php endif; ?>
										</figure>
									<?php endif; ?>	
									<div class="media-body align-self-center">
										<?php if($title != null): ?>	
											<cite class="name">
											<?php if($test_link != null): ?>	
												<a href="<?php echo $test_link; ?>" <?php if($open_new_tab == 'yes'){ echo 'target="_blank"';}?>><?php echo $title; ?> </a>
											<?php else: ?>
												<?php echo $title; ?>
											<?php endif; ?>  
											</cite>
										<?php endif; ?>		
										<?php if($designation != null): ?>	
											<span class="position"><?php echo $designation; ?></span>
										<?php endif; ?>	
									</div>
								</div>
							</article>	
					    </div>
						<?php } } else 
					{ ?>
				    <div class="item">
	                    <article class="theme-testimonial-block vrsn-two">								
							<div class="testimonial-content vrsn-two">
								<p><?php esc_html_e('"You guys are legendary! You guys are great and having amazing support & service. I couldn’t ask for any better. Thank you!"', 'arilewp'); ?></p>
							</div>	
							<div class="media">
								<figure class="thumbnail">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonial/theme-testi1.jpg" class="img-fluid rounded-circle" alt="<?php echo 'Olivia Kevinson'; ?>">
								</figure>
								<div class="media-body align-self-center">
									<cite class="name"><?php echo 'Olivia Kevinson'; ?></cite>
									<span class="position"><?php esc_html_e('Founder', 'arilewp'); ?></span>
								</div>
							</div>
						</article>	
					</div>
				    <div class="item">
	                    <article class="theme-testimonial-block vrsn-two">								
							<div class="testimonial-content vrsn-two">
								<p><?php esc_html_e('"You guys are legendary! You guys are great and having amazing support & service. I couldn’t ask for any better. Thank you!"', 'arilewp'); ?></p>
							</div>	
							<div class="media">
								<figure class="thumbnail">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonial/theme-testi1.jpg" class="img-fluid rounded-circle" alt="<?php echo 'Mitchell Harris'; ?>">
								</figure>
								<div class="media-body align-self-center">
									<cite class="name"><?php echo 'Mitchell Harris'; ?></cite>
									<span class="position"><?php esc_html_e('Financer', 'arilewp'); ?></span>
								</div>
							</div>
						</article>	
					</div>
				    <div class="item">
	                    <article class="theme-testimonial-block vrsn-two">								
							<div class="testimonial-content vrsn-two">
								<p><?php esc_html_e('"You guys are legendary! You guys are great and having amazing support & service. I couldn’t ask for any better. Thank you!"', 'arilewp'); ?></p>
							</div>	
							<div class="media">
								<figure class="thumbnail">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonial/theme-testi1.jpg" class="img-fluid rounded-circle" alt="<?php echo 'Julia Cloe'; ?>">
								</figure>
								<div class="media-body align-self-center">
									<cite class="name"><?php echo 'Julia Cloe'; ?></cite>
									<span class="position"><?php esc_html_e('Sales Manager', 'arilewp'); ?></span>
								</div>
							</div>
						</article>	
					</div>
				<?php } ?>
			    </div>
            </div>
	</div>		
</section>
<?php endif; ?>
<!-- /Testimonial-->



<!-- cta-->
<?php if($arilewp_service_cta_disabled == true) :
 
$arilewp_cta_area_title = get_theme_mod('arilewp_cta_area_title', 'Want to work with us?');
$arilewp_cta_area_subtitle = get_theme_mod('arilewp_cta_area_subtitle', 'Get Started Today.');
$arilewp_cta_area_des = get_theme_mod('arilewp_cta_area_des', 'Also, people love our theme for these wonderful and efficient features which give the user complete freedom to manage theme.');
$arilewp_cta_button_text = get_theme_mod('arilewp_cta_button_text', 'Contact Us');
$arilewp_cta_button_link = get_theme_mod('arilewp_cta_button_link', '#');
$arilewp_callout_video_disabled = get_theme_mod('arilewp_callout_video_disabled', true); 
$arilewp_callout_video_link = get_theme_mod('arilewp_callout_video_link', 'https://www.youtube.com/embed/sVzKavzIKDI');
$arilewp_video_text = get_theme_mod('arilewp_video_text', 'Watch Now');
$arilewp_cta_open_new_tab_disabled = get_theme_mod('arilewp_cta_open_new_tab_disabled', true); 
$arilewp_cta_front_container_size = get_theme_mod('arilewp_cta_front_container_size', 'container'); ?>
	<section class="theme-cta" id="theme-cta">
		<div class="theme-cta-overlay"></div>
	
		<div class="<?php echo $arilewp_cta_front_container_size; ?>">			
			<div class="row">
			
			<div class="<?php if($arilewp_callout_video_disabled == true){echo 'col-lg-8 col-md-8';} else{ echo 'col-lg-12 col-md-12';}?> col-sm-12">
					<div class="cta-block wow animate fadeInLeft" data-wow-delay=".3s">
					<?php if($arilewp_cta_area_title != null): ?>
						<h5 class="small-title text-white"><?php echo $arilewp_cta_area_title; ?></h5>
					<?php endif;  ?>
					<?php if($arilewp_cta_area_subtitle != null): ?>
						<h2 class="title text-white"><?php echo $arilewp_cta_area_subtitle; ?></h2>
					<?php endif;  ?>
                    <?php if($arilewp_cta_area_des != null): ?>						
						<p class="text-white"><?php echo $arilewp_cta_area_des; ?></p>
					<?php endif;  ?>
					<?php if($arilewp_cta_button_text != null): ?>
						<div class="mx-auto mt-3">
							<a href="<?php echo $arilewp_cta_button_link; ?>" <?php if($arilewp_cta_open_new_tab_disabled == true){?>target="_blank" <?php }?> class="btn-small btn-default"><?php echo $arilewp_cta_button_text; ?></a>
						</div>
					<?php endif;  ?>
					</div>
				</div>	
				<?php if($arilewp_callout_video_disabled == true): ?>				
				<div class="col-lg-4 col-md-4 col-sm-12 align-self-center">
					<div class="youtube-click wow animate fadeInRight" data-wow-delay=".3s">
						<h4 class="text-white"><a href="" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-play"></i><?php echo $arilewp_video_text; ?></a></h4>
					</div>	
					<!-- Modal -->
					<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
							<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<div class="embed-responsive embed-responsive-16by9">
									<iframe class="embed-responsive-item" src="<?php echo $arilewp_callout_video_link; ?>" allowfullscreen></iframe>
								</div>
								</div>
							</div>
						</div>
					</div>					
				</div>
				<?php endif; ?> 
								
			</div>
		</div>
	</section>
<?php endif; ?> 
<!-- /cta-->


<!-- Client-->
<?php if($arilewp_service_client_disabled == true) : 

$arilewp_client_options = get_theme_mod('arilewp_clients_content');
$arilewp_client_area_title = get_theme_mod('arilewp_client_area_title', 'Our Clients');
$arilewp_client2_column_layout = get_theme_mod('arilewp_client2_column_layout', '4');
$arilewp_client2_column_layout = 12/$arilewp_client2_column_layout;
$arilewp_client_front_container_size = get_theme_mod('arilewp_client_front_container_size', 'container');
?>
<section class="theme-sponsors" id="theme-sponsors">
	<div class="<?php echo $arilewp_client_front_container_size; ?>">
	    <div class="row">
			<div class="col-lg-12 col-md-12 col-xs-12">
				<div class="theme-section-module text-center">
					<h2 class="theme-section-title wow animate fadeInRight" data-wow-delay=".3s"><?php echo $arilewp_client_area_title; ?></h2>
					<div class="theme-separator-line-horrizontal-full wow animate fadeInUpBig" data-wow-delay=".3s"></div>
				</div>
			</div>						
		</div>
		<div class="row justify-content-sm-center grid-system-bordered custom-bordered wow animate fadeInUp" data-wow-delay=".3s">	
			        <?php
					$arilewp_client_options = json_decode($arilewp_client_options);
					if( $arilewp_client_options!='' )
						{
					foreach($arilewp_client_options as $client_iteam){ 
							$title = ! empty( $client_iteam->title ) ? apply_filters( 'arilewp_translate_single_string', $client_iteam->title, 'Theme Client' ) : '';
							$client_link = ! empty( $client_iteam->link ) ? apply_filters( 'arilewp_translate_single_string', $client_iteam->link, 'Theme Client' ) : '';
								if( !empty($client_iteam->open_new_tab)){ 
									$open_new_tab = $client_iteam->open_new_tab;
								} else{ $open_new_tab = 'no'; }	
					?>
					
					<div class="<?php echo 'col-md-6 col-lg-'.$arilewp_client2_column_layout.' grid-element'; ?>">	
						<figure class="box-icon-image">
							<a href="<?php echo $client_link; ?>" <?php if($open_new_tab == 'yes'){ echo 'target="_blank"';}?>>
								<img src="<?php echo $client_iteam->image_url; ?>" class="img-fluid" alt="Client">		
							</a>	
						</figure>	
					</div>
					
				    <?php } } else { ?>
					
					<div class="<?php echo 'col-md-6 col-lg-'.$arilewp_client2_column_layout.' grid-element'; ?>">	
						<figure class="box-icon-image">				
							<a href="#">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsors/theme-client1.png" class="img-fluid" alt="Client 1">
							</a>
						</figure>	
					</div>
					
		            <div class="<?php echo 'col-md-6 col-lg-'.$arilewp_client2_column_layout.' grid-element'; ?>">	
						<figure class="box-icon-image">				
							<a href="#">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsors/theme-client2.png" class="img-fluid" alt="Client 2">
							</a>
						</figure>	
					</div>
					
					<div class="<?php echo 'col-md-6 col-lg-'.$arilewp_client2_column_layout.' grid-element'; ?>">	
						<figure class="box-icon-image">				
							<a href="#">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsors/theme-client3.png" class="img-fluid" alt="Client 3">
							</a>
						</figure>	
					</div>
					
					<div class="<?php echo 'col-md-6 col-lg-'.$arilewp_client2_column_layout.' grid-element'; ?>">	
						<figure class="box-icon-image">				
							<a href="#">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsors/theme-client4.png" class="img-fluid" alt="Client 4">
							</a>
						</figure>	
					</div>
					
					<div class="<?php echo 'col-md-6 col-lg-'.$arilewp_client2_column_layout.' grid-element'; ?>">	
						<figure class="box-icon-image">				
							<a href="#">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsors/theme-client5.png" class="img-fluid" alt="Client 5">
							</a>
						</figure>	
					</div>
					
					<div class="<?php echo 'col-md-6 col-lg-'.$arilewp_client2_column_layout.' grid-element'; ?>">	
						<figure class="box-icon-image">				
							<a href="#">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsors/theme-client6.png" class="img-fluid" alt="Client 6">
							</a>
						</figure>	
					</div>
					
					<div class="<?php echo 'col-md-6 col-lg-'.$arilewp_client2_column_layout.' grid-element'; ?>">	
						<figure class="box-icon-image">				
							<a href="#">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsors/theme-client7.png" class="img-fluid" alt="Client 7">
							</a>
						</figure>	
					</div>
					
					<div class="<?php echo 'col-md-6 col-lg-'.$arilewp_client2_column_layout.' grid-element'; ?>">	
						<figure class="box-icon-image">				
							<a href="#">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsors/theme-client8.png" class="img-fluid" alt="Client 8">
							</a>
						</figure>	
					</div>
					
            <?php } ?>
		</div>
	</div>
</section>
<?php endif; ?> 
<!-- /Client-->


<?php 
get_footer();