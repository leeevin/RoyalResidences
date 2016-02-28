<?php
	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$db = "royaldb";

	$reservationCode = $_GET['reservationCode'];
	$param = $_GET['param'];
	
	$action = $_GET['action'];
	try {
				$conn = new PDO("mysql:host=$servername;dbname=$db", $dbusername, $dbpassword);
				
				// set the PDO error mode to exception
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					
				$sqlCheck = "SELECT reservationCode FROM reservation WHERE reservationCode = $reservationCode";
				$sqlCheck = $conn->query($sqlCheck);

				if($sqlCheck->rowCount() == 1) {
					$sqlUpdate = "UPDATE reservation SET status='Reserved' WHERE reservationCode = '$reservationCode'";
					$conn->query($sqlUpdate);
						
				} else {
					echo "Error Confirming";
				}
			
	}catch(PDOException $e){
				echo "Connection failed: " . $e->getMessage();
	}	
	header("Location: \backRoyal\index.php?param=$param"); /* Redirect browser */