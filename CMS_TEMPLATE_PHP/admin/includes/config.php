<?php

// database connection constants

//define('DB_HOST','localhost');
//define('DB_USER','root');
//define('DB_PASS','admin');
//define('DB_NAME','gallery_db');

$connection = mysqli_connect('localhost','root','admin','gallery_db');

if($connection){
    echo "true";
} else {
    echo "false";
}

?>