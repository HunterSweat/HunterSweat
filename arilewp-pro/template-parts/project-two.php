<?php 	
$arilewp_project_column_layout = get_theme_mod('arilewp_project_column_layout', '4');
$arilewp_project_column_layout = 12/$arilewp_project_column_layout;
$post_type = 'arilewp_portfolio';
					$tax = 'portfolio_categories'; 
					$term_args=array( 'hide_empty' => true,'orderby' => 'id');
					$tax_terms = get_terms($tax, $term_args);
					$defualt_tex_id = get_option('arilewp_default_term_id');
					$j=1;
					$tab= get_option('tab');
					if(isset($_GET['div']))
					{
						$tab=$_GET['div'];
					} 
		?>	
		    <div class="row">
			    <div class="col-md-12">
					<ul id="tabs" class="nav filter-tabs justify-content-center wow fadeInUpBig animated" data-wow-delay=".3s">
							<?php	foreach ($tax_terms  as $tax_term) {
                                if( $tax_term->name == "Featured"){
							?>
							<li class="nav-item"><a class="nav-link <?php if($tab==''){if($j==1){echo 'active';$j=2;}}else if($tab==$tax_term->slug){echo 'active';}?> text-light" id="tab" href="#<?php echo $tax_term->slug; ?>" data-toggle="tab">
                                    <?php  echo $tax_term->name;  ?></a></li>
							<?php }} ?>
					</ul>	
                </div><!-- .row -->				
	     	</div><!-- .row -->	
			<div id="content" class="tab-content" role="tablist">
			<?php 
				global $paged;
				$curpage = $paged ? $paged : 1;
				$norecord=0;
				$min_post_start=0;
				$is_active=true;
				
				if ($tax_terms) 
				{ 
					foreach ($tax_terms  as $tax_term)
					{
						if(isset($_POST['min_post_start']))
						{ $min_post_start = $_POST['min_post_start']; }
						$args = array (
						'max_num_pages' =>5,
                        'posts_per_page' =>4,
						'post_status' => 'publish',
						'post_type' => $post_type,
						'portfolio_categories' => 'Featured',
						'paged' => $curpage,
						);
						$portfolio_query = null;		
						$portfolio_query = new WP_Query($args);	
						if( $portfolio_query->have_posts() ):
							?>
							<div id="<?php echo $tax_term->slug; ?>" class="tab-pane fade in <?php if($tab==''){if($is_active==true){echo 'show active';}$is_active=false;}else if($tab==$tax_term->slug){echo 'show active';} ?>">
							<div class="row">
								<?php while ($portfolio_query->have_posts()) : $portfolio_query->the_post(); ?>
								<?php 
										$custom_portfolio_target = sanitize_text_field( get_post_meta( get_the_ID(), 'custom_portfolio_target', true )); 
										if(get_post_meta( get_the_ID(),'custom_portfolio_link', true )) { 
											$custom_portfolio_link = get_post_meta( get_the_ID(),'custom_portfolio_link', true );
										} else { $custom_portfolio_link = ''; }
										?>

                                    <div class="col-lg-<?php echo $arilewp_project_column_layout; ?> col-md-6 col-sm-12">											
										<article class="theme-project-content border-0 wow flipInY animated" data-wow-delay=".3s">

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
											<span class="content-area">
													<h5 class="theme-project-title"><?php if(!empty($custom_portfolio_link)) {?>
														<a href="<?php echo $custom_portfolio_link;?>" <?php if(!empty($custom_portfolio_target)){ echo 'target="_blank"'; } ?> class="hover_thumb"><?php the_title(); ?></a>
														<?php } else the_title();  ?>
													</h5>
													<?php if(get_post_meta( get_the_ID(), 'custom_portfolio_description', true )){ ?>
													<p><?php echo get_post_meta( get_the_ID(), 'custom_portfolio_description', true ); ?></p>
													<?php } ?>
													
											</span>
											</article>
									</div>
										<?php 
											$norecord=1;
										?>
									<?php endwhile; ?>
								</div>
							</div>	
							<?php
							wp_reset_query();
						else:
							?>
							<div id="<?php echo $tax_term->slug; ?>" class="tab-pane fade in <?php if($tab==''){if($is_active==true){echo 'active';}$is_active=false;}else if($tab==$tax_term->slug){echo 'active';} ?>"></div>
							<?php
						endif;
					}
				}
			?>
</div><!-- .tab-content -->