<?php

define('DB_NAME', 'internet_tv_customer');
//define('DB_NAME', 'db552660367');
//define( 'DB_NAME', 'b8pd43197600157' ); //wordpress

/** MySQL database username */
define('DB_USER', 'root');
//define( 'DB_USER', 'ibrahim' );
//define( 'DB_USER', 'b8pd43197600157' );//wordpress

/** MySQL database password */
define('DB_PASSWORD', '');
//define('DB_PASSWORD', '');
//define( 'DB_PASSWORD', 'lWR{7}5c=I-Yw' ); //wordpress

/** MySQL hostname */
define('DB_HOST', 'localhost');
//define( 'DB_HOST', 'b8pd43197600157.db.43197600.578.hostedresource.net:3306' );//wordpress

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
//  $link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME ,'3307');

if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}