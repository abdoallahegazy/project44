<?php

session_start();

$con = mysqli_connect("localhost","root","","library");


function insert($con , $tablename , array $arr){





    $a = "";

    $c = "";


    foreach ($arr as $key => $value) {
        
     $x = "`" . $key . "`" . ",";

     $a .= $x;

     $v = "'" . $value . "'" . ",";

     $c .= $v;



    }


    $a = rtrim($a , ",");
    
    $c = rtrim($c , ",");




 $qu = "INSERT INTO $tablename($a) VALUES ($c) ";


 return mysqli_query($con , $qu);










}


function inserttoimage($con , $tablename , array $arr , $image , $imagetodatebase){

 
    $password = "";
    
    
        if($arr['name'] == ""){
    
            $_SESSION['erorr']['name'] = "enta homer";
            header('location:/user_create');
    
        }else if(empty($arr['email'])){
            $_SESSION['erorr']['email'] = "on is email exists";
            header('location:/user_create');
    
        }else if(empty($arr['is_admin'])){
            $_SESSION['erorr']['is_admin'] = "check box enter here";
            header('location:/user_create');
    
        }
    
    
    
    
    
    
        $a = "";
    
        $c = "";
    
    
        foreach ($arr as $key => $value) {
    
         
            $x = "`" . $key . "`" . ",";
            $a .= $x;
         
    
            $b = "'" . $value . "'" . ",";
            $c .= $b;
         
    
    
    
        }
    
    
     $a = rtrim($a , ",");
    
     $c = rtrim($c , ",");
    
    
    $qu = "INSERT INTO $tablename(`$imagetodatebase`,$a) VALUES ('$image',$c)";
    
    
    return mysqli_query($con,$qu);
    
    
    
    
    }
    
    




function image(){


if(isset($_FILES)){



    $nameimage = $_FILES['image']['name'];

    $tmp_name = $_FILES['image']['tmp_name'];

    
                    $type = explode("." , $nameimage);

                    
                    $type = end($type);

                    $z = preg_match('/^[A-Za-z0-9_-]*$/' , $type[0]);

            if($z == 1){

           
        
                if($type == "jpg" || $type == "png" ||$type == "jpeg" ){



                    move_uploaded_file($tmp_name,"../../public/admin/pages/image/user$nameimage"); 
                    
                    return "user$nameimage";


                }

            }

    }else{

        $_SESSION['eroor']['image'] = "im sorry";

        return false;

    }
    
   

}




function ddd($B){
    var_dump($B);
    die;
}


function select($con , $tablename){


$qu = "SELECT * FROM $tablename";

$b = mysqli_query($con,$qu);


return mysqli_fetch_all($b,1);






}



function selectwhere($con , $tablename , $id ){


    $qu = "SELECT * FROM $tablename WHERE id = $id";
    
    $b = mysqli_query($con,$qu);
    
    
    return mysqli_fetch_all($b,1);
    
    
    
    
    
    
    }


function delete($con , $id , $tablename ){


    $qu = "DELETE FROM $tablename WHERE `id` = $id ";

    return mysqli_query($con,$qu);




}


function update($con , $tablename , $arr , $id , $image = null , $imagetodatebase = null ){



$x = "";


foreach ($arr as $key => $value) {

    $a = "`" . $key . "`" . "=" . "'" . $value . "'" . ",";

    $x .= $a;
}



$x = rtrim($x , ",");


if($image == null){
    
    $qu = "UPDATE $tablename SET $x WHERE  `id` = $id";

}else{

    $qu = "UPDATE $tablename SET $x, `$imagetodatebase`='$image' WHERE  `id` = $id ";

}




return mysqli_query($con , $qu);




}