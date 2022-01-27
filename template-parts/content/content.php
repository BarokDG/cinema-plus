<article style="background-image: <?= esc_url(get_the_post_thumbnail_url())?>">

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
    <!-- <img src="<?php //echo esc_url(get_the_post_thumbnail_url())?>" alt="" width='600'> -->


    <!-- Post Title : with link to full post -->

    <div class="post-excerpt mx-5 md:mx-auto max-w-[75ch]">
        <?php the_post_thumbnail( )?>
        <div class="__content mt-2">
            <h1 class="text-2xl font-bold">
                <a href="<?php echo esc_url( get_permalink() )?>">
                    <?php the_title(  );?>
                </a>
            </h1>
            <p class="mt-3"><?php the_excerpt( ) ?></p>
            <div class="__info mt-3">
                <?php the_date(); ?> / 
                <a class="text-red-700" href="<?php get_author_posts_url(the_author_meta('ID')) ?>"><?php the_author();?></a>
            </div>
        </div>
        <div class="__footer mt-6 flex justify-between">
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
                        echo "<span class='inline-block px-3 mx-1 border-yellow-500 border rounded-full'>". ucfirst($tag->name) . "</span>"; 
                    }
                }
            ?></p>
        </div>
    </div>


    <!-- Number Of Comments -->
    <span><?php echo get_comments_number() ?></span>

</article>

<style>
article {
    padding-top: 8%;
}
</style>