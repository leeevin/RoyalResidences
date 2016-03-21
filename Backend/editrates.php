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
                    <a href="editsite.php" class="list-group-item">Edit Site Details</a>
                    <a href="editrates.php" class="list-group-item active">Edit Rates</a>
                    <a href="editrooms.php" class="list-group-item">Edit Rooms</a>
                </div>
            </div>
            <!-- Content Column -->
            <div class="col-md-9">
                <h2>Edit Rates</h2>
							<form class="form-inline" action="save_rates.php" method="post">
							<table>
									<tr>
										<th>Room Type</tdh>
										<th>&nbsp;&nbsp;</th>
										<th>Rate</th>
									</tr>
								<?php
									$servername = "localhost";
										$dbusername = "root";
										$dbpassword = "";
										$db = "royaldb";
										
										try {
											$conn = new PDO("mysql:host=$servername;dbname=$db", $dbusername, $dbpassword);
											// set the PDO error mode to exception
											$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
											$sql = "SELECT * FROM rates";
											$res = $conn->query($sql);
											while($rowSub = $res->fetch(PDO::FETCH_LAZY)){
												echo "<tr>";
												echo "<td><label for=".$rowSub['type'].">".$rowSub['type']."</label></td>";
												echo "<td>&nbsp;&nbsp;</td>";
												echo "<td><input type='text' class='form-control' value='".$rowSub['rate']."' name='".$rowSub['idRate']."'></td>";
												echo "</tr>";
											}
										}catch(PDOException $e){
											echo "Connection failed: " . $e->getMessage();
										}
							?>
							</table>
								<input type="submit" class="btn btn-primary" name="formSubmit" value="Submit">
							</form>
							
            </div>
        </div>
			
				


	   <hr>
            

</div>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
