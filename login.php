<!DOCTYPE html>
<html>
    <head>
	        		
	        <meta charset="utf-8">
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta name="description" content="">
			<meta name="author" content="">

			<title>Login Page</title>

			<!-- Bootstrap Core CSS -->
			<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

			<!-- Theme CSS -->
			<link href="css/freelancer.min.css" rel="stylesheet">

			<!-- Custom Fonts -->
			<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
			<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
			<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

			<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
			<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
			<!--[if lt IE 9]>
				<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
				<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
			<![endif]-->
            
	     </head>
    <body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">ADMIN</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
					
                    <li class="page-scroll">
                        <a href="index.php">HOME</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	<br/><br/><br/>
	<br/><br/><br/>
	<br/><br/><br/>
	    <div id="frm">
    
         <form action="process.php" method="POST">
        
         <div class="container">
		 
             <p>
                <label><b>Username</b></label>
                <input type="text" id="user" name="user" required>
			 </p>
             
			 <p>
                 <label><b>Password</b></label>
                 <input type="password" id="pass" name="pass" required>
			 </p>
			 
			 <p>
			     <input type="submit" id="btn" value="Login">
			 </p>

                
         </div>
		 
         </form>
		 </div> 
		    <br/><br/><br/><br/><br/><br/>
		    <br/><br/><br/>
			
     <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Location</h3>
                        <p>1420 Gerard Street East
                            <br>Toronto, ON M4L 1Z6</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="https://www.facebook.com/pages/Sonu-Saree-Palace/533467286824552" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="https://www.google.ca/maps/uv?hl=en&pb=!1s0x89d4cc77e0f284bd:0x986c63d00ee91c44!2m19!2m2!1i80!2i80!3m1!2i20!16m13!1b1!2m2!1m1!1e1!2m2!1m1!1e3!2m2!1m1!1e5!2m2!1m1!1e4!3m1!7e115!4shttps://picasaweb.google.com/lh/sredir?uname%3D109237051796433538709%26id%3D6372991940529096610%26target%3DPHOTO!5ssonu+saree+palace+-+Google+Search&imagekey=!1e3!2s-GCniLJF5ODI/WHFqZ4OqB6I/AAAAAAAAAFU/fulDdKYrhVEadVh1_q7ff9L30WlKRPQRgCLIB&sa=X&sqi=2&ved=0ahUKEwiq7sb1wJHSAhVr4oMKHW4JDDoQoioIeDAO" class="btn-social btn-outline" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                           <!-- <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                            </li>-->
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>OUR BUSINESS MOTTO</h3>
                        <p>Make a Customer, not a Sale.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Sonu Saree Palace 2017
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>	 
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>

     </body>
</html>