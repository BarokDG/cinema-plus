
<nav id='header-container' class="flex flex-row justify-around md:justify-evenly items-center mb-5 text-white">
<div id="nav-logo" class="hover:cursor-pointer ">
    <?php if(display_header_text(  ) == 1){
        get_template_part("/template-parts/header/tagline","display");
    }else if (has_custom_logo(  )){
         get_template_part("/template-parts/header/image","display");
    }?>

</div>

<div id="nav-items" class="invisible md:visible uppercase font-sans text-md">
    <?php
    wp_nav_menu( array( 'theme_location' => 'main-menu','menu_id'=>'top-bar-menu' ) );
    ?>

</div>

<a id="search-icon" class="hover:text-primary hover:cursor-pointer">
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
class="hidden flex flex-col space-y-8 w-screen h-screen fixed top-0 right-0 font-sans text-3xl px-10 bg-primary text-tertiary z-10">
<!-- <div id="close" class="self-end mx-8 my-4">
    CLOSE
</div> -->
<?php
    wp_nav_menu( array( 'theme_location' => 'main-menu','menu_id'=>'mobile-menu' ) );
    ?>
</div>

<script>
const ham = document.querySelector("#ham");
const close = document.querySelector("#close");
const navItems = document.querySelector("#nav-items-mobile");

ham.addEventListener("click", toggleMenu);
ham.addEventListener("touch", toggleMenu);
// close.addEventListener("click", toggleMenu);
// close.addEventListener("touch", toggleMenu);

function toggleMenu() {
if (navItems.classList.contains("hidden")) {
    navItems.classList.remove("hidden");
} else {
    navItems.classList.add("hidden");
}
}

<?php
if(get_theme_mod("header_values_sticky_setting") == "Yes"){?>
document.querySelector("#header-container").classList.add("sticky");
<?php }
else{?>
document.querySelector("#header-container").classList.remove("sticky");
<?php } ?>





window.onscroll = function() {

if (document.documentElement.scrollTop > 350) {
    console.log("Now")
    document.querySelector("#header-container").classList.add("scrolled-sticky");
} else {
    document.querySelector("#header-container").classList.remove("scrolled-sticky");
}
};
</script>


<style>
.sticky {
position: fixed !important;
}


#header-container {
padding: 1% 3% 1% 5%;
}

#nav-logo {
width: 30%;
}

#nav-items {
width: 65%;
}

#search-icon {
width: 5%;
display: flex;
align-items: center;
justify-content: center;
}

#top-bar-menu {
display: flex;
justify-content: flex-end;
width: 100% !important;
}



#top-bar-menu li {
padding: 0 2.5%;
}


#nav-items-mobile {
background-color: white;
padding-top: 20%;
}

#mobile-menu li {
margin-top: 3%;
}
</style>
