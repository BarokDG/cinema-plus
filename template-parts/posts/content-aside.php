<!-- Display Post Header : Title Image and Breadcrumb -->
<?php get_template_part("/template-parts/posts/parts/posts-header"); ?>

<!-- Display Post Content -->
<section id="content-container" class="w-full flex flex-wrap justify-between h-fit  bg-red-400">
    <article id="content-section" class="text-justify w-fit xl:w-4/6 pt-12 px-5 bg-amber-500">
        <?php get_template_part("/template-parts/posts/parts/posts-content");?>
    </article>
    <aside id="content-aside" class="w-full bg-slate-800  xl:w-4/12 pt-12">
        <?php 
        if( is_active_sidebar("sidebar-one")) {
            dynamic_sidebar("sidebar-one");
        } ?>
    </aside>
</section>