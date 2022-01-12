<?php
get_header();?>


<?php
    if(is_front_page(  )){
        get_template_part( "/template-parts/pages/home","page");
    }else{
        get_template_part( "/template-parts/pages/other","page");
    }
?>