<?php
include("../crud.php");
$crud = new crud();


$total = $crud->ts();

$ar = $arrayName = array('0' => '12th Oct','1' =>'21st Oct' ,'2'=> '22nd Oct','3' => '23rd Oct' );


?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Schedule | i.Fest 2016</title>
	<link href="http://fonts.googleapis.com/css?family=Kristi|Alegreya+Sans:300,800" rel="stylesheet" type="text/css">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/timelify.css">
</head>
<body>

<div class="container">
<a style="" class="btn btn-primary" href="../">
            <i class="fa fa-times"></i>
            </a>
<h1 align="center">Events Schedule</h1>
	<div class="timeline">
	<!-- rep 2 -->
	<?php 
	$count = 1;

	for($i=1;$i<4;$i++){?>

				<h2><?= $ar[$i]; ?></h2>

	<?php 
	// $i = '1';

	$data = $crud->allDay($i); ?>
		
		

		<?php
			foreach ($data as $e) { 
				
				?>

		<ul class="timeline-items">

		<!-- rep1 -->
		<?php 
			$k = $count;
			if($k%2 == 0){
				$x = 'inverted';
			}
			else
				$x = '';
		?>

			<li class="is-hidden timeline-item <?= $x; ?>">
				<h3 style="font-size:25px;"><?= $e['event_name']; ?></h3>
				<hr>
				<h4 style="font-size:20px;"><?= explode(':',$e['start_time'])[0]. ":".explode(':',$e['start_time'])[1]." - ".explode(':',$e['end_time'])[0]. ":".explode(':',$e['end_time'])[1]; ?></h4>
			</li>

			<!-- rep 1 end -->

			
		</ul>


		<?php  $count++; } ?>
		<!-- rep 2 end-->
		

		<?php } ?>
	</div>



</div>



<script src="js/jquery.js"></script>
<script src="js/jquery.timelify.js"></script>
<script>
	$('.timeline').timelify({
			animLeft: "fadeInLeft",
		animCenter: "fadeInUp",
		animRight: "fadeInRight",
		animSpeed: 600,
		offset: 150
	});
</script>

</body>
</html>
