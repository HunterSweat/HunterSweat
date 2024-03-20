<?php 
$arilewp_team_disabled = get_theme_mod('arilewp_team_disabled', true); 
$arilewp_team_layout = get_theme_mod('arilewp_team_layout', 'arilewp_team_layout1');
$arilewp_team_area_title = get_theme_mod('arilewp_team_area_title', 'Our Team');
$arilewp_team_area_des = get_theme_mod('arilewp_team_area_des', '<b>Talented</b> People');
$arilewp_team_front_container_size = get_theme_mod('arilewp_team_front_container_size', 'container');
$arilewp_team_area_before_content = get_theme_mod('arilewp_team_area_before_content');
$arilewp_team_area_after_content = get_theme_mod('arilewp_team_area_after_content');
if($arilewp_team_area_before_content != null):
echo do_shortcode($arilewp_team_area_before_content);
endif;
if($arilewp_team_disabled == true): ?>
<?php $arilewp_team_content = get_theme_mod('arilewp_team_content'); ?>
<section class="theme-block team-mambers <?php if($arilewp_team_layout == 'arilewp_team_layout2'){ echo 'vrsn-two'; }?>" id="theme-team-mambers">
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
		
		<div class="row theme-team-content wow animate fadeInUp" data-wow-delay=".3s">
			<div id="team-slider" class="owl-carousel owl-theme col-lg-12">
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
			        <div class="item">
                    <?php if($arilewp_team_layout == 'arilewp_team_layout2'){?>
						<div class="teammember-item">
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
                    <?php } else { ?>
						<div class="team-block">
						    <div class="team-thumbnail">
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

							<div class="team-content">
										<?php if ( ! empty( $subtitle ) ) : ?>							
											<span class="position"><?php echo esc_html( $subtitle ); ?></span>
									    <?php endif; ?>
						                <?php if ( ! empty( $title ) ) : ?>
											<?php if ( ! empty( $link ) ) : ?>
											<a href="<?php echo $link ?>" <?php if($open_new_tab == 'yes'){ echo 'target="_blank"';}?>>
											<?php endif; ?>
													<h5 class="team-name"><?php echo esc_html( $title ); ?></h5>
											<?php if ( ! empty( $link ) ) : ?>	
											</a>
											<?php endif; ?>
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
					<?php } ?>
				    </div>
			<?php } }else
			    { ?>
			        <?php if($arilewp_team_layout == 'arilewp_team_layout2'){ ?>
					    <div class="teammember-item">
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
						<div class="teammember-item">
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
						<div class="teammember-item">
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
					<?php } else { ?>
						<div class="item">					
							<div class="team-block">
								<div class="team-thumbnail">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/theme-team1.jpg" class="img-fluid" alt="<?php echo esc_html('Mariana Huffington'); ?>">			
								</div>
								<div class="team-content">
									<span class="position"><?php esc_html_e('Founder','arilewp'); ?></span>
									<h5 class="team-name"><?php echo esc_html('Mariana Huffington'); ?></h5>
									<ul class="team-social">
										<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a class="skype" href="#"><i class="fa fa-skype"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="item">					
							<div class="team-block">
								<div class="team-thumbnail">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/theme-team2.jpg" class="img-fluid" alt="<?php echo esc_html('Robert Starford'); ?>">			
								</div>
								<div class="team-content">
									<span class="position"><?php esc_html_e('UI Developer','arilewp'); ?></span>
									<h5 class="team-name"><?php echo esc_html('Robert Starford'); ?></h5>
									<ul class="team-social">
										<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a class="skype" href="#"><i class="fa fa-skype"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="item">					
							<div class="team-block">
								<div class="team-thumbnail">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/theme-team3.jpg" class="img-fluid" alt="<?php echo esc_html('Olivia Kevinson'); ?>">			
								</div>
								<div class="team-content">
									<span class="position"><?php esc_html_e('Manager','arilewp'); ?></span>
									<h5 class="team-name"><?php echo esc_html('Olivia Kevinson'); ?></h5>
									<ul class="team-social">
										<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a class="skype" href="#"><i class="fa fa-skype"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
                
					<?php } } ?>
			</div>			
		</div>
	</div>
</section>
<?php endif;
if($arilewp_team_area_after_content != null):
echo do_shortcode($arilewp_team_area_after_content);
endif; 
?>