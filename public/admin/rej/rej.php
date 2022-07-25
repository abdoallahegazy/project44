<?php

include $_SERVER['DOCUMENT_ROOT'] . "./function/frontfunc.php";

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designreset.com/cork/ltr/demo3/auth_register_boxed.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Jul 2022 00:51:56 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Register Boxed | CORK - Multipurpose Bootstrap Dashboard Template </title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="<?=asset('bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?=asset('assets/css/plugins.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?=asset('assets/css/authentication/form-2.css') ?>" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="<?=asset('assets/css/forms/theme-checkbox-radio.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?=asset('assets/css/forms/switches.css') ?>">
</head>
<body class="form">
    

    <div class="form-container outer">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">

                        <h1 class="">Register</h1>
                        <p class="signup-link register">Already have an account? <a href="auth_login_boxed.html">Log in</a></p>
                        <form action="/controllers/rej/rej.php" method="POST" enctype= "multipart/form-data">
                            <div class="form">

                                <div id="username-field" class="field-wrapper input">
                                    <label for="username">USERNAME</label>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                    <input id="username" name="name" type="text" class="form-control" placeholder="Username">
                                </div>

                                <div id="email-field" class="field-wrapper input">
                                    <label for="email">EMAIL</label>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-at-sign register"><circle cx="12" cy="12" r="4"></circle><path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path></svg>
                                    <input id="email" name="email" type="text" value="" class="form-control" placeholder="Email">
                                </div>

                                <div id="password-field" class="field-wrapper input mb-2">
                                    <div class="d-flex justify-content-between">
                                        <label for="password">PASSWORD</label>
                                        <a href="auth_pass_recovery_boxed.html" class="forgot-pass-link">Forgot Password?</a>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                    <input id="password" name="password" type="password" class="form-control" placeholder="Password">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="toggle-password" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                </div>
                                <div id="image-field"  class="field-wrapper input mb-2">
                
                                <input type="file" name="image" class="form-control-file" id="image">
                               
                                </div>
                                <?php if(isset($_SESSION['erorr']['iagme'])):?>
                                                <p class="text-danger" >
                                                    <?=$_SESSION['erorr']['iagme']?>
                                          </p>
                                            <?php endif; ?>
                              
                                </div>

                                <div class="d-sm-flex justify-content-between">
                                    <div class="field-wrapper">
                                        <button type="submit" class="btn btn-primary" value="">Get Started!</button>
                                    </div>
                                </div>

                               

                            </div>
                        </form>

                    </div>                    
                </div>
            </div>
        </div>
    </div>

    
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="<?=asset('assets/js/libs/jquery-3.1.1.min.js') ?>"></script>
    <script src="<?=asset('bootstrap/js/popper.min.js') ?>"></script>
    <script src="<?=asset('bootstrap/js/bootstrap.min.js') ?>"></script>
    
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="<?=asset('assets/js/authentication/form-2.js') ?>"></script>

</body>

<!-- Mirrored from designreset.com/cork/ltr/demo3/auth_register_boxed.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Jul 2022 00:51:56 GMT -->
</html>

<?php

session_destroy();

?>