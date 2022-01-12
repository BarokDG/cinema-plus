<article>

    <!-- 
    ============================================
    Modularization : will be uncommented later
    ============================================
 -->
    <?php
    // Get Image, title as link and date
    get_template_part("/template-parts/parts/excerpt","header");

    // Get the excerpt
    get_template_part( "/template-parts/parts/post",'excerpt');

    // Get category
     get_template_part( "/template-parts/parts/post",'category');

    //  Get tags
    get_template_part( "/template-parts/parts/post",'tags');
    ?>

    <!-- Number Of Comments -->
    <span><?php echo get_comments_number() ?></span>

</article>

<style>
article {
    margin-top: 5%;
}
</style>