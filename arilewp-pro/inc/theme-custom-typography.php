<?php 
function arilewp_custom_typography_css() { 
$arilewp_typography_disabled = get_theme_mod('arilewp_typography_disabled', false);
If($arilewp_typography_disabled == true):
$arilewp_typography_base_line_height = get_theme_mod('arilewp_typography_base_line_height', array('slider' => '', 'suffix' => '') );
$arilewp_typography_menu_bar_line_height = get_theme_mod('arilewp_typography_menu_bar_line_height', array('slider' => '', 'suffix' => '') );
$arilewp_typography_dropdown_bar_line_height = get_theme_mod('arilewp_typography_dropdown_bar_line_height', array('slider' => '', 'suffix' => '') );
$arilewp_typography_h1_line_height = get_theme_mod('arilewp_typography_h1_line_height', array('slider' => '', 'suffix' => '') );
$arilewp_typography_h2_line_height = get_theme_mod('arilewp_typography_h2_line_height', array('slider' => '', 'suffix' => '') );
$arilewp_typography_h3_line_height = get_theme_mod('arilewp_typography_h4_line_height', array('slider' => '', 'suffix' => '') );
$arilewp_typography_h4_line_height = get_theme_mod('arilewp_typography_h4_line_height', array('slider' => '', 'suffix' => '') );
$arilewp_typography_h5_line_height = get_theme_mod('arilewp_typography_h5_line_height', array('slider' => '', 'suffix' => '') );
$arilewp_typography_h6_line_height = get_theme_mod('arilewp_typography_h6_line_height', array('slider' => '', 'suffix' => '') );
$arilewp_typography_widget_title_line_height = get_theme_mod('arilewp_typography_widget_title_line_height', array('slider' => '', 'suffix' => '') );
?>
<style type="text/css">

/*------------------- Body ---------------------*/

<?php  if(get_theme_mod('arilewp_typography_base_font_family') != null): ?>
    body { font-family: <?php echo get_theme_mod('arilewp_typography_base_font_family'); ?>; } 
<?php endif; ?>
	
<?php  if(get_theme_mod('arilewp_typography_base_font_wieght') != null): ?>
    body { font-weight: <?php echo get_theme_mod('arilewp_typography_base_font_wieght'); ?>; } 
<?php endif; ?>	

<?php  if(get_theme_mod('arilewp_typography_base_font_style') != null): ?>
    body { font-style: <?php echo get_theme_mod('arilewp_typography_base_font_style'); ?>; } 
<?php endif; ?>	

<?php  if(get_theme_mod('arilewp_typography_base_text_transform') != null): ?>
    body { text-transform: <?php echo get_theme_mod('arilewp_typography_base_text_transform'); ?>; } 
<?php endif; ?>	

<?php  if(get_theme_mod('arilewp_typography_base_font_size')){ ?>
    body { font-size: <?php echo get_theme_mod('arilewp_typography_base_font_size'); ?>; } 
<?php } ?>	

<?php  if($arilewp_typography_base_line_height['slider'] != null): ?>
    body { line-height: <?php echo $arilewp_typography_base_line_height['slider']; ?>; } 
<?php endif; ?>	

<?php  if(get_theme_mod('arilewp_typography_base_letter_spacing')){ ?>
    body { letter-spacing: <?php echo get_theme_mod('arilewp_typography_base_letter_spacing'); ?>; } 
<?php } ?>

/*------------------- Main Menu ---------------------*/


<?php  if(get_theme_mod('arilewp_typography_menu_bar_font_family') != null): ?>
    .navbar .nav .menu-item .nav-link { font-family: <?php echo get_theme_mod('arilewp_typography_menu_bar_font_family'); ?>; } 
<?php endif; ?>
	
<?php  if(get_theme_mod('arilewp_typography_menu_bar_font_wieght') != null): ?>
    .navbar .nav .menu-item .nav-link { font-weight: <?php echo get_theme_mod('arilewp_typography_menu_bar_font_wieght'); ?>; } 
<?php endif; ?>	

<?php  if(get_theme_mod('arilewp_typography_menu_bar_font_style') != null): ?>
    .navbar .nav .menu-item .nav-link { font-style: <?php echo get_theme_mod('arilewp_typography_menu_bar_font_style'); ?>; } 
<?php endif; ?>	

<?php  if(get_theme_mod('arilewp_typography_menu_bar_text_transform') != null): ?>
    .navbar .nav .menu-item .nav-link { text-transform: <?php echo get_theme_mod('arilewp_typography_menu_bar_text_transform'); ?>; } 
<?php endif; ?>	

<?php  if(get_theme_mod('arilewp_typography_menu_bar_font_size')){ ?>
    .navbar .nav .menu-item .nav-link { font-size: <?php echo get_theme_mod('arilewp_typography_menu_bar_font_size'); ?>; } 
<?php } ?>	

<?php  if($arilewp_typography_menu_bar_line_height['slider'] != null): ?>
    .navbar .nav .menu-item .nav-link { line-height: <?php echo $arilewp_typography_menu_bar_line_height['slider']; ?>; } 
<?php endif; ?>	

<?php  if(get_theme_mod('arilewp_typography_menu_bar_letter_spacing')){ ?>
    .navbar .nav .menu-item .nav-link { letter-spacing: <?php echo get_theme_mod('arilewp_typography_menu_bar_letter_spacing'); ?>; } 
<?php } ?>


/*------------------- Dropdown Menu ---------------------*/

 
<?php  if(get_theme_mod('arilewp_typography_dropdown_bar_font_family') != null): ?>
    .navbar .nav .menu-item .dropdown-item { font-family: <?php echo get_theme_mod('arilewp_typography_dropdown_bar_font_family'); ?>; } 
<?php endif; ?>
	
<?php  if(get_theme_mod('arilewp_typography_dropdown_bar_font_wieght') != null): ?>
    .navbar .nav .menu-item .dropdown-item { font-weight: <?php echo get_theme_mod('arilewp_typography_dropdown_bar_font_wieght'); ?>; } 
<?php endif; ?>	

<?php  if(get_theme_mod('arilewp_typography_dropdown_bar_font_style') != null): ?>
    .navbar .nav .menu-item .dropdown-item { font-style: <?php echo get_theme_mod('arilewp_typography_dropdown_bar_font_style'); ?>; } 
<?php endif; ?>	

<?php  if(get_theme_mod('arilewp_typography_dropdown_bar_text_transform') != null): ?>
    .navbar .nav .menu-item .dropdown-item { text-transform: <?php echo get_theme_mod('arilewp_typography_dropdown_bar_text_transform'); ?>; } 
<?php endif; ?>	

<?php  if(get_theme_mod('arilewp_typography_dropdown_bar_font_size')){ ?>
    .navbar .nav .menu-item .dropdown-item { font-size: <?php echo get_theme_mod('arilewp_typography_dropdown_bar_font_size'); ?>; } 
<?php } ?>	

<?php  if($arilewp_typography_dropdown_bar_line_height['slider'] != null): ?>
    .navbar .nav .menu-item .dropdown-item { line-height: <?php echo $arilewp_typography_dropdown_bar_line_height['slider']; ?>; } 
<?php endif; ?>	

<?php  if(get_theme_mod('arilewp_typography_dropdown_bar_letter_spacing')){ ?>
    .navbar .nav .menu-item .dropdown-item { letter-spacing: <?php echo get_theme_mod('arilewp_typography_dropdown_bar_letter_spacing'); ?>; } 
<?php } ?>


/*------------------- H1---------------------*/

<?php  if(get_theme_mod('arilewp_typography_h1_font_family') != null): ?>
    h1 { font-family: <?php echo get_theme_mod('arilewp_typography_h1_font_family'); ?>; } 
<?php endif; ?>
	
<?php  if(get_theme_mod('arilewp_typography_h1_font_wieght') != null): ?>
    h1, .theme-slider-content .title-large { font-weight: <?php echo get_theme_mod('arilewp_typography_h1_font_wieght'); ?>; } 
<?php endif; ?>	

<?php  if(get_theme_mod('arilewp_typography_h1_font_style') != null): ?>
    h1 { font-style: <?php echo get_theme_mod('arilewp_typography_h1_font_style'); ?>; } 
<?php endif; ?>	

<?php  if(get_theme_mod('arilewp_typography_h1_text_transform') != null): ?>
    h1 { text-transform: <?php echo get_theme_mod('arilewp_typography_h1_text_transform'); ?>; } 
<?php endif; ?>	

<?php  if(get_theme_mod('arilewp_typography_h1_font_size')){ ?>
    h1, .page-header-title h1, .theme-slider-content .theme-caption-bg .title-large, .theme-slider-content .title-large { font-size: <?php echo get_theme_mod('arilewp_typography_h1_font_size'); ?>; } 
<?php } ?>	

<?php  if($arilewp_typography_h1_line_height['slider'] != null): ?>
    h1, .theme-slider-content .title-large { line-height: <?php echo $arilewp_typography_h1_line_height['slider']; ?>; } 
<?php endif; ?>	

<?php  if(get_theme_mod('arilewp_typography_h1_letter_spacing')){ ?>
    h1 { letter-spacing: <?php echo get_theme_mod('arilewp_typography_h1_letter_spacing'); ?>; } 
<?php } ?>


/*------------------- H2---------------------*/

<?php  if(get_theme_mod('arilewp_typography_h2_font_family') != null): ?>
    h2{ font-family: <?php echo get_theme_mod('arilewp_typography_h2_font_family'); ?>; } 
<?php endif; ?>
	
<?php  if(get_theme_mod('arilewp_typography_h2_font_wieght') != null): ?>
    h2, .theme-section-module .theme-section-title, .theme-cta .title { font-weight: <?php echo get_theme_mod('arilewp_typography_h2_font_wieght'); ?>; } 
<?php endif; ?>	

<?php  if(get_theme_mod('arilewp_typography_h2_font_style') != null): ?>
    h2, .theme-section-module .theme-section-title { font-style: <?php echo get_theme_mod('arilewp_typography_h2_font_style'); ?>; } 
<?php endif; ?>	

<?php  if(get_theme_mod('arilewp_typography_h2_text_transform') != null): ?>
    h2, .theme-section-module .theme-section-title { text-transform: <?php echo get_theme_mod('arilewp_typography_h2_text_transform'); ?>; } 
<?php endif; ?>	

<?php  if(get_theme_mod('arilewp_typography_h2_font_size')){ ?>
    h2, .theme-section-module .theme-section-title, .theme-funfact-title, .theme-section-module .theme-section-title.small, .theme-cta .title { font-size: <?php echo get_theme_mod('arilewp_typography_h2_font_size'); ?>; } 
<?php } ?>	

<?php  if($arilewp_typography_h2_line_height['slider'] != null): ?>
    h2, .theme-section-module .theme-section-title { line-height: <?php echo $arilewp_typography_h2_line_height['slider']; ?>; } 
<?php endif; ?>

<?php  if(get_theme_mod('arilewp_typography_h2_letter_spacing')){ ?>
    h2 { letter-spacing: <?php echo get_theme_mod('arilewp_typography_h2_letter_spacing'); ?>; } 
<?php } ?>	


/*------------------- H3---------------------*/

<?php  if(get_theme_mod('arilewp_typography_h3_font_family') != null): ?>
    h3 { font-family: <?php echo get_theme_mod('arilewp_typography_h3_font_family'); ?>; } 
<?php endif; ?>
	
<?php  if(get_theme_mod('arilewp_typography_h3_font_wieght') != null): ?>
    h3 { font-weight: <?php echo get_theme_mod('arilewp_typography_h3_font_wieght'); ?>; } 
<?php endif; ?>	

<?php  if(get_theme_mod('arilewp_typography_h3_font_style') != null): ?>
    h3 { font-style: <?php echo get_theme_mod('arilewp_typography_h3_font_style'); ?>; } 
<?php endif; ?>	

<?php  if(get_theme_mod('arilewp_typography_h3_text_transform') != null): ?>
    h3 { text-transform: <?php echo get_theme_mod('arilewp_typography_h3_text_transform'); ?>; } 
<?php endif; ?>	

<?php  if(get_theme_mod('arilewp_typography_h3_font_size')){ ?>
    h3, .error-sub-title { font-size: <?php echo get_theme_mod('arilewp_typography_h3_font_size'); ?>; } 
<?php } ?>	

<?php  if($arilewp_typography_h3_line_height['slider'] != null): ?>
    h3 { line-height: <?php echo $arilewp_typography_h3_line_height['slider']; ?>; } 
<?php endif; ?>	

<?php  if(get_theme_mod('arilewp_typography_h3_letter_spacing')){ ?>
    h3 { letter-spacing: <?php echo get_theme_mod('arilewp_typography_h3_letter_spacing'); ?>; } 
<?php } ?>


/*------------------- H4---------------------*/

<?php  if(get_theme_mod('arilewp_typography_h4_font_family') != null): ?>
    h4 { font-family: <?php echo get_theme_mod('arilewp_typography_h4_font_family'); ?>; } 
<?php endif; ?>
	
<?php  if(get_theme_mod('arilewp_typography_h4_font_wieght') != null): ?>
    h4, .youtube-click h4 { font-weight: <?php echo get_theme_mod('arilewp_typography_h4_font_wieght'); ?>; } 
<?php endif; ?>	

<?php  if(get_theme_mod('arilewp_typography_h4_font_style') != null): ?>
    h4 { font-style: <?php echo get_theme_mod('arilewp_typography_h4_font_style'); ?>; } 
<?php endif; ?>	

<?php  if(get_theme_mod('arilewp_typography_h4_text_transform') != null): ?>
    h4 { text-transform: <?php echo get_theme_mod('arilewp_typography_h4_text_transform'); ?>; } 
<?php endif; ?>	

<?php  if(get_theme_mod('arilewp_typography_h4_font_size')){ ?>
    h4 ,.theme-blog.theme-blog-large .post .entry-title, .theme-blog .post .entry-title { font-size: <?php echo get_theme_mod('arilewp_typography_h4_font_size'); ?>; } 
<?php } ?>	

<?php  if($arilewp_typography_h4_line_height['slider'] != null): ?>
    h4 { line-height: <?php echo $arilewp_typography_h4_line_height['slider']; ?>; } 
<?php endif; ?>

<?php  if(get_theme_mod('arilewp_typography_h4_letter_spacing')){ ?>
    h4 { letter-spacing: <?php echo get_theme_mod('arilewp_typography_h4_letter_spacing'); ?>; } 
<?php } ?>


/*------------------- H5---------------------*/

<?php  if(get_theme_mod('arilewp_typography_h5_font_family') != null): ?>
    h5 { font-family: <?php echo get_theme_mod('arilewp_typography_h5_font_family'); ?>; } 
<?php endif; ?>
	
<?php  if(get_theme_mod('arilewp_typography_h5_font_wieght') != null): ?>
    h5, .theme-info-area-title, .team-block .team-name, .team-mambers.vrsn-two .teammember-item .teammember-content .teammember-meta .teammember-title, .theme-project .theme-project-content .theme-project-title { font-weight: <?php echo get_theme_mod('arilewp_typography_h5_font_wieght'); ?>; } 
<?php endif; ?>	

<?php  if(get_theme_mod('arilewp_typography_h5_font_style') != null): ?>
    h5 { font-style: <?php echo get_theme_mod('arilewp_typography_h5_font_style'); ?>; } 
<?php endif; ?>	

<?php  if(get_theme_mod('arilewp_typography_h5_text_transform') != null): ?>
    h5 { text-transform: <?php echo get_theme_mod('arilewp_typography_h5_text_transform'); ?>; } 
<?php endif; ?>	

<?php  if(get_theme_mod('arilewp_typography_h5_font_size')){ ?>
    h5, .team-block .team-name, .team-mambers.vrsn-two .teammember-item .teammember-content .teammember-meta .teammember-title, .theme-project .theme-project-content .theme-project-title { font-size: <?php echo get_theme_mod('arilewp_typography_h5_font_size'); ?>; } 
<?php } ?>	

<?php  if($arilewp_typography_h5_line_height['slider'] != null): ?>
    h5 { line-height: <?php echo $arilewp_typography_h5_line_height['slider']; ?>; } 
<?php endif; ?>

<?php  if(get_theme_mod('arilewp_typography_h5_letter_spacing')){ ?>
    h5 { letter-spacing: <?php echo get_theme_mod('arilewp_typography_h5_letter_spacing'); ?>; } 
<?php } ?>


/*------------------- H6---------------------*/

<?php  if(get_theme_mod('arilewp_typography_h6_font_family') != null): ?>
    h6 { font-family: <?php echo get_theme_mod('arilewp_typography_h6_font_family'); ?>; } 
<?php endif; ?>
	
<?php  if(get_theme_mod('arilewp_typography_h6_font_wieght') != null): ?>
    h6 { font-weight: <?php echo get_theme_mod('arilewp_typography_h6_font_wieght'); ?>; } 
<?php endif; ?>	

<?php  if(get_theme_mod('arilewp_typography_h6_font_style') != null): ?>
    h6 { font-style: <?php echo get_theme_mod('arilewp_typography_h6_font_style'); ?>; } 
<?php endif; ?>	

<?php  if(get_theme_mod('arilewp_typography_h6_text_transform') != null): ?>
    h6 { text-transform: <?php echo get_theme_mod('arilewp_typography_h6_text_transform'); ?>; } 
<?php endif; ?>	

<?php  if(get_theme_mod('arilewp_typography_h6_font_size')){ ?>
    h6 { font-size: <?php echo get_theme_mod('arilewp_typography_h6_font_size'); ?>; } 
<?php } ?>	

<?php  if($arilewp_typography_h6_line_height['slider'] != null): ?>
    h6 { line-height: <?php echo $arilewp_typography_h6_line_height['slider']; ?>; } 
<?php endif; ?>

<?php  if(get_theme_mod('arilewp_typography_h6_letter_spacing')){ ?>
    h6 { letter-spacing: <?php echo get_theme_mod('arilewp_typography_h6_letter_spacing'); ?>; } 
<?php } ?>

/*------------------- Widget Title ---------------------*/

<?php  if(get_theme_mod('arilewp_typography_widget_title_font_family') != null): ?>
    .widget .widget-title { font-family: <?php echo get_theme_mod('arilewp_typography_widget_title_font_family'); ?>; } 
<?php endif; ?>
	
<?php  if(get_theme_mod('arilewp_typography_widget_title_font_wieght') != null): ?>
    .widget .widget-title { font-weight: <?php echo get_theme_mod('arilewp_typography_widget_title_font_wieght'); ?>; } 
<?php endif; ?>	

<?php  if(get_theme_mod('arilewp_typography_widget_title_font_style') != null): ?>
    .widget .widget-title { font-style: <?php echo get_theme_mod('arilewp_typography_widget_title_font_style'); ?>; } 
<?php endif; ?>	

<?php  if(get_theme_mod('arilewp_typography_widget_title_text_transform') != null): ?>
    .widget .widget-title { text-transform: <?php echo get_theme_mod('arilewp_typography_widget_title_text_transform'); ?>; } 
<?php endif; ?>	

<?php  if(get_theme_mod('arilewp_typography_widget_title_font_size')){ ?>
    .widget .widget-title { font-size: <?php echo get_theme_mod('arilewp_typography_widget_title_font_size'); ?>; } 
<?php } ?>	

<?php  if($arilewp_typography_widget_title_line_height['slider'] != null): ?>
    .widget .widget-title { line-height: <?php echo $arilewp_typography_widget_title_line_height['slider']; ?>; } 
<?php endif; ?>

<?php  if(get_theme_mod('arilewp_typography_widget_title_letter_spacing')){ ?>
    .widget .widget-title { letter-spacing: <?php echo get_theme_mod('arilewp_typography_widget_title_letter_spacing'); ?>; } 
<?php } ?>


</style>
<?php endif; }
add_action( 'wp_head', 'arilewp_custom_typography_css' );
?>