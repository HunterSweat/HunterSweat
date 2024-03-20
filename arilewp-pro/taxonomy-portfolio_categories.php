<?php 
get_header();
get_template_part('template-parts/site','breadcrumb');
$arilewp_portfolio_category_templates_title = get_theme_mod('arilewp_portfolio_category_templates_title', 'Our Portfolio');
$arilewp_portfolio_category_templates_desc = get_theme_mod('arilewp_portfolio_category_templates_desc', '<b>Recent</b> Projects');
$arilewp_portfolio_archive_container_size = get_theme_mod('arilewp_portfolio_archive_container_size', 'container-full');
$arilewp_portfolio_category_column_layout = get_theme_mod('arilewp_portfolio_category_column_layout',3);
?>
<section class="theme-block theme-project theme-bg-grey">
         <?php if($arilewp_portfolio_category_templates_title != null || $arilewp_portfolio_category_templates_desc != null) :?>
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-xs-12">
						<div class="theme-section-module text-center">
						<?php if($arilewp_portfolio_category_templates_title != null ) : ?>
							<p class="theme-section-subtitle wow animate fadeInLeft" data-wow-delay=".3s"><?php echo $arilewp_portfolio_category_templates_title; ?></p>
						<?php endif; ?>
						<?php if($arilewp_portfolio_category_templates_desc != null ) : ?>
							<h2 class="theme-section-title wow animate fadeInRight" data-wow-delay=".3s"><?php echo $arilewp_portfolio_category_templates_desc; ?></h2>
						<?php endif; ?>
							<div class="theme-separator-line-horrizontal-full wow animate fadeInUpBig" data-wow-delay=".3s"></div>
						</div>
					</div>
				</div>
			</div>	
		<?php endif; ?>
		<div class="<?php echo $arilewp_portfolio_archive_container_size; ?>">
				<div class="tab-content" id="myTabContent">
					<?php $norecord=0;
						$args = array (
						'post_status' => 'publish');
						$portfolio_query = null;		
						$portfolio_query = new WP_Query($args);				
						if( have_posts() ) : ?>
							<div class="row">
							<?php
									while ( have_posts()) : the_post();
									$custom_portfolio_target = sanitize_text_field( get_post_meta( get_the_ID(), 'custom_portfolio_target', true )); 
									if(get_post_meta( get_the_ID(),'custom_portfolio_link', true )) { 
										$custom_portfolio_link = get_post_meta( get_the_ID(),'custom_portfolio_link', true );
									} else {$custom_portfolio_link = '';} $class = '';	
									if($arilewp_portfolio_category_column_layout == 2) { $class = 'col-md-6 col-sm-6 col-xs-12'; }
									if($arilewp_portfolio_category_column_layout == 3) { $class = 'col-md-4 col-sm-4 col-xs-12'; }
									if($arilewp_portfolio_category_column_layout == 4) { $class = 'col-md-3 col-sm-3 col-xs-12'; }
									echo '<div class="'.$class.'">';
											?>	
										<article class="theme-project-content border-0">
											<figure class="portfolio-thumbnail">
											<?php 
												if(has_post_thumbnail()){
													 echo '<a href="'.esc_url(get_the_permalink()).'">';
												    the_post_thumbnail( '', array( 'class'=>'img-fluid' ) );
												echo '</a>'; }
												if(has_post_thumbnail())
													{ 
														$post_thumbnail_id = get_post_thumbnail_id();
														$post_thumbnail_url = wp_get_attachment_url($post_thumbnail_id );
													} 
													?>
													<div class="click-view">
														<div class="thumbnail-showcase-icons">
																<?php if(isset($post_thumbnail_url)){ ?>
																<a href="<?php echo $post_thumbnail_url; ?>"  data-lightbox="image" title="<?php the_title(); ?>"><i class="fa fa-search"></i></a>
																<?php } ?>
																<?php if(!empty($custom_portfolio_link)) {?>
																<a href="<?php echo $custom_portfolio_link;?>" <?php if(!empty($custom_portfolio_target)){ echo 'target="_blank"'; } ?>><i class="fa fa-link"></i></a>
																<?php } ?>
														</div>
													</div>
											</figure>
											<figcaption>
													<h5 class="theme-project-title"><?php if(!empty($custom_portfolio_link)) {?>
														<a href="<?php echo $custom_portfolio_link;?>" <?php if(!empty($custom_portfolio_target)){ echo 'target="_blank"'; } ?> class="hover_thumb"><?php the_title(); ?></a>
														<?php } else the_title();  ?>
													</h5>
													<?php if(get_post_meta( get_the_ID(), 'custom_portfolio_description', true )){ ?>
													<p><?php echo get_post_meta( get_the_ID(), 'custom_portfolio_description', true ); ?></p>
													<?php } ?>
													
											</figcaption>
										</article>
											<?php echo '</div>'; ?>
											<?php 
											endwhile;
												$norecord=1; 
									wp_reset_query();
											?>
										<?php  ?>
							</div>
							<?php endif;?>
				</div>				
		</div>
</section>	
<?php get_footer(); ?>