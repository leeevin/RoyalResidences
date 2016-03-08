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
	<h2>Payment Information Notifications</h2>
	<hr>
			<div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Payments  </h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <table class="table table-bordered table-hover">
										<tr>
											<th>Date <a href="#"><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></th>
											<th>Name <a href="#"><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></th>
											<th>Details</th>
											<th>Total Bill</th>
											<th></th>
										 </tr>
										 <tr>
											<td>2/29/2016</td>
											<td><a href="#">Yna Jalin</a></td>
											<td>Overudue Payment</td>
											<td>P10,000.00</td>
											<td><a href="#"><span class="glyphicon glyphicon-envelope" data-toggle="popover" data-trigger="hover" data-content="Notify Tenant" data-placement="top" data-original-title="" title="" aria-hidden="true"></span></a></td>
										 </tr>
									 
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