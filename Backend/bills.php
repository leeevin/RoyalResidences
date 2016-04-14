<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Royal Residence - Admin</title>

	<!-- Bootstrap core CSS -->

	<link href="css/bootstrap.min.css" rel="stylesheet">

	<link href="fonts/css/font-awesome.min.css" rel="stylesheet">
	<link href="css/animate.min.css" rel="stylesheet">

	<!-- Custom styling plus plugins -->
	<link href="css/custom.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/maps/jquery-jvectormap-2.0.3.css" />
	<link href="css/icheck/flat/green.css" rel="stylesheet" />
	<link href="css/floatexamples.css" rel="stylesheet" type="text/css" />

	<script src="js/jquery.min.js"></script>
	<script src="js/nprogress.js"></script>

	<!--[if lt IE 9]>
	<script src="../assets/js/ie8-responsive-file-warning.js"></script>
	<![endif]-->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>


<body class="nav-md">

	<div class="container body">
		<div class="main_container">
			<div class="col-md-3 left_col">
				<div class="left_col scroll-view">
					<div class="navbar nav_title" style="border: 0;">
						<a href="home.html" class="site_title"><i class="fa fa-home"></i> <span>Royal Residence</span></a>					
					</div>
					<div class="clearfix"></div>

					
					<!-- /menu prile quick info -->

					<br />

					<!-- sidebar menu -->
					<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

						<div class="menu_section">
							<h3>Admin</h3>
							<ul class="nav side-menu">
								<li><a ><i class="fa fa-bell"></i>  Home <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu" style="display: none">
										<li><a href="home.php">Dashboard</a>
										</li>
										<li><a href="vanotif.php">Notifications</a>
										</li>										
										<li><a href="vareserve.php">Reservations</a>
										</li>										
										<li><a href="vapay.php">Payments</a>
										</li>
									</ul>
									</li>
								<li><a href="bills.php"><i class="fa fa-money"></i> Bills</a>									
								</li>
								<li><a href="reports.php"><i class="fa fa-folder"></i> Reports</a>									
								</li>
								<li><a href="accounts.php"><i class="fa fa-group"></i> Accounts</a>									
								</li>
								</li>
								<li><a><i class="fa fa-key"></i> Contracts <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu" style="display: none">
										<li><a href="viewallcontract.php">View List of all Contracts</a>
										</li>
										<li><a href="managerooms.php">Manage Contracts</a>
										</li>							
										<li><a href="contractagreement.php">Contract Agreement</a>
										</li>
										<li><a href="contractoflease.php">Contract of Lease</a>
										</li>
									</ul>
								</li>
								<li><a><i class="fa fa-building"></i> Rooms <span class="fa fa-chevron-down"></span></a>
										<ul class="nav child_menu" style="display: none">
										<li><a href="roomassignment.php">Room Assignment</a>
										</li>
										<li><a href="rooms.php">View Rooms</a>
										</li>								
									</ul>								
								</li>
								<li><a href="registration.php"><i class="fa fa-pencil"></i>  Register New Admin</a>									
								</li>
								<li><a ><i class="fa fa-code"></i> Edit<span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu" style="display: none">
										<li><a href="editrates.php">Edit Rates</a>
										</li>
										<li><a href="editsite.php">Edit Site Details</a>
										</li>										
										<li><a href="editrooms.php">Edit Rooms</a>
										</li>									
									</ul>
								</li>
								<li><a href="index.php"><i class="fa fa-power-off"></i> Logout</a>									
								</li>
							</ul>
						</div>
					</div>
					<!-- /sidebar menu -->

				</div>
			</div>

			<!-- top navigation -->
			<div class="top_nav">

				<div class="nav_menu">
					  <nav class="" role="navigation">
						<div class="nav toggle">
						  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
						</div>
						<ul class="nav navbar-nav navbar-right">
						  <li class="">
							<a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
							  Admin Name
							</a>							
						  </li>
						</ul>
					  </nav>
        </div>
			</div>
			<!-- /top navigation -->


			<!-- page content -->
			<div class="right_col" role="main">

				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="dashboard_graph">
							<div class="row x_title">
								<div class="col-md-6">
									<h3>Bills</h3>
								</div>
								<form action="generateBills.php" method="post">
									<button type="submit" class="btn btn-deark btn-xs" name="formSubmit" value="Submit">Generate Bill</button>
								</form>
							</div>

							
							<div class="col-md-7">
							  <div class="x_panel">
								<div class="x_title">
								  <h2>City Services <small>For the month of <b>____________</b></small></h2>
								  
								  <div class="clearfix"></div>
								</div>
								<div class="x_content">
								  <table class="table table-hover">
									<thead>
									  <tr>
										<th>UNIT</th>
										<th>ELECTRICITY</th>
										<th>WATER</th>
									  </tr>
									</thead>
									<tbody>
									<form class="form-inline" action="save_cityServices.php" method="post">
									<?php
										$servername = "localhost";
										$dbusername = "root";
										$dbpassword = "";
										$db = "royaldb";
										
										try{
											$conn = new PDO("mysql:host=$servername;dbname=$db", $dbusername, $dbpassword);
											// set the PDO error mode to exception
											$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
											$sql = "SELECT * FROM city_services"; 
											$res = $conn->query($sql);
											$x = 1;
											while($rowSub = $res->fetch(PDO::FETCH_LAZY)){
											  echo "<tr>";
												echo "<td><div class='col-md-5'>".$rowSub['unitNo']."</div></td>";
												echo "<td><div class='col-md-9'><input type='text' class='form-control col-md-7 col-xs-12' id='inputSuccess2' name='electricity".$x."' value='".$rowSub['electricityBill']."'> </div></td>";
												echo "<td><div class='col-md-9'><input type='text' class='form-control col-md-7 col-xs-12'  id='inputSuccess2' name='water".$x."' value='".$rowSub['waterBill']."'> </div></td>";
												echo "<td hidden><div class='col-md-9'><input type='text' class='form-control col-md-7 col-xs-12'  id='inputSuccess2' ' name='".$x."' value='0'> </div></td>";
											  echo "</tr>";
											  ++$x;
											}
									?>	
									</tbody>
								  </table>

								</div>
							  </div>
							</div>
							
							<br>
							<div class="form-group">
								  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
									<button type="submit" class="btn btn-success" name="formSubmit" value="Submit">Submit</button>
								  </div>
								</div>
							</form>
							<?php
							}catch(PDOException $e){
								echo "Connection failed: " . $e->getMessage();
							}
							?>
							<div class="table-responsive">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th>DATE</th>
											<th>PARTICULARS</th>
											<th>REF</th>
											<th>RATE</th>
											<th>SECURITY DEPOSIT</th>
											<th>ADVANCE RENTAL</th>
											<th>CITY SERVICES</th>
											<th>MEAL TICKET</th>
											<th>DISTILLED WATER</th>
											<th>MISC</th>								 
											<th>TOTAL BILLING</th>
											<th>PAYMENT MADE</th>
											<th>BALANCE</th>
										</tr>
									</thead>
									<tbody>
									<?php
																			$servername = "localhost";
																			$dbusername = "root";
																			$dbpassword = "";
																			$db = "royaldb";
																			
																			try{
																				$conn2 = new PDO("mysql:host=$servername;dbname=$db", $dbusername, $dbpassword);
																				// set the PDO error mode to exception
																				$conn2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
																				$sql2 = "SELECT * FROM currentBills;";
																				$res2 = $conn2->query($sql2);
																				while($rowSub2 = $res2->fetch(PDO::FETCH_LAZY)){
																		?>
																			 <tr>
																				 <td><?php echo $rowSub2['billingDate'];?></td>
																				 <td><?php echo $rowSub2['billingDate'];?></td>
																				 <td><?php echo $rowSub2['billNo'];?></td>
																				 <td><?php echo $rowSub2['rate'];?></td>
																				 <td><?php echo $rowSub2['securityDeposit'];?></td>
																				 <td><?php echo $rowSub2['advanceRental'];?></td>
																				 <td><?php echo $rowSub2['cityServices'];?></td>
																				 <td><?php echo $rowSub2['mealTicket'];?></td>
																				 <td><?php echo $rowSub2['dH20'];?></td>
																				 <td><?php echo $rowSub2['misc'];?></td>
																				 <td><?php echo $rowSub2['totalBilling'];?></td>
																				 <td><?php echo $rowSub2['amountPaid'];?></td>
																				 <td><?php echo $rowSub2['remainingBalance'];?></td>
																			 </tr>
																			 
																		<?php
																				}
																			}catch(PDOException $e){
																				echo "Connection failed: " . $e->getMessage();
																			}
																		?> 
										</tbody>
									</table>
								</div>
							<div class="clearfix"></div>
						</div>
					</div>

				</div>
				<br />

			</div>
			<!-- /page content -->
		</div>
	</div>

	
	
	
	<script src="js/bootstrap.min.js"></script>	
	<script src="js/custom.js"></script>
	<script>
		NProgress.done();
	</script>	
</body>

</html>
