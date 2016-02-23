<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
		<title> Royal Residence - Admin</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	 <link href="css/simple-sidebar.css" rel="stylesheet">
    <link href="navbar-fixed-top.css" rel="stylesheet">
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
  </head>

  <body>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Royal Residence - Admin</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="registration.php">Registration</a></li>
            <li><a href="manageRooms.php">Manage Rooms</a></li>
            <li class="active"><a href="accounts.php">Accounts</a></li>
            <li><a href="bills.php">Bills</a></li>
			<li><a href="reports.php">Reports</a></li>
          </ul>
         
        </div><!--/.nav-collapse -->
      </div>
    </nav>

	
	
    <div class="container">
	
        <!-- Page Content -->
        <div id="page-content-wrapper">
				<div class="right"><form class="navbar-form navbar-left" role="search">
					<input type="text" class="form-control" placeholder="Search">			
					<button type="submit" class="btn btn-default">Submit</button>
					</form>
				</div>

		<h2>Accounts</h2>
	<hr>
	 
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
	
	<hr>
	

			
        </div>
        <!-- /#page-content-wrapper -->
    </div>
	
    <!-- /#wrapper -->
	
	
	
	
	
    
    </div> <!-- /container -->
	<!-- \(^o^)/ -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>