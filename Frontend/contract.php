<?php
include('session.php'); 
if(!isset($_SESSION['login_user'])){
header("location: tenantLogin.php");
}
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
    </nav>

   

    <!-- Page Content -->
    <div class="container">
<h2>Contract of Lease</h2>
	<hr>
		<p class="pmargL">This <b>CONTRACT OF LEASE</b> made by and between, <b>BESTWAY Construction and Development Corporation,</b> represented herein by <b>JOCELYN S. GACO,</b>  General Manager, hereinafter referred as the and <b>YRA J. BACALANMO (FILIPINO, SINGLE, AGE 20, STUDYING IN SLU, WITH THE COURSE AND YEAR: BSIT 4 )</b>, with address at <b>BRGY. GUISET NORTE, SAN MANUEL, PANGASINAN</b> hereinafter referres to as the <b>LESSEE.</b></p>	
		<br>
		<p class="indent">1. <b>Lessor</b> hereby leases and rents ta <b>LESSEE</b> the premises deseribed as follows: A <b>bedspace</b>.</p>
		<p class="indent">2. Lease shall be for a term of <b>one year</b> commencing on <b>AUGUST, 2015</b> , and expiring on
							<b>JULY 31,2016</b> . If the <b>LESSEE</b> has not signed a renewal but continued to stay in the dormitory, <b>the contract is
							deemed renewed for another year.</b></p>
		<p class="indent">3. <b>LESSEE</b> shall make a <b><i>SECURITY DEPOSIT</i></b> equivalent to <b>TWO (2) month/s</b> in the amount of <b>EIGHT
					THOUSAN ONLY (Php 8,000.00) </b>, subject for refund after the said term, and after deducting all the
					liabilities of the <b>LESSEE</b> and a minimum charge of  <b>P500.00 termination fee per tenant, ftnlshed or unfinlshed
					contract, </b> to be used for the general maintenance of the room. ln case of  <b>pre-termination of contract for
					whatever reason by the LESSEE, the security deposit shall be forfeited in favor of the LESSOR. </b> Renewal of
					contract shalt be notified to the LESSOR 60 davf prior to contract termination, otherwise. the room shall be
					considered open upon contract termination.</p>
		<p class="indent">4. <b>LESSEE</b> shall pay also in advance the monthly rental of <b>FOUR THOUSAND ONLY (Php 4,000.00)</b> less <u><b>the
					loyalty discount of 5% if the residency is more than one year and the increment of 1% for every year thereafter. The discount however will only be availed if the account is updated, otherwise the regular rate shall prevail</b></u> prevail payable on or before the first day of each applicable month with grace period of ten (10) days.
					Delayed payments will be charged with corresponding penalty equivalent to <b>25% per annum per day of delay reckoned from the first day of the applicable rental month.</b></p>
		<p class="indent">5. LESSEE further agrees that:</p>
				<p class="indent1">A) He/She shall not conduct a business deemed extra hazardous, a nuisance or danger to health and safety of
							residents like fire, explosives, drugs or similar items. <b>LESSEE warrants the leased premises shall be for
							RESDIDENTlAL</b> use only.</p>
				<p class="indent1">B) Upon the expiration of the lease he/she will return possession of the leased premises in its present gcod
							condition.</p>
				<p class="indent1">C) ln the event of any breach of payment for rent or any other allowed charges, or other breach of this Lease
									and the established House Rules of the Dormitory, LESSOR shall have full rights to terminate this Lease in
									accordance with existing laws and re-enter and claim possession of the leased premises, in addition to
									such other remedies available to LESSOR arising from said breach; (1) charging legal PENALTIES ()25% per
									annum x no. of days) on overdue accountt (2) damages for lost or broken room fixtures and accessories
									like door knobs door & cabinet keys, and others.</p>
		<p class="indent">6. This Lease shalt be binding upon the agreed LESSEE cnly and not to insure to the benefit of other parties, their
								successors, assigns and personal representatives. lt shall be the prerogative of the LESSOR to assign unit /
								room to applicant -tenant to maximize occupancy.</p>
		<p class="indent">7. Additional Lease terms:</p>
				<p class="indent1">A) <b>CHARGES FOR POWER & WATER SERVICES</b>- charges for electricity and water utilized within the residential
					condominium unit shall be proportionately divided among the unit / room occupants.</p>
				<p class="indent1">B) <b>INSPECTION OF THE PREMISES</b>- the LESSOR or her authorized agent reserves the right to enter and
					inspect the leased premises at reasonable time during business hours as the need arises.</p>
				<p class="indent1">C) <b>HOUSE RULES, REGULATIONS AND BUILDING POLICIES</b>- the LESSEE (Resident) will comply with any and
					all reasonable house rulet safety regulations and building policies which may be promulgated from time
					to time by the LESSOR, and with existing rules by the government arising from or pertinent to the use,
					occupancy, safety and sanitation of the leased premises. The residence management shall exereise the
					prerogative to terminate lease or issue an eviction order to the resident or tenant who have grave
					misconduct and violation of the established house rules.</p>
		<p class="pmargL">Signed this __ day of ________.</p>
	<hr>
	</div>

    
       
	   
	   
	   
	   
	   
	   
	   
            
        

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
