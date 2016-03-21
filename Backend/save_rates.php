<?php
	session_start();
	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$db = "royaldb";

	try {
		
		if($_POST['formSubmit'] == "Submit") 
{
		   $varSoloWindow = $_POST['1'];
		   $varSoloInterior = $_POST['2'];
		   $var2Occupancy = $_POST['3'];
		   $var3PaxRoom = $_POST['4'];
		   $var2OccupancyBedSpace = $_POST['5'];
		   
		   $conn = new PDO("mysql:host=$servername;dbname=$db", $dbusername, $dbpassword);
				
			// set the PDO error mode to exception
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					
			$sql = "UPDATE rates SET rate='$varSoloWindow' WHERE idRate='1';UPDATE rates SET rate='$varSoloInterior' WHERE idRate='2';UPDATE rates SET rate='$var2Occupancy' WHERE idRate='3';UPDATE rates SET rate='$var3PaxRoom' WHERE idRate='4';UPDATE rates SET rate='$var2OccupancyBedSpace' WHERE idRate='5';";
			$sqlCheck = $conn->query($sql);
		}
			
	}catch(PDOException $e){
		
	}
	header("Location:/backRoyal/editrates.php"); 
?>