<?php
/**
* 
* Portfolio custom post type
*
**/		
function arilewp_custom_portfolio_type(){
	register_post_type( 'arilewp_portfolio',array( 'labels' => array(
				'name' => __('Projects', 'arilewp'),
				'add_new' => __('Add New', 'arilewp'),
                'add_new_item' => __('Add New Project','arilewp'),
				'edit_item' => __('Add New','arilewp'),
				'new_item' => __('New Link','arilewp'),
				'all_items' => __('All Projects','arilewp'),
				'view_item' => __('View Link','arilewp'),
				'search_items' => __('Search Links','arilewp'),
				'not_found' =>  __('No Links found','arilewp'),
				'not_found_in_trash' => __('No Links found in Trash','arilewp'), ),
				'supports' => array('title','thumbnail'),
				'show_in_nav_menus' => false,
				'public' => true,
				'rewrite' => array('slug' => 'portfolio'),
				'menu_position' => 20,
				'public' => true,
				'menu_icon' => get_template_directory_uri() . '/assets/img/project.png',
			)
	);
}
add_action( 'init', 'arilewp_custom_portfolio_type' );

function add_projects_to_fg_post_types( $post_types ) {
    // Add 'projects' post type to the list
    $post_types[] = 'arilewp_portfolio';
    return $post_types;
}
add_filter( 'fg_post_types', 'add_projects_to_fg_post_types' );

?>