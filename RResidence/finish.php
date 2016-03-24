<?php
 session_start();
 $resCode = $_SESSION['reservation_code'];
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Royal Residence</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
                <a class="navbar-brand" href="index.html">Royal Residence</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.html">About</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li class ="active"><a href="registration.html">Reservation</a></li>
                    <li><a href="status.html">Reservation Status</a></li>
                </ul>
			</div>
		</div>
    </nav>

    <!-- Page Content -->
    <div class="container">
        <div class="container-fluid">
        <div class ="row" >
            <div class="col-lg-12">
                <h1 class="page-header">Registration
                </h1>
                <div class="row">
                    <div class="progress" id="progress1" style="margin-top: 20px; margin-bottom: 0px;">
                        <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">                
                        </div>
                        <span class="progress-type">Registration </span>
						<?php if($_SESSION['soloRes'] == true) {?>
                        <span class="progress-completed">Step 4 of 4</span>
						<?php }?>
						<?php if($_SESSION['groupRes'] == true) {?>
                        <span class="progress-completed">Step 8 of 8</span>
						<?php }?>
                    </div>      
                </div>
                <!--<div class="progress">
                    <div class="progress-bar progress-bar-info" role="progressbar" style="width:25%">
                        Room Reservation
                    </div>
                    <div class="progress-bar progress-bar-danger" role="progressbar" style="width:25%">
                        Personal Information
                    </div>
                    <div class="progress-bar progress-bar-danger" role="progressbar" style="width:25%">
                        Other Personal Information
                    </div>
                    <div class="progress-bar progress-bar-danger" role="progressbar" style="width:25%">
                            Certification
                    </div>
                </div> -->
                    <div class ="row" >
                        <div class="col-lg-12">
                            <div class ="container-fluid">
                                <div class ="page-header">
                                    <h3><i class="glyphicon glyphicon-ok"></i> Reservation</h3>
                                </div>
                                			<p align ="justify">
				For payment, kindly deposit the reservation fee of PHP 1,000.00 to this bank account number: <span class ="inner_message"><u>0000-00122-FS092-00215</u></span>. Once you already have deposited
				your payment, login the reservation ID below to reservation status page to be notified on the confirmation of your reservation.
			</p> 
			
			<p>Thank you for choosing Royal Residence! For more information, call 123-4567, text 09876543212, or email royalresidence@gmail.com</p>
			
			<p>Reservation ID: <u><?php echo $resCode;?></u></p>
                            </div>
                        </div>
                    </div>
                    <hr>
                        <div class = "pageButton">
                            <ul class = "pager">
                               <li><a href = "index.php">Done</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    <!-- /.container -->
            

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Hover popover -->
    <script>
    $(document).ready(function(){
        $('[data-toggle="popover"]').popover();   
    });
    </script>
        
    <!-- Progress Bar -->
    <script type="text/javascript">
    function resetActive(event, percent) {
        $(".progress-bar").css("width", percent + "%").attr("aria-valuenow", percent);
        $(".progress-completed").text(percent + "%");

        $("div").each(function () {
            if ($(this).hasClass("activestep")) {
                $(this).removeClass("activestep");
            }
        });

        if (event.target.className == "col-md-2") {
            $(event.target).addClass("activestep");
        }
        else {
            $(event.target.parentNode).addClass("activestep");
        }
    }
    </script>
</body>

</html>
