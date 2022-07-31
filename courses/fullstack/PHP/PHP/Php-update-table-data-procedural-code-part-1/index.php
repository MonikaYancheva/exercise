<?php
include "app".DIRECTORY_SEPARATOR."config.php";
include "app".DIRECTORY_SEPARATOR."db_connection.php";
include "app".DIRECTORY_SEPARATOR."sql.php";

$foo_connection = db_connect($host, $user_name, $user_password, $database);
select_all_from($foo_connection,"articles");

print_r($result);

include "layout".DIRECTORY_SEPARATOR."template.php";
include "views".DIRECTORY_SEPARATOR."article-table.php";