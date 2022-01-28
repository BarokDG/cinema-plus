<!-- Display Header -->
<?php get_header(  );?>

<!-- Display Content -->
<main>
    <?php
        get_template_part( "/template-parts/posts/content", get_post_format( ) );
    ?>
</main>

<!-- Display Post Navigation -->
<section>
    <?php get_template_part("/template-parts/posts/parts/post","navigation") ?>
</section>

<!-- Display Comment Template -->
<section>
    <?php
// If comments are open or there is at least one comment, load up the comment template.
	if ( comments_open() ) {
		comments_template();
	}	
?>
</section>

<!-- Display Footer -->
<?php get_footer();?>