<?php 
function arilewp_portfolio_taxonomy() {
	register_taxonomy('portfolio_categories', 'arilewp_portfolio',
    array(  'hierarchical' => true,
			'show_in_nav_menus' => true,
			'rewrite' => array('slug' => 'project_category' ),
            'label' => 'Project categories',
            'query_var' => true));
	if((isset($_POST['action'])) && (isset($_POST['taxonomy']))){		
		wp_update_term($_POST['tax_ID'], 'arilewp_categories', array(
		  'name' => $_POST['name'],
		  'slug' => $_POST['slug']
		));
	} 
	else 
	{
	$myterms = get_terms( 'portfolio_categories',array('hide_empty'=>false) );
		if(empty($myterms)){
			$defaultterm=wp_insert_term('Show All','portfolio_categories', array('description'=> 'Default Category','slug' => 'show-all'));
			update_option('arilewp_default_term_id', $defaultterm['term_id']);
		}
	}
	//update category
	if(isset($_POST['action']) && isset($_POST['taxonomy']) )
	{	wp_update_term($_POST['tag_ID'], 'portfolio_categories', array(
		  'name' => $_POST['name'],
		  'slug' => $_POST['slug'],
		  'description' =>$_POST['description']
		));
	}
	// Delete default category
	if(isset($_POST['action']) && isset($_POST['tag_ID']) )
	{	if(($_POST['tag_ID'] == $defualt_tex_id) &&$_POST['action']	 =="delete-tag")
		{	
			delete_option('custom_texo_arilewp'); 
		} 
	}		
}
add_action( 'init', 'arilewp_portfolio_taxonomy' );
?>