<?php
  get_header();

  $category = get_queried_object(); ////getting current category
  $args = array(
    'orderby' => 'post_date',
    'order' => 'DESC',
    'cat' => $category->term_id // current category ID
  );

  $the_query = new WP_Query($args);

  if($the_query->have_posts()):
    while($the_query->have_posts()): $the_query->the_post(); ?> 
      <div class="post-excerpt mx-5 md:mx-auto max-w-[75ch]">
          <?php the_post_thumbnail( )?>
          <div class="__content mt-2">
              <h1 class="text-2xl font-bold">
                  <a href="<?php echo esc_url( get_permalink() )?>">
                      <?php the_title(  );?>
                  </a>
              </h1>
              <p class="mt-3"><?php the_content( ) ?></p>
              <div class="__info mt-3">
                  <?php the_date(); ?> / 
                  <a class="text-red-700" href="<?php get_author_posts_url(the_author_meta('ID')) ?>"><?php the_author();?></a>
              </div>
          </div>
      </div><?php 
    endwhile;
  endif;

  get_footer();
?>
