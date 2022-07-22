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

                    
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12 layout-spacing" style="width:1000px;">

                                <div class="table-responsive">
    <table class="table table-bordered table-hover table-condensed mb-4" style="color:blueviolet">
        <thead>
            <tr>
            <th>id</th>
               <th>name</th>
                <th>email</th>
                <th>password</th>
                <th>image</th>
                <th>is_admin</th>
                <th>D&U</th
             
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $key => $user)   : ?>
                 
              <tr>
             <th><?=$user['id']?></th>
                <th><?=$user['name']?></th>
                <th><?=$user['email']?></th>
                <th><?=$user['password']?></th>
                <th><img src="/public/admin/pages/image/<?=$user['image']?>"  style="width:100px ; height:100px ;"> </th>
              
            
               
                <?php 
                if($user['is_admin'] == 1) {
                    echo "<th class='text-primary'>admin</th>";
                }else{
                    echo "<th class='text-warning'>user</th>";

                }
                
                    


                ?>

               
                <th>
                <a href="./controllers/users/delete.php?id=<?=$user['id']?>">
                  <button name="id" value="id" type="submit" class="btn btn-outline-dark">Delete</button>
                  </a>
                  <form action="/user_edit" method="post">

                  <input type="hidden" name="id" value="<?=$user['id']?>">

                  <button name="id" value="id" type="submit" class="btn btn-outline-dark my-3">Update</button>

                  </form>

                </th>
            </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>password</th>
                <th>image</th>
                <th>is_admin</th>
                <th>D&U</th>
            </tr>
        </tfoot>
    </table>
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