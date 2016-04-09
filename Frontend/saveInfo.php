<?php
	include('connect.php');
	session_start();
	$type_of_reservation = $_SESSION['type_of_reservation'];
	$preference = $_SESSION['preference'];
	$email = $_SESSION['email_add'];
	$contact = $_SESSION['contact_number'];
	$type_of_occupancy = $_SESSION['type_of_occupancy'];
	$move_in_date = $_SESSION['move_in_date'];
	$gender = $_SESSION['gender'];
	$_SESSION['reservation_code'] = hash('adler32', $email + $contact);
	$resCode = $_SESSION['reservation_code'];
	$date = date("Y-m-d");
	$time = date("h:i");
	
	if($type_of_reservation == "group") {
		$number_of_persons = $_SESSION['numberOfPersons'];
		if($_SESSION['gender'] == "male") {
			$gender = "male";
		}
		if($_SESSION['gender'] == "female") {
			$gender = "female";
		}
		for($x = 1; $x<=$number_of_persons; $x++) {
			$lastName = $_SESSION['lastname'.$x];
			$firstName = $_SESSION['firstname'.$x];
			$middleName = $_SESSION['middlename'.$x];
			$birthday = $_SESSION['birthday'.$x];
			if($_SESSION['gender'] == "combination") {
				$gender = $_SESSION['gender'.$x];
			}
			$_SESSION['lN'] = $lastName;
			$_SESSION['fN'] = $firstName;
			$_SESSION['mN'] = $middleName;
			$sql = "INSERT INTO reservation (reservationCode,dateReserved,timeReserved,lastName,firstName,middleName,birthday,gender,email_add,status,
											depositTransactionNo,roomType,expectedMoveInDate)
								values ('$resCode', '$date', '$time', '$lastName', '$firstName',
										'$middleName', '$birthday','$gender','$email', 'pending', '0', '$preference',
										'$move_in_date')";
			 mysqli_query($conn, $sql);
  			 $sql2 = strip_tags("SELECT * FROM reservation WHERE firstName == '".$firstName."' and lastName == '".$lastName."' and 
								 middleName = '".$middleName."' and birthday = '".$birthday."' and gender = '".$gender."'");
			 $results = mysqli_query($conn, $sql2);
					if($results->num_rows > 1) {
						header('location: alreadyReserved.php');
					}
					
			$sql3 = strip_tags("SELECT * FROM tenant WHERE firstName == '".$firstName."' and lastName == '".$lastName."' and 
								 middleName = '".$middleName."' and birthday = '".$birthday."' and gender = '".$gender."'");
			$results2 = mysqli_query($conn, $sql3);
					if($results2->num_rows > 1) {
						header('location: tenantAlready.php');
					}
			
		}
		header('location: finish.php');
	} else {
		$last = $_SESSION['last_name'];
		$first = $_SESSION['first_name'];
		$middle = $_SESSION['middle_name'];
		$birthday = $_SESSION['birthday'];
		$gender = $_SESSION['gender'];
		$sql = "INSERT INTO reservation (reservationCode,dateReserved,timeReserved,lastName,firstName,middleName,birthday,gender,email_add,status,
											depositTransactionNo,roomType,expectedMoveInDate)
								values ('$resCode', '$date', '$time', '$last', '$first', '$middle', '$birthday','$gender', '$email', 'pending', '0', '$preference',
										'$move_in_date');";
		 mysqli_query($conn, $sql);
		 
		 $sql4 = strip_tags("SELECT * FROM reservation WHERE firstName == '".$first."' and lastName == '".$last."' and 
								 middleName = '".$middle."' and birthday = '".$birthday."' and gender = '".$gender."'");
		 $results3 = mysqli_query($conn, $sql4);
					if($results3->num_rows > 1) {
						header('location: alreadyReserved.php');
					}
		$sql5 = strip_tags("SELECT * FROM tenant WHERE firstName == '".$firstName."' and lastName == '".$lastName."' and 
								 middleName = '".$middleName."' and birthday = '".$birthday."' and gender = '".$gender."'");
			$results4 = mysqli_query($conn, $sql5);
					if($results4->num_rows > 1) {
						header('location: tenantAlready.php');
					}
		 header('location: finish.php');
	}
?>