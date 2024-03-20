<?php 
/**
 *
 * Template Name: Blog Masonry 3 Column
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
$arilewp_theme_masonry_category = get_theme_mod('arilewp_theme_masonry_category');
$arilewp_masonry_view_container_size = get_theme_mod('arilewp_masonry_view_container_size', 'container-full');
?>				
<section class="theme-block theme-blog theme-bg-grey">
		
		<div class="<?php echo $arilewp_masonry_view_container_size; ?>">
		
			<div class="row" id="blog-masonry">
			
				<?php
                if ( get_query_var( 'paged' ) ) { $paged = get_query_var( 'paged' ); }
				elseif ( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); }
				else { $paged = 1; }
				$args = array( 'post_type' => 'post', 'category__in' => $arilewp_theme_masonry_category , 'paged'=>$paged);
				$loop = new WP_Query( $args );				
					if ( $loop->have_posts() ) :
					// Start the loop.
					while ( $loop->have_posts() ) : $loop->the_post();
					
					   echo '<div class="item">';

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				 
						get_template_part( 'template-parts/contentmasonry', get_post_type() );
						
					    echo '</div>';
						
					endwhile;
					
				// End the loop.
						
				    else :
					
				// If no content, include the "No posts found" template.	
					
			            get_template_part( 'template-parts/content', 'none' );
						
	        	    endif; ?>
					
			</div>
			
				  <?php	// pagination
						$page = new Class_ArileWP_Theme_Pagination();
						$page->arilewp_pagination($loop);	 ?>	
			
		</div>	
		
	</div>
	
</section>
<?php 
get_footer();