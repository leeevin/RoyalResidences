<?php
	session_start();
	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$db = "royaldb";

	try {
		
		if($_POST['formSubmit'] == "Submit"){
		   
		   $conn = new PDO("mysql:host=$servername;dbname=$db", $dbusername, $dbpassword);
				
			// set the PDO error mode to exception
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "SELECT * FROM tenant";
			$res = $conn->query($sql);
			
			//Dates
			$billingDate = date('Y-m-01');
			$dueDate = date('Y-m-d', strtotime('last day of next month'));
			
			while($rowSub = $res->fetch(PDO::FETCH_LAZY)){
				$tenantID = $rowSub['tenantId'];
				echo "1~".$tenantID ."\n";
				echo "2~".$billingDate ."\n";
				echo "3~".$dueDate ."\n";
				$distilledH2O = '50';
				echo "4~".$distilledH2O ."\n";
				$room = $rowSub['room'];
				$unit = substr($room, 0, -1);
				echo "5~".$unit ."\n";
				
				$sql2 = "SELECT * FROM bills WHERE tenantID = '".$tenantID."' ORDER BY billNo DESC LIMIT 1;";
				$res2 = $conn->query($sql2);
				$rowSub2 = $res2->fetch(PDO::FETCH_LAZY);
				
				$securityDeposit = $rowSub2['securityDeposit'];
				echo "6~".$securityDeposit ."\n";
				$previousBalance = $rowSub2['previousBalance'];
				echo "7~".$previousBalance ."\n";
				$advanceRental = $rowSub2['advanceRental'];
				echo "8~".$advanceRental ."\n";
				
				$sql3 = "SELECT * FROM city_services WHERE unitNo LIKE '$unit';";
				$res3 = $conn->query($sql3);
				$rowSub3 = $res3->fetch(PDO::FETCH_LAZY);
				
				$cityServices = $rowSub3['electricityBill']/$rowSub3['noOfTenants'] + $rowSub3['waterBill']/$rowSub3['noOfTenants'];
				$cityServices = ceil($cityServices);
				echo "9~".$cityServices ."\n";
				
				$sql4 = "SELECT * FROM other_charges WHERE tenantID = '".$tenantID."';";
				$res4 = $conn->query($sql4);
				$rowSub4 = $res4->fetch(PDO::FETCH_LAZY);
				
				$misc = $rowSub4['misc'];
				echo "10~".$misc ."\n";
				$mealTicket = $rowSub4['mealTicket'];
				echo "11~".$mealTicket ."\n";
				
				$sql5 = "SELECT * FROM contractdetails WHERE tenantId = '".$tenantID."';";
				$res5 = $conn->query($sql5);
				$rowSub5 = $res5->fetch(PDO::FETCH_LAZY);
				
				$monthlyRate = $rowSub5['monthlyRate'];
				if(empty($monthlyRate)){
					$monthlyRate = 0;
				}
				echo "12~".$monthlyRate ."\n";
				
				$totalBilling = $monthlyRate + $misc + $mealTicket;
				echo "13~".$totalBilling ."\n";
				$currentBalance = $totalBilling + $previousBalance;
				echo "14~".$currentBalance ."\n";
				$billNo = 45;
				echo "15~".$billNo ."\n";
				$penalties = 55;
				echo "16~".$penalties ."\n";
				echo "\r\n";
				
				$sql6 = "INSERT INTO currentbills (tenantID, billNo, billingDate, securityDeposit, previousBalance, advanceRental, cityServices, dH20, mealTicket, misc, totalBilling, dateDue, penalties, currentBalance, rate) 
				VALUES ('".$tenantID."', '".$billNo."', '".$billingDate."', '".$securityDeposit."', '".$previousBalance."', '".$advanceRental."', '".$cityServices."', '".$distilledH2O."', '".$mealTicket."', '".$misc."', '".$totalBilling."', '".$dueDate."', '".$penalties."', '".$currentBalance."', '".$monthlyRate."');";
				//$sql6 = "INSERT INTO currentbills (tenantID, billNo, billingDate, securityDeposit, previousBalance, advanceRental, cityServices, dH20, mealTicket, misc, totalBilling, dateDue, penalties, currentBalance, rate) 
				//VALUES ($tenantID, $billNo, $billingDate, $securityDeposit, $previousBalance, $advanceRental, $cityServices, $distilledH2O, $mealTicket, $misc, $totalBilling, $dueDate, $penalties, $currentBalance, $monthlyRate);";
				echo $sql6;
				$res6 = $conn->query($sql6);
				
			}
		}
	
			
	}catch(PDOException $e){
		
	}
	header("Location:bills.php"); 
	//INSERT INTO bills SELECT * FROM currentBills; DELETE FROM currentBills; --> FIRST STEP
	//SELECT * FROM bills where tenantID = 'RR1410014' ORDER BY billNo DESC LIMIT 1 ; --> advanceRental, securityDeposit, previousBalance
	//SELECT COUNT(*) FROM tenant WHERE room LIKE '%".$u14."%'
	//INSERT INTO currentBills (tenantID, billNo, billingDate, securityDeposit, previousBalance, advanceRental, cityServices, dH20, mealTicket, misc, totalBilling, dateDue, penalties, currentBalance, rate) VALUES ();
?>