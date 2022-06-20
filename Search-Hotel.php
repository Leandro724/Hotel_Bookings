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
        <!-- <p>Compare and Save a few bucks on the hotel of your choice!</p> -->
        <select class="inputField" name="hotel" required>
            <option value="" disabled selected hidden>Choose Hotel...</option>
            <option value="Westin">Westin</option>
            <option value="Raddison Blu">Raddison Blu</option>
            <option value="Garden Court">Garden Court</option>
            <option value="Southern Sun">Southern Sun</option>
        </select><br><br>
        <input class="inputField" type="date" name="checkIn" placeholder="Check in" required/><br><br>
        <input class="inputField" type="date" name="checkOut" placeholder="Check out" required/><br><br>
        <input class="inputField" type="number" name="guests" placeholder="No. of Guests" min="0" required/><br><br>
        <input class="inputField" type="number" name="rooms" placeholder="No. of Rooms" min="0" required/><br><br>
        <p>R_____/night</p>
        <input class="button" type="submit" value="Compare"/><br><br>
        <a href="Compare&Book.html">Compare</a></p>
    </form>

</body>
</html>