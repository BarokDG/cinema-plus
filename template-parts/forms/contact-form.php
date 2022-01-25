<form action="" id='cp_contact_form' data-url="<?php echo admin_url('admin-ajax.php'); ?>">
    <label for="fname">First name:</label><br>
    <input type="text" id="name" name="fname" value="John"><br>
    <label for="lname">Last name:</label><br>
    <input type="text" id="email" name="lname" value="Doe"><br><br>
    <input type="submit" value="Submit">
</form>

<style>
input {
    background-color: red;
}
</style>