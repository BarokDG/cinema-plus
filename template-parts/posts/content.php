<?php

get_template_part("/template-parts/posts/parts/posts-header");

?>

<div id="grid-container" class="grid">
	<article class="pt-3 px-48 pb-8">
		<?php get_template_part("/template-parts/posts/parts/posts-content");?>
		<?php get_template_part("/template-parts/posts/parts/posts-author");?>
	</article>
	
	<aside>
		<?php get_template_part("content-aside"); ?>
	</aside>
</div>


<?php
// If comments are open or there is at least one comment, load up the comment template.
	if ( comments_open() ) {
		comments_template();
	}
?>