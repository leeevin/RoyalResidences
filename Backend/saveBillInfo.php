<?php
	session_start();
	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$db = "royaldb";

	try {
		
		if($_POST['formSubmit'] == "Submit") 
{
		   $misc = $_POST['misc'];
		   $mealTicket = $_POST['mealTicket'];
		   $page = $_POST['page'];
		   $tenantId = $_POST['tenantId'];
		   
		   $conn = new PDO("mysql:host=$servername;dbname=$db", $dbusername, $dbpassword);
				
			// set the PDO error mode to exception
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					
			$sql = "UPDATE other_charges SET misc=".$misc.", mealticket=".$mealTicket." WHERE tenantId = '".$tenantId."'";
			$sqlCheck = $conn->query($sql);
		}
			
	}catch(PDOException $e){
		
	}
	header("Location:profile.php?page=".$page); 
?>