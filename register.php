<?php

$uid = $_POST['uid'];

echo $uid;

// $url = 'https://AjGdOkjQC:ab39b219-a0b3-4b22-b25f-9469e4d0abc2@scalr.api.appbase.io/iFest/participant/'.$uid;
// $data =  file_get_contents($url);

// $x = html_entity_decode($data);
// $js = json_decode($data);
// print_r($js);
// print_r($js);
// print_r($js['_type']);
// echo $js['source'];

// print_r($js1['name']);


?>

<script type="text/javascript">
  var x = <?= $uid; ?>  
</script>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Register</title>

  <!-- Stylesheets -->
  <link rel="stylesheet" href="register/css/style.css">
  <link rel="stylesheet" href="register/css/set1.css">

  <!--Google Fonts-->
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
<script src="js/appbase.js"></script>

<script type="text/javascript">
  
  var appbaseRef = new Appbase({
    url: 'https://4IF3BhROK:326bfd9e-ffc7-4c0d-a1dc-e1a6a2adb951@scalr.api.appbase.io',
    appname: 'iFest'
  });

  appbaseRef.get({
      type: 'participant',
      id: '<?= $uid; ?>'
  }).on('data', function(response) {
      
      console.log(response._source);
       document.getElementById('uid').value = <?= $uid; ?>;
  document.getElementById('name').value = response._source.name;
  document.getElementById('email').value = response._source.email;
  document.getElementById('phone').value = response._source.phone;
  document.getElementById('clg').value = response._source.college;

  }).on('error', function(error) {
      console.log(error)
  });


</script>
</head>

<body>
<script type="text/javascript">
  //var testJava = 'script Test';
 

</script>
<div id="main-wrapper">

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 left-side">
        <header>
          <!-- <span>Need an account?</span> -->
          <h3>Select <br>i.Fest Events</h3>
        </header>
      </div>

      <div class="col-md-6 right-side">
        <form>
          <div class="form-group">
            <label for="uid">Unique ID:</label>
            <input type="text" class="form-control" id="uid" value="">
          </div>
          <br>

          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name">
          </div>

          <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" class="form-control" id="email">
          </div>

          <div class="form-group">
            <label for="phpne">Phone:</label>
            <input type="text" class="form-control" id="phone">
          </div>

          <div class="form-group">
            <label for="password">Collefe:</label>
            <input type="text" class="form-control" id="password">
          </div>

        </form>
      
      </div>
    </div>
  </div>

</div> <!-- end #main-wrapper -->

<!-- Scripts -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="js/scripts.js"></script>
<script src="js/classie.js"></script>

<script>
  (function() {
    // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
    if (!String.prototype.trim) {
      (function() {
        // Make sure we trim BOM and NBSP
        var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
        String.prototype.trim = function() {
          return this.replace(rtrim, '');
        };
      })();
    }

    [].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
      // in case the input is already filled..
      if( inputEl.value.trim() !== '' ) {
        classie.add( inputEl.parentNode, 'input--filled' );
      }

      // events:
      inputEl.addEventListener( 'focus', onInputFocus );
      inputEl.addEventListener( 'blur', onInputBlur );
    } );

    function onInputFocus( ev ) {
      classie.add( ev.target.parentNode, 'input--filled' );
    }

    function onInputBlur( ev ) {
      if( ev.target.value.trim() === '' ) {
        classie.remove( ev.target.parentNode, 'input--filled' );
      }
    }
  })();
</script>

</body>
</html>
