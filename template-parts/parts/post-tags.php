 <!-- The tags -->
 <p>Tags: <?php
        if ( get_the_tags()) {
            foreach( get_the_tags() as $tag) {
                echo "# " . $tag->name . ' '; 
            }
        }
    ?></p>