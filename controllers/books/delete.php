<?php

include $_SERVER['DOCUMENT_ROOT'] . "/function/DBfunc.php";


$id = $_GET['id'];

delete($con , $id  , 'books');

header("location:/book");