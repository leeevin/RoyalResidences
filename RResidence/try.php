
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
               <a class="navbar-brand" href="index.php">Royal Residence</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">About</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li class ="active"><a href="reg_1_solo_group.php">Reservation</a></li>
                    <li><a href="reservationStatus.php">Reservation Status</a></li>
                </ul>
                  
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">
        <div class="container-fluid">
        <div class ="row" >
            <div class="col-lg-12">
                <h1 class="page-header">Registration
                </h1>
				<form action = "try.php" method = "post" enctype = "multipart/form-data">
                    <div class ="row" >
                        <div class="col-lg-12">
                            <div class ="container-fluid">
                                <div class ="page-header">
                                    <h3><i class="glyphicon glyphicon-file"></i> Certification</h3>
                                </div>
							<table>
								<tr>
									<td><p><label>Please upload an image</label></p></td>
                                <td><div class="form-group">
                                    <input type="file" name = "file">
                                </div></td>
								</tr>
								<?php
								session_start();
								$count = $_SESSION['counter'];
										if(isset($_POST['new'])) {
											$count++;
										for($x=1; $x<$count; $x++) {
								?>
								<tr>
									<td><p><label>Please upload an image</label></p></td>
                                <td><div class="form-group">
                                    <input type="file" name = "file">
                                </div></td>
								</tr>
								<?php }
										}?>
							</table>
									<div class = "pageButton">
										<ul class = "pager">
											<li><input type = "submit" value ="upload new" name = "new" class="btn btn-default"></li>
										</ul>
									</div>
                            </div>
                        </div>
                    </div>
                    <hr>
						<div class = "pageButton">
							<ul class = "pager">
								<li><input type = "submit" value ="next" name = "submitcert" class="btn btn-default"></li>
							</ul>
						</div>
					</form>
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
