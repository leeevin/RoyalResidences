<?php
session_start();
unset($_SESSION['errors']);
$type = $_SESSION['type_of_reservation'];
	if($type == "solo") {
		$_SESSION['soloRes'] = true;
		header('location: solo_reg_1.php');
	}else {
		$_SESSION['groupRes'] = true;
		header('location: reg_2_num_persons.php');
	}
?>