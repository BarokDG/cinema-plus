<?php

/*
	
	========================
		THEME CUSTOM POST TYPES
	========================
*/

$contact_status = get_option( 'activate_status' );
if( $contact_status == 1 ){
	add_action( 'init', 'cp_contact_custom_post_type' );

    add_filter( 'manage_cp-contact_posts_columns', 'cinema_plus_set_contact_columns' );
	add_action( 'manage_cp-contact_posts_custom_column', 'cinema_plus_contact_custom_column', 10, 2 );

	add_action( 'add_meta_boxes', 'cinema_plus_contact_add_meta_box' );
	add_action( 'save_post', 'cinema_plus_save_contact_email_data' );

	
}

function cp_contact_custom_post_type() {
	$labels = array(
		'name' 				=> 'Messages',
		'singular_name' 	=> 'Message',
		'menu_name'			=> 'Messages',
		'name_admin_bar'	=> 'Message'
	);
	
	$args = array(
		'labels'			=> $labels,
		'show_ui'			=> true,
		'show_in_menu'		=> true,
		'capability_type'	=> 'post',
		'hierarchical'		=> false,
		'menu_position'		=> 26,
		'menu_icon'			=> 'dashicons-email-alt',
		'supports'			=> array( 'title', 'editor', 'author' )
	);
	
	register_post_type( 'cp-contact', $args );
	
}

function cinema_plus_set_contact_columns( $columns ){
	$newColumns = array();
	$newColumns['title'] = 'Full Name';
	$newColumns['message'] = 'Message';
	$newColumns['email'] = 'Email';
	$newColumns['date'] = 'Date';
	return $newColumns;
}

function cinema_plus_contact_custom_column( $column, $post_id ){
	
	switch( $column ){
		
		case 'message' :
			echo get_the_excerpt();
			break;
			
		case 'email' :
				$email = get_post_meta( $post_id, '_contact_email_value_key', true );
			echo '<a href="mailto:'.$email.'">'.$email.'</a>';
			break;
	}
	
}


/* CONTACT META BOXES */

function cinema_plus_contact_add_meta_box() {
	add_meta_box( 'contact_email', 'User Email', 'cinema_plus_contact_email_callback', 'cp-contact', 'side' );
}

function cinema_plus_contact_email_callback( $post ) {
	wp_nonce_field( 'cinema_save_contact_email_data', 'cinema_plus_contact_email_meta_box_nonce' );
	
	$value = get_post_meta( $post->ID, '_contact_email_value_key', true );
	
	echo '<label for="cinema_plus_contact_email_field">User Email Address: </label>';
	echo '<input type="email" id="cinema_plus_contact_email_field" name="cinema_plus_contact_email_field" value="' . esc_attr( $value ) . '" size="25" />';
}

function cinema_plus_save_contact_email_data( $post_id ) {
	
	if( ! isset( $_POST['cinema_plus_contact_email_meta_box_nonce'] ) ){
		return;
	}
	
	if( ! wp_verify_nonce( $_POST['cinema_plus_contact_email_meta_box_nonce'], 'cinema_plus_save_contact_email_data') ) {
		return;
	}
	
	if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){
		return;
	}
	
	if( ! current_user_can( 'edit_post', $post_id ) ) {
		return;
	}
	
	if( ! isset( $_POST['cinema_plus_contact_email_field'] ) ) {
		return;
	}
	
	$my_data = sanitize_text_field( $_POST['cinema_plus_contact_email_field'] );
	
	update_post_meta( $post_id, '_contact_email_value_key', $my_data );
	
}

?>