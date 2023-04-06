<?php
define('DB_SERVER', 'db4free.net');
define('DB_PORT', '3306');
define('DB_USERNAME', 'infits_free_test');
define('DB_PASSWORD', 'EH6.mqRb9QBdY.U');
define('DB_NAME', 'infits_db');

// define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'root');
// define('DB_PASSWORD', '');
// define('DB_NAME', 'infits');
// Try connecting to the Database
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
//Check the connection
if($conn == false){
    dir('Error: Cannot connect');
}

?>
