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
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.2/dist/leaflet.css" />
        <script src="https://unpkg.com/leaflet@1.0.2/dist/leaflet.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <!-- Google Fonts-->
        <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
    </head>
    <body>

        <div id="body-bg">

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
            <div class="clear"></div>

            <div class="container" id="map">
                <div id="mapid"></div>
                <div id="info"></div>
            </div>
            <?php
                        if(isset($_COOKIE['user'])){
                            $user = $_COOKIE['user-access-level'];
                            if($user=='nkpag'){
                                echo "<p>You are Logeed in as an admin of the Map</p>";
                                echo "<a href='admin/admin.php'>Add a new point</a>";
                            }

                        }
            ?>
            <div id="footer" class="background-grey">
                <div class="container">
                    <div class="row">
                        <!-- Footer Menu -->
                        <div id="footermenu" class="col-md-8">
                            <ul class="social-icons pull-right">
                                <li class="social-rss">
                                    <a href="#" target="_blank" title="RSS"></a>
                                </li>
                                <li class="social-twitter">
                                    <a href="#" target="_blank" title="Twitter"></a>
                                </li>
                                <li class="social-facebook">
                                    <a href="#" target="_blank" title="Facebook"></a>
                                </li>
                                <li class="social-googleplus">
                                    <a href="#" target="_blank" title="Google+"></a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Footer Menu -->
                        <!-- Copyright -->
                        <div id="copyright" class="col-md-4">
                            <p class="pull-right">2016 Your Copyright Info &copy;</p>
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
            <script type="text/javascript">

    $(document).ready(function() {
        $.getJSON('https://nodemapsystem.azurewebsites.net/api/points', function(data) {
            // data.forEach(function (e) {
                // var marker = L.marker([e.start_lat, e.start_long]).addTo(mymap);
                // marker.bindPopup("<b>"+ e.name +"</b>"+"<br>" + e.length +"<br>").openPopup();
                // e.items.forEach(function(r){
                //
                // })
                // console.log(data[0].name);
                for (var i = 0; i < data.length; ++i) {

                    var marker = L.CircleMarker.extend({
                        options: {
                            name: data[i].name,
                            info: data[i].info,
                            img_url: data[i].img_url,
                            postcode: data[i].postcode
                        }
                    });

                    var myMarker = new marker(([data[i].lat, data[i].long]));
                    myMarker.bindPopup("<b>"+ data[i].name +"</b>").openPopup();
                    myMarker.addTo(mymap).on('click', function(){
                            $('#mapid').css("width", "70%");
                            $("#info").show(100);
                            $("#info").html("<div><b>"+this.options.name+"</b><br>"
                                +this.options.info+"<br>"
                                +"<img id='dataImg' src='"+this.options.img_url+"'><br>"
                                +this.options.postcode+"<br></div>");
                        });



                // for routes uncomment this ***********************************
        //      L.Routing.control({
                //        waypoints: [
                //          L.latLng(data[i].lat, data[i].long),
                //          L.latLng(data[i+1].lat, data[i+1].long)
                //          // L.latLng(data[i].start, data[i].end_long)
                //        ]
                //      }).addTo(mymap);

                // for (var name in data[i]) {

          //        // console.log(name + "=" + data[i][name]);
                // }
                }
        })
    });

</script>
            <script type="text/javascript">
    // create and import
    var mymap = L.map('mapid').setView([57.153513, -2.093938],11);
    L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
        attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
        maxZoom: 18,
        id: 'lefkou.2bb36d63',
        accessToken: 'pk.eyJ1IjoibGVma291IiwiYSI6ImNpbjM4ODQ2MDAwcnF3NW0xcnA5dGdpbDIifQ.oRI7UxrIVAn09kqnlxx53Q'
    }).addTo(mymap);

    mymap.on('click', function(e) {
        $("#info").hide(100);
        $('#mapid').css("width", "100%");
    });

    // var popup = L.popup();

    // function onMapClick(e) {
    //  popup
    //  .setLatLng(e.latlng)
    //  .setContent("You clicked the map at " + e.latlng.toString())
    //  .openOn(mymap);
    // }
    // mymap.on('click', onMapClick);

</script>

            <!-- End JS -->
    </body>
</html>
<!-- === END FOOTER === -->
