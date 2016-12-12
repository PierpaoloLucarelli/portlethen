
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
            <?
            if(isset($_POST['update']))
            {
                $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                $clubId = $_GET["clubId"];
                $name = $_POST['name'];
                $clubDesc = $_POST['clubDesc'];
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
                $result = $db->query("UPDATE clubs c JOIN genre g ON c.genreID = g.genreID
                    SET c.clubName = '".$name."', g.name = '".$category."', g.description='".$description."',
                    c.clubImage='".$clubImage."', c.clubDesc='".$clubDesc."', c.mobilePhone='".$mobilePhone."',
                    c.housePhone='".$housePhone."', c.address1='".$address."', c.city='".$city."',
                    c.postcode='".$postcode."', c.country='".$country."' WHERE c.clubID=".$clubId);
                    echo "edit ok <a href='editclub.php?clubId=".$clubId."'>Return to edit</a>";

            } else {

                include 'dbConfig.php';
                $clubId = $_GET["clubId"];
                $result = $db->query("SELECT clubs.*, genre.name, genre.description
                    FROM clubs INNER JOIN genre ON clubs.genreID=genre.genreID
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
                            <input name="name" value="'.$row['clubName'].'" placeholder="'.$row['clubName'].'" class="form-control" type="text">
                        </div>
                        <div class="input-group margin-bottom-20">
                            <span class="input-group-addon">
                                <i class="fa fa-user"></i>
                            </span>
                            <input name="clubDesc" value="'.$row['clubDesc'].'" placeholder="'.$row['clubDesc'].'" class="form-control" type="textarea">
                        </div>
                        <div class="input-group margin-bottom-20">
                            <span class="input-group-addon">
                                <i class="fa fa-lock"></i>
                            </span>
                            <input placeholder="'.$row['name'].'" class="form-control" value="'.$row['name'].'" name="category" type="text">
                        </div>
                        <div class="input-group margin-bottom-20">
                            <span class="input-group-addon">
                                <i class="fa fa-lock"></i>
                            </span>
                            <input placeholder="'.$row['description'].'" class="form-control" value="'.$row['description'].'" name="description" type="textarea">
                        </div>
                        <div class="input-group margin-bottom-20">
                            <span class="input-group-addon">
                                <i class="fa fa-lock"></i>
                            </span>
                            <input placeholder="'.$row['clubImage'].'" class="form-control" value="'.$row['clubImage'].'" name="clubImage" type="text">
                        </div>
                        <div class="input-group margin-bottom-20">
                            <span class="input-group-addon">
                                <i class="fa fa-lock"></i>
                            </span>
                            <input placeholder="'.$row['mobilePhone'].'" class="form-control" value="'.$row['mobilePhone'].'" name="mobilePhone" type="text">
                        </div>
                        <div class="input-group margin-bottom-20">
                            <span class="input-group-addon">
                                <i class="fa fa-lock"></i>
                            </span>
                            <input placeholder="'.$row['housePhone'].'" class="form-control" value="'.$row['housePhone'].'" name="housePhone" type="text">
                        </div>
                        <div class="input-group margin-bottom-20">
                            <span class="input-group-addon">
                                <i class="fa fa-lock"></i>
                            </span>
                            <input placeholder="'.$row['address1'].'" class="form-control" value="'.$row['address1'].'" name="address" type="text">
                        </div>
                        <div class="input-group margin-bottom-20">
                            <span class="input-group-addon">
                                <i class="fa fa-lock"></i>
                            </span>
                            <input placeholder="'.$row['city'].'" class="form-control" value="'.$row['city'].'" name="city" type="text">
                        </div>
                        <div class="input-group margin-bottom-20">
                            <span class="input-group-addon">
                                <i class="fa fa-lock"></i>
                            </span>
                            <input placeholder="'.$row['postcode'].'" class="form-control" value="'.$row['postcode'].'" name="postcode" type="text">
                        </div>
                        <div class="input-group margin-bottom-20">
                            <span class="input-group-addon">
                                <i class="fa fa-lock"></i>
                            </span>
                            <input placeholder="'.$row['country'].'" class="form-control" value="'.$row['country'].'" name="country" type="text">
                        </div>
                        <div class="row">
                                <div class="col-md-6">
                                    <button class="btn btn-primary pull-right" name="update" value="update" type="submit">Save changes</button>
                                </div>
                            </form>
                </div>';
            }

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
