<?php
	include('connect.php');
	session_start();
	$lastName = $_SESSION['lastName'];
	$firstName = $_SESSION['firstName'];
	$middleName = $_SESSION['middleName'];
	$email = $_SESSION['email_add'];
	$bday = $_SESSION['birthday'];
	$gender = $_SESSION['gender'];
	$civilStatus = $_SESSION['civil_status'];
	$nationality = $_SESSION['nationality'];
	$religion = $_SESSION['religion'];
	$province = $_SESSION['provincial_address'];
	$intAdd = $_SESSION['international_address'];
	$idNum = $_SESSION['id_number'];
	$passNum = $_SESSION['passport_number'];
	$conNum = $_SESSION['contact_number'];
	$refby = $_SESSION['referred_by'];
	$nameOfSchool = $_SESSION['name_of_school'];
	$nameOfHschool = $_SESSION['name_of_hschool'];
	$schoolAdd = $_SESSION['school_add_hs'];
	$telNumHs = $_SESSION['tel_num_hs'];
	$courseYear = $_SESSION['course_and_year'];
	$nameCompany = $_SESSION['name_of_company'];
	$compAdd = $_SESSION['company_address'];
	$occupation = $_SESSION['occupation_position'];
	$natureOfBusiness = $_SESSION['nature_of_business'];
	$telNumBus = $_SESSION['tel_num_bus'];
	$spouse = $_SESSION['spouse'];
	$father = $_SESSION['father'];
	$mother = $_SESSION['mother'];
	$guardian = $_SESSION['guardian'];
	$spouseOcc = $_SESSION['spouse_occupation'];
	$spouseNum = $_SESSION['spouse_tel_num'];
	$fatherOcc = $_SESSION['father_occupation'];
	$fatherNum = $_SESSION['father_tel_num'];
	$motherOcc = $_SESSION['mother_occupation'];
	$motherNum = $_SESSION['mother_tel_num'];
	$guardianOcc = $_SESSION['guardian_occupation'];
	$guardianNum = $_SESSION['guardian_tel_num'];
	$health = $_SESSION['health'];
	
	$sql = "INSERT INTO registration (lastName,firstName,middleName,email_add,birthday,gender,civilStatus,nationality,
	religion,province,intAddress,idNo,passportNo,phoneNo,referredBy, nameOfSchool, nameOfHighSchool,
	schoolAddress,telNo,courseAndYear, nameOfComp, compAdd,occupation,natureOfBusiness,compTelNo,spouse,
	father, mother, guardian, spouseOcc, spousePhoneNo, fatherOcc, fatherPhoneNo, motherOcc, motherPhoneNo,
	guardianOcc, guardianPhoneNo, healthRemarks) 
							  values ('$lastName','$firstName','$middleName','$email','$bday','$gender','$civilStatus','$nationality',
									  '$religion', '$province', '$intAdd', '$idNum','$passNum','$conNum','$refby','$nameOfSchool','$nameOfHschool',
									  '$schoolAdd','$telNumHs',)";
?>