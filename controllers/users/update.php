<?php


include $_SERVER['DOCUMENT_ROOT'] . "/function/DBfunc.php";


$id = $_POST['id'];



if(!isset($_POST['is_admin'])){
    $_POST['is_admin'] = "0";
}



update($con , "users" , $_POST , $id , image('') , 'image');

header("location:/user");