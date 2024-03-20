<?php 
$arilewp_blog_disabled = get_theme_mod('arilewp_blog_disabled', true); 
$arilewp_blog_layout = get_theme_mod('arilewp_blog_layout', 'arilewp_blog_layout1');
$arilewp_blog_area_title = get_theme_mod('arilewp_blog_area_title', 'Recent Updates');
$arilewp_blog_area_des = get_theme_mod('arilewp_blog_area_des', '<b>Our Latest</b> News');
$arilewp_home_blog_meta_disabled = get_theme_mod('arilewp_home_blog_meta_disabled', true);
$arilewp_show_more_button_text = get_theme_mod('arilewp_show_more_button_text', 'Show More Posts');
$arilewp_show_more_button_link = get_theme_mod('arilewp_show_more_button_link', '#');
$arilewp_more_button_open_new_tab_disabled = get_theme_mod('arilewp_more_button_open_new_tab_disabled', true); 
$arilewp_blog_column_layout = get_theme_mod('arilewp_blog_column_layout', '4');
$arilewp_blog_column_layout = 12/$arilewp_blog_column_layout;
$arilewp_blog_front_container_size = get_theme_mod('arilewp_blog_front_container_size', 'container-full');
$arilewp_blog_area_before_content = get_theme_mod('arilewp_blog_area_before_content');
$arilewp_blog_area_after_content = get_theme_mod('arilewp_blog_area_after_content');
$arilewp_theme_blog_category = get_theme_mod('arilewp_theme_blog_category');

if($arilewp_blog_area_before_content != null):
echo do_shortcode($arilewp_blog_area_before_content);
endif;
if($arilewp_blog_disabled == true): ?>
	<!--Blog Section-->
	<section class="theme-block theme-blog <?php if($arilewp_blog_layout == 'arilewp_blog_layout2') { echo 'list-view-news'; } ?> theme-bg-grey" id="theme-blog">
	 <?php if($arilewp_blog_area_title != null || $arilewp_blog_area_des != null): ?>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-xs-12">
					<div class="theme-section-module text-center">
					<?php if($arilewp_blog_area_title != null): ?>
						<p class="theme-section-subtitle wow animate fadeInLeft" data-wow-delay=".3s"><?php echo $arilewp_blog_area_title; ?></p>
					<?php endif; ?>
					<?php if($arilewp_blog_area_des != null): ?>
						<h2 class="theme-section-title wow animate fadeInRight" data-wow-delay=".3s"><?php echo $arilewp_blog_area_des; ?></h2>
					<?php endif; ?>
						<div class="theme-separator-line-horrizontal-full wow animate fadeInUpBig" data-wow-delay=".3s"></div>
					</div>
				</div>						
			</div>
		</div>
		<?php endif; ?>
		<div class="<?php echo $arilewp_blog_front_container_size; ?>">
			<div class="row">
        <?php
        $post_args = array( 'post_type' => 'post', 'posts_per_page' => 4, 'category__in' => $arilewp_theme_blog_category, 'post__not_in'=>get_option("sticky_posts")) ;
			query_posts( $post_args );
			if(query_posts( $post_args ))
			{	
				while(have_posts()):the_post();
				{ ?><?php if($arilewp_blog_layout == 'arilewp_blog_layout2') { ?>
					<div class="col-lg-6 col-md-12 col-sm-12">
				    <?php } else { ?>
					<div class="col-lg-<?php echo $arilewp_blog_column_layout; ?> col-md-6 col-sm-12">
					<?php } ?>
						<article class="post <?php if($arilewp_blog_layout == 'arilewp_blog_layout2') { echo 'media'; }?> wow animate zoomIn" data-wow-delay=".3s">
                        <?php if(has_post_thumbnail()): ?>						
							<figure class="post-thumbnail">
							<?php $img_class =array('class' => "img-fluid");?>
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('',$img_class);?></a>
							</figure>
						<?php endif; ?>	
							<div class="<?php if($arilewp_blog_layout == 'arilewp_blog_layout2') { echo 'media-body'; }?> post-content">
							<?php if($arilewp_home_blog_meta_disabled == true): ?>
								<div class="entry-meta">
									<?php $category_data = get_the_category_list();
								     if(!empty($category_data)) { ?>
										<span class="cat-links"><a href="<?php the_permalink(); ?>"><?php the_category(', '); ?></a></span>
									<?php } ?>
								</div>
							<?php endif; ?>	
								<header class="entry-header">
									<h5 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h5>
								</header>
							<?php if($arilewp_blog_layout == 'arilewp_blog_layout2') {	?>
							<?php if($arilewp_home_blog_meta_disabled == true): ?>
								<div class="entry-meta">
									<span class="author">
										<a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' )) );?>"><span class="grey"><?php echo esc_html__('by ','arilewp');?></span><?php echo esc_html(get_the_author());?></a>	
									</span>
									<span class="posted-on">
									<a href="<?php echo esc_url(get_month_link(get_post_time('Y'),get_post_time('m'))); ?>"><time>
									<?php echo esc_html(get_the_date('M j, Y')); ?></time></a>
									</span>
								</div>
								<?php endif; ?>
							<?php } ?>	
								<div class="entry-content">	
									<?php the_content(__('Read More','arilewp')); ?>
								</div>
							</div>				
						</article>
					</div>	
				<?php }  
				endwhile; 
			} ?>
			</div>	
            <?php if($arilewp_show_more_button_text != null): ?>
			<div class="mx-auto mb-5 pb-2 theme-text-center wow animate fadeInUp" data-wow-delay=".3s">
				<a href="<?php echo $arilewp_show_more_button_link; ?>" <?php if($arilewp_more_button_open_new_tab_disabled == true){?>target="_blank" <?php }?> class="btn-small btn-default"><?php echo $arilewp_show_more_button_text; ?></a>
			</div>
			<?php endif; ?>
			
		</div>
	</section>
	<!--/End of Blog Section-->	
<?php 
endif;
if($arilewp_blog_area_after_content != null):
echo do_shortcode($arilewp_blog_area_after_content);
endif;
?>