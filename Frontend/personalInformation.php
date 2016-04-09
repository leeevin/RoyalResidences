<?php
session_start();
include('connect.php');
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
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">About</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li class ="active"><a href="reg_1_solo_group.php">Reservation</a></li>
                    <li><a href="reservationStatus.php">Reservation Status</a></li>
                </ul>
			</div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">
        <div class="container-fluid">
        <div class ="row" >
            <div class="col-lg-12" class="container-fluid">
                <h1 class="page-header">Registration
                </h1>
                <div class="row">
                    <div class="progress" id="progress1" style="margin-top: 20px; margin-bottom: 0px;">
                        <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">                
                        </div>
                        <span class="progress-type">Personal Information</span>
                    </div>      
                </div>
                <!--<div class="progress">
                    <div class="progress-bar progress-bar-info" role="progressbar" style="width:25%">
                        Room Reservation
                    </div>
                    <div class="progress-bar progress-bar-danger" role="progressbar" style="width:25%">
                        Personal Information
                    </div>
                    <div class="progress-bar progress-bar-danger" role="progressbar" style="width:25%">
                        Other Personal Information
                    </div>
                    <div class="progress-bar progress-bar-danger" role="progressbar" style="width:25%">
                            Certification
                    </div>
                </div> -->
                    <div class ="row" >
                        <div class ="page-header">
                            <h3><i class="glyphicon glyphicon-user"></i> Personal Information</h3>
                        </div>
					<form action = "errorPage.php" method = "post">
                        <div class ="row">
                            <div class="col-md-7">
                                <div class="col-md-6">
                                    <div class="control-group form-group">
                                        <div class="controls">
                                            <label>Title</label>
                                            <input type ="text" class ="form-control" placeholder="Mr./Ms./Mrs." name = "title" required>
                                        </div>
                                    </div>
									<?php
										$resCode = $_SESSION['reservation_code'];
										$sql = "SELECT lastName, firstName, middleName, birthday, email_add, gender FROM reservation where reservationCode = $resCode;";
										$result = $conn->query($sql);
										if ($result->num_rows > 0) {
											while($row = $result->fetch_assoc()) {
									?>
                                    <div class="control-group form-group">
                                        <div class="controls">
                                           <label>Last Name:</label>
                                            <?php
											$_SESSION['lastName'] = $row['lastName'];
											echo $_SESSION['lastName'];
											?>
                                        </div>
                                    </div>
                                    <div class="control-group form-group">
                                        <div class="controls">
                                           <label>First Name:</label>
                                            <?php
											$_SESSION['firstName'] = $row['firstName'];
											echo $_SESSION['firstName'];
											?>
                                        </div>
                                    </div>
                                    <div class="control-group form-group">
                                        <div class="controls">
                                           <label>Middle Name:</label>
                                            <?php
											$_SESSION['middleName'] = $row['middleName'];
											echo $_SESSION['middleName'];
											?>
                                        </div>
                                    </div>
                                    <div class="control-group form-group">
                                        <div class="controls">
                                            <label>Birthday:</label>
                                            <?php
											$_SESSION['birthday'] = $row['birthday'];
											$_SESSION['email_add'] = $row['email_add'];
											$_SESSION['gender'] = $row['gender'];
											echo $_SESSION['birthday'];
									}
								}
											?>
                                        </div>
                                    </div>
                                    <div class="control-group form-group">
                                        <div class="controls">
                                           <label>Nationality:</label>
                                            <input type ="text" class ="form-control" name = "nationality" required>
                                        </div>
                                    </div>
                                    <div class="control-group form-group">
                                        <div class="controls">
                                            <label>Civil Status:</label>
                                            <p class="help-block"></p>
                                            <label class="radio-inline">
                                              <input type="radio" name="civil_status" id="inlineRadio1" value="male"> Single
                                            </label>
                                            <label class="radio-inline">
                                              <input type="radio" name="civil_status" id="inlineRadio2" value="female"> Married
                                            </label>
                                        </div>
										 <div class="controls">
                                            <label>Occupational Status:</label>
                                            <p class="help-block"></p>
                                            <label class="radio-inline">
                                              <input type="radio" name="occupation_status" id="inlineRadio1" value="student"> Student
                                            </label>
                                            <label class="radio-inline">
                                              <input type="radio" name="occupation_status" id="inlineRadio2" value="employed"> Employed
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="control-group form-group">
                                        <div class="controls">
                                           <label>Religion:</label>
                                            <input type ="text" class ="form-control" name = "religion">
                                        </div>
                                    </div>
                                    <div class="control-group form-group">
                                        <div class="controls">
                                           <label>Provincial Address:</label>
                                            <label>House number: <label><input type ="text" class ="form-control" name = "house_no" required>
											<label>Street: <label><input type ="text" class ="form-control" name = "street" required>
											<label>Barangay: <label><input type ="text" class ="form-control" name = "barangay" required>
											<label>Municipality: <label><input type ="text" class ="form-control" name = "municipality" required>
											<label>Province: <label><input type ="text" class ="form-control" name = "province" required>
                                        </div>
                                    </div>
                                    <div class="control-group form-group">
                                        <div class="controls">
                                           <label>International Address:</label>
                                            <input type ="text" class ="form-control" name = "internation_address">
                                        </div>
                                    </div>
                                    <div class="control-group form-group">
                                        <div class="controls">
                                           <label>ID Number:</label>
                                            <input type ="text" class ="form-control" name = "id_number" required>
                                        </div>
                                    </div>
                                    <div class="control-group form-group">
                                        <div class="controls">
                                           <label>Passport Number:</label>
                                            <input type ="text" class ="form-control" name = "passport_number">
                                        </div>
                                    </div>
                                    <div class="control-group form-group">
                                        <div class="controls">
                                           <label>Phone Number:</label>
                                            <input type ="text" class ="form-control" name = "contact_number" required>
                                        </div>
                                    </div>
                                    <div class="control-group form-group">
                                        <div class="controls">
                                           <label>Referred By:</label>
                                            <input type ="text" class ="form-control" name = "referred_by">
                                        </div>
                                    </div>
                                </div>
                    
                        </div>
							<?php if (isset($_SESSION['errors'])): ?>
												<?php foreach($_SESSION['errors'] as $error): ?>
													<p><?php echo $error; ?></p>
												<?php endforeach; ?>
										<?php endif; ?>
                        <hr>
                            <div class = "pageButton">
								<ul class = "pager">
									<li><button type="submit" name="submitPerIn" class="btn btn-default">Next</button></li>
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
