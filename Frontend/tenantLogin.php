<?php
include('validateLogin.php'); 
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
                
                <a class="navbar-brand" href="index.php">Royal Residence</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            
        <!-- /.container -->
    </nav>

   

    <!-- Page Content -->
    <div class="container">
						   <div class="container">
                         <div class="signin">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                              <h2 class="form-signin-heading">Please sign in</h2>
                                            </div>
                                            <div class="panel-body">
                                                
                                                 <form class="form-signin" method="post">        
                                                    <label for="username" class="sr-only">Username</label>
                                                    <input type="input" id="username" class="form-control" placeholder="Username" required autofocus name ="username">
                                                    <br>
                                                    <label for="password" class="sr-only">Password</label>
                                                    <input type="password" id="password" class="form-control" placeholder="password" required name = "password">
                                                    <span id="invalid"><?php echo $error; ?></span>
                                                    <div class="checkbox">
                                                      <label>
                                                        <input type="checkbox" value="remember-me"> Remember me
                                                      </label>
                                                    </div>
                                                    <button class="btn btn-lg btn-info btn-block" type="submit" name = "submit">Sign in</button>
                                                  </form>
                                                
                                                
                                            </div>                       
                                        </div>
                </div>
				</div>
      
       
	   
	   
	   
	   
	   
	   
	   
            
        

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
