<?php

include $_SERVER['DOCUMENT_ROOT'] . "./config.php";

include $_SERVER['DOCUMENT_ROOT'] . "./function/frontfunc.php";


include $_SERVER['DOCUMENT_ROOT'] . "./function/DBfunc.php";

$books = select($con , "books");

$qu = "SELECT users.name as nname , books.id ,  books.name , books.recaipt ,books.back , books.phone , books.id_users , books.is_exist FROM users join books on users.id = books.id_users";

$a = mysqli_query($con , $qu);

$books = mysqli_fetch_all($a , 1);


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
                <th>recaipt</th>
                <th>back</th>
                <th>phone</th>
                <th>id_users</th>
                <th>is_exist</th>
                <th>D&U</th
             
            </tr>
        </thead>
        <tbody>
            <?php foreach ($books as $key => $book)   : ?>
                 
              <tr>
             <th><?=$book['id']?></th>
                <th><?=$book['name']?></th>
                <th><?=$book['recaipt']?></th>
                <th><?=$book['back']?></th>
                <th><?=$book['phone']?></th>
                <th><?=$book['nname']?></th>
    
              
            
               
                <?php 
                if($book['is_exist'] == 1) {
                    echo "<th class='text-primary'>exists</th>";
                }else{
                    echo "<th class='text-warning'>not exists</th>";

                }
                
                    


                ?>

               
                <th>
                <a href="./controllers/books/delete.php?id=<?=$book['id']?>">
                  <button name="id" value="id" type="submit" class="btn btn-outline-dark">Delete</button>
                  </a>
                  <form action="/book_edit" method="post">

                  <input type="hidden" name="id" value="<?=$book['id']?>">

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
                <th>recaipt</th>
                <th>back</th>
                <th>phone</th>
                <th>id_users</th>
                <th>is_exist</th>
                <th>D&U</th
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