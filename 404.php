<!-- Display Header -->
<?php get_header();?>
<div class="h-screen relative block">
      <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 max-w-4xl w-full  text-center px-4">
          <div class="absolute top-0 left-1/2 -translate-x-1/2 -z-10 "> 
            <h1 class="absolute font-serif text-gray-200 font-black text-9xl m-0 left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2">404</h1>
          </div>
          <h2 class="font-serif text-5xl text-black font-black uppercase m-0">
              Sorry! Page not found
          </h2>
          <p class="font-serif text-sm text-black font-normal uppercase mt-10">
              The page you are looking for might have been removed, had its name change or is temporarily unavailable 
          </p>
          <a href="<?php echo get_home_url( )?>" class="w-1/3 font-serif text-xs font-normal uppercase text-white bg-orange-600 inline-block py-4 px-9 border-solid border-2 rounded-3xl hover:bg-white hover:text-orange-600" >Home</a>
          <a href="<?php echo get_post_type_archive_link( 'post' )?>" class="w-1/3 font-serif text-xs font-normal uppercase text-white bg-orange-600 inline-block py-4 px-9 border-solid border-2 rounded-3xl hover:bg-white hover:text-orange-600" >Blog</a>
          
      </div>  
    </div>


    
<!-- Display Footer -->
<?php get_footer();?>