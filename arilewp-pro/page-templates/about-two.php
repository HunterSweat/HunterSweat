<?php 
/**
 *
 * Template Name: About Two
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
$arilewp_about_site_info_disabled = get_theme_mod('arilewp_about_site_info_disabled', true);
$arilewp_about_funfact_disabled = get_theme_mod('arilewp_about_funfact_disabled', true);
$arilewp_about_team_disabled = get_theme_mod('arilewp_about_team_disabled', true);
$arilewp_about_cta_disabled = get_theme_mod('arilewp_about_cta_disabled', true);
$arilewp_about_client_disabled = get_theme_mod('arilewp_about_client_disabled', true); ?>				
<!-- About-->
<section class="theme-block theme-about">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">				
		    <?php  the_post(); 
            the_content(); ?> 
			</div>	
		</div>
		<?php if($arilewp_about_site_info_disabled == true) :  ?>
		    <?php get_template_part( 'template-parts/index', 'siteinfo' ); ?>
		<?php endif; ?> 
	</div>
</section>
<!-- /About-->

<!-- cta-->
<?php if($arilewp_about_cta_disabled == true) :
 
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

<!-- Team -->
<?php if($arilewp_about_team_disabled == true) :

$arilewp_team_area_title = get_theme_mod('arilewp_team_area_title', 'Our Team');
$arilewp_team_area_des = get_theme_mod('arilewp_team_area_des', '<b>Talented</b> People');
$arilewp_team_front_container_size = get_theme_mod('arilewp_team_front_container_size', 'container');
$arilewp_team_content = get_theme_mod('arilewp_team_content'); ?>
<section class="theme-block team-mambers vrsn-two" id="theme-team-mambers">
	<div class="<?php echo $arilewp_team_front_container_size; ?>">	
	
	<?php if($arilewp_team_area_title != null || $arilewp_team_area_des != null): ?>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-xs-12">
				<div class="theme-section-module text-center">
				<?php if($arilewp_team_area_title != null): ?>
					<p class="theme-section-subtitle wow animate fadeInLeft" data-wow-delay=".3s"><?php echo $arilewp_team_area_title; ?></p>
				<?php endif; ?>
				<?php if($arilewp_team_area_des != null): ?>
					<h2 class="theme-section-title wow animate fadeInRight" data-wow-delay=".3s"><?php echo $arilewp_team_area_des; ?></h2>
				<?php endif; ?>
					<div class="theme-separator-line-horrizontal-full wow animate fadeInUpBig" data-wow-delay=".3s"></div>
				</div>
			</div>
		</div>
	<?php endif; ?>
		
		<div class="row theme-team-content">
				<?php
					$arilewp_team_content = json_decode($arilewp_team_content);
					if( $arilewp_team_content!='' )
					{
						foreach($arilewp_team_content as $team_content){
							$image    = ! empty( $team_content->image_url ) ? apply_filters( 'arilewp_translate_single_string', $team_content->image_url, 'Theme Team' ) : '';
							$title    = ! empty( $team_content->title ) ? apply_filters( 'arilewp_translate_single_string', $team_content->title, 'Theme Team' ) : '';
							$subtitle = ! empty( $team_content->subtitle ) ? apply_filters( 'arilewp_translate_single_string', $team_content->subtitle, 'Theme Team' ) : '';
							$link     = ! empty( $team_content->link ) ? apply_filters( 'arilewp_translate_single_string', $team_content->link, 'Theme Team' ) : '';
							
								if( !empty($team_content->open_new_tab)){ 
									$open_new_tab = $team_content->open_new_tab;
								} else{ $open_new_tab = 'no'; }
		        ?>
			         <div class="col-lg-4 col-md-6 col-sm-12">	
						<div class="teammember-item wow animate rotateInUpLeft" data-wow-delay=".3s">
								<div class="teammember-content">
									<div class="ourteam-image-wrap">
										<div class="ourteam-image">
											<?php if ( ! empty( $image ) ) : ?>
												<?php
												if ( ! empty( $link ) ) :
													$link_html = '<a href="' . esc_url( $link ) . '"';
													if ( function_exists( 'arilewp_is_external_url' ) ) {
														$link_html .= arilewp_is_external_url( $link );
													}
													$link_html .= '>';
													echo wp_kses_post( $link_html );
												endif;
												echo '<img class="img-fluid" src="' . esc_url( $image ) . '"';
												if ( ! empty( $title ) ) {
													echo 'alt="' . esc_attr( $title ) . '" title="' . esc_attr( $title ) . '"';
												}
												echo '/>';
												if ( ! empty( $link ) ) {
													echo '</a>';
												}
												?>
											<?php endif; ?>	
										</div>
									</div>
									<div class="teammember-meta">
										<div class="teammember-inner">
											<div class="teammember-meta-inner">
											
											<?php if ( ! empty( $title ) ) : ?>
												<?php if ( ! empty( $link ) ) : ?>
												<a href="<?php echo $link ?>" <?php if($open_new_tab == 'yes'){ echo 'target="_blank"';}?>>
												<?php endif; ?>
														<h5 class="teammember-title"><?php echo esc_html( $title ); ?></h5>
												<?php if ( ! empty( $link ) ) : ?>	
												</a>
												<?php endif; ?>
											<?php endif; ?>
											<?php if ( ! empty( $subtitle ) ) : ?>							
												<span class="teammember-position"><?php echo esc_html( $subtitle ); ?></span>
											<?php endif; ?>
											<?php if ( ! empty( $team_content->social_repeater ) ) :
												$icons         = html_entity_decode( $team_content->social_repeater );
												$icons_decoded = json_decode( $icons, true );
												if ( ! empty( $icons_decoded ) ) : ?> 
												<ul class="team-social">
												<?php 
													foreach ( $icons_decoded as $value ) {
														$social_icon = ! empty( $value['icon'] ) ? apply_filters( 'arilewp_translate_single_string', $value['icon'], 'Team section' ) : '';
														$social_link = ! empty( $value['link'] ) ? apply_filters( 'arilewp_translate_single_string', $value['link'], 'Team section' ) : '';
														if ( ! empty( $social_icon ) ) { ?>	  
																<li><a href="<?php echo esc_url( $social_link ); ?>" <?php if($open_new_tab == 'yes'){ echo 'target="_blank"';}?>><i class="fa <?php echo esc_attr( $social_icon ); ?>"></i></a></li>	
												<?php } } ?>
												</ul> <?php
												endif;
											endif; ?>			
											</div>
										</div>
									</div>
								</div>
						</div>
				    </div>
			<?php } }else
			    { ?>
			            <div class="col-lg-4 col-md-6 col-sm-12">
							<div class="teammember-item wow animate rotateInUpLeft" data-wow-delay=".3s">
								<div class="teammember-content">
									<div class="ourteam-image-wrap">
										<div class="ourteam-image">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/theme-team1.jpg" class="img-fluid" alt="<?php echo esc_html('Mariana Huffington'); ?>">
										</div>
									</div>
									<div class="teammember-meta">
										<div class="teammember-inner">
											<div class="teammember-meta-inner">
												<h5 class="teammember-title"><?php echo esc_html('Mariana Huffington'); ?></h5>
												<span class="teammember-position"><?php esc_html_e('Founder','arilewp'); ?></span>
												<ul class="team-social">
													<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
													<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
													<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
													<li><a class="skype" href="#"><i class="fa fa-skype"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="teammember-item wow animate rotateInUpLeft" data-wow-delay=".3s">
								<div class="teammember-content">
									<div class="ourteam-image-wrap">
										<div class="ourteam-image">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/theme-team2.jpg" class="img-fluid" alt="<?php echo esc_html('Robert Starford'); ?>">
										</div>
									</div>
									<div class="teammember-meta">
										<div class="teammember-inner">
											<div class="teammember-meta-inner">
												<h5 class="teammember-title"><?php echo esc_html('Robert Starford'); ?></h5>
												<span class="teammember-position"><?php esc_html_e('UI Developer','arilewp'); ?></span>
												<ul class="team-social">
													<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
													<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
													<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
													<li><a class="skype" href="#"><i class="fa fa-skype"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="teammember-item wow animate rotateInUpLeft" data-wow-delay=".3s">
								<div class="teammember-content">
									<div class="ourteam-image-wrap">
										<div class="ourteam-image">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/theme-team3.jpg" class="img-fluid" alt="<?php echo esc_html('Olivia Kevinson'); ?>">
										</div>
									</div>
									<div class="teammember-meta">
										<div class="teammember-inner">
											<div class="teammember-meta-inner">
												<h5 class="teammember-title"><?php echo esc_html('Olivia Kevinson'); ?></h5>
												<span class="teammember-position"><?php esc_html_e('Manager','arilewp'); ?></span>
												<ul class="team-social">
													<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
													<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
													<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
													<li><a class="skype" href="#"><i class="fa fa-skype"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php } ?>		
		</div>
	</div>
</section>
<?php endif; ?> 
<!-- /Team-->
	
<!-- funfact-->
<?php if($arilewp_about_funfact_disabled == true) :

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

<!-- Client-->
<?php if($arilewp_about_client_disabled == true) : 

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