<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Account as Admin</title>
    <link rel="stylesheet" href="css/registernew.css">
    <link rel="icon" href="css/Pictures/icon.png">
</head>
<body>
<center><header style="
    width: 100%;
    height: auto;
    background: green;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 3px solid black;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    ">
        <ul style="margin-block: 10px;">
            <li style="list-style: none;"><img src="css/Pictures/icon.png" alt="icon" class="icon" style="width: 100px; height: 100px; filter: drop-shadow(5px 5px 3px rgba(0, 0, 0, 05)"></li>
            <li style="list-style: none;"><h2 style="font-size: 30px; font-family: 'Times New Roman', Times, serif;">PLARIDEL INTEGRATED NATIONAL HIGHSCHOOL</h2></li>
        </ul>
    </header></center>
    <div class="navbar">
    <div class="container">
        <form action="adminaccount.php" method="post">
            <h2>Create Admin Account</h2>
            <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        
        <br>
            <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
            <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
            <input type="submit" value="Create Admin" class="btn"><br>
        </form>
        <a href="getstarted.php"><button class="button">Back</button></a>
    </div>
    </div>
</body>
</html>
