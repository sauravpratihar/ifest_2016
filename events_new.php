 <div class="modal fade" id="myModal2" role="dialog">

        <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <form action="reg.php" target="_blank" method="get">

             
                <p>Enter Your Password</p>
                <input type="password" name="password">
              </div>
            </div>
            <div class="modal-footer">
              <input type="submit" value="Login" class="btn btn-success">
            </div>

        </form>

      </div>
    </div>
  </div>
<?php 
include('crud.php');

$crud = new crud();

$events = $crud->events();

$arr = array(0=>"Fun Event",1=>"Technical Event");
?>


<link href="src/css/least.min.css" rel="stylesheet" />
        <section id="least0">
            
            <!-- Least Gallery: Fullscreen Preview -->
            <div class="least-preview0"></div>
            
            <!-- Least Gallery: Thumbnails -->
            <ul class="least-gallery0">
                <!-- 1 || Element with data-caption ||-->

    

              
                <?php for ($i=0;$i<20;$i++){ ?>
               <a data-toggle="modal" data-target="#myModal2" target="_blank"><li data-toggle="tooltip" data-placement="top" title="Register"><img class="main-menu-icon" src="images/logos/registration.png" height="30"></li></a>


               
                <?php } ?>



                
              
               
            </ul>

        </section>
       



        <script src="src/js/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- least.js library -->
        <script src="src/js/libs/least/least.js"></script>

        <script>
            $(document).ready(function(){
                $('.least-gallery').least();
            });
        </script>
        
   