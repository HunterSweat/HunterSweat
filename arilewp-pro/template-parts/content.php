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
 ?>
<article class="post wow animate fadeInUp" data-wow-delay=".3s" <?php post_class(); ?>>		
		   <?php 
			if(has_post_thumbnail()){
			echo '<figure class="post-thumbnail"><a href="'.esc_url(get_the_permalink()).'">';
			the_post_thumbnail( '', array( 'class'=>'img-fluid' ) );
			echo '</a></figure>';
			} ?>		
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
					the_title( '<h4 class="entry-title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h4>' );
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
					<?php the_content( __('Read More','arilewp') ); ?>
					<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'arilewp' ), 'after'  => '</div>', ) ); ?>
		 		</div>
		    </div>	
</article><!-- #post-<?php the_ID(); ?> -->