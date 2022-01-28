<div class="h-screen relative block">
    <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 max-w-4xl w-full  text-center px-4">
        <div class="absolute top-0 left-1/2 -translate-x-1/2 -z-10 ">

        </div>
        <h2 class="font-serif text-5xl text-black font-black uppercase m-0">
            No Search Result Found
        </h2>
        <p class="font-serif text-sm text-black font-normal uppercase mt-10">
            The conetent you are searching for does not exist on this site
        </p>

        <a href="<?php echo get_home_url( )?>"
            class="w-1/3 font-serif text-xs font-normal uppercase text-white bg-primary inline-block py-4 px-9 border-solid border-2 rounded-3xl hover:bg-white hover:text-orange-600 mt-8">Home</a>
        <a href="<?php echo get_post_type_archive_link( 'post' )?>"
            class="w-1/3 font-serif text-xs font-normal uppercase text-white bg-primary inline-block py-4 px-9 border-solid border-2 rounded-3xl hover:bg-white hover:text-orange-600">Blog</a>

    </div>
</div>

<style>
h1 {
    padding-top: 8%;
}
</style>