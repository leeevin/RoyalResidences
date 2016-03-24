
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
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Royal Residence</a>
            </div>
            <!-- Top Menu Items -->
           
		   
		   
		   <ul class="nav navbar-right top-nav">                               
                <li class="dropdown">
                    <a " href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> ADMIN NAME <b class="caret"></b></a>
                    <ul class="dropdown-menu">                        
                        <li>
                            <a  href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a  href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
		   
		   
			
			
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
					<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-bar-chart-o"></i> Dashboard <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="vanotif.html">View All Notifications</a>
                            </li>
                            <li>
                                <a href="vareserve.html">View All Reservations</a>
                            </li>
							<li>
                                <a href="vapay.html">View all Payment Details</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="bills.html"><i class="fa fa-fw fa-money"></i> Bills</a>
                    </li>
                    <li>
                        <a href="reports.html"><i class="fa fa-fw fa-paperclip"></i> Reports</a>
                    </li>
                    <li class="active">
                        <a href="accounts.html"><i class="fa fa-fw fa-user"></i> Accounts</a>
                    </li>
                    <li>
                        <a href="registration.html"><i class="fa fa-fw fa-edit"></i> Registration</a>
                    </li>
                    <li>
                        <a href="managerooms.html"><i class="fa fa-fw fa-table"></i> Manage Rooms</a>
                    </li>
                    <li>
                        <a  href="editsite.html"><i class="fa fa-fw fa-wrench"></i> Edit Site</a>
                    </li>                                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">
			
			<ul class="pager">
			 <li class="previous"><a href="accounts.html">View All Tenants</a></li>
			 <li class="previous"><a href="#">&larr; Previous Tenant</a></li>
			 <li class="next"><a href="#">Next Tenant &rarr; </a></li>
			</ul>
			<?php
				$servername = "localhost";
				$dbusername = "root";
				$dbpassword = "";
				$db = "royaldb";
				
				try{
					$conn = new PDO("mysql:host=$servername;dbname=$db", $dbusername, $dbpassword);
					// set the PDO error mode to exception
					$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					$sql = "SELECT contractdetails.*, bills.*, tenant.* FROM bills JOIN contractdetails ON contractdetails.tenantID = bills.tenantID JOIN tenant ON tenant.tenantID = bills.tenantID WHERE bills.tenantID='RR1410010'";
					$res = $conn->query($sql);
					$rowSub = $res->fetch(PDO::FETCH_LAZY);

					echo "<h2>".$rowSub['firstName']."&nbsp;".$rowSub['lastName']."</h2>";
					
				}catch(PDOException $e){
					echo "Connection failed: " . $e->getMessage();
				}
				
			?>
	<hr>
		
			<div class="col-lg-9">
			
				<div class="page-header">                               
								<div class="row">
									<div class="col-lg-12">

										<ul id="myTab" class="nav nav-tabs nav-justified">
											<li class="active"><a href="#personalInformation" data-toggle="tab" style="color: black" aria-expanded="true"><i class="glyphicon glyphicon-user"></i> Tenant Information</a>
											</li>
											<li class=""><a href="#billingInformation" data-toggle="tab" style="color: black" aria-expanded="false"><i class="fa fa-fw fa-money"></i> Bill Information</a>
											</li>	
											<li class=""><a href="#updatePassword" data-toggle="tab" style="color: black" aria-expanded="false"><i class="glyphicon glyphicon-lock"></i> Update Password</a>
											</li>											
										</ul>

										<div id="myTabContent" class="tab-content">
											<div class="tab-pane fade active in" id="personalInformation">	<br>
												<form class="form-inline" action="save_fees.php" method="post">
												<?php
													
													$servername = "localhost";
													$dbusername = "root";
													$dbpassword = "";
													$db = "royaldb";
													
													try{
														$conn = new PDO("mysql:host=$servername;dbname=$db", $dbusername, $dbpassword);
														// set the PDO error mode to exception
														$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
														$sql = "SELECT contractdetails.*, bills.*, tenant.* FROM bills JOIN contractdetails ON contractdetails.tenantID = bills.tenantID JOIN tenant ON tenant.tenantID = bills.tenantID WHERE bills.tenantID='RR1410010'";
														$res = $conn->query($sql);
														$rowSub = $res->fetch(PDO::FETCH_LAZY);
												
														echo "<div class='col-lg-12'>";
															echo "<div class='col-lg-2'><label for='Name'>Name:</label></div>";
															echo "<div class='col-lg-4'><label for='Name'><input type='text' class='form-control' id='Name' value='".$rowSub['firstName']."&nbsp;".$rowSub['lastName']."'></label></div>";
														echo "</div>";
														echo "<div class='col-lg-12'>";
															echo "<div class='col-lg-2'><label for='Name'>Tenant ID:</label></div>";
															echo "<div class='col-lg-4'><label for='Name'><input type='text' class='form-control' id='Name' value='".$rowSub['tenantID']."'></label></div>";
														echo "</div>";
														echo "<div class='col-lg-12'>";
															echo "<div class='col-lg-2'><label for='Name'>Room:</label></div>";
															echo "<div class='col-lg-4'><label for='Name'><input type='text' class='form-control' id='Name' value='".$rowSub['room']."'></label></div>";
														echo "</div>";
														echo "<div class='col-lg-12'>";
															echo "<div class='col-lg-2'><label for='Name'>Contract Start:</label></div>";
															echo "<div class='col-lg-4'><label for='Name'><input type='Date' class='form-control' id='Name' value='".$rowSub['moveInDate']."'></label></div>";
															echo "<div class='col-lg-2'><label for='Name'>Contract End:</label></div>";
															echo "<div class='col-lg-4'><label for='Name'><input type='Date' class='form-control' id='Name' value='".$rowSub['expectedTerminationDate']."'></label></div>";							
														echo "</div>";
														echo "<div class='col-lg-12'>";
															echo "<div class='col-lg-2'><label for='Name'>Contract Number:</label></div>";
															echo "<div class='col-lg-4'><label for='Name'><input type='text' class='form-control' id='Name' value='".$rowSub['contractNo']."'></label></div>";
														echo "</div>";
														echo "<div class='col-lg-12'>";
															echo "<div class='col-lg-2'><label for='Name'>Rate:</label></div>";
															echo "<div class='col-lg-4'><label for='Name'><input type='text' class='form-control' id='Name' value='".$rowSub['monthlyRate']."'></label></div>";
														echo "</div>";
														echo "<div class='col-lg-12'>";
															echo "<div class='col-lg-2'><label for='Name'>Miscellaneous:</label></div>";
															echo "<div class='col-lg-4'><label for='Name'><input type='text' class='form-control' id='misc' value=''></label></div>";
														echo "</div>";
														echo "<div class='col-lg-12'>";
															echo "<div class='col-lg-2'><label for='Name'>Food:</label></div>";
															echo "<div class='col-lg-4'><label for='Name'><input type='text' class='form-control' id='food' value=''></label></div>";
														echo "</div>";												
														echo "<div class='col-lg-12'><br>";
															echo "<ul class='pager'>";
															echo "<input type='submit' class='btn btn-primary' name='formSubmit' value='Save Information'>";
															echo "</ul>";
														echo "</div>";
														echo "</form>";
														
													}catch(PDOException $e){
														echo "Connection failed: " . $e->getMessage();
													}
												?>
											</div>
											
											<div class="tab-pane fade" id="billingInformation">
												<br>
																<div class="table-responsive">
																	<table class="table table-bordered">
																		 <thead>
																			 <tr>
																				 <th>DATE</th>
																				 <th>PARTICULARS</th>
																				 <th>REF</th>
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
																			<?php
													
																				$servername = "localhost";
																				$dbusername = "root";
																				$dbpassword = "";
																				$db = "royaldb";
																				
																				try{
																					$conn = new PDO("mysql:host=$servername;dbname=$db", $dbusername, $dbpassword);
																					// set the PDO error mode to exception
																					$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
																					$sql = "SELECT contractdetails.*, bills.*, tenant.*, payment.* FROM contractdetails JOIN bills ON bills.tenantID = contractdetails.tenantID JOIN tenant ON tenant.tenantID = bills.tenantID JOIN payment ON payment.billNo = bills.billNo WHERE bills.tenantID='RR1410010'";
																					$res = $conn->query($sql);
																					
																					while($rowSub = $res->fetch(PDO::FETCH_LAZY)){
																						echo "<tbody>";
																						echo "<td>".$rowSub['billingDate']."</td>";
																						echo "<td>"."PARTICULARS HERE"."</td>";
																						echo "<td>".$rowSub['billNo']."</td>";
																						echo "<td>".$rowSub['securityDeposit']."</td>";
																						echo "<td>".$rowSub['advanceRental']."</td>";
																						echo "<td>".$rowSub['cityServices']."</td>";
																						echo "<td>".$rowSub['mealTicket']."</td>";
																						echo "<td>".$rowSub['dH20']."</td>";
																						echo "<td>".$rowSub['misc']."</td>";
																						echo "<td>".$rowSub['totalBilling']."</td>";
																						echo "<td>".$rowSub['amountPaid']."</td>";
																						echo "<td>".$rowSub['currentBalance']."</td>";
																						echo "</tbody>";
																					}
																				}catch(PDOException $e){
																					echo "Connection failed: " . $e->getMessage();
																				}
																				?>
																	</table>
																</div>
																
													
											</div>
											
											<div class="tab-pane fade" id="updatePassword"><br>
												<div class="col-lg-12">
													<div class="col-lg-4"><label for="Name">Previous Password:</label></div>
													<div class="col-lg-4"><label for="Name"><input type="text" class="form-control" id="Name" value=""></label></div>
												</div>	
												<div class="col-lg-12">
													<div class="col-lg-4"><label for="Name">New Password:</label></div>
													<div class="col-lg-4"><label for="Name"><input type="text" class="form-control" id="Name" value=""></label></div>
												</div>
												<div class="col-lg-12">
													<div class="col-lg-4"><label for="Name">Confirm Password:</label></div>
													<div class="col-lg-4"><label for="Name"><input type="text" class="form-control" id="Name" value=""></label></div>
												</div>
												<div class="col-lg-12"><br>
													<ul class="pager">
													 <button type="button" class="btn btn-success">Update Information</button>
													</ul>
												</div>
											</div>
								            
										</div>
									</div>
								</div>
				</div>
			
			</div>
		
	
    
		        
		   
		   
            
			
			
			
			
			
			
			
			
			
			
			

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
