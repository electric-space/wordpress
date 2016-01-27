<?php
/**
 * Change the login logo.
 *
 * Add to functions.php>
 *
 * @package newSite
 */




// change logo, 
add_action("login_head", "my_login_head");

function my_login_head() {
	echo "
	<style>
	body.login #login h1 a {
		background: url('{{url to logo}}') no-repeat scroll center top transparent;
		height: 89px;
		width: 100%;
		margin:0 0 15px 4px;
	}
	</style>
	";
}