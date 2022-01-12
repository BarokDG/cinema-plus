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