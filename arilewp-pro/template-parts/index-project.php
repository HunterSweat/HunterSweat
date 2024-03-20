<?php 
$arilewp_project_disabled = get_theme_mod('arilewp_project_disabled', true); 
$arilewp_project_layout = get_theme_mod('arilewp_project_layout', 'arilewp_project_layout1');
$arilewp_project_area_title = get_theme_mod('arilewp_project_area_title', 'Our Portfolio');
$arilewp_project_area_des = get_theme_mod('arilewp_project_area_des', '<b>Recent</b> Projects');
$arilewp_project_front_container_size = get_theme_mod('arilewp_project_front_container_size', 'container-full');
$arilewp_project_area_before_content = get_theme_mod('arilewp_project_area_before_content');
$arilewp_project_area_after_content = get_theme_mod('arilewp_project_area_after_content');
$arilewp_theme_project_category = get_theme_mod('arilewp_theme_project_category', 2);
if($arilewp_project_area_before_content != null):
echo do_shortcode($arilewp_project_area_before_content);
endif;
if($arilewp_project_disabled == true): ?>
<!-- Portfolio Section -->
	<section class="theme-block theme-project <?php if($arilewp_project_layout == 'arilewp_project_layout1') { echo 'theme-bg-grey'; } else { echo 'theme-bg-dark';} ?>" id="theme-project">
	    <?php if($arilewp_project_area_title != null || $arilewp_project_area_des != null): ?>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-xs-12">
					<div class="theme-section-module text-center">
					<?php if($arilewp_project_area_title != null): ?>
					<p class="theme-section-subtitle wow animate fadeInLeft <?php if($arilewp_project_layout == 'arilewp_project_layout2') { echo 'text-light'; } ?>" data-wow-delay=".3s"><?php echo $arilewp_project_area_title; ?></p>
					<?php endif; ?>
					<?php if($arilewp_project_area_des != null): ?>
				<h2 class="theme-section-title wow animate fadeInRight <?php if($arilewp_project_layout == 'arilewp_project_layout2') { echo 'text-light'; } ?>" data-wow-delay=".3s"><?php echo $arilewp_project_area_des; ?></h2>
					<?php endif; ?>
					<div class="theme-separator-line-horrizontal-full wow animate fadeInUpBig" data-wow-delay=".3s"></div>
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>
		<div class="<?php echo $arilewp_project_front_container_size; ?>">
        <?php if($arilewp_project_layout == 'arilewp_project_layout2') {
		    get_template_part( 'template-parts/project', 'two' );
		} else { ?>
			<div class="row">
				<div id="project-slider" class="owl-carousel owl-theme col-lg-12">
		    <?php   $post_type = 'arilewp_portfolio';
						$args = array (
							'post_type' => $post_type,
							'tax_query' => array(
									        array(
											    'taxonomy' => 'portfolio_categories',
												'field'    => 'id',
												'terms'    => $arilewp_theme_project_category,
											),
										),
						'post_status' => 'publish');
						$j=1;
						$portfolio = null;
						$portfolio = new WP_Query($args);
						if( $portfolio->have_posts() )
						{
						    while ($portfolio->have_posts()) : $portfolio->the_post();

							    $custom_portfolio_link =sanitize_text_field( get_post_meta( get_the_ID(), 'custom_portfolio_link', true ));
								$custom_portfolio_target = sanitize_text_field( get_post_meta( get_the_ID(), 'custom_portfolio_target', true ));
								$custom_portfolio_description =sanitize_text_field( get_post_meta( get_the_ID(), 'custom_portfolio_description', true ));
                                $custom_portfolio_template =sanitize_text_field( get_post_meta( get_the_ID(), '_wp_page_template', true));
                        ?>

							<div class="item wow animated flipInY" data-wow-delay=".3s">
								<article class="theme-project-content wow flipInY animated" data-wow-delay=".3s">
									<figure class="portfolio-thumbnail">
									<?php if(has_post_thumbnail()){
											$class=array('class'=>'img-fluid');
											the_post_thumbnail('', $class);
											$post_thumb_id = get_post_thumbnail_id();
											$post_thumb_url = wp_get_attachment_url($post_thumb_id );
										} ?>
										<div class="click-view">
										<?php if(isset($post_thumb_url)){ ?>
											<a href="<?php echo $post_thumb_url; ?>" data-lightbox="image" title="<?php the_title(); ?>"><i class="fa fa-search"></i></a>
										<?php } ?>
										<?php if(!empty($custom_portfolio_link)) {?>
											<a href="<?php echo $custom_portfolio_link;?>" <?php if(!empty($custom_portfolio_target)){ echo 'target="_blank"'; } ?>><i class="fa fa-link"></i></a>
										<?php } ?>
										</div>
									</figure>
									<span class="content-area">
									<?php if(!empty($custom_portfolio_link)):?>
										<h5 class="theme-project-title"><a href="<?php echo $custom_portfolio_link;?>" <?php if(!empty($custom_portfolio_target)){ echo 'target="_blank"'; } ?>><?php the_title(); ?></a></h5>
									<?php else: ?>
									    <h5 class="theme-project-title"><?php the_title(); ?></h5>
									<?php endif; ?>
									<?php if(!empty($custom_portfolio_description)):?>
										<p><?php echo $custom_portfolio_description; ?></p>
									<?php endif; ?>
									</span>
								</article>
							</div>
					    <?php endwhile;
                        }
						?>
				</div>
			</div>
		<?php } ?>

		</div>
	</section>
	<!-- /End of Portfolio Section -->
<?php endif;
if($arilewp_project_area_after_content != null):
echo do_shortcode($arilewp_project_area_after_content);
endif;  ?>