<section id="tags-and-socials">
    <div class="py-6 flex justify-between items-center">
        <div id="tags" class="space-x-1">
            <?php
                  if ( get_the_tags()) {
                    foreach( get_the_tags() as $tag) {
                      echo "<button>" . $tag->name . '</button> '; 
                    }
                  }
                ?>
        </div>
        <div id="socials">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</section>