<?php
include "config.php";

$connection = mysqli_connect($host, $user_name, $user_password);

if (mysqli_connect_errno()) {
    echo "Connection failed" . mysqli_connect_error();
    exit();
}


if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_new_database = $_POST['input_database']; 

    mysqli_set_charset($connection, "utf8");

    $sql = "CREATE DATABASE " . $user_new_database . " COLLATE utf8_general_ci"; 

    if (mysqli_query($connection, $sql)) {
        echo " Database successfully created ";
    }
    else {
        echo "Something went wrong" . mysqli_error($connection);
    }
    mysqli_close($connection);
}

include 'template'.DIRECTORY_SEPARATOR.'template.php';
include 'views'.DIRECTORY_SEPARATOR.'input-database.php';
