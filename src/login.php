<?php  
session_start();//session starts here  
?>  
<!doctype html>
<html lang="en">
  <head>
  	<title>Login-RentCar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style_login.css">
	<link rel="stylesheet" href="css/style.css">
	</head>
	<body>

	
	<header class="site-navbar site-navbar-target" role="banner">

<div class="container">
  <div class="row align-items-center position-relative">

	<div class="col-3">
	  <div class="site-logo">
		<a href="index.html"><strong>RentCar</strong></a>
	  </div>
	</div>

	<div class="col-9  text-right">
	  
	  <span class="d-inline-block d-lg-none"><a href="#" class=" site-menu-toggle js-menu-toggle py-5 "><span class="icon-menu h3 text-black"></span></a></span>

	  <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
		<ul class="site-menu main-menu js-clone-nav ml-auto ">
		  <li class="active"><a href="index.html" class="nav-link">Home</a></li>
		  <li><a href="listing.html" class="nav-link">Listing</a></li>
		  <li><a href="testimonials.html" class="nav-link">Testimonials</a></li>
		  <li><a href="blog.html" class="nav-link">Blog</a></li>
		  <li><a href="about.php" class="nav-link">About</a></li>
		  <li><a href="contact.php" class="nav-link">Contact</a></li>
		  <li><a href="login.php" class="nav-link">Login</a></li>
		  <li><a href="createuser.php" class="nav-link">Add Users</a></li>
		</ul>
	  </nav>
	</div>

	
  </div>
</div>

</header>
	<!-- PHP Section Code Goes Here-->
	<?php
	// declare Variables
	//hard coded variables are stored here which will be moved to database
	$credDict = array(
		"userNameCred" => "admin@rentcar.com",
	 	"userPassCred" => "adminDhruv@123"
	
	);
	
	$userName = "";
	$passWord = "";
	
	// fields cannot be empty when 
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
    	//username will be never be empty because we have validated that empty check at client side.
		$userName = sanitizeHttpInput($_POST["username"]);
		$passWord = ($_POST["password"]);

		if (!filter_var($userName, FILTER_VALIDATE_EMAIL))
        {
			echo "<script>alert('Enter Valid UserName It Should be of Format abc@xyz.com');</script>";
        }
		elseif ($userName == $credDict["userNameCred"] and $passWord == $credDict["userPassCred"])
		{
    		//redirect to adminDashboaed
			header("Location:admindashboard.php");
			$_SESSION['user']=$userName;
			
		}
		else
		{
			echo "<script>alert('Invalid Credentials!!');</script>";
		}
	}

	//create a sanitize Function
	function sanitizeHttpInput($data) 
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
	?>
	<!-- PHP Section Code Ends Here-->

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>

				

		      	<h3 class="text-center mb-4">Sign In To RentCar</h3>
				<form method = "post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="login-form">
		      		<div class="form-group">
		      			<input type="text" class="form-control rounded-left" name = "username" placeholder="Username" required>
		      		</div>
	            	<div class="form-group d-flex">
	              		<input type="password" class="form-control rounded-left" name = 'password' placeholder="Password"  required>
						  
						  
						  
	            	</div>
	            	<div class="form-group">
	            		<button type="submit" name = 'submitButton' class="form-control btn btn-primary rounded submit px-3">Login</button>
	            	</div>
				</form>
				
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
	            		<label class="checkbox-wrap checkbox-primary">Remember Me
									  <input type="checkbox" unchecked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#">Forgot Password</a>
								</div>
					
				</div>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquerylogin.min.js"></script>
  <script src="js/popperlogin.js"></script>
  <script src="js/bootstraplogin.min.js"></script>
  <script src="js/mainlogin.js"></script>

	</body>
</html>

