<?php
	session_start();
	$numberOfPersons = $_SESSION['numberOfPersons'];
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
               <a class="navbar-brand" href="index.php">Royal Residence</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">About</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li class ="active"><a href="reg_1_solo_group.php">Reservation</a></li>
                    <li><a href="reservationStatus.php">Reservation Status</a></li>
					<li><a href="tenantlogin.php">Log in</a></li>
                </ul>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">
        <div class="container-fluid">
        <div class ="row" >
            <div class="col-lg-12">
                <h1 class="page-header">Registration
                </h1>
                <div class="row">
                    <div class="progress" id="progress1" style="margin-top: 20px; margin-bottom: 0px;">
                        <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">                
                        </div>
                        <span class="progress-type">Room Reservation</span>
                        <span class="progress-completed">25%</span>
                    </div>      
                </div>
                    <div class ="row" >
                        <div class ="page-header">
                            <h3><i class="glyphicon glyphicon-bed"></i> Reservation for an Occupancy</h3>
                        </div>
						<p>You are reserving a <?php echo $_SESSION['preference'];?> <?php echo $_SESSION['type_of_occupancy'];?> room. Click <a href = "groupReservation_1.php"><span class="label label-default" style="font-size: 13px">here</span></a> to change it. </p>
					<form method = "POST" action = "groupReservation_3.php">
                        <div class ="row">
                            <div class="col-lg-13">
									<div class="control-group form-group">
										
									<?php
									for($x = 1; $x<=$numberOfPersons; $x++) {
									?> 	
										
										<div class="controls-group form-group">
											<div class = "col-md-6">
												<div class ="col-md-12">
													<div class ="panel panel-primary">
														<div class ="panel-heading">Person <?php echo $x;?>: </div>
															<div class= "panel-body">
																<label>Last Name:</label>
																  <input type="text" class ="form-control" name= <?php echo 'last_name'.$x;?> id="inlineRadio1" required>
																<p class="help-block"></p>
																<label>First Name:</label>
																  <input type="text" class ="form-control" name= <?php echo 'first_name'.$x;?> id="inlineRadio1" required>
																<p class="help-block"></p>
																<label>Middle Name</label>
																  <input type="text" class ="form-control" name= <?php echo 'middle_name'.$x;?> id="inlineRadio1" required>
																<p class="help-block"></p>
																<label>Birthday</label>
																  <input type="date" class ="form-control" name= <?php echo 'birthday'.$x;?> id="inlineRadio1" required>
															</div>
													</div>
												</div>
											</div>
										</div>
									<?php
									}
									?>
									</div>
							</div>
						</div>
                        <hr>
                            <div class = "pageButton">
                                <ul class = "pager">
									<li><button type="submit" name="submitgr2" class="btn btn-default">Next</button></li>
								</ul>
                            </div>
						</form>
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
</body>

</html>
