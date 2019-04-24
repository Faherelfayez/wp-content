<?PHP 

/**
 * @package Contact_Me
 * @version 0.1
 */
/*
Plugin Name: Contact me form 
Description: Create a contact me form plugin for clients that want to reach me 
Author: Faher Elfayez
 */



// add a role for users submitting data// .....check on this one becuase dont think it is needed since we have a role of contributor already set up...unless i want to add a client rolr 
function wporg_simple_role()
{
    add_role(
        'simple_role',
        'Simple Role',
        [
            'read'         => true,
            'edit_posts'   => true,
            'upload_files' => true,
        ]
    );
}
 
// add the simple_role
add_action('init', 'wporg_simple_role');
///role thing ends here//





function function_contactmeform()
{
    // do something
}
add_action('init', 'unction_contactmeform');




<?php
// Add a submenu page and save the returned hook suffix.
$html_form_page_hook = add_submenu_page( 
	$this->plugin_name, //parent slug
	__( 'Admin Form Demo', $this->plugin_text_domain ), //page title
	__( 'HTML Form Submit', $this->plugin_text_domain ), //menu title
	'manage_options', //capability
	$this->plugin_name, //menu_slug
	array( $this, 'html_form_page_content' ) //callback for page content
);




//dding a meta box to the post edit screen//

function wporg_add_custom_box()
{
    $screens = ['post', 'wporg_cpt'];
    foreach ($screens as $screen) {
        add_meta_box(
            'wporg_box_id',           // Unique ID
            'Custom Meta Box Title',  // Box title
            'wporg_custom_box_html',  // Content callback, must be of type callable
            $screen                   // Post type
        );
    }
}
add_action('add_meta_boxes', 'wporg_add_custom_box');

//saving values//
function wporg_save_postdata($post_id)
{
    if (array_key_exists('wporg_field', $_POST)) {
        update_post_meta(
            $post_id,
            '_wporg_meta_key',
            $_POST['wporg_field']
        );
    }
}
add_action('save_post', 'wporg_save_postdata');



//To retrieve saved user data and make use of it, you need to get it from wherever you saved it initially//

function wporg_custom_box_html($post)
{
    $value = get_post_meta($post->ID, '_wporg_meta_key', true);
    ?>
    <label for="wporg_field">Description for this field</label>
    <select name="wporg_field" id="wporg_field" class="postbox">
        <option value="">Select something...</option>
        <option value="something" <?php selected($value, 'something'); ?>>Something</option>
        <option value="else" <?php selected($value, 'else'); ?>>Else</option>
    </select>
    <?php
}


// addd taxonomies//


add_action( 'init', 'rl_create_contact_taxonomies', 0 );
function rl_create_book_taxonomies() {
	// Add new taxonomy, keep it non-hierarchical (like tags)
	$labels = array(
		'first_name' 					=> __( 'client', 'Contactform' ),
		'last_name' 		     		=> __( 'Author', 'Contactform' ),
		'email' 					=> __( 'email', 'Contactform' ),
		'subject' 					=> __( 'subject', 'Contactform' ),
		'message' 					=> __( 'message', 'Contactform' ), 
		
	); 	
		
	register_taxonomy( 'book-author', array( 'rl_book' ), array(
		'hierarchical' 		=> false,
		'labels' 			=> $labels,
		'show_ui' 			=> true,
		'show_admin_column' => true,
		'query_var' 		=> true,
		'rewrite' 			=> array( 'slug' => 'book-author' ),
	));
}
/**
