<?php

/*
    =========================================
    Register Styles
    =========================================
*/

// Function to register one style
function cp_register_style($style_name,$file_name,$dependencies=array(),$version='1.0',$screen_type='all'){
    wp_enqueue_style( $style_name, get_template_directory_uri(  ) . '/assets/css' .$file_name, $dependencies,$version,$screen_type );
}

// Function to register all styles
function cp_register_all_styles(){
    
    // Enqueue Each Style -> dependencies, version & screen type are optional parameters as they have default values
    cp_register_style('ADD LOCAL STYLE NAME HERE','ADD FILENAME HERE',"ADD DEPENDENCIES HERE","ADD VERSION HERE","ADD SCREEN TYPE HERE");
}

// Hook the function that enqueues all styles
add_action( 'wp_enqueue_scripts', "cp_register_all_styles" );


/*
    =========================================
    Register Scripts
    =========================================
*/

// Function to register one script
function cp_register_script($script_name,$file_name,$dependencies=array(),$version='1.0',$isDeferred=true){
    wp_enqueue_script($script_name,$file_name,$dependencies,$version,$isDeferred);
}

// Function to register all scripts
function cp_register_all_scripts(){

      // Enqueue Each Script -> dependencies,version & isDeferred are optional parameters as they have default values
      cp_register_script("ADD SCRIPT NAME HERE","ADD FILE NAME HERE","ADD DEPENDENCIES HERE","ADD VERSION HERE","ADD isDeferred HERE");

}

/*
    =========================================
    Create Cinema Plus Customizer Class
    ========================================= 
*/
require get_stylesheet_directory(  ) . "/inc/cinema-plus-customizer.php";
new CinemaPlusCustomizer();
?>