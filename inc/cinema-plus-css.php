<?php
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