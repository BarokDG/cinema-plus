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

    // Support for Different post formats
	add_theme_support(
			'post-formats',
			array(
				'aside',
			)
		);

    // Activate HTML5 Features
   add_theme_support(
			'html5',
			array(
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'navigation-widgets',
			)
		);

    // Support for custom logo
    add_theme_support(
			'custom-logo',
			array(
				'height'               => 200,
				'width'                => 400,
				'flex-width'           => true,
				'flex-height'          => true,
				'unlink-homepage-logo' => false,
			)
		); 
    
    add_theme_support( 'custom-header' );

    // Add support for custom line height controls.
	add_theme_support( 'custom-line-height' );

	// Add support for experimental cover block spacing.
	add_theme_support( 'custom-spacing' );

}

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


 function cp_customize_header_css(){ 
    //  background-color: <?php echo get_theme_mod("header_values_background_color_setting", "#ff0000") ?>
<style>
#header-container {
    color: <?php echo get_theme_mod("header_values_foreground_color_setting", "#fffff") ?>;


    <?php if(get_theme_mod("header_values_background_transparency_setting")=="Yes") {
        ?>background-color: transparent;

        <?php
    }

    else {
        ?>background-color: <?php echo get_theme_mod("header_values_background_color_setting", "#fffff")?> <?php
    }

    ?>
}

#header-container,
#header-container li a {
    font-family: <?php echo get_theme_mod("header_values_font_family_setting", "Spicy Rice") ?>;
}

#header-container li a:hover {
    color: <?php echo get_theme_mod("header_values_hover_color_setting", "red")?>;
}

.scrolled-sticky {
    background-color: <?php echo get_theme_mod("header_values_sticky_background_setting")?> !important;
}
</style>

<?php 
}

add_action( 'wp_head',"cp_customize_header_css");
?>