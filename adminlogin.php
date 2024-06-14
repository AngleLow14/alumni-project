<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In Admin</title>
    <link rel="stylesheet" href="css/login.css">
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
    <div class="nav">
        <div class="container">
            <form action="adminlog.php" method="post">
                <h2>PLEASE LOG IN MS/ MR</h2>
            <tr>
                <td>
                <label for="username">Username:</label><br>
                <input type="text" id="username" name="username" required>
                </td>
            </tr>
            <br>
            <tr>
                <td>
                <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required>
                </td>
            </tr>
            <br>
            <a href="Home.php"><input type="submit" value="Login" class="btn"></a>
            </form><br>
            <a href="getstarted.php"><button class="btn">Back</button></a>
        </div>
    </div>
    
</body>
</html>