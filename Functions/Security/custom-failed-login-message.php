<?php
	// Change the failed login message for extra WordPress Security
	// source: http://wpdaily.co/top-10-snippets/

function so_failed_login() {
    return 'Incorrect login information.'; // You can change this into anything you like!
}

add_filter('login_errors', 'so_failed_login');