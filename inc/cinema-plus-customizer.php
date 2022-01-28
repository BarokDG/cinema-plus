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

        $this -> header_values_customizer($wp_customize);

        $this -> blog_customizer($wp_customize);

        $this -> footer_customizer($wp_customize);
        
        // $this -> landing_page_customizer($wp_customize);
    }


/*
    ========================================
   Function to define new Section
    ========================================
*/
    private function add_new_section($wp_customize_instance,$section_name,$section_title,$section_description="",$section_priority=1,$panel){
        $wp_customize_instance -> add_section($section_name,array(
            'title' => __($section_title),
            'description' => __($section_description),
            'priority' => $section_priority,
            'panel' => $panel,
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

        
        $wp_customize->add_panel( 'global-values-panel', array(
         'title' => __( 'Global Values','Cinema Plus' ),
        'description' => "Global Values","Change the values for the whole website", // Include html tags such as <p>.
        'priority' => 21, // Mixed with top-level-section hierarchy.
        ));

        /*
            ============================================
            Colors Customization
            ============================================
        */
        // Add Section
        $this -> add_new_section($wp_customize,"global-values-color-section","Colors","1","1","global-values-panel");
        // Add Setting for Colors
        $this -> add_new_setting($wp_customize,"global-heading-one-color-setting","#FFC0CB","");
        $this -> add_new_setting($wp_customize,"global-heading-two-color-setting","#FFC0CB","");
        $this -> add_new_setting($wp_customize,"global-heading-three-color-setting","#FFC0CB","");
        $this -> add_new_setting($wp_customize,"global-heading-text-color-setting","#FFC0CB","");
        $this -> add_new_setting($wp_customize,"global-heading-link-color-setting","#FFC0CB","");
        $this -> add_new_setting($wp_customize,"global-site-background-color-setting","#FFC0CB","");
        //  Add Controls
        $wp_customize -> add_control(
            new WP_Customize_Color_Control($wp_customize,'global-heading-one-control',array(
                'label' => __("H1 Color","Cinema Plus"),
                'section' => 'global-values-color-section',
                'settings' => 'global-heading-one-color-setting',
            ))
        );
        
         $wp_customize -> add_control(
            new WP_Customize_Color_Control($wp_customize,'global-heading-two-control',array(
                'label' => __("H2 Color","Cinema Plus"),
                'section' => 'global-values-color-section',
                'settings' => 'global-heading-two-color-setting',
            ))
        );
        
         $wp_customize -> add_control(
            new WP_Customize_Color_Control($wp_customize,'global-heading-three-control',array(
                'label' => __("H3 Color","Cinema Plus"),
                'section' => 'global-values-color-section',
                'settings' => 'global-heading-three-color-setting',
            ))
        );
        
        $wp_customize -> add_control(
            new WP_Customize_Color_Control($wp_customize,'global-heading-text-control',array(
                'label' => __("Text Color","Cinema Plus"),
                'section' => 'global-values-color-section',
                'settings' => 'global-heading-text-color-setting',
            ))
        );
        
        $wp_customize -> add_control(
            new WP_Customize_Color_Control($wp_customize,'global-heading-link-control',array(
                'label' => __("Link Color","Cinema Plus"),
                'section' => 'global-values-color-section',
                'settings' => 'global-heading-link-color-setting',
            ))
        );
        
        $wp_customize -> add_control(
            new WP_Customize_Color_Control($wp_customize,'global-site-background-control',array(
                'label' => __("Site Background","Cinema Plus"),
                'section' => 'global-values-color-section',
                'settings' => 'global-site-background-color-setting',
            ))
        );
        /*
            ============================================
            Font Family Customization
            ============================================
        */
         // Add Section
        $this -> add_new_section($wp_customize,"global-values-font-section","Typography","2","1","global-values-panel");
        // Add Setting for Colors
        $this -> add_new_setting($wp_customize,"global-heading-one-font-family-setting","Spicy Rice","");
        $this -> add_new_setting($wp_customize,"global-heading-two-font-family-setting","Spicy Rice","");
        $this -> add_new_setting($wp_customize,"global-heading-three-font-family-setting","Spicy Rice","");
        $this -> add_new_setting($wp_customize,"global-heading-text-font-family-setting","Open Sans","");
        $this -> add_new_setting($wp_customize,"global-heading-link-font-family-setting","Dancing Script","");

         $wp_customize -> add_control(
             new WP_Customize_Control($wp_customize,'global-heading-one-font-family-control',array(
                'label' => __("H1 Font","Cinema Plus"),
                'section' => 'global-values-font-section',
                'settings' => 'global-heading-one-font-family-setting',
                 'type' => 'select',
               'choices' => array(
                    "Architects Daughter"=>'Architects Daughter',
                    'Caveat'=>'Caveat',
                    "Dancing Script"=> 'Dancing Script',
                    "Indie Flower" => 'Indie Flower',
                    "Lato" => "Lato",
                    "Montserrat" => "Montserrat",
                    "Open Sans" => "Open Sans",
                    "Poppins" => "Poppins",
                    "Roboto" => "Roboto",
                    "Spicy Rice" => "Spicy Rice"
                ),
            ))
        );

        $wp_customize -> add_control(
             new WP_Customize_Control($wp_customize,'global-heading-two-font-family-control',array(
                'label' => __("H2 Font","Cinema Plus"),
                'section' => 'global-values-font-section',
                'settings' => 'global-heading-two-font-family-setting',
                 'type' => 'select',
               'choices' => array(
                    "Architects Daughter"=>'Architects Daughter',
                    'Caveat'=>'Caveat',
                    "Dancing Script"=> 'Dancing Script',
                    "Indie Flower" => 'Indie Flower',
                    "Lato" => "Lato",
                    "Montserrat" => "Montserrat",
                    "Open Sans" => "Open Sans",
                    "Poppins" => "Poppins",
                    "Roboto" => "Roboto",
                    "Spicy Rice" => "Spicy Rice"
                ),
            ))
        );

        $wp_customize -> add_control(
             new WP_Customize_Control($wp_customize,'global-heading-three-font-family-control',array(
                'label' => __("H3 Font","Cinema Plus"),
                'section' => 'global-values-font-section',
                'settings' => 'global-heading-three-font-family-setting',
                 'type' => 'select',
                'choices' => array(
                    "Architects Daughter"=>'Architects Daughter',
                    'Caveat'=>'Caveat',
                    "Dancing Script"=> 'Dancing Script',
                    "Indie Flower" => 'Indie Flower',
                    "Lato" => "Lato",
                    "Montserrat" => "Montserrat",
                    "Open Sans" => "Open Sans",
                    "Poppins" => "Poppins",
                    "Roboto" => "Roboto",
                    "Spicy Rice" => "Spicy Rice"
                ),
            ))
        );

         $wp_customize -> add_control(
             new WP_Customize_Control($wp_customize,'global-heading-text-font-family-control',array(
                'label' => __("Text Font","Cinema Plus"),
                'section' => 'global-values-font-section',
                'settings' => 'global-heading-text-font-family-setting',
                 'type' => 'select',
                'choices' => array(
                    "Architects Daughter"=>'Architects Daughter',
                    'Caveat'=>'Caveat',
                    "Dancing Script"=> 'Dancing Script',
                    "Indie Flower" => 'Indie Flower',
                    "Lato" => "Lato",
                    "Montserrat" => "Montserrat",
                    "Open Sans" => "Open Sans",
                    "Poppins" => "Poppins",
                    "Roboto" => "Roboto",
                    "Spicy Rice" => "Spicy Rice"
                ),
            ))
        );
         $wp_customize -> add_control(
             new WP_Customize_Control($wp_customize,'global-heading-link-font-family-control',array(
                'label' => __("Link Font","Cinema Plus"),
                'section' => 'global-values-font-section',
                'settings' => 'global-heading-link-font-family-setting',
                 'type' => 'select',
               'choices' => array(
                    "Architects Daughter"=>'Architects Daughter',
                    'Caveat'=>'Caveat',
                    "Dancing Script"=> 'Dancing Script',
                    "Indie Flower" => 'Indie Flower',
                    "Lato" => "Lato",
                    "Montserrat" => "Montserrat",
                    "Open Sans" => "Open Sans",
                    "Poppins" => "Poppins",
                    "Roboto" => "Roboto",
                    "Spicy Rice" => "Spicy Rice"
                ),
            ))
        );
    }


/*
    ========================================
    Header Customizer Function : All Settings and Controls for Header Section
    ========================================
*/ 
    private function header_values_customizer($wp_customize){
        // Section
        $this -> add_new_section($wp_customize,"header_values_section","Header","Customize Header Values",22,"");

/*
    ========================================
    Header Font Family
    ========================================
*/ 
        $this -> add_new_setting($wp_customize,"header_values_font_family_setting","Spicy Rice","");
        $wp_customize -> add_control(
             new WP_Customize_Control($wp_customize,'header_values_font_family_control',array(
                'label' => __("Header Font","Cinema Plus"),
                'section' => 'header_values_section',
                'settings' => 'header_values_font_family_setting',
                 'type' => 'select',
                 'priority' => 1,
                 'choices' => array(
                    "Architects Daughter"=>'Architects Daughter',
                    'Caveat'=>'Caveat',
                    "Dancing Script"=> 'Dancing Script',
                    "Indie Flower" => 'Indie Flower',
                    "Lato" => "Lato",
                    "Montserrat" => "Montserrat",
                    "Open Sans" => "Open Sans",
                    "Poppins" => "Poppins",
                    "Roboto" => "Roboto",
                    "Spicy Rice" => "Spicy Rice"
                ),
            ))
        );

/*
    ========================================
    Header Background Transparency
    ========================================
*/ 
        $this -> add_new_setting($wp_customize,"header_values_background_transparency_setting","Yes","");
        $wp_customize -> add_control(
             new WP_Customize_Control($wp_customize,'header_values_background_transparency_control',array(
                'label' => __("Make Header Transparent","Cinema Plus"),
                'section' => 'header_values_section',
                'settings' => 'header_values_background_transparency_setting',
                 'type' => 'select',
                 'priority' => 2,
                'choices' => array("Yes"=>"Yes","No" => "No"),
            ))
        );

/*
    ========================================
    Header Sticky
    ========================================
*/ 
        $this -> add_new_setting($wp_customize,"header_values_sticky_setting","Yes","");
        $wp_customize -> add_control(
             new WP_Customize_Control($wp_customize,'header_values_sticky_control',array(
                'label' => __("Make Header Sticky","Cinema Plus"),
                'section' => 'header_values_section',
                'settings' => 'header_values_sticky_setting',
                 'type' => 'select',
                'choices' => array("Yes"=>"Yes","No" => "No"),
                'priority' => 3,
            ))
        );

/*
    ========================================
    Header Foreground Color
    ========================================
*/ 
        $this -> add_new_setting($wp_customize,"header_values_foreground_color_setting","#fffff","");
        $wp_customize -> add_control(
            new WP_Customize_Color_Control($wp_customize,'header_value_foreground_color_control',array(
                'label' => __("Header Foreground","Cinema Plus"),
                'section' => 'header_values_section',
                'settings' => 'header_values_foreground_color_setting',
                'priority' => 4,
            ))
        );



/*
    ========================================
    Background Color
    ========================================
*/ 
        $this -> add_new_setting($wp_customize,"header_values_background_color_setting","#ffffff","");
         $wp_customize -> add_control(
            new WP_Customize_Color_Control($wp_customize,'header_value_background_color_control',array(
                'label' => __("Header Background Color","Cinema Plus"),
                'section' => 'header_values_section',
                'settings' => 'header_values_background_color_setting',
                'priority' => 5,
            ))
        );

/*
    ========================================
    Navigation Hover Color
    ========================================
*/ 
        $this -> add_new_setting($wp_customize,"header_values_hover_color_setting","No","");
         $wp_customize -> add_control(
            new WP_Customize_Color_Control($wp_customize,'header_value_hover_color_control',array(
                'label' => __("Navigation Hover Color","Cinema Plus"),
                'section' => 'header_values_section',
                'settings' => 'header_values_hover_color_setting',
                'priority' => 6,
            ))
        );
       


/*
    ========================================
    Header Sticky Background Color
    ========================================
*/ 
        $this -> add_new_setting($wp_customize,"header_values_sticky_background_setting","#ffffff","");
         $wp_customize -> add_control(
            new WP_Customize_Color_Control($wp_customize,'header_value_sticky_background_control',array(
                'label' => __("Sticky Header Background Color","Cinema Plus"),
                'section' => 'header_values_section',
                'settings' => 'header_values_sticky_background_setting',
                'priority' => 7,
            ))
        );


    }

/*
    ========================================
    Footer Customizer Function : All Settings and Controls for footer
    ========================================
*/ 
private function blog_customizer($wp_customize){
     $this -> add_new_section($wp_customize,"blog_values_section","Blog","Blog Customization Page",23,"");

       $this -> add_new_setting($wp_customize,"blog_values_author_position_setting","Yes","");
        $wp_customize -> add_control(
             new WP_Customize_Control($wp_customize,'blog_values_author_position_control',array(
                'label' => __("Display Author above post","Cinema Plus"),
                'section' => 'blog_values_section',
                'settings' => 'blog_values_author_position_setting',
                 'type' => 'checkbox',
                 'choices' => array('Yes'=>'Yes',"No"=>'No'),
            ))
        );



        // Tag Conditionals
        $this -> add_new_setting($wp_customize,"blog_values_show_tag_setting","Yes","");
        $wp_customize -> add_control(
             new WP_Customize_Control($wp_customize,'blog_values_show_tag_control',array(
                'label' => __("Show Blog Tag","Cinema Plus"),
                'section' => 'blog_values_section',
                'settings' => 'blog_values_show_tag_setting',
                 'type' => 'checkbox',
                 'choices' => array('Yes'=>'Yes',"No"=>'No'),
            ))
        );


        // Category Conditionals
        $this -> add_new_setting($wp_customize,"blog_values_show_category_setting","Yes","");
        $wp_customize -> add_control(
             new WP_Customize_Control($wp_customize,'blog_values_show_category_control',array(
                'label' => __("Show Blog Category","Cinema Plus"),
                'section' => 'blog_values_section',
                'settings' => 'blog_values_show_category_setting',
                 'type' => 'checkbox',
                 'choices' => array('Yes'=>'Yes',"No"=>'No'),
            ))
        );

         // Author Conditionals
        $this -> add_new_setting($wp_customize,"blog_values_show_author_setting","Yes","");
        $wp_customize -> add_control(
             new WP_Customize_Control($wp_customize,'blog_values_show_author_control',array(
                'label' => __("Show Blog Author","Cinema Plus"),
                'section' => 'blog_values_section',
                'settings' => 'blog_values_show_author_setting',
                 'type' => 'checkbox',
                 'choices' => array('Yes'=>'Yes',"No"=>'No'),
            ))
        );

         // Author Display Area Conditionals
        $this -> add_new_setting($wp_customize,"blog_values_show_author_display_setting","Top","");
        $wp_customize -> add_control(
             new WP_Customize_Control($wp_customize,'blog_values_show_author_display_control',array(
                'label' => __("Show Blog Author","Cinema Plus"),
                'section' => 'blog_values_section',
                'settings' => 'blog_values_show_author_display_setting',
                 'type' => 'select',
                 'choices' => array('Top'=>'Top',"Bottom"=>'Bottom'),
            ))
        );

         // Comment Count Conditionals
        $this -> add_new_setting($wp_customize,"blog_values_show_comment_count_setting","Yes","");
        $wp_customize -> add_control(
             new WP_Customize_Control($wp_customize,'blog_values_show_comment_count_control',array(
                'label' => __("Show Comment Count","Cinema Plus"),
                'section' => 'blog_values_section',
                'settings' => 'blog_values_show_comment_count_setting',
                 'type' => 'checkbox',
                 'choices' => array('Yes'=>'Yes',"No"=>'No'),
            ))
        );
}


/*
    ========================================
    Footer Customizer Function : All Settings and Controls for footer
    ========================================
*/ 
    private function footer_customizer($wp_customize){
        // Section
        $this -> add_new_section($wp_customize,"footer_values_section","Footer","Customize Footer Values",25,"");
/*
    ========================================
    Footer Subscribe Bar
    ========================================
*/ 
        $this -> add_new_setting($wp_customize,"footer_show_subscribe_bar_setting","Yes","");
        $wp_customize -> add_control(
             new WP_Customize_Control($wp_customize,'footer_show_subscribe_bar_control',array(
                'label' => __("Show Footer Subscribe Bar","Cinema Plus"),
                'section' => 'footer_values_section',
                'settings' => 'footer_show_subscribe_bar_setting',
                 'type' => 'checkbox',
                 'priority' => 1,
            ))
        );
        

/*
    ========================================
    Footer Copyright
    ========================================
*/ 
        $this -> add_new_setting($wp_customize,"footer_show_copyright_setting","Yes","");
        $wp_customize -> add_control(
             new WP_Customize_Control($wp_customize,'footer_show_copyright_control',array(
                'label' => __("Show Footer Copyright","Cinema Plus"),
                'section' => 'footer_values_section',
                'settings' => 'footer_show_copyright_setting',
                 'type' => 'checkbox',
                 'priority' => 1,
            ))
        );

/*
    ========================================
    Footer Copyright Symbol
    ========================================
*/ 
        $this -> add_new_setting($wp_customize,"footer_copyright_symbol_setting","Yes","");
        $wp_customize -> add_control(
             new WP_Customize_Control($wp_customize,'footer_copyright_symbol_control',array(
                'label' => __("Show Footer Copyright Symbol","Cinema Plus"),
                'section' => 'footer_values_section',
                'settings' => 'footer_copyright_symbol_setting',
                 'type' => 'checkbox',
                 'priority' => 1,
            ))
        );

/*
    ========================================
    Footer Copyright Date
    ========================================
*/ 
        $this -> add_new_setting($wp_customize,"footer_copyright_date_setting","Yes","");
        $wp_customize -> add_control(
             new WP_Customize_Control($wp_customize,'footer_copyright_date_control',array(
                'label' => __("Show Footer Copyright Date","Cinema Plus"),
                'section' => 'footer_values_section',
                'settings' => 'footer_copyright_date_setting',
                 'type' => 'checkbox',
                 
            ))
        );

/*
    ========================================
    Footer Copyright Text
    ========================================
*/ 
        $this -> add_new_setting($wp_customize,"footer_copyright_text_setting","Infotekkers","");
        $wp_customize -> add_control(
             new WP_Customize_Control($wp_customize,'footer_copyright_text_control',array(
                'label' => __("Footer Copyright Text","Cinema Plus"),
                'section' => 'footer_values_section',
                'settings' => 'footer_copyright_text_setting',
            ))
        );

    }
}

// File customizer.php
add_filter(
    'customize_dynamic_setting_args',
    function( $setting_args, $setting_id ) {
        if ( 'siteTitleColorSetting' === $setting_id ) {
            $setting_args = array(
                'sanitize_callback' => 'sanitize_hex_color',
            );
        }
        return $setting_args;
    },
    10,
    2
);

?>