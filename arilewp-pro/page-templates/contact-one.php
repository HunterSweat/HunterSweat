<?php 
/**
 *
 * Template Name: Contact One
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
		    <?php if($arilewp_contact_info_disabled != null) : ?>
	            <?php get_template_part( 'template-parts/contact', 'info' ); ?>
			<?php endif; ?>
		</div>
        <style>
            #hidden-paragraph {
                display: none;
            }
        </style>

    <section class="theme-contact wow animate fadeInUp" data-wow-delay=".3s">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <div class="theme-section-module text-center">
                        <h4 onclick="toggleParagraph()" class="theme-section-title small">Read about Us</h4>
                            <div class="theme-separator-line-horrizontal-full">
                            </div>
                    </div>
                </div>
            </div>
            <h5 id="hidden-paragraph">
                <br/><p>Principle Design was formed in 2019 with the core belief that offering a personal, handshake relationship, combined with accessibility, and accountability is what our clients value in their architect. This is becoming increasingly more rare in Oklahoma, as many historically prominent architecture firms are merging with, or being acquired by national corporations. This offers a distant and unfamiliar approach to working with Oklahoma schools, and the educators who operate them. The partners at Principle Design understand the success of any project is dependent on the quality of communication, and depth of trust.  We believe strongly in our responsibly as architects to help school districts, and public clients develop master plans, and explore long-term solutions, to plan for the future. Principle Design is committed to the success of public education in the state of Oklahoma. We recognize the importance of K-12 education, the need to sustain it, keep it vibrant, and provide long-term solutions to keep Oklahoma school districts growing responsibly. It’s time to Expect More!</p>

                <p>Expect More, functional design revolving around what a school really needs. We are not here to sell magazine but provide the school with the best performing educational facility possible.</p>

                Expect More, attention to the project budget! The budget is the most important thing in any project. Our responsibility is to give our client the highest quality and functional space within their budget. Blowing a budget is selfish and wastes the whole team’s time and energy.

                Expect More, communication with the architects themselves rather than a revolving door of project managers.

                Expect More, on time deliveries. We value the schedule and take deadlines seriously as this equates to lost revenue for the University if the college cannot open on time.

                Expect More, time and effort put into the code and communication with the code officials to insure the project meets and exceeds all rules and regulations.

                Expect More, on site visits to really see what is being done and what can be improved.
            </h5> </div>
	</section>
	
	<?php if($arilewp_google_map_disabled == true) : ?>
		<!-- /End of Contact Info -->	
		<?php if( get_theme_mod('arilewp_google_map_shortcode') != null ): ?>
		<!-- Map Section -->
			<section id="google-map" class="wow animate fadeInUp" data-wow-delay=".3s">
					<?php echo do_shortcode(get_theme_mod('arilewp_google_map_shortcode')); ?>
			</section>
		<!-- /Map Section -->
		<?php endif; ?>
	<?php endif; ?>
	
	
	<?php if($arilewp_contact_form_disabled == true ): ?>
	<!-- Contact Form -->
	<section class="theme-bg-gray wow animate fadeInUp" data-wow-delay=".3s" >
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-xs-12">
					<div class="theme-section-module text-center" style="padding-top: 50px">
						<h2 class="theme-section-title small"><?php echo $arilewp_contact_form_title; ?></h2>
						<div class="theme-separator-line-horrizontal-full"></div>
					</div>
				</div>
			</div>
		<?php if ( $post->post_content !== null) :  ?>
			<div class="row justify-content-md-center">
				<div class="col-lg-8 col-md-8 col-sm-12">				
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
		</div>
	</section>
	<!-- /End of Contact Form -->
	<?php endif; ?>
<?php 
get_footer();