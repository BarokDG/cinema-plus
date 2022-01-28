<div id="copyright-bar" class="flex flex-row justify-around bg-tertiaryDark text-white py-8">
    <?php
    
    if(get_theme_mod('footer_show_copyright_setting') == 'Yes'){?>
    <div>
        <?php if(get_theme_mod('footer_copyright_symbol_setting')=='Yes'){
            echo "© ";

       } ?>

        <?php echo get_theme_mod('footer_copyright_text_setting',"Infotekkers")?>

        <?php if(get_theme_mod('footer_copyright_date_setting')=='Yes'){
            echo date("Y");
        } ?>
    </div>
    <?php }
    ?>
    <div>
        <?php dynamic_sidebar( 'socials-footer' ) ?>
    </div>

</div>