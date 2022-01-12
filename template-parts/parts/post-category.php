<!-- The Categories -->
<p>Category : <?php
        if ( get_the_category()) {
            foreach( get_the_category() as $category) {
                echo $category->name . ' '; 
            }
        }
    ?></p>