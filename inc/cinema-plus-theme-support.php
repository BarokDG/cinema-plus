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