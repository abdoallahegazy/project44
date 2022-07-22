<?php


include $_SERVER['DOCUMENT_ROOT'] . "/function/DBfunc.php";


$id = $_POST['id'];



if(!isset($_POST['is_exist'])){
    $_POST['is_exist'] = "0";
}



update($con , "books" , $_POST , $id );

header("location:/book");