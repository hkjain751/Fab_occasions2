<!-- Hardik(Database Connection & get field like city,vendor,more etc. data by function getData11())   -->
<!-- Hardik(Database Connection & get content for footer & contact no. by getContent11())   -->
<!-- Hardik(Database Connection & get heading in reddish & contact mail by getHeading11())   -->
<!-- Hardik(Database Connection & get main heading like why fab? by getMainHeading11() )   -->
<!-- Hardik(Database Connection & get button name by getButton11())   -->
<?php

		function getData11($fieldtype)
		{
		  $conn = mysqli_connect('localhost','root','','faboccasions')
		 or die('Error connecting to MySQL server.');
		 $q="Select * from hsection_11 where field='".$fieldtype."'";
		 $result=mysqli_query($conn,$q);
		 $num= mysqli_num_rows($result);
		  for($i=0;$i<$num;$i++)
		 {
		  $row=mysqli_fetch_array($result);
		  echo $row['option']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		 }
		}
		
		function getContent11($id)
		{
		  $conn = mysqli_connect('localhost','root','','faboccasions')
		 or die('Error connecting to MySQL server.');
		$q="Select * from hsection_112 where id=".$id;
		 $result=mysqli_query($conn,$q);
		 $num = mysqli_num_rows($result);
		  for($i=0;$i<$num;$i++)
		 {
		  $row=mysqli_fetch_array($result);
		  echo $row['content'];
		 }
		}
		
		function getHeading11($id)
		{
		  $conn = mysqli_connect('localhost','root','','faboccasions')
		 or die('Error connecting to MySQL server.');
		 $q="Select * from hsection_112 where id=".$id;
		 $result=mysqli_query($conn,$q);
		 $num= mysqli_num_rows($result);
		  for($i=0;$i<$num;$i++)
		 {
		  $row=mysqli_fetch_array($result);
		  echo $row['heading'];
		 }
		}
		function getMainHeading11($id)
		{
		  $conn = mysqli_connect('localhost','root','','faboccasions')
		 or die('Error connecting to MySQL server.');
		$q="Select * from hsection_112 where id=".$id;
		 $result=mysqli_query($conn,$q);
		 $num= mysqli_num_rows($result);
		  for($i=0;$i<$num;$i++)
		 {
		  $row=mysqli_fetch_array($result);
		  echo $row['headingmain'];
		 }
		}
		function getButton11($id)
		{
		  $conn = mysqli_connect('localhost','root','','faboccasions')
		 or die('Error connecting to MySQL server.');
		$q="Select * from hsection_112 where id=".$id;
		 $result=mysqli_query($conn,$q);
		 $num= mysqli_num_rows($result);
		  for($i=0;$i<$num;$i++)
		 {
		  $row=mysqli_fetch_array($result);
		  echo $row['button'];
		 }
		}
?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Pre Weddings</title>
		<script src="resources/js/jquery-3.3.1.min.js"></script>
		<script src="resources/js/popper.min.js"></script>
		<script src="resources/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="resources/uikit/css/uikit.min.css">
		<link rel="stylesheet" href="resources/css/bootstrap.min.css">
		<link rel="stylesheet" href="resources/css/componentNavBar.css">
		<link rel="stylesheet" href="resources/css/pre-wedding.css">
		<link href="https://fonts.googleapis.com/css?family=Overlock" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css">
		<script src="resources/js/parallax.js"></script>
		<link rel="stylesheet" href="resources/css/s11_style.css">
		<link rel="stylesheet" href="resources/css/s11_style1.css">
		<link rel="stylesheet" href="model-pre-weddings.css">
		<link rel="stylesheet" href="resources/css/whyfab_style.css">
		<script>
			//by Manan Trimbakey
			$(document).ready(function () {
				var s4size = 0;

				// $("#more").on("click",function () {
				// 	$("#more-list").css("display", "block;");
				// });

				$(".s4-search-bar").each(function () {
					s4size += $(this).outerWidth();
				});

				$(".s4-options").css("width", s4size - 1);

				$("#s4-map-marker-alt-search-bar-icon, #s4-search-text-box").on("click", function () {
					document.getElementById("s4-search-text-box").style = "border-bottom-right-radius: 0px !important";
					document.getElementById("s4-map-marker-alt-search-bar-icon").style =
						"border-bottom-left-radius: 0px !important";
					document.getElementById("s4-search-text-box").focus();
					$(".s4-options").css("display", "block");
				});

				$("#s4-search-text-box").blur(function () {
					document.getElementById("s4-search-text-box").style = "border-bottom-right-radius: 1.2em !important";
					document.getElementById("s4-map-marker-alt-search-bar-icon").style =
						"border-bottom-left-radius: 1.2em !important";
					$(".s4-options").css("display", "none");
				});
			});
		</script>
		<style>
			/* style for search bar */

			.s4_container {
				height: 350px;
				padding: 1em;
				margin: 0;
				text-align: center;
				font-family: 'Overlock', 'cursive';
				background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url("resources/img/pre-wedding-rituals.jpg") center no-repeat;
				background-size: cover;
				background-attachment: fixed;
				/* background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)); */
			}

			.s4_heading {
				font-size: 2em;
				color: honeydew;
				margin: 1em;
			}

			#s4_tagline {
				color: white;
				font-size: 20px;
				font-family: 'Overlock', 'cursive';
			}

			.s4-padding-m {
				padding: 10px 15px;
			}

			.s4-font-size-search-bar {
				font-size: 1.2em !important;
			}

			.s4-options {
				display: none;
				position: absolute;
				height: 200px;
				width: 100%;
				background-color: white;
				top: 2.1em;
				border-bottom-left-radius: 1.2em !important;
				border-bottom-right-radius: 1.2em !important;
				box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.1);
				z-index: 10;
			}

			.s4-search-bar-start {
				border-top-left-radius: 1.2em !important;
				border-bottom-left-radius: 1.2em !important;
			}

			.s4-search-bar-end {
				border-top-right-radius: 1.2em !important;
				border-bottom-right-radius: 1.2em !important;
			}

			.s4-no-box-shadow:focus {
				box-shadow: 0 0 0 0 !important;
			}

			.s4-no-box-shadow {
				box-shadow: 0 0 0 0 !important;
			}

			.more-list {
				display: none;
				position: absolute;
				z-index: 1200;
				background-color: black;
			}

			#more:hover .more-list {
				display: block;
				/* color: rgb(244, 72, 58); */
			}

			.more-list ul li:hover {
				color: rgb(244, 72, 58);
				cursor: pointer;
			}

			.a-color-white a:hover {
			color: red !important;
			text-decoration: none;
		}
		</style>
	</head>

	<body>

		<?php
			include 'Nav.html';
		?>
		<!--Nav Bar Ends Here-->

		<!-- Main Content -->
		<div class="container-fluid" style="height: 800px; background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),url('resources/img/haldi-back.jpg') center no-repeat; background-attachment: fixed; background-size: cover; border-bottom: solid 5px red;">
			<div style="z-index: 2; position: relative; top: 300px;" class="text-center text-white font-Overlock">
				<div style="font-size: 35px;">
					Just Enjoy Your
				</div>
				<div style="font-size: 50px;">
					Pre-Wedding
				</div>
			</div>

			<div class="container-fluid bg-white position-relative rounded p-0" style="top: 400px; width: 90%; box-shadow: 0 0 3px 2px rgba(0, 0, 0, 0.1);">
				<!-- pre wedding events -->
				<br>
				<div class="container font-Overlock text-center mb-3 mt-3">
					<div class="jumbotron-fluid">
						<div style="font-size: 35px;">
							<span style="color: rgb(244, 72, 58);">&mdash;</span> Fab takes care of the Rest
							<span style="color: rgb(244, 72, 58);">&mdash;</span>
						</div>
					</div>
				</div>
				<div class="container text-center">
					<img src="resources/img/t11.png" alt="" srcset="" style="height: 75px;">
				</div>

				<!-- grid 1 starts here -->
				<div class="container p-3 pre-wedding-events-section font-Overlock" style="width: 100% !important;">
					<div class="row">
						<div class="standard-height-1 pre-wedding-events-option col-4 p-0">
							<div class="pre-wedding-event-option-text d-flex" style="background: linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)), url('resources/img/a1.webp') center no-repeat;">
								<table class="text-center w-100 h-100 text-white">
									<tr>
										<td class="p-2">
											<h5 class="text-white font-Overlock">Initiate Your Wedding Vows,
												<br> With Stylish Ring Ceremony
											</h5>
										</td>
									</tr>
								</table>
							</div>
						</div>
						<div class="standard-height-1 col-4 pre-wedding-events-option p-0">
							<div class="pre-wedding-event-option-text d-flex" style="background: linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)),url('resources/img/a2.webp') center no-repeat; background-size: 150%;">
								<table class="text-center w-100 h-100 text-white">
									<tr>
										<td class="p-2">
											<h5 class="text-white font-Overlock">Your Natural Beauty Shines Bright on the Glittering Mehendi Ceremony</h5>
										</td>
									</tr>
								</table>
							</div>
						</div>
						<div class="standard-height-1 col-4 pre-wedding-events-option p-0">
							<div class="pre-wedding-event-option-text d-flex" style="background: linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)),url('resources/img/a3.webp') center no-repeat;">
								<table class="text-center w-100 h-100 text-white">
									<tr>
										<td class="p-2">
											<h5 class="text-white font-Overlock">Sangeet Just Got More Glamorous & Peppyy</h5>
										</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="standard-height-1 pre-wedding-events-option col-3 p-0">
							<div class="pre-wedding-event-option-text d-flex" style="background: linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)),url('resources/img/a4.webp') center no-repeat;">
								<table class="text-center w-100 h-100 text-white">
									<tr>
										<td class="p-2">
											<h5 class="text-white font-Overlock">Haldi</h5>
										</td>
									</tr>
								</table>
							</div>
						</div>
						<div class="standard-height-1 col-3 pre-wedding-events-option p-0">
							<div class="pre-wedding-event-option-text d-flex" style="background: linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)),url('resources/img/a5.webp') center no-repeat;">
								<table class="text-center h-100 text-white">
									<tr>
										<td class="p-2">
											<h5 class="text-white font-Overlock">Roka</h5>
										</td>
									</tr>
								</table>
							</div>
						</div>
						<div class="standard-height-1 col-3 pre-wedding-events-option p-0">
							<div class="pre-wedding-event-option-text d-flex" style="background: linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)),url('resources/img/a6.webp') center no-repeat;">
								<table class="text-center w-100 h-100 text-white">
									<tr>
										<td class="p-2">
											<h5>Bridal Shower</h5>
										</td>
									</tr>
								</table>
							</div>
						</div>
						<div class="standard-height-1 col-3 pre-wedding-events-option p-0">
							<div class="pre-wedding-event-option-text d-flex" style="background: linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)),url('resources/img/a7.webp') center no-repeat;">
								<table class="text-center w-100 h-100 text-white">
									<tr>
										<td class="p-2">
											<h5 class="text-white font-Overlock">Bachelors Party</h5>
										</td>
									</tr>
								</table>
							</div>
						</div>
					</div>

					<!-- </div> -->
					<!-- </div> -->
				</div>
				<!-- grid 1 ends here -->

				<!-- pre wedding services -->
				<div class="container-fluid pre-wedding-special-services text-center p-0">
					<div class="container-fluid">
						<div class="jumbotron bg-transparent m-0 font-Overlock">
							<h1 class="p-1 font-Overlock pb-4" style="">
								<span class="text-danger">&mdash;</span> FAB Special Services
								<span class="text-danger">&mdash;</span>
							</h1>
							<hr>
							<h5 class="text-white font-Overlock">
								EXPERIENCE FAB AT YOUR NEXT EVENT!
							</h5>
							<p class="m-0" style="font-size: 18px !important;">
								We offer a variety of services and can either plan your event Ourselves with Personal Assistance or give you the starting
								tools to do it yourself. Whether you’re looking to organize your next Concept and Design Planning, Ideas and Inspirations,
								or Tips and Tricks for Managing Yourself, we have the expertise and organizational skills to help you stay on track.
								Contact Us today to see what we can do for you.
							</p>
						</div>
					</div>
					<!-- search bar from home s4 -->
					<div class="container-fluid p-0" data-parallax="scroll" data-image-src="resources/img/haldi-back.jpg">
						<div class="s4_container">
							<!--<div class="s4_container">-->
							<h1 class="s4_heading">
								<span style="color: rgb(244, 72, 58);">&mdash;</span>&nbsp;Find the Best
								<span style="color: rgb(244, 72, 58);">Venue</span> for You
								<span style="color: rgb(244, 72, 58);">&mdash;</span>
							</h1>
							<span id="s4_tagline">Fab Weddings Brings To You, Dream Weddings & Pre-Weddings. Fantasize, Plan & Find the Best Vendors With Us.</span>
							<br>
							<br>
							<br>
							<div class="container s4-padding-m bg-transparent" style="width: 40%;">
								<div class="input-group border-0">
									<div class="input-group-prepend s4-font-size-search-bar s4-search-bar">
										<div class="s4-options">
											Manan
										</div>
										<span class="input-group-text bg-white border-0 s4-search-bar-start" id="s4-map-marker-alt-search-bar-icon">
											<!-- <img src="resources/font-awesome/map-marker-alt.svg" style="height: 16px"> -->
											<i class="fas fa-map-marker-alt"></i>
										</span>
									</div>
									<input type="text" class="s4-search-bar-end form-control border-0 s4-font-size-search-bar s4-no-box-shadow s4-search-bar"
									    placeholder="Search Here..." id="s4-search-text-box">
									<button class="btn btn-danger ml-2 s4-no-box-shadow" style="width:100px; border-radius: 1.2em; background-color: rgb(244,72,58);">Go</button>
								</div>
							</div>
						</div>
					</div>

					<!-- grid 2 starts from here -->
					<div class="pre-wedding-services-options container-fluid pb-2 font-Overlock">
						<div class="container mt-5 mb-2">
							<div class="row text-white">
								<div class="fab-services-options col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12 standard-height-1 d-flex" style="background:linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)) ,url('./resources/img/decorators.png') center no-repeat;">
									<span class="w-100 align-self-end">
										<h3 class="text-white font-Overlock">
											Decorators
										</h3>
									</span>
								</div>
								<div class="fab-services-options col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12 standard-height-1 d-flex" style="background:linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)) ,url('./resources/img/photographer.webp') center no-repeat;">
									<span class="w-100 align-self-end">
										<h3 class="text-white font-Overlock">
											Photographers
										</h3>
									</span>
								</div>
								<div class="fab-services-options col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12 standard-height-1 d-flex" style="background:linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)) ,url('./resources/img/caterer.webp') center no-repeat;">
									<span class="w-100 align-self-end">
										<h3 class="text-white font-Overlock">
											Caterers
										</h3>
									</span>
								</div>
								<div class="fab-services-options col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12 standard-height-1 d-flex" style="background:linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)) ,url('./resources/img/bridal-wear.webp') center no-repeat;">
									<span class="w-100 align-self-end">
										<h3>
											Bridal Wear
										</h3>
									</span>
								</div>
								<div class="fab-services-options col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12 standard-height-1 d-flex" style="background:linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)) ,url('./resources/img/jwelleries.webp') center no-repeat;">
									<span class="w-100 align-self-end">
										<h3 class="text-white font-Overlock">
											Jwellery
										</h3>
									</span>
								</div>
								<div class="fab-services-options col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12 standard-height-1 d-flex" style="background:linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)) ,url('./resources/img/make-up-artist.webp') center no-repeat;">
									<span class="w-100 align-self-end">
										<h3 class="text-white font-Overlock">
											Make Up Artists
										</h3>
									</span>
								</div>
								<div class="fab-services-options col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12 standard-height-1 d-flex" style="background:linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)) ,url('./resources/img/invitations.png') center no-repeat;">
									<span class="w-100 align-self-end">
										<h3 class="text-white font-Overlock">
											Invitations
										</h3>
									</span>
								</div>
								<div class="fab-services-options col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12 standard-height-1 d-flex" style="background:linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)) ,url('./resources/img/groom-wear.webp') center no-repeat;">
									<span class="w-100 align-self-end">
										<h3 class="text-white font-Overlock">
											Groom Wear
										</h3>
									</span>
								</div>
								<div class="fab-services-options col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12 standard-height-1 d-flex" style="background:linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)) ,url('./resources/img/dj.webp') center no-repeat;">
									<span class="w-100 align-self-end">
										<h3 class="text-white font-Overlock">
											D.J.
										</h3>
									</span>
								</div>
								<div class="fab-services-options col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12 standard-height-1 d-flex" style="background:linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)) ,url('./resources/img/mehendi-artists.webp') center no-repeat;">
									<span class="w-100 align-self-end">
										<h3 class="text-white font-Overlock">
											Mehendi Artists
										</h3>
									</span>
								</div>
								<div class="fab-services-options col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12 standard-height-1 d-flex" style="background:linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)) ,url('./resources/img/choreographer.webp') center no-repeat;">
									<span class="w-100 align-self-end">
										<h3 class="text-white font-Overlock">
											Choreographers
										</h3>
									</span>
								</div>
								<div class="fab-services-options col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12 standard-height-1 d-flex" style="background:linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)) ,url('./resources/img/accessories.webp') center no-repeat;">
									<span class="w-100 align-self-end">
										<h3 class="text-white font-Overlock">
											Accessories
										</h3>
									</span>
								</div>
							</div>
						</div>
					</div>
					<!-- grid 2 ends here -->
				</div>
				<center>
					<hr style="width: 90%;">
				</center>
				<!-- Manage, Plan and Be Engaged` -->

				<!-- grid 3 starts from here -->
				<div class="container-fluid pre-wedding-activities-manage p-0 font-Overlock bg-light">
					<div class="row p-4">
						<div class="col-6">
							<div class="row  text-white font-Overlock">
								<div class="col-6 standard-height pre-wedding-activities-manage-options bg-success p-0">
									<div class="h-100 w-100" style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('resources/img/b1.jpg') center no-repeat;">
										<table class="h-100 w-100 text-center">
											<tr>
												<td>
													<h3>
														Gifts
													</h3>
												</td>
											</tr>
										</table>
									</div>
								</div>
								<div class="col-6 standard-height pre-wedding-activities-manage-options bg-info p-0">
									<div class="h-100 w-100" style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('resources/img/b2.jpg') center no-repeat;">
										<table class="h-100 w-100 text-center">
											<tr>
												<td>
													<h3>
														Activies
													</h3>
												</td>
											</tr>
										</table>
									</div>
								</div>
							</div>
							<div class="row text-white">
								<div class="col-6 standard-height pre-wedding-activities-manage-options bg-info p-0">
									<div class="h-100 w-100" style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('resources/img/b3.jpg') center no-repeat;">
										<table class="h-100 w-100 text-center">
											<tr>
												<td>
													<h3>
														Ideas
													</h3>
												</td>
											</tr>
										</table>
									</div>
								</div>
								<div class="col-6 standard-height pre-wedding-activities-manage-options bg-success p-0">
									<div class="h-100 w-100" style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('resources/img/b4.jpg') center no-repeat;">
										<table class="h-100 w-100 text-center">
											<tr>
												<td>
													<h3>
														Vouchers
													</h3>
												</td>
											</tr>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="col-6 d-flex">
							<div class="jumbotron-fluid text-center align-self-center">
								<h1 class="mb-4">
									<span class="text-danger">&mdash;</span> Manage, plan & Be Engaged Yourself
									<span class="text-danger">&mdash;</span>
								</h1>
								<h4 class="mb-4">
									AFTER ALL ITS YOUR DAY
								</h4>
								<p style="font-size: 18px;">
									Have a Full record of all happenings, have an eye on every move, Fab delivers you 24X7 Support, Manages your pre wedding
									to Wedding for you while being in your touch constantly & taking inputs & updates by you. Your wedding Log made
									by us.
								</p>
							</div>
						</div>
					</div>
				</div>
				<!-- grid 3 ends here -->

				<!-- why fab section -->
				<!-- <div class="container-fluid p-4 pre-wedding-why-fab">
					<h2 class="text-center pt-4" style="color:white;">Why Fab?</h2>
					<div class="container mb-5">
						<p class="text-center pt-4" style="color:white; font-size: 20px;">FAB Experience makes it very easy for you altogether, just sit back & relax and leave it to FAB. Just search for the
							best services and enjoy personal assistance from FAB in all your events</p>
					</div>
					<div class="row">
						<div class="col-md-4 text-center pb-4" style="color: white;">
							<i class="fas fa-balance-scale pb-4" style="font-size: 70px;"></i>
							<h3 class="text-white">ACCURATE AND HONEST</h3>
							<p>FEEL ASSURED</p>
							<a href="" class="btn btn-danger">Get in touch</a>
						</div>
						<div class="col-md-4 text-center pb-4" style="color: white;">
							<i class="fas fa-search pb-4" style="font-size: 70px;"></i>
							<h3 class="text-white">ACCURATE AND HONEST</h3>
							<p>FEEL ASSURED</p>
							<a href="" class="btn btn-danger">Get in touch</a>
						</div>
						<div class="col-md-4 text-center pb-4" style="color: white;">
							<i class="fas fa-phone pb-4" style="font-size: 70px;"></i>
							<h3 class="text-white">ACCURATE AND HONEST</h3>
							<p>FEEL ASSURED</p>
							<a href="" class="btn btn-danger">Get in touch</a>
						</div>
					</div>
				</div> -->
				<!---- Design By Hardik (whyfab section complete) ---->
				<div class="uk-block uk-block-default">
					<div style="background:linear-gradient(rgba(0, 0, 0, 0.2),rgba(0, 0, 0, 0.2)), url(./resources/img/backkitty.jpg);height: 400px;width:100%;background-size: cover;">
						<div style="padding-top: 20px; align-content: center;">
							<h1 style="color: rgb(244,72,58); text-align: center; font-family: 'Overlock', cursive;">
								&mdash;
								<span style="color: #fff;">WHY FAB ? </span> &mdash;</h1>
						</div>
						<h4 style="color: #fff; text-align: center; margin-left: 15%; margin-right: 15%; font-family: 'Overlock', cursive;">FAB Experience makes it very easy for you altogether, just sit back & relax and leave it to FAB. Just search for the
							best services and enjoy personal assistance from FAB in all your events</h4>
						<table class="kp_table">
							<tr>
								<td width="450px">
									<div class="kb_division">
										<div class="kp_zoomimage">
											<img class="kp_icon" src="resources/img/kittyacc.png" alt="">
										</div>
										<h3 class="kp_heading" style="margin-bottom: 0px;">
											<b>ACCURATE AND HONEST</b>
										</h3>
										<p class="kp_heading hr-line" style="color:rgb(244,72,58);">
											<b>--------------------------------------</b>
										</p>
										<p class="kp_para" style="font-size: 14px;">FEEL ASSURED</p>
										<button class="kp_button" onclick="window.location.href='#'">Get In Touch</button>
									</div>
								</td>
								<td width="450px">
									<div class="kb_division">
										<div class="kp_zoomimage">
											<img class="kp_icon" src="resources/img/kittyser.png" alt="">
										</div>
										<h3 class="kp_heading" style="margin-bottom: 0px;">
											<b>FIND BEST VENDORS</b>
										</h3>
										<p class="kp_heading hr-line" style="color:rgb(244,72,58);">
											<b>--------------------------------</b>
										</p>
										<p class="kp_para" style="font-size: 14px;">ACROSS NATION</p>
										<button class="kp_button" onclick="window.location.href='#'">Get In Touch</button>
									</div>
								</td>
								<td width="450px">
									<div class="kb_division">
										<div class="kp_zoomimage">
											<img class="kp_icon" src="resources/img/kittypho.png" alt="">
										</div>
										<h3 class="kp_heading" style="margin-bottom: 0px;">
											<b>24/7 SERVICE SUPPORT</b>
										</h3>
										<p class="kp_heading hr-line" style="color:rgb(244,72,58);">
											<b>-----------------------------------</b>
										</p>
										<p class="kp_para" style="font-size: 14px;">PERSONAL ASSISTANCE</p>
										<button class="kp_button" onclick="window.location.href='#'">Get In Touch</button>
									</div>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<!-- why fab ends -->
				<?php
				// include 'portfolio.php';
				?>
					<!-- footer starts -->
					<div class="pt-4 font-Overlock" style="background-color: #eee">
						<div class="container" style="background-color: #fff">
							<div class="row pb-4 ">
								<div class="col-sm mt-3" style="border-right:1px solid #818181; ">
									<h5 class="text-center pt-3">
										<b>
											<?php getMainHeading11(1); ?>
										</b>
									</h5>
									<p class="text-center" style="color: rgb(244,72,58);">
										<?php getHeading11(1); ?>
									</p>
									<p class="text-center">
										<?php getContent11(1); ?>
									</p>
									<div style="text-align:center; padding-top: 10px;">
										<a href="#" class="cus-btn">
											<?php getButton11(1); ?>
										</a>
									</div>
									<div class="penal penal-default ">
										<div class="penalbody shadow bg-white rounded" style="margin-top: 30px;">
											<table>
												<tr>
													<td>
														<img src="./resources/img/icons8-compose-96.png" height="100" width="60">
														</i>
													</td>
													<td>
														<p class="text-center" style="font-size:12px; padding-top: 15px;">Keep Track with Log</p>
													</td>
													<td>
														<img src="./resources/img/icons8-light-on-96.png" height="100" width="60">
														</i>
													</td>
													<td>
														<p class="text-center" style="font-size:12px; padding-top: 15px; padding-right: 8px;">Latest Trends & Idea</p>
													</td>
													<td>
														<img src="./resources/img/icons8-online-payment-with-a-credit-card-128.png" height="100" width="60">
														</i>
													</td>
													<td>
														<p class="text-center" style="font-size:12px; padding-top: 15px; ">Book Top Vendor</p>
													</td>
												</tr>
											</table>
										</div>
									</div>
								</div>
								<div class="col-sm mt-3" style="border-right:1px solid #818181; ">
									<h5 class="text-center pt-3">
										<b>
											<?php getMainHeading11(2); ?>
										</b>
									</h5>
									<p class="text-center" style="color: rgb(244,72,58);">
										<?php getHeading11(2); ?>
									</p>
									<p class="text-center">
										<?php getContent11(2); ?>
									</p>
									<div style="text-align:center; padding-top: 10px;">
										<a href="#" class="cus-btn">
											<?php getButton11(2); ?>
										</a>
									</div>

									<div class="penal penal-default ">
										<div class="penalbody shadow bg-white rounded" style="margin-top: 30px;">
											<table>
												<tr>
													<td>
														<img src="./resources/img/icons8-compose-96.png" height="100" width="60">
														</i>
													</td>
													<td>
														<p class="text-center" style="font-size:12px; padding-top: 15px;">Keep Track with Log</p>
													</td>
													<td>
														<img src="./resources/img/icons8-light-on-96.png" height="100" width="60">
														</i>
													</td>
													<td>
														<p class="text-center" style="font-size:12px; padding-top: 15px; padding-right: 8px;">Latest Trends & Idea</p>
													</td>
													<td>
														<img src="./resources/img/icons8-online-payment-with-a-credit-card-128.png" height="100" width="60">
														</i>
													</td>
													<td>
														<p class="text-center" style="font-size:12px; padding-top: 15px; ">Book Top Vendor</p>
													</td>
												</tr>
											</table>
										</div>
									</div>
								</div>
								<div class="col-sm mt-3">
									<h6 class="text-center pt-3">Follow us on</h6>
									<div class="text-center">
										<i class="fab fa-facebook" style="font-size: 25px; color:#3b5998;"></i>&nbsp;&nbsp;
										<i class="fab fa-instagram" style="font-size: 25px; color:#e4405f;"></i>&nbsp;&nbsp;
										<i class="fab fa-twitter-square" style="font-size: 25px; color:#55acee;"></i>
									</div>
									<p style="color: rgb(244,72,58); font-size: 16px; padding-left: 17px;">Get Latest Blog Alerts</p>
									<form action="setEmail11.php" class="text-center mt-3">
										<input type="text" placeholder="Email Address" name="email" style="text-indent: 7px; width: 90%">
										<button type="button" data-toggle="model" data-target="#my" class="mt-2 btn cus-sub-btn" style="margin-left: 67%">Submit</button>
										<!-- <div class="modal fade" role="dialog" tabindex="-1">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title">Newsletter Notification</h4>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
											</div>
											<div class="modal-body">
												<p>Thankyou..! for subscribing to our newsletter. We will send you our latest news first.</p>
											</div>
											<div class="modal-footer">
												<button class="btn btn-danger" type="button" data-dismiss="modal" style="width:119px;background-color:rgb(245,103,94);color:rgb(255,255,255);">Close</button>
											</div>
										</div>
									</div>
								</div> -->
										<!-- <div class="modal fade" role="dialog" tabindex="-1" id="my" style="z-index: 15;">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title">Newsletter Notification</h4>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
											</div>
											<div class="modal-body">
												<p>Thankyou..! for subscribing to our newsletter. We will send you our latest news first.</p>
											</div>
											<div class="modal-footer">
												<button class="btn btn-danger" type="button" data-dismiss="modal" style="width:119px;background-color:rgb(245,103,94);color:rgb(255,255,255);">Close</button>
											</div>
										</div>
									</div>
								</div> -->
									</form>
									<div class="ml-4 mt-3">
										<p style="color: rgb(244,72,58); font-size: 16px;">Contact to us get best deals</p>
										<p>
											<i class="fas fa-envelope"></i>&nbsp;&nbsp;
											<a href="" style="color:black; text-decoration: none;">
												<?php getContent11(3); ?>
											</a>
										</p>
										<p>
											<i class="fas fa-phone"></i>&nbsp;&nbsp;
											<a href="" style="color:black; text-decoration: none;">
												<?php getHeading11(3); ?>
											</a>
										</p>
									</div>
								</div>
							</div>

							<!-- lower footer Design by Shashwat & Hardik  -->
							<div class="s11_footer">
								<div class="s11_fot">

									<h2 class="s11_heading">Other Cities</h2>
									<ul class="s11_ulline font-Overlock s11_ul text-white" style="padding: 0px;">
										<li>
											<?php
							getData11('city');
						  ?>
										</li>
									</ul>
									<h2 class="s11_heading">Other Vendors</h2>
									<ul class="s11_ulline font-Overlock s11_ul" style="padding: 0px;">
										<li>
											<?php
							getData11('vendor');
						  ?>
										</li>
									</ul>

									<h2 class="s11_heading ">More</h2>
									<ul class="mb-3 s11_ulline font-Overlock s11_mar-bot s11_ul" style="padding: 0px;">
										<li>
											<?php
							getData11('more');
					  ?>
										</li>
									</ul>
								</div>
							</div>
							<div class="s11_last">
								<p class="s11_para">
									<a href="#">Terms & Condition</a> |
									<a href="#">Privacy Policy</a>
								</p>

								<p class="s11_para-last">
									<a href="">About Us</a> |
									<a href="">FAQs</a> |
									<a href="">Suggest a Vendor</a> |
									<a href="">Send Feedback</a>
									<br>
									<br> &copy;2017 Techworm Solutions</p>
							</div>
						</div>
					</div>
					<!-- footer ends -->


			</div>
		</div>

	</body>

	</html>