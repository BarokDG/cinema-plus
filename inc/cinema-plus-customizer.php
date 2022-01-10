<?php

// Get Sanitizer Class and Initiate it
require get_stylesheet_directory(  ) . "/inc/cinema-plus-sanitizer.php";
$cinema_plus_sanitizer = new CinemaPlusSanitizer();


// Define the Customizer class
class CinemaPlusCustomizer{

/*
    ========================================
    Constructor Function : Hooks the customizer function
    ========================================
*/
    public function __construct(){
        add_action("customize_register",array($this,'register_customizer_sections'));
    }
    
/*
    ========================================
    Customizer Function: Initialize all customizer function
    ========================================
*/
    public function register_customizer_sections($wp_customize){
        $this -> global_values_customizer($wp_customize);
        $this -> landing_page_customizer($wp_customize);
    }


/*
    ========================================
   Function to define new Section
    ========================================
*/
    private function add_new_section($wp_customize_instance,$section_name,$section_title,$section_description="",$section_priority=1){
        $wp_customize_instance -> add_section($section_name,array(
            'title' => __($section_title),
            'description' => __($section_description),
            'priority' => $section_priority,
        ));
    }
/*
    ========================================
   Function to define new Setting
    ========================================
*/
     private function add_new_setting($wp_customize_instance,$setting_name,$default_value,$sanitize_callback){
         $wp_customize_instance -> add_setting($setting_name,array(
            'default' => $default_value,
             'sanitize_callback' => $sanitize_callback,
        ));
    }


/*
    ========================================
    Global Customizer Function : All Settings and Controls for Global Values
    ========================================
*/
    private function global_values_customizer($wp_customize){
        // Define All Controls and Settings pair for global values
    }

/*
    ========================================
    Landing Page Customizer Function : All Settings and Controls for Landing Page
    ========================================
*/ 
    private function landing_page_customizer($wp_customize){
        // Define All Controls and Settings pair for Landing Page values
    }
}

?>