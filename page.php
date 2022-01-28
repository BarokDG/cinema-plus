<?php
get_header();
    ?>
<div id='main-content-container'>
    <?php
    if(have_posts(  )){
        while(have_posts(  )){
            the_post(  );
            the_content( );
        }
    }
    ?>
</div>
<style>
#main-content-container {
    padding-top: 3%;
}
</style>

<?php
/*}*/


get_footer( );

?>