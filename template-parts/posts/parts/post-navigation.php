<section id="post-navigation">
    <?php
    the_post_navigation(
		array(
			'next_text' => '<p class="meta-nav">' ."Next"  . '</p><p class="post-title">%title</p>',
			'prev_text' => '<p class="meta-nav">' . "Previous" . '</p><p class="post-title">%title</p>',
		)
	);
    ?>
</section>

<style>

</style>