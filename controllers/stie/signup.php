<?php



include $_SERVER['DOCUMENT_ROOT'] . "./function/DBfunc.php";

$z = inserttoimage($con , "users" ,$_POST , image() , "image");

if(image() == false){

    $_SESSION['erorr']['image'] = "into azma";
    header('location:/public/admin/auth/login.php');


}else{





        if($z == true){

        $_SESSION['su']['create'] = "into azma";


        }


}


header("location:/user_create");

