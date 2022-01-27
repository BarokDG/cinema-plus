<div id="copyright-bar" class="flex flex-row justify-around bg-tertiaryDark text-white py-8">
    ©Infotekkers
    <div>
    <?php 
        if( is_active_sidebar("social-footer")) {
            dynamic_sidebar("social-footer");
        }
        ?>
    </div>
</div>