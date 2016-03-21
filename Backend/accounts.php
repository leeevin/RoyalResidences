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
                                <li class="dropdown" >
									  <a href="index.php" class="dropdown-toggle" data-toggle="dropdown">Home</a>
										<ul class="dropdown-menu">
											<li><a href="index.php">Dashboard</a></li>
											<li><a href="vanotif.php">View all Notifications</a></li>
											<li><a href="vareserve.php">View all Reservations</a></li>
											<li><a href="vapay.php">View all Payment Details</a></li>        
										</ul>
								</li>	
								<li><a href="editsite.php">Edit</a></li>
								<li><a href="registration.php">Registration</a></li>
								<li><a href="managerooms.php">Manage Rooms</a></li>
								<li class="active"><a href="accounts.php">Accounts</a></li>
								<li><a href="bills.php">Bills</a></li>
								<li><a href="reports.php">Reports</a></li>
								<li> <a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
				 </ul>
                    
        </div>
        <!-- /.container -->
    </nav>

   

    <!-- Page Content -->
    <div class="container">		
	<h2>Accounts</h2>
	<hr>
			<!-- Content Row -->
        <div class="row">           
			 <!-- Content Column -->	
				<div class="col-md-9">
					<h2>Yra J. Bacalanmo</h2>
					<div class="btn-group">
					<button type="button" class="btn btn-default">Save</button>
					<button type="button" class="btn btn-default">Print</button>
					<button type="button" class="btn btn-default">Delete</button>
				</div>
				
			
				<table class="table-no-border">
				<tr>
					<td>
						<img id="tenant" alt="" src="tenant/epal.jpg">
					</td>
				
					<td class="marg">
						<table class="table-no-border">
						<tr>
							<td><label for ="Name">Name:</label></td>
							<td><input type="text" class="form-control" id="Name" value="Yra J. Bacalanmo"></td>
						</tr>
						<tr>
							<td><label for ="tenantID">Tenant ID:</label></td>
							<td><input type="text" class="form-control" id="tenantID" value="A175432"></td>
						</tr>
						<tr>
							<td><label for ="Room">Room:</label></td>
							<td><input type="text" class="form-control" id="room" value="S527"></td>
						</tr>
						<tr>
							<td><label for ="contractStart">Contract Start:</label></td>
							<td><input type="date"></td>
							<td class="marg"><label for ="contractEnd">Contract End:</label></td>
							<td><input type="date"></td>
						</tr>
						<tr>
							<td><label for ="contact">Contact Number:</label></td>
							<td><input type="text" class="form-control" id="room" value="09123456789"></td>
						</tr>
						</table> 
					<td>
				</tr>
				</table> 
	
				<div class="top">
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
						 <tbody>
							 <tr>
								 <td>23/11/2013</td>
								 <td>PAYMENT</td>
								 <td>1325</td>
								 <td>2000</td>
								 <td>3500</td>
								 <td></td>
								 <td>750</td>
								 <td>50</td>
								 <td></td>
								 <td>4300</td>
								 <td></td>
								 <td>4560</td>
							 </tr>
							 <tr>
								 <td>10/11/2013</td>
								 <td>BALANCE</td>
								 <td>1325</td>
								 <td>2000</td>
								 <td>3500</td>
								 <td></td>
								 <td>750</td>
								 <td>50</td>
								 <td></td>
								 <td>4300</td>
								 <td></td>
								 <td>4560</td>
							 </tr>
						 </tbody>
					</table>
				</div>
				</div>
					
					
				</div>
				
				
				
			

			
			 <!-- Sidebar Column -->	
				<div class="col-md-3">
					<h4>List of Tenants</h4>
					<div class="form-group input-group">
									<input type="text" class="form-control">
									<span class="input-group-btn"><button class="btn btn-default" type="button"><i class="fa fa-search"></i></button></span>
					</div>
					
					
					
					<div class="list-group">
						<a href="#" class="list-group-item">Bacalanmo, Yra</a>
						<a href="#" class="list-group-item">Bacani, Mark Niel</a>
						<a href="#" class="list-group-item">Campos, Amiel Patrick</a>
						<a href="#" class="list-group-item">Domingo, Rozen Val</a>
						<a href="#" class="list-group-item">Flores, Jann Marie</a>
						<a href="#" class="list-group-item">Garcia, Patrick Brian</a>
						<a href="#" class="list-group-item">Garcia, Rico Aian</a>
						<a href="#" class="list-group-item">Rabanes, Levin Damiel</a>
					</div>
				</div>
		</div>
		
		
       
	  
	   
	   
	   
	   
	   
            
        

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

	<!-- Dropdown -->
	<script>
	$('ul.nav li.dropdown').hover(function() {
	  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
	}, function() {
	  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
	});
	</script>
	
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
