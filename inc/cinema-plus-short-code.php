<?php


add_shortcode( 'contact-form','cp_contact_form');

function cp_contact_form(){

    ob_start();
    include get_stylesheet_directory(  ) . "/template-parts/forms/contact-form.php";
    return ob_get_clean();
}

?>