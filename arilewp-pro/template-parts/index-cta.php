<?php 
$arilewp_cta_disabled = get_theme_mod('arilewp_cta_disabled', true); 
$arilewp_cta_area_title = get_theme_mod('arilewp_cta_area_title', 'Want to work with us?');
$arilewp_cta_area_subtitle = get_theme_mod('arilewp_cta_area_subtitle', 'Get Started Today.');
$arilewp_cta_area_des = get_theme_mod('arilewp_cta_area_des', 'Also, people love our theme for these wonderful and efficient features which give the user complete freedom to manage theme.');
$arilewp_cta_button_text = get_theme_mod('arilewp_cta_button_text', 'Contact Us');
$arilewp_cta_button_link = get_theme_mod('arilewp_cta_button_link', '#');
$arilewp_callout_video_disabled = get_theme_mod('arilewp_callout_video_disabled', true); 
$arilewp_callout_video_link = get_theme_mod('arilewp_callout_video_link', 'https://www.youtube.com/embed/oj0uS9ZlQHY');
$arilewp_video_text = get_theme_mod('arilewp_video_text', 'Watch Now');
$arilewp_cta_open_new_tab_disabled = get_theme_mod('arilewp_cta_open_new_tab_disabled', true); 
$arilewp_cta_front_container_size = get_theme_mod('arilewp_cta_front_container_size', 'container');
$arilewp_cta_area_before_content = get_theme_mod('arilewp_cta_area_before_content');
$arilewp_cta_area_after_content = get_theme_mod('arilewp_cta_area_after_content');
if($arilewp_cta_area_before_content != null):
echo do_shortcode($arilewp_cta_area_before_content);
endif;
if($arilewp_cta_disabled == true): ?>
	<!--Call to Action Section-->	
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
	<!--/End of Call to Action Section-->
<?php endif;
if($arilewp_cta_area_after_content != null):
echo do_shortcode($arilewp_cta_area_after_content);
endif;  ?>	