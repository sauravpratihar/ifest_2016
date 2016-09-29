<?php

$uid = $_GET['uid'];
$pass = $_GET['password'];
// echo $uid;
include('crud.php');

$crud = new crud();


if(isset($_POST['submit'])){

  print_r($_POST);




  // header("Locatio");
  $data = $crud->insertData($_POST['uid'],$_POST['name'],$_POST['email'],$_POST['phone'],$_POST['clg'],$_POST['acc'],$_POST['ibot'],$_POST['ielectro'],$_POST['irelay'],$_POST['iride'],$_POST['ibiz'],$_POST['blindc'],$_POST['irubble'],$_POST['iapp'],$_POST['treasurehunt'],$_POST['iclash'],$_POST['icube'],$_POST['icrypt'],$_POST['iganith'],$_POST['icapture'],$_POST['imaze'],$_POST['iquiz'],$_POST['idatabase'],$_POST['gohunt'],$_POST['iintelligence']);

  // $data = $crud->insertData();
  echo $data;

  if($data){
  echo "<script>alert('Registered Success');</script>";
  echo "<script>window.location.href = 'http://ieee.daiict.ac.in/ifest'</script>";
}
}


?>


<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Register</title>
    <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
    <script src="js/appbase.js"></script>

    <script type="text/javascript">
  
  var appbaseRef = new Appbase({
    url: 'https://6JM2Byr4s:afcb9c1a-261e-4016-b255-4d2414337761@scalr.api.appbase.io',
    appname: 'iFest16'
  });

  appbaseRef.get({
      type: 'participant',
      id: '<?= $uid; ?>'
  }).on('data', function(response) {
      
      

     if( ((response._source.password).localeCompare('<?= $pass; ?>'))){
        
        alert("Password not match");
        window.location = "http://ieee.daiict.ac.in/ifest/";
      // }
    }

      

  document.getElementById('uid').value = <?= $uid; ?>;
  document.getElementById('name').value = response._source.name;
  document.getElementById('email').value = response._source.email;
  document.getElementById('phone').value = response._source.phone;
  document.getElementById('clg').value = response._source.college;

  }).on('error', function(error) {
      console.log(error);

  });


</script>
 


    
    
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
<link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>

        <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>

  <body>

    <div class="container">

    <form class="well form-horizontal" action="reg.php?uid=<?= $uid; ?>" method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<!-- <legend>Contact Us Today!</legend>
 -->
<!-- Text input-->
<h2 align="center">One Time Events Registration</h2><br>

<div class="form-group">
  <label class="col-md-4 control-label">Unique ID</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="uid" readonly="" class="form-control"  type="text" id="uid" value="">
    </div>
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" >Name</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="name" id="name" readonly="" class="form-control"  type="text" value="" >
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" id="email" readonly="" class="form-control"  type="text">
    </div>
  </div>
</div>


<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Phone</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="phone" id="phone" readonly="" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text input-->
      
<div class="form-group">
  <label class="col-md-4 control-label">College</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="clg" id="clg" readonly="" class="form-control" type="text">
    </div>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 " style="text-align:right">Do you want an Accommodation?</label>  
    <div class="col-md-4 inputGroupContainer">
        
  <input type="hidden" name="acc" value="0"><input type="checkbox" name="acc" value="1">
  </div>
</div>



<!-- radio checks -->
 <div class="form-group">
                        <!-- <label class="col-md-4 control-label">Do you have hosti ng?</label> -->
  <div class="col-md-4" align="left"></div>

  <div class="col-md-3" align="left">
  <label>Select events</label>
  <div class="checkbox">

  <label><input type="hidden" name="ibot" value="0"><input type="checkbox" name="ibot" value="1">i.Bot</label>
</div>
<div class="checkbox">
  <label><input type="hidden" name="ielectro" value="0"><input type="checkbox" name="ielectro" value="1">i.Electro</label>
</div>
<div class="checkbox">
  <label><input type="hidden" name="irelay" value="0" ><input type="checkbox" name="irelay" value="1" >
  i.Relay</label>
</div>
<div class="checkbox">

  <label>  <input type="hidden" name="iride" value="0"><input type="checkbox" name="iride" value="1">
i.Ride</label>
</div>
<div class="checkbox">
  <label>  <input type="hidden" name="ibiz" value="0"><input type="checkbox" name="ibiz" value="1">
i.Biz</label>
</div>
<div class="checkbox">
  <label>  <input type="hidden" name="blindc" value="0" ><input type="checkbox" name="blindc" value="1" >
Blind C</label>
</div>
<div class="checkbox">
  <label><input type="hidden" name="irubble" value="0"><input type="checkbox" name="irubble" value="1">
  i.Rubble</label>
</div>
<div class="checkbox">
  <label><input type="hidden" name="iapp" value="0"><input type="checkbox" name="iapp" value="1">i.App</label>
</div>
<div class="checkbox">
  <label><input type="hidden" name="treasurehunt" value="0" ><input type="checkbox" name="treasurehunt" value="1" >Treasure Hunt</label>
</div>
  <div class="checkbox">
  <label><input type="hidden" name="iclash" value="0"><input type="checkbox" name="iclash" value="1">i.Clash</label>
</div>

</div>
  <div class="col-md-2" align="" >

<div class="checkbox">
  <label><input type="hidden" name="icube" value="0"><input type="checkbox" name="icube" value="1">i.Cube</label>
</div>
<div class="checkbox">
  <label><input type="hidden" name="iintelligence" value="0"><input type="checkbox" name="iintelligence" value="1" >i.Intelligence</label>
</div>
<div class="checkbox">

  <label><input type="hidden" name="icrypt" value="0"><input type="checkbox" name="icrypt" value="1">i.Crypt</label>
</div>

<div class="checkbox">
  <label><input type="hidden" name="iganith" value="0"><input type="checkbox" name="iganith" value="1">i.Ganith</label>
</div>
<div class="checkbox">
  <label><input type="hidden" name="icapture" value="0" ><input type="checkbox" name="icapture" value="1" >i.Capture</label>
</div>
<div class="checkbox">

  <label><input type="hidden" name="imaze" value="0"><input type="checkbox" name="imaze" value="1">i.Maze</label>
</div>
<div class="checkbox">
  <label><input type="hidden" name="iquiz" value="0"><input type="checkbox" name="iquiz" value="1">i.Quiz</label>
</div>
<div class="checkbox">
  <label><input type="hidden" name="idatabase" value="0" ><input type="checkbox" name="idatabase" value="1" >i.Database</label>
</div>

<div class="checkbox">
  <label><input type="hidden" name="gohunt" value="0" ><input type="checkbox" name="gohunt" value="1" >Go Hunt</label>
</div>
                        </div>

<!-- Text area -->
  



<!-- Button -->
<div class="form-group">
  <!-- <label class="col-md-4 control-label"></label> -->
  <div class="col-md-12 center" align="center" style="padding-top:20px">
    <input type="submit" name="submit" class="btn btn-warning" value="Register"></input>
  </div>
</div>

</fieldset>
</form>
</div>
    </div><!-- /.container -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>

        <script src="js/index.js"></script>

    
    
    
  </body>
</html>
