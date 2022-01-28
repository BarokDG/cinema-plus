<div id="main-footer"
    class="flex flex-col items-center xl:flex-row justify-evenly gap-y-16 bg-red-500 text-white pt-32 pb-10 px-4 xl:px-0">
    <?php 
        if( is_active_sidebar("footer-section-one")) {
            dynamic_sidebar("footer-section-one");
        } 
        if( is_active_sidebar("footer-section-two")) {
            dynamic_sidebar("footer-section-two");
        } 
        if( is_active_sidebar("footer-section-three")) {
            dynamic_sidebar("footer-section-three");
        } 
    ?>

</div>