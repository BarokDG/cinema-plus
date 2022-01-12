<?php

/*
    =========================================
    Register Theme Support
    =========================================
*/
function cp_register_basic_supports(){
    add_theme_support('title-tag');
    
    // Support for Post Thumbnails/Featured Image : size of image will be decided at render time
    add_theme_support( 'post-thumbnails' );
    // cp_custom_logo_setup();
}

// function cp_custom_logo_setup() {
//     $defaults = array(
//         'height'               => 60,
//         'width'                => 100,
//         // 'flex-height'          => true,
//         // 'flex-width'           => true,
//         'header-text'          => array( 'site-title', 'site-description' ),
//     );
 
//     add_theme_support( 'custom-logo', $defaults );
// }

function cp_register_all_custom_support(){
    cp_register_basic_supports();
}


add_action( 'after_setup_theme', 'cp_register_all_custom_support' );

/*
    =========================================
    Register Styles
    =========================================
*/

// Function to register one style
function cp_register_style($style_name,$file_name,$dependencies=array(),$version='1.0',$screen_type='all'){
    wp_enqueue_style( $style_name, get_template_directory_uri(  ) . '/assets/css/' .$file_name, $dependencies,$version,$screen_type );
}

// Function to register all styles
function cp_register_all_styles(){
    // /assets/css/
    cp_register_style('tailwind-css','tailwind.prod.css');
    
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



/*
    =========================================
    CSS Customizer Registration
    ========================================= 
*/
function cp_customize_css(){ ?>

<style>
body {
    background-color: <?php echo get_theme_mod("global-site-background-color-setting")?>
}

h1 {
    color: <?php echo get_theme_mod("global-heading-one-color-setting") ?> !important;
    font-family: <?php echo get_theme_mod("landing-page-title-font-type-setting")?>;
    font-size: <?php echo get_theme_mod("landing-page-title-font-size-setting") ?>;
}

h2 {
    color: <?php echo get_theme_mod("global-heading-two-color-setting") ?> !important;
    font-family: <?php echo get_theme_mod("landing-page-title-font-type-setting")?>;
    font-size: <?php echo get_theme_mod("landing-page-title-font-size-setting") ?>;
}

h3,
h4,
h5,
h6 {
    color: <?php echo get_theme_mod("global-heading-three-color-setting") ?> !important;
    font-family: <?php echo get_theme_mod("landing-page-title-font-type-setting")?>;
    font-size: <?php echo get_theme_mod("landing-page-title-font-size-setting") ?>;
}

p,
span,
section,
article {
    color: <?php echo get_theme_mod("global-heading-text-color-setting") ?>;
    font-family: <?php echo get_theme_mod("landing-page-title-font-type-setting")?>;
    font-size: <?php echo get_theme_mod("landing-page-title-font-size-setting") ?>;
}

a {
    color: <?php echo get_theme_mod("global-heading-text-color-setting") ?>;
    font-family: <?php echo get_theme_mod("landing-page-title-font-type-setting")?>;
    font-size: <?php echo get_theme_mod("landing-page-title-font-size-setting") ?>;
}
</style>

<?php 
}

add_action( 'wp_head',"cp_customize_css");

/*
    =========================================
    Menu Registration
    ========================================= 
*/

function cp_register_my_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' ),
      'footer-menu' => __( 'Footer Menu' )
     )
   );
 }
 add_action( 'init', 'cp_register_my_menus' );

?>