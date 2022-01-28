<?php
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
    wp_deregister_script( 'jquery' );
     cp_register_script('cp-jquery',"jquery.js");
     cp_register_script('cp-main-js',"cinema-plus.js",array('cp-jquery'));
    
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
    wp_enqueue_script($script_name,get_template_directory_uri(  ) . '/assets/js/' .$file_name,$dependencies,$version,$isDeferred);
}

// Function to register customizer scripts
function cp_register_customize_scripts(){
    cp_register_script('customize-controls-js',"dynamic-customizer-controls.js");

      // Enqueue Each Script -> dependencies,version & isDeferred are optional parameters as they have default values
      cp_register_script("ADD SCRIPT NAME HERE","ADD FILE NAME HERE","ADD DEPENDENCIES HERE","ADD VERSION HERE","ADD isDeferred HERE");

}
// Hook the function that enqueues all scripts
add_action( 'customize_controls_enqueue_scripts', "cp_register_customize_scripts" );



/*
    =========================================
    CSS Customizer Registration
    ========================================= 
*/

/*
function cp_customize_global_css(){ ?>

<style>
body {
    background-color: <?php echo get_theme_mod("global-site-background-color-setting", 'yellow')?>
}

h1 {
    color: <?php echo get_theme_mod("global-heading-one-color-setting", 'yellow') ?> !important;
    font-family: <?php echo get_theme_mod("global-heading-one-font-family-setting", 'Dancing Script')?> !important;
    font-size: <?php echo get_theme_mod("landing-page-title-font-size-setting", "54px") ?>;
}

h2 {
    color: <?php echo get_theme_mod("global-heading-two-color-setting", "yellow") ?> !important;
    font-family: <?php echo get_theme_mod("global-heading-two-font-family-setting", "Lato")?> !important;
    font-size: <?php echo get_theme_mod("landing-page-title-font-size-setting", "42px") ?>;
}

h3,
h4,
h5,
h6 {
    color: <?php echo get_theme_mod("global-heading-three-color-setting", "yellow") ?> !important;
    font-family: <?php echo get_theme_mod("global-heading-three-font-family-setting", "Lato")?> !important;
    font-size: <?php echo get_theme_mod("landing-page-title-font-size-setting", "32px") ?>;
}

p,
span,
section,
article {
    color: <?php echo get_theme_mod("global-heading-text-color-setting") ?>;
    font-family: <?php echo get_theme_mod("global-heading-text-font-family-setting")?> !important;
    font-size: <?php echo get_theme_mod("landing-page-title-font-size-setting") ?>;
}
</style>

<?php 
}

add_action( 'wp_head',"cp_customize_global_css");

*/


/*
    =========================================
    Include Files
    ========================================= 
*/

// Admin
require_once (get_template_directory(  ) .'/inc/cinema-plus-admin.php');

// CSS
require_once (get_template_directory(  ) .'/inc/cinema-plus-css.php');

// Customizer
require_once (get_template_directory(  ) . "/inc/cinema-plus-customizer.php");

// Theme Support
require_once (get_template_directory(  ) .'/inc/cinema-plus-theme-support.php');

// Custom Post Type
require_once (get_template_directory(  ) .'/inc/cinema-plus-custom-post-type.php');

// Custom Post Type
require_once (get_template_directory(  ) .'/inc/cinema-plus-short-code.php');


// Ajax
require_once (get_template_directory(  ) .'/inc/cinema-plus-ajax.php');



/*
    =========================================
    Create Cinema Plus Customizer Class
    ========================================= 
*/

new CinemaPlusCustomizer();


add_action( 'wp_head',"cp_customize_header_css");
?>

<?php 

  /*
      =========================================
      Footer Registration
      ========================================= 
  */

  function nd_dosth_register_sidebars() {
	
    register_sidebar( array(
     'name'          => esc_html__( 'Footer Section One', 'nd_dosth' ),
     'id'            => 'footer-section-one',
     'description'   => esc_html__( 'Widgets added here would appear inside the first section of the footer', 'nd_dosth' ),
     'before_widget' => '<div>',
     'after_widget'  => '</div>',
     'before_title'  => '',
     'after_title'   => '',
     ) );
    register_sidebar( array(
     'name'          => esc_html__( 'Footer Section Two', 'nd_dosth' ),
     'id'            => 'footer-section-two',
     'description'   => esc_html__( 'Widgets added here would appear inside the second section of the footer', 'nd_dosth' ),
     'before_widget' => '<div>',
     'after_widget'  => '</div>',
     'before_title'  => '',
     'after_title'   => '',
     ) );
    register_sidebar( array(
     'name'          => esc_html__( 'Footer Section Three', 'nd_dosth' ),
     'id'            => 'footer-section-three',
     'description'   => esc_html__( 'Widgets added here would appear inside the third section of the footer', 'nd_dosth' ),
     'before_widget' => '<div>',
     'after_widget'  => '</div>',
     'before_title'  => '',
     'after_title'   => '',
     ) );
     register_sidebar( array(
        'name'          => esc_html__( 'Blog Sidebar', 'nd_dosth' ),
        'id'            => 'blog-sidebar',
        'description'   => esc_html__( 'Widgets added here would appear inside the blog sidebar', 'nd_dosth' ),
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '',
        'after_title'   => '',
        ) );
        register_sidebar( array(
            'name'          => esc_html__( 'Social Footer', 'nd_dosth' ),
            'id'            => 'social-footer',
            'description'   => esc_html__( 'Widgets added here would appear inside the social footer', 'nd_dosth' ),
            'before_widget' => '<div>',
            'after_widget'  => '</div>',
            'before_title'  => '',
            'after_title'   => '',
            ) );
 }
 add_action( 'widgets_init', 'nd_dosth_register_sidebars' );

/* 

    ===========================
    Blog Comment Sanitization
    ===========================

*/ 

require_once ( get_template_directory() . '/inc/cinema-plus-sanitizer.php');

function custom_change_comment_url( $commentdata ) {
  $cinemaPlusSanitizer = new CinemaPlusSanitizer();
  $commentContent = $cinemaPlusSanitizer->sanitize_entry($commentdata['comment_content']);
  $commentdata['comment_content'] = $commentContent;
  return $commentdata;
}

add_filter('preprocess_comment', 'custom_change_comment_url');
?>