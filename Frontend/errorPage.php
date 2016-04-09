<?php
session_start();

if(isset($_POST['submit1'])) {
	$_SESSION['type_of_reservation'] = $_POST['type_of_reservation'];
	if(empty($_SESSION['type_of_reservation'])) {
		$_SESSION['errors'] =  array("Please select a type of reservation");
		header('location: reg_1_solo_group.php');
	}else {
		header('location: checkSoloGroup.php');
	}
}
//step 1 of solo registration
if(isset($_POST['submitsoloreg1'])) {
	$_SESSION['preference'] = $_POST['preference'];
	$_SESSION['type_of_occupancy'] = $_POST['type_of_occupancy'];
	$_SESSION['gender'] = $_POST['gender'];
	$_SESSION['move_in_date'] = $_POST['move_in_date'];
	$dateNow = date('Y-m-d');
	$gap = date_diff(date_create($_SESSION['move_in_date']), date_create('now'))->m;
	$gapD = date_diff(date_create($_SESSION['move_in_date']), date_create('now'))->d;
	unset($_SESSION['errors']);
	if(empty($_SESSION['preference'])) {
		$_SESSION['errors'] = array("Please select a room preference");
	}
	if(empty($_SESSION['type_of_occupancy'])) {
		$_SESSION['errors'] = array("Please select a type of occupancy");
	}
	if(empty($_SESSION['gender'])){
		$_SESSION['errors'] = array("Please select a gender");
	}
	if($gap > 3) {
		$_SESSION['errors'] =  array("Sorry, your expected move in date should only be 3 months from now");
	}
	if($_SESSION['move_in_date'] < $dateNow) {
		$_SESSION['errors'] =  array("Move in date cannot be in the past.");
	}
	if(isset($_SESSION['errors'])) {
		header('location: solo_reg_1.php');
	} else {
		header('location: checkRooms.php');
	}
}
//step 2 of solo registration
if(isset($_POST['submitsoloreg2'])) {
		$_SESSION['email_add'] = $_POST['email_add'];
		$_SESSION['contact_number'] = $_POST['contact_number'];
		$_SESSION['last_name'] = $_POST['last_name'];
		$_SESSION['first_name'] = $_POST['first_name'];
		$_SESSION['middle_name'] = $_POST['middle_name'];
		$_SESSION['birthday'] = $_POST['birthday'];
		$age = date_diff(date_create($_SESSION['birthday']), date_create('now'))->y;
	    unset($_SESSION['errors']);
		if(empty(trim($_SESSION['first_name'])) || preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $_SESSION['first_name'])) {
			$_SESSION['errors'] =  array("Please enter a valid first name");
		} 
		if(empty(trim($_SESSION['last_name'])) || preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $_SESSION['last_name'])) {
			$_SESSION['errors'] =  array("Please enter a valid last name");
		}
		if(preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $_SESSION['middle_name'])) {
			$_SESSION['errors'] =  array("Please enter a valid middle name");
		}
		if(empty(trim($_SESSION['middle_name'])) || $_SESSION['middle_name'] == null) {
			$_SESSION['middle_name'] = "";
		}
		if(empty(trim($_SESSION['email_add']))) {
			$_SESSION['errors'] =  array("Please enter a valid email address");
		}
		if(!filter_var($_SESSION['email_add'], FILTER_VALIDATE_EMAIL)){
			$_SESSION['errors'] =  array("Invalid email address");
		}
		if(empty(trim($_SESSION['contact_number']))) {
			$_SESSION['errors'] =  array("Please enter a contact number");
		}
		//if(!preg_match("/^[0][9][0-9]{9}$/",$_SESSION['contact_number'])){
			//$_SESSION['errors'] =  array("Please enter a valid contact number");
		//}
		if($age <= 15) {
			$_SESSION['errors'] =  array("Sorry only persons 16 years old and above can reserve");
		}
		if(isset($_SESSION['errors'])) {
			header('Location: registration.php');
		}else {
			header('location: certification.php');
		}
}

//step 1 of group reservation

if(isset($_POST['submitnumpers'])) {
	$_SESSION['numberOfPersons'] = $_POST['numberOfPersons'];
	unset($_SESSION['errors']);
	if(empty(trim($_SESSION['numberOfPersons']))) {
		$_SESSION['errors'] =  array("Please enter a number");
	}
	if($_SESSION['numberOfPersons'] < 2) {
		$_SESSION['errors'] =  array("Please enter a number greater than or equal to 2");
	}
	if($_SESSION['numberOfPersons'] > 4) {
		$_SESSION['errors'] =  array("Please enter a number less than or equal to 4");
	}
			
	if(isset($_SESSION['errors'])) {
			header('location: reg_2_num_persons.php');
	}else {
			header('location: checkGender.php');
	}
}

//step 2 of group reservation

if(isset($_POST['submitgender'])) {
	$_SESSION['gender'] = $_POST['gender'];
	unset($_SESSION['errors']);
	if(empty($_SESSION['gender'])) {
		$_SESSION['errors'] =  array("Please select a gender");
		header('location: checkGender.php');
	} else {
		header('location: checkRelationship.php');
	}
}

//step 3 of group reservation
if(isset($_POST['submitRel'])) {
	$_SESSION['relationship'] = $_POST['relationship'];
	unset($_SESSION['errors']);
	if(empty($_SESSION['relationship'])) {
		$_SESSION['errors'] =  array("Please select a relationship");
		header('location: checkRelationship.php');
	} else {
		header('location:groupReservation_1.php');
	}
}

if(isset($_POST['submitgr1'])) {
	$_SESSION['preference'] = $_POST['preference'];
	unset($_SESSION['errors']);
	if($_SESSION['relationship'] == "others") {
		$_SESSION['type_of_occupancy'] = $_POST['type_of_occupancy'];
		if(empty($_SESSION['type_of_occupancy'])) {
		$_SESSION['errors'] =  array("Please select a type of occupancy");
	    }
	}else {
		$_SESSION['type_of_occupancy'] = "solo";
	}
	if(empty($_SESSION['preference'])) {
		$_SESSION['errors'] =  array("Please select a room preference");
	}
	if(isset($_SESSION['errors'])) {
			header('location: groupReservation_1.php');
	}else {
			header('location: checkAvailability.php');
	}
	
}

if(isset($_POST['submitgr2'])) {
	$numberOfPersons = $_SESSION['numberOfPersons'];
	unset($_SESSION['errors']);
	for($x = 1; $x<=$numberOfPersons; $x++) {
		$_SESSION['lastname'.$x] = $_POST['last_name'.$x];
		$_SESSION['firstname'.$x] = $_POST['first_name'.$x];
		$_SESSION['middlename'.$x] = $_POST['middle_name'.$x];
		$_SESSION['birthday'.$x] = $_POST['birthday'.$x];
		$_SESSION['age'.$x] = date_diff(date_create($_SESSION['birthday'.$x]), date_create('now'))->y;
		if(empty(trim($_SESSION['firstname'.$x])) || preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $_SESSION['firstname'.$x])) {
			$_SESSION['errors'] =  array("Please enter a valid first name");
		} 
		if(empty(trim($_SESSION['lastname'.$x])) || preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $_SESSION['lastname'.$x])) {
			$_SESSION['errors'] =  array("Please enter a valid last name");
		}
		if(empty(trim($_SESSION['middlename'.$x])) || preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $_SESSION['middlename'.$x])) {
			$_SESSION['errors'] =  array("Please enter a valid middle name");
		}
		
		if($_SESSION['age'.$x] <= 15) {
			$_SESSION['errors'] =  array("Sorry only persons 16 years old and above can reserve");
		}
		if($_SESSION['gender'] == "combination") {
			$_SESSION['gender'.$x] = $_POST['gender'.$x];
			if(empty($_SESSION['gender'.$x])) {
				$_SESSION['errors'] =  array("Please select a gender");
			}
		}
	}
	
	if(isset($_SESSION['errors'])) {
			header('location: groupReservation_2.php');
	}else {
			header('location: groupReservation_3.php');
	}
	
}

if(isset($_POST['submitgr3'])) {
	unset($_SESSION['errors']);
	$_SESSION['move_in_date'] = $_POST['move_in_date'];
	$_SESSION['email_add'] = $_POST['email_add'];
	$_SESSION['contact_number'] = $_POST['contact_number'];
	$len = strlen((string)$_SESSION['contact_number']);
	$gap = date_diff(date_create($_SESSION['move_in_date']), date_create('now'))->m;
	$gapD = date_diff(date_create($_SESSION['move_in_date']), date_create('now'))->d;
	if(empty(trim($_SESSION['email_add']))) {
			$_SESSION['errors'] =  array("Please enter a valid email address");
	}
	if(!filter_var($_SESSION['email_add'], FILTER_VALIDATE_EMAIL)){
			$_SESSION['errors'] =  array("Invalid email address");
	}
	if(empty(trim($_SESSION['contact_number']))) {
			$_SESSION['errors'] =  array("Please enter a valid contact number");
	}
	if($gap > 3) {
		$_SESSION['errors'] =  array("Sorry, your expected move in date should only be 3 months from now");
	}
	if($gapD < 1) {
		$_SESSION['errors'] =  array("Invalid expected move in date.");
	}
	if(isset($_SESSION['errors'])) {
			header('location: groupReservation_3.php');
	}else {
			header('location: certification.php');
	}
}

if(isset($_POST['submitPerIn'])) {
		unset($_SESSION['errors']);
	$_SESSION['title'] = $_POST['title'];
	$_SESSION['nationality'] = $_POST['nationality'];
	$_SESSION['civil_status'] = $_POST['civil_status'];
	$_SESSION['occupation_status'] = $_POST['occupation_status'];
	$_SESSION['religion'] = $_POST['religion'];
	$_SESSION['house_no'] = $_POST['house_no'];
	$_SESSION['street'] = $_POST['street'];
	$_SESSION['barangay'] = $_POST['barangay'];
	$_SESSION['municipality'] = $_POST['municipality'];
	$_SESSION['province'] = $_POST['province'];
	$_SESSION['international_address'] = $_POST['international_address'];
	$_SESSION['id_number'] = $_POST['id_number'];
	$_SESSION['passport_number'] = $_POST['passport_number'];
	$_SESSION['contact_number'] = $_POST['contact_number'];
	$_SESSION['referred_by'] = $_POST['referred_by'];
	
	if(empty(trim($_SESSION['title']))) {
		$_SESSION['errors'] =  array("Please enter a valid title");
	}
	
	if(empty(trim($_SESSION['nationality']))) {
		$_SESSION['errors'] =  array("Please enter a valid nationality");
	}
	if($len > 11) {
		$_SESSION['errors'] =  array("Please enter a valid contact number");
	}
	if(empty($_SESSION['civil_status'])){
		$_SESSION['errors'] =  array("Please select a civil status");
	}
	
	if(empty($_SESSION['occupation_status'])){
		$_SESSION['errors'] =  array("Please select an occupational status");
	}
	
	if(empty(trim($_SESSION['religion'])) || $_SESSION['religion'] == null) {
		$_SESSION['religion'] = "";
	}
	
	if(empty(trim($_SESSION['provincial_address']))) {
		$_SESSION['errors'] =  array("Please enter a provincial address");
	}
	
	if(empty(trim($_SESSION['international_address'])) || $_SESSION['international_address'] == null) {
		$_SESSION['provincial_address'] = "";
	}
	
	if(empty(trim($_SESSION['id_number']))) {
		$_SESSION['errors'] =  array("Please enter an id number");
	}
	
	if(empty(trim($_SESSION['passport_number'])) || $_SESSION['passport_number'] == null) {
		$_SESSION['passport_number'] = "";
		
	}
	if(empty(trim($_SESSION['contact_number']))) {
		$_SESSION['errors'] =  array("Please enter a contact_number");
	}
	if(empty(trim($_SESSION['referred_by'])) || $_SESSION['referred_by'] == null) {
		$_SESSION['referred_by'] = "";
		
	}
	
	if(isset($_SESSION['errors'])) {
			header('location: personalInformation.php');
	}else {
			header('location: otherPersonal.php');
	}
	
}

if(isset($_POST['submitOtherPer'])){
	$_SESSION['name_of_school'] = $_POST['name_of_school'];
	$_SESSION['name_of_hschool'] = $_POST['name_of_hschool'];
	$_SESSION['school_address_hs'] = $_POST['school_address_hs'];
	$_SESSION['tel_num_hs'] = $_POST['tel_num_hs'];
	$_SESSION['course_and_year'] = $_POST['course_and_year'];
	$_SESSION['name_of_company'] = $_POST['name_of_company'];
	$_SESSION['company_address'] = $_POST['company_address'];
	$_SESSION['occupation_position'] = $_POST['occupation_position'];
	$_SESSION['nature_of_business'] = $_POST['nature_of_business'];
	$_SESSION['tel_num_bus'] = $_POST['tel_num_bus'];
	$_SESSION['father'] = $_POST['father'];
	$_SESSION['father_occupation'] = $_POST['father_occupation'];
	$_SESSION['father_tel_num'] = $_POST['father_tel_num'];
	$_SESSION['mother'] = $_POST['mother'];
	$_SESSION['mother_occupation'] = $_POST['mother_occupation'];
	$_SESSION['mother_tel_num'] = $_POST['mother_tel_num'];
	$_SESSION['guardian'] = $_POST['guardian'];
	$_SESSION['guardian_occupation'] = $_POST['guardian_occupation'];
	$_SESSION['guardian_tel_num'] = $_POST['guardian_tel_num'];
	$_SESSION['spouse'] = $_POST['spouse'];
	$_SESSION['spouse_occupation'] = $_POST['spouse_occupation'];
	$_SESSION['spouse_tel_num'] = $_POST['spouse_tel_num'];
	$_SESSION['health'] = $_POST['health'];
	
	if(empty(trim($_SESSION['name_of_school']))) {
		$_SESSION['errors'] =  array("Please enter the name of your school");
	}
	
	if(empty(trim($_SESSION['name_of_hschool']))) {
		$_SESSION['errors'] =  array("Please enter the name of your high school");
	}
	
	if(empty(trim($_SESSION['school_address_hs']))) {
		$_SESSION['errors'] =  array("Please enter the address of your high school");
	}
	
	if(empty(trim($_SESSION['tel_num_hs']))) {
		$_SESSION['errors'] =  array("Please enter the telephone number of your school");
	}
	
	if(empty(trim($_SESSION['course_and_year']))) {
		$_SESSION['errors'] =  array("Please enter your course and year");
	}
	
	if($_SESSION['occupation_status'] == "employed") {
		
		if(empty(trim($_SESSION['name_of_company']))){
			$_SESSION['errors'] =  array("Please enter the name of your company");
		}
		
		if(empty(trim($_SESSION['company_address']))){
			$_SESSION['errors'] =  array("Please enter the your company address");
		}
		
		if(empty(trim($_SESSION['occupation_position']))){
			$_SESSION['errors'] =  array("Please enter your occupation or position");
		}
		
		if(empty(trim($_SESSION['nature_of_business']))){
			$_SESSION['errors'] =  array("Please enter the nature of your business");
		}
		
		if(empty(trim($_SESSION['tel_num_bus']))){
			$_SESSION['errors'] =  array("Please enter the telephone number of your company");
		}
	}
	
	if(empty(trim($_SESSION['father'])) && empty(trim($_SESSION['mother']))){
			$_SESSION['errors'] =  array("Please enter the information about your mother or father");
	}else{
		if(!empty(trim($_SESSION['father']))) {
			if(empty(trim($_SESSION['father_occupation']))) {
				$_SESSION['errors'] =  array("Please enter your father's occupation");
			}
			if(empty(trim($_SESSION['father_tel_num']))) {
				$_SESSION['errors'] =  array("Please enter your father's contact number");
			}
		}
		if(!empty(trim($_SESSION['mother']))) {
			if(empty(trim($_SESSION['mother_occupation']))) {
				$_SESSION['errors'] =  array("Please enter your father's occupation");
			}
			if(empty(trim($_SESSION['mother_tel_num']))) {
				$_SESSION['errors'] =  array("Please enter your father's contact number");
			}
		}
		if(!empty(trim($_SESSION['guardian']))) {
			$_SESSION['guardian'] = "";
			$_SESSION['guardian_occupation'] = "";
			$_SESSION['guardian_tel_num'] = "";
		}
		if(!empty(trim($_SESSION['spouse']))) {
			$_SESSION['spouse'] = "";
			$_SESSION['spouse_occupation'] = "";
			$_SESSION['spouse_tel_num'] = "";
		}
	}
	
	
	if(empty(trim($_SESSION['health']))){
			$_SESSION['errors'] =  array("Please enter you health problems");
	}
	
	
	
	if(isset($_SESSION['errors'])) {
			header('location: otherPersonal.php');
	}else {
			header('location: saveInfoTenant.php');
	}
}	
?>