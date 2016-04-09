<?php
	include('connect.php');
	session_start();
	strip_tags($lastName = $_SESSION['lastName']);
	strip_tags($firstName = $_SESSION['firstName']);
	strip_tags($middleName = $_SESSION['middleName']);
	strip_tags($email = $_SESSION['email_add']);
	strip_tags($bday = $_SESSION['birthday']);
	strip_tags($gender = $_SESSION['gender']);
	strip_tags($civilStatus = $_SESSION['civil_status']);
	strip_tags($nationality = $_SESSION['nationality']);
	strip_tags($religion = $_SESSION['religion']);
	strip_tags($house_no = $_SESSION['house_no']);
	strip_tags($street = $_SESSION['street']);
	strip_tags($barangay = $_SESSION['barangay']);
	strip_tags($municipality = $_SESSION['municipality']);
	strip_tags($province = $_SESSION['province']);
	strip_tags($intAdd = $_SESSION['international_address']);
	strip_tags($idNum = $_SESSION['id_number']);
	strip_tags($passNum = $_SESSION['passport_number']);
	strip_tags($conNum = $_SESSION['contact_number']);
	strip_tags($refby = $_SESSION['referred_by']);
	strip_tags($nameOfSchool = $_SESSION['name_of_school']);
	strip_tags($nameOfHschool = $_SESSION['name_of_hschool']);
	strip_tags($schoolAdd = $_SESSION['school_address_hs']);
	strip_tags($telNumHs = $_SESSION['tel_num_hs']);
	strip_tags($courseYear = $_SESSION['course_and_year']);
	strip_tags($nameCompany = $_SESSION['name_of_company']);
	strip_tags($compAdd = $_SESSION['company_address']);
	strip_tags($occupation = $_SESSION['occupation_position']);
	strip_tags($natureOfBusiness = $_SESSION['nature_of_business']);
	strip_tags($telNumBus = $_SESSION['tel_num_bus']);
	strip_tags($spouse = $_SESSION['spouse']);
	strip_tags($father = $_SESSION['father']);
	strip_tags($mother = $_SESSION['mother']);
	strip_tags($guardian = $_SESSION['guardian']);
	strip_tags($spouseOcc = $_SESSION['spouse_occupation']);
	strip_tags($spouseNum = $_SESSION['spouse_tel_num']);
	strip_tags($fatherOcc = $_SESSION['father_occupation']);
	strip_tags($fatherNum = $_SESSION['father_tel_num']);
	strip_tags($motherOcc = $_SESSION['mother_occupation']);
	strip_tags($motherNum = $_SESSION['mother_tel_num']);
	strip_tags($guardianOcc = $_SESSION['guardian_occupation']);
	strip_tags($guardianNum = $_SESSION['guardian_tel_num']);
	strip_tags($health = $_SESSION['health']);
	
	$sql = "INSERT INTO registration (lastName,firstName,middleName,email_add,birthday,gender,civilStatus,nationality,
	religion,province,intAddress,idNo,passportNo,phoneNo,referredBy, nameOfSchool, nameOfHighSchool,
	schoolAddress,telNo,courseAndYear, nameOfComp, compAdd,occupation,natureOfBusiness,compTelNo,spouse,
	father, mother, guardian, spouseOcc, spousePhoneNo, fatherOcc, fatherPhoneNo, motherOcc, motherPhoneNo,
	guardianOcc, guardianPhoneNo, healthRemarks,houseNo,street,barangay,municipality,province) 
							  values ('$lastName','$firstName','$middleName','$email','$bday','$gender','$civilStatus','$nationality',
									  '$religion', '$province', '$intAdd', '$idNum','$passNum','$conNum','$refby','$nameOfSchool','$nameOfHschool',
									  '$schoolAdd','$telNumHs','$courseYear','$nameCompany','$compAdd', '$occupation','$natureOfBusiness','$telNumBus','$spouse',
									  '$father', '$mother', '$guardian', '$spouseOcc', '$spouseNum', '$fatherOcc', '$fatherNum', '$motherOcc','$motherNum',
									  '$guardianOcc', '$guardianNum','$health','$house_no','$street','$municipality','$province')";
	 mysqli_query($conn, $sql);
	 header('location: thankYouTenant.php');
?>