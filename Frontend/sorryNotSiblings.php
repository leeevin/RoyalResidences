<?php
session_start();
if(isset($_POST['submitnumpers'])) {
$_SESSION['numberOfPersons'] = $_POST['numberOfPersons'];
	if(empty($_SESSION['numberOfPersons'])) {
		$_SESSION['errors'] =  array("Please enter a number");
		header('location: reg_2_num_persons.php');
	}else if($_SESSION['numberOfPersons'] < 2) {
		$_SESSION['errors'] =  array("Please enter a number greater than or equal to 2");
		header('location: reg_2_num_persons.php');
	}else if($_SESSION['numberOfPersons'] > 4) {
		$_SESSION['errors'] =  array("Please enter a number less than or equal to 4");
		header('location: reg_2_num_persons.php');
	} else {
		unset($_SESSION['errors']);
	}
	
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
                    <li class ="active"><a href="reg_1_solo_group.php">Reservation</a></li>
                    <li><a href="reservationStatus.php">Reservation Status</a></li>
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
                        <div class ="row">
                            <div class="col-md-7">
                                <div class="control-group form-group">
									<p>Sorry persons that have different gender cannot share the same room if they are not siblings</p>
									<p>You can try our individual reservation. click <a href = "solo_reg_1.php"><span class="label label-default" style="font-size: 13px">here</span></a> to reserve individually.
									 
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
