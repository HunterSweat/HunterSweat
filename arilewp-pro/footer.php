<?php
/** 
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package arilewp
 */

$arilewp_footer_widgets_enabled = get_theme_mod('arilewp_footer_widgets_enabled', true);  
$arilewp_footer_style = get_theme_mod('arilewp_footer_style', 'dark');
$arilewp_footer_container_size = get_theme_mod('arilewp_footer_container_size', 'container-full');
$arilewp_footer_copright_enabled = get_theme_mod('arilewp_footer_copright_enabled', true);
$arilewp_footer_copright_text = get_theme_mod('arilewp_footer_copright_text', '<p>Copyright &copy; 2021 <a href="https://themearile.com/">ThemeArile</a>. All right reserved</p>');
$arilewp_scroll_to_top_enabled = get_theme_mod('arilewp_scroll_to_top_enabled', true); 
?>
	<!--Footer-->
	<footer class="site-footer <?php echo $arilewp_footer_style; ?>">

	<?php if($arilewp_footer_widgets_enabled == true): ?>
		<div class="<?php echo $arilewp_footer_container_size; ?>">
			<!--Footer Widgets-->			
			<div class="row footer-sidebar wow animate zoomIn" data-wow-delay="0.3s">
			   <?php get_template_part('sidebar','footer');?>
			</div>
		</div>
		<!--/Footer Widgets-->
	<?php endif; ?>		
		

    <?php if($arilewp_footer_copright_enabled == true): ?>
		<!--Site Info-->
		<div class="site-info text-center">
			<?php echo wp_kses_post($arilewp_footer_copright_text); ?>				
		</div>
		<!--/Site Info-->			
	<?php endif; ?>	
			
	</footer>
	<!--/End of Footer-->		
	<?php if($arilewp_scroll_to_top_enabled == true): ?>
		<!--Page Scroll Up-->
		<div class="page-scroll-up"><a href="#totop"><i class="fa fa-angle-up"></i></a></div>
		<!--/Page Scroll Up-->
    <?php endif; ?>	
	
	<?php do_action('themearile_switcher_init', false); ?>
	
<?php wp_footer(); ?>

</body>
</html>