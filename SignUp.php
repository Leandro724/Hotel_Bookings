<!-- Rquire a SignUp class for new users once the form is submitted -->
<?php 
require("SignUpClass.php")

?>

<!-- Once the form is submitted the following data will be captured -->
<?php 
if(isset($_POST['submit'])){
    $user = new SignUpUser($_POST['name'],$_POST['surname'],$_POST['email'],$_POST['password']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <!-- Linking in the stylesheet -->
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>

<!-- SignUp form for each user -->
    <form method="post" action="">
        <p>Sign Up below and save loads on your next accomodation!!!</p>
        <input class="inputField" type="text" name="name" placeholder="First Name" required/><br><br>
        <input class="inputField" type="text" name="surname" placeholder="Surname" required/><br><br>
        <input class="inputField" type="text" name="email" placeholder="Email Address" required/><br><br>
        <input class="inputField" type="password" name="password" placeholder="Password" required/><br><br>
        <button class="button" type="submit" name="submit">Sign Up</button>
        <p><?php
          echo @$user ->error
         ?></p>
        <p><?php
          echo @$user ->success
         ?></p>
        <p>Already have an account? <a href="login.php">Login Here.</a></p><br><br>
    </form>
    
</body>
</html>