<?php
include('connect.php');
session_start();
	$preference = $_SESSION['preference'];
	$type_of_occupancy = $_SESSION['type_of_occupancy'];
	$gender = $_SESSION['gender'];
	$move_in_date = $_SESSION['move_in_date'];
	//$_SESSION['move_in_date'] = date('Y-m-d', $_SESSION['move_in_date']);
	//$dateNow = date('Y-m-d');
	//$newDateNow = strtotime('+3 month' , $dateNow);
	//$newDateNow = date('Y-m-d', $newDateNow);
	//$date3months = strtotime( '+3 day' , strtotime($_SESSION['move_in_date']));
	//$date3months = date('Y-m-d', $date3months);

	
	//if($_SESSION['move_in_date'] < $newDateNow) {
		//$_SESSION['errors'] = array("You should reserve a room three months from now");
		//header('location: solo_reg_1.php');
	//} else 
		unset($_SESSION['errors']);
		if($_SESSION['type_of_occupancy'] == "Solo") {
				$sql = strip_tags("SELECT * FROM rooms WHERE roomType == '".$_SESSION['preference']."' and numberOfBeds == spaceAvailable 
								and gender == '".$_SESSION['gender']."'");
		}else{
				$sql = strip_tags("SELECT * FROM rooms WHERE roomType == '".$_SESSION['preference']."' and numberOfBeds < spaceAvailable
								and gender == '".$_SESSION['gender']."'"); 
		}
		$results = mysqli_query($conn, $sql);
			if($results->num_rows === 0) {
				header('location: sorryNoRoomAvailable.php');
			} else {
				header('location: registration.php');
			}
	
	
	
		
	
	

	
	
	

?>