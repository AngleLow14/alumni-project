<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>

<?php

$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "alumni_db";

$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT text_column FROM post";
$result = $conn->query($sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="icon" href="css/Pictures/icon.png">
    <link rel="stylesheet" href="css/homepage.css">
</head>
<body>
    <center><header>
        <ul>
            <li><h3><?php echo $_SESSION['username']; ?></h3></li>
            <li><a href="Eventpage.php"><button class="btn"><h4>EVENTS</h4></button></a></li>
            <li><a href="About.php"><button class="btn"><h4>ABOUT</h4></button></a></li>
            <li><a href="logoutsession.php"><button class="btnn"><h4>LOG OUT</h4></button></a></li>
        </ul>
    </header></center>

    <center>
        <section style="width: 99%; height: auto; background: ghostwhite; border: 2px solid black; border-radius: 10px; padding-bottom: 10px;">
            <h1>Announcement: </h1>

    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<h2 style=\"font-size: 10px;\">" . htmlspecialchars($row['text_column']) . "</h2>";
        }
    } else {
        echo "No records found.";
    }
    $conn->close();
    ?>

        </section>
    </center>
    
    <center><section style="width: 99%; height: auto; background: ghostwhite;">
    <br>
    <br>
    <br>
        <div class="container">
            <center><img src="css/Pictures/icon.png" alt="icon" style="width: 250px; height: 250px; filter: drop-shadow(5px 5px 3px rgba(0, 0, 0, 05)"></center>
            <center><h2 style="font-size: 30px; font-family: 'Times New Roman', Times, serif;">PLARIDEL INTEGRATED NATIONAL HIGHSCHOOL</h2></center>
            <center><h4 style="font-size: 15px; font-family: 'Times New Roman', Times, serif;">Good Day <?php echo $_SESSION['username']; ?>, Welcome to PIHNS ALUMNI APP/ WEBSITE</h4></center>
            <center><h4 style="font-size: 15px; font-family: 'Times New Roman', Times, serif;">This Alumni Website/ App is availabe for those Senior Hishschool Graduates.</h4></center>
        </div>
    <br>
    <br>
    <br>
    </section></center>

    <section>
        <center><div class="container">
            <h2>Message the Admin: </h2>
        <form action="message.php" method="post">
        <label for="textInput">Input the Details: </label><br><br>
        <textarea id="textInput" name="textInput" rows="4" cols="50" style="border-radius: 5px;"></textarea>
        <br><br>
        <input type="submit" value="Send" class="btn">
        </form>
        </div></center>
    </section>
    <br>
    
    <center><footer style="height: auto; width: 99%; background: linear-gradient(to bottom, lightgrey, grey); border: 5px solid black; border-radius: 10px; display:flex; align-items: center; justify-content: center;">
    <br>
    <ul style="display:flex; align-items: center; justify-content: center;">
        <li style="list-style: none; display: inline-block;"><h4 style="font-size: 15px; font-family: 'Times New Roman', Times, serif;">@2024, Plaridel Intergrated National Highschool (Dummy Website)</h4></li>
    </ul>
    <br>
    </footer></center>
</body>
</html>