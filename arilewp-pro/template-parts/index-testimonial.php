<?php 
$arilewp_testimonial_options = get_theme_mod('arilewp_testimonial_content');
$arilewp_testimonial_disabled = get_theme_mod('arilewp_testimonial_disabled', true); 
$arilewp_testimonial_layout = get_theme_mod('arilewp_testimonial_layout', 'arilewp_testimonial_layout1');
$arilewp_testimonial_area_title = get_theme_mod('arilewp_testimonial_area_title', 'Testimonials');
$arilewp_testimonial_area_des = get_theme_mod('arilewp_testimonial_area_des', '<b>What clients</b>  are say');
$arilewp_testimonial_front_container_size = get_theme_mod('arilewp_testimonial_front_container_size', 'container');
$arilewp_testimonial_area_before_content = get_theme_mod('arilewp_testimonial_area_before_content');
$arilewp_testimonial_overlay_disable = get_theme_mod('arilewp_testimonial_overlay_disable', false); 
$arilewp_testimonial_area_after_content = get_theme_mod('arilewp_testimonial_area_after_content');
if($arilewp_testimonial_area_before_content != null):
echo do_shortcode($arilewp_testimonial_area_before_content);
endif;
if($arilewp_testimonial_disabled == true): 
?>
<section class="theme-block theme-testimonial <?php if($arilewp_testimonial_layout == 'arilewp_testimonial_layout2') { echo 'vrsn-two theme-bg-default'; } ?>" id="theme-testimonial">

	<?php if($arilewp_testimonial_overlay_disable == true) {?>
		<div class="overlay"></div>
	<?php } ?>

	<div class="<?php echo $arilewp_testimonial_front_container_size; ?>">	
	
	     <?php if($arilewp_testimonial_area_title != null || $arilewp_testimonial_area_des != null): ?>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-xs-12">
					<div class="theme-section-module text-center">
					<?php if($arilewp_testimonial_area_title != null): ?>
					<p class="theme-section-subtitle <?php if($arilewp_testimonial_layout == 'arilewp_testimonial_layout2') { echo 'text-light'; } ?> wow animate fadeInLeft" data-wow-delay=".3s"><?php echo $arilewp_testimonial_area_title; ?></p>
					<?php endif; ?>
					<?php if($arilewp_testimonial_area_des != null): ?>
						<h2 class="theme-section-title <?php if($arilewp_testimonial_layout == 'arilewp_testimonial_layout2') { echo 'text-light'; } ?> wow animate fadeInRight" data-wow-delay=".3s"><?php echo $arilewp_testimonial_area_des; ?></h2>
					<?php endif; ?>
						<div class="theme-separator-line-horrizontal-full <?php if($arilewp_testimonial_layout == 'arilewp_testimonial_layout2') { echo 'theme-bg-light'; } ?> wow animate fadeInUpBig" data-wow-delay=".3s"></div>
					</div>
				</div>
			</div>
	    <?php endif; ?>
			<div class="row theme-testimonial-content">
			
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
					    <div class="item wow animate slideInUp" data-wow-delay=".3s">
						<?php if($arilewp_testimonial_layout == 'arilewp_testimonial_layout2') { ?>
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
						<?php } else { ?>
							<article class="theme-testimonial-block">
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
							<div class="testimonial-content">
								<?php if($test_desc != null): ?>
									<p><?php echo wp_kses( html_entity_decode( $test_desc ), $allowed_html ); ?></p>
								<?php endif; ?>		
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
							</article>
						<?php } ?>
					    </div>
						<?php } } else 
					{ ?>
				
				<?php if($arilewp_testimonial_layout == 'arilewp_testimonial_layout2') { ?>
				    <div class="item wow animate slideInUp" data-wow-delay=".3s">
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
				    <div class="item wow animate slideInUp" data-wow-delay=".3s">
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
				   <div class="item wow animate slideInUp" data-wow-delay=".3s">
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
				<?php } else { ?>	
				
					<div class="item wow animate slideInUp" data-wow-delay=".3s">
						<article class="theme-testimonial-block">
							<figure class="thumbnail">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonial/theme-testi1.jpg" class="img-fluid rounded-circle" alt="<?php echo 'Olivia Kevinson'; ?>" >
							</figure>								
							<div class="testimonial-content">
								<p><?php esc_html_e('"You guys are legendary! You guys are great and having amazing support & service. I couldn’t ask for any better. Thank you!"', 'arilewp'); ?></p>
								<cite class="name"><?php echo 'Olivia Kevinson'; ?></cite>
								<span class="position"><?php esc_html_e('Founder', 'arilewp'); ?></span>
							</div>
						</article>	
					</div>
					<div class="item wow animate slideInUp" data-wow-delay=".3s">
						<article class="theme-testimonial-block">
							<figure class="thumbnail">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonial/theme-testi2.jpg" class="img-fluid rounded-circle" alt="<?php echo 'Mitchell Harris'; ?>" >
							</figure>								
							<div class="testimonial-content">
								<p><?php esc_html_e('"You guys are legendary! You guys are great and having amazing support & service. I couldn’t ask for any better. Thank you!"', 'arilewp'); ?></p>
								<cite class="name"><?php echo 'Mitchell Harris'; ?></cite>
								<span class="position"><?php esc_html_e('Financer', 'arilewp'); ?></span>
							</div>
						</article>	
					</div>
					<div class="item wow animate slideInUp" data-wow-delay=".3s">
						<article class="theme-testimonial-block">
							<figure class="thumbnail">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonial/theme-testi3.jpg" class="img-fluid rounded-circle" alt="<?php echo 'Julia Cloe'; ?>" >
							</figure>								
							<div class="testimonial-content">
								<p><?php esc_html_e('"You guys are legendary! You guys are great and having amazing support & service. I couldn’t ask for any better. Thank you!"', 'arilewp'); ?></p>
								<cite class="name"><?php echo 'Julia Cloe'; ?></cite>
								<span class="position"><?php esc_html_e('Sales Manager', 'arilewp'); ?></span>
							</div>
						</article>	
					</div>
				<?php } } ?>
			    </div>
            </div>
	</div>		
</section>
<?php 
endif;
if($arilewp_testimonial_area_after_content != null):
echo do_shortcode($arilewp_testimonial_area_after_content);
endif;
?>