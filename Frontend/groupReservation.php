<?php
	session_start();
	$relationship = $_SESSION['relationship'];
	$gender = $_SESSION['gender'];
	
	if($gender == "mixture" && $relationship == "others") {
		header('location: sorryNotSiblings.php');
	}
	$numberOfPersons = $_SESSION['numberOfPersons'];
	
	$_SESSION['preference'] = $_POST['preference'];
	$_SESSION['type_of_occupancy'] = $_POST['type_of_occupancy'];
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
                <a class="navbar-brand" href="index.html">Royal Residence</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.html">About</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li class ="active"><a href="reg_1_solo_group.php">Reservation</a></li>
                    <li><a href="status.html">Reservation Status</a></li>
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
					<form method = "POST" action = "checkRooms.php">
                        <div class ="row">
                            <div class="col-md-7">
                              
								<div class="control-group form-group">
                                    
								<?php
								for($x = 1; $x<=$numberOfPersons; $x++) {
									$lastname = ${'last_name'.$x};
									$firstname = ${'first_name'.$x};
									$middlename = ${'middle_name'.$x};
									$birthday = ${'birthday'.$x};
								?> 	
									<div class="controls">
                                        <label>Last Name of person <?php echo $x;?>:</label>
                                        <p class="help-block"></p>
                                        <label class="radio-inline">
                                          <input type="text" name= <?php echo $lastname;?> id="inlineRadio1" required>
                                        </label>
										<label>First Name of person <?php echo $x;?>:</label>
                                        <p class="help-block"></p>
                                        <label class="radio-inline">
                                          <input type="text" name= <?php echo $firstname;?> id="inlineRadio1" required>
                                        </label>
										<label>Middle Name of person <?php echo $x;?></label>
                                        <p class="help-block"></p>
                                        <label class="radio-inline">
                                          <input type="text" name= <?php echo $middlename;?> id="inlineRadio1" required>
                                        </label>
										<label>Birthday of person <?php echo $x;?></label>
                                        <p class="help-block"></p>
                                        <label class="radio-inline">
                                          <input type="text" name= <?php echo $birthday;?> id="inlineRadio1" required>
                                        </label>
                                    </div>
								<?php
								}
								?>
                                </div>
                        </div>
                        <hr>
                            <div class = "pageButton">
                                <ul class = "pager">
									<li><button type="submit" name="submitgr2">Next</button></li>
								</ul>
                            </div>
						</form>
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
