<?php
require 'config.php';
if(isset($_POST["submit"])){
    $first_name = $_POST["first_name"];
	$last_name = $_POST["last_name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
	$phone_number = $_POST["phone_number"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    $duplicate = mysqli_query($conn, "SELECT * FROM tb_user1 WHERE username ='$username' OR email = '$email'");
    if(mysqli_num_rows($duplicate) > 0){
        echo
        "<script> alert('Username or  Email has Already Taken'); </script>";
    }
    else{
        if($password == $confirmpassword){
            $query = "INSERT INTO tb_user1 VALUES('', '$first_name', '$last_name', '$username', '$email', '$phone_number', '$password')";
            mysqli_query($conn, $query);
            echo
            "<script> alert('Registration Successful'); </script>";
        }
        else{
            echo
            "<script> alert('Password Does Not Match'); </script>";
        }
    }
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registration</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img class="logo-img" src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="" method="post" autocomplete="off">
					<span class="login100-form-title" >
						Registration
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid first name is required: Jon">
						<input class="input100" type="text" name="first_name" id="first_name" placeholder="First Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
						<i class="fa-solid fa-person"></i>
						</span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Valid last name is required: Uriarte">
						<input class="input100" type="text" name="last_name" id="last_name" placeholder="Last Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
						<i class="fa-solid fa-people-group"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Username is required">
						<input class="input100" type="text" name="username" id="username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
						<i class="fa-regular fa-id-card"></i>
						</span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Email is required">
						<input class="input100" type="email" name="email" id="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
						<i class="fa-solid fa-envelope"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Phone number is required">
						<input class="input100" type="tel" name="phone_number" id="phone_number" placeholder="Phone Number">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
						<i class="fa-solid fa-phone"></i>
						</span>
					</div>

					
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" id="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
						<i class="fa-solid fa-lock"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Confirm password is required">
						<input class="input100" type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-unlock" aria-hidden="true"></i>
						</span>
					</div>

					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="submit">
							Register
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>

					
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>