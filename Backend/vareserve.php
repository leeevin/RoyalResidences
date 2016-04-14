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
									<h3>Reservations</h3>
								</div>
								<div class="col-md-6">
								</div>
							</div>

							
							
							
							
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Reservations  </h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <table class="table table-bordered table-hover">
									 <tbody><tr>
										<th>Date <a href="#"><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a></th>
										<th>Name <a href="#"><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a></th>
										<th>Move-in date <a href="#"><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a></th>
										<th>Payment</th>
										<th>Status <a href="#"><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a></th>
										<th></th>
									</tr>
									 <tr>
										<td>2/5/2016</td>
										<td><a href="">Izaya Orihara</a></td>
										<td>4/5/2016</td>
										<td>Pending</td>
										<td>Pending</td>
										<td><button type="button" class="btn btn-success">Confirm</button><button type="button" class="btn btn-danger">Reject</button></td>
									</tr>
								 </tbody></table>
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
