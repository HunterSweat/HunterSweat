<?php 
$arilewp_main_slider_options = get_theme_mod('arilewp_main_slider_content');
$arilewp_main_slider_disabled = get_theme_mod('arilewp_main_slider_disabled', true);
$arilewp_slider_caption_layout = get_theme_mod('arilewp_slider_caption_layout', 'arilewp_slider_captoin_layout1');
$arilewp_main_slider_overlay_disable = get_theme_mod('arilewp_main_slider_overlay_disable', true);
$arilewp_main_slider_overlay_color = get_theme_mod('arilewp_main_slider_overlay_color', 'rgba(0, 0, 0, .35)');
?>
<?php if( $arilewp_main_slider_disabled == true ): ?>
<!-- Slider Section -->	
<section class="theme-main-slider" id="theme-slider">

    <div id="theme-main-slider" class="owl-carousel owl-theme" id="home">
		<?php 
			$t=true;
			$arilewp_main_slider_options = json_decode($arilewp_main_slider_options);
			if( $arilewp_main_slider_options!='' )
				{
					foreach($arilewp_main_slider_options as $slide_iteam){	
						$title = ! empty( $slide_iteam->title ) ? apply_filters( 'arilewp_translate_single_string', $slide_iteam->title, 'Theme Slider' ) : '';
						$img_description = ! empty( $slide_iteam->text ) ? apply_filters( 'arilewp_translate_single_string', $slide_iteam->text, 'Theme Slider' ) : '';
						$readmorelink = ! empty( $slide_iteam->link ) ? apply_filters( 'arilewp_translate_single_string', $slide_iteam->link, 'Theme Slider' ) : '';	
						$readmore_button = ! empty( $slide_iteam->button_text ) ? apply_filters( 'arilewp_translate_single_string', $slide_iteam->button_text, 'Theme Slider' ) : '';
						if( !empty($slide_iteam->slide_format)){ 
							$slide_format = $slide_iteam->slide_format;
						} else{ $slide_format = 'left'; }
							if( !empty($slide_iteam->open_new_tab)){ 
								$open_new_tab = $slide_iteam->open_new_tab;
							} else{ $open_new_tab = 'no'; }
						if($arilewp_slider_caption_layout == 'arilewp_slider_captoin_layout1'){	
							if($slide_format == 'left'){ $slide_format_layout1 = ''; }
							if($slide_format == 'right'){ $slide_format_layout1 = 'align-right'; }
							if($slide_format == 'center'){ $slide_format_layout1 = 'align-center'; }
						}	
						
			?>
			<?php if($slide_iteam->image_url!=''){ ?>			
			<div class="item" style="background-image:url(<?php echo $slide_iteam->image_url; ?>);">
			<?php } ?>
			<?php if($title != '' || $img_description!= '' || $readmore_button!=''){ ?>
				<div class="container theme-slider-content">
					<div class="theme-text-<?php echo $slide_format; ?> <?php if($arilewp_slider_caption_layout == 'arilewp_slider_captoin_layout1') { echo 'theme-caption-bg '.$slide_format_layout1.''; } ?>">
					<?php if($arilewp_slider_caption_layout == 'arilewp_slider_captoin_layout2') { echo '<hr class="divider-sm-'.$slide_format.'">'; } ?>
					<?php if($title != ''){ ?>
						<h1 class="title-large"><?php echo $title; ?></h1>
				    <?php } ?>
					<?php if($img_description!= ''){ ?>
						<p class="description"><?php echo wp_kses_post( html_entity_decode( $img_description ) ); ?></p>
					<?php } ?>
					<?php if($readmore_button!='' ) { ?>
						<div class="mt-4 pt-2">
							<a href="<?php echo $readmorelink ;?>" <?php if($open_new_tab== 'yes' || $open_new_tab== '1') { echo "target='_blank'"; } ?> class="btn-small btn-default"><?php echo $readmore_button ?></a>
						</div>
                    <?php } ?>						
					</div>
				</div>
			<?php } ?>
			<?php if( $arilewp_main_slider_overlay_disable == true ): ?>
				<div class="overlay"></div>
			<?php endif; ?>
			</div>				
			<?php							
				}	
		    }
	        else { ?>
			<div class="item" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/slider/theme-slide1.jpg);">
				<div class="container theme-slider-content">
					<div class="theme-text-left <?php if($arilewp_slider_caption_layout == 'arilewp_slider_captoin_layout1') { echo 'theme-caption-bg'; } ?>">
					<?php if($arilewp_slider_caption_layout == 'arilewp_slider_captoin_layout2') { echo '<hr class="divider-sm-left">'; } ?>
						<h1 class="title-large"><?php esc_html_e('We Create Amazing WordPress Themes','arilewp'); ?></h1>
						<p class="description"><?php esc_html_e('We are very happy to present to you ArileWP, the powerful and flexible multi-purpose WordPress theme. Not only does ArileWP outstand with many new features but suitable for all creatives and businesses. Join 2500+ customers.','arilewp'); ?></p>
						<div class="mt-4 pt-2">
							<a href="#" class="btn-small btn-default"><?php esc_html_e('Check it out','arilewp'); ?></a>
						</div>							
					</div>
				</div>
				<?php if( $arilewp_main_slider_overlay_disable == true ): ?>
				    <div class="overlay"></div>
			    <?php endif; ?>
			</div>
			<div class="item" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/slider/theme-slide2.jpg);">
				<div class="container theme-slider-content">
					<div class="theme-text-left <?php if($arilewp_slider_caption_layout == 'arilewp_slider_captoin_layout1') { echo 'theme-caption-bg'; } ?>">
					<?php if($arilewp_slider_caption_layout == 'arilewp_slider_captoin_layout2') { echo '<hr class="divider-sm-left">'; } ?>
						<h1 class="title-large"><?php esc_html_e('Best Digital Marketing Solutions','arilewp'); ?></h1>
						<p class="description"><?php esc_html_e('We are very happy to present to you ArileWP, the powerful and flexible multi-purpose WordPress theme. Not only does ArileWP outstand with many new features but suitable for all creatives and businesses. Join 2500+ customers.','arilewp'); ?></p>
						<div class="mt-4 pt-2">
							<a href="#" class="btn-small btn-default"><?php esc_html_e('Check it out','arilewp'); ?></a>
						</div>							
					</div>
				</div>
				<?php if( $arilewp_main_slider_overlay_disable == true ): ?>
				    <div class="overlay"></div>
			    <?php endif; ?>
			</div>
			<div class="item" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/slider/theme-slide3.jpg);">
				<div class="container theme-slider-content">
					<div class="theme-text-left <?php if($arilewp_slider_caption_layout == 'arilewp_slider_captoin_layout1') { echo 'theme-caption-bg'; } ?>">
					<?php if($arilewp_slider_caption_layout == 'arilewp_slider_captoin_layout2') { echo '<hr class="divider-sm-left">'; } ?>
						<h1 class="title-large"><?php esc_html_e('We Are Very Happy to Present to You ArileWP','arilewp'); ?></h1>
						<p class="description"><?php esc_html_e('We are very happy to present to you ArileWP, the powerful and flexible multi-purpose WordPress theme. Not only does ArileWP outstand with many new features but suitable for all creatives and businesses. Join 2500+ customers.','arilewp'); ?></p>
						<div class="mt-4 pt-2">
							<a href="#" class="btn-small btn-default"><?php esc_html_e('Check it out','arilewp'); ?></a>
						</div>							
					</div>
				</div>
				<?php if( $arilewp_main_slider_overlay_disable == true ): ?>
				    <div class="overlay"></div>
			    <?php endif; ?>
			</div>
	        <?php } ?>
		</div>
</section>
<?php endif; ?>