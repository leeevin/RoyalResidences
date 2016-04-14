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
						<a href="home.php" class="site_title"><i class="fa fa-home"></i> <span>Royal Residence</span></a>					
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
								<li><a><i class="fa fa-key"></i> Manage Rooms <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu" style="display: none">
										<li><a href="managerooms.php">Manage Contracts</a>
										</li>
										<li><a href="contractagreement.php">Contract Agrement</a>
										</li>										
										<li><a href="roomassignment.php">Room Assignment</a>
										</li>										
										<li><a href="contractoflease.php">Contract of Lease</a>
										</li>
									</ul>
								</li>
								<li><a href="registration.html"><i class="fa fa-pencil"></i>  Registration</a>									
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
								<li><a href="index.html"><i class="fa fa-power-off"></i> Logout</a>									
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
									<h3>Accounts</h3>
								</div>
								<div class="title_right">
								  <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
									<div class="input-group">
									<form action="accountsearch.php" method="post">
									  <input type="text" class="form-control" placeholder="Search for..." name='search'>
									  <span class="input-group-btn">
												<input class="btn btn-default" type="submit" name="formSubmit" value="Search"><i class="fa fa-search"></i></button>
										</span>
									</form>
									</div>
								  </div>
								</div>
								<div class="col-md-6">
								</div>
							</div>

							
							
							
							
							<div class="row">
							<div class="col-md-12">
							  <div class="x_panel">
								<div class="x_content">

								  <div class="row">

									<div class="clearfix"></div>
									
									<!--PHP HERE-->
									
									<?php
										$servername = "localhost";
										$dbusername = "root";
										$dbpassword = "";
										$db = "royaldb";
										
										if (isset($_GET["tenantID"])) {
										$tenantID = $_GET["tenantID"];
										
										}else {
											$page=1;
										}
										
										$per_page=9;
										if (isset($_GET["page"])) {
											$page = $_GET["page"];
										}else {
											$page=1;
										}
										
										// Page will start from 0 and Multiple by Per Page
										$start_from = ($page-1) * $per_page;
										
										try{
											if($_POST['formSubmit'] == "Search"){
												$users_input = $_POST['search'];

												$conn = new PDO("mysql:host=$servername;dbname=$db", $dbusername, $dbpassword);
												// set the PDO error mode to exception
												$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
												$sql = "SELECT tenantID, lastName, firstName, gender, nameOfSchool, room, occupancyType FROM tenant WHERE tenantId LIKE '%$users_input%' OR lastName LIKE '%$users_input%' OR firstName LIKE '%$users_input%' OR gender LIKE '%$users_input%' OR nameOfSchool LIKE '%$users_input%' OR room LIKE '%$users_input%' OR occupancyType LIKE '%$users_input%' LIMIT $start_from, $per_page";
												$res = $conn->query($sql);
											
																												
												while($rowSub = $res->fetch(PDO::FETCH_LAZY)){

													echo"	<div class='col-md-4 col-sm-4 col-xs-12 animated fadeInDown'>";
													echo"	  <div class='well profile_view'>";
													echo"		<div class='col-sm-12'>";                          
													echo"		  <div class='left col-xs-7'>";
													echo"			<h2>".$rowSub['firstName']."&nbsp;".$rowSub['lastName']."</h2>";
													echo"			<p><strong>Tenant ID: </strong>".$rowSub['tenantID']."</p>";                            
													echo"			<p><strong>Room: </strong>".$rowSub['room']."</p>";   
													echo"		  </div>";
													echo"		  <div class='right col-xs-5 text-center'>";
													echo"			<img src='tenant/tenant.png' alt='' class='img-circle img-responsive'>";
													echo"		  </div>";
													echo"		</div>";
													echo"		<div class='col-xs-12 bottom text-center'>";
													echo"		  <div class='col-xs-12 col-sm-6 emphasis'>";                            
													echo"		  </div>";
													echo"		  <div class='col-xs-12 col-sm-6 emphasis'>";
													echo"			<button type='button' class='btn btn-success btn-xs'> <i class='fa fa-user'>";
													echo"											</i> <i class='fa fa-envelope'></i> </button>";
													echo"			<button type='button' class='btn btn-primary btn-xs'> <i class='fa fa-user'>";
													echo"											</i><a class='white' href='profile.php?tenantID=".$rowSub['tenantID']."'> View Profile </a></button>";
													echo"		  </div>";
													echo"		</div>";
													echo"	  </div>";
													echo"	</div>";
												}
											}
										}catch(PDOException $e){
											echo "Connection failed: " . $e->getMessage();
										}
									?>
									
									<div class="col-md-12 col-sm-12 col-xs-12" style="text-align:center;">
									  
									  <?php
										//Now select all from table
										$query1 = "SELECT tenantID, lastName, firstName, gender, nameOfSchool, room, occupancyType 
										FROM tenant WHERE tenantId LIKE '%$users_input%' OR lastName LIKE '%$users_input%' OR 
										firstName LIKE '%$users_input%' OR gender LIKE '%$users_input%' OR nameOfSchool LIKE '%$users_input%' 
										OR room LIKE '%$users_input%' OR occupancyType LIKE '%$users_input%'";
										$total_records = $conn->query($query1)->rowCount();

										//Using ceil function to divide the total records on per page
										$total_pages = ceil($total_records / $per_page);

										//Going to first page
										echo "<center><a href='accounts.php?page=1'>".'First Page'."</a>";
										echo "&nbsp;";
										for ($i=1; $i<=$total_pages; $i++) {
											echo "<a href='accounts.php?page=".$i."'>".$i."</a>";
											echo "&nbsp;";
										};
										// Going to last page
										echo "<a href='accounts.php?page=$total_pages'>".'Last Page'."</a></center>";
									  ?>
									</div>
									
									
								</div>
							  </div>
							</div>
						</div>

                </div>
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
