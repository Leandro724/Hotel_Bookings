<?php
// Creating a session for a user when logged in
session_start();
	if(!isset($_SESSION['user'])){
		header("location: login.php");	exit();
	}
// Ending session once the user logs out
if(isset($_GET['logout'])){
    unset($_SESSION['user']);
    header("location: login.php");	exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookIt</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
    <form method="post" action="Compare&Book.html">
      <!-- The Users name will appear once the session is active -->
      <p>Welcome <?php echo $_SESSION['user']; ?><p>
	    <a href="?logout">Log out</a>
        <p>Compare and Save a few bucks on the hotel of your choice!</p>
    <!-- Dropdown list of available hotels -->
        <select class="inputField" name="hotel" required>
            <option value="" disabled selected hidden>Choose Hotel...</option>
            <option value="Westin">Westin</option>
            <option value="Raddison Blu">Raddison Blu</option>
            <option value="Garden Court">Garden Court</option>
            <option value="Southern Sun">Southern Sun</option>
        </select><br><br>
    <!-- Checkin and checkout dates -->
        <input class="inputField" type="date" name="checkIn" placeholder="Check in" required/><br><br>
        <input class="inputField" type="date" name="checkOut" placeholder="Check out" required/><br><br>
    <!-- Number of geusts and rooms -->
        <input class="inputField" type="number" name="guests" placeholder="No. of Guests" min="0" required/><br><br>
        <input class="inputField" type="number" name="rooms" placeholder="No. of Rooms" min="0" required/><br><br>
    <!-- Price per night for selected hotel -->
        <p>R_____/night</p>
        <input class="button" type="submit" value="Compare"/><br><br>
        <a href="Compare&Book.php">Compare</a></p>
    </form>

</body>
</html>