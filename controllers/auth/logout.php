<?php


session_start();


session_destroy();

header("location:/public/admin/auth/login.php");