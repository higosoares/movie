<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Movies</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!-- //for-mobile-apps -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link rel="stylesheet" href="css/contactstyle.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="css/faqstyle.css" type="text/css" media="all"/>
    <link href="css/single.css" rel='stylesheet' type='text/css'/>
    <link href="css/medile.css" rel='stylesheet' type='text/css'/>
    <!-- banner-slider -->
    <link href="css/jquery.slidey.min.css" rel="stylesheet">
    <!-- //banner-slider -->
    <!-- pop-up -->
    <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- //pop-up -->
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <!-- //font-awesome icons -->
    <!-- js -->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <!-- //js -->
    <!-- banner-bottom-plugin -->
    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all">
    <script src="js/owl.carousel.js"></script>
    <script>
        $(document).ready(function () {
            $("#owl-demo").owlCarousel({

                autoPlay: 3000, //Set AutoPlay to 3 seconds

                items: 5,
                itemsDesktop: [640, 4],
                itemsDesktopSmall: [414, 3]

            });

        });
    </script>
    <!-- //banner-bottom-plugin -->
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300'
          rel='stylesheet' type='text/css'>
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
</head>

<body>
<!-- header -->
<div class="header">
    <div class="container">
        <div class="w3layouts_logo">
            <a href="index.html"><h1>One<span>Movies</span></h1></a>
        </div>
        <div class="w3_search">
            <form action="#" method="post">
                <input type="text" name="Search" placeholder="Search" required="">
                <input type="submit" value="Go">
            </form>
        </div>
        <div class="w3l_sign_in_register">
            <ul>
                <li><a href="#" data-toggle="modal" data-target="#myModal">Login</a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //header -->
<!-- bootstrap-pop-up -->
<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                Sign In & Sign Up
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <section>
                <div class="modal-body">
                    <div class="w3_login_module">
                        <div class="module form-module">
                            <div class="toggle"><i class="fa fa-times fa-pencil"></i>
                                <div class="tooltip">Click Me</div>
                            </div>
                            <div class="form">
                                <h3>Login to your account</h3>
                                <form action="#" method="post">
                                    <input type="text" name="tx_email_user" placeholder="Email" required="true">
                                    <input type="password" name="tx_password_user" placeholder="Password"
                                           required="true">
                                    <input type="submit" value="Login">
                                </form>
                            </div>
                            <div class="form">
                                <h3>Create an account</h3>
                                <form action="#" method="post">
                                    <input type="text" name="tx_name_user" placeholder="Name" required="">
                                    <input type="email" name="tx_email_user" placeholder="Email Address"
                                           required="true">
                                    <input type="password" name="tx_password_user" placeholder="Password"
                                           required="true">
                                    <input type="submit" value="Register">
                                </form>
                            </div>
                            <div class="cta"><a href="#">Forgot your password?</a></div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<script>
    $('.toggle').click(function () {
        // Switches the Icon
        $(this).children('i').toggleClass('fa-pencil');
        // Switches the forms
        $('.form').animate({
            height: "toggle",
            'padding-top': 'toggle',
            'padding-bottom': 'toggle',
            opacity: "toggle"
        }, "slow");
    });
</script>
<!-- //bootstrap-pop-up -->
<!-- nav -->
<div class="movies_nav">
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="navbar-header navbar-left">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <nav>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.html">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Genres <b class="caret"></b></a>
                            <ul class="dropdown-menu multi-column columns-3">
                                <li>
                                    <div class="col-sm-4">
                                        <ul class="multi-column-dropdown">
                                            <li><a href="genres.html">Action</a></li>
                                            <li><a href="genres.html">Biography</a></li>
                                            <li><a href="genres.html">Crime</a></li>
                                            <li><a href="genres.html">Family</a></li>
                                            <li><a href="horror.html">Horror</a></li>
                                            <li><a href="genres.html">Romance</a></li>
                                            <li><a href="genres.html">Sports</a></li>
                                            <li><a href="genres.html">War</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4">
                                        <ul class="multi-column-dropdown">
                                            <li><a href="genres.html">Adventure</a></li>
                                            <li><a href="comedy.html">Comedy</a></li>
                                            <li><a href="genres.html">Documentary</a></li>
                                            <li><a href="genres.html">Fantasy</a></li>
                                            <li><a href="genres.html">Thriller</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4">
                                        <ul class="multi-column-dropdown">
                                            <li><a href="genres.html">Animation</a></li>
                                            <li><a href="genres.html">Costume</a></li>
                                            <li><a href="genres.html">Drama</a></li>
                                            <li><a href="genres.html">History</a></li>
                                            <li><a href="genres.html">Musical</a></li>
                                            <li><a href="genres.html">Psychological</a></li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
</div>
<!-- //nav -->
<div class="general_social_icons">
    <nav class="social">
        <ul>
            <li class="w3_twitter"><a href="#">Twitter <i class="fa fa-twitter"></i></a></li>
            <li class="w3_facebook"><a href="#">Facebook <i class="fa fa-facebook"></i></a></li>
            <li class="w3_dribbble"><a href="#">Dribbble <i class="fa fa-dribbble"></i></a></li>
            <li class="w3_g_plus"><a href="#">Google+ <i class="fa fa-google-plus"></i></a></li>
        </ul>
    </nav>
</div>

<!--general -->
<div class="general">
    @yield('content')
</div>
<!--//general -->
@yield('pop-ups')
<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="col-md-5 w3ls_footer_grid1_left">
            <p>&copy; 2018 Movies. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
        </div>
        <div class="col-md-7 w3ls_footer_grid1_right">
            <ul>
                <li>
                    <a href="genres.html">Movies</a>
                </li>
                <li>
                    <a href="contact.html">About Us</a>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
        $(".dropdown").hover(
            function () {
                $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                $(this).toggleClass('open');
            },
            function () {
                $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
    });
</script>
<!-- //Bootstrap Core JavaScript -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function () {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({easingType: 'easeOutQuart'});

    });
</script>
<!-- //here ends scrolling icon -->
</body>
</html>