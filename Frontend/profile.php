<?php
include('session.php'); 
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Royal Residence - Tenant</title>

    <!-- Bootstrap Core CSS -->
    <link href="css2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css2/css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="profile.php">Royal Residence</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
								<li><a href="profile.php">Profile</a></li>
								<li><a href="contract.php">Contract</a></li>
								<li><a href="billStatement.php">Billing Statement</a></li>
								<li><a href="ledger.php">Ledger</a></li>
								<li> <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
				 </ul>
                    
        </div>
        <!-- /.container -->
    </nav>

   

    <!-- Page Content -->
    <div class="container">
	<h2> <?php echo $printFirstname . " " . $printLastname ?></h2>
	<hr>
	
	 <!-- Image and edit profile button -->
	<div class="col-lg-3">
			<img src="css/prof.jpg" id="tenant" alt=""> 
			
        <div class="margup">				
			<button type="button" class="btn btn-default" name = "uploadPic" id = "uploadPic">Change Profile Picture</button>	
		</div>
		<div class="margup">
			<button type="button" class="btn btn-default">Update Phone Number</button>	
		</div>
     </div>
	 <br>
	  
	  
	  <!-- Profile Information -->
	 <div class="col-lg-8">


	 		<div class ="subtitle">TENANCY CONTRACT DETAILS</div>
			<table>
			 <tbody>
				 <tr>
				 <td><p class="ptitle">	Contract No:</p></td>
				 <td><p class="pmargL"><?php echo $printContractNo ?></p></td>
				 </tr>
				 <tr>
				 <td><p class="ptitle"> Expected Move-in date:</p></td>
				 <td><p class="pmargL"><?php echo $printMoveinDate ?></p></td>
				 </tr>
				 <tr>
				 <td><p class="ptitle"> Termination date:</p></td>
				 <td><p class="pmargL"><?php echo $printTerminationDate?></p></td>
				 </tr>
				 <tr>
				 <td><p class="ptitle">Room:</p></td>
				 <td><p class="pmargL"><?php echo $printRoom ?></p></td>
				 </tr>
				 <tr>
				 <td><p class="ptitle">Monthly Rate:</p></td>
				 <td><p class="pmargL"><?php echo $printMonthlyRate ?></p></td>
				 </tr>
			 </tbody>
			</table>
			 <form>
				<div class="margup">				
					<button type="button" class="btn btn-default" name = "uploadPic" id = "uploadPic">Request Room Change</button>	
				</div>
				<div class="margup">
					<button type="button" class="btn btn-default">Request Contract Extension</button>	
				</div>
			</form>



		<div class ="subtitle">PERSONAL INFORMATION</div>
			<table>
			 <tbody>
				 <tr>
				 <td><p class="ptitle">Full Name:</p></td>
				 <td><p class="pmargL"><?php echo $printFirstname . " " . $printLastname ?></p></td>
				 </tr>
				 <tr>
				 <td><p class="ptitle">Gender:</p></td>
				 <td><p class="pmargL"><?php echo $printGender ?></p></td>
				 </tr>
				 <tr>
				 <td><p class="ptitle">Civil Status:</p></td>
				 <td><p class="pmargL"><?php echo $printCivil ?></p></td>
				 </tr>
				 <tr>
				 <td><p class="ptitle">Birthday:</p></td>
				 <td><p class="pmargL"><?php
				 					$newvalue = date('m-d-y', strtotime($printBirthday)); 
				 					echo $newvalue ?></p></td>
				 </tr>
				 <tr>
				 <td><p class="ptitle">Religion:</p></td>
				 <td><p class="pmargL"><?php echo $printReligion ?></p></td>
				 </tr>
				 <tr>
				 <td><p class="ptitle">Provincial Address:</p></td>
				 <td><p class="pmargL"><?php echo $houseNo . " ".  $street . " " . $barangay . ",". $municipality . "," . $province ?></p></td>
				 </tr>
				 <tr>
				 <td><p class="ptitle">**International Address:</p></td>
				 <td><p class="pmargL"> <?php echo $printIntAddress ?></p></td>
				 </tr>
				 <tr>
				 <td><p class="ptitle">ID Number:</p></td>
				 <td><p class="pmargL"><?php echo $printIdNO ?></p></td>
				 </tr>
				 <tr>
				 <td><p class="ptitle">Phone Number:</p></td>
				 <td><p class="pmargL"><?php echo $printPhoneNo  ?></p></td>
				 </tr>
				 <tr>
				 <td><p class="ptitle">**Referred by:</p></td>
				 <td><p class="pmargL"><?php echo $printReferredby ?></p></td>
				 </tr>
				 
			 </tbody>
			</table>
		<br><div class ="subtitle">SCHOOL INFORMATION</div>
			<table>
			  <tbody> 
				 <tr>
				 <td><p class="ptitle">Name of School - College:</p></td>
				 <td><p class="pmargL"><?php echo $printCollege ?></p></td>
				 </tr>
				 <tr>
				 <td><p class="ptitle">Name of Highschool:</p></td>
				 <td><p class="pmargL"><?php echo $printHighSchool ?></p></td>
				 </tr>
				 <tr>
				 <td><p class="ptitle">School Address (Highschool):</p></td>
				 <td><p class="pmargL"><?php echo $printSchoolAddress?></p></td>
				 </tr>
				 <tr>
				 <td><p class="ptitle">Telephone Number:</p></td>
				 <td><p class="pmargL"><?php echo $printTelNo ?></p></td>
				 </tr>
				 <tr>
				 <td><p class="ptitle">Course and Year:</p></td>
				 <td><p class="pmargL"><?php echo $printCourseAndYear ?></p></td>
				 </tr>
				</tbody>
			</table>
		<br><div class ="subtitle">FAMILY INFORMATION</div>
			<table>
			  <tbody>
			    <tr>
				 <td><p class="ptitle">Father:</p></td>
				 <td><p class="pmargL"><?php echo $printFatherName ?></p></td>
				 <td><p class="ptitle">Occupation:</p></td>
				 <td><p class="pmargL"><?php echo $printFatherOcc  ?></p></td>
				 <td><p class="ptitle">Number:</p></td>
				 <td><p class="pmargL"><?php echo $printFatherPhone  ?></p></td>
				</tr>
				<tr>
				 <td><p class="ptitle">Mother:</p></td>
				 <td><p class="pmargL"><?php echo $printMotherName  ?></p></td>
				 <td><p class="ptitle">Occupation:</p></td>
				 <td><p class="pmargL"><?php echo $printMotherOcc ?></p></td>
				 <td><p class="ptitle">Number:</p></td>
				 <td><p class="pmargL"><?php echo $printMotherPhone ?></p></td>
				</tr>
				<tr>
				 <td><p class="ptitle">**Spouse:</p></td>
				 <td><p class="pmargL"><?php echo $printSpouseName?></p></td>
				 <td><p class="ptitle">Occupation:</p></td>
				 <td><p class="pmargL"><?php echo $printSpouseOcc ?></p></td>
				 <td><p class="ptitle">Number:</p></td>
				 <td><p class="pmargL"><?php echo $printSpousePhone ?></p></td>
				</tr>
				<tr>
				 <td><p class="ptitle">Guardian:</p></td>
				 <td><p class="pmargL"><?php echo $printGuardianName ?></p></td>
				 <td><p class="ptitle">Occupation:</p></td>
				 <td><p class="pmargL"><?php echo $printGuardianOcc?></p></td>
				 <td><p class="ptitle">Number:</p></td>
				 <td><p class="pmargL"><?php echo $printGuardianPhone ?></p></td>
				</tr>
			  </tbody>
			<table>
		
		
		
		
	
	 </div>
	</div>
	<hr>
 </div>
		<!-- /cont
    
       
	   
	   
	   
	   
	   
	   
	   
            
        

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
