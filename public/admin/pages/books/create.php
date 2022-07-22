<?php

include $_SERVER['DOCUMENT_ROOT'] . "./config.php";

include $_SERVER['DOCUMENT_ROOT'] . "./function/frontfunc.php";

include $_SERVER['DOCUMENT_ROOT'] . "./function/DBfunc.php";

$users = select($con , "users");



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
                                <?php if(isset($_SESSION['su']['create'])):?>
                                                <div class="alert alert-success" role="alert">
                                                    <?=$_SESSION['su']['create']?>
                                                  </div>
                                            <?php endif; ?>
        


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
                                <form action="/controllers/books/create.php" method="POST" enctype= "multipart/form-data">
                    
                                        <div class="form-group mb-4">
                                            <label for="name">name</label>
                                            <input type="name" name="name" class="form-control" id="name" ">
                                            <?php if(isset($_SESSION['erorr']['name'])):?>
                                                <div class="alert alert-danger" role="alert">
                                                    <?=$_SESSION['erorr']['name']?>
                                                  </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="recaipt">recaipt</label>
                                            <input type="date"name="recaipt" class="form-control" id="recaipt" ">
                                            <?php if(isset($_SESSION['erorr']['email'])):?>
                                                <div class="alert alert-danger" role="alert">
                                                    <?=$_SESSION['erorr']['email']?>
                                                  </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="back">back</label>
                                            <input type="date" name="back" class="form-control" id="back" ">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="phone">phone</label>
                                            <input type="text" name="phone" class="form-control" id="phone" ">
                                        </div>
                                        <div class="form-group">
                                        <label for="id_users">id_users</label>
                                        <select name="id_users" class="custom-select form-control-border" id="id_users">
                                              <?php foreach ($users as $key => $user) :?>
                                           
                                                <option value="<?=$user['id']?>"><?=$user['name']?></option>
                                         
                                            <?php endforeach; ?>
                                        </select>
                                        </div>
                                        <br>
                                        <div class="n-chk">
                                            <label class="new-control new-checkbox checkbox-primary">
                                            <input type="checkbox" name="is_exist" value="1" class="new-control-input">
                                            <span class="new-control-indicator"></span>is_exist
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