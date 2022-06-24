<!-- Rquire a Login class for the users who are signed -->
<?php require("login.class.php") ?>

<!-- Once the form is submitted the following data will be captured -->
<?php 
	if(isset($_POST['submit'])){
		$user = new LoginUser($_POST['Email'], $_POST['Password']);
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
      <!-- Linking in the stylesheet -->
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
    <!-- Login form for each user -->
    <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
		<h1>Welcome Back</h1>
		<h3>Login:</h3>

		<label>Email</label>
		<input class="inputField" type="text" name="Email" required>

		<label>Password</label>
		<input class="inputField" type="text" name="Password" required>

		<button class="button" type="submit" name="submit">Log in</button>

		<p class="error"><?php echo @$user->error ?></p>
		<p class="success"><?php echo @$user->success ?></p>
		<p>Don't have an account? <a href="SignUp.php">Register Here.</a></p><br><br>
	</form>
   
</body>
</html>