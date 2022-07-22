<?php

include $_SERVER['DOCUMENT_ROOT'] . "./function/DBfunc.php";

$z = insert($con , "books" ,$_POST);



        if($z == true){

        $_SESSION['su']['create'] = "into azma";


        }




header("location:/book_create");

