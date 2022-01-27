<?php get_header(); ?>
<section id="post-title"
    class="h-48 flex flex-col justify-center items-center text-orange-900 bg-cover bg-no-repeat bg-center bg-fixed bg-yellow-300">
    <h1 class="text-4xl font-bold">
        Search
    </h1>
</section>

<section class="h-64 grid place-items-center">
  <form class="w-max" id="search-form" method="get" action="<?php echo esc_url(site_url('/')); ?>">
    <div class="flex flex-col flex-wrap">
      <input class="w-[80vw] max-w-xl px-3 py-5 rounded-full border-solid border-2 border-slate-900 focus-visible: outline-none" placeholder="What are you looking for?" class="s" id="s" type="search" name="s">
      <input class="mt-5 py-3 bg-yellow-400" id="search-submit" type="submit" value="Submit">
    </div>
  </form>
</section>
 
<?php get_footer(); ?>