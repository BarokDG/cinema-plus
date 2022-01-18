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
        'priority' => 1, // Mixed with top-level-section hierarchy.
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
                'choices' => array("Open Sans"=>"Open Sans","Dancing Script" => "Dancing Script","Spicy Rice" => "Spicy Rice","inherit"=>"inherit"),
            ))
        );

        $wp_customize -> add_control(
             new WP_Customize_Control($wp_customize,'global-heading-two-font-family-control',array(
                'label' => __("H2 Font","Cinema Plus"),
                'section' => 'global-values-font-section',
                'settings' => 'global-heading-two-font-family-setting',
                 'type' => 'select',
                'choices' => array("Open Sans"=>"Open Sans","Dancing Script" => "Dancing Script","Spicy Rice" => "Spicy Rice","inherit"=>"inherit"),
            ))
        );

        $wp_customize -> add_control(
             new WP_Customize_Control($wp_customize,'global-heading-three-font-family-control',array(
                'label' => __("H3 Font","Cinema Plus"),
                'section' => 'global-values-font-section',
                'settings' => 'global-heading-three-font-family-setting',
                 'type' => 'select',
                'choices' => array("Open Sans"=>"Open Sans","Dancing Script" => "Dancing Script","Spicy Rice" => "Spicy Rice","inherit"=>"inherit"),
            ))
        );

         $wp_customize -> add_control(
             new WP_Customize_Control($wp_customize,'global-heading-text-font-family-control',array(
                'label' => __("Text Font","Cinema Plus"),
                'section' => 'global-values-font-section',
                'settings' => 'global-heading-text-font-family-setting',
                 'type' => 'select',
                'choices' => array("Open Sans"=>"Open Sans","Dancing Script" => "Dancing Script","Spicy Rice" => "Spicy Rice","inherit"=>"inherit"),
            ))
        );
         $wp_customize -> add_control(
             new WP_Customize_Control($wp_customize,'global-heading-link-font-family-control',array(
                'label' => __("Link Font","Cinema Plus"),
                'section' => 'global-values-font-section',
                'settings' => 'global-heading-link-font-family-setting',
                 'type' => 'select',
               'choices' => array("Open Sans"=>"Open Sans","Dancing Script" => "Dancing Script","Spicy Rice" => "Spicy Rice","inherit"=>"inherit"),
            ))
        );
    }


/*
    ========================================
    Header Customizer Function : All Settings and Controls for Landing Page
    ========================================
*/ 
    private function header_values_customizer($wp_customize){
        // Define All Controls and Settings pair for Landing Page values
        $this -> add_new_section($wp_customize,"header_values_section","Header","Customize Header Values","1","");

        // Header Font-Family
        $this -> add_new_setting($wp_customize,"header_values_font_family_setting","Spicy Rice","");
        $wp_customize -> add_control(
             new WP_Customize_Control($wp_customize,'header_values_font_family_control',array(
                'label' => __("Header Font","Cinema Plus"),
                'section' => 'header_values_section',
                'settings' => 'header_values_font_family_setting',
                 'type' => 'select',
                'choices' => array("Open Sans"=>"Open Sans","Dancing Script" => "Dancing Script","Spicy Rice" => "Spicy Rice","inherit"=>"inherit"),
            ))
        );

        // Header Background Color
        $this -> add_new_setting($wp_customize,"header_values_background_color_setting","#ff0000","");
        $wp_customize -> add_control(
            new WP_Customize_Color_Control($wp_customize,'header_value_background_color_control',array(
                'label' => __("Header Background","Cinema Plus"),
                'section' => 'header_values_section',
                'settings' => 'header_values_background_color_setting',
            ))
        );

        // Header Foreground Color
        $this -> add_new_setting($wp_customize,"header_values_foreground_color_setting","#fffff","");
        $wp_customize -> add_control(
            new WP_Customize_Color_Control($wp_customize,'header_value_foreground_color_control',array(
                'label' => __("Header Foreground","Cinema Plus"),
                'section' => 'header_values_section',
                'settings' => 'header_values_foreground_color_setting',
            ))
        );

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