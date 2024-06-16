<?php

if ($_SERVER['SERVER_NAME'] == 'localhost') {
    // Localhost database config
    define('DBNAME', 'my_db');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', ''); // No password set for root on localhost
    define('DBPORT', '3307'); // Specify the port
    define('DBDRIVER', '');
    
    // Localhost root URL
    define('ROOT', 'http://localhost/php-mvc/public');
} else {
    // Online database config
    define('DBNAME', 'my_db');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', ''); // Replace with your actual online root password if applicable
    define('DBPORT', '3307'); // Specify the port
    define('DBDRIVER', '');
    
    // Online root URL
    define('ROOT', 'https://www.yourwebsite.com');
}

?>
