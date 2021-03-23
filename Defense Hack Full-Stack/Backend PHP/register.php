<?php include('server.php'); ?>



<!DOCTYPE html>
<html>
<head>
	<title>Defense Hackathon|Signup</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" >
	<link rel="stylesheet" type="text/css" href="style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Do+Hyeon&display=swap" rel="stylesheet"> 
</head>
<body>
<div class="formdiv">
	<form method="post" action="register.php">
	<h2 style="text-align: left; font-family: 'Do Hyeon', sans-serif; margin-left: 50px; padding: 15px;">Defense Hackathon Signup</h2>
  <img class="signup" src="./signup.png" >
  <!-- display validation errors here -->
   <?php include('errors.php'); ?>
	  <div class="form-group">
       
        <label for="exampleInputEmail1">Username</label>
        <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Enter name" name="username" value="<?php echo $username; ?>">
    
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control"  aria-describedby="emailHelp" placeholder="Enter email" name="email" value="<?php echo $email; ?>">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control"  placeholder="Password" name="password_1">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Confirm Password</label>
        <input type="password" class="form-control"  placeholder="Retype-Password" name="password_2">
      </div>
  
        <button type="submit" name="register" id="btn" class="btn btn-primary">Signup</button>
      <p class="signal">Already an User? <a href="login.php">Login</a></p>

   </form>
  
 </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>   
</body>
</html>