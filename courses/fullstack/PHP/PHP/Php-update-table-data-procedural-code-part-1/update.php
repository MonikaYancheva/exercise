<?php

include "app".DIRECTORY_SEPARATOR."config.php";
include "app".DIRECTORY_SEPARATOR."db_connection.php";
include "app".DIRECTORY_SEPARATOR."sql.php";

$foo_connection = db_connect($host, $user_name, $user_password, $database);



$id = $_GET['id'];
//print $id;

$result = get_item_by_id("articles",$id,$foo_connection);

include "layout".DIRECTORY_SEPARATOR."template.php";
include "views".DIRECTORY_SEPARATOR."update-form.php";