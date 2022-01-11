<?php
// If Reading is set to page get home page if not get latest post
if(get_post_type(  ) == "page"){
    get_template_part( "/template-parts/landing/landing");
}
else{

get_template_part('/template-parts/content/latest','post');
}
?>