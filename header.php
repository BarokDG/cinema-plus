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
    <nav class="flex flex-row justify-around md:justify-evenly items-center mb-5 text-white bg-slate-500">
        <div id="nav-logo" class="hover:cursor-pointer">


            <a class="font-spicy text-4xl">
                <?php 
                    if(has_custom_logo(  )){
                        the_custom_logo(  );
                    } else{
                        echo get_bloginfo( 'name' );
                    }
                ?>
            </a>
            <h4 class="font-sans lowercase">
                <?php
                echo get_bloginfo( 'description' );
                ?>
            </h4>

        </div>
        <div id="nav-items"
            class="invisible h-0 w-0 md:visible md:h-fit md:w-fit flex flex-col md:flex-row md:space-x-8 uppercase font-sans text-md">
            <a class="hover:text-primary hover:cursor-pointer">Menu</a>
            <a class="hover:text-primary hover:cursor-pointer">Menu</a>
            <a class="hover:text-primary hover:cursor-pointer">Menu</a>
            <a class="hover:text-primary hover:cursor-pointer">Menu</a>
            <a class="hover:text-primary hover:cursor-pointer">Menu</a>
            <a class="hover:text-primary hover:cursor-pointer">Menu</a>
            <a class="hover:text-primary hover:cursor-pointer">Menu</a>
            <a class="hover:text-primary hover:cursor-pointer">
                <svg class="svg-icon search-icon h-6 w-6" aria-labelledby="title desc" role="img"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19.9 19.7">
                    <title id="title">Search Icon</title>
                    <desc id="desc">A magnifying glass icon.</desc>
                    <g class="search-path" fill="none" stroke="#ffffff">
                        <path stroke-linecap="square" d="M18.5 18.3l-5.4-5.4" />
                        <circle cx="8" cy="8" r="7" />
                    </g>
                </svg>
            </a>
        </div>
        <div class="md:hidden">
            <button id="ham">
                <svg class="w-10 h-10 text-gray-500" x-show="!showMenu" fill="none" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="white">
                    <path d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </nav>
    <div id="nav-items-mobile"
        class="hidden flex flex-col space-y-8 w-screen h-screen fixed top-0 bg-white font-sans text-3xl px-10 bg-primary text-tertiary z-10">
        <div id="close" class="self-end mx-8 my-4">X</div>
        <a>Menu</a>
        <a>Menu</a>
        <a>Menu</a>
        <a>Menu</a>
        <a>Menu</a>
        <a>Menu</a>
        <a>Menu</a>
        <a>
            <svg class="svg-icon search-icon h-6 w-6 font-extrabold" aria-labelledby="title desc" role="img"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19.9 19.7">
                <title id="title">Search Icon</title>
                <desc id="desc">A magnifying glass icon.</desc>
                <g class="search-path" fill="none" stroke="#0c4b65">
                    <path stroke-linecap="square" d="M18.5 18.3l-5.4-5.4" />
                    <circle cx="8" cy="8" r="7" />
                </g>
            </svg>
        </a>
    </div>

    <script>
    const ham = document.querySelector("#ham");
    const close = document.querySelector("#close");
    const navItems = document.querySelector("#nav-items-mobile");

    ham.addEventListener("click", toggleMenu);
    ham.addEventListener("touch", toggleMenu);
    close.addEventListener("click", toggleMenu);
    close.addEventListener("touch", toggleMenu);

    function toggleMenu() {
        if (navItems.classList.contains("hidden")) {
            navItems.classList.remove("hidden");
        } else {
            navItems.classList.add("hidden");
        }
    }
    </script>