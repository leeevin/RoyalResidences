<?php
	session_start();
	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$db = "royaldb";

	try {
		
		if($_POST['formSubmit'] == "Submit"){
		   $e1 = $_POST['electricity1'];
		   $w1 = $_POST['water1'];
		   $e2 = $_POST['electricity2'];
		   $w2 = $_POST['water2'];
		   $e3 = $_POST['electricity3'];
		   $w3 = $_POST['water3'];
		   $e4 = $_POST['electricity4'];
		   $w4 = $_POST['water4'];
		   $e5 = $_POST['electricity5'];
		   $w5 = $_POST['water5'];
		   $e6 = $_POST['electricity6'];
		   $w6 = $_POST['water6'];
		   $e7 = $_POST['electricity7'];
		   $w7 = $_POST['water7'];
		   $e8 = $_POST['electricity8'];
		   $w8 = $_POST['water8'];
		   $e9 = $_POST['electricity9'];
		   $w9 = $_POST['water9'];
		   $e10 = $_POST['electricity10'];
		   $w10 = $_POST['water10'];
		   $e11 = $_POST['electricity11'];
		   $w11 = $_POST['water11'];
		   $e12 = $_POST['electricity12'];
		   $w12 = $_POST['water12'];
		   $e13 = $_POST['electricity13'];
		   $w13 = $_POST['water13'];
		   $e14 = $_POST['electricity14'];
		   $w14 = $_POST['water14'];
		   $u1 = '101';
		   $u2 = '102';
		   $u3 = '201';
		   $u4 = '202';
		   $u5 = '301';
		   $u6 = '302';
		   $u7 = '401';
		   $u8 = '402';
		   $u9 = '501';
		   $u10 = '502';
		   $u11 = '601';
		   $u12 = '601A';
		   $u13 = '602';
		   $u14 = '602A';
		   
		   $conn = new PDO("mysql:host=$servername;dbname=$db", $dbusername, $dbpassword);
				
			// set the PDO error mode to exception
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "UPDATE city_services SET electricityBill='".$e1."', waterBill='".$w1."', noOfTenants=(SELECT COUNT(*) FROM tenant WHERE room LIKE '%".$u1."%') WHERE unitNo='".$u1."';
					UPDATE city_services SET electricityBill='".$e2."', waterBill='".$w2."', noOfTenants=(SELECT COUNT(*) FROM tenant WHERE room LIKE '%".$u2."%') WHERE unitNo='".$u2."';
					UPDATE city_services SET electricityBill='".$e3."', waterBill='".$w3."', noOfTenants=(SELECT COUNT(*) FROM tenant WHERE room LIKE '%".$u3."%') WHERE unitNo='".$u3."';
					UPDATE city_services SET electricityBill='".$e4."', waterBill='".$w4."', noOfTenants=(SELECT COUNT(*) FROM tenant WHERE room LIKE '%".$u4."%') WHERE unitNo='".$u4."';
					UPDATE city_services SET electricityBill='".$e5."', waterBill='".$w5."', noOfTenants=(SELECT COUNT(*) FROM tenant WHERE room LIKE '%".$u5."%') WHERE unitNo='".$u5."';
					UPDATE city_services SET electricityBill='".$e6."', waterBill='".$w6."', noOfTenants=(SELECT COUNT(*) FROM tenant WHERE room LIKE '%".$u6."%') WHERE unitNo='".$u6."';
					UPDATE city_services SET electricityBill='".$e7."', waterBill='".$w7."', noOfTenants=(SELECT COUNT(*) FROM tenant WHERE room LIKE '%".$u7."%') WHERE unitNo='".$u7."';
					UPDATE city_services SET electricityBill='".$e8."', waterBill='".$w8."', noOfTenants=(SELECT COUNT(*) FROM tenant WHERE room LIKE '%".$u8."%') WHERE unitNo='".$u8."';
					UPDATE city_services SET electricityBill='".$e9."', waterBill='".$w9."', noOfTenants=(SELECT COUNT(*) FROM tenant WHERE room LIKE '%".$u9."%') WHERE unitNo='".$u9."';
					UPDATE city_services SET electricityBill='".$e10."', waterBill='".$w10."', noOfTenants=(SELECT COUNT(*) FROM tenant WHERE room LIKE '%".$u10."%') WHERE unitNo='".$u10."';
					UPDATE city_services SET electricityBill='".$e11."', waterBill='".$w11."', noOfTenants=(SELECT COUNT(*) FROM tenant WHERE room LIKE '%".$u11."%') WHERE unitNo='".$u11."';
					UPDATE city_services SET electricityBill='".$e12."', waterBill='".$w12."', noOfTenants=(SELECT COUNT(*) FROM tenant WHERE room LIKE '%".$u12."%') WHERE unitNo='".$u12."';
					UPDATE city_services SET electricityBill='".$e13."', waterBill='".$w13."', noOfTenants=(SELECT COUNT(*) FROM tenant WHERE room LIKE '%".$u13."%') WHERE unitNo='".$u13."';
					UPDATE city_services SET electricityBill='".$e14."', waterBill='".$w14."', noOfTenants=(SELECT COUNT(*) FROM tenant WHERE room LIKE '%".$u14."%') WHERE unitNo='".$u14."';
					";
			$sqlCheck = $conn->query($sql);
			
			
		}
	
			
	}catch(PDOException $e){
		
	}
	header("Location:bills.php"); 
?>