<?php

get_template_part("/template-parts/posts/parts/posts-header");

?>

<section id="content-container" class="w-full flex justify-between h-fit m-10 bg-red-400">
    <article id="content-section" class="text-justify bg-teal-400 w-3/5 pt-3 pl-8 pb-10  bg-amber-500">
        <?php get_template_part("/template-parts/posts/parts/posts-content");?>
    </article>
    <aside id="content-aside" class="w-4/12 bg-slate-800"></aside>
</section>

<?php
// If comments are open or there is at least one comment, load up the comment template.
	if ( comments_open() ) {
		comments_template();
	}

	
?>



<style>
/* #content-container {
    width: 100%;
    height: fit-content;
    margin-top: 5%;
    display: flex;
    justify-content: space-between;
} */

/* #content-section {
    padding: 1% 0% 5% 5%;
    text-align: justify;
    background-color: aqua;
    width: 60%;
} */

#content-aside {
    min-height: 50vh;
    height: fit-content;
}
</style>