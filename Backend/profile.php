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
										<li><a href="roomassignment.php">Room Assignment</a>
										</li>
										<li><a href="contractoflease.php">Contract of Lease</a>
										</li>
									</ul>
								</li>
								<li><a href="rooms.php"><i class="fa fa-building"></i> Rooms</a>									
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
			
			<!--PHP HERE-->
									
			<?php
				$servername = "localhost";
				$dbusername = "root";
				$dbpassword = "";
				$db = "royaldb";
				
										
				$per_page=1;
				
				if (isset($_GET["tenantID"])) {
					$tenantID = $_GET["tenantID"];
					try{
						$conna = new PDO("mysql:host=$servername;dbname=$db", $dbusername, $dbpassword);
						// set the PDO error mode to exception
						$conna->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
						$sqla = " SELECT rank FROM (SET @rank=0;
								SELECT @rank:=@rank+1 AS rank, contractdetails.*, tenant.*, other_charges.*
								FROM contractdetails JOIN tenant 
								ON tenant.tenantId = contractdetails.tenantId
								JOIN other_charges ON other_charges.tenantId = contractdetails.tenantId) WHERE tenantId = $tenantID";
						$res = $conn->query($sql);
						while($rowSub = $res->fetch(PDO::FETCH_LAZY)){
							$start_from = $rowSub['rank'];
						}
						
					}catch(PDOException $e){
						echo "Connection failed: " . $e->getMessage();
					}
				}else {
					$page=1;
				}
				
				if (isset($_GET["page"])) {
					$page = $_GET["page"];
				}else {
					$page=1;
				}
										
				// Page will start from 0 and Multiple by Per Page
				$start_from = ($page-1) * $per_page;
				
				try{
					$conn = new PDO("mysql:host=$servername;dbname=$db", $dbusername, $dbpassword);
					// set the PDO error mode to exception
					$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					$sql = "SELECT contractdetails.*, tenant.*, other_charges.*
							FROM contractdetails JOIN tenant 
							ON tenant.tenantId = contractdetails.tenantId
							JOIN other_charges ON other_charges.tenantId = contractdetails.tenantId
							LIMIT $start_from, $per_page";
					$res = $conn->query($sql);
					while($rowSub = $res->fetch(PDO::FETCH_LAZY)){
			?>


			<!-- page content -->
			<div class="right_col" role="main">
			
			<?php
				$query1 = "SELECT contractdetails.*, tenant.*
							FROM contractdetails JOIN tenant 
							ON tenant.tenantID = contractdetails.tenantID";
				$total_records = $conn->query($query1)->rowCount();
				$total_pages = ceil($total_records / $per_page);
				
				if($page == 1){
					$previous = $total_records;
					if($previous == $total_records){
						$next = 1+1;
					} else{
						$next = $previous+2;
					}
					
				}else{
					$previous = --$page;
					$next = $previous+2;
					if($next == $total_records+1){
						$next = 1;
					}
					
				}
				?>

				<div class="row">
							<ul class="pager">
							 <li class="previous"><a href="accounts.html">View All Tenants</a></li>
							 
							 <li class="previous"><a href="<?php echo 'profile.php?page='.$previous?>">&larr; Previous Tenant</a></li>
							 
							 <li class="next"><a href="<?php echo 'profile.php?page='.$next?>">Next Tenant &rarr; </a></li>
							</ul>

					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="dashboard_graph">
							<div class="row x_title">
								<div class="col-md-6">
								<?php
									echo "<h3>".$rowSub['firstName']."&nbsp;".$rowSub['lastName']."</h3>";
								?>
								</div>
								<div class="col-md-6">
								</div>
							</div>

							
							
							
							
							<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="col-lg-3">
			<div class="panel panel-success">								
								<div class="panel-body">
									<img class="img-responsive" src="tenant/tenant.png" alt="">
								</div>
								<div class="panel-footer">
									<button type="button" class="btn btn-default">Change Profile Picture</button>
								</div>
            </div>
		</div>
		
			<div class="col-lg-9">
			
				<div class="page-header">                               
								<div class="row">
									<div class="col-lg-12">

										<ul id="myTab" class="nav nav-tabs nav-justified">
											<li class="active"><a href="#personalInformation" data-toggle="tab" style="color: black" aria-expanded="true"><i class="glyphicon glyphicon-user"></i> Personal Information</a>
											</li>
											<li class=""><a href="#billingInformation" data-toggle="tab" style="color: black" aria-expanded="false"><i class="fa fa-fw fa-money"></i> Bill Information</a>
											</li>	
																						
										</ul>

										<div id="myTabContent" class="tab-content">
											<div class="tab-pane fade active in" id="personalInformation">	<br>											
												<div class="col-lg-12">
													<div class="col-lg-2"><label for="Name">Name:</label></div>
													<div class="col-lg-4"><label for="Name"><input type="text" class="form-control" id="Name" value="<?php echo $rowSub['firstName']." ".$rowSub['lastName'];?>"></label></div>
												</div>
												<div class="col-lg-12">
													<div class="col-lg-2"><label for="Name">Tenant ID:</label></div>
													<div class="col-lg-4"><label for="Name"><input type="text" class="form-control" id="Name" value="<?php echo $rowSub['tenantId'];?>"></label></div>
												</div>
												<div class="col-lg-12">
													<div class="col-lg-2"><label for="Name">Room:</label></div>
													<div class="col-lg-4"><label for="Name"><input type="text" class="form-control" id="Name" value="<?php echo $rowSub['room'];?>"></label></div>
												</div>	
												<div class="col-lg-12">
													<div class="col-lg-2"><label for="Name">Contract Number:</label></div>
													<div class="col-lg-4"><label for="Name"><input type="text" class="form-control" id="Name" value="<?php echo $rowSub['contractNo'];?>"></label></div>
												</div>
												<div class="col-lg-12"><br>
													<ul class="pager">
													 <button type="button" class="btn btn-success">Update Information</button>
													</ul>
												</div>												
											</div>
											
											<div class="tab-pane fade" id="billingInformation">
											<br>
											<form class="form-inline" action="saveBillInfo.php" method="post">
												<div class="col-lg-12">
													<div class="col-lg-2"><label for="Name">Contract Start:</label></div>
													<div class="col-lg-4"><label for="Name"><input type="Date" class="form-control" id="Name" value="<?php echo $rowSub['moveInDate'];?>"></label></div>
													<div class="col-lg-2"><label for="Name">Contract End:</label></div>
													<div class="col-lg-4"><label for="Name"><input type="Date" class="form-control" id="Name" value="<?php echo $rowSub['expectedTerminationDate'];?>"></label></div>												
												</div>
												<div class="col-lg-12">
													<div class="col-lg-2"><label for="Name">Contract Number:</label></div>
													<div class="col-lg-4"><label for="Name"><input type="text" class="form-control" id="Name" value="<?php echo $rowSub['contractNo'];?>"></label></div>
												</div>
												<div class="col-lg-12">
													<div class="col-lg-2"><label for="Name">Rate:</label></div>
													<div class="col-lg-4"><label for="Name"><input type="text" class="form-control" id="Name" value="<?php echo $rowSub['monthlyRate'];?>"></label></div>
												</div>
												<div class="col-lg-12">
													<div class="col-lg-2"><label for="Name">Miscelleneous:</label></div>
													<div class="col-lg-4"><label for="Name"><input type="text" name="misc" class="form-control" id="Name" value="<?php echo $rowSub['misc'];?>"></label></div>
												</div>
												<div class="col-lg-12">
													<div class="col-lg-2"><label for="Name">Meal Ticket/s:</label></div>
													<div class="col-lg-2"><label for="Name"><input type="text" class="form-control" name="mealTicket" id="Name" placeholder=" Enter Qty." value="<?php echo $rowSub['mealTicket'];?>"></label></div>													
													<div class="col-lg-4"><button type="submit" class="btn btn-primary">Add</button></div>
												</div>												
												<div class="col-lg-12"><br>
													<div hidden>
														<input type="text" name="page" value="<?php echo $page; ?>">
														<input type="text" name="tenantId" value="<?php echo $rowSub['tenantId']; ?>">
													</div>
													<ul class="pager">
													 <button type="submit" class="btn btn-success" name="formSubmit" value="Submit">Update Information</button>
													</ul>
												</div>
											
																
											</form>	
											</div>
											
											
								            
										</div>
									</div>
								</div>
				</div>
			
			</div>
			
			<?php
			$tenantID1 = $rowSub['tenantId'];
			}
				}catch(PDOException $e){
					echo "Connection failed: " . $e->getMessage();
				}
			?>
		
				
    
							
							
												<br>
												<div class="col-lg-12">
												<h4><i class="fa fa-fw fa-tasks"></i> Ledger </h4>
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
																				$conn1 = new PDO("mysql:host=$servername;dbname=$db", $dbusername, $dbpassword);
																				// set the PDO error mode to exception
																				$conn1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
																				$sql1 = "SELECT contractdetails.*, bills.*, tenant.*, payment.* FROM contractdetails INNER JOIN bills ON bills.tenantID = contractdetails.tenantID INNER JOIN tenant ON tenant.tenantID = bills.tenantID INNER JOIN payment ON payment.billNo = bills.billNo WHERE tenant.tenantId = '$tenantID1'";
																				$res1 = $conn1->query($sql1);
																				while($rowSub1 = $res1->fetch(PDO::FETCH_LAZY)){
																		?>
																			 <tr>
																				 <td><?php echo $rowSub1['billingDate'];?></td>
																				 <td><?php echo $rowSub1['billingDate'];?></td>
																				 <td><?php echo $rowSub1['billNo'];?></td>
																				 <td><?php echo $rowSub1['monthlyRate'];?></td>
																				 <td><?php echo $rowSub1['securityDeposit'];?></td>
																				 <td><?php echo $rowSub1['advanceRental'];?></td>
																				 <td><?php echo $rowSub1['cityServices'];?></td>
																				 <td><?php echo $rowSub1['mealTicket'];?></td>
																				 <td><?php echo $rowSub1['dH20'];?></td>
																				 <td><?php echo $rowSub1['misc'];?></td>
																				 <td><?php echo $rowSub1['totalBilling'];?></td>
																				 <td><?php echo $rowSub1['amountPaid'];?></td>
																				 <td><?php echo $rowSub1['remainingBalance'];?></td>
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
																</div>

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
