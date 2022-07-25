<?php

include $_SERVER['DOCUMENT_ROOT'] . "./config.php";

include $_SERVER['DOCUMENT_ROOT'] . "./function/frontfunc.php";

include $_SERVER['DOCUMENT_ROOT'] . "./function/DBfunc.php";

$id = $_POST['id'];

$users = select($con , "users");

$book =selectwhere($con , "books" , $id)[0];



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
                                <form action="/controllers/books/update.php" method="POST" enctype= "multipart/form-data">

                                    <input type="hidden" name="id" value="<?=$book['id']?>"">

                                    <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">name</label>
                                        <input type="text" value="<?=$book['name']?>" name="name" class="form-control" id="name">
                                        <?php if(isset($_SESSION['error']['name'])) :  ?>

                                                <div class="alert alert-danger" role="alert">
                                                        <?= $_SESSION['error']['name'] ?>
                                                    </div>

                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="recaipt">recaipt</label>
                                        <input type="date" value="<?=$book['recaipt']?>"  name="recaipt" class="form-control" id="recaipt">
                                        <?php if(isset($_SESSION['error']['name'])) :  ?>

                                                <div class="alert alert-danger" role="alert">
                                                        <?= $_SESSION['error']['name'] ?>
                                                    </div>

                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="back">back</label>
                                        <input type="date" value="<?=$book['back']?>" name="back" class="form-control" id="back">
                                        <?php if(isset($_SESSION['error']['name'])) :  ?>

                                                <div class="alert alert-danger" role="alert">
                                                        <?= $_SESSION['error']['name'] ?>
                                                    </div>

                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">phone</label>
                                        <input type="text" value="<?=$book['phone']?>" name="phone" class="form-control" id="phone">
                                        <?php if(isset($_SESSION['error']['name'])) :  ?>

                                                <div class="alert alert-danger" role="alert">
                                                        <?= $_SESSION['error']['name'] ?>
                                                    </div>

                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group">
                                    <select name="id_users" class="custom-select form-control-border" id="id_users">
                                    <?php foreach ($users as $key => $user) : ?>

                                        <option <?=$user['id'] == $book['name'] ? "selected" : ""  ?> value="<?=$user['id']?>"><?=$user['name']?></option>
                                    
                                    <?php endforeach; ?>    
                                    </select>
                                    </div>

                                    <div class="form-check">
                                        <input type="checkbox" <?= $book['is_exist'] == 1 ? "checked" : "" ?>value="1"     name="is_exist" class="form-check-input" id="is_exist">
                                        <label class="form-check-label" for="exampleCheck1">is_exists</label>
                                    </div>
                                    </div>




                                    <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
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

    <?php unset($_SESSION['erorr'] , $_SESSION['su']) ?>