<?php

include $_SERVER['DOCUMENT_ROOT'] . "./function/DBfunc.php";

$z = inserttoimage($con , "users" ,$_POST , image() , "image");

if(image() == false){


    header("location:/user_create");

}else{





        if($z == true){

        $_SESSION['su']['create'] = "into azma";


        }


}


header("location:/user_create");

