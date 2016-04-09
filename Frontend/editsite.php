<!DOCTYPE html>
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
	
	<!-- AJAX-PHP IMAGE UPLOAD  -->
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script type="text/javascript">
	$(document).ready(function (e) {
		$("#uploadForm").on('submit',(function(e) {
			e.preventDefault();
			$.ajax({
				url: "upload.php",
				type: "POST",
				data:  new FormData(this),
				contentType: false,
				cache: false,
				processData:false,
				success: function(data)
				{
				$("#targetLayer").html(data);
				},
				error: function() 
				{
				} 	        
		   });
		}));
	});
	</script>

</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                
                <a class="navbar-brand" href="index.php">Royal Residence</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown" >
									  <a href="home.php" class="dropdown-toggle" data-toggle="dropdown">Home</a>
										<ul class="dropdown-menu">											
											<li><a href="home.php">Dashboard</a></li>			
											<li><a href="vanotif.php">View all Notifications</a></li>
											<li><a href="vareserve.php">View all Reservations</a></li>
											<li><a href="vapay.php">View all Payment Details</a></li>                
										</ul>
								</li>	
								<li class="active"><a href="editsite.php">Edit</a></li>
								<li><a href="registration.php">Registration</a></li>
								<li><a href="managerooms.php">Manage Rooms</a></li>
								<li><a href="accounts.php">Accounts</a></li>
								<li><a href="bills.php">Bills</a></li>
								<li><a href="reports.php">Reports</a></li>
								<li> <a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
				 </ul>
        </div>
        <!-- /.container -->
    </nav>

   

    <!-- Page Content -->
    <div class="container">
		<hr>
		<div class="row">
            <!-- Sidebar Column -->
            <div class="col-md-3">
                <div class="list-group">
                    <a href="editsite.php" class="list-group-item active">Edit Site Details</a>
                    <a href="editrates.php" class="list-group-item">Edit Rates</a>
                    <a href="editrooms.php" class="list-group-item">Edit Rooms</a>
                </div>
            </div>
            <!-- Content Column -->
            <div class="col-md-9">
				<h2>Edit Site Details</h2>
				<br>
                <div class="form-group">
                                            <label>Homepage - Welcome Introduction</label>
											<form action="save_site.php" method="post">
												<textarea name="siteDetails" class="form-control" rows="6">
													<?php
													$sql = "SELECT * FROM `aboutus_content`";
													
													$servername = "localhost";
													$dbusername = "root";
													$dbpassword = "";
													$db = "royaldb";
													
													try {
														$conn = new PDO("mysql:host=$servername;dbname=$db", $dbusername, $dbpassword);
														// set the PDO error mode to exception
														$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
														$sql = "SELECT * FROM aboutus_content WHERE aboutUsId = 1";
														$res = $conn->query($sql);
														$counter = 1;
														
														while($rowSub = $res->fetch(PDO::FETCH_LAZY)){
															echo $rowSub['aboutUs'];
														}
													}catch(PDOException $e){
														echo "Connection failed: " . $e->getMessage();
													}
													?>
												</textarea>
												
												<br>
												<div align="right">
													<button type="button" class="btn btn-link">Cancel</button>
													<input class="btn btn-primary" type="submit" name="formSubmit" value="Submit">
												</div>
											</form>
											
											
				</div>
				
				<hr>
				
				
				
				
				
				        <!-- CAROUSEL -->
					
								   <label>Add/Delete Images in Carousel</label>
       
		    
		<div class="row">
		<br> 
			<form id="uploadForm" action="upload.php" method="post">
			<div id="targetLayer">No Image</div>
			<div id="uploadFormLayer">
			<label>Upload Image File:</label><br/>
			<input name="userImage" type="file" class="inputFile" />
			<input type="submit" value="Submit" class="btnSubmit" />
			</form>
		</div>


		  
     
	<hr>
		
       
				
				
				 <!-- FACILITIES -->
			
			<label>Facilities</label>
			
			
			
		
			<div id="wrapper">
			<div class="col-md-4 portfolio-item">
				<div class="panel panel-default">
					  <div class="panel-heading">
						<h3 class="panel-title">Building Amenities</h3>
					  </div>
					  <div class="panel-body">
							<form action="demo_form.asp" method="get">
							  <input type="checkbox" name="vehicle" value=""> Stand-by power supply<br>
							  <input type="checkbox" name="vehicle" value="" checked> Free use of gym<br>
							  <br>
							  <input type="submit" value="Add information">
							  <input type="submit" value="Delete">
							</form>
					  </div>
				</div>
			</div>
			<div class="col-md-4 portfolio-item">
				<div class="panel panel-default">
					  <div class="panel-heading">
						<h3 class="panel-title">Room Features</h3>
					  </div>
					  <div class="panel-body">
							<form action="demo_form.asp" method="get">
							  <input type="checkbox" name="vehicle" value=""> Beds and Matresses<br>
							  <input type="checkbox" name="vehicle" value="" checked> Study Lamp<br>
							  <br>
							  <input type="submit" value="Add information">
							  <input type="submit" value="Delete">
							</form>
					  </div>
				</div>
			</div>
			<div class="col-md-4 portfolio-item">
				<div class="panel panel-default">
					  <div class="panel-heading">
						<h3 class="panel-title">Room Capacity</h3>
					  </div>
					  <div class="panel-body">
							<form action="demo_form.asp" method="get">
							  <input type="checkbox" name="vehicle" value=""> Solo Occupancy<br>
							  <input type="checkbox" name="vehicle" value="" checked> 2-Occupancy<br>
							  <br>
							  <input type="submit" value="Add information">
							  <input type="submit" value="Delete">
							</form>
					  </div>
				</div>
			</div>	
			
			</div>

				
				
				
				
				
			 <!-- cancel and save button -->	
			 
			 <div align="right">
				<button type="button" class="btn btn-link">Cancel</button>
				<input class="btn btn-primary" type="submit" value="Save">
				</div>
            </div>
        </div>
			
 

</div>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
