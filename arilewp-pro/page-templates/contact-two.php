<?php 
/**
 *
 * Template Name: Contact Two
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

$arilewp_contact_info_disabled = get_theme_mod('arilewp_contact_info_disabled', true);
$arilewp_google_map_disabled = get_theme_mod('arilewp_google_map_disabled', true);
$arilewp_google_map_title = get_theme_mod('arilewp_google_map_title', 'Find Us On The Map');
$arilewp_contact_form_disabled = get_theme_mod('arilewp_contact_form_disabled', true);
$arilewp_contact_form_title = get_theme_mod('arilewp_contact_form_title', 'Drop Us a Message');
?>
<!-- Contact Info -->
<section class="theme-block theme-bg-grey">
	<div class="container"> 
		<?php if( has_post_thumbnail() ): ?>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<?php $arg = array( 'class'=>'img-fluid' ); the_post_thumbnail( '',$arg ); ?>
				</div>
			</div>
		    <?php endif; ?>
			<?php if($arilewp_contact_info_disabled == true ): ?>
		        <?php get_template_part( 'template-parts/contact', 'info' ); ?>
			<?php endif; ?>
	</div>
</section>
	<!-- /End of Contact Info -->	
	<!-- Contact Form & Map -->
<section class="theme-contact">
	<div class="container">	
		<div class="row">
		    <?php if($arilewp_contact_form_disabled == true ): ?>
				<div class="col-lg-6 col-md-6 col-sm-12 wow animate fadeInUp" data-wow-delay=".3s">	
					<div class="theme-contact-form-info">
						<div class="title"><h4><?php echo $arilewp_contact_form_title; ?></h4></div>
						<?php 
								// Start the Loop.
								while ( have_posts() ) : the_post();
									// Include the page
									
									the_content( __('Read More','arilewp') );
									wp_link_pages();
									
									comments_template( '', true ); // show comments 
									
								endwhile;
					    ?>		
					</div>
				</div>
			<?php endif; ?>
			<?php if($arilewp_google_map_disabled == true) : ?>
				<?php if( get_theme_mod('arilewp_google_map_shortcode') != null) : ?>
					<div class="col-lg-6 col-md-6 col-sm-12 wow animate fadeInUp" data-wow-delay=".3s">
						<section id="google-map" class="theme-contact-form-info mb-5">
							<div class="title"><h4><?php echo $arilewp_google_map_title; ?></h4></div>
							<?php echo  do_shortcode(get_theme_mod('arilewp_google_map_shortcode'));  ?>
						</section>
					</div>
				<?php endif; ?>
            <?php endif; ?>				
			</div>
		</div>
	</section>
	<!-- /End of Contact Form & Map -->
<?php 
get_footer();