<?php

get_header(  );?>


<main class="pt-4">
    <?php
    get_template_part( "/template-parts/posts/content", get_post_format( ) );
    ?>
</main>

<h1><?php
echo get_the_post_navigation(  );
?></h1>

<?php get_footer();
?>