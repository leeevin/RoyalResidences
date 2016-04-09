<?php
include('connect.php');
$dbc = mysqli_connect("localhost", "root", "", "royaldb");
$db = mysqli_select_db($dbc, "royaldb");

$amenitiesQuery = mysqli_query($dbc,"SELECT * FROM aboutus_amenities");
$aboutUsQuery = mysqli_query($dbc,"SELECT * FROM aboutus_content");
$roomFeatureQuery = mysqli_query($dbc,"SELECT * FROM aboutus_roomfeatures");
$roomFeatureQuery = mysqli_query($dbc,"SELECT * FROM aboutus_roomfeatures");
$roomCapacityQuery = mysqli_query($dbc,"SELECT * FROM aboutus_roomcapacities");
$telNoQuery = mysqli_query($dbc,"SELECT * FROM aboutus_contactdetails where type = 'Telephone Number'");
$mobileNoQuery = mysqli_query($dbc,"SELECT * FROM aboutus_contactdetails where type = 'Mobile Number'");
$emailQuery = mysqli_query($dbc,"SELECT * FROM aboutus_contactdetails where type = 'Email Address'");
$addressQuery = mysqli_query($dbc,"SELECT * FROM aboutus_contactdetails where type = 'Address'");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Royal Residence</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Royal Residence</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class ="active"><a href="index.php">About</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="reg_1_solo_group.php">Reservation</a></li>
                    <li><a href="reservationStatus.php">Reservation Status</a></li>
                </ul>
            </div>
        <!-- /.container -->
        </div>
    </nav>
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welcome to Royal Residence
                </h1>
            </div>
            <div class = "container-fluid">
                    <?php 
                             if ($aboutUsQuery) {
                                       while ($row = mysqli_fetch_array($aboutUsQuery,MYSQL_ASSOC)) {
                                                            $printAboutUs  = $row['aboutUs'];
                                                            echo ("<p> $printAboutUs </p>");
                                                        }
                                          } 
                       ?>
            </div>
            <div class="col-lg-12">
                <h1 class="page-header">
                    Facilities
                </h1>
            </div>
            <div class="col-md-8">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-home"></i> Building Amenities</h4>
                    </div>
                    <div class="panel-body">
                    <ul>
                          <?php 
                             if ($amenitiesQuery) {
                                       while ($row = mysqli_fetch_array($amenitiesQuery,MYSQL_ASSOC)) {
                                                            $printAmenities  = $row['amenities'];
                                                             echo("<li>$printAmenities</li>");
                                                        }
                                                    }
                       ?>
                    </ul>
                        <br />
                        
                        <a href="gallery.php" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><i class="glyphicon glyphicon-bed"></i> Room Features 
                            <i class="pull-right" data-toggle="modal" data-target=".bs-example1-modal-lg">
                                <span class="glyphicon glyphicon-question-sign" data-toggle="popover" data-trigger="hover" data-content="Click for images" data-placement="top"></span> 
                            </i>
                        </h4>
                    </div>
                    <div class="panel-body">
                     <ul>
                       <?php 
                             if ($roomFeatureQuery) {
                                       while ($row = mysqli_fetch_array($roomFeatureQuery,MYSQL_ASSOC)) {
                                                            $printRoomFeatures  = $row['feature'];
                                                             echo("<li>$printRoomFeatures</li>");
                                                        }
                                                    }
                       ?>
                    </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>
                            <i class="glyphicon glyphicon-user"></i> Room Capacity
                            <i class="pull-right" data-toggle="modal" data-target=".bs-example-modal-lg">
                            <span class="glyphicon glyphicon-question-sign" data-toggle="popover" data-trigger="hover" data-content="Click for images" data-placement="top"></span> 
                            </i>
                        </h4> 
                        
                        
                    </div>
                    <div class="panel-body">
                        <ul>
                            <?php 
                             if ($roomCapacityQuery) {
                                       while ($row = mysqli_fetch_array($roomCapacityQuery,MYSQL_ASSOC)) {
                                                            $printRoomCapacity  = $row['roomCapacity'];
                                                             echo("<li>$printRoomCapacity</li>");
                                                        }
                                                    }
                       ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <h1 class="page-header">
                <i class="fa fa-fw fa-map-marker"></i>Where are we located?              
            </h1>
        </div>
        
        <!-- Add Google Maps -->
        
        <div id="googleMap" style="height:500px;width:90%;" class ="container-fluid slideanim" ></div>
        <script src="http://maps.googleapis.com/maps/api/js"></script>
        <script>
            var myCenter = new google.maps.LatLng(16.423063, 120.601672);

            function initialize() {
            var mapProp = {
            center:myCenter,
            zoom:18,
            scrollwheel:false,
            draggable:true,
            mapTypeId:google.maps.MapTypeId.ROADMAP
            };

            var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

            var marker = new google.maps.Marker({
            position:myCenter,
            animation:google.maps.Animation.BOUNCE
            });
                
            var infowindow = new google.maps.InfoWindow({
              content:"Rimando Road, Aurora Hill, Baguio City"
            });
                
            google.maps.event.addListener(marker, 'mouseover', function() {
              infowindow.open(map,marker);
            });
                
            marker.addListener('mouseout', function() {
                infowindow.close();
            });

            marker.setMap(map);
            }

            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
        <!-- Footer -->
        <footer class ="container-fluid text-center">
            <div class="row">
            <h4>Contact details:</h4>
            <ul class="list-unstyled">
              <li>Tel. No: (074) 424-1300</li>
              <li>Mobile No: 0917-863-4007</li>
              <li>Email Address: bestway10cdc@yahoo.com</li>
              <li>Address: Rimando Road, Aurora Hill-Trancoville, Baguio City</li>
            </ul>
            </div>
        </footer>

    </div>
    <!-- /.container -->
            
            
    <!-- Room Capacity -->
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="padding-top: 3%">
        <div class="modal-dialog modal-lg">
            <div class="modal-content"style ="width: 80%;margin-left:auto;margin-right: auto;">
                <div class ="modal-header">
                    <div class ="modal-title">
                        <h4>Room Capacity</h4>
                    </div>
                    <div id="carousel-example-generic" class="carousel slide carousel-fit" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                    <div class="item active">
                    <img class="img-responsive" src="images/1.JPG" alt="...">
                    <div class="carousel-caption">
                    <h3>Solo Occupancy</h3>
                    </div>
                    </div>
                    <div class="item">
                    <img class="img-responsive" src="images/2.jpg" alt="...">
                    <div class="carousel-caption">
                    <h3>2-Occupancy</h3>
                    </div>
                    </div>
                    <div class="item">
                    <img class="img-responsive" src="images/3.JPG" alt="...">
                    <div class="carousel-caption">
                    <h3>3-Occupancy</h3>
                    </div>
                    </div>
                    <div class="item">
                    <img class="img-responsive" src="images/4.jpg" alt="...">
                    <div class="carousel-caption">
                    <h3>4-Occupancy</h3>
                    </div>
                    </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Room Capacity -->
        
    <!-- Room Features -->
    <div class="modal fade bs-example1-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="padding-top: 3%">
        <div class="modal-dialog modal-lg">
            <div class="modal-content"style ="width: 80%;margin-left:auto;margin-right: auto;">
                <div class ="modal-header">
                    <div class ="modal-title">
                        <h4>Room Features</h4>
                    </div>
                <div id="carousel-example1-generic" class="carousel slide carousel-fit" data-ride="carousel">



                <!-- Wrapper for slides -->
                <div class="carousel-inner clearfix">
                    <div class="item active">
                        <img class="img-responsive" src="images/4.jpg" alt="...">
                            <div class="carousel-caption">
                            <h3>Study table and chair with lamp</h3>
                            </div>
                    </div>
                    <div class="item">
                        <img class="img-responsive"  src="images/15.JPG" alt="...">
                            <div class="carousel-caption">
                            <h3>Private toilet and bathroom</h3>
                            </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example1-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example1-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
                </div>
            </div>
        </div>
    </div>
	<!-- End of Room Features -->
            
        

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

    <!-- Hover popover -->
    <script>
    $(document).ready(function(){
        $('[data-toggle="popover"]').popover();   
    });
    </script>
</body>

</html>
