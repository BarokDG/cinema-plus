<section id="post-navigation">
    <?php
    the_post_navigation(
		array(
			'next_text' => '<p class="meta-nav">' ."Next"  . '</p><p class="post-title">%title</p>',
			'prev_text' => '<p class="meta-nav">' . "Previous" . '</p><p class="post-title">%title</p>',
		)
	);
    ?>
</section>

<style>
#post-navigation {
    margin-bottom: 2%;
}

.nav-links {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;
    padding: 0 15%;
}

.nav-links .post-title {
    font-size: 14px;
    color: red;
}

#content-aside {
    min-height: 50vh;
    height: fit-content;
}
</style>