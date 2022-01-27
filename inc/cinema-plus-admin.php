<?php

/*
    =========================================
   Cinema Plus Sidebar Options
    =========================================
*/

function cp_add_admin_page() {
	
	//Generate Sunset Admin Page
	add_menu_page( 'Cinema Plus Theme Options', 'Cinema Plus', 'manage_options', 'cinema_plus', 'cp_contact_create_page','');
	
	//Generate Sunset Admin Sub Pages
	add_submenu_page( 'cinema_plus', 'Cinema Plus Theme Options', 'Contact Form', 'manage_options', 'cinema_plus', 'cp_contact_create_page' );
	
	
	
}
add_action( 'admin_menu', 'cp_add_admin_page' );

//Activate custom settings
	add_action( 'admin_init', 'cp_custom_settings' );

function cp_custom_settings() {

	// Activate - Deactivate Option
	register_setting( 'cp-settings-group', 'activate_status' );
	add_settings_section( 'cp-contact-options', 'Contact Form Option', '', 'cinema_plus');
	add_settings_field( 'contact-name', 'Activate Contact Form', 'cp_activate_contact', 'cinema_plus', 'cp-contact-options');

	// Response Types
	register_setting( 'cp-response-group', 'response_type' );
	add_settings_section( 'cp-response-option', 'Response Type Option', '', 'cinema_plus');
	add_settings_field( 'response', 'Select Response Type', 'cp_select_response', 'cinema_plus', 'cp-response-option');


}


// Activate - Deactivate Option
function cp_activate_contact() {
    $options = get_option( 'activate_status' );
    $checked = ($options == 1? 'checked':"");
	echo ' <input type="checkbox" name="activate_status" id="" value="1" '.$checked.'>';
}


// Response Types
function cp_select_response() {
    require_once(get_template_directory(  )."/template-parts/forms/contact-settings-response-select.php");
}



function cp_contact_create_page() {
	require_once( get_template_directory() . '/template-parts/forms/contact-settings-form.php' );
}

?>