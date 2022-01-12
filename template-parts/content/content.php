<article>

    <!-- 
    ============================================
    Modularization : will be uncommented later
    ============================================
 -->
    <?php 
    // Get Image, title as link and date
    // get_template_part("/template-parts/parts/excerpt","header");

    // Get the excerpt
    // get_template_part( "/template-parts/parts/post",'excerpt');

    // Get category
    //  get_template_part( "/template-parts/parts/post",'category');

    //  Get tags
    // get_template_part( "/template-parts/parts/post",'tags');
    ?>

    <!-- Post Thumbnail -->
    <img src="<?php echo esc_url(get_the_post_thumbnail_url())?>" alt="" width='600'>


    <!-- Post Title : with link to full post -->
    <h1 class="title">
        <a href="<?php echo esc_url( get_permalink() )?>">
            <?php the_title(  );?>
        </a>
    </h1>

    <!-- The Date -->
    <span><?php the_date() ?></span>

    <!-- The Excerpt -->
    <p><?php the_excerpt( ) ?></p>

    <!-- The Categories -->
    <p>Category : <?php
        if ( get_the_category()) {
            foreach( get_the_category() as $category) {
                echo $category->name . ' '; 
            }
        }
    ?></p>

    <!-- The tags -->
    <p>Tags: <?php
        if ( get_the_tags()) {
            foreach( get_the_tags() as $tag) {
                echo "# " . $tag->name . ' '; 
            }
        }
    ?></p>

    <!-- Number Of Comments -->
    <span><?php echo get_comments_number() ?></span>

</article>

<style>
article {
    margin-top: 5%;
}
</style>