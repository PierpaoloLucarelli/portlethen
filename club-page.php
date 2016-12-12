
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
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="assets/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="assets/css/calendar.css" rel="stylesheet">
    <script type="text/javascript" src="assets/js/jquery.min.js" type="text/javascript"></script>
    <!-- Google Fonts-->
    <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
</head>
<body>
<div id="body-bg">

    <!-- Header -->
    <?php include "./includes/header.php"?>
    <!-- End Header -->
    <!-- Top Menu -->
    <?php  include "./includes/nav.php" ?>

    <div id="content">
        <div class="container background-white">
            <div class="row margin-vert-30">
                <div class="col-md-12">
                    <?php
                    $clubId = $_GET["clubid"];
                    include 'dbConfig.php';
                    $result = $db->query("SELECT clubs.*, genre.name, genre.description
                                    FROM clubs INNER JOIN genre ON clubs.genreID=genre.genreID
                                    where clubs.clubID={$clubId}");
                    $row = $result->fetch_assoc();
                    echo '
                                    <h2>'.$row['clubName'].'</h2>
                                    <div class="row">
                                        <div class="col-md-6 animate fadeIn">
                                            <img src="'.$row['clubImage'].'" alt="about-me" class="margin-top-10">
                                            <ul class="list-inline about-me-icons margin-vert-20">
                                                <li>
                                                    <a href="#">
                                                        <i class="fa-lg fa-border fa-linkedin"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa-lg fa-border fa-facebook"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa-lg fa-border fa-dribbble"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa-lg fa-border fa-google-plus"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 margin-bottom-10 animate fadeInRight">
                                            <h3 class="padding-top-10 pull-left">'.$row['clubName'].'
                                                <small>-'.$row['name'].'</small>
                                            </h3>
                                            <div class="clearfix"></div>
                                            <h4>
                                                <em>'.$row['clubDesc'].'</em>
                                            </h4>
                                            <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                                doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae.</p>
                                            <p>Voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur
                                                aut odit aut fugit, sed quia consequuntur magni. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                                        </div>
                                    </div>
                                    <div class="contact-info">
                                        <p>Contact Info</p>
                                        <p><strong>Mobile phone</strong>: '.$row['mobilePhone'].'</p>
                                        <p><strong>House phone</strong>: '.$row['housePhone'].'</p>
                                        <p><strong>Address:</strong> '.$row['address1'].', '.$row['city'].', '.$row['postcode'].', '.$row['country'].'</p>
                                    </div>
                                    <hr>';
                    echo '<div id="club-gallery" class="owl-carousel">';
                    $result2 = $db->query("SELECT * FROM photos");
                    while($row2 = $result2->fetch_assoc()){
                        echo '<div class="item"><img src="'.$row2['url'].'" alt="'.$row2['description'].'"></div>';
                    }
                    echo '</div>';
                    echo '<hr>
                                    <div class="row animate fadeInUp">
                                        <h2 class="text-center margin-top-10">'.$row['description'].'</h2>
                                        <p class="text-center margin-bottom-30">Aenean venenatis egestas iaculis. Donec non urna quam. Nullam consectetur condimentum dolor at bibendum.</p>
                                    </div>';
                    if(isset($_COOKIE['user'])){
                        $user = $_COOKIE['user'];
                        $result = $db->query("SELECT * FROM clubadmins WHERE clubID=".$row['clubID']);
                        $isAdmin = false;
                        while($newrow = $result->fetch_assoc()){
                            if($newrow['userID']==$user){
                                $isAdmin=true;
                                break;
                            }
                        }
                        if($isAdmin){
                            echo "<p>You are Logeed in as an admin of the Map</p>";
                            echo "<a href='admin/admin.php'>Add a new point</a><br>";
                            echo '<a href="editclub.php?clubId='.$clubId.'">Edit club</a>';
                        }
                    }
                    mysqli_close($db);
                    ?>
                    <hr class="margin-bottom-40">
                </div>
            </div>
        </div>
    </div>
    <div id="calendar_div">
        <?php
        $clubId = $_GET["clubid"];
        include 'dbConfig.php';
        $result = $db->query("SELECT * FROM events WHERE clubID=".$clubId);
        echo "
                         <div class='container event-container'><h2>Upcoming events</h2>";
        while($row = $result->fetch_assoc()){
            echo "
                                <div class='event'>
                                    <h2>".$row['title']."</h3>
                                    <p class='desc'>".$row['desc']."</p>
                                    <p class='date'>".$row['date']."</p>
                                </div>
                           ";
        }

        echo "</div>";

        ?>
    </div>
    <!-- === END CONTENT === -->
    <!-- === BEGIN FOOTER === -->
    <?php include "./includes/footer.php"?>
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
    <script src="assets/owl-carousel/owl.carousel.js"></script>
    <script src="assets/js/carousel.js" type="text/javascript"></script>
    <!-- End JS -->
</body>
</html>
<!-- === END FOOTER === -->
