<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
	<title>Welcome</title>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	    crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
	<script src="resources/js/cordeila.js"></script>
	<link rel="stylesheet" type="text/css" href="resources/css/component.css" type="text/css" />

	<link href="https://fonts.googleapis.com/css?family=Overlock" rel="stylesheet">


	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg"
	    crossorigin="anonymous">
	<style>
		/*style for pop up*/

		#home-pop-up-1-m {
			display: none;
			position: fixed;
			z-index: 1200;
			box-shadow: 0 0 0 2000px rgba(0, 0, 0, 0.5);
			left: 13%;
			top: 50px;
			border-radius: 10px;
			font-family: 'Overlock', cursive;
		}

		#home-pop-up-1-m-close-button {
			display: block;
			float: right;
		}

		.home-pop-up-1-padding {
			padding: 10px;
		}

		.home-pop-up-no-box-shadow {
			box-shadow: 0 0 0 0;
		}

		.home-pop-up-no-box-shadow:focus {
			box-shadow: 0 0 0 0;
		}
	</style>
	<script>
		//		script for pop up
		$(document).ready(function () {
			$("#home-pop-up-1-m").fadeIn("slow");

			$("#home-pop-up-1-m-close-button").on("click", function () {
				$("#home-pop-up-1-m").fadeOut(500);
			});
		});
	</script>
</head>

<body>
	<!--pop up starts here-->
	<div class="container bg-light" id="home-pop-up-1-m" style="padding: 10px 0px !important;">
		<button class="home-pop-up-no-box-shadow btn btn-danger mr-2" id="home-pop-up-1-m-close-button">
			<i class="fa fa-times"></i>
		</button>
		<div class="container-fluid" style="padding: 0px 0px;">
			<div class="jumbotron-fluid text-center" style="padding: 0px; box-shadow: 0 7px 7px -2px rgba(0, 0, 0, 0.2); ">
				<p style="font-size: 1.7em; color: rgb(244,72,58); padding-left: 15px; padding-right: 15px;" class="mb-0">Fab Weddings Brings To You, Dream Weddings & Pre-Weddings. Fantasize, Plan & Find the Best Vendors With Us.</p>
				<p style="font-size: 1.5em; padding-bottom: 10px; padding-left: 15px; padding-right: 15px;" class="mt-1">Plan Your Wedding With India's Largest Wedding Co.</p>
			</div>
		</div>
		<div class="row mt-4" style="padding: 5px 15px;">
			<div class="col-7 border-right">
                            <img src="getImage_for_pop_1_home.php" alt="" srcset="" style="width: 100%;height: 300px;" class="rounded">
			</div>
			<div class="col-5 text-center">
				Fab Weddings Brings To You, Dream Weddings & Pre-Weddings. Fantasize, Plan & Find the Best Vendors With Us.
			</div>
		</div>
		<div class="container-fluid" style="padding-left:15px; padding-right: 15px;">
			<div class="row">
				<div class="col-6"></div>
				<div class="col-6 text-right">
					<button class="btn">Login</button>
				</div>
			</div>
		</div>
	</div>
	<!--pop ends here-->
	<!-- Below section defines the NavBar for our Page 
    by - Arihant Jain-->
	<?php
		// include 'nav.php';
		include 'nav.html';
	?>
	<div class="body-m">
		<div class="text-center" style="margin-top: 0; background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('resources/img/back.jpg') center no-repeat; background-size: cover;">
			<br>
			<br>
			<!-- header of our page... -->
			<h1 class="heading-m" id="heading-m">Plan Your Wedding With India's Largest Wedding Co.</h1>
			<br>
			<br>
			<br>
			<!-- the search bar 
        -by manan trimbakey
        discription:-->
			<div style="display:inline-block; border-radius: 25px; padding: 0;">
				<!--search bar starts from here-->
				<div class="container bg-transparent padding-m" style="width: 60%;">
					<div class="input-group border-0">

						<div class="search-bar-part-1 input-group-prepend">

							<span class="input-group-text border-0 bg-white s1-font-size-search-bar search-bar-s1-m-start" id="s1-map-marker-alt-search-bar-icon">

								<img src="resources/font-awesome/map-marker-alt.svg" style="height: 16px !important;">

							</span><div class="s1-options-1"></div>
						</div>
						<input type="text" name="" id="s1-search-text-box-1" class="search-bar-part-1 form-control border-0 no-box-shadow-m s1-font-size-search-bar"
						    placeholder="location" style="font-size: 1em !important;">

						<div class="input-group-append border-0">

							<span class="input-group-text border-0 bg-white s1-font-size-search-bar search-bar-part-1" id="s1-caret-down-search-bar-icon">

								<img src="resources/font-awesome/caret-down.svg" style="height: 16px !important;">

							</span>
						</div>
						<div class="input-group-append border-0">

							<span class="input-group-text bg-white border-left border-top-0 border-bottom-0 border-right-0 s1-font-size-search-bar search-bar-part-2"
							    id="s1-search-search-bar-icon">

								<img src="resources/font-awesome/search.svg" style="height: 16px !important;">
							</span>
						</div>
						<input type="text" name="" id="s1-search-text-box-2" class="search-bar-part-2 form-control border-0 no-box-shadow-m search-bar-s1-m-end"
						    placeholder="Looking for" style="font-size: 1em !important;  border-top-right-radius: 1.2em !important; border-bottom-right-radius: 1.2em !important;">

						<button class="ml-2 btn btn-danger border-0 no-box-shadow-m s1-font-size-search-bar" style="width:100px; border-radius: 1.2em; background-color: rgb(244,72,58);">Go</button>
					</div>
				</div>
				<!--search bar ends here-->
				<!--a saparate button to search text button-->
				<br>
				<br>
				<h4 style="color: white; margin: 50px 100px; font-size: 1.5em" id="tagline-m">Fab Weddings Brings To You, Dream Weddings & Pre-Weddings. Fantasize, Plan & Find the Best Vendors With Us.</h4>
				<!--Tagline-->
			</div>
			<!--Some JS for the animation of the navigation bar please do not edit this part in any form, not even replace its page in the page-->
			<script src="resources/js/classie.js"></script>
			<script src="resources/js/clipboard.min.js"></script>
			<script>
				(function () {
					[].slice.call(document.querySelectorAll('.menu')).forEach(function (menu) {
						var menuItems = menu.querySelectorAll('.menu__link'),
							setCurrent = function (ev) {
								ev.preventDefault();

								var item = ev.target.parentNode; // li

								// return if already current
								if (classie.has(item, 'menu__item--current')) {
									return false;
								}
								// remove current
								classie.remove(menu.querySelector('.menu__item--current'),
									'menu__item--current');
								// set current
								classie.add(item, 'menu__item--current');
							};

						[].slice.call(menuItems).forEach(function (el) {
							el.addEventListener('click', setCurrent);
						});
					});
				})(window);
			</script>
			<!--uptil here-->
		</div>

		<!--Section 2 Starts from here-->
		<br>
		<?php 
    include 'h_section2.php';
    ?>
		<!--Section 2 ends here-->
		<!--Section 3 Starts from here-->
		<br>
		<?php 
    include 'h_section3.html';
    ?>
		<!--Section 3 ends here-->
		<!--Section 6 Starts from here-->
		<br>
		<?php 
    
    include 'hsection_6.php';
    ?>
		<!--Section 6 ends here-->
		<!--Section 8 Starts from here-->
		<br>
		<?php 
  include 'hsection_8.php';
    ?>
		<!--Section 8 ends here-->
		<!--Section 4 Starts from here-->
		<br>
		<br>
		<br>
		<?php 
   include 'h_section4.html';
    ?>
		<!--Section 4 ends here-->
		<!--Section 5 Starts from here-->
		<br>
		<br>
		<br>
		<?php 
   include 'h_section5.php';
    ?>
		<!--Section 5 ends here-->
		<!--Section 7 Starts from here-->
		<br>
		<br>
		<?php 
   include 'h_section7.php';
    ?>
		<!--Section 7 ends here-->
		<!--Section 8 Starts from here-->
		<br>
		<br>
		<?php 
   include 'hsection_10.php';
    ?>
		<!--Section 8 ends here-->
               <!--Section 9 Starts from here-->
		<br>
		<br>
		<?php 
   include 'hsection_9.php';
    ?>
		<!--Section 9 ends here-->
                <!--Section 11  Starts from here-->
		<br><br>

		<?php
			include 'h_section12.php';
		?>
<br><br>
		<?php 
   include 'hsection_11.php';
    ?>
		<!--Section 11 ends here-->

</body>

</html>