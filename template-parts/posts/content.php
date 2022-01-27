<?php

get_template_part("/template-parts/posts/parts/posts-header");

?>

<article class="pt-3 px-48 pb-8">
    <?php get_template_part("/template-parts/posts/parts/posts-content");?>
</article>

<h1>
		<?php get_template_part("/template-parts/posts/parts/posts-author");?>
</h1>


<?php
// If comments are open or there is at least one comment, load up the comment template.
	if ( comments_open() ) {
		comments_template();
	}
?>