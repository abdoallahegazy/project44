<?php

include $_SERVER['DOCUMENT_ROOT'] . "./config.php";

include $_SERVER['DOCUMENT_ROOT'] . "./function/frontfunc.php";

include $_SERVER['DOCUMENT_ROOT'] . "./function/DBfunc.php";

$id = $_POST['id'];

$users = selectwhere($con , "users" , $id)[0];



?>

<!-- header -->
<?php include  layouts("header.php" ) ?>
<!-- header -->

<!--  BEGIN NAVBAR  -->
<?php include layouts("nav.php" )?>
<!--  END NAVBAR  -->

 <!--  BEGIN SIDEBAR  -->
 <?php include layouts("aside.php" )?>
<!--  END SIDEBAR  -->


    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">
        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="row layout-top-spacing">

             
                            <div class="widget-content">

                                <div class="order-summary">

                            



                                <div class="col-xl-12 col-md-12 col-sm-12 col-12 layout-spacing" style="width:1000px;">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Form controls</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 ml-6 my-6">
                                <form action="/controllers/users/update.php" method="POST" enctype= "multipart/form-data">
                               <input type="hidden" name="id" value="<?=$users['id']?>">
                                        <div class="form-group mb-4">
                                            <label for="name">name</label>
                                            <input type="name"  value="<?=$users['name']?>" name="name" class="form-control" id="name" ">
                                            <?php if(isset($_SESSION['erorr']['name'])):?>
                                                <div class="alert alert-danger" role="alert">
                                                    <?=$_SESSION['erorr']['name']?>
                                                  </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="email">email</label>
                                            <input type="email"  value="<?=$users['email']?>" name="email" class="form-control" id="email" ">
                                            <?php if(isset($_SESSION['erorr']['email'])):?>
                                                <div class="alert alert-danger" role="alert">
                                                    <?=$_SESSION['erorr']['email']?>
                                                  </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="password">password</label>
                                            <input type="password"  value="<?=$users['password']?>" name="password" class="form-control" id="password" ">
                                        </div>
                                        <div class="form-group mb-4 mt-3">
                                            <label for="image">Example file input</label>
                                            <input type="file"  name="image" class="form-control-file" id="image">
                                        </div>
                                        <div class="n-chk">
                                            <label class="new-control new-checkbox checkbox-primary">
                                            <input type="checkbox" <?=$users['is_admin'] == 1 ? "checked" : "" ?> name="is_admin" value="1" class="new-control-input" >
                                            <span class="new-control-indicator"></span>is_admin
                                            </label>
                                        </div>
                                        <input type="submit" class="mt-4 mb-4 btn btn-primary">
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>










                                    

                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    </div>


    <?php include layouts("footer.php")  ?>

    <?php session_destroy() ?>