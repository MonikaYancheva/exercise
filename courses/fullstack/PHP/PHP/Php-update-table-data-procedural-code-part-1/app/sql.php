<?php

function select_all_from ($db_connection,$table_name){
    
    global $result;
    
    $sql = "SELECT * FROM ".$table_name;
    
    $result = mysqli_query($db_connection,$sql);
    
    
    
    if ($result){
        return $result;
    }
    
    else {
        print "Error: ".mysqli_error($sql);
        print "Something Went Wrong!!!Please try again later!";
    }
        
}


function get_item_by_id($tablename,$id,$db_connection){
    
    $sql = "SELECT * FROM"." ".$tablename." "."WHERE id = '$id'";
    $result = mysqli_query($db_connection,$sql);
    
    if ($result) {
        return $result;
    }
    else {
        print "Error: ".mysqli_error($sql);
        print "Something Went Wrong!!!Please try again later!";
    }
    
    
}
function update_item($db_connection,$id,$tablename) {
   $sql = "UPDATE * FROM "."$tablename"." "."WHERE id = '$article_id'";
   $result = update_item("articles",$foo_connection);
   
   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $article_id = $_POST['id'];
    $article_heading = $_POST['heading'];
    $article_text = $_POST['text'];
    $article_author = $_POST['author'];
    $article_published = $_POST['published'];
    
    $sql = "UPDATE articles SET heading = '$article_heading' ,text = '$article_text',author = '$article_author' ,published = '$article_published' WHERE id = 'c'";
    
    $result = mysqli_query($foo_connection,$sql);
    
    if ($result) {
        header('Location: index.php');
        
    }
    else {
        print "Error: ".mysqli_error($sql);
        print "Something went wrong!!!Please try again later!";
    }
}
   
}
