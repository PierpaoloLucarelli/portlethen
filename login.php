<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <!-- Title -->
    <title>Habitat - A Professional Bootstrap Template</title>
    <!-- Meta -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!-- Favicon -->
    <link href="favicon.ico" rel="shortcut icon">
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/nexus.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/custom.css" rel="stylesheet">
    <!-- Google Fonts-->
    <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="body-bg">
        <!-- Phone/Email -->
        <div id="pre-header" class="background-gray-lighter">
            <div class="container no-padding">
                <div class="row hidden-xs">
                    <div class="col-sm-6 padding-vert-5">
                        <strong>Phone:</strong>&nbsp;1-800-123-4567
                    </div>
                    <div class="col-sm-6 text-right padding-vert-5">
                        <strong>Email:</strong>&nbsp;info@joomla51.com
                    </div>
                </div>
            </div>
        </div>
        <!-- End Phone/Email -->
        <!-- Header -->
        <div id="header">
            <div class="container">
                <div class="row">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="index.html" title="">
                            <img src="assets/img/logo.png" alt="Logo" />
                        </a>
                    </div>
                    <!-- End Logo -->
                </div>
            </div>
        </div>
        <!-- End Header -->
        <!-- Top Menu -->
        <?php  include "./includes/nav.php" ?>
        <!-- === END HEADER === -->
        <!-- === BEGIN CONTENT === -->
        <div id="content">
            <div class="container background-white">
                <div class="container">
                    <div class="row margin-vert-30">
                        <!-- Login Box -->
                        <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                                <!-- The HTML login form -->
                                <form action="loginProcess.php" method="post" class="login-page">
                                    <div class="login-header margin-bottom-30">
                                        <h2>Login to your account</h2>
                                    </div>
                                    <div class="input-group margin-bottom-20">
                                        <span class="input-group-addon">
                                            <i class="fa fa-user"></i>
                                        </span>
                                        <input name="username" placeholder="Username" class="form-control" type="text">
                                    </div>
                                    <div class="input-group margin-bottom-20">
                                        <span class="input-group-addon">
                                            <i class="fa fa-lock"></i>
                                        </span>
                                        <input placeholder="Password" class="form-control" name="password" type="password">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="checkbox">
                                                <input type="checkbox">Stay signed in</label>
                                            </div>
                                            <div class="col-md-6">
                                                <button class="btn btn-primary pull-right" name="submit" value="Login" type="submit">Login</button>
                                            </div>
                                        </div>
                                        <hr>
                                        <h4>Forget your Password ?</h4>
                                        <p>
                                            <a href="#">Click here</a>to reset your password.</p>
                                        </form>
                                </div>
                                <!-- End Login Box -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- === END CONTENT === -->
                <!-- === BEGIN FOOTER === -->
                <div id="base">
                    <div class="container bottom-border padding-vert-30">
                        <div class="row">
                            <!-- Disclaimer -->
                            <div class="col-md-4">
                                <h3 class="class margin-bottom-10">Disclaimer</h3>
                                <p>All stock images on this template demo are for presentation purposes only, intended to represent a live site and are not included with the template or in any of the Joomla51 club membership plans.</p>
                                <p>Most of the images used here are available from
                                    <a href="http://www.shutterstock.com/" target="_blank">shutterstock.com</a>. Links are provided if you wish to purchase them from their copyright owners.</p>
                                </div>
                                <!-- End Disclaimer -->
                                <!-- Contact Details -->
                                <div class="col-md-4 margin-bottom-20">
                                    <h3 class="margin-bottom-10">Contact Details</h3>
                                    <p>
                                        <span class="fa-phone">Telephone:</span>1-800-123-4567
                                        <br>
                                        <span class="fa-envelope">Email:</span>
                                        <a href="mailto:info@example.com">info@example.com</a>
                                        <br>
                                        <span class="fa-link">Website:</span>
                                        <a href="http://www.example.com">www.example.com</a>
                                    </p>
                                    <p>The Dunes, Top Road,
                                        <br>Strandhill,
                                        <br>Co. Sligo,
                                        <br>Ireland</p>
                                    </div>
                                    <!-- End Contact Details -->
                                    <!-- Sample Menu -->
                                    <div class="col-md-4 margin-bottom-20">
                                        <h3 class="margin-bottom-10">Sample Menu</h3>
                                        <ul class="menu">
                                            <li>
                                                <a class="fa-tasks" href="#">Placerat facer possim</a>
                                            </li>
                                            <li>
                                                <a class="fa-users" href="#">Quam nunc putamus</a>
                                            </li>
                                            <li>
                                                <a class="fa-signal" href="#">Velit esse molestie</a>
                                            </li>
                                            <li>
                                                <a class="fa-coffee" href="#">Nam liber tempor</a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <!-- End Sample Menu -->
                                </div>
                            </div>
                        </div>
                        <!-- Footer -->
                        <div id="footer" class="background-grey">
                            <div class="container">
                                <div class="row">
                                    <!-- Footer Menu -->
                                    <div id="footermenu" class="col-md-8">
                                        <ul class="list-unstyled list-inline">
                                            <li>
                                                <a href="#" target="_blank">Sample Link</a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank">Sample Link</a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank">Sample Link</a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank">Sample Link</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End Footer Menu -->
                                    <!-- Copyright -->
                                    <div id="copyright" class="col-md-4">
                                        <p class="pull-right">(c) 2014 Your Copyright Info</p>
                                    </div>
                                    <!-- End Copyright -->
                                </div>
                            </div>
                        </div>
                        <!-- End Footer -->
                        <!-- JS -->
                        <script type="text/javascript" src="assets/js/jquery.min.js" type="text/javascript"></script>
                        <script type="text/javascript" src="assets/js/bootstrap.min.js" type="text/javascript"></script>
                        <script type="text/javascript" src="assets/js/scripts.js"></script>
                        <!-- Isotope - Portfolio Sorting -->
                        <script type="text/javascript" src="assets/js/jquery.isotope.js" type="text/javascript"></script>
                        <!-- Mobile Menu - Slicknav -->
                        <script type="text/javascript" src="assets/js/jquery.slicknav.js" type="text/javascript"></script>
                        <!-- Animate on Scroll-->
                        <script type="text/javascript" src="assets/js/jquery.visible.js" charset="utf-8"></script>
                        <!-- Sticky Div -->
                        <script type="text/javascript" src="assets/js/jquery.sticky.js" charset="utf-8"></script>
                        <!-- Slimbox2-->
                        <script type="text/javascript" src="assets/js/slimbox2.js" charset="utf-8"></script>
                        <!-- Modernizr -->
                        <script src="assets/js/modernizr.custom.js" type="text/javascript"></script>
                        <!-- End JS -->
                    </body>
                    </html>
                    <!-- === END FOOTER === -->
