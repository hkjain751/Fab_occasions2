<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	    crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
	<script src="resources/js/cordeila.js"></script>
	<!--<link rel="stylesheet" type="text/css" href="resources/css/component.css" />-->
	<link rel="stylesheet" href="resources/css/componentNavBar.css">
	<link href="https://fonts.googleapis.com/css?family=Overlock" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg"
	    crossorigin="anonymous">
	    <style type="text/css">
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


<section class="section section--menu" id="Cordelia" style="padding-bottom: 1em !important;">
		<!-- the table is this format as shown:
        |-------------------------------|----------------------|
        |                               | navigation and signup|
        |          logo                 |----------------------|
        |                               |call and Connectt with|
        |-------------------------------|----------------------| -->
		<table style="width: 100%;  background-color: rgba(0, 0, 0);">
			<tr>
				<td rowspan="2">
					<!-- this the logo part -->
					<img src="resources/img/fab.png" class="logo-m" id="logo-m">
				</td>
				<td>
					<!-- our navigation with animation -->
					<nav class="menu menu--cordelia">
						<ul class="menu__list">
							<li class="menu__item menu__item--current">
								<a href="#" class="menu__link a-color-white">Home</a>
							</li>
							<li class="menu__item">
                                <a href="../wedding_section/w_section.php" class="menu__link a-color-white">Weddings</a>
                            </li>
                            <li class="menu__item">
                                <a href="../pre-weddings/" class="menu__link a-color-white">Pre-Weddings</a>
                            </li>
							<li class="menu__item">
								<a href="#" class="menu__link a-color-white">Venues</a>
							</li>
							<li class="menu__item">
								<a href="#" class="menu__link a-color-white">About</a>
							</li>
							<li class="menu__item">
								<a href="#" class="menu__link a-color-white">Fab</a>
							</li>
							<li class="menu__item">
								<a href="#" class="menu__link a-color-white">Contact</a>
							</li>
							<li class="menu__item">
								<a href="#" class="menu__link a-color-white">Blog</a>
							</li>
							<div class="d-inline-block p-0 pr-2 pl-2 navbar-Options border-0 text-white" id="more" style="margin-top: 2.05em; font-size: 19px;">More&nbsp;
                                <div class="more-list " style="border-radius: 1.2em; left: 65% !important; max-width: 200px !important; top: 55px;">
                                    <ul class="p-2 text-center" style="list-style-type: none; border-radius: 1.2em; ">
                                        <li class="p-2">About</li>
                                        <li class="p-2">Anniversaries</li>
                                        <li class="p-2">Birthdays</li>
										<li class="p-2 a-color-white"><a class="text-white" href="../Kitty_Party">Kitty Party</a></li>
                                        <li class="p-2 a-color-white"><a class="text-white"  href="../Family_Events">Family Events</a></li>
                                        <li class="p-2 a-color-white">With Events</li>
                                        <li class="p-2 a-color-white"><a class="text-white"  href="../Corporate-Events/Corporate.php">Coporate Events</a></li>
                                        <li class="p-2">FAQs</li>
                                    </ul>
                                </div>
                            </div>
							<!-- saparater -->
							<li class="menu__item" style="border-right: solid 1px white; margin-right: 0.6em;">&nbsp;</li>
							<!-- login/signup button -->
							<li class="menu__item" id="account-button" style="padding: 13px 60px 0px 60px !important; height: 55px; font-size: 18px;">
								<span href="#" style="vertical-align: middle;" class="a-color-white">
									<!--<span class="glyph" style="font-size: 1.2em;">&#xe008;</span>&nbsp;&nbsp;&nbsp;Login/Sign Up-->
									<i class="fa fa-user"></i>&nbsp;&nbsp;Account Section</span>

							</li>
						</ul>
					</nav>
				</td>
			</tr>
			<tr>
				<!-- our contact with us -->
				<td class="call-td-m" colspan="2">
					<span id="phone_no">
						<span>
							<i class="fa fa-phone"></i>&nbsp;&nbsp;+91&nbsp;8975456587</span>
						<span class="saparater-m">&nbsp;</span>
						<span id="connect-with">Connect with Us</span>
				</td>
			</tr>
		</table>
	</section>
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
</body></html>