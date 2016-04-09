<?php
session_start();
include('connect.php');
$_SESSION['reservation_code'] = $_POST['resId'];
$resID = $_SESSION['reservation_code'];


$sql = "SELECT status from reservation where reservationCode = '$resID'";
$results = mysqli_query($conn, $sql);

			if($results->num_rows > 0) {
				$row = mysqli_fetch_row($results);
				$status = $row[0];
				$invalidLogin = false;
			} else {
				$invalidLogin = true;
			}

		
		

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
                    <li><a href="reg_1_solo_group.php">Reservation</a></li>
                    <li class ="active"><a href="reservationStatus.php">Reservation Status</a></li>
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
                <h1 class="page-header">Reservation Status
                </h1>   
                </div>
                    <div class ="row" >
                        <div class="col-lg-12">
                            <div class ="container-fluid">
							 <?php
							  if($invalidLogin == true) {
							 ?>
								<p> Sorry you have entered an invalid reservation code. click <a href = "reservationStatus.php"><span class="label label-default" style="font-size: 13px">here</span></a> to enter a valid reservation code.</p>
							 <?php
							 }else if($status == "pending") {
							 ?>
								<p> Your reservation is still pending. Please pay PHP 1,000.00 If you already paid the reservation fee
								 please upload a picture of the receipt. 
								 </p>
								 <form action = "upload.php" method = "post" enctype = "multipart/form-data">
									<div class="form-group">
										<input type="file" name = "file" required>
									</div>
								<hr>
								<div class = "pageButton">
									<ul class = "pager">
										<li><input type = "submit" value ="Upload" name = "submitstat" class="btn btn-default"></li>
									</ul>
								</div>
								</form>
							  <?php
								}else if($status == "reserved"){
							  ?>
							  <p>You are now reserved. Please pay the one month advance and two months deposit. If you already paid the one month advance and two months deposit.</p>
								<form action = "upload.php" method = "post" enctype = "multipart/form-data">
									<div class="form-group">
										<input type="file" name = "file" required>
									</div>
								<hr>
								<div class = "pageButton">
									<ul class = "pager">
										<li><input type = "submit" value ="Upload" name = "submitdep" class="btn btn-default"></li>
									</ul>
								</div>
								</form>
							  <?php
							  }else {
							  ?>
								<p>Thank you for paying the one month advance and two months deposit</p>click 
								<a href = "personalInformation.php"><span class="label label-default" style="font-size: 13px">here</span></a> to fill up your registration form.
							  <?php
							  }
							  ?>
                            </div>
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
</body>

</html>
