<?php
	session_start();
	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$db = "royaldb";

	$reservationID = $_GET['reservationID'];
	
	$action = $_GET['action'];
	try {
				$conn = new PDO("mysql:host=$servername;dbname=$db", $dbusername, $dbpassword);
				
				// set the PDO error mode to exception
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					
				$sqlCheck = "SELECT reservationID FROM applicant WHERE reservationID = $reservationID";
				$sqlCheck = $conn->query($sqlCheck);

				if($sqlCheck->rowCount() == 1) {
					$sqlUpdate = "UPDATE applicant SET status='Pending' WHERE reservationID = '$reservationID'";
					$conn->query($sqlUpdate);
						
				} else {
					echo "Error Voiding";
				}
			
	}catch(PDOException $e){
				echo "Connection failed: " . $e->getMessage();
	}	
	header("Location: \backend\index.php"); /* Redirect browser */
?>