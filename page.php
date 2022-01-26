<?php
get_header();



/*if(is_front_page(  )){?>
<!-- Landing Page -->
<div id="landing-page-container">
    <h1>Watching Movies -</h1>
    <h2>Entertaining</h2>
    <span>Pellentesque mattis mauris ac tortor volutpat, eu fermentum sapien
        euismod. In id tempus metus. Donec eu volutpat nibh, in maximus
        ligula.</span>
    <a href="">Read More</a>
</div>

<!-- Promo Strip -->
<div id="promo-container">
    <h1>Opening Offer</h1>
    <h2>GET A FREE LESSON</h2>
    <h3>
        Bring your children to a trial lesson to find out how much they enjoy
        doing music or singing
    </h3>
    <div>
        <a href="">get started</a>
        <a href="">choose class</a>
    </div>
</div>
<?php }
else{*/
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