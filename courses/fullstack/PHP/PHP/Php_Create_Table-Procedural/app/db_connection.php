<?php

function db_connect($host, $user_name, $user_password, $database) {
    
    $connection = mysqli_connect($host, $user_name, $user_password, $database);
    
    if (mysqli_connect_errno()) {
    die("Connection failed: ".mysqli_error());
    
}

mysqli_set_charset($connection, "utf8");
    
    return $connection;
}

