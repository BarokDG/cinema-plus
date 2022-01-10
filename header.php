<?php if (!defined('ABSPATH')) { exit; }?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="<?php bloginfo( 'charset' ); ?>" />



    <!-- Load WP objects for head-tag -->
    <?php wp_head(); ?>


</head>

<body>
    <header id="header-container">
        <?php
            wp_nav_menu( array( 'theme_location' => 'main-menu' ) );
        ?>
    </header>