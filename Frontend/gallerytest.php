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
    
    <!-- Gallery CSS -->
    <link href="css/gallery.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
                    <li><a href="index.php">About</a></li>
                    <li class ="active"><a href="gallery.php">Gallery</a></li>
                    <li><a href="reg_1_solo_group.php">Reservation</a></li>
                    <li><a href="status.php">Reservation Status</a></li>
					<li><a href="tenantlogin.php">Log in</a></li>
                </ul>
            </div> 
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">
        <div class="container-fluid">
			<div class ="row" >
				<div class="col-lg-12">
					<h1 class="page-header">Gallery <button type="button" class="btn btn-default" data-toggle="modal" data-target=".toggleFullScreen" data-local="#myCarousel"><span class="glyphicon glyphicon-resize-full"></span> Toggle Full Screen</button>
					</h1>   
                </div>
                    <div class ="row" >
                        <div class="col-lg-12">
                            <div class ="container-fluid">
                                <!-- start -->
                                <div class="container">
                                    <div id="main_area">
                                        <!-- Slider -->
                                        <div class="row">
											<!-- Start of Carousel -->
                                            <div class="col-sm-8">
                                                <div class="col-xs-12" id="slider">
                                                    <!-- Top part of the slider -->
                                                    <div class="row">
                                                        <div class="col-sm-11" id="carousel-bounding-box">
                                                            <div class="carousel slide" id="myCarousel">
                                                                <!-- Carousel items -->
                                                                <div class="carousel-inner">
                                                                    <div class="active item" data-slide-number="0">
                                                                        <img class="img-responsive" src="images/1.JPG">
																		<div class="carousel-caption"><h5>2-Occupancy Room</h5></div>
																	</div>

                                                                    <div class="item" data-slide-number="1">
                                                                        <img class="img-responsive" src="images/2.JPG">
																		<div class="carousel-caption"><h5>4-Occupancy Room</h5></div>
																	</div>

                                                                    <div class="item" data-slide-number="2">
                                                                        <img class="img-responsive" src="images/3.JPG">
																		<div class="carousel-caption"><h5>4-Occupancy Room</h5></div>
																	</div>

                                                                    <div class="item" data-slide-number="3">
                                                                        <img class="img-responsive" src="images/4.JPG">
																		<div class="carousel-caption"><h5>Living Room</h5></div>
																	</div>

                                                                    <div class="item" data-slide-number="4">
                                                                        <img class="img-responsive" src="images/5.JPG">
																		<div class="carousel-caption"><h5>Living Room</h5></div>
																	</div>

                                                                    <div class="item" data-slide-number="5">
                                                                        <img class="img-responsive" src="images/6.JPG">
																		<div class="carousel-caption"><h5>Living Room</h5></div>
																	</div>

                                                                    <div class="item" data-slide-number="6">
                                                                        <img class="img-responsive" src="images/7.jpg">
																		<div class="carousel-caption"><h5>Gym</h5></div>
																	</div>

                                                                    <div class="item" data-slide-number="7">
                                                                        <img class="img-responsive" src="images/8.jpg">
																		<div class="carousel-caption"><h5>Gym</h5></div>
																	</div>

                                                                    <div class="item" data-slide-number="8">
                                                                        <img class="img-responsive" src="images/9.jpg">
																		<div class="carousel-caption"><h5>Dining Hall</h5></div>
																	</div>

                                                                    <div class="item" data-slide-number="9">
                                                                        <img class="img-responsive" src="images/10.jpg">
																		<div class="carousel-caption"><h5>Entertainment Room</h5></div>
																	</div>

                                                                    <div class="item" data-slide-number="10">
                                                                        <img class="img-responsive" src="images/11.jpg">
																		<div class="carousel-caption"><h5>Living Room</h5></div>
																	</div>

                                                                    <div class="item" data-slide-number="11">
                                                                        <img class="img-responsive" src="images/12.jpg">
																		<div class="carousel-caption"><h5>Wash Room</h5></div>
																	</div>

                                                                    <div class="item" data-slide-number="12">
                                                                        <img class="img-responsive" src="images/13.jpg">
																		<div class="carousel-caption"><h5>Guard House</h5></div>
																	</div>

																	<div class="item" data-slide-number="13">
                                                                        <img class="img-responsive" src="images/14.JPG">
																		<div class="carousel-caption"><h5>Elevator</h5></div>
																	</div>
																	
																	<div class="item" data-slide-number="14">
                                                                        <img class="img-responsive" src="images/15.JPG">
																		<div class="carousel-caption"><h5>Whole Building</h5></div>
																	</div>
																		
																	<div class="item" data-slide-number="15">
                                                                        <img class="img-responsive" src="images/16.JPG">
																		<div class="carousel-caption"><h5>Spa</h5></div>
																	</div>
																		
																	<div class="item" data-slide-number="16">
                                                                        <img class="img-responsive" src="images/17.JPG">
																		<div class="carousel-caption"><h5>Recreation Area</h5></div>
																	</div>
																		
																	<div class="item" data-slide-number="17">
                                                                        <img class="img-responsive" src="images/18.JPG">
																		<div class="carousel-caption"><h5>Coffee Shop and Snack bar</h5></div>
																	</div>
																		
																	<div class="item" data-slide-number="18">
                                                                        <img class="img-responsive" src="images/19.JPG">
																		<div class="carousel-caption"><h5>Royal Residence</h5></div>
																	</div>
																		
                                                                <!-- Carousel nav -->
																	<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
																		<span class="glyphicon glyphicon-chevron-left"></span>
																	</a>
																	<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
																		<span class="glyphicon glyphicon-chevron-right"></span>
																	</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- End of Carousel-->
											<!-- Start of Thumbnails -->
                                            <div id ="mymodal" class="col-sm-4" id="slider-thumbs">
                                                <!-- Bottom switcher of slider -->
                                                <ul class="hide-bullets">
                                                    <li class="col-sm-3">
                                                        <a class="thumbnail" id="carousel-selector-0">
                                                            <img class="img-responsive" src="images/1.jpg">
                                                        </a>
                                                    </li>

                                                    <li class="col-sm-3">
                                                        <a class="thumbnail" id="carousel-selector-1"><img class="img-responsive" src="images/2.JPG"></a>
                                                    </li>

                                                    <li class="col-sm-3">
                                                        <a class="thumbnail" id="carousel-selector-2"><img class="img-responsive" src="images/3.JPG"></a>
                                                    </li>

                                                    <li class="col-sm-3">
                                                        <a class="thumbnail" id="carousel-selector-3"><img class="img-responsive" src="images/4.jpg"></a>
                                                    </li>

                                                    <li class="col-sm-3">
                                                        <a class="thumbnail" id="carousel-selector-4"><img class="img-responsive" src="images/5.JPG"></a>
                                                    </li>

                                                    <li class="col-sm-3">
                                                        <a class="thumbnail" id="carousel-selector-5"><img class="img-responsive" src="images/6.JPG"></a>
                                                    </li>
													
                                                    <li class="col-sm-3">
                                                        <a class="thumbnail" id="carousel-selector-6"><img class="img-responsive" src="images/7.JPG"></a>
                                                    </li>

                                                    <li class="col-sm-3">
                                                        <a class="thumbnail" id="carousel-selector-7"><img class="img-responsive" src="images/8.JPG"></a>
                                                    </li>

                                                    <li class="col-sm-3">
                                                        <a class="thumbnail" id="carousel-selector-8"><img class="img-responsive" src="images/9.jpg"></a>
                                                    </li>

                                                    <li class="col-sm-3">
                                                        <a class="thumbnail" id="carousel-selector-9"><img class="img-responsive" src="images/10.jpg"></a>
                                                    </li>
													
                                                    <li class="col-sm-3">
                                                        <a class="thumbnail" id="carousel-selector-10"><img class="img-responsive" src="images/11.jpg"></a>
                                                    </li>

                                                    <li class="col-sm-3">
                                                        <a class="thumbnail" id="carousel-selector-11"><img class="img-responsive" src="images/12.jpg"></a>
                                                    </li>

                                                    <li class="col-sm-3">
                                                        <a class="thumbnail" id="carousel-selector-12"><img class="img-responsive" src="images/13.jpg"></a>
                                                    </li>
													
													<li class="col-sm-3">
                                                        <a class="thumbnail" id="carousel-selector-13"><img class="img-responsive" src="images/14.jpg"></a>
                                                    </li>
													
													<li class="col-sm-3">
                                                        <a class="thumbnail" id="carousel-selector-14"><img class="img-responsive" src="images/15.jpg"></a>
                                                    </li>
													
													<li class="col-sm-3">
                                                        <a class="thumbnail" id="carousel-selector-15"><img class="img-responsive" src="images/16.jpg"></a>
                                                    </li>
													
													<li class="col-sm-3">
                                                        <a class="thumbnail" id="carousel-selector-16"><img class="img-responsive" src="images/17.jpg"></a>
                                                    </li>
													
													<li class="col-sm-3">
                                                        <a class="thumbnail" id="carousel-selector-17"><img class="img-responsive" src="images/18.jpg"></a>
                                                    </li>
													
													<li class="col-sm-3">
                                                        <a class="thumbnail" id="carousel-selector-18"><img class="img-responsive" src="images/19.jpg"></a>
                                                    </li>
													
                                                </ul>
                                            </div>
											<!-- End of Thumbnails -->

                                    </div>
									<!-- Gallery -->
									<div class="modal fade toggleFullScreen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="padding-top: 3%">
										<div class="modal-dialog modal-lg">
											<div class="modal-content">
												<div class ="modal-header">
													<div id="carousel-example1-generic" class="carousel slide carousel-fit" data-ride="carousel">



													<!-- Wrapper for slides -->
													<div class="carousel-inner clearfix">
														<div class="active item" data-slide-number="0">
															<img class="img-responsive" src="images/1.JPG">
															<div class="carousel-caption"><h5>2-Occupancy Room</h5></div>
														</div>

														<div class="item" data-slide-number="1">
															<img class="img-responsive" src="images/2.JPG">
															<div class="carousel-caption"><h5>4-Occupancy Room</h5></div>
														</div>

														<div class="item" data-slide-number="2">
															<img class="img-responsive" src="images/3.JPG">
															<div class="carousel-caption"><h5>4-Occupancy Room</h5></div>
														</div>

														<div class="item" data-slide-number="3">
															<img class="img-responsive" src="images/4.JPG">
															<div class="carousel-caption"><h5>Living Room</h5></div>
														</div>

														<div class="item" data-slide-number="4">
															<img class="img-responsive" src="images/5.JPG">
															<div class="carousel-caption"><h5>Living Room</h5></div>
														</div>

														<div class="item" data-slide-number="5">
															<img class="img-responsive" src="images/6.JPG">
															<div class="carousel-caption"><h5>Living Room</h5></div>
														</div>

														<div class="item" data-slide-number="6">
															<img class="img-responsive" src="images/7.jpg">
															<div class="carousel-caption"><h5>Gym</h5></div>
														</div>

														<div class="item" data-slide-number="7">
															<img class="img-responsive" src="images/8.jpg">
															<div class="carousel-caption"><h5>Gym</h5></div>
														</div>

														<div class="item" data-slide-number="8">
															<img class="img-responsive" src="images/9.jpg">
															<div class="carousel-caption"><h5>Dining Hall</h5></div>
														</div>

														<div class="item" data-slide-number="9">
															<img class="img-responsive" src="images/10.jpg">
															<div class="carousel-caption"><h5>Entertainment Room</h5></div>
														</div>

														<div class="item" data-slide-number="10">
															<img class="img-responsive" src="images/11.jpg">
															<div class="carousel-caption"><h5>Living Room</h5></div>
														</div>

														<div class="item" data-slide-number="11">
															<img class="img-responsive" src="images/12.jpg">
															<div class="carousel-caption"><h5>Wash Room</h5></div>
														</div>

														<div class="item" data-slide-number="12">
															<img class="img-responsive" src="images/13.jpg">
															<div class="carousel-caption"><h5>Guard House</h5></div>
														</div>

														<div class="item" data-slide-number="13">
															<img class="img-responsive" src="images/14.JPG">
															<div class="carousel-caption"><h5>Elevator</h5></div>
														</div>
														
														<div class="item" data-slide-number="14">
															<img class="img-responsive" src="images/15.JPG">
															<div class="carousel-caption"><h5>Whole Building</h5></div>
														</div>
															
														<div class="item" data-slide-number="15">
															<img class="img-responsive" src="images/16.JPG">
															<div class="carousel-caption"><h5>Spa</h5></div>
														</div>
															
														<div class="item" data-slide-number="16">
															<img class="img-responsive" src="images/17.JPG">
															<div class="carousel-caption"><h5>Recreation Area</h5></div>
														</div>
															
														<div class="item" data-slide-number="17">
															<img class="img-responsive" src="images/18.JPG">
															<div class="carousel-caption"><h5>Coffee Shop and Snack bar</h5></div>
														</div>
															
														<div class="item" data-slide-number="18">
															<img class="img-responsive" src="images/19.JPG">
															<div class="carousel-caption"><h5>Royal Residence</h5></div>
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
									</div>
                                </div>
                                <!-- end -->
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
    <!-- /.container -->
            

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Hover popover -->
    <script>
    $(document).ready(function(){
        $('[data-toggle="popover"]').popover();   
    });
    </script>
        
    <!-- Progress Bar -->
    <script type="text/javascript">
    function resetActive(event, percent) {
        $(".progress-bar").css("width", percent + "%").attr("aria-valuenow", percent);
        $(".progress-completed").text(percent + "%");

        $("div").each(function () {
            if ($(this).hasClass("activestep")) {
                $(this).removeClass("activestep");
            }
        });

        if (event.target.className == "col-md-2") {
            $(event.target).addClass("activestep");
        }
        else {
            $(event.target.parentNode).addClass("activestep");
        }
    }
    </script>

    <!-- gallery javascript -->
    <script>
          jQuery(document).ready(function($) {
 
        $('#myCarousel').carousel({
                interval: 5000
        });
 
        //Handles the carousel thumbnails
        $('[id^=carousel-selector-]').click(function () {
        var id_selector = $(this).attr("id");
        try {
            var id = /-(\d+)$/.exec(id_selector)[1];
            console.log(id_selector, id);
            jQuery('#myCarousel').carousel(parseInt(id));
        } catch (e) {
            console.log('Regex failed!', e);
        }
    });
        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid.bs.carousel', function (e) {
                 var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
        });
});
    </script>
</body>

</html>
