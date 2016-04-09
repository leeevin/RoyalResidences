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
					<li><a href="tenantlogin.php">Log in</a></li>
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
                        <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">                
                        </div>
                        <span class="progress-type">Other Personal Information</span>
                 
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
                        <div class="col-md-6">
                        <div class ="page-header">
                            <h3><i class="glyphicon glyphicon-pencil"></i> School Information</h3>
                        </div>
					<form method = "POST" action = "errorPage.php">
                        <div class ="row">
                                <div class="col-md-8">
                                    <div class="control-group form-group">
                                        <div class="controls">
                                            <label>Name of School(College)</label>
                                            <input type ="text" class ="form-control" name = "name_of_school" required>
                                        </div>
                                    </div>
                                    <div class="control-group form-group">
                                        <div class="controls">
                                           <label>Name of High School :</label>
                                            <input type ="text" class ="form-control" name = "name_of_hschool" required>
                                        </div>
                                    </div>
                                    <div class="control-group form-group">
                                        <div class="controls">
                                           <label>School Address (High School) :</label>
                                            <input type ="text" class ="form-control" name = "school_address_hs" required>
                                        </div>
                                    </div>
                                    <div class="control-group form-group">
                                        <div class="controls">
                                           <label>Telephone Number:</label>
                                            <input type ="text" class ="form-control" name = "tel_num_hs">
                                        </div>
                                    </div>
                                    <div class="control-group form-group">
                                        <div class="controls">
                                            <label>Course and Year:</label>
                                            <input type ="text" class ="form-control" name = "course_and_year" required>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                    
                            <div class ="row">
                                <div class="col-md-6">
                            <div class ="page-header">
                                <h3><i class="glyphicon glyphicon-briefcase"></i> Business/Employment Information</h3>
                            </div>
                                <div class="col-md-8">
                                    <div class="control-group form-group">
                                        <div class="controls">
                                           <label>Name of Company:</label>
                                            <input type ="text" class ="form-control" name = "name_of_company">
                                        </div>
                                    </div>
                                    <div class="control-group form-group">
                                        <div class="controls">
                                           <label>Company Address:</label>
                                            <input type ="text" class ="form-control" name = "company_address">
                                        </div>
                                    </div>
                                    <div class="control-group form-group">
                                        <div class="controls">
                                           <label>Occupation/Position:</label>
                                            <input type ="text" class ="form-control" name ="occupation_position">
                                        </div>
                                    </div>
                                    <div class="control-group form-group">
                                        <div class="controls">
                                           <label>Nature of Business:</label>
                                            <input type ="text" class ="form-control" name = "nature_of_business">
                                        </div>
                                    </div>
                                    <div class="control-group form-group">
                                        <div class="controls">
                                           <label>Telephone Number:</label>
                                            <input type ="text" class ="form-control" name = "tel_num_bus">
                                        </div>
                                    </div>
                                </div>
                        </div>
                </div>
                        
                        </div>
                <div class= "row">
                    <div class="row">
                        <div class ="page-header">
                            <h3><i class="glyphicon glyphicon-user"></i> Family Information</h3>
                        </div>
                        <div class ="container-fluid">
                                <div class="panel panel-primary">
                                    <div class ="panel-heading">
                                        <h4>Kindly fill-up completely at least one (1) row below</h4>
                                </div>
                                    <table class ="table-condensed">
                                        <tr>
                                            <td class ="col-md-1"></td>
                                            <td class ="col-sm-2">Name</td>
                                            <td class ="col-sm-2">Occupation</td>
                                            <td class ="col-sm-2">Telephone Number</td>
                                        </tr>
                                        <tr>
                                            <td>Father:</td>
                                             <td><input type="text" class="form-control" name ="father" ></td>
                                             <td><input type="text" class="form-control" name ="father_occupation" ></td>
                                             <td><input type="text" class="form-control" name ="father_tel_num"></td>
                                        </tr>
                                        <tr>
                                            <td>Mother:</td>
                                             <td><input type="text" class="form-control" name ="mother"></td>
                                             <td><input type="text" class="form-control" name ="mother_occupation"></td>
                                             <td><input type="text" class="form-control" name ="mother_tel_num"></td>
                                        </tr>
                                        <tr>
                                            <td>Guardian:</td>
                                            <td><input type="text" class="form-control" name ="guardian"></td>
                                             <td><input type="text" class="form-control" name ="guardian_occupation"<td>
                                             <td><input type="text" class="form-control" name ="guardian_tel_num"></td>
                                        </tr>
                                        <tr>
                                            <td>Spouse:</td>
                                            <td><input type="text" class="form-control" name ="spouse"></td>
                                             <td><input type="text" class="form-control" name ="spouse_occupation"></td>
                                             <td><input type="text" class="form-control" name ="spouse_tel_num"></td>
                                        </tr>
                                    </table>
                                </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class ="page-header">
                            <h3><i class="glyphicon glyphicon-heart"></i> Health/Physical Information</h3>
                        </div>
                        <div class ="container-fluid">
                                                    <div class="controls">
                            <label>Please state any physical or health restrictions, i.e., allergies, heart ailment, asthma, epilepsy, etc. Use comma (,) as separator.</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none" name = "health"></textarea>
                        </div>
                        </div>
                    </div>
            </div>
                                                        <hr>
                            <div class = "pageButton">
								<ul class = "pager">
									<li><button type="submit" name="submitOtherPer" class="btn btn-default">Next</button></li>
								</ul>
							</div>
                </div>
		       </form>
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
