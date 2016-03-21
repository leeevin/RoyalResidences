<?php
	session_start();
	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$db = "royaldb";

	try {
		
		if($_POST['formSubmit'] == "Submit"){
			
			$varSiteDetails = $_POST['siteDetails'];
			
			$conn = new PDO("mysql:host=$servername;dbname=$db", $dbusername, $dbpassword);
				
			// set the PDO error mode to exception
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					
			$sql = "UPDATE aboutus_content SET aboutUs='$varSiteDetails' WHERE aboutUsId='1'";
			$sqlCheck = $conn->query($sql);
		   
		}
			
	}catch(PDOException $e){
		echo "Connection failed: " . $e->getMessage();
	}
	header("Location:/backRoyal/editsite.php"); 
?>	