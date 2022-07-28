<?php

include $_SERVER['DOCUMENT_ROOT'] . "/config.php";

include $_SERVER['DOCUMENT_ROOT'] . "/function/frontfunc.php";

include $_SERVER['DOCUMENT_ROOT'] . "/function/DBfunc.php";

$books = select($con , "books");

?>

<?php include weblayouts("header.php")  ?>

<?php include weblayouts("site.php")  ?>


    <!-- contact section -->

    <section class="contact_section ">

        <div class="container">
         
          <div class="row">
            <div class="col-md-6">
              <div class="d-flex justify-content-center d-md-block">
                <h2>
                  sign up
                </h2>
              </div>
              <form action="public/admin/rej/rej.php">
                <div class="contact_form-container">
                    <div class="mt-5">
                      <button type="submit">
                        send
                      </button>
                    </div>
                  </div>
    
                </div>
    
              </form>
            </div>
          
      </section>
      <!-- end contact section -->
      <section class="info_section layout_padding-top">
        <div class="info_logo-box">
          <h2>
              Fanadesh
          </h2>
        </div>
          <div class="container layout_padding2">
            <div class="row">
              <div class="col-md-3">
                <h5>
                    About Us                                                                             
                </h5>
               <p>
                  dolor sit amet, consectetur magna aliqua. Ut enim ad minim veniam, quisdotempor incididunt r 
               </p>
              </div>
              <div class="col-md-3">
                <h5>
                    Useful Link 
                </h5>
                <ul>
                  <li>
                    <a href="">
                        Video games
                    </a>
                  </li>
                  <li>
                   <a href="">
                      Remote control
                   </a>
                  </li>
                  <li>
                    <a href="">
                        3d controller
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col-md-3">
                <h5>
                    Contact Us
                </h5>
                <p>
                    dolor sit amet, consectetur magna aliqua. quisdotempor incididunt ut e 
                </p>
              </div>
              <div class="col-md-3">
           
                <div class="subscribe_container">
                  <h5>
                      Newsletter
                  </h5>
                  <div class="form_container">
                    <form action="">
                      <input type="email" placeholder="Enter your email">
                      <button type="submit">
                        Subscribe
                      </button>
                    </form>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
         
        </section>



</html>



<?php include weblayouts("footer.php")  ?>