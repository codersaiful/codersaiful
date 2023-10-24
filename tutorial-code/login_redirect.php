<?php
/**
 * Change the login redirect link
 * what you want.
 * 
 * Suppose, you are using a membership plugin and want to redirect to your custom page link
 * like: yoursite.com/my-account
 * use filter hook 'login_redirect'
 */

function my_login_redirect_destination()
{
	return '/my-account';
}
add_filter( 'login_redirect', 'my_login_redirect_destination' );
