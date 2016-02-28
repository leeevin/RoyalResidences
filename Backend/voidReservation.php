<?php
	session_start();
	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$db = "royaldb";

	$reservationCode = $_GET['reservationCode'];
	
	$action = $_GET['action'];
	try {
				$conn = new PDO("mysql:host=$servername;dbname=$db", $dbusername, $dbpassword);
				
				// set the PDO error mode to exception
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					
				$sqlCheck = "SELECT reservationCode FROM reservation WHERE reservationCode = $reservationCode";
				$sqlCheck = $conn->query($sqlCheck);

				if($sqlCheck->rowCount() == 1) {
					$sqlUpdate = "UPDATE reservation SET status='Pending' WHERE reservationCode = '$reservationCode'";
					$conn->query($sqlUpdate);
						
				} else {
					echo "Error Voiding";
				}
			
	}catch(PDOException $e){
				echo "Connection failed: " . $e->getMessage();
	}
?>