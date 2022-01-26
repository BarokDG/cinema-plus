<?php
add_action( 'wp_ajax_nopriv_cp_save_user_contact_form', 'cp_save_contact' );
add_action( 'wp_ajax_cp_save_user_contact_form', 'cp_save_contact' );

function cp_save_contact(){

	$title = wp_strip_all_tags($_POST["name"]);
	$email = wp_strip_all_tags($_POST["email"]);
	$message = wp_strip_all_tags($_POST["message"]);

	$post_argument = array(
        'post_title' => $title,
        'post_content' => $message,
        'post_author' => 1,
        'post_status' => 'publish',
        'post_type' => 'cp-contact',
        'meta_input' => array(
            '_contact_email_value_key' => $email
        )

    );

	$post_id = wp_insert_post($post_argument);

    if($post_id !==0){
        // $to_email = get_bloginfo( 'admin_email');
        // $subject = 'Cinema Plus - New Form Submission - '. $title;

        // $headers[] = 'From: ' .get_bloginfo('name').'<' . $to . '>';
        // $headers[] = 'Reply-To' .$title.'<'.$email .'>';
        // $headers[] = 'Content-Type: text/html: charset=UTF-8';
 
        // wp_mail( $to_email, $subject, $message, $headers);
    }
    echo $post_id;


	die();

}
?>