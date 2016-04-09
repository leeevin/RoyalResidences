<?php
$dbc = mysqli_connect("localhost", "root", "", "royaldb");

$db = mysqli_select_db($dbc, "royaldb");
session_start();

$username= $_SESSION['login_user'];
$printUser = mysqli_query($dbc, "SELECT * FROM tenant where tenantId='$username'");
$userDetails = mysqli_fetch_assoc($printUser);

$printFirstname= $userDetails['firstName'];
$printLastname = $userDetails['lastName'];

$printGender =  $userDetails['gender'];
$printCivil = $userDetails['civilStatus'];
$printBirthday = $userDetails['birthday'];
$printReligion = $userDetails['religion'];

$houseNo = $userDetails['houseNo'];
$street = $userDetails['street'];
$barangay = $userDetails['barangay'];
$municipality = $userDetails['municipality'];
$province = $userDetails['province'];

$printIntAddress = $userDetails['intAddress'];
$printIdNO = $userDetails['idNo'];
$printPhoneNo = $userDetails['phoneNo'];
$printReferredby = $userDetails['referredBy'];
$printCollege = $userDetails['nameOfSchool'];
$printHighSchool = $userDetails['nameOfSchool'];
$printSchoolAddress = $userDetails['schoolAddress'];
$printTelNo = $userDetails['telNo'];
$printReligion = $userDetails['religion'];
$printCourseAndYear= $userDetails['courseAndYear'];

$printFatherName= $userDetails['father'];
$printMotherName= $userDetails['mother'];
$printGuardian= $userDetails['guardian'];

$printSpouseName = $userDetails['spouse'];
$printSpouseOcc = $userDetails['spouseOcc'];
$printSpousePhone = $userDetails['spousePhoneNo'];

$printFatherName = $userDetails['father'];
$printFatherOcc = $userDetails['fatherOcc'];
$printFatherPhone = $userDetails['fatherPhoneNo'];

$printMotherName = $userDetails['mother'];
$printMotherOcc = $userDetails['motherOcc'];
$printMotherPhone = $userDetails['motherPhoneNo'];

$printGuardianName = $userDetails['guardian'];
$printGuardianOcc = $userDetails['guardianOcc'];
$printGuardianPhone = $userDetails['guardianPhoneNo'];


$printContract = mysqli_query($dbc, "SELECT * FROM contractdetails where tenantId='$username'");
$contractDetails = mysqli_fetch_assoc($printContract);

$printContractNo = $contractDetails['contractNo'];
$printMoveinDate = $contractDetails['expectedMoveInDate'];
$printTerminationDate = $contractDetails['expectedTerminationDate'];
$printRoom = $contractDetails['room'];
$printMonthlyRate = $contractDetails['room'];

?>