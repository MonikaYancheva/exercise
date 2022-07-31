<?php

include "config.php";

$connection = mysqli_connect($host, $user_name, $user_password);


if(mysqli_connect_errno()) {
    echo "Connection failed".mysqli_connect_error();
    exit();
}

mysqli_set_charset($connection,"utf8");
$sql = "CREATE DATABASE our_new_database COLLATE utf8_general_ci";

if(mysqli_query($connection,$sql)) {
    echo "Database successfully created";
}
else {
    echo "Something went wrong".mysqli_error($connection);
}

mysqli_close($connection);