<?php

include "app".DIRECTORY_SEPARATOR."config.php";
include "app".DIRECTORY_SEPARATOR."db_connection.php";

$foo_connection = db_connect($host, $user_name, $user_password, $database);

$sql ="CREATE TABLE users_2(
          id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
          username VARCHAR (64) NOT NULL,
          useremail VARCHAR (64) NOT NULL,
          userpassword VARCHAR(65) NOT NULL,
          date_registration TIMESTAMP
)";

if (mysqli_query($foo_connection,$sql)){
    echo "Table created successefully";
}
else {
    echo "Error creating table" . mysqli_error($foo_connection);
}