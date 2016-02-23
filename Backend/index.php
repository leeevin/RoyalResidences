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
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="registration.php">Registration</a></li>
            <li><a href="manageRooms.php">Manage Rooms</a></li>
            <li><a href="accounts.php">Accounts</a></li>
            <li><a href="bills.php">Bills</a></li>
			<li><a href="reports.php">Reports</a></li>
          </ul>
         
        </div><!--/.nav-collapse -->
      </div>
    </nav>

	
	
    <div class="container">
        <!-- Page Content -->
        <div id="page-content-wrapper">
	<h2>Dashboard</h2>
	<hr>
			
				<div class="panel panel-default">
				
				 <div class="panel-heading">Notifications  <span class="badge">2</span></div>
				 <table class="table">
				 <tr>
					 <th>No.</th>
					 <th>Date</th>
					 <th>Name</th>
					 <th>Status</th>
				 </tr>
				 <tr>
					 <td>1</td>
					 <td>2/5/2016</td>
					 <td>Yra Bacalanmo</td>
					 <td>End of Contract</td>
				 </tr>
				 <tr>
					 <td>2</td>
					 <td>2/3/2016</td>
					 <td>Jann Marie Flores</td>
					 <td>Move out</td>
				 </tr>
				 </table>
				</div>
				
				<div class="panel panel-default">
				 <div class="panel-heading">Reservations  <span class="badge">1</span></div>
				 <table class="table">
				 <tr>
					 <th>No.</th>
					 <th>Date</th>
					 <th>Name</th>
					 <th>Payment</th>
					 <th>Confirm Payment</th>
					 <th>Status</th>
					 <th>Accept as Tenant</th>
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
							$sql = "SELECT * FROM applicant";
							$res = $conn->query($sql);
							$counter = 1;
							
							if($res->rowcount() < 1) {
								
								echo "</table>";
								echo "<h4>No Applicants so Far :3</h4>";
								
							} else {
								while($rowSub = $res->fetch(PDO::FETCH_LAZY)){
									
									echo "<tr>";
									echo "<td>".$rowSub['reservationID']."</td>";
									echo "<td>".$rowSub['dateReserved']."</td>";
									echo "<td>".$rowSub['firstName'].' '.$rowSub['lastName']."</td>";
									echo "<td>".$rowSub['status']."</td>";
									echo "<td><a href=\"addSubject.php?name=".$rowSub['classCode']."&action=remove\">REMOVE</a></th>";
									echo "<td>".$rowSub['status']."</td>";
									echo "<td><a href=\"addSubject.php?name=".$rowSub['classCode']."&action=remove\">REMOVE</a></th>";
									echo "</tr>";
									
								}
							}
						}catch(PDOException $e){
							echo "Connection failed: " . $e->getMessage();
						}
					?>
				 <tr>
					 <td>1</td>
					 <td>2/5/2016</td>
					 <td>Izaya Orihara</td>
					 <td>Pending</td>
					 <td>Pending</td>
				 </tr>
				 </table>
				</div>
				
				<div class="panel panel-default">
				 <div class="panel-heading">Payments</div>
				 <table class="table">
				 <tr><td></td></tr>
				 
				 </table>
				</div>
			
	
	<hr>
	</div>

			
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