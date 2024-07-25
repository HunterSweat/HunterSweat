<?php
/**
 * Template part for displaying posts
 *
 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package arilewp
*/
$blog_content_ordering = get_theme_mod( 'arilewp_general_blog_arcive_single_content_ordering', array( 'meta-one', 'title',
		'meta-two', )); 
$arilewp_related_single_blog_disabled = get_theme_mod( 'arilewp_related_single_blog_disabled', true )
?>
<article class="post wow animate fadeInUp" data-wow-delay=".3s" <?php post_class(); ?>>		
<!--		   --><?php //
//			if(has_post_thumbnail()){
//			echo '<figure class="post-thumbnail">';
//			the_post_thumbnail( '', array( 'class'=>'img-fluid' ) );
//			echo '</figure>'; } ?><!--		-->
		    <div class="post-content">
			<?php foreach ( $blog_content_ordering as $blog_content_order ) : ?>	
			   <?php if ( 'meta-one' === $blog_content_order ) : ?>
				<div class="entry-meta">
					<?php $category_data = get_the_category_list();
					if(!empty($category_data)) { ?>
					<span class="cat-links"><a href="<?php the_permalink(); ?>"><?php the_category(', '); ?></a></span>
					<?php } ?>
				</div>	
				<?php elseif ( 'title' === $blog_content_order ) : ?>
				<header class="entry-header">
	            <?php 
					the_title( '<h4 class="entry-title">', '</h4>' );
				?>
				</header>
				<?php elseif ( 'meta-two' === $blog_content_order ) : ?>
				<div class="entry-meta pb-2">
					<span class="author">
						<a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' )) );?>"><span class="grey"><?php echo esc_html__('by ','arilewp');?></span><?php echo esc_html(get_the_author());?></a>	
					</span>
					<span class="posted-on">
					<a href="<?php echo esc_url(get_month_link(get_post_time('Y'),get_post_time('m'))); ?>"><time>
					<?php echo esc_html(get_the_date('M j, Y')); ?></time></a>
					</span>
				</div>
				<?php  endif; endforeach; ?>
			    <div class="entry-content">

				    <?php the_content( );
                    $custom_portfolio_single_description =sanitize_text_field( get_post_meta( get_the_ID(), 'custom_portfolio_single_description', true ));
                    echo $custom_portfolio_single_description;
					    wp_link_pages();?>
				</div>
				<?php $theme_tag_list = get_the_tag_list();
		        if(!empty($theme_tag_list)) { ?>
				<div class="entry-meta mt-4 mb-0 pt-3 theme-b-top">
					<span class="tag-links">
					<?php the_tags('',''); ?>
					</span>
				</div>
				<?php } ?>
		    </div>	
</article><!-- #post-<?php the_ID(); ?> -->

<?php if( $arilewp_related_single_blog_disabled == true ) : ?>
<!--<article class="theme-related-posts wow animate fadeInUp" data-wow-delay=".3s">-->
<!--	<div class="theme-comment-title"><h4>--><?php //esc_html_e('Related Posts', 'arilewp'); ?><!--</h4></div>-->
<!--		<div class="row">-->
<!--			<div id="related-posts-slider" class="owl-carousel owl-theme col-lg-12">-->
<!--		--><?php
		// Default arguments
//		$args = array(
//			'post__not_in'   => array( get_the_ID() ), // Exclude current post
//			'no_found_rows'  => true, // We don't ned pagination so this speeds up the query
//		);
//		// Check for current post category and add tax_query to the query arguments
//		$cats = wp_get_post_terms( get_the_ID(), 'category' );
//		$cats_ids = array();
//		foreach( $cats as $wpex_related_cat ) {
//			$cats_ids[] = $wpex_related_cat->term_id;
//		}
//		if ( ! empty( $cats_ids ) ) {
//			$args['category__in'] = $cats_ids;
//		}
//		// Query posts
//		$wpex_query = new wp_query( $args );
//		// Loop through posts
//        foreach( $wpex_query->posts as $post ) : setup_postdata( $post ); ?>
<!--					<div class="item">-->
<!--						<article class="post">-->
<!--							<figure class="post-thumbnail">-->
<!--								--><?php //arilewp_post_thumbnail(); ?>
<!--							</figure>-->
<!--							<div class="post-content">-->
<!--								<div class="entry-meta">-->
<!--									--><?php //$category_data = get_the_category_list();
//									if(!empty($category_data)) { ?>
<!--									<span class="cat-links"><a href="--><?php //the_permalink(); ?><!--">--><?php //the_category(', '); ?><!--</a></span>-->
<!--									--><?php //} ?>
<!--								</div>-->
<!--								<header class="entry-header">-->
<!--									<h5 class="entry-title"><a href="--><?php //the_permalink(); ?><!--">--><?php //the_title(); ?><!--</a></h5>-->
<!--								</header>-->
<!--							</div>-->
<!--						</article>-->
<!--					</div>-->
<!--			--><?php
//				 End loop
//				endforeach;
//				// Reset post data
//				wp_reset_postdata(); ?>
<!--			</div>-->
<!--		</div>-->
<!--</article>-->
<?php endif; ?>