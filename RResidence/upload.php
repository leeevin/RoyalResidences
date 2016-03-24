<?php 
session_start();
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
							$_SESSION['path'] = $file_destination;

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
			if(isset($_POST['submitcert'])) {
				header("location: saveInfo.php");
			} 
			if(isset($_POST['submitstat'])) {
				header("location: thankyou.php");
			}
?>