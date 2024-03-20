<?php 
$arilewp_client_options = get_theme_mod('arilewp_clients_content');
$arilewp_front_client_disabled = get_theme_mod('arilewp_front_client_disabled', true); 
$arilewp_client_layout = get_theme_mod('arilewp_client_layout', 'arilewp_client_layout1');
$arilewp_client_area_title = get_theme_mod('arilewp_client_area_title', 'Our Clients');
$arilewp_client2_column_layout = get_theme_mod('arilewp_client2_column_layout', '4');
$arilewp_client2_column_layout = 12/$arilewp_client2_column_layout;
$arilewp_client_front_container_size = get_theme_mod('arilewp_client_front_container_size', 'container');
$arilewp_client_area_before_content = get_theme_mod('arilewp_client_area_before_content');
$arilewp_client_area_after_content = get_theme_mod('arilewp_client_area_after_content');
if($arilewp_client_area_before_content != null):
echo do_shortcode($arilewp_client_area_before_content);
endif;
if($arilewp_front_client_disabled == true): ?>
<section class="theme-sponsors" id="theme-sponsors">
	<div class="<?php echo $arilewp_client_front_container_size; ?>">
	<?php 
	if($arilewp_client_layout == 'arilewp_client_layout2'){
		if($arilewp_client_area_title != null){
	?>
	    <div class="row">
			<div class="col-lg-12 col-md-12 col-xs-12">
				<div class="theme-section-module text-center">
					<h2 class="theme-section-title wow animate fadeInRight" data-wow-delay=".3s"><?php echo $arilewp_client_area_title; ?></h2>
					<div class="theme-separator-line-horrizontal-full wow animate fadeInUpBig" data-wow-delay=".3s"></div>
				</div>
			</div>						
		</div>
	<?php } } ?>
		<div class="row wow animate fadeInUp <?php if($arilewp_client_layout == 'arilewp_client_layout1'){ echo 'theme-sponsors-content'; } else { echo 'justify-content-sm-center grid-system-bordered custom-bordered'; } ?>" data-wow-delay=".3s">	
        <?php if($arilewp_client_layout == 'arilewp_client_layout1'){ ?>		
			<div id="sponsors-slider" class="owl-carousel owl-theme col-lg-12 wow animate fadeInUp" data-wow-delay=".3s">
		<?php } ?>
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
					
					<div class="<?php if($arilewp_client_layout == 'arilewp_client_layout1'){ echo 'item'; } else { echo 'col-md-6 col-lg-'.$arilewp_client2_column_layout.' grid-element';} ?>">	
                    <?php if($arilewp_client_layout == 'arilewp_client_layout2'){ ?>
					<figure class="box-icon-image">
					<?php } ?>
						<a href="<?php echo $client_link; ?>" <?php if($arilewp_client_layout == 'arilewp_client_layout1'){ echo 'class="clients-scroll"';  } ?> <?php if($open_new_tab == 'yes'){ echo 'target="_blank"';}?>>
							<img src="<?php echo $client_iteam->image_url; ?>" class="img-fluid" alt="Client">		
						</a>
					<?php if($arilewp_client_layout == 'arilewp_client_layout2'){ ?>	
					</figure>	
					<?php } ?>	
					</div>
					
				    <?php } } else { ?>
					
					<div class="<?php if($arilewp_client_layout == 'arilewp_client_layout1'){ echo 'item'; } else { echo 'col-md-6 col-lg-'.$arilewp_client2_column_layout.' grid-element';} ?>">	
                    <?php if($arilewp_client_layout == 'arilewp_client_layout2'){ ?>
					<figure class="box-icon-image">
					<?php } ?>					
						<a href="#" <?php if($arilewp_client_layout == 'arilewp_client_layout1'){ echo 'class="clients-scroll"';  } ?>>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsors/theme-client1.png" class="img-fluid" alt="Client 1">
						</a>
					<?php if($arilewp_client_layout == 'arilewp_client_layout2'){ ?>	
					</figure>	
					<?php } ?>
					</div>
					
					<div class="<?php if($arilewp_client_layout == 'arilewp_client_layout1'){ echo 'item'; } else { echo 'col-md-6 col-lg-'.$arilewp_client2_column_layout.' grid-element';} ?>">
                    <?php if($arilewp_client_layout == 'arilewp_client_layout2'){ ?>
					<figure class="box-icon-image">
					<?php } ?>					
						<a href="#" <?php if($arilewp_client_layout == 'arilewp_client_layout1'){ echo 'class="clients-scroll"';  } ?>>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsors/theme-client2.png" class="img-fluid" alt="Client 2">
						</a>
					<?php if($arilewp_client_layout == 'arilewp_client_layout2'){ ?>	
					</figure>	
					<?php } ?>
					</div>
					
					<div class="<?php if($arilewp_client_layout == 'arilewp_client_layout1'){ echo 'item'; } else { echo 'col-md-6 col-lg-'.$arilewp_client2_column_layout.' grid-element';} ?>">
                    <?php if($arilewp_client_layout == 'arilewp_client_layout2'){ ?>
					<figure class="box-icon-image">
					<?php } ?>					
						<a href="#" <?php if($arilewp_client_layout == 'arilewp_client_layout1'){ echo 'class="clients-scroll"';  } ?>>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsors/theme-client3.png" class="img-fluid" alt="Client 3">
						</a>
					<?php if($arilewp_client_layout == 'arilewp_client_layout2'){ ?>	
					</figure>	
					<?php } ?>
					</div>
					
					<div class="<?php if($arilewp_client_layout == 'arilewp_client_layout1'){ echo 'item'; } else { echo 'col-md-6 col-lg-'.$arilewp_client2_column_layout.' grid-element';} ?>">
                    <?php if($arilewp_client_layout == 'arilewp_client_layout2'){ ?>
					<figure class="box-icon-image">
					<?php } ?>					
						<a href="#" <?php if($arilewp_client_layout == 'arilewp_client_layout1'){ echo 'class="clients-scroll"';  } ?>>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsors/theme-client4.png" class="img-fluid" alt="Client 4">
						</a>
					<?php if($arilewp_client_layout == 'arilewp_client_layout2'){ ?>	
					</figure>	
					<?php } ?>
					</div>
					
					<div class="<?php if($arilewp_client_layout == 'arilewp_client_layout1'){ echo 'item'; } else { echo 'col-md-6 col-lg-'.$arilewp_client2_column_layout.' grid-element';} ?>">	
                    <?php if($arilewp_client_layout == 'arilewp_client_layout2'){ ?>
					<figure class="box-icon-image">
					<?php } ?>					
						<a href="#" <?php if($arilewp_client_layout == 'arilewp_client_layout1'){ echo 'class="clients-scroll"';  } ?>>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsors/theme-client5.png" class="img-fluid" alt="Client 5">
						</a>
					<?php if($arilewp_client_layout == 'arilewp_client_layout2'){ ?>	
					</figure>	
					<?php } ?>
					</div>
					
					<div class="<?php if($arilewp_client_layout == 'arilewp_client_layout1'){ echo 'item'; } else { echo 'col-md-6 col-lg-'.$arilewp_client2_column_layout.' grid-element';} ?>">	
                    <?php if($arilewp_client_layout == 'arilewp_client_layout2'){ ?>
					<figure class="box-icon-image">
					<?php } ?>					
						<a href="#" <?php if($arilewp_client_layout == 'arilewp_client_layout1'){ echo 'class="clients-scroll"';  } ?>>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsors/theme-client6.png" class="img-fluid" alt="Client 6">
						</a>
					<?php if($arilewp_client_layout == 'arilewp_client_layout2'){ ?>	
					</figure>	
					<?php } ?>
					</div>
					
					<div class="<?php if($arilewp_client_layout == 'arilewp_client_layout1'){ echo 'item'; } else { echo 'col-md-6 col-lg-'.$arilewp_client2_column_layout.' grid-element';} ?>">
                    <?php if($arilewp_client_layout == 'arilewp_client_layout2'){ ?>
					<figure class="box-icon-image">
					<?php } ?>					
						<a href="#" <?php if($arilewp_client_layout == 'arilewp_client_layout1'){ echo 'class="clients-scroll"';  } ?>>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsors/theme-client6.png" class="img-fluid" alt="Client 7">
						</a>
					<?php if($arilewp_client_layout == 'arilewp_client_layout2'){ ?>	
					</figure>	
					<?php } ?>
					</div>
					
					<div class="<?php if($arilewp_client_layout == 'arilewp_client_layout1'){ echo 'item'; } else { echo 'col-md-6 col-lg-'.$arilewp_client2_column_layout.' grid-element';} ?>">	
                    <?php if($arilewp_client_layout == 'arilewp_client_layout2'){ ?>
					<figure class="box-icon-image">
					<?php } ?>					
						<a href="#" <?php if($arilewp_client_layout == 'arilewp_client_layout1'){ echo 'class="clients-scroll"';  } ?>>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsors/theme-client6.png" class="img-fluid" alt="Client 8">
						</a>
					<?php if($arilewp_client_layout == 'arilewp_client_layout2'){ ?>	
					</figure>	
					<?php } ?>
					</div>
					
            <?php } ?>
            <?php if($arilewp_client_layout == 'arilewp_client_layout1'){ ?>
			</div>
			<?php } ?>	
		</div>
	</div>
</section>
<?php 
endif;
if($arilewp_client_area_after_content != null):
echo do_shortcode($arilewp_client_area_after_content);
endif;