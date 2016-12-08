<?php
 $clubId = $_GET["clubId"];

 if(isset($_POST['update']))

 $name = $_POST['name'];
 $category = $_POST['category'];
 $description = $_POST['description'];
 $clubImage = $_POST['clubImage'];
 $mobilePhone = $_POST['mobilePhone'];
 $housePhone = $_POST['housePhone'];
 $address = $_POST['address'];
 $city = $_POST['city'];
 $postcode = $_POST['postcode'];
 $country = $_POST['country'];

 include 'dbConfig.php';

 $sql = $db->query("UPDATE clubs SET clubName = '$name', clubDesc = '$description', clubImage = '$clubImage' WHERE clubId =".$clubId);


?>
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
                            <a href="/" title="">
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
            <?php

            include 'dbConfig.php';
            $clubId = $_GET["clubId"];
            $result = $db->query("SELECT clubs.*, genre.name, genre.description, contactinfo.*
                FROM clubs INNER JOIN genre ON clubs.genreID=genre.genreID
                INNER JOIN contactinfo on clubs.infoID=contactinfo.infoID
                where clubs.clubID={$clubId}");
            $row = $result->fetch_assoc();

            echo '<div class="editform">
                <form action="" method="post" class="login-page">
                    <div class="login-header margin-bottom-30">
                        <h2>Edit club info</h2>
                    </div>
                    <div class="input-group margin-bottom-20">
                        <span class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </span>
                        <input name="name" placeholder="'.$row['clubName'].'" class="form-control" type="text">
                    </div>
                    <div class="input-group margin-bottom-20">
                        <span class="input-group-addon">
                            <i class="fa fa-lock"></i>
                        </span>
                        <input placeholder="'.$row['name'].'" class="form-control" name="category" type="text">
                    </div>
                    <div class="input-group margin-bottom-20">
                        <span class="input-group-addon">
                            <i class="fa fa-lock"></i>
                        </span>
                        <input placeholder="'.$row['description'].'" class="form-control" name="description" type="textarea">
                    </div>
                    <div class="input-group margin-bottom-20">
                        <span class="input-group-addon">
                            <i class="fa fa-lock"></i>
                        </span>
                        <input placeholder="'.$row['clubImage'].'" class="form-control" name="clubImage" type="text">
                    </div>
                    <div class="input-group margin-bottom-20">
                        <span class="input-group-addon">
                            <i class="fa fa-lock"></i>
                        </span>
                        <input placeholder="'.$row['mobilePhone'].'" class="form-control" name="mobilePhone" type="text">
                    </div>
                    <div class="input-group margin-bottom-20">
                        <span class="input-group-addon">
                            <i class="fa fa-lock"></i>
                        </span>
                        <input placeholder="'.$row['housePhone'].'" class="form-control" name="housePhone" type="text">
                    </div>
                    <div class="input-group margin-bottom-20">
                        <span class="input-group-addon">
                            <i class="fa fa-lock"></i>
                        </span>
                        <input placeholder="'.$row['address1'].'" class="form-control" name="address" type="text">
                    </div>
                    <div class="input-group margin-bottom-20">
                        <span class="input-group-addon">
                            <i class="fa fa-lock"></i>
                        </span>
                        <input placeholder="'.$row['city'].'" class="form-control" name="city" type="text">
                    </div>
                    <div class="input-group margin-bottom-20">
                        <span class="input-group-addon">
                            <i class="fa fa-lock"></i>
                        </span>
                        <input placeholder="'.$row['postcode'].'" class="form-control" name="postcode" type="text">
                    </div>
                    <div class="input-group margin-bottom-20">
                        <span class="input-group-addon">
                            <i class="fa fa-lock"></i>
                        </span>
                        <input placeholder="'.$row['country'].'" class="form-control" name="country" type="text">
                    </div>
                    <div class="row">
                            <div class="col-md-6">
                                <button class="btn btn-primary pull-right" name="update" value="update" type="submit">Save changes</button>
                            </div>
                        </form>
            </div>'

            ?>

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
