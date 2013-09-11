<?php

/**
 * Include the libraries
 */

require_once __DIR__."/idiorm.php";
require_once __DIR__."/User.class.php";
require_once __DIR__."/functions.php";

/**
 * Configure Idiorm
 */

$db_host = 'external-db.s45373.gridserver.com';
$db_name = 'db45373_s_r_s';
$db_user = 'db45373_jalbert';
$db_pass = '69work666';

ORM::configure("mysql:host=$db_host;dbname=$db_name");
ORM::configure("username", $db_user);
ORM::configure("password", $db_pass);

// Set the database connection to UTF-8
ORM::configure('driver_options', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

/**
 * Configure the session
 */

session_name('tzreg');

// Uncomment to keep people logged in for a week
// session_set_cookie_params(60 * 60 * 24 * 7);

session_start();

/**
 * Other settings
 */

// The "from" email address that is used in the emails that are sent to users.
// Some hosting providers block outgoing email if this address
// is not registered as a real email account on their system, so put a real one here.

$fromEmail = '';

if(!$fromEmail){
	// This is only used if you haven't filled an email address in $fromEmail
	$fromEmail = 'noreply@'.$_SERVER['SERVER_NAME'];
}
