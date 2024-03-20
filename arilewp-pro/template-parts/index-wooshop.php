<?php if ( class_exists( 'WooCommerce' ) ): 
$arilewp_wooshop_disabled = get_theme_mod('arilewp_wooshop_disabled', true); 
$arilewp_wooshop_area_title = get_theme_mod('arilewp_wooshop_area_title', 'Our Shop');
$arilewp_wooshop_area_des = get_theme_mod('arilewp_wooshop_area_des', '<b>Best Selling</b> Products');
$arilewp_wooshop_front_container_size = get_theme_mod('arilewp_wooshop_front_container_size', 'container-full');
$arilewp_wooshop_area_before_content = get_theme_mod('arilewp_wooshop_area_before_content');
$arilewp_wooshop_area_after_content = get_theme_mod('arilewp_wooshop_area_after_content');
if($arilewp_wooshop_area_before_content != null):
echo do_shortcode($arilewp_wooshop_area_before_content);
endif;
if($arilewp_wooshop_disabled == true): ?>
<!--Product-->
<section class="theme-block shop bg-grey" id="theme-shop">
		<?php if($arilewp_wooshop_area_title != null || $arilewp_wooshop_area_des != null): ?>
			<div class="container">	
				<div class="row">
					<div class="col-lg-12 col-md-12 col-xs-12">					
						<div class="theme-section-module text-center">
						<?php if($arilewp_wooshop_area_title != null): ?>
							<p class="theme-section-subtitle wow animate fadeInLeft" data-wow-delay=".3s"><?php echo $arilewp_wooshop_area_title; ?></p>
						<?php endif; ?>
						<?php if($arilewp_wooshop_area_des != null): ?>
							<h2 class="theme-section-title wow animate fadeInRight" data-wow-delay=".3s"><?php echo $arilewp_wooshop_area_des; ?></h2>
						<?php endif; ?>
						<div class="theme-separator-line-horrizontal-full wow animate fadeInUpBig" data-wow-delay=".3s"></div>
						</div>					
					</div>						
				</div>	
			</div>
        <?php endif; ?>				
		<div class="<?php echo $arilewp_wooshop_front_container_size; ?>">
			<div class="row">
		<?php 
		$args = array( 'post_type' => 'product', );
		$args['tax_query'] = array(
			array('taxonomy' => 'product_visibility','field'    => 'name','terms'    => 'exclude-from-catalog','operator' => 'NOT IN',),
		);
		?>
			<div id="product-slider" class="owl-carousel owl-theme col-lg-12 products wow animate fadeInUp" data-wow-delay=".3s">										
               <?php $loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
					<div class="item <?php echo the_title(); ?>" data-profile="<?php echo $loop->post->ID; ?>">
						<div class="product">
						   <a href="<?php the_permalink(); ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
								<?php if ( $product->is_on_sale() ) : ?>
										<?php echo apply_filters( 'woocommerce_sale_flash', '<span class="onsale">' . esc_html__( 'Sale', 'arilewp' ) . '</span>', $post, $product ); ?>
								<?php endif; ?>
								<?php the_post_thumbnail(); ?>
								<h2 class="woocommerce-loop-product__title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" tabindex="-1"><?php the_title(); ?></a></h2>
								<?php if ($average = $product->get_average_rating()) : ?>
								   <div class="woocommerce">
								   <?php echo '<div class="star-rating" title="'.sprintf(__( 'Rated %s out of 5', 'arilewp' ), $average).'"><span style="width:'.( ( $average / 5 ) * 100 ) . '%"><strong itemprop="ratingValue" class="rating">'.$average.'</strong> '.__( 'out of 5', 'arilewp' ).'</span></div>'; ?>
								   </div>
                                <?php endif; ?>
								<span class="price">
									<span class="woocommerce-Price-amount amount"><?php echo $product->get_price_html(); ?></span>
								</span>
							</a>
						   <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
						</div>
					</div>
				<?php endwhile; ?> <?php  wp_reset_postdata(); ?>
				</div>
			</div>
		</div>
</section>
	<!-- /Product --->
<?php endif;
if($arilewp_wooshop_area_after_content != null):
echo do_shortcode($arilewp_wooshop_area_after_content);
endif; 
endif;
 ?>