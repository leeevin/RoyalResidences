<?php
include('session.php'); 
if(!isset($_SESSION['login_user'])){
header("location: tenantLogin.php");
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

    <title>Royal Residence - Tenant</title>

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
                <a class="navbar-brand" href="profile.php">Royal Residence</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">                                
								<li class="active"><a href="profile.php">Profile</a></li>
								<li><a href="contract.php">Contract</a></li>
								<li><a href="billStatement.php">Billing Statement</a></li>
								<li><a href="ledger.php">Ledger</a></li>
								<li> <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
				 </ul>
                    
        </div>
        <!-- /.container -->
    </nav>

   

    <!-- Page Content -->
    <div class="container">
<h2><?php echo $printFirstname . " " . $printLastname ?></h2>
	<hr>
	
		<div class="col-lg-3">
			<div class="panel panel-success">								
								<div class="panel-body">
									<img class="img-responsive" src="tenant/tenant.jpg" alt="">
								</div>
								<div class="panel-footer">
									<button type="button" class="btn btn-default">Change Profile Picture</button>
									<button type="button" class="btn btn-default">Update Phone Number</button>
								</div>
            </div>
		</div>
		
			<div class="col-lg-9">
			
				<div class="page-header">                               
								<div class="row">
									<div class="col-lg-12">

										<ul id="myTab" class="nav nav-tabs nav-justified">
											<li class="active"><a href="#personalInformation" data-toggle="tab" style="color: black" aria-expanded="true">Personal Information</a>
											</li>
											<li class=""><a href="#schoolInformation" data-toggle="tab" style="color: black" aria-expanded="false">School Information</a>
											</li>	
											<li class=""><a href="#familyInformation" data-toggle="tab" style="color: black" aria-expanded="false"> Family Information</a>
											</li>											
										</ul>

										<div id="myTabContent" class="tab-content">
											<div class="tab-pane fade active in" id="personalInformation">	<br>											
												<div class="col-lg-12">
													<div class="col-lg-3"><label for=" ">Full Name:</label></div>
													<div class="col-lg-3"> <?php echo $printFirstname . " " . $printLastname ?> </div>
													<div class="col-lg-3"><label for=" ">Gender:</label></div>
													<div class="col-lg-3">Female</div>
												</div>
												<div class="col-lg-12">
													<div class="col-lg-3"><label for=" ">Civil Status:</label></div>
													<div class="col-lg-3"><?php echo $printCivil ?></div>
													<div class="col-lg-3"><label for=" ">Birthdate:</label></div>
													<div class="col-lg-3"><?php
				 					$newvalue = date('m-d-y', strtotime($printBirthday)); 
				 					echo $newvalue ?></p></div>
												</div>
												<div class="col-lg-12">
													<div class="col-lg-3"><label for=" ">Religion:</label></div>
													<div class="col-lg-4"><?php echo $printReligion ?></div>
												</div>
												<div class="col-lg-12">
													<div class="col-lg-3"><label for=" ">ID Number:</label></div>
													<div class="col-lg-3"><?php echo $printIdNO ?></div>
													<div class="col-lg-3"><label for=" ">Phone Number:</label></div>
													<div class="col-lg-3"><?php echo $printPhoneNo  ?></div>
												</div>
												<div class="col-lg-12">
													<div class="col-lg-3"><label for=" ">Provincial Address:</label></div>
													<div class="col-lg-4"><?php echo $houseNo . " ".  $street . " " . $barangay . ",". $municipality . "," . $province ?></div>
												</div>
												<div class="col-lg-12">
													<div class="col-lg-3"><label for=" ">**International Address:</label></div>
													<div class="col-lg-4"><?php echo $printIntAddress ?></div>
												</div>
												<div class="col-lg-12">
													<div class="col-lg-3"><label for=" ">**Referred by:</label></div>
													<div class="col-lg-4"><?php echo $printReferredby ?>r</div>
												</div>
											</div>
											
											<div class="tab-pane fade" id="schoolInformation">
												<br>
												<div class="col-lg-12">
													<div class="col-lg-4"><label for=" ">Name of School - College:</label></div>
													<div class="col-lg-4"><?php echo $printCollege ?></div>
												</div>
												<div class="col-lg-12">
													<div class="col-lg-4"><label for=" ">Name of Highschool:</label></div>
													<div class="col-lg-4"><?php echo $printHighSchool ?></div>
												</div>
												<div class="col-lg-12">
													<div class="col-lg-4"><label for=" ">School Address (Highschool):</label></div>
													<div class="col-lg-4"><?php echo $printSchoolAddress?></div>
												</div>
												<div class="col-lg-12">
													<div class="col-lg-4"><label for=" ">Telephone Number:</label></div>
													<div class="col-lg-4"><?php echo $printTelNo ?></div>
												</div>
												<div class="col-lg-12">
													<div class="col-lg-4"><label for=" ">Course and Year:</label></div>
													<div class="col-lg-4"><?php echo $printCourseAndYear ?></div>
												</div>													
											</div>
											
											<div class="tab-pane fade" id="familyInformation"><br>
												<div class="col-lg-12">
													<div class="col-lg-2"><label for=" ">Father:</label></div>
													<div class="col-lg-3"><?php echo $printFatherName ?></div>
													<div class="col-lg-2"><label for=" ">Occupation:</label></div>
													<div class="col-lg-3"><?php echo $printFatherOcc  ?></div>
													<div class="col-lg-2"><label for=" ">Number:</label></div>
													<div class="col-lg-3"><?php echo $printFatherPhone  ?></div>
												</div>
												<div class="col-lg-12">
													<div class="col-lg-2"><label for=" ">Mother:</label></div>
													<div class="col-lg-3"><?php echo $printMotherName  ?></div>
													<div class="col-lg-2"><label for=" ">Occupation:</label></div>
													<div class="col-lg-3"><?php echo $printMotherOcc ?></div>
													<div class="col-lg-2"><label for=" ">Number:</label></div>
													<div class="col-lg-3"><?php echo $printMotherPhone ?></div>
												</div>
												<div class="col-lg-12">
													<div class="col-lg-2"><label for=" ">**Spouse:</label></div>
													<div class="col-lg-3"><?php echo $printSpouseName?></p></div>
													<div class="col-lg-2"><label for=" ">Occupation:</label></div>
													<div class="col-lg-3"><?php echo $printSpouseOcc ?></div>
													<div class="col-lg-2"><label for=" ">Number:</label></div>
													<div class="col-lg-3"><?php echo $printSpousePhone ?></div>
												</div>
												<div class="col-lg-12">
													<div class="col-lg-2"><label for=" ">Guardian:</label></div>
													<div class="col-lg-3"></div>
													<div class="col-lg-2"><label for=" ">Occupation:</label></div>
													<div class="col-lg-3"><?php echo $printGuardianName ?></div>
													<div class="col-lg-2"><label for=" ">Number:</label></div>
													<div class="col-lg-3"><?php echo $printGuardianPhone ?></div>
												</div>
											</div>
								            
										</div>
									</div>
									
								</div>
				</div>
							<div>
										<form method = "post" action = 'request.php'>
				<input type="submit" class="btn btn-default" name="btn_submit" value="Extend Contract" />
				<input type="submit" class="btn btn-default" name="btn_submit" value="Change room" />
				
			</form>
			</div>
			</div>
    
       
	   
	   
	   
	   
	   
	   
	   
            
        

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
