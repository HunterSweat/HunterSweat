<?php 
/** 
* Metabox for Page Layout
*
* @package arilewp
*
*/ 

function arilewp_add_sidebar_layout_box(){
    add_meta_box(  'arilewp_sidebar_layout', __( 'Sidebar Layout', 'arilewp' ), 'arilewp_sidebar_layout_callback', 'page', 'normal', 'high' );
}
add_action( 'add_meta_boxes', 'arilewp_add_sidebar_layout_box' );

$arilewp_sidebar_layout = array( 

    'right-sidebar' => array(
         'value'     => 'right-sidebar',
    	 'label'     => __( 'Right Sidebar', 'arilewp' ),
    	 'thumbnail' => get_template_directory_uri() . '/assets/img/icons/theme-right-sidebar.png'         
     ),   
    'no-sidebar'     => array(
    	 'value'     => 'no-sidebar',
    	 'label'     => __( 'Full Width', 'arilewp' ),
    	 'thumbnail' => get_template_directory_uri() . '/assets/img/icons/theme-fullwidth.png'
   	),    
    'left-sidebar' => array(
         'value'     => 'left-sidebar',
    	 'label'     => __( 'Left Sidebar', 'arilewp' ),
    	 'thumbnail' => get_template_directory_uri() . '/assets/img/icons/theme-left-sidebar.png'         
    ),
  
);

function arilewp_sidebar_layout_callback(){
    global $post , $arilewp_sidebar_layout;
    wp_nonce_field( basename( __FILE__ ), 'arilewp_nonce' );
?>
 
<table class="form-table">
    <tr>
        <td colspan="4"><em class="f13"><?php esc_html_e( 'Choose Sidebar Template for the Default Page Templates', 'arilewp' ); ?></em></td>
    </tr>

    <tr>
        <td>
        <?php  
            foreach( $arilewp_sidebar_layout as $field ){  
                $layout = get_post_meta( $post->ID, '_sidebar_layout', true ); ?>

            <div class="radio-image-wrapper" style="float:left; margin-right:30px;">
                <label class="description">
                    <span><img src="<?php echo esc_url( $field['thumbnail'] ); ?>" alt="" /></span><br/>
                    <input type="radio" name="arilewp_sidebar_layout" value="<?php echo esc_attr( $field['value'] ); ?>" <?php checked( $field['value'], $layout ); if( empty( $layout ) ){ checked( $field['value'], 'right-sidebar' ); }?>/>&nbsp;<?php echo esc_html( $field['label'] ); ?>
                </label>
            </div>
            <?php } // end foreach 
            ?>
            <div class="clear"></div>
        </td>
    </tr>
</table>
 
<?php 
}

function arilewp_save_sidebar_layout( $post_id ){
      global $arilewp_sidebar_layout , $post;

       // Verify the nonce before proceeding.
    if ( !isset( $_POST[ 'arilewp_nonce' ] ) || !wp_verify_nonce( $_POST[ 'arilewp_nonce' ], basename( __FILE__ ) ) )
        return;
    
 // Stop WP from clearing custom fields on autosave
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE)  
        return;

    if ('page' == $_POST['post_type']) {  
        if (!current_user_can( 'edit_page', $post_id ) )  
            return $post_id;	
    } elseif (!current_user_can( 'edit_post', $post_id ) ) {  
            return $post_id;  
    }
    foreach( $arilewp_sidebar_layout as $field ){  
        //Execute this saving function
        $old = get_post_meta( $post_id, '_sidebar_layout', true ); 
        $new = sanitize_text_field( $_POST['arilewp_sidebar_layout'] );
        if( $new && $new != $old ) {  
            update_post_meta( $post_id, '_sidebar_layout', $new );  
        }elseif( '' == $new && $old ) {  
            delete_post_meta( $post_id, '_sidebar_layout', $old );  
        } 
     } // end foreach     
}
add_action( 'save_post' , 'arilewp_save_sidebar_layout' );

function arilewp_page_container_layout(){
    add_meta_box(  'arilewp_page_container', __( 'Container Width', 'arilewp' ), 'arilewp_page_container_callback', 'page', 'normal', 'high' );
}
add_action( 'add_meta_boxes', 'arilewp_page_container_layout' );

$arilewp_page_container = array( 

    'right-sidebar' => array(
         'value'     => 'container',
    	 'label'     => __( 'Container', 'arilewp' ),        
     ),   
    'no-sidebar'     => array(
    	 'value'     => 'container-full',
    	 'label'     => __( 'Container Full', 'arilewp' ),
   	),
  
);

function arilewp_page_container_callback(){
    global $post , $arilewp_page_container;
    wp_nonce_field( basename( __FILE__ ), 'arilewp_nonce' );
?>
 
<table class="form-table">
    <tr>
        <td colspan="4"><em class="f13"><?php esc_html_e( 'Select the Container Size for the Default Page Templates', 'arilewp' ); ?></em></td>
    </tr>

    <tr>
        <td>
        <?php  
            foreach( $arilewp_page_container as $field ){  
                $layout = get_post_meta( $post->ID, '_page_layout', true ); ?>

            <div class="radio-image-wrapper" style="float:left; margin-right:30px;">
                <label class="description">
                    <input type="radio" name="arilewp_page_container" value="<?php echo esc_attr( $field['value'] ); ?>" <?php checked( $field['value'], $layout ); if( empty( $layout ) ){ checked( $field['value'], 'container' ); }?>/>&nbsp;<?php echo esc_html( $field['label'] ); ?>
                </label>
            </div>
            <?php } // end foreach 
            ?>
            <div class="clear"></div>
        </td>
    </tr>
</table>
 
<?php 
}

function arilewp_save_page_layout( $post_id ){
      global $arilewp_page_container , $post;

       // Verify the nonce before proceeding.
    if ( !isset( $_POST[ 'arilewp_nonce' ] ) || !wp_verify_nonce( $_POST[ 'arilewp_nonce' ], basename( __FILE__ ) ) )
        return;
    
 // Stop WP from clearing custom fields on autosave
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE)  
        return;

    if ('page' == $_POST['post_type']) {  
        if (!current_user_can( 'edit_page', $post_id ) )  
            return $post_id;	
    } elseif (!current_user_can( 'edit_post', $post_id ) ) {  
            return $post_id;  
    }
    foreach( $arilewp_page_container as $field ){  
        //Execute this saving function
        $old = get_post_meta( $post_id, '_page_layout', true ); 
        $new = sanitize_text_field( $_POST['arilewp_page_container'] );
        if( $new && $new != $old ) {  
            update_post_meta( $post_id, '_page_layout', $new );  
        }elseif( '' == $new && $old ) {  
            delete_post_meta( $post_id, '_page_layout', $old );  
        } 
     } // end foreach     
}
add_action( 'save_post' , 'arilewp_save_page_layout' );


add_action('admin_init','arilewp_project_meta_init');
function arilewp_project_meta_init()
	{
		add_meta_box('home_project_meta', __('Project Details','arilewp'), 'arilewp_meta_for_portfolio', 'arilewp_portfolio', 'normal', 'high');
		add_meta_box('arilewp_page_slider', __('Show Slider on the Page','arilewp'), 'arilewp_page_slider_show', 'page', 'normal', 'high');
		add_action('save_post','arilewp_save_meta_portfolio');
	}

    function arilewp_meta_for_portfolio()
        {
            global $post ;
            $custom_portfolio_link =sanitize_text_field( get_post_meta( get_the_ID(), 'custom_portfolio_link', true ));
            $custom_portfolio_target =sanitize_text_field( get_post_meta( get_the_ID(), 'custom_portfolio_target', true ));
            $custom_portfolio_short_description =sanitize_text_field( get_post_meta( get_the_ID(), 'custom_portfolio_description', true ));
        ?>
            <p><h4 class="heading"><?php esc_attr_e('Link','arilewp');?></h4></p>
            <p><input style="width:600px;" name="custom_portfolio_link" id="custom_portfolio_link" placeholder="<?php esc_attr_e('Link','arilewp');?>" type="text" value="<?php if (!empty($custom_portfolio_link)) echo esc_attr($custom_portfolio_link);?>"> </p>
            <p><input type="checkbox" id="custom_portfolio_target" name="custom_portfolio_target" <?php if($custom_portfolio_target) echo "checked"; ?> > <?php esc_attr_e('Open link in new tab','arilewp'); ?></p>
            <p><h4 class="heading"><?php esc_attr_e('Short Description','arilewp');?></h4>
            <p><textarea name="custom_portfolio_description" id="custom_portfolio_description" style="width: 480px; height: 56px; padding: 0px;" placeholder="<?php esc_attr_e('Description','arilewp');?>"  rows="3" cols="10" ><?php if (!empty($custom_portfolio_short_description)) echo esc_attr($custom_portfolio_short_description);?></textarea></p>
            <p><h4 class="heading"><?php esc_attr_e('Single Description', 'arilewp');?></h4> </p>
    <?php }


function arilewp_page_slider_show()
	{
		global $post ;
		$page_slider_enable = sanitize_text_field( get_post_meta( get_the_ID(), 'page_slider_enable', true )); ?>
		<input type="checkbox" name="page_slider_enable" id="page_slider_enable" <?php if($page_slider_enable){echo "checked='checked'";}?> /><?php _e('Show Slider on the Page','arilewp'); ?>
		<?php
	}

function arilewp_save_meta_portfolio($post_id) 
{	 
	if ((defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) || (defined('DOING_AJAX') && DOING_AJAX) || isset($_REQUEST['bulk_edit']))
        return;
		
	if ( ! current_user_can( 'edit_page', $post_id ) )
	{   return ;	} 
		
	if(isset( $_POST['post_ID']))
	{ 	
		$post_ID = $_POST['post_ID'];				
		$post_type=get_post_type($post_ID);
		
		
		if($post_type=='arilewp_portfolio')
		{	
	
	        update_post_meta($post_ID, 'custom_portfolio_link', sanitize_text_field($_POST['custom_portfolio_link']));	
			update_post_meta($post_ID, 'custom_portfolio_target', sanitize_text_field($_POST['custom_portfolio_target']));
			update_post_meta($post_ID, 'custom_portfolio_description', sanitize_text_field($_POST['custom_portfolio_description']));
								
		}
		
	    elseif($post_type=='page')
		{	
			update_post_meta($post_ID, 'page_slider_enable', sanitize_text_field(isset($_POST['page_slider_enable'])));
							
		}
			
					
	}				
}