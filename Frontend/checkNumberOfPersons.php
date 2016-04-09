<?php
session_start();
$_SESSION['numberOfPersons'] = $_POST['numberOfPersons'];

if($_SESSION['numberOfPersons'] <= 1) {
	header('location:registration.php');
	
}else{
	header('location:moreThanTwoPeople.php');
}

?>