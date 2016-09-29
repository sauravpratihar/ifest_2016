<?php 
include('../crud.php');

$crud = new crud();

$events = $crud->events();

$arr = array(0=>"Fun Event",1=>"Technical Event");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>i.Fest 2016 | Events</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">


    <!-- Portfolio Grid Section -->

    <section id="portfolio">
        <div class="container">
        <a style="text-align:center;" class="btn btn-primary" href="../">
            <i class="fa fa-times"></i>
            </a>
            <div class="row">
            <!-- <i align="right" class="" aria-hidden="true"></i> -->
             

                <div class="col-lg-12 text-center">
                    <h2>Events</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">

             <?php for($i=0;$i<19;$i++){?>

                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal<?=$i;?>" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                            <p><?= $events[$i]['title'];?></p>
                            <p style="font-size:15px"><?= $arr[$events[$i]['type']]; ?></p>
                            </div>
                        </div>
                        <img src="../event_img/<?= $events[$i]['image']; ?>" class="img-responsive" alt="">
                    </a>
                </div>

                <?php }?>
                
          
            </div>
        </div>
    </section>


  

    
    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Portfolio Modals -->

<?php for($i=0;$i<19;$i++){?>


    <div class="portfolio-modal modal fade" id="portfolioModal<?=$i;?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2><?= $events[$i]['title']; ?></h2>
                            <hr class="star-primary">
                           
                            <p >
                                <?= $events[$i]['details']; ?>
                            </p>

                          
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php }?>
    
    </div>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>

</body>

</html>
