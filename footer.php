<?php if (!defined('ABSPATH')) { exit; }?>

<!-- Footer Design Section -->
<footer class="font-sans bg-slate-500">
    <div id="sub-bar" class="sm:mx-40 xl:mx-72 relative top-20">
        <div class="flex flex-col xl:flex-row justify-around bg-primary rounded-[10px] py-10 md:px-10 md:py-5">
            <div class="text-center md:text-left">
                <p class="text-white text-lg font-bold">Wanna stay in touch</p>
                <h4 class="text-tertiary text-4xl font-bold">Subscribe</h4>
            </div>
            <input
                class="rounded-[10px] font-4xl text-tertiary w-4/5 self-center p-5 my-4 mx-8 xl:relative xl:left-10 z-0"
                type="email" name="email" placeholder="Your email address" />
            <button
                class="bg-secondary text-white uppercase text-xl font-bold w-fit self-center px-16 py-4 rounded-[10px] z-1">
                Subscribe
            </button>
        </div>
    </div>
    <div id="main-footer"
        class="flex flex-col items-center xl:flex-row justify-evenly gap-y-16 bg-tertiary text-white pt-32 pb-10 px-4 xl:px-0">
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
    <div id="copyright-bar" class="flex flex-row justify-around bg-tertiaryDark text-white py-8">
        ©Infotekkers
        <div>👆🏾</div>
    </div>
</footer>

<div class="flex">
</div>

<?php wp_footer(); ?>
</body>

</html>