<?php 
session_start();
include('connect.php');
	if(isset($_FILES['file'])){
		$file = $_FILES['file'];
		
		///print_r($file)
				//file properties
						$file_name = $file['name'];
						$file_tmp = $file['tmp_name'];
						$file_size = $file['size']; 
						$file_error = $file['error'];
		//file extensions
				$file_ext = explode('.', $file_name);
				$file_ext = strtolower(end($file_ext));
			//	print_r($file_ext);
			
				$allowed = array('pdf','jpg', 'png');

				if(in_array($file_ext, $allowed)){
					if($file_error === 0){
						if($file_size <= 2097152){

							$file_name_new = $_SESSION['reservation_code']. '.' . $file_ext;
							$file_destination = 'uploadedfiles/' . $file_name_new;
							

						//	$dirpath = realpath(dirname(getcwd()));
							if(move_uploaded_file($file_tmp, $file_destination)){
								echo $file_destination;
								
							}
							if(file_exists($file_destination)) {
							
							}

						}
					}
				}

			}
			
			if(isset($_FILES['file1'])){
				$file = $_FILES['file1'];
		
		///print_r($file)
				//file properties
						$file_name = $file['name'];
						$file_tmp = $file['tmp_name'];
						$file_size = $file['size']; 
						$file_error = $file['error'];
		//file extensions
				$file_ext = explode('.', $file_name);
				$file_ext = strtolower(end($file_ext));
			//	print_r($file_ext);
			
				$allowed = array('pdf','jpg', 'png');

				if(in_array($file_ext, $allowed)){
					if($file_error === 0){
						if($file_size <= 2097152){

							$file_name_new = $_SESSION['reservation_code']. '1.' . $file_ext;
							$file_destination1 = 'uploadedfiles/' . $file_name_new;
							

						//	$dirpath = realpath(dirname(getcwd()));
							if(move_uploaded_file($file_tmp, $file_destination1)){
								echo $file_destination1;
								
							}
							if(file_exists($file_destination1)) {
							
							}

						}
					}
				}

			}
			
			if(isset($_FILES['file2'])){
				$file = $_FILES['file2'];
		
		///print_r($file)
				//file properties
						$file_name = $file['name'];
						$file_tmp = $file['tmp_name'];
						$file_size = $file['size']; 
						$file_error = $file['error'];
		//file extensions
				$file_ext = explode('.', $file_name);
				$file_ext = strtolower(end($file_ext));
			//	print_r($file_ext);
			
				$allowed = array('pdf','jpg', 'png');

				if(in_array($file_ext, $allowed)){
					if($file_error === 0){
						if($file_size <= 2097152){

							$file_name_new = $_SESSION['reservation_code']. '2.' . $file_ext;
							$file_destination2 = 'uploadedfiles/' . $file_name_new;
							

						//	$dirpath = realpath(dirname(getcwd()));
							if(move_uploaded_file($file_tmp, $file_destination2)){
								echo $file_destination2;
								
							}
							if(file_exists($file_destination2)) {
							
							}

						}
					}
				}

			}
			
			if(isset($_FILES['file3'])){
				$file = $_FILES['file3'];
		
		///print_r($file)
				//file properties
						$file_name = $file['name'];
						$file_tmp = $file['tmp_name'];
						$file_size = $file['size']; 
						$file_error = $file['error'];
		//file extensions
				$file_ext = explode('.', $file_name);
				$file_ext = strtolower(end($file_ext));
			//	print_r($file_ext);
			
				$allowed = array('pdf','jpg', 'png');

				if(in_array($file_ext, $allowed)){
					if($file_error === 0){
						if($file_size <= 2097152){

							$file_name_new = $_SESSION['reservation_code']. '3.' . $file_ext;
							$file_destination3 = 'uploadedfiles/' . $file_name_new;
							

						//	$dirpath = realpath(dirname(getcwd()));
							if(move_uploaded_file($file_tmp, $file_destination3)){
								echo $file_destination3;
								
							}
							if(file_exists($file_destination3)) {
							
							}

						}
					}
				}

			}
			
			if(isset($_FILES['file4'])){
				$file = $_FILES['file4'];
		
		///print_r($file)
				//file properties
						$file_name = $file['name'];
						$file_tmp = $file['tmp_name'];
						$file_size = $file['size']; 
						$file_error = $file['error'];
		//file extensions
				$file_ext = explode('.', $file_name);
				$file_ext = strtolower(end($file_ext));
			//	print_r($file_ext);
			
				$allowed = array('pdf','jpg', 'png');

				if(in_array($file_ext, $allowed)){
					if($file_error === 0){
						if($file_size <= 2097152){

							$file_name_new = $_SESSION['reservation_code']. '4.' . $file_ext;
							$file_destination4 = 'uploadedfiles/' . $file_name_new;
							

						//	$dirpath = realpath(dirname(getcwd()));
							if(move_uploaded_file($file_tmp, $file_destination4)){
								echo $file_destination4;
								
							}
							if(file_exists($file_destination4)) {
							
							}

						}
					}
				}

			}
			if(isset($_POST['submitcert'])) {
				if($_SESSION['type_of_reservation'] == "group") {
					if($_SESSION['numberOfPersons'] == 2){
							$sql1 = "INSERT INTO reservation (picturePath) VALUES ('$file_destination1')
							where lastName == $_SESSION['last_name1'] and firstName == $_SESSION['first_name1']
							and middleName == $_SESSION['middle_name1'];";
							$sql2 = "INSERT INTO reservation (picturePath) VALUES ('$file_destination2')
							where lastName == $_SESSION['last_name2'] and firstName == $_SESSION['first_name2']
							and middleName == $_SESSION['middle_name2'];";
							mysqli_query($conn, $sql1);
							mysqli_query($conn, $sql2);
							header("location: saveInfo.php");
							
					} else if($_SESSION['numberOfPersons'] == 3){
							$sql1 = "INSERT INTO reservation (picturePath) VALUES ('$file_destination1')
							where lastName == $_SESSION['last_name1'] and firstName == $_SESSION['first_name1']
							and middleName == $_SESSION['middle_name1'];";
							$sql2 = "INSERT INTO reservation (picturePath) VALUES ('$file_destination2')
							where lastName == $_SESSION['last_name2'] and firstName == $_SESSION['first_name2']
							and middleName == $_SESSION['middle_name2'];";
							$sql3 = "INSERT INTO reservation (picturePath) VALUES ('$file_destination3')
							where lastName == $_SESSION['last_name3'] and firstName == $_SESSION['first_name3']
							and middleName == $_SESSION['middle_name3'];";
							mysqli_query($conn, $sql1);
							mysqli_query($conn, $sql2);
							mysqli_query($conn, $sql3);
							header("location: saveInfo.php");
							
					}else{
							$sql1 = "INSERT INTO reservation (picturePath) VALUES ('$file_destination1')
							where lastName == $_SESSION['last_name1'] and firstName == $_SESSION['first_name1']
							and middleName == $_SESSION['middle_name1'];";
							$sql2 = "INSERT INTO reservation (picturePath) VALUES ('$file_destination2')
							where lastName == $_SESSION['last_name2'] and firstName == $_SESSION['first_name2']
							and middleName == $_SESSION['middle_name2'];";
							$sql3 = "INSERT INTO reservation (picturePath) VALUES ('$file_destination3')
							where lastName == $_SESSION['last_name3'] and firstName == $_SESSION['first_name3']
							and middleName == $_SESSION['middle_name3'];";
							$sql4 = "INSERT INTO reservation (picturePath) VALUES ('$file_destination4')
							where lastName == $_SESSION['last_name4'] and firstName == $_SESSION['first_name4']
							and middleName == $_SESSION['middle_name4'];";
							mysqli_query($conn, $sql1);
							mysqli_query($conn, $sql2);
							mysqli_query($conn, $sql3);
							mysqli_query($conn, $sql4);
							header("location: saveInfo.php");
					}
				}else{
					$sql = "INSERT INTO reservation (picturePath) VALUES ('$file_destination');";
					mysqli_query($conn, $sql);
					header("location: saveInfo.php");
				}
			} 
			if(isset($_POST['submitstat'])) {
				$sql = "INSERT INTO reservation (reservationPath) VALUES ('$file_destination');";
				mysqli_query($conn, $sql);
				header("location: thankyou.php");
			}
			if(isset($_POST['submitdep'])) {
				$sql = "INSERT INTO reservation (fullPaymentPath) VALUES ('$file_destination') where
				lastName == $_SESSION['last_name'];";
				mysqli_query($conn, $sql);
				header("location: thankyou.php");
			}
			
?>