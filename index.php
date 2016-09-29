
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<!-- <script type="text/javascript">
		if(screen.width<=800)
			window.location="mobile.html";
	</script> -->
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>i.Fest 2016</title>
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<!-- Feather Icons -->
	<link rel="stylesheet" type="text/css" href="fonts/feather/style.css">
	<!-- General demo styles & header -->
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<!-- Component styles -->
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/honeycombs.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css" />

	<link rel="stylesheet" type="text/css" href="es/css/component.css" />
	<link rel="stylesheet" type="text/css" href="es/css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/camera.css"/>



	<script src="js/jquery.js"></script>
	<script src="js/modernizr.custom.js"></script>






	<script src="es/js/draggabilly.pkgd.min.js"></script>
	<script src="es/js/elastiStack.js"></script>

	<script type="text/javascript" src="js/camera.min.js"></script>

	<script type="text/javascript" src="http://ricostacruz.com/jquery.transit/jquery.transit.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jqu‌​ery-ui.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>    




</head>
<body data-anm=".anm">

<!-- Register -->
	<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title">Register for Events</h4>

		</div>
          <form action="reg.php" target="_blank" method="get">

	        <!-- </div> -->
	        <div class="modal-body">
	          <div>
	          	<p>Enter Your Unique ID</p>
	          	<input type="text" name="uid">
	          </div>

	          <div style="margin-top:15px;">
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






  <!-- acco -->

  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
	          <h4 class="modal-title">Accommodation</h4>

		</div>
          

	        <!-- </div> -->
	        <div class="modal-body">
	          
	        	<p align="center">Will be updated soon</p>
	        	
	        </div>
	        


      </div>
    </div>
  </div>


  <!-- about -->

   <div class="modal fade" id="aboutModal" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
	          <h4 class="modal-title">About i.Fest</h4>

		</div>
          

	        <!-- </div> -->
	        <div class="modal-body">
	          
	        	<p style="width:100%"><b>i.Fest</b> is an idea conceptualized by IEEE Student Branch at <b>DA-IICT</b>. Our main aim is to bring the budding engineers from all over India to a common platform so that they can share their knowledge with their fellow imaginers. The next big thing for engineers is to pull out graphics from computer or television screen and integrate them into real world environment. With these innovative engineers coming up, it will become more pervasive and ubiquitous. So i.Fest’16 presents in the theme of <b>Augmented Reality</b>, where creative genius comes alive.</p>
	        </div>
	        


      </div>
    </div>
  </div>



  <!-- end -->


  <!-- Register End -->
	<!-- Main container -->
	<div class="container">
		<!-- Blueprint header -->
		<header class="bp-header cf" style="position:relative">
			<!--<span>Blueprint <span class="bp-icon bp-icon-about" data-content="The Blueprints are a collection of basic and minimal website concepts, components, plugins and layouts with minimal style for easy adaption and usage, or simply for inspiration."></span></span>
			<h1>Zoom Slider</h1>-->
			<div>
				<a href="http://www.daiict.ac.in/" target='_blank'><img src="images/da.png" height="80"></a>
				<a href="http://ieee.daiict.ac.in" style="margin-left: 20px" target='_blank'><img src="images/ieee.png" height="60"></a>
			</div>
			<!-- <div style="position: absolute;right: 50%;margin-right: -4em">
				<a href="http://edgx.xyz"><img src="images/logos/edgx.png" style='width: 10em'></a>
			</div> -->
			<nav id="social-block">
				<a href="http://www.facebook.com/ifest16" target='_blank'><i class="fa fa-facebook"></i></a>
				<!-- <a href="https://www.youtube.com/channel/UCoO2A8cSVs3fXp22LKJ17UQ" target='_blank'><i class="fa fa-youtube-play"></i></a> -->
				<a href="http://www.instagram.com/i.fest/" target="_blank"><i class="fa fa-instagram" target='_blank'></i></a>

				<a href="mailto:ifest2016daiict@gmail.com" target="_blank"><i class="fa fa-envelope" target='_blank'></i></a>

			</nav>
		</header>
		<nav id="event-slider">
			<div style="position: relative; width: 100%; height: 100%;">
				<!-- <ul id="event-menu-icons">
					<li class="openIcon" data-item="0" data-toggle="tooltip" data-placement="top" title="computeaid"><img class="event-slider-menu" src="images/logos/compute_aid.png"></li>
					<li class="openIcon" data-item="1" data-toggle="tooltip" data-placement="top" title="robotics"><img class="event-slider-menu" src="images/logos/robotics.png"></li>
					<li class="openIcon" data-item="2" data-toggle="tooltip" data-placement="top" title="cyber crusade"><img class="event-slider-menu" src="images/logos/gaming.png"></li>
					<li class="openIcon" data-item="3" data-toggle="tooltip" data-placement="top" title="food for fun"><img class="event-slider-menu" src="images/logos/food.png"></li>
					<li class="openIcon" data-item="4" data-toggle="tooltip" data-placement="top" title="money matters"><img class="event-slider-menu" src="images/logos/money_matters_new.png"></li>
					<li class="openIcon" data-item="5" data-toggle="tooltip" data-placement="top" title="in focus"><img class="event-slider-menu" src="images/logos/photography.png"></li>
					<li class="openIcon" data-item="6" data-toggle="tooltip" data-placement="top" title="newron"><img class="event-slider-menu" src="images/logos/newron.png"></li>
					<li class="openIcon" data-item="7" data-toggle="tooltip" data-placement="top" title="innovati"><img class="event-slider-menu" src="images/logos/innovati.png"></li>
					<li class="openIcon" data-item="8" data-toggle="tooltip" data-placement="top" title="create it"><img class="event-slider-menu" src="images/logos/creative.png"></li>
					<li class="openIcon" data-item="9" data-toggle="tooltip" data-placement="top" title="just like that"><img class="event-slider-menu" src="images/logos/fun.png"></li>
					<li class="openIcon" data-item="10" data-toggle="tooltip" data-placement="top" title="elevation"><img class="event-slider-menu" src="images/logos/elevation.png"></li>
				</ul> -->

				<!-- <ul id="event-menu-icons">
					<li class="openIcon" data-item="0" data-toggle="tooltip" data-placement="top" title="computeaid"><img class="event-slider-menu" src="images/logos/compute_aid.png"></li>
					<li class="openIcon" data-item="1" data-toggle="tooltip" data-placement="top" title="robotics"><img class="event-slider-menu" src="images/logos/robotics.png"></li>
					<li class="openIcon" data-item="2" data-toggle="tooltip" data-placement="top" title="cyber crusade"><img class="event-slider-menu" src="images/logos/gaming.png"></li>
					<li class="openIcon" data-item="3" data-toggle="tooltip" data-placement="top" title="food for fun"><img class="event-slider-menu" src="images/logos/food.png"></li>
					<li class="openIcon" data-item="4" data-toggle="tooltip" data-placement="top" title="money matters"><img class="event-slider-menu" src="images/logos/money_matters_new.png"></li>
					<li class="openIcon" data-item="5" data-toggle="tooltip" data-placement="top" title="in focus"><img class="event-slider-menu" src="images/logos/photography.png"></li>
					<li class="openIcon" data-item="6" data-toggle="tooltip" data-placement="top" title="newron"><img class="event-slider-menu" src="images/logos/newron.png"></li>
					<li class="openIcon" data-item="7" data-toggle="tooltip" data-placement="top" title="innovati"><img class="event-slider-menu" src="images/logos/innovati.png"></li>
					<li class="openIcon" data-item="8" data-toggle="tooltip" data-placement="top" title="create it"><img class="event-slider-menu" src="images/logos/creative.png"></li>
					<li class="openIcon" data-item="9" data-toggle="tooltip" data-placement="top" title="just like that"><img class="event-slider-menu" src="images/logos/fun.png"></li>
					<li class="openIcon" data-item="10" data-toggle="tooltip" data-placement="top" title="elevation"><img class="event-slider-menu" src="images/logos/elevation.png"></li>
				</ul> -->



				<!-- MAIN NAV HERE -->
				<ul id="main-menu-items" style="position: absolute; width: 100%; margin: 0 auto">

					<!-- <li data-toggle="tooltip" data-placement="top" title="ABOUT I.FEST" id="event-menu-reveal"><img class="main-menu-icon" src="images/logos/star.png" height="30"></li> -->

					<a data-toggle="modal" data-target="#aboutModal" target="_blank"><li data-toggle="tooltip" data-placement="top" title="ABOUT I.FEST"><img class="main-menu-icon" src="images/logo/about.png" height="30" style="margin-right:9px"></li></a>

					<li class="openIcon" data-item="11" data-toggle="tooltip" data-placement="top" title="EVENTS"><img class="event-slider-menu" src="images/logo/events.png"></li>

			


					<li class="openIcon" data-item="12" data-toggle="tooltip" data-placement="top" title="GALLERY"><img class="event-slider-menu" src="images/logo/gallery.png"></li>

					<a href="schedule"><li class="openIcon" data-toggle="tooltip" data-placement="top" title="schedule" style="margin-right:7px"><img class="main-menu-icon" src="images/logos/calender.png" height="30"></li></a>

				<!-- 	<a href=""><li class="openIcon" data-toggle="tooltip" data-placement="top" title="accommodation" style="margin-right:7px"><img class="main-menu-icon" src="images/logos/home.png" height="30"></li></a> -->

					<!-- <a data-toggle="modal" data-target="#myModal2" target="_blank"><li data-toggle="tooltip" data-placement="top" title="accommodation"><img class="main-menu-icon" src="images/logos/home.png" height="30" style="margin-right:10px;"></li></a> -->



					<li class="openIcon" data-item="14" data-toggle="tooltip" data-placement="top" title="CONTACT"><img class="event-slider-menu" src="images/logos/about.png"></li></a>									

					<li class="openIcon" data-item="15" data-toggle="tooltip" data-placement="top" title="sponsors"><img class="event-slider-menu" src="images/logos/inr_mod.png"></li>

					<li class="openIcon" data-item="17" data-toggle="tooltip" data-placement="top" title="the team"><img class="event-slider-menu" src="images/logos/team.png"></li>

					<a data-toggle="modal" data-target="#myModal" target="_blank"><li data-toggle="tooltip" data-placement="top" title="Login"><img class="main-menu-icon" src="images/logos/registration.png" height="30"></li></a>
					
					
					
					<!-- <li data-toggle="tooltip" data-placement="top" title="mega events" id="mega-event-menu-reveal"><img class="main-menu-icon" src="images/logos/star.png" height="30"></li> -->
				</ul>

				<!-- <ul id="other-menu-icons">
					<li class="openIcon" data-item="17" data-toggle="tooltip" data-placement="top" title="Fun Events"><img class="event-slider-menu" src="images/fun_menu.png"></li>
					<li class="openIcon" data-item="18" data-toggle="tooltip" data-placement="top" title="Walkathon"><img class="event-slider-menu" src="images/logos/walkathon.png"></li>
					<li class="openIcon" data-item="19" data-toggle="tooltip" data-placement="top" title="EDG Night"><img class="event-slider-menu" src="images/night.png"></li>
					<li class="openIcon" data-item="20" data-toggle="tooltip" data-placement="top" title="EDG Talks"><img class="event-slider-menu" src="images/talk.png"></li>
				</ul> -->


				<script type="text/javascript">
				var eventMenuReveal = false;
				var megaEventMenuReveal = false;
				$("#event-menu-icons li").hide();
				$("#other-menu-icons li").hide();
				$("#event-menu-reveal").click(function(){
					if(eventMenuReveal ==  false){
						var eventIcons = $("#event-menu-icons li");
						revealMenu(eventIcons);
						eventMenuReveal = true;
					}
					else{
						var eventIcons = $("#event-menu-icons li").get().reverse();
						hideMenu(eventIcons);
						eventMenuReveal = false;
					}
				});

				$(".openIcon").hover(function(){
					var top = $(this).find('img').offset().top -10;
					console.log(top);
					$(this).find('img').transition({scale:1.4});
					//$(this).find('img').offset({top:top});
				}, function(){
					var top = $(this).find('img').offset().top +10;
					$(this).find('img').transition({scale:1});
					//$(this).find('img').offset({top:top});
				});

				$("#mega-event-menu-reveal").click(function(){
					if(megaEventMenuReveal ==  false){
						var eventIcons = $("#other-menu-icons li").get().reverse();
						revealMenu(eventIcons);
						megaEventMenuReveal = true;
					}
					else{
						var eventIcons = $("#other-menu-icons li");
						hideMenu(eventIcons);
						megaEventMenuReveal = false;
					}
				});

				revealMenu = function(elList){
					$.each(elList, function(key, el){
						$(el).delay(100*key).fadeIn(200);
					});
				}
				hideMenu = function(elList){
					console.log("Hide");
					$.each(elList, function(key,el){
						$(el).delay(100*key).fadeOut(200);
					});
				}
				</script>
			</div>
		</nav>
		<!-- Grid -->
		<!--
		<div id="layers">
		  <div class="layer layer-1"></div>
		  <div class="layer layer-2"></div>
		  <div class="layer layer-3"></div>
		  <div class="layer layer-4"></div>
		  <div class="layer layer-5"></div>
		</div>
	-->
	<canvas style="position: absolute; z-index: -1; top:0px"></canvas>
	<section class="slider">
		<!-- Compute Aid -->
		<div class="slide" data-content="computeaid">
			<div class="slide__mover">
				<div class="zoomer flex-center">
					<div class="myimg">
						<img src="images/categories/compute_aid.png"/>
						<div class="zoomer__area zoomer__area--size-2"></div>
					</div>
				</div>
			</div>
			<div class="slide-title-wrapper">
				<h2 class="slide-title">Compute Aid</h2>
			</div>
		</div>
		<!-- Robotics -->
		<div class="slide" data-content="robotics">
			<div class="slide__mover">
				<div class="zoomer flex-center">
					<div class="myimg">
						<img src="images/categories/robot_mod.png"/>
						<div class="zoomer__area zoomer__area--size-4"></div>
					</div>
				</div>
			</div>
			<div class="slide-title-wrapper">
				<h2 class="slide-title">Robotics</h2>
			</div>
		</div>
		<!-- Cyber Crusade -->
		<div class="slide" data-content="cybercrusade">
			<div class="slide__mover">
				<div class="zoomer flex-center">
					<div class="myimg">
						<img src="images/categories/Gaming.png" class="myimg"/>
						<div class="zoomer__area zoomer__area--size-3 myimg"></div>
					</div>
				</div>
			</div>
			<div class="slide-title-wrapper">
				<h2 class="slide-title">Cyber Crusade</h2>
			</div>
		</div>
		<!-- Food for Fun -->
		<div class="slide" data-content="foodforfun">
			<div class="slide__mover">
				<div class="zoomer flex-center">
					<div class="myimg">
						<img src="images/categories/about.png" class="myimg"/>
						<div class="zoomer__area zoomer__area--size-5"></div>
					</div>
				</div>
			</div>
			<div class="slide-title-wrapper">
				<h2 class="slide-title">About i.Fest</h2>
			</div>
		</div>
		<!-- Money Matters -->
		<div class="slide" data-content="moneymatters">
			<div class="slide__mover">
				<div class="zoomer flex-center">
					<div class="myimg">
						<img src="images/categories/Money_matters.png"  class="myimg"/>
						<div class="zoomer__area zoomer__area--size-1"></div>
					</div>
				</div>
			</div>
			<div class="slide-title-wrapper">
				<h2 class="slide-title">Money Matters</h2>
			</div>
		</div>
		<!-- In Focus -->			
		<div class="slide" data-content="infocus">
			<div class="slide__mover">
				<div class="zoomer flex-center">
					<div class="myimg">
						<img src="images/categories/In_focus.png" class="myimg"/>
						<div class="zoomer__area zoomer__area--size-1"></div>
					</div>
				</div>
			</div>
			<div class="slide-title-wrapper">
				<h2 class="slide-title">In Focus</h2>
			</div>
		</div>
		<!-- Newron -->
		<div class="slide" data-content="newron">
			<div class="slide__mover">
				<div class="zoomer flex-center">
					<div class="myimg">
						<img src="images/categories/newron.png" style="height:200px;" class="myimg"/>
						<div class="zoomer__area zoomer__area--size-1"></div>
					</div>
				</div>
			</div>
			<div class="slide-title-wrapper">
				<h2 class="slide-title">Newron</h2>
			</div>
		</div>
		<!-- Innovati -->
		<div class="slide" data-content="innovati">
			<div class="slide__mover">
				<div class="zoomer flex-center">
					<div class="myimg">
						<img src="images/categories/Innovati.png" style="height:200px;" class="myimg"/>
						<div class="zoomer__area zoomer__area--size-1"></div>
					</div>
				</div>
			</div>
			<div class="slide-title-wrapper">
				<h2 class="slide-title">Innovati</h2>
			</div>
		</div>
		<!-- Create It -->
		<div class="slide" data-content="createit">
			<div class="slide__mover">
				<div class="zoomer flex-center">
					<div class="myimg">
						<img src="images/categories/Create_it.png" style="height:200px;" class="myimg"/>
						<div class="zoomer__area zoomer__area--size-1"></div>
					</div>
				</div>
			</div>
			<div class="slide-title-wrapper">
				<h2 class="slide-title">Create It</h2>
			</div>
		</div>
		<!-- Just Like That -->
		<div class="slide" data-content="justlikethat">
			<div class="slide__mover">
				<div class="zoomer flex-center">
					<div class="myimg">
						<img src="images/categories/just_like_that.png" style="height:200px;" class="myimg"/>
						<div class="zoomer__area zoomer__area--size-1"></div>
					</div>
				</div>
			</div>
			<div class="slide-title-wrapper">
				<h2 class="slide-title">Just Like That</h2>
			</div>
		</div>
		<!-- Elevation -->
		<div class="slide" data-content="elevation">
			<div class="slide__mover">
				<div class="zoomer flex-center">
					<div class="myimg">
						<img src="images/categories/elevation.png" style="height:200px;" class="myimg"/>
						<div class="zoomer__area zoomer__area--size-1"></div>
					</div>
				</div>
			</div>
			<div class="slide-title-wrapper">
				<h2 class="slide-title">Elevation</h2>
			</div>
		</div>
		<!-- Campus Ambassador -->
		<div class="slide" data-content="campusambassador">
			<div class="slide__mover">
				<div class="zoomer flex-center">
					<div class="myimg">
						<img src="images/categories/events.png" style="height:200px;" class="myimg"/>
						<div class="zoomer__area zoomer__area--size-1"></div>
					</div>
				</div>
			</div>
			<a href="events/" style="color:white;text-decoration:none;"><div class="slide-title-wrapper">
				<h2 class="slide-title">Events</h2>
			</div></a>
		</div>




<!--  -->
		


<!-- gallery -->
			<div class="slide" data-content="gallery">
				<div class="slide__mover">
					<div class="zoomer flex-center">
						<div class="myimg">
							<img src="images/categories/gallery.png" style="height:200px;" class="myimg"/>
							<div class="zoomer__area zoomer__area--size-1"></div>
						</div>
					</div>
				</div>
				<div class="slide-title-wrapper">
					<h2 class="slide-title">Gallery</h2>
				</div>
			</div>



		<!-- About Us -->
			<div class="slide" data-content="aboutus">
				<div class="slide__mover">
					<div class="zoomer flex-center">
						<div class="myimg">
							<img src="images/about.png" style="height:200px;" class="myimg"/>
							<div class="zoomer__area zoomer__area--size-1"></div>
						</div>
					</div>
				</div>
				<div class="slide-title-wrapper">
					<h2 class="slide-title">About Us</h2>
				</div>
			</div>
			<!-- Contact -->
			<div class="slide" data-content="reachus">
				<div class="slide__mover">
					<div class="zoomer flex-center">
						<div class="myimg">
							<img src="images/categories/contact.png" style="height:200px;" class="myimg"/>
							<div class="zoomer__area zoomer__area--size-1"></div>
						</div>
					</div>
				</div>
				<div class="slide-title-wrapper">
					<h2 class="slide-title">Reach Out To Us</h2>
				</div>
			</div>
		<!-- Sponsors -->
		<div class="slide" data-content="sponsors">
			<div class="slide__mover">
				<div class="zoomer flex-center">
					<div class="myimg">
						<img src="images/categories/sponsors.png" style="height:200px;" class="myimg"/>
						<div class="zoomer__area zoomer__area--size-1"></div>
					</div>
				</div>
			</div>
			<div class="slide-title-wrapper">
				<h2 class="slide-title">Sponsors</h2>
			</div>
		</div>
		<!-- Know the Team -->
		<div class="slide" data-content="">
			<div class="slide__mover">
				<div class="zoomer flex-center">
					<div class="myimg">
						<img src="images/categories/team.png" style="height:200px;" class="myimg"/>
						<div class="zoomer__area zoomer__area--size-1"></div>
					</div>
				</div>
			</div>
			<div class="slide-title-wrapper">
				<h2 class="slide-title">Team i.Fest</h2>
			</div>
		</div>

		<!-- Fun Event -->
		<div class="slide" data-content="theteam">
			<div class="slide__mover">
				<div class="zoomer flex-center">
					<div class="myimg">
						<img src="images/categories/team.png" style="height:200px;" class="myimg"/>
						<div class="zoomer__area zoomer__area--size-1"></div>
					</div>
				</div>
			</div>
			<div class="slide-title-wrapper">
				<h2 class="slide-title">Team i.Fest</h2>
			</div>
		</div>

		<!-- Walkathon -->
		<div class="slide" data-content="walkathon">
			<div class="slide__mover">
				<div class="zoomer flex-center">
					<a href="https://www.facebook.com/events/1008346415870854/" target="_blank"><div class="myimg">
						<img src="images/categories/walkathon.png" style="height:200px;" class="myimg"/>
						<div class="zoomer__area zoomer__area--size-1"></div>
					</div>
                                        </a>
				</div>
			</div>
			<div class="slide-title-wrapper invisible">
				<h2 class="slide-title">Walkathon</h2>
			</div>
		</div>

		<!-- EDG Night -->
		<div class="slide" data-content="edgnight">
			<div class="slide__mover">
				<div class="zoomer flex-center">
					<div class="myimg">
						<img src="images/talks.png" style="height:200px;" class="myimg"/>
						<div class="zoomer__area zoomer__area--size-1"></div>
					</div>
				</div>
			</div>
			<div class="slide-title-wrapper">
				<h2 class="slide-title">EDG Night</h2>
			</div>
		</div>

		<!-- EDG Talks -->
		<div class="slide" data-content="edgtalks">
			<div class="slide__mover">
				<div class="zoomer flex-center">
					<div class="myimg">
						<img src="images/nights.png" style="height:200px;" class="myimg"/>
						<div class="zoomer__area zoomer__area--size-1"></div>
					</div>
				</div>
			</div>
			<div class="slide-title-wrapper">
				<h2 class="slide-title">EDG Talks</h2>
			</div>
		</div>

			<!--
			<nav class="slider__nav">
				<button class="button button--nav-prev"><i class="icon icon--arrow-left"></i><span class="text-hidden">Previous product</span></button>
				<button class="button button--zoom"><i class="icon icon--zoom"></i><span class="text-hidden">View details</span></button>
				<button class="button button--nav-next"><i class="icon icon--arrow-right"></i><span class="text-hidden">Next product</span></button>
			</nav>-->
			<!-- Edge -->
			<div class="slide slide--current" data-content="edge">
				<div class="slide__mover">
					<div class="zoomer flex-center">
						<div class="mylogo">
							<img src="images/logo.png"  class="mylogo" style=""/>  
							<!-- height: 350px -->
							<!-- <p>2016</p> -->
							<div class="zoomer__area zoomer__area--size-1 myzoom"></div>
						</div>
					</div>
				</div>
			</div>

		<!--<div class="slide slide--current" data-content="edge">
				<div class="slide__mover">
					<div class="zoomer flex-center">
						<div class="myimg" id="landing-screen">
							<img src="images/edge_date.png" class="spotlight">
							<div class="zoomer__area zoomer__area--size-1"></div>
							<img src="images/clouds.png" class="cloud anm" id="cloud1" data-speed-x="-10">
							<img src="images/clouds.png" class="cloud anm" id="cloud2" data-speed-x="-10">
							<img src="images/clouds.png" class="cloud anm" id="cloud3" data-speed-x="-10">
						</div>
					</div>
				</div>
			</div>-->
		</section>
		<!-- /slider-->
		<style type="text/css">
		#landing-screen{
			position: relative;
			height: 100%;
			width: 100%;
			text-align: center;
		}
		.cloud{
			position: absolute;
			bottom: 0px;
			height: 120px!important
		}
		#cloud1{
			left: 52%;
			height: 140px!important;
		}
		#cloud2{
			left: 28%;
			height: 140px!important;
		}
		#cloud3{
			left: 55%;
			top: 10%;
		}
		.spotlight{
			position: absolute;
			bottom: 0px;
			left: 50%;
			height: 300px!important;
			margin-left: -175px;
		}

		.content__item-inner h2{
			font-family: 'Arkhip';
		}
		.event-name{
			font-family: 'Adam';
		}
		.inner-text{
			font-family: 'Adam';
			font-size: 12px;
			/*padding-top: 0px!important;*/
		}
		.inner-text a{
			text-decoration: none;
		}
#modal-event-rules-value a, #modal-event-description a{
color:blue;}
#modal-event-rules-value a:hover, #modal-event-description a:hover{
color:blue; border-bottom: 1px dashed blue;}

		</style>

		<section class="content">
			<!-- Robotics -->
			<div class="content__item" id="robotics" style="width: 100%;">
				<img class="content__item-img rounded-right" src="images/robot_mod.png" alt="Robotics" />
				<div class="content__item-inner" style="width: 100%;">
					<h2>Robotics</h2>
					<div class="row">
						<div class="col-md-4 event" data-id="41">
							<img src="images/icons/robotics/xpedition.png" class="event-image">
							<div class="event-name" data-name="xpedition">Xpedition</div>
						</div>
						<div class="col-md-4 event" data-id="39">
							<img src="images/icons/robotics/xcelsior.png" class="event-image">
							<div class="event-name" data-name="xcelsior">Xcelsior</div>
						</div>
						<div class="col-md-4 event" data-id="43">
							<img src="images/icons/robotics/xport.png" class="event-image">
							<div class="event-name" data-name="xport">Xport</div>
						</div>
						<div class="col-md-4 event" data-id="37">
							<img src="images/icons/robotics/exult.png" class="event-image">
							<div class="event-name" data-name="exult">eXult</div>
						</div>
						<div class="col-md-4 event" data-id="36">
							<img src="images/icons/robotics/blitzkriegx.png" class="event-image">
							<div class="event-name" data-name="blitzkriegx">Blitzkrieg X</div>
						</div>
						<div class="col-md-4 event" data-id="35">
							<img src="images/icons/robotics/aerostrix.png" class="event-image">
							<div class="event-name" data-name="aerostrix">AerostriX</div>
						</div>
						<div class="col-md-4 event" data-id="40">
							<img src="images/icons/robotics/xoccer.png" class="event-image">
							<div class="event-name" data-name="xoccer">Xoccer</div>
						</div>
						<div class="col-md-4 event" data-id="42">
							<img src="images/icons/robotics/xplore.png" class="event-image">
							<div class="event-name" data-name="xplore">Xplore</div>
						</div>
						<div class="col-md-4 event" data-id="38">
							<img src="images/icons/robotics/perplexity.png" class="event-image">
							<div class="event-name" data-name="perplexity">Perplexity</div>
						</div>
						<div class="col-md-4 event" data-id="44">
							<img src="images/icons/robotics/3xtreet.png" class="event-image">
							<div class="event-name" data-name="xtreet">Xtreet</div>
						</div>

					</div>
				</div>
			</div>
			<style type="text/css">
			img.content__item-img{
				display: none;
			}
			</style>
			<!-- ComputeAid -->
			<div class="content__item" id="computeaid" style="width: 100%;">
				<img class="content__item-img rounded-right" src="images/imac.png" alt="Apple Watch Content" />
				<div class="content__item-inner" style="width: 100%;">
					<h2>Compute Aid</h2>
					<div class="row">
						<div class="col-md-4 event" data-id="1">
							<img src="images/icons/computeaid/flawless.png" class="event-image">
							<div class="event-name" data-name="flawless">Flawless</div>
							<div class="border-bottom"></div>
						</div>
						<div class="col-md-4 event" data-id="2">
							<img src="images/icons/computeaid/Bug_Hunt.png" class="event-image">
							<div class="event-name" data-name="bughunt">Bug Hunt</div>
						</div>
						<div class="col-md-4 event" data-id="3">
							<img src="images/icons/computeaid/Crypto_quest.png" class="event-image">
							<div class="event-name" data-name="cryptoquest">Crypto Quest</div>
						</div>
						<div class="col-md-4 event" data-id="4">
							<img src="images/icons/computeaid/Code_mart.png" class="event-image">
							<div class="event-name" data-name="codemart">Code Mart</div>
						</div>
						<div class="col-md-4 event" data-id="5">
							<img src="images/icons/computeaid/Code_out.png" class="event-image">
							<div class="event-name" data-name="codeout">Code Out</div>
						</div>
						<div class="col-md-4 event" data-id="6">
							<img src="images/icons/computeaid/Game_of_zones.png" class="event-image">
							<div class="event-name" data-name="gameofzones">Game of Zones</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Cyber Crusade -->
			<div class="content__item" id="cybercrusade" style="width: 100%;">
				<!--<img class="content__item-img rounded-right" src="images/categories/Gaming.png" alt="Cyber Crusade" />-->
				<div class="content__item-inner" style="width: 100%;">
					<h2>Cyber Crusade</h2>
					<div class="row">
						<div class="col-md-4 event" data-id="8">
							<img src="images/icons/gaming/cs_go.png" class="event-image">
							<div class="event-name" data-name="cscollegeleague">CS College League</div>
							<div class="border-bottom"></div>
						</div>
						<div class="col-md-4 event" data-id="7">
							<img src="images/icons/gaming/cs_go.png" class="event-image">
							<div class="event-name" data-name="csproleague">CS Pro League</div>
							<div class="border-bottom"></div>
						</div>
						<div class="col-md-4 event" data-id="9">
							<img src="images/icons/gaming/dota.png" class="event-image">
							<div class="event-name" data-name="dota">Dota 2</div>
							<div class="border-bottom"></div>
						</div>
						<div class="col-md-4 event" data-id="10">
							<img src="images/icons/gaming/mortal_kombat.png" class="event-image">
							<div class="event-name" data-name="mortalkombat">Mortal Kombat</div>
							<div class="border-bottom"></div>
						</div>
						<div class="col-md-4 event" data-id="11">
							<img src="images/icons/gaming/nfs_mw.png" class="event-image">
							<div class="event-name" data-name="needforspeed">Need For Speed Most Wanted</div>
							<div class="border-bottom"></div>
						</div>
						<!-- <div class="col-md-4 event" data-id="12">
							<img src="images/icons/gaming/nfs.png" class="event-image">
							<div class="event-name" data-name="needforspeed">Need For Speed 12</div>
							<div class="border-bottom"></div>
						</div> -->
						<div class="col-md-4 event" data-id="14">
							<img src="images/icons/gaming/fifa_11.png" class="event-image">
							<div class="event-name" data-name="fifacollegeleague">FIFA College League</div>
							<div class="border-bottom"></div>
						</div>
						<div class="col-md-4 event" data-id="13">
							<img src="images/icons/gaming/fifa_15.png" class="event-image">
							<div class="event-name" data-name="fifaproleague">FIFA 16 Pro League</div>
							<div class="border-bottom"></div>
						</div>
					</div>
				</div>
			</div>
			<!-- About i.Fest -->
			<div class="content__item myimg" id="foodforfu " style="width: 100%;">
				<img class="content__item-img rounded-right" src="images/categories/about.png" />
				<div class="content__item-inner" style="width: 100%;">
					<h2 align="center">About i.Fest</h2>
					<div class="row"><br>
						<p style="font-size:30px;">i.Fest is an idea conceptualized by IEEE Student Branch at DA-IICT. Our main aim is to bring the budding engineers from all over India to a common platform so that they can share their knowledge with their fellow imaginers. The next big thing for engineers is to pull out graphics from computer or television screen and integrate them into real world environment. With these innovative engineers coming up, it will become more pervasive and ubiquitous. So i.Fest’16 presents in the theme of <b>Augmented Reality</b>, where creative genius comes alive.</p>
					</div>
					<br>
					<br>
					<br>

					<!-- <h2>About IEEE SB, DA-IICT</h2>
					<div class="row"><br>
						<p style="font-size:25px;">DA-IICT is an academic institution promoted by the Dhirubhai Ambani Foundation and the Reliance Group,primarily aimed to impart Information and Communication Technology (ICT) education of international standards. Established amidst the lush green corridor of Gandhinagar, Gujarat, DA-IICT lives for furtherance of education,research, and training in ICT. DA-IICT commenced activities from August 2001. DA-IICT is a research led institute which houses world class facilities such well equipped labs with latest equipment and software, modern lecture theaters, a multi-cuisine canteen and on campus residence. The Institute of Electrical and Electronic Engineers Student Branch at DA-IICT endeavors to promote student awareness among students on the opportunities that exist in the field of electronics and electrical engineering. Our objective is to bridge the gap between industry and students studying in technology-related fields, while promoting and providing an intellectually stimulating university environment for the student body. IEEE Student Branch, DA-IICT aims to provide an intereactive platform for students to develop proffessional and technical abilities. Since the inception, it is successful in organizing various events with well defined objectives.</p>
					</div> -->



				</div>
			</div>
			<!-- Money Matters -->
			<div class="content__item" id="moneymatters" style="width: 100%;">
				<img class="content__item-img rounded-right" src="images/robot_mod.png" alt="Innovati" />
				<div class="content__item-inner" style="width: 100%;">
					<h2>Money Matters</h2>
					<div class="row">
						<div class="col-md-4 event" data-id="22">
							<img src="images/icons/moneymatters/bplan.png" class="event-image">
							<div class="event-name" data-name="bplan">B-Plan</div>
							<div class="border-bottom"></div>
						</div>
						<div class="col-md-4 event" data-id="23">
							<img src="images/icons/moneymatters/bquiz.png" class="event-image">
							<div class="event-name" data-name="bquiz">B-Quiz</div>
							<div class="border-bottom"></div>
						</div>
						<div class="col-md-4 event" data-id="24">
							<img src="images/icons/moneymatters/addomedia.png" class="event-image">
							<div class="event-name" data-name="addomedia">Addomedia</div>
							<div class="border-bottom"></div>
						</div>
<div class="col-md-4 event" data-id="25">
							<img src="images/icons/moneymatters/stockit.png" class="event-image">
							<div class="event-name" data-name="stockit">Stock It</div>
							<div class="border-bottom"></div>
						</div>
					</div>
				</div>
			</div>
			<!-- Innovati -->
			<div class="content__item" id="innovati" style="width: 100%;">
				<img class="content__item-img rounded-right" src="images/robot_mod.png" alt="Innovati" />
				<div class="content__item-inner" style="width: 100%;">
					<h2>Innovati</h2>
					<div class="row">
						<div class="col-md-4 event" data-id="45">
							<img src="images/icons/innovati/project_view.png" class="event-image">
							<div class="event-name" data-name="projectview">Project View</div>
							<div class="border-bottom"></div>
						</div>
					</div>
				</div>
			</div>
			<!-- Just Like That -->
			<div class="content__item" id="justlikethat" style="width: 100%;">
				<img class="content__item-img rounded-right" src="images/robot_mod.png" alt="Apple Watch Content" />
				<div class="content__item-inner" style="width: 100%;">
					<h2>Just Like That</h2>
					<div class="row">
						<div class="col-md-4 event" data-id="49">
							<img src="images/icons/justlikethat/khuljasimsim.png" class="event-image">
							<div class="event-name" data-name="khuljasimsim">Khul Ja Sim Sim</div>
							<div class="border-bottom"></div>
						</div>
						<div class="col-md-4 event" data-id="48">
							<img src="images/icons/justlikethat/selfie.png" class="event-image">
							<div class="event-name" data-name="getselfieishwithx">Get Selfie-ish With X</div>
							<div class="border-bottom"></div>
						</div>
					</div>
				</div>
			</div>		
			<!-- Create It -->
			<div class="content__item" id="createit" style="width: 100%;">
				<img class="content__item-img rounded-right" src="images/categories/Create_it.png" alt="Create It" />
				<div class="content__item-inner" style="width: 100%;">
					<h2>Create It</h2>
					<div class="row">
						<div class="col-md-4 event" data-id="46">
							<img src="images/icons/justlikethat/selfie.png" class="event-image">
							<div class="event-name" data-name="ragstoriches">Rags to Riches</div>
							<div class="border-bottom"></div>
						</div>
						<div class="col-md-4 event" data-id="47">
							<img src="images/icons/createit/mekanix.png" class="event-image">
							<div class="event-name" data-name="mekanix">Mekanix</div>
							<div class="border-bottom"></div>
						</div>
					</div>
				</div>
			</div>	
			<!-- In Focus -->
			<div class="content__item" id="infocus" style="width: 100%;">
				<img class="content__item-img rounded-right" src="images/categories/Create_it.png" alt="Create It" />
				<div class="content__item-inner" style="width: 100%;">
					<h2>In Focus</h2>
					<div class="row">
						<div class="col-md-4 event" data-id="26">
							<img src="images/icons/infocus/crumbs.png" class="event-image">
							<div class="event-name" data-name="crumbs">Crumbs</div>
							<div class="border-bottom"></div>
						</div>
						<div class="col-md-4 event" data-id="27">
							<img src="images/icons/infocus/odyssey.png" class="event-image">
							<div class="event-name" data-name="odyssey">Odyssey</div>
							<div class="border-bottom"></div>
						</div>
						<div class="col-md-4 event" data-id="28">
							<img src="images/icons/infocus/shootmup.png" class="event-image">
							<div class="event-name" data-name="shootmup">Shoot 'M' Up</div>
							<div class="border-bottom"></div>
						</div>
						<div class="col-md-4 event" data-id="29">
							<img src="images/icons/infocus/insta.png" class="event-image">
							<div class="event-name" data-name="instaclick">Insta Click</div>
							<div class="border-bottom"></div>
						</div>
					</div>
				</div>
			</div>
			<!-- Newron -->
			<div class="content__item" id="newron" style="width: 100%;">
				<img class="content__item-img rounded-right" src="images/categories/Create_it.png" alt="Create It" />
				<div class="content__item-inner" style="width: 100%;">
					<h2>Newron</h2>
					<div class="row">
						<div class="col-md-4 event" data-id="30">
							<img src="images/icons/newron/electronic.png" class="event-image">
							<div class="event-name" data-name="electronic">Electronically Yours</div>
							<div class="border-bottom"></div>
						</div>
						<div class="col-md-4 event" data-id="31">
							<img src="images/icons/newron/btechquiz.png" class="event-image">
							<div class="event-name" data-name="thequiz">The Quiz</div>
							<div class="border-bottom"></div>
						</div>
						<div class="col-md-4 event" data-id="32">
							<img src="images/icons/newron/debate.png" class="event-image">
							<div class="event-name" data-name="debate">Youth Parliament</div>
							<div class="border-bottom"></div>
						</div>
					</div>
				</div>
			</div>
			<!-- Elevation -->
			<div class="content__item" id="elevation" style="width: 100%;">
				<img class="content__item-img rounded-right" src="images/categories/Create_it.png" alt="Create It" />
				<div class="content__item-inner" style="width: 100%;">
					<h2>Elevation</h2>
					<div class="col-md-4 event" data-id="33">
						<img src="images/icons/elevation/cad.png" class="event-image">
						<div class="event-name" data-name="cadomania">Cad-o-mania</div>
						<div class="border-bottom"></div>
					</div>
					<div class="col-md-4 event" data-id="34">
						<img src="images/icons/elevation/bridge.png" class="event-image">
						<div class="event-name" data-name="nirmaan">Nirmaan</div>
						<div class="border-bottom"></div>
					</div>
				</div>
			</div>

				<!-- About us -->
			<div class="content__item" id="aboutus" style="width: 100%;">
				<div class="content__item-inner" style="width: 100%;">
					<!--<div class="row"><h2 style="float:left">Techno India</h2></div>-->
					<div class="row" style="width:80%; text-align: justify; margin-top: 50px">
						<p>EDGE is the annual techno-management fest of Techno India Salt Lake. The first edition of EDGE was conceived in 2007, and it has been a long and pleasant journey so far. This year, we are celebrating our 10th anniversary. And we dedicate this edition to all the effort and imagination that has been put in by all the individuals who have worked towards making EDGE a grand success.</p>

						<p>EDGE provides a much needed platform to the students that lets them explore and develop their talents, and helps them grow and emerge as winners.</p>

						<p>Join us in celebrating a decade of imagination. Join us and witness the amalgamation of talent, persistence and an urge to succeed. Join us and witness history in making.</p>
					</div>
				</div>
			</div>
			<style>
				.no-underline:hover{
					text-decoration: none;
				}
.guest-name{    font-family: Arkhip;
    font-size: 1.5em;
    }
.guest-info{    font-family: Arkhip;
    font-size: 1em;
    }
			</style>
		<!-- Fun Event -->
			<div class="content__item" id="funevent" style="width: 100%;">
				<div class="content__item-inner" style="width: 100%;">
				<div class="row">
					<img src="images/fun_event.png" height=400>
				</div>
				</div>
			</div>
		<!-- Edg Night -->
			<div class="content__item" id="edgnight" style="width: 100%;">
				<div class="content__item-inner" style="width: 100%;">
<div class="row"
					<div class="col-md-6" style="text-align:right">
						<img src="images/guest/biswa.png" height=400><div class="guest-name" style="margin-right:20px">Biswa Kalyan Rath</div><div class="guest-info">Comedian . YouTuber . Pretentious Movie Reviewer.</div>

					</div>
					<div class="col-md-6">
						<img src="images/guest/kartik.png" height=400><div class="guest-name" style="margin-left:20px">Kartik Aryan</div><div class="guest-info">Actor . Pyaar Ka Puchnama Guy.</div>
					</div>
				</div>
			</div>
<!-- Edg Talk -->
			<div class="content__item" id="edgtalks" style="width: 100%;">
				<div class="content__item-inner" style="width: 100%;">
					<div class="col-md-6" style="text-align:right">
						<img src="images/guest/arunabh.png" height=400><div class="guest-name" style="margin-right:20px">Arunabh Kumar</div><div class="guest-info">Founder & Group CEO, The Viral Fever & TVF Media Labs. IITKGP Alumni. The Qtiyapa Guy</div>

					</div>
					<div class="col-md-6">
						<img src="images/guest/som.png" height=400><div class="guest-name" style="margin-left:20px">Dr. Som Singh Dutta</div><div class="guest-info">Founder of Unspun Marketing. Entrepreneur.</div>
					</div>
				</div>
			</div>
				<!--Reach out -->
			<div class="content__item" id="reachus" style="width: 100%;">
				<div class="content__item-inner" style="width: 100%;">
					<h2>Reach Out To Us</h2>
					<div class="col-md-8" style="text-align: left;margin-top: 50px;padding-left: 0px;">
						<div id="map" style="width:90%; height: 400px"></div>
					</div>
					<div class="col-md-4" style="margin-top: 50px; display: table; height: 400px">
						<div style="display: table-cell; width: 100%; height: 100%; vertical-align: middle; text-align: center; font-family: 'Arkhip'">
							<p>Got a question? Or a suggestion? Or simply want to say hi?</p>
							<p><a class="no-underline" href="mailto:ifest2016daiict@gmail.com" style="color: white; border-bottom: 1px dashed white">Let us know how we can help</a></p>
							<p>Or</p>
							<p><b>Contact:</b> <br>Nilay Shrimali:<br>+91-7046295423<br><br>Harsh Thakkar:<br>+91-8866821682</p>
						</div>
					</div>
				</div>
			</div>
			<style type="text/css">
			.sponsor-card{
				text-align: center;
				margin-top: 10px;
			}
                                        
			.sponsor-title{
				font-family: 'Adam';
				font-variant: small-caps;
				letter-spacing: 5px;
				font-size: 14px;
				margin-top: 5px;
			}
			.form-control{
				border-radius: 0px !important;
			}
			label{
				font-weight: 300 !important;
			}
			.form-control{
				background: transparent;
				border: 0px;
				border-bottom: 2px solid white;
			}
			.form-control:focus{
				border-color: white;
				box-shadow: none;
			}
			</style>
			<!-- Events -->
			<div class="content__item" id="campusambassador" style="width: 100%;">
				<img class="content__item-img rounded-right" src="images/robot_mod.png" alt="Apple Watch Content" />
				<div class="content__item-inner" style="width: 100%;margin-bottom:400px;">
					<h2>Events</h2>
					<div class="row">
					<?php 
						// include('events_new.php');
					header("Location: events/index.php");
					?>
					
					</div>
				</div>
			</div>
<style>.sponsor-card img{height:80px; max-width:100%} #sponsors .content__item-inner .row{padding: 20px; margin-bottom: 20px; border-bottom: 1px solid #292828;}</style>
			<!-- Sponsors -->
			<div class="content__item" id="sponsors" style="width: 100%;">
				<div class="content__item-inner" style="width: 100%;">
					<div id="sponsor-container">
						<img src="sponsors/sponsors.png" style="width:100%;">
					</div>
				</div>
			</div><style>.inner-text a{color:white}</style>



<!-- ABOUT -->
<div class="content__item" id="aboutus" style="width: 100%;">
				<div class="content__item-inner" style="width: 100%;">
					<h2>gallery</h2>
					<div class="row">
						
					</div>
				</div>
			</div>



<!-- gallery -->
			<div class="content__item" id="gallery" style="width: 100%;">
				<div class="content__item-inner" style="width: 100%;padding-bottom:400px;">
					<h2>gallery</h2>
					<div class="row">

					<div class="camera_wrap camera_azure_skin" id="camera_wrap">

					


					<?php 

						$dirname = "gallery/";
						$images = glob($dirname."*.jpg");
						foreach($images as $image) {
						
							// echo '<img src="'.$image.'" /><br />';
						

						?>


			            <div data-thumb="<?= $image; ?>" data-src="<?= $image; ?>">
			               
			            </div>
							<?php } ?>



			           
			        </div>

						<!-- <ul id="elasticstack" class="elasticstack"> -->

						
							<!-- <li><img src='<?= $image; ?>' style="height:300px;width:300px;" /></li> -->
<!--  -->
							<!-- <li><img src="images/photo.jpg" alt="02" style="height:300px;width:300px;" /></li> -->

							<!-- <li><img src="images/photo.jpg" alt="03" style="height:300px;width:300px;" /></li> -->

							<!-- <li><img src="images/photo.jpg" alt="04" style="height:300px;width:300px;" /></li> -->

							<!-- <li><img src="images/photo.jpg" alt="05" style="height:300px;width:300px;" /></li> -->
							
							
						<!-- </ul> -->

					</div>
				</div>
			</div>
			<!-- The Team -->
			<div class="content__item row" id="theteam" style="width: 100%;">
				<div class="content__item-inner col-md-10 col-xs-11 col-sm-11" style="width:100%">
					<div class="honeycombs">
						
						
						<div class="comb bwWrapper">
							<img src="team/Nilay.jpg" />
							<span class="comb-member-name"><a href='https://www.facebook.com/nihaal.shrimali' target="_blank" >Nilay Shrimali<br><b>PR & Marketing Team</b><br></a></span>
						</div>
						<div class="comb bwWrapper">
							<img src="team/Saurav.jpg" />
							<span class="comb-member-name"><a href='https://www.facebook.com/saorav' target="_blank" >Saurav Pratihar<br><b>WEBMASTER</b><br></a></span>
						</div>
						<div class="comb bwWrapper">
							<img src="team/Harsh.jpg" />
							<span class="comb-member-name"><a href='https://www.facebook.com/harshthakkar456' target="_blank" >Harsh Thakkar<br><b>Coordinator Management</b><br></a></span>
						</div>
						<div class="comb bwWrapper">
							<img src="team/Abhijit.jpg" />
							<span class="comb-member-name"><a href='https://www.facebook.com/Abhijit.username' target="_blank" >Abhijit Patel<br><b>Coordinator Management</b><br></a></span>
						</div>
						<div class="comb bwWrapper">
							<img src="team/Tirth.jpg" />
							<span class="comb-member-name"><a href='https://www.facebook.com/tirth.shah.3158' target="_blank" >Tirth Shah<br><b>App Developer</b><br></a></span>
						</div>
						
						<div class="comb bwWrapper">
							<img src="team/Akar.jpg" />
							<span class="comb-member-name"><a href='https://www.facebook.com/akar.sheth' target="_blank" >Akar Sheth<br><b>PR & Marketing Team</b><br></a></span>
						</div>
                                               
						<div class="comb bwWrapper">
							<img src="team/Divya.jpg" />
							<span class="comb-member-name"><a href='https://www.facebook.com/divya.solucky.6198' target="_blank" >Divya Solanki<br><b>PR & Marketing Team</b><br></a></span>
						</div>
						<div class="comb bwWrapper">
							<img src="team/Urvashi.jpg" />
							<span class="comb-member-name"><a href='https://www.facebook.com/urvashi.jain.33' target="_blank" >Urvashi Banthia<br><b>Coordinator Management</b><br></a></span>
						</div>
						
						<div class="comb bwWrapper">
							<img src="team/PrachiP.jpg" />
							<span class="comb-member-name"><a href='https://www.facebook.com/prachi.palod.15' target="_blank" >Prachi Palod<br><b>Coordinator Management</b><br></a></span>
						</div>
						<div class="comb bwWrapper">
							<img src="team/Milap.jpg" />
							<span class="comb-member-name"><a href='https://www.facebook.com/milap.shah.144' target="_blank" >Milap Shah<br><b>Coordinator Management</b><br></a></span>
						</div>
						<div class="comb bwWrapper">
							<img src="team/Prachi.jpg" />
							<span class="comb-member-name"><a href='https://www.facebook.com/prachi.agrawal.9659' target="_blank" >Prachi Agrawal<br><b>PR & Marketing Team</b><br></a></span>
						</div>
						<div class="comb bwWrapper">
							<img src="team/Birva.jpg" />
							<span class="comb-member-name"><a href='https://www.facebook.com/profile.php?id=100009308644191' target="_blank" >Birva Patel<br><b>Coordinator Management</b><br></a></span>
						</div>

					</div>
				</div>
			</div>	


			<button class="button button--close" style="padding-top:20px" onclick="closeContent"><i class="fa fa-times"></i><span class="text-hidden">Close content</span></button>
		</section>
	</div>
<style>.modal-event-contact-info{box-shadow:none; background:white} .modal-event-contact-name a:hover{color:#47639E; text-decoration:none} .modal-event-contact-name a{color:black}</style>
	<!-- Modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="event-modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modal-event-name">Modal title</h4>
      </div>
      <div class="modal-body">
      	<div id="modal-event-description">
        There is a nice saying by a great man that "A designer knows he has achieved perfection not when there is nothing left to add but when there is nothing left to take away." Indeed a designer is a creator, creator of every single thing which we witness today. Starting from a needle to a spaceship, everywhere designers are required. And they need to be perfect and flawless. If you also think that you are with the caliber, then show that using coding as your sword and achieving victory.
        </div>
        <div id="modal-event-rules"><span><img src="images/pdf_intra.png" height="50"></span><span id="modal-event-rules-value"></span></div>
        <hr>
        <div id="modal-event-contacts">
        	<div class="row">
        		<div class="col-md-6 modal-event-contact-info" id="contact1">
        			<div class="modal-event-contact-name"><a href="http://facebook.com/palash.chatterjee">Palash Chatterjee</a></div>
        			
        			<div class="modal-event-contact-phone"><i class="fa fa-phone"></i><span class="modal-event-contact-phone-value"></span></div>
        		</div>
        		<div class="col-md-6 modal-event-contact-info" id="contact2"><div class="modal-event-contact-name"></div>
        			
        			<div class="modal-event-contact-phone"><i class="fa fa-phone"></i><span class="modal-event-contact-phone-value"></span></div>
</div>
        	</div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


	<footer>
		Made with love
	</footer>
	<script src="js/classie.js"></script>
	<script type="text/javascript" src="js/jquery.color-2.1.2.min.js"></script>
	<script type="text/javascript" src="js/jquery.homeycombs.js"></script>
	<script src="js/dynamics.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/lines.js"></script>
	<script type="text/javascript" src="js/visible.js"></script>
	<script type="text/javascript" src="js/border.js"></script>
	<script type="text/javascript" src="js/mousemove.js"></script>
	<script type="text/javascript" src="js/formSubmit.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script type="text/javascript">

	$(document).ready(function(){
			//$(".inner-text").css("line-height",$(".hex_inner").css("height"));
			$('.event').line(animationDuration, "2px", "bottom","onhover", backgroundColor);
			$(".event").click(function(){
				name = $(this).find(".event-name").data("name");
				$("#modal-event-title").html(name);
				$("#event-modal").modal('show');
				get_event_details($(this).data("id"));
			});

			$('[data-toggle="tooltip"]').tooltip();
		});


	get_event_details = function(event_id){
			$("#contact1").css("display","none");
			$("#contact2").css("display","none");
			$("#modal-event-description").html("");
			$("#modal-event-name").html("");
			$("#modal-event-rules").css("display","none");
	$.ajax({
			url:'details.php',
			type: 'GET',
			data: {event_id:event_id},
			dataType:'json',
			success:function(result){
				//Name
				$("#modal-event-name").html(result.name);
				//Rules
				if(result.file)
					$("#modal-event-rules-value").html("<a target='_blank' href='content/"+result.file+"'>Download here</a>");
				else
					$("#modal-event-rules-value").html("Rules will be updated soon");
				$("#modal-event-rules").css("display","block");
				//Desc
				if(result.desc)
					$("#modal-event-description").html(result.desc);
				//Contact 1
				if(result.contact1){
					name = result.contact1.name;
					facebook = result.contact1.facebook;
					phone = result.contact1.phone;
					$("#contact1 .modal-event-contact-name").html("<a href='http://facebook.com/"+facebook+"/' target='_blank'>"+name+"</a>");
					$("#contact1 .modal-event-contact-phone-value").html(phone);
					$("#contact1").css("display","block");
				}
				//Contact 2
				if(result.contact2){
					name = result.contact2.name;
console.log(name);
					facebook = result.contact2.facebook;
					phone = result.contact2.phone;
					$("#contact2 .modal-event-contact-name").html("<a href='http://facebook.com/"+facebook+"/' target='_blank'>"+name+"</a>");
					$("#contact2 .modal-event-contact-phone-value").html(phone);
					$("#contact2").css("display","block");
				}
			}
	});
}
//anm.on();



</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7I0zl-Rfn80eevI_Zq9Bbb6PDUqXAdb4"></script>
			<script type="text/javascript">
					/*Google Maps Setup*/
	function initMaps(){
		var canvas = document.getElementById('map');
		var position = new google.maps.LatLng(23.1879365,72.6275934);
		var mapOptions = {
			center: position,
			zoom: 17,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		}
		var map = new google.maps.Map(canvas, mapOptions);

		var marker = new google.maps.Marker({
			position: position,
			map: map,
			title: "See you there!",
			draggable: false,
			animation: google.maps.Animation.BOUNCE
		});
	}

	google.maps.event.addDomListener(window, 'load', initMaps);

// $.getJSON('', function(data){
                 // var counter = 1;
	// var el = "<p style='text-align:center;font-size:40px;'>Will be updated soon</p>"; 
	// set el = "" when this function used

		// $.each(data, function(key, value){
		// 	var logo_img = value['logo_url'];
		// 	var title = value['title'];
		// 	var url = value['url'];
		// 	var height = value['height'];
		// 	var style = "";
		// 	if(value['style'])
		// 		style=value['style'];
// console.log("Counter : "+counter+" : "+title);
                                             // if(counter == 1)
				// el += "<div class='row'>";

				// el += '<a href='+url+'><div height="'+height+'"class="col-md-4 sponsor-card"><img style="'+style+'" src="'+logo_img+'"><div class="sponsor-title">'+title+'</div></div></a>';
				// counter = counter + 1;
				
				// if(counter == 4){
				// 	el += "</div>";
				// 	counter = 1;
				// }


				// el = "<p>Will be updated soon</p>"
				// 	});
	// $("#sponsor-container").append(el);
	// })

			</script>
<script>
	new ElastiStack( document.getElementById( 'elasticstack' ),{distDragBack : 200,
	// distDragMax: if the user drags the image in a area that exceeds [distDragMax]px 
	// for either x or y then the image moves away from the stack 
	distDragMax : 450,
	// callback
	onUpdateStack : function( current ) { return false; }} );
</script>

	
	<script type="text/javascript">
$(document).ready(function() {
$('.honeycombs').honeycombs({
combWidth: 230,
margin: 10
});
});
</script>

<script type="text/javascript">
	

		jQuery(function(){
			
			// jQuery('#camera_wrap_1').camera({
			// 	thumbnails: true
			// });

			jQuery('#camera_wrap').camera({
				// height: '400px',
				loader: 'bar',
				// navigation: true,
				// navigationHover: false,
				// pagination: false,
				thumbnails: false
			});
		});
</script>

</body>
</html>