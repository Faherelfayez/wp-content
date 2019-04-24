<?php
/*
Plugin Name: ? Post Type 
Description: Custom Post Type Plugin 
Author:      Faher Elfayez 
Version:     1.0
*/



function myplugin_form_favorite_platform() {



?>

<form method="post">
	<p><label for= "platform">What is your favorite social media platform to use? </label></p>
	<p><input id="platform" type="text" name="myplugin-favorite-movie"></p>
	<p><input type="submit" value="Submit Form"></p>
</form>


<?php
}
add_action( 'init', 'myplugin_form_favorite_platform' );
