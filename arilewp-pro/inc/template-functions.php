<?php
/**
 * Functions which enhance the theme into WordPress
 *
 * @package arilewp
 */

/**
 * Theme Custom Logo
*/
function arilewp_header_logo() {

    $arilewp_main_header_style = get_theme_mod('arilewp_main_header_style', 'standard');
	$arilewp_sticky_bar_logo = get_theme_mod('arilewp_sticky_bar_logo');
	$arilewp_transparent_header_logo = get_theme_mod('arilewp_transparent_header_logo');
	
	if($arilewp_transparent_header_logo != null && $arilewp_main_header_style == 'transparent' && is_page_template('page-templates/frontpage.php') ){  ?>
	
	<a class="navbar-brand" href="<?php echo home_url( '/' ); ?>" ><img src="<?php echo $arilewp_transparent_header_logo; ?>" class="custom-logo" alt="<?php bloginfo("name"); ?>"></a>
	
	<?php } elseif($arilewp_transparent_header_logo != null && $arilewp_main_header_style == 'overlap_classic'){ ?>
		
		<a class="navbar-brand" href="<?php echo home_url( '/' ); ?>" ><img src="<?php echo $arilewp_transparent_header_logo; ?>" class="custom-logo" alt="<?php bloginfo("name"); ?>"></a>
		
	<?php }

	else {
		the_custom_logo();
	}		
	?>
					
	<?php if($arilewp_sticky_bar_logo != null) : ?>	
			<a class="sticky-navbar-brand" href="<?php echo home_url( '/' ); ?>" ><img src="<?php echo $arilewp_sticky_bar_logo; ?>" class="custom-logo" alt="<?php bloginfo("name"); ?>"></a>
	<?php endif; ?>
	
    <?php if ( display_header_text() ) : ?>
	<div class="site-branding-text">
	    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		<?php
		$description = get_bloginfo( 'description', 'display' );
		if ( $description || is_customize_preview() ) : ?>
			<p class="site-description"><?php echo $description; ?></p>
		<?php endif; ?>
	</div>
	<?php endif;
} 

/**
 * Theme Logo Class
*/
function arilewp_header_logo_class($html)
{
	$html = str_replace('custom-logo-link', 'navbar-brand', $html);
	return $html;
}
add_filter('get_custom_logo','arilewp_header_logo_class');

/**
 * Theme Pages
*/
function fresh_site_activate()
{
    $fresh_site_activate = get_option( 'fresh_site_activate' );
		if ( (bool) $fresh_site_activate === false ) {
					$pages = array( esc_html__( 'Home', 'arilewp' ), esc_html__( 'Blog', 'arilewp' ) );
					foreach ($pages as $page){ 
					$post_data = array( 'post_author' => 1, 'post_name' => $page,  'post_status' => 'publish' , 'post_title' => $page, 'post_type' => 'page', ); 	
					if($page== 'Home'): 
						$page_option = 'page_on_front';
						$template = 'page-templates/frontpage.php';	
					else: 	
						$page_option = 'page_for_posts';
						$template = 'page.php';
					endif;
					$post_data = wp_insert_post( $post_data, false );
						if ( $post_data ){
							update_post_meta( $post_data, '_wp_page_template', $template );
							$page = get_page_by_title($page);
							update_option( 'show_on_front', 'page' );
							update_option( $page_option, $page->ID );
						}
					}	
        update_option( 'fresh_site_activate', true );					
    }
}
fresh_site_activate();

/**
 * Theme Comment Function
*/
if ( ! function_exists( 'arilewp_comment' ) ) :
function arilewp_comment( $comment, $args, $depth ) 
{ ?>
      <div <?php comment_class('media comment-box'); ?> id="comment-<?php comment_ID(); ?>">
			<a class="pull-left-comment">
            <?php echo get_avatar($comment); ?>
            </a>
            <div class="media-body">
			   <div class="comment-detail">
				<h5 class="comment-detail-title"><?php printf(('%s'), get_comment_author_link()) ?>
				<time class="comment-date">
				<a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) );?>">
				<?php comment_date('F j, Y');?>&nbsp;<?php esc_html_e('at','arilewp');?>&nbsp;<?php comment_time('g:i a'); ?>
				</a>
				</time></h5>
				<?php comment_text() ;?>
				<div class="reply">
				<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
				</div>
				<?php if ( $comment->comment_approved == '0' ) : ?>
				<em class="comment-awaiting-moderation"><?php esc_html_e( 'Your comment is awaiting moderation.', 'arilewp' ); ?></em>
				<br/>
				<?php endif; ?>
				</div>
			</div>
		</div>
<?php
}
endif;
add_filter('get_avatar','arilewp_gravatar_class');
function arilewp_gravatar_class($class) {
    $class = str_replace("class='avatar", "class='img-fluid comment-img", $class);
    return $class;
}

function arilewp_read_more_button_class($read_class)
	{  global $post;
		return '<p><a href="' . esc_url(get_permalink()) . "#more-{$post->ID}\" class=\"more-link\">" .esc_html__('Read More','arilewp')."</a></p>";
	}
add_filter( 'the_content_more_link', 'arilewp_read_more_button_class' );

function arilewp_post_thumbnail() {
    if(has_post_thumbnail()){
	    echo '<figure class="post-thumbnail"><a href="'.esc_url(get_the_permalink()).'">';
		the_post_thumbnail( '', array( 'class'=>'img-fluid' ) );
		echo '</a></figure>';
	}
}

/**
 * Theme Page Header Title
*/
function arilewp_theme_page_header_title(){
	$arilewp_page_header_layout = get_theme_mod('arilewp_page_header_layout', 'arilewp_page_header_layout1');
	if($arilewp_page_header_layout == 'arilewp_page_header_layout1'):
			$page_title_class = 'text-center';	
	else: $page_title_class = ''; 
	endif;
	if( is_archive() )
	{
		echo '<div class="page-header-title '.$page_title_class.'"><h1 class="text-white">';
		if ( is_day() ) :
		  printf( __( '%1$s %2$s', 'arilewp' ), __('Archives','arilewp'), get_the_date() );  
        elseif ( is_month() ) :
		  printf( __( '%1$s %2$s', 'arilewp' ), __('Archives','arilewp'), get_the_date( 'F Y' ) );
        elseif ( is_year() ) :
		  printf( __( '%1$s %2$s', 'arilewp' ), __('Archives','arilewp'), get_the_date( 'Y' ) );
		elseif( is_author() ):
			printf( __( '%1$s %2$s', 'arilewp' ), __('All posts by','arilewp'), get_the_author() );
        elseif( is_category() ):
			printf( __( '%1$s %2$s', 'arilewp' ), __('Category','arilewp'), single_cat_title( '', false ) );
		elseif( is_tag() ):
			printf( __( '%1$s %2$s', 'arilewp' ), __('Tag','arilewp'), single_tag_title( '', false ) );
		elseif( class_exists( 'WooCommerce' ) && is_shop() ):
			printf( __( '%1$s %2$s', 'arilewp' ), __('Shop','arilewp'), single_tag_title( '', false ));
        elseif( is_archive() ): 
		the_archive_title( '<h1 class="text-white">', '</h1>' ); 
		endif;
		echo '</h1></div>';
	}
	elseif( is_404() )
	{
		echo '<div class="page-header-title '.$page_title_class.'"><h1 class="text-white">';
		printf( __( '%1$s ', 'arilewp' ) , __('404','arilewp') );
		echo '</h1></div>';
	}
	elseif( is_search() )
	{
		echo '<div class="page-header-title '.$page_title_class.'"><h1 class="text-white">';
		printf( __( '%1$s %2$s', 'arilewp' ), __('Search results for','arilewp'), get_search_query() );
		echo '</h1></div>';
	}
	else
	{
		echo '<div class="page-header-title '.$page_title_class.'"><h1 class="text-white">'.get_the_title().'</h1></div>';
	}
}

function arilewp_bootstrap_menu_notitle( $menu ){
  return $menu = preg_replace('/ title=\"(.*?)\"/', '', $menu );
}
add_filter( 'wp_nav_menu', 'arilewp_bootstrap_menu_notitle' );

/**
 * Theme Breadcrumbs Url
*/
function arilewp_page_url() {
	$page_url = 'http';
	if ( key_exists("HTTPS", $_SERVER) && ( $_SERVER["HTTPS"] == "on" ) ){
		$page_url .= "s";
	}
	$page_url .= "://";
	if ($_SERVER["SERVER_PORT"] != "80") {
		$page_url .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	} else {
		$page_url .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $page_url;
}

/**
 * Theme Breadcrumbs
*/
if( !function_exists('arilewp_page_header_breadcrumbs') ):
	function arilewp_page_header_breadcrumbs() { 	
		global $post;
		$homeLink = home_url();
		$arilewp_page_header_layout = get_theme_mod('arilewp_page_header_layout', 'arilewp_page_header_layout1');
		if($arilewp_page_header_layout == 'arilewp_page_header_layout1'):
			$breadcrumb_class = 'text-center';	
		else: $breadcrumb_class = 'text-right'; 
		endif;
		
		echo '<ul class="page-breadcrumb '.$breadcrumb_class.'">';						
			if (is_home() || is_front_page()) :
				echo '<li><a href="'.$homeLink.'">'.__('Home','arilewp').'</a></li>';
	            echo '<li class="active">'; echo single_post_title(); echo '</li>';
			else:
				echo '<li><a href="'.$homeLink.'">'.__('Home','arilewp').'</a></li>';
				if ( is_category() ) {
				    echo '<li class="active"><a href="'. arilewp_page_url() .'">' . __('Archive by category','arilewp').' "' . single_cat_title('', false) . '"</a></li>';
				} elseif ( is_day() ) {
					echo '<li class="active"><a href="'. get_year_link(get_the_time('Y')) . '">'. get_the_time('Y') .'</a>';
					echo '<li class="active"><a href="'. get_month_link(get_the_time('Y'),get_the_time('m')) .'">'. get_the_time('F') .'</a>';
					echo '<li class="active"><a href="'. arilewp_page_url() .'">'. get_the_time('d') .'</a></li>';
				} elseif ( is_month() ) {
					echo '<li class="active"><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a>';
					echo '<li class="active"><a href="'. arilewp_page_url() .'">'. get_the_time('F') .'</a></li>';
				} elseif ( is_year() ) {
				    echo '<li class="active"><a href="'. arilewp_page_url() .'">'. get_the_time('Y') .'</a></li>';
				} elseif ( is_single() && !is_attachment() && is_page('single-product') ) {					
				if ( get_post_type() != 'post' ) {
					$cat = get_the_category(); 
					$cat = $cat[0];
					echo '<li>';
					echo get_category_parents($cat, TRUE, '');
					echo '</li>';
					echo '<li class="active"><a href="' . arilewp_page_url() . '">'. wp_title( '',false ) .'</a></li>';
				} }  
					elseif ( is_page() && $post->post_parent ) {
				    $parent_id  = $post->post_parent;
					$breadcrumbs = array();
					while ($parent_id) {
						$page = get_page($parent_id);
						$breadcrumbs[] = '<li class="active"><a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
					$parent_id  = $page->post_parent;
					}
					$breadcrumbs = array_reverse($breadcrumbs);
					foreach ($breadcrumbs as $crumb) echo $crumb;
					    echo '<li class="active"><a href="' . arilewp_page_url() . '">'. get_the_title() .'</a></li>';
                    }
					elseif( is_search() )
					{
					    echo '<li class="active"><a href="' . arilewp_page_url() . '">'. get_search_query() .'</a></li>';
					}
					elseif( is_404() )
					{
						echo '<li class="active"><a href="' . arilewp_page_url() . '">'.__('Error 404','arilewp').'</a></li>';
					}
					else { 
					    echo '<li class="active"><a href="' . arilewp_page_url() . '">'. get_the_title() .'</a></li>';
					}
				endif;
		    echo '</ul>';
        }
endif;

/*
* Import customizer options from Lite version
*/
add_action( 'after_switch_theme', 'arilewp_merge_lite_options' );
/**
 * Import lite options.
 */
function arilewp_merge_lite_options() {

	$arilewp_mods = get_option( 'theme_mods_arilewp' );

	if ( ! empty( $arilewp_mods ) ) {

		foreach ( $arilewp_mods as $arilewp_mod_k => $arilewp_mod_v ) {
			set_theme_mod( $arilewp_mod_k, $arilewp_mod_v );
		}
	}
}

add_action( 'after_switch_theme', 'arilewp_import_theme_mods_from_child_theme_to_pro_theme' );

/**
* Import theme options from child theme to ArileWP Pro theme
*/
function arilewp_import_theme_mods_from_child_theme_to_pro_theme() {

    // Get the name of the previously active theme.
    $previous_theme = strtolower( get_option( 'theme_switched' ) );

    if ( ! in_array(
        $previous_theme, array(
            'business-street',
			'strangerwp',
			'newyork-city',
			'arilewp-child-theme',
			'interiorpress',
			'architect-design',
			'ariletech',
			'decorpress',
			'fresno',
			'designhub',
			'alberta',
			'architecto',
			'innopress',
			'agency-street',
			'etowah',
        )
    ) ) {
        return;
    }

    // Get the theme mods from the previous theme.
    $previous_theme_content = get_option( 'theme_mods_' . $previous_theme );

    if ( ! empty( $previous_theme_content ) ) {
        foreach ( $previous_theme_content as $previous_theme_mod_k => $previous_theme_mod_v ) {
            set_theme_mod( $previous_theme_mod_k, $previous_theme_mod_v );
        }
    }
}

/**
 * Import lite project options.
 */
$merge_project_lite_options = get_option( 'merge_project_lite_options' , 'lite');
$arilewp_project_content  = get_theme_mod( 'arilewp_project_content');
if ( ! empty( $arilewp_project_content ) ) {
	if ( $merge_project_lite_options === 'lite' ) {
	$allowed_html = array('br' => array(), 'em' => array(), 'strong' => array(), 'b' => array(),'i' => array());
	$arilewp_project_content = json_decode($arilewp_project_content);
        foreach ( $arilewp_project_content as $project_item ) {
			$image_url = ! empty( $project_item->image_url ) ? $project_item->image_url : '';
			$title = ! empty( $project_item->title ) ? $project_item->title : '';
			$text = ! empty( $project_item->text ) ? $project_item->text : '';
		
		if(!empty($title)){
			$post_id = wp_insert_post(
			array (
		   'post_type' => 'arilewp_portfolio',
		   'post_title' => $title,
		   'post_status' => 'publish',
		));
		$filename = $image_url;
		$filetype = wp_check_filetype( basename( $filename ), null );
		$wp_upload_dir = wp_upload_dir();
		$attachment = array(
			'guid'           => $wp_upload_dir['url'] . '/' . basename( $filename ), 
			'post_mime_type' => $filetype['type'],
			'post_title'     => preg_replace( '/\.[^.]+$/', '', basename( $filename ) ),
			'post_content'   => '',
			'post_status'    => 'inherit'
		);
		$attach_id = wp_insert_attachment( $attachment, $filename, $post_id );
		set_post_thumbnail( $post_id, $attach_id );
		update_post_meta($post_id, 'custom_portfolio_description', sanitize_text_field($text));
		$table_name = $wpdb->prefix . "term_relationships";
        $wpdb->insert($table_name, array('object_id' => $post_id, 'term_taxonomy_id' => 2 ,'term_order' => 0) ); 
		}
    }
	update_option( 'merge_project_lite_options', 'update' );
  }
  
}


/**
 * Blog Masonry
*/
function arilewp_custom_script()
{
wp_reset_query();
$col =6;
if(is_page_template('page-templates/blog-masonry-2-col.php'))
{ $col =6; }
elseif(is_page_template('page-templates/blog-masonry-3-col.php'))
{ $col =4; }
elseif(is_page_template('page-templates/blog-masonry-4-col.php'))
{ $col =3; }
?>
<script>
	jQuery(document).ready(function ( jQuery ) {
		jQuery("#blog-masonry").mpmansory(
			{
				childrenClass: 'item', // default is a div
				columnClasses: 'padding', //add classes to items
				breakpoints:{
					xl: <?php echo $col; ?>,   //Change masonry column here like 2, 3, 4 column
					lg: 4,
					md: 6,
					sm: 12,
					xs: 12
				},
				distributeBy: { order: false, height: false, attr: 'data-order', attrOrder: 'asc' }, //default distribute by order, options => order: true/false, height: true/false, attr => 'data-order', attrOrder=> 'asc'/'desc'
				onload: function (items) {
					//make somthing with items
				}
			}
		);
	});
</script>
<?php	
}
add_action('wp_footer','arilewp_custom_script');


function arilewp_background_image()
{
    $theme_boxed_image = get_theme_mod('arilewp_theme_background_image','bg-patternm1');
	if($theme_boxed_image!='')
	{
	if($theme_boxed_image == 'bg-patternm1' || $theme_boxed_image == 'bg-patternm2' || $theme_boxed_image == 'bg-patternm3' || $theme_boxed_image == 'bg-patternm4'){ $image_format = 'png';}
	else { $image_format = 'jpg'; }	
	echo '<style>body.theme-boxed{ background:url("'.ARILEWP_PARENT_INC_ICON_URI.'/'.$theme_boxed_image.'.'.$image_format.'") repeat fixed;}</style>';
	}
}
add_action('wp_head','arilewp_background_image',10,0);

/**
 * Add object term default
*/
function arilewp_default_object_terms( $post_id, $post ) {
       if ( 'publish' === $post->post_status && $post->post_type === 'arilewp_portfolio' ) {
           $defaults = array( 'portfolio_categories' => array( 'Show All' ) );
           $taxonomies = get_object_taxonomies( $post->post_type );
           foreach ( (array) $taxonomies as $taxonomy ) {
               $terms = wp_get_post_terms( $post_id, $taxonomy );
               if ( empty( $terms ) && array_key_exists( $taxonomy, $defaults ) ) {
                   wp_set_object_terms( $post_id, $defaults[$taxonomy], $taxonomy );
               }
           }
       }
   }
add_action( 'save_post', 'arilewp_default_object_terms', 0, 2 );

/**
 * Custom Theme Script
*/
function arilewp_custom_owl_theme_scripts() {	
$arilewp_main_slider_aniamte_type = get_theme_mod('arilewp_main_slider_aniamte_type', 'slide');
if($arilewp_main_slider_aniamte_type == 'fade'):
    $arilewp_main_slider_aniamte_in = 'fadeIn';  $arilewp_main_slider_aniamte_out = 'fadeOut';
else:
    $arilewp_main_slider_aniamte_in = '';  $arilewp_main_slider_aniamte_out = '';
endif;
$arilewp_main_slider_scroll_speed = get_theme_mod('arilewp_main_slider_scroll_speed', array('slider' => 2500,'suffix' => 'ms',));
$arilewp_main_slider_smart_speed = get_theme_mod('arilewp_main_slider_smart_speed', array('slider' => 1000,'suffix' => 'ms',));
$arilewp_main_slider_mouse_drag_disabled = get_theme_mod('arilewp_main_slider_mouse_drag_disabled', true);

$arilewp_project_scroll_speed = get_theme_mod('arilewp_project_scroll_speed', array('slider' => 2500,'suffix' => 'ms',));
$arilewp_project_smart_speed = get_theme_mod('arilewp_project_smart_speed', array('slider' => 1000,'suffix' => 'ms',));
$arilewp_project_mouse_drag_disabled = get_theme_mod('arilewp_project_mouse_drag_disabled', true);
$arilewp_project_column_layout = get_theme_mod('arilewp_project_column_layout', '4');

$arilewp_testimonial_scroll_speed = get_theme_mod('arilewp_testimonial_scroll_speed', array('slider' => 2500,'suffix' => 'ms',));
$arilewp_testimonial_smart_speed = get_theme_mod('arilewp_testimonial_smart_speed', array('slider' => 1000,'suffix' => 'ms',));
$arilewp_testimonial_mouse_drag_disabled = get_theme_mod('arilewp_testimonial_mouse_drag_disabled', true);
$arilewp_testimonial_column_layout = get_theme_mod('arilewp_testimonial_column_layout', '3');

$arilewp_wooshop_scroll_speed = get_theme_mod('arilewp_wooshop_scroll_speed', array('slider' => 2500,'suffix' => 'ms',));
$arilewp_wooshop_smart_speed = get_theme_mod('arilewp_wooshop_smart_speed', array('slider' => 1000,'suffix' => 'ms',));
$arilewp_wooshop_mouse_drag_disabled = get_theme_mod('arilewp_wooshop_mouse_drag_disabled', true);
$arilewp_wooshop_column_layout = get_theme_mod('arilewp_wooshop_column_layout', '4');

$arilewp_team_scroll_speed = get_theme_mod('arilewp_team_scroll_speed', array('slider' => 2500,'suffix' => 'ms',));
$arilewp_team_smart_speed = get_theme_mod('arilewp_team_smart_speed', array('slider' => 1000,'suffix' => 'ms',));
$arilewp_team_mouse_drag_disabled = get_theme_mod('arilewp_team_mouse_drag_disabled', true);
$arilewp_team_column_layout = get_theme_mod('arilewp_team_column_layout', '3');

$arilewp_client_scroll_speed = get_theme_mod('arilewp_client_scroll_speed', array('slider' => 2500,'suffix' => 'ms',));
$arilewp_client_smart_speed = get_theme_mod('arilewp_client_smart_speed', array('slider' => 1000,'suffix' => 'ms',));
$arilewp_client_mouse_drag_disabled = get_theme_mod('arilewp_client_mouse_drag_disabled', true);
$arilewp_client1_column_layout = get_theme_mod('arilewp_client1_column_layout', '5');
	
$custom_data = array(
            'arilewp_main_slider_aniamte_in' => $arilewp_main_slider_aniamte_in,
			'arilewp_main_slider_aniamte_out' => $arilewp_main_slider_aniamte_out,
		    'arilewp_main_slider_scroll_speed' => $arilewp_main_slider_scroll_speed['slider'],
			'arilewp_main_slider_smart_speed' => $arilewp_main_slider_smart_speed['slider'],
            'arilewp_main_slider_mouse_drag_disabled' => $arilewp_main_slider_mouse_drag_disabled,
			'arilewp_project_scroll_speed' => $arilewp_project_scroll_speed['slider'],
			'arilewp_project_smart_speed' => $arilewp_project_smart_speed['slider'],
			'arilewp_project_mouse_drag_disabled' => $arilewp_project_mouse_drag_disabled,
			'arilewp_project_column_layout' => $arilewp_project_column_layout,
			'arilewp_testimonial_scroll_speed' => $arilewp_testimonial_scroll_speed['slider'],
			'arilewp_testimonial_smart_speed' => $arilewp_testimonial_smart_speed['slider'],
			'arilewp_testimonial_mouse_drag_disabled' => $arilewp_testimonial_mouse_drag_disabled,
			'arilewp_testimonial_column_layout' => $arilewp_testimonial_column_layout,
			'arilewp_wooshop_scroll_speed' => $arilewp_wooshop_scroll_speed['slider'],
			'arilewp_wooshop_smart_speed' => $arilewp_wooshop_smart_speed['slider'],
			'arilewp_wooshop_mouse_drag_disabled' => $arilewp_wooshop_mouse_drag_disabled,
			'arilewp_wooshop_column_layout' => $arilewp_wooshop_column_layout,
			'arilewp_team_scroll_speed' => $arilewp_team_scroll_speed['slider'],
			'arilewp_team_smart_speed' => $arilewp_team_smart_speed['slider'],
			'arilewp_team_mouse_drag_disabled' => $arilewp_team_mouse_drag_disabled,
			'arilewp_team_column_layout' => $arilewp_team_column_layout,
			'arilewp_client_scroll_speed' => $arilewp_client_scroll_speed['slider'],
			'arilewp_client_smart_speed' => $arilewp_client_smart_speed['slider'],
			'arilewp_client_mouse_drag_disabled' => $arilewp_client_mouse_drag_disabled,
			'arilewp_client1_column_layout' => $arilewp_client1_column_layout,
			);

wp_register_script('arilewp-custom',get_template_directory_uri().'/assets/js/custom.js',array('jquery'));
wp_localize_script('arilewp-custom','custom_data',$custom_data);
wp_enqueue_script('arilewp-custom');
}
add_action( 'wp_enqueue_scripts', 'arilewp_custom_owl_theme_scripts' );

/**
 * Theme Pagination Class.
*/
class Class_ArileWP_Theme_Pagination
{
	function arilewp_pagination()
	{
		global $post;
		global $wp_query, $wp_rewrite,$loop;
		if ( get_query_var( 'paged' ) ) { $paged = get_query_var( 'paged' ); }
		elseif ( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); } else { $paged = 1; }
		if($wp_query->max_num_pages==0){ $wp_query = $loop; }
	?>
	<div class="pagination wow animate fadeInUp" data-wow-delay=".3s">
		<?php if( $paged != 1  ) : ?>
		<a href="<?php echo get_pagenum_link(($paged-1 > 0 ? $paged-1 : 1)); ?>"><i class="fa fa-angle-double-left"></i></a><?php endif; ?><?php for($i=1;$i<=($wp_query->max_num_pages>1 ? $wp_query->max_num_pages : 0 );$i++){ ?> <a class="<?php echo ($i == $paged ? 'active ' : ''); ?>" href="<?php echo get_pagenum_link($i); ?>"><?php echo $i; ?></a> <?php } ?>
		<?php if($wp_query->max_num_pages!= $paged): ?>
			<a href="<?php echo get_pagenum_link(($paged+1 <= $wp_query->max_num_pages ? $paged+1 : $wp_query->max_num_pages )); ?>"><i class="fa fa-angle-double-right"></i></a>
		<?php endif; ?>
	</div>
<?php 				
  } 
}

/**
 * Add WPML and Polylang compatibility.
*/

function arilewp_translate_single_string( $original_value, $domain ) {
	if ( is_customize_preview() ) {
		$wpml_translation = $original_value;
	} else {
		$wpml_translation = apply_filters( 'wpml_translate_single_string', $original_value, $domain, $original_value );
		if ( $wpml_translation === $original_value && function_exists( 'pll__' ) ) {
			return pll__( $original_value );
		}
	}
	return $wpml_translation;
}
add_filter( 'arilewp_translate_single_string', 'arilewp_translate_single_string', 10, 2 );

/**
 * register pll string.
*/
function arilewp_pll_string_register( $theme_mod ) {
	if ( ! function_exists( 'pll_register_string' ) ) { return; }
	$repeater_content = get_theme_mod( $theme_mod );
	$repeater_content = json_decode( $repeater_content );
	if ( ! empty( $repeater_content ) ) {
		foreach ( $repeater_content as $repeater_item ) {
			foreach ( $repeater_item as $field_name => $field_value ) {
				if ( $field_value !== 'undefined' ) {		
						if ( $field_name !== 'id' ) {
							$f_n = ucfirst( $field_name );
							pll_register_string( $f_n, $field_value);
					}
				}
			}
		}
	}
}
 
/**
 * Top Header Info
*/ 
function arilewp_top_header_info_register_strings() {
	arilewp_pll_string_register( 'arilewp_top_header_info_content', 'Theme Header Info' );
}

/**
 * Top Header Social Icon
*/
function arilewp_top_header_social_register_strings() {
	arilewp_pll_string_register( 'arilewp_top_header_social_content', 'Theme Header Social' );
}

/**
 * Theme Info
*/
function arilewp_theme_info_register_strings() {
	arilewp_pll_string_register( 'arilewp_theme_info_content', 'Theme Info Area' );
}

/**
 * Main Slider.
*/
function arilewp_main_slider_register_strings() {
	arilewp_pll_string_register( 'arilewp_main_slider_content', 'Theme Slider' );
}

/**
 * Service
*/
function arilewp_service_register_strings() {
	arilewp_pll_string_register( 'arilewp_service_content', 'Theme Service' );
}

/**
 * Funfact
*/
function arilewp_funfact_register_strings() {
	arilewp_pll_string_register( 'arilewp_funfact_content', 'Theme Funfact' );
}

/**
 * Testimonial
*/
function arilewp_testimonial_register_strings() {
	arilewp_pll_string_register( 'arilewp_testimonial_content', 'Theme Testimonial' );
}

/**
 * Team
*/
function arilewp_team_register_strings() {
	arilewp_pll_string_register( 'arilewp_team_content', 'Theme Team' );
}

/**
 * Client
*/
function arilewp_clients_register_strings() {
	arilewp_pll_string_register( 'arilewp_clients_content', 'Theme Client' );
}

/**
 * Contact Info
*/
function arilewp_contact_template_info_register_strings() {
	arilewp_pll_string_register( 'arilewp_contact_template_info_content', 'Theme Contact Info' );
}

/**
 * Pll register
*/
if ( function_exists( 'pll_register_string' ) ) {
	add_action( 'after_setup_theme', 'arilewp_top_header_info_register_strings', 11 );
	add_action( 'after_setup_theme', 'arilewp_top_header_social_register_strings', 11 );
	add_action( 'after_setup_theme', 'arilewp_theme_info_register_strings', 11 );
	add_action( 'after_setup_theme', 'arilewp_main_slider_register_strings', 11 );
	add_action( 'after_setup_theme', 'arilewp_service_register_strings', 11 );
	add_action( 'after_setup_theme', 'arilewp_funfact_register_strings', 11 );
	add_action( 'after_setup_theme', 'arilewp_testimonial_register_strings', 11 );
	add_action( 'after_setup_theme', 'arilewp_team_register_strings', 11 );
	add_action( 'after_setup_theme', 'arilewp_clients_register_strings', 11 );
	add_action( 'after_setup_theme', 'arilewp_contact_template_info_register_strings', 11 );
}

/**
 * Import data
*/
function arilewp_pro_ocdi_import_files() {
    return array(
        array(
            'import_file_name'           => 'Demo 1',
            'import_file_url'            => 'https://themearile.com/demo-data/arilewp-pro-data/demo1/arilewp-pro.xml',
            'import_widget_file_url'     => 'https://themearile.com/demo-data/arilewp-pro-data/demo1/widgets.wie',
            'import_customizer_file_url' => 'https://themearile.com/demo-data/arilewp-pro-data/demo1/customizer.dat',
            'import_preview_image_url'   => 'https://themearile.com/wp-content/themes/themearile-pro/assets/img/arilewp-pro/homepage-one.jpg',
            'import_notice'              => __( 'After you import this demo, you will have to set the menus.', 'arilewp' ),
            'preview_url'                => 'https://arilewp-pro.themearile.com/',
        ),
		array(
            'import_file_name'           => 'Demo 2',
            'import_file_url'            => 'https://themearile.com/demo-data/arilewp-pro-data/demo2/arilewp-pro.xml',
            'import_widget_file_url'     => 'https://themearile.com/demo-data/arilewp-pro-data/demo2/widgets.wie',
            'import_customizer_file_url' => 'https://themearile.com/demo-data/arilewp-pro-data/demo2/customizer.dat',
            'import_preview_image_url'   => 'https://themearile.com/wp-content/themes/themearile-pro/assets/img/arilewp-pro/homepage-two.jpg',
            'import_notice'              => __( 'After you import this demo, you will have to set the menus.', 'arilewp' ),
            'preview_url'                => 'https://arilewp-pro-two.themearile.com/',
        ),
		array(
            'import_file_name'           => 'Demo 3',
            'import_file_url'            => 'https://themearile.com/demo-data/arilewp-pro-data/demo3/arilewp-pro.xml',
            'import_widget_file_url'     => 'https://themearile.com/demo-data/arilewp-pro-data/demo3/widgets.wie',
            'import_customizer_file_url' => 'https://themearile.com/demo-data/arilewp-pro-data/demo3/customizer.dat',
            'import_preview_image_url'   => 'https://themearile.com/wp-content/themes/themearile-pro/assets/img/arilewp-pro/homepage-three.jpg',
            'import_notice'              => __( 'After you import this demo, you will have to set the menus.', 'arilewp' ),
            'preview_url'                => 'https://arilewp-pro-three.themearile.com/',
        ),
		array(
            'import_file_name'           => 'Demo 4',
            'import_file_url'            => 'https://themearile.com/demo-data/arilewp-pro-data/demo4/arilewp-pro.xml',
            'import_widget_file_url'     => 'https://themearile.com/demo-data/arilewp-pro-data/demo4/widgets.wie',
            'import_customizer_file_url' => 'https://themearile.com/demo-data/arilewp-pro-data/demo4/customizer.dat',
            'import_preview_image_url'   => 'https://themearile.com/wp-content/themes/themearile-pro/assets/img/arilewp-pro/homepage-four.jpg',
            'import_notice'              => __( 'After you import this demo, you will have to set the menus.', 'arilewp' ),
            'preview_url'                => 'https://arilewp-pro-four.themearile.com/',
        ),
		array(
            'import_file_name'           => 'Demo 5',
            'import_file_url'            => 'https://themearile.com/demo-data/arilewp-pro-data/demo5/arilewp-pro.xml',
            'import_widget_file_url'     => 'https://themearile.com/demo-data/arilewp-pro-data/demo5/widgets.wie',
            'import_customizer_file_url' => 'https://themearile.com/demo-data/arilewp-pro-data/demo5/customizer.dat',
            'import_preview_image_url'   => 'https://themearile.com/wp-content/themes/themearile-pro/assets/img/arilewp-pro/homepage-five.jpg',
            'import_notice'              => __( 'After you import this demo, you will have to set the menus.', 'arilewp' ),
            'preview_url'                => 'https://arilewp-pro-five.themearile.com/',
        ),
		array(
            'import_file_name'           => 'Demo 6',
            'import_file_url'            => 'https://themearile.com/demo-data/arilewp-pro-data/demo6/arilewp-pro.xml',
            'import_widget_file_url'     => 'https://themearile.com/demo-data/arilewp-pro-data/demo6/widgets.wie',
            'import_customizer_file_url' => 'https://themearile.com/demo-data/arilewp-pro-data/demo6/customizer.dat',
            'import_preview_image_url'   => 'https://themearile.com/wp-content/themes/themearile-pro/assets/img/arilewp-pro/homepage-six.jpg',
            'import_notice'              => __( 'After you import this demo, you will have to set the menus.', 'arilewp' ),
            'preview_url'                => 'https://arilewp-pro-six.themearile.com/',
        ),
		array(
            'import_file_name'           => 'Demo 7',
            'import_file_url'            => 'https://themearile.com/demo-data/arilewp-pro-data/demo7/arilewp-pro.xml',
            'import_widget_file_url'     => 'https://themearile.com/demo-data/arilewp-pro-data/demo7/widgets.wie',
            'import_customizer_file_url' => 'https://themearile.com/demo-data/arilewp-pro-data/demo7/customizer.dat',
            'import_preview_image_url'   => 'https://themearile.com/wp-content/themes/themearile-pro/assets/img/arilewp-pro/homepage-seven.jpg',
            'import_notice'              => __( 'After you import this demo, you will have to set the menus.', 'arilewp' ),
            'preview_url'                => 'https://arilewp-pro-seven.themearile.com/',
        ),
		array(
            'import_file_name'           => 'Demo 8',
            'import_file_url'            => 'https://themearile.com/demo-data/arilewp-pro-data/demo8/arilewp-pro.xml',
            'import_widget_file_url'     => 'https://themearile.com/demo-data/arilewp-pro-data/demo8/widgets.wie',
            'import_customizer_file_url' => 'https://themearile.com/demo-data/arilewp-pro-data/demo8/customizer.dat',
            'import_preview_image_url'   => 'https://themearile.com/wp-content/themes/themearile-pro/assets/img/arilewp-pro/homepage-eight.jpg',
            'import_notice'              => __( 'After you import this demo, you will have to set the menus.', 'arilewp' ),
            'preview_url'                => 'https://arilewp-pro-eight.themearile.com/',
        ),
		array(
            'import_file_name'           => 'Demo 9',
            'import_file_url'            => 'https://themearile.com/demo-data/arilewp-pro-data/demo9/arilewp-pro.xml',
            'import_widget_file_url'     => 'https://themearile.com/demo-data/arilewp-pro-data/demo9/widgets.wie',
            'import_customizer_file_url' => 'https://themearile.com/demo-data/arilewp-pro-data/demo9/customizer.dat',
            'import_preview_image_url'   => 'https://themearile.com/wp-content/themes/themearile-pro/assets/img/arilewp-pro/homepage-nine.jpg',
            'import_notice'              => __( 'After you import this demo, you will have to set the menus.', 'arilewp' ),
            'preview_url'                => 'https://arilewp-pro-nine.themearile.com/',
        ),
		array(
            'import_file_name'           => 'Demo 10',
            'import_file_url'            => 'https://themearile.com/demo-data/arilewp-pro-data/demo10/arilewp-pro.xml',
            'import_widget_file_url'     => 'https://themearile.com/demo-data/arilewp-pro-data/demo10/widgets.wie',
            'import_customizer_file_url' => 'https://themearile.com/demo-data/arilewp-pro-data/demo10/customizer.dat',
            'import_preview_image_url'   => 'https://themearile.com/wp-content/themes/themearile-pro/assets/img/arilewp-pro/homepage-ten.jpg',
            'import_notice'              => __( 'After you import this demo, you will have to set the menus.', 'arilewp' ),
            'preview_url'                => 'https://arilewp-pro-ten.themearile.com/',
        ),
		array(
            'import_file_name'           => 'Demo 11',
            'import_file_url'            => 'https://themearile.com/demo-data/arilewp-pro-data/demo11/arilewp-pro.xml',
            'import_widget_file_url'     => 'https://themearile.com/demo-data/arilewp-pro-data/demo11/widgets.wie',
            'import_customizer_file_url' => 'https://themearile.com/demo-data/arilewp-pro-data/demo11/customizer.dat',
            'import_preview_image_url'   => 'https://themearile.com/wp-content/themes/themearile-pro/assets/img/arilewp-pro/homepage-eleven.jpg',
            'import_notice'              => __( 'After you import this demo, you will have to set the menus.', 'arilewp' ),
            'preview_url'                => 'https://arilewp-pro-eleven.themearile.com/',
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'arilewp_pro_ocdi_import_files' );