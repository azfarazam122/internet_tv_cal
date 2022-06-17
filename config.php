<?php

// LOCAL HOST
define('DB_NAME', 'internet_tv_customer');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

// CLIENT SERVER
// define('DB_NAME', 'db721157988');
// define('DB_USER', 'dbo721157988');
// define('DB_PASSWORD', '9^6TPi5}g)fY');
// define('DB_HOST', 'db721157988.db.1and1.com');
// define('DB_CHARSET', 'utf8');
// define('DB_COLLATE', '');

$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
//  $link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME ,'3307');

if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}