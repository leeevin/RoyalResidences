<?php
session_start();
include('connect.php');	
		unset($_SESSION['errors']);
		
		if($_SESSION['type_of_occupancy'] == "solo") {
						$sql = strip_tags("SELECT * FROM rooms WHERE roomType == '".$_SESSION['preference']."' and numberOfBeds == spaceAvailable");
			}else{
						$sql = strip_tags("SELECT * FROM rooms WHERE roomType == '".$_SESSION['preference']."' spaceAvailable == '".$_SESSION['numberOfPersons']."'"); 
			}
				$results = mysqli_query($conn, $sql);
					if($results->num_rows === 0) {
						header('location: sorryNoRoomAvailable.php');
					} else {
						header('location: groupReservation_2.php');
					}

?>