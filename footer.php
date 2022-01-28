<?php if (!defined('ABSPATH')) { exit; }?>

<!-- Footer Design Section -->
<footer class="font-sans">
    <?php
    if(get_theme_mod('footer_show_subscribe_bar_setting') == 'Yes'){
         get_template_part("/template-parts/footer/subscribe","bar");
    }
    ?>
    <?php get_template_part("/template-parts/footer/footer","content") ?>
    <?php get_template_part("/template-parts/footer/copyright","bar") ?>
</footer>

<?php wp_footer(); ?>
</body>

</html>