<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="resources/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="resources/css/componentNavBar.css">
    <link href="https://fonts.googleapis.com/css?family=Overlock" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css">
    <style>
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
			color: red;
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
                    <img src="getImage.php" class="logo-m" id="logo-m">
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
                                <a href="#" class="menu__link a-color-white">Vendors</a>
                            </li>
                            <li class="menu__item">
                                <a href="#" class="menu__link a-color-white">Blog</a>
                            </li>
                            <li class="menu__item">
                                <a href="#" class="menu__link a-color-white">Contact</a>
                            </li>
                            <div class="d-inline-block p-0 pr-2 pl-2 navbar-Options border-0 text-white" id="more" style="margin-top: 2.28em; font-size: 18px;">More&nbsp;
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
                            <li class="menu__item" id="account-button" style="padding: 18px 60px 0px 60px;line-height: auto;">
                                <a href="#" class="a-color-white" style="padding: 0px;height: 33px !important;">
                                    <i class="fa fa-user"></i>&nbsp;&nbsp;&nbsp;Login/Sign Up</a>
									<!-- Manan -->
                            </li>
                        </ul>
                    </nav>
                </td>
            </tr>
            <tr>
                <!-- our contact with us -->
                <td class="call-td-m" colspan="2">
                    <span id="phone_no">
								<i class="fa fa-phone fa-flip-horizontal"></i>&nbsp;&nbsp;+91&nbsp;8975456587</span>
                    <span class="saparater-m">&nbsp;</span>
                    <span id="connect-with">Connect with Us</span>
                </td>
            </tr>
        </table>
    </section>
    <nav class="navbar navbar-dark bg-dark navbar-expand-xl fixed-top" id="navbar-responsive-m">
        <a class="navbar-brand" href="#">
            <img src="getImage.php" alt="" srcset="" style="height: 100px;">
        </a>
        <form class="ml-auto mr-2 form">
            <button class="btn btn-danger form-control-search-m s1-account">
						<i class="fa fa-user"></i>&nbsp;&nbsp;Account</button>
        </form>
        <!-- </div> -->
        <button class="navbar-toggler ml-0 mr-2" data-toggle="collapse" data-target="#nav-tog">
					<span class="navbar-toggler-icon"></span>
				</button>
        <div class="collapse navbar-collapse" id="nav-tog">
            <ul class="navbar-nav nav">
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">Wedding</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">Venues</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">About</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">Fab</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white" id="contact-2-s1">Contact</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">Blog</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">Connect With Us</a>
                </li>
            </ul>
        </div>
    </nav>
    <!--Some JS for the animation of the navigation bar please do not edit this part from-->
    <script src="resources/js/classie.js"></script>
    <script src="resources/js/clipboard.min.js"></script>
    <script>
        (function() {
            [].slice.call(document.querySelectorAll('.menu')).forEach(function(menu) {
                var menuItems = menu.querySelectorAll('.menu__link'),
                    setCurrent = function(ev) {
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

                [].slice.call(menuItems).forEach(function(el) {
                    el.addEventListener('click', setCurrent);
                });
            });
        })(window);
    </script>
    <!--Nav Bar Ends Here-->
</body>

</html>