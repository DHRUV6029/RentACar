
<!doctype html>
<html lang="en">
  <head>
  	<title>Create User RentCar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style_login.css">
	<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<!-- inline php code to save data into mysql db-->

		
		<?php
		//hard coded values are put here
		$servername = "localhost";
		$username = "u409089633_dhruv";
		$password = "Mabncd@16011";
		$dbname = "u409089633_cmpe272";

		if($_SERVER["REQUEST_METHOD"] == "POST")
		{
			$firstname = $_REQUEST["firstname"];
			$lastname  = $_REQUEST["lastname"];
			$email = $_REQUEST["email"];
			$address =  $_REQUEST["address"];
			$homephone =  $_REQUEST["homephone"];
			$cellphone = $_REQUEST["cellphone"];
		}
		

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		$sql = "INSERT INTO user_table (FirstName, LastName, Email , CellPhone , HomeAddress, HomePhone)
				VALUES ('$firstname', '$lastname', '$email' ,'$cellphone', '$address', '$homephone')";

	if ($conn->query($sql) === TRUE) 
	{
		echo "<script>alert('New User Created Sucessfully');</script>";
  	} 
	else 
	{
		$errorMessage =  "Error: " . $sql . "<br>" . $conn->error;
		echo "<script>alert('$errorMessage');</script>";
  	}
		
	?>
		

	
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

				

		      	<h3 class="text-center mb-4">Create User Profile</h3>
				<form method = "post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="login-form">
		      		<div class="form-group">
		      			  <input type="text" class="form-control rounded-left" name = "firstname" placeholder="First Name" required>
						  <input type="text" class="form-control rounded-left" name = "lastname" placeholder="Last Name" required>
						  <input type="email" class = "form-control rounded-left" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name = "email" placeholder = "Eamil" size="30" required>
						  <input type="text" class="form-control rounded-left" name = "address" placeholder="Address" required>
						  <input type="tel"  class = "form-control rounded-left" name="homephone" placeholder="Home Phone (xxx-xxx-xxxx)" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
						  <input type="tel"  class = "form-control rounded-left" name="cellphone" placeholder="Cell Phone (xxx-xxx-xxxx)" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
		      		</div>

	            	<div class="form-group">
	            		<button type="submit" name = 'submitButton' class="form-control btn btn-primary rounded submit px-3">Create User</button>
	            	</div>
				</form>
				
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
	            		
								</div>
								<div class="w-50 text-md-right">
									
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

