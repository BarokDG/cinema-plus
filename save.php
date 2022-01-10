<?php if (!defined('ABSPATH')) { exit; }

get_header();

if(have_posts()) {
  while(have_posts()){
    the_post()?>
<h1><a href="<?php the_permalink()?>"><?php the_title()?></a></h1>
<?php the_content()?>
<?php
  }
}

get_footer();
?>


<!-- Header -->
<?php if (!defined('ABSPATH')) { exit; }?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="<?php bloginfo( 'charset' ); ?>" />
    <title>Doc</title>
    <?php wp_head(); ?>
    <!-- Load WP objects for head-tag -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
</head>


<body id="rjs_body">
    <header>
        Header
    </header>


    <div class="rjs-page">

        <!-- Footer -->
        <?php if (!defined('ABSPATH')) { exit; }?>

    </div><!-- Closing of rjs-page -->


    <footer>
        Footer
    </footer>


    <?php wp_footer(); ?>
</body>

</html>