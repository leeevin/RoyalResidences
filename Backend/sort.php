<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Royal Residence - Admin</title>

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
                <a class="navbar-brand" href="index.php">Royal Residence</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                
				
				<ul class="nav navbar-nav navbar-right">			
								<li class="dropdown active" >
									  <a href="index.php" class="dropdown-toggle" data-toggle="dropdown">Home</a>
										<ul class="dropdown-menu">
											<li><a href="index.php">Dashboard</a></li>
											<li><a href="vanotif.php">View all Notifications</a></li>
											<li><a href="vareserve.php">View all Reservations</a></li>
											<li><a href="vapay.php">View all Payment Details</a></li>                
										</ul>
								</li>				
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
	<h2>Reservations</h2>
	<hr>
			<div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Reservations  </h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <table class="table table-bordered table-hover">
									<tr>
										<th>Date <a href="/backRoyal/sort.php?param=dateReserved"><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a></th>
										<th>Name <a href="/backRoyal/sort.php?param=firstName"><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a></th>
										<th>Move-in date <a href="/backRoyal/sort.php?param=expectedMoveInDate"><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a></th>
										<th>Payment</th>
										<th>Status <a href="/backRoyal/sort.php?param=status"><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a></th>
									</tr>
									<?php
										$servername = "localhost";
										$dbusername = "root";
										$dbpassword = "";
										$db = "royaldb";
										$param = $_GET['param'];
										
										try {
											$conn = new PDO("mysql:host=$servername;dbname=$db", $dbusername, $dbpassword);
											// set the PDO error mode to exception
											$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
											$sql = "SELECT * FROM reservation ORDER BY $param ASC";
											$res = $conn->query($sql);
											$counter = 1;
											if($res->rowcount() < 1) {
												
												echo "</table>";
												echo "<h4>No Applicants so Far :3</h4>";
												
											} else {
												while($rowSub = $res->fetch(PDO::FETCH_LAZY)){
													
													echo "<tr>";
													echo "<td>".$rowSub['dateReserved']."</td>";
													echo "<td>".$rowSub['firstName'].' '.$rowSub['lastName']."</td>";
													echo "<td>".$rowSub['expectedMoveInDate']."</td>";
													echo "<td>".$rowSub['status']."</td>";
													echo "<td><button type='button' class='btn btn-success'><a href=\"\backRoyal\confirmReservation.php?reservationCode=".$rowSub['reservationCode']."&site="."sort.php?param=".$param."&action=Void\">Confirm</a></button><button type='button' class='btn btn-danger'><a href=\"\backRoyal\cancelReservation.php?reservationCode=".$rowSub['reservationCode']."&site="."sort.php?param=".$param."&action=Action\">Reject</a></button></td>";
													echo "</tr>";
												}
											}
										}catch(PDOException $e){
											echo "Connection failed: " . $e->getMessage();
										}
									?>
								 </table>
                                </div>
                               
                            </div>
             </div>	
	<hr>					
    </div>
    
       
	   
	   
	   
	   
	   
	   
	   
            
        

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
	
	<!--Dropdown-->
	<script>
	$('ul.nav li.dropdown').hover(function() {
	  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
	}, function() {
	  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
	});
	</script>
	
</body>

</html>
