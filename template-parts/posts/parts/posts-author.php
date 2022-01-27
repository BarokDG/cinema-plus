<section id="author" class="mt-6">
    <?php $author_id = get_post_field ('post_author'); ?>
    <h3 class="text-lg mb-2">Article by <a href="<?= get_author_posts_url($author_id); ?>" class="text-red-700"><?php the_author_meta('display_name', $author_id); ?></a></h3>
</section>