<?php

// error_reporting(0);

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root'); // xampp: '' (empty)
define('DB_NAME', 'online_class');
define('DB_PORT', 8889); // xampp: 3306

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);

if(mysqli_connect_error()) {
    die('DB connet fail.');
} 
