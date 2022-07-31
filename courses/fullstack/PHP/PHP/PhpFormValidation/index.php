<?php

$user_name = "";
$user_email = "";
$user_name_error = "";
$user_email_error = "";
$user_phone_error = "";

if($_SERVER['REQUEST_METHOD'] == 'POST'){

//    $user_name = validate_input_data($_POST['user_name']);
//    $user_email = validate_input_data($_POST['user_email']);
//    echo $user_name . " " . $user_email;

    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_phone = $_POST['user_phone'];

    if(empty($user_name)){
        $user_name_error = "The name field is required";
    }
    elseif(!preg_match("/^[a-zA-Zа-яА-Я]*$/", $user_name)){
        $user_name_error = "The name field must content only letters";
    }
    else {
        $user_name = validate_input_data($_POST['user_name']);
    }

    if(empty($user_email)){
        $user_email_error = "The email field is required";
    }
    elseif(filter_var($user_email, FILTER_VALIDATE_EMAIL) === FALSE){
        $user_email_error = "The email field doesn't exist";
    }
    else {
        $user_email = validate_input_data($_POST['user_email']);
    }

    if(empty($user_phone)) {
        $user_phone_error = "The phone field is required";
    }
    elseif(!preg_match("/^[0-9]*$/", $user_phone)){
        $user_phone_error = "The phone field must content only numbers";
    }
    else {
        $user_phone = validate_input_data($_POST['user_phone']);
    }
}

function validate_input_data($data) {
    /* Премахване на интервали, табулации и знаци за нов ред
       от началото и края на въведената информация */
    $data = trim($data);
    /* Премахваме опасните наклонени черти Splashes, които служат
       за разделител на директория при операционните системи */
    $data = stripcslashes($data);
    /* Превръщаме всички опасни HTML символи в безопасни такива. */
    $data = htmlspecialchars($data);

    return $data;
}

include 'layout' . DIRECTORY_SEPARATOR . 'template.php';
include 'views'.DIRECTORY_SEPARATOR.'sign-up.php';

/*
 * Домашно упражнение:
 * Намерете и приложете към полето за име REGEX за кирилица.
 */
