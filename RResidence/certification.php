<?php
	session_start();
	
	if($_SESSION['type_of_reservation'] == "group") {
	 $numberOfPersons = $_SESSION['numberOfPersons'];
	}else {
		$numberOfpersons = 1;
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
						<?php if($_SESSION['soloRes'] == true) {?>
						<div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">                
                        </div>
                        <span class="progress-type">Certification</span>
                        <span class="progress-completed">Step 3 of 4</span>
						<?php }?>
						<?php if($_SESSION['groupRes'] == true) {?>
						<div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 87.5%;">                
                        </div>
                        <span class="progress-type">Certification</span>
                        <span class="progress-completed">Step 7 of 8</span>
						<?php }?>
                    </div>      
                </div>
                    <div class ="row" >
                        <div class="col-lg-12">
                            <div class ="container-fluid">
                                <div class ="page-header">
                                    <h3><i class="glyphicon glyphicon-file"></i> Certification</h3>
                                </div>
								    <p>Type of Reservation: <?php echo $_SESSION['type_of_reservation'];?><p>
								<?php if($_SESSION['type_of_reservation'] == "group") {?>
									<p>Number of persons: <?php echo $_SESSION['numberOfPersons'];?></p>
									<?php for($x = 1; $x<=$numberOfPersons; $x++) {
										echo "<p>Last Name of person ".$x." : " .$_SESSION['lastname'.$x]."</p>";
										echo "<p>First Name of person ".$x." : " .$_SESSION['firstname'.$x]."</p>";
										echo "<p>Middle Name of person ".$x." : " .$_SESSION['middlename'.$x]."</p>";
										echo "<p>Birthday of person ".$x." : " .$_SESSION['birthday'.$x]."</p>";
											if($_SESSION['gender'] == "combination") {
												echo "<p>Gender of person ".$x. " : " . $_SESSION['gender'.$x] . "</p>";
											}else{ 
												if($_SESSION['gender'] == "male") {
													echo "<p>Gender of person " .$x. ": Male";
												}else{
													echo "<p>Gender of person " .$x. ": Female";
												
												}
											}
									}
									?>
									<p>Preference: <?php echo $_SESSION['preference'];?></p>
									<p>Type Of Occupancy: <?php echo $_SESSION['type_of_occupancy'];?></p>
									<p>Email: <?php echo $_SESSION['email_add'];?></p>
									<p>Contact Number: <?php echo $_SESSION['contact_number'];?></p>
									<p>Move in date: <?php echo $_SESSION['move_in_date'];?></p>
								<?php }?>
								<?php if($_SESSION['type_of_reservation'] == "solo") {?>
									<p>Last Name: <?php echo $_SESSION['last_name'];?></p>
									<p>First Name: <?php echo $_SESSION['first_name'];?></p>
									<p>Middle Name: <?php echo $_SESSION['middle_name'];?></p>
									<p>Birthday: <?php echo $_SESSION['birthday'];?></p>
									<p>Gender: <?php echo $_SESSION['gender'];?></p>
									<p>Preference: <?php echo $_SESSION['preference'];?></p>
									<p>Type Of Occupancy: <?php echo $_SESSION['type_of_occupancy'];?></p>
									<p>Email: <?php echo $_SESSION['email_add'];?></p>
									<p>Contact Number: <?php echo $_SESSION['contact_number'];?></p>
									<p>Move in date: <?php echo $_SESSION['move_in_date'];?></p>
									
								<?php }?>
					<form action = "upload.php" method = "post" enctype = "multipart/form-data">
                                <p><label>Please upload an image of your ID or either of your parents' ID.</label></p>
								<?php if($_SESSION['type_of_reservation'] == "group") {?> <p>Upload one picture only please</p>
								<?php }?>
                                <div class="form-group">
                                    <input type="file" name = "file" required>
                                </div>
								<textarea name="suggestions" rows="10" cols="50">Write your suggestions here</textarea>
								<p>If you click next the you will be temporarily reserved</p>
                                <input type ="checkbox" name ="agreement" value ="agree" required>
                                I do solemnly swear that all the stated information are true and correct to the best of my knowledge and belief.
                            </div>
                        </div>
                    </div>
                    <hr>
						<div class = "pageButton">
							<ul class = "pager">
								<li><input type = "submit" value ="next" name = "submitcert" class="btn btn-default"></li>
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
