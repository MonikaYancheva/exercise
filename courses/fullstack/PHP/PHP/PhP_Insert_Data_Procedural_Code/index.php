<?php

include "app".DIRECTORY_SEPARATOR."config.php";
include "app".DIRECTORY_SEPARATOR."db_connection.php";

$foo_connection = db_connect($host, $user_name, $user_password, $database);

$sql = "INSERT INTO articles(heading, text, author) VALUE ('First Article Heading', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','Monika Yancheva')";

if (mysqli_query($foo_connection,$sql)) {
    print "Article created successfully";
}
else {
    print "Error: ".$sql."<br>".mysqli_error($foo_connection);
}

mysqli_close($foo_connection);  