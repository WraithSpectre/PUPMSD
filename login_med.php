<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PUP Medical Services Department - Login</title>
  <link rel="stylesheet" href="login.css">
</head>
<body>
  <section>
    <div class="box">
      <img src="images/pup-logo2.png" alt="" class="logo">
      <h2>PUP - MSD Medical Staff Module Login</h2>
      <h6>Sign in to start your session<h6>

      <form action="login_process.php">
        <input
 
type="email" name="email" placeholder="Email" required/>
        <input
 
type="password" name="pass" placeholder="Password" required/>
        <input type="submit" name="submit" value="Login" class="form-btn"/>

      </form>
		<p>Do not have an account? Register here! <a href="register.php">click here</a></p>
    </div>
  </section>
</body>
</html>