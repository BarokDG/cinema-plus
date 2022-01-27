<h1>Cinema Plus Options </h1>
<?php settings_errors(); ?>

<p>Use this <strong><em>shortcode</em></strong> to add a contact form</p>
<code>[contact-form]</code>
<form method="post" action="options.php">

    <?php settings_fields( 'cp-settings-group' ); ?>
    <?php do_settings_sections( 'cinema_plus' ); ?>
    <?php submit_button(); ?>
</form>