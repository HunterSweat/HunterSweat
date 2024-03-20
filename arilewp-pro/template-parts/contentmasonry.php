<?php
/**
 * Template part for displaying posts
 *
 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package arilewp
 */
$arilewp_masonry_view_content_ordering = get_theme_mod( 'arilewp_masonry_view_content_ordering', array( 'meta', 'title' ));
?>
<article class="post wow animate zoomIn" data-wow-delay=".3s" <?php post_class(); ?>>		
	   <?php 
		if(has_post_thumbnail()){
		echo '<figure class="post-thumbnail"><a href="'.esc_url(get_the_permalink()).'">';
		the_post_thumbnail( '', array( 'class'=>'img-fluid' ) );
		echo '</a></figure>';
		} ?>		
		<div class="post-content">
		<?php foreach ( $arilewp_masonry_view_content_ordering as $arilewp_masonry_view_content_order ) : ?>	
		<?php if ( 'meta' === $arilewp_masonry_view_content_order ) : ?>	
			<div class="entry-meta">
				<?php $category_data = get_the_category_list();
				if(!empty($category_data)) { ?>
				<span class="cat-links"><a href="<?php the_permalink(); ?>"><?php the_category(', '); ?></a></span>
				<?php } ?>
			</div>
		<?php elseif ( 'title' === $arilewp_masonry_view_content_order ) : ?>	
			<header class="entry-header">
				<?php 
				the_title( '<h4 class="entry-title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h4>' );
				?>
			</header>
		<?php  endif; endforeach; ?>		
			
			<div class="entry-content">
				<?php the_content( __('Read More','arilewp') ); ?>
				<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'arilewp' ), 'after'  => '</div>', ) ); ?>
			</div>
		</div>	
</article><!-- #post-<?php the_ID(); ?> -->