<?php
 
 	session_start();

	$username = "";
	$email = "";
	$errors = array();
	

	//connect to database
	$db = mysqli_connect('localhost','root','','defense-hackathon');

	//if the register button is clicked
	if (isset($_POST['register'])) {
		$username = mysqli_real_escape_string($db,$_POST['username']);
		$email = mysqli_real_escape_string($db,$_POST['email']);
		$password_1 = mysqli_real_escape_string($db,$_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db,$_POST['password_2']);

		//ensure that form fields are filled properly
		if (empty($username)) {
			array_push($errors,"Username is required");
		}
		if (empty($email)) {
			array_push($errors,"Email is required");
		}
		if (empty($password_1)) {
			array_push($errors,"Password is required");
		}
		if ($password_1 != $password_2) {
			array_push($errors,"The two passwords do not match");
		}

	

		// If no errors, push data to database
		if(count($errors) == 0) {
			$password = md5($password_1); //password encryption
			$sql = "INSERT INTO users (username, email, password)
							VALUES ('$username', '$email', '$password')";
			mysqli_query($db, $sql);
			$_SESSION['username'] = $username;
  			$_SESSION['success'] = "You are now logged in";
  			header('location: ../Frontend/page2.html'); //redirect to dashboard
		}
	}

	// LOGIN USER
	if (isset($_POST['login'])) {
 	   		$email = mysqli_real_escape_string($db, $_POST['email']);
  			$password = mysqli_real_escape_string($db, $_POST['password']);

  			if (empty($email)) {
  				array_push($errors, "Email is required");
  			}
  			if (empty($password)) {
  				array_push($errors, "Password is required");
  			}

  			if (count($errors) == 0) {
  				$password = md5($password); //encrypt paswd beforing comparing with db
  				$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
  				$result = mysqli_query($db, $query);
  			 
  				if (mysqli_num_rows($result) == 1) {
  	  				$_SESSION['username'] = $username;

  	  				header('location: ../Frontend/page2.html');
  				}
  			  else {
  			  		if (!isset($_SESSION['login_attempt'])) {
  			  			$_SESSION['login_attempt'] = 0;
  			  		}
  			  		$_SESSION['login_attempt'] +=1 ;
  			  		if ($_SESSION['login_attempt'] == 3) {
  			  			$_SESSION['msg'] = "Your Account Frezeed for Security Purpose! Wait for 10 mins.";
  			  		}

  					array_push($errors, "Wrong Email/password combination");
  				}
  			}
 	}

 	//logout
 	if (isset($_GET['logout'])) {
 		session_destroy();
 		unset($_SESSION['username']);
 		header('location: login.php');
 	}

?>