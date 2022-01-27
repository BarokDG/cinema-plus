<div id='comments'>

    <!-- Check For comments -->
    <?php 
        if(have_comments(  )){
            // Get Title
            get_template_part("/template-parts/comments/comment",'title');

            // Get Comments
            get_template_part("/template-parts/comments/comment",'list');

        }
    

    // If Comments Exist but is not open
        if(!comments_open( ) ){
            get_template_part("/template-parts/comments/comment",'closed');
        } 

    // Get Comment Form
        get_template_part("/template-parts/comments/comment",'form');
    ?>

</div>