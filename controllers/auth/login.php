<?php

session_start();

include $_SERVER['DOCUMENT_ROOT'] . "/function/DBfunc.php";

if(isset($_POST['email'])){

        $email = $_POST['email'];

        $password = $_POST['password'];


        $users = select($con , "users");

                foreach ($users as $key => $user) {

                        if($user['email'] == $email && $user['password'] == $password && $user['is_admin'] == 1){

                            $_SESSION['admin'] = [

                                'email'=> $email,
                                'password'=>$password,
                                'is_admin'=> $user['is_admin']
                             


                            ];
        
                        
                           return header("location:/admin");

                        }else{
                            
                            header("location:/public/admin/auth/login.php");
                        }


                }


}