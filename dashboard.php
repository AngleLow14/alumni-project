<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: adminlogin.php");
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

$sql = "SELECT text_column FROM message";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="icon" href="css/Pictures/icon.png">
    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>
    <div class="navbar">

    <center><header style="
    width: 99%;
    height: auto;
    background: green;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 5px solid black;
    border-radius: 10px;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    ">
        <ul style="margin-block: 10px;">
            <li style="list-style: none;"><img src="css/Pictures/icon.png" alt="icon" class="icon" style="width: 100px; height: 100px; filter: drop-shadow(5px 5px 3px rgba(0, 0, 0, 05)"></li>
            <li style="list-style: none;"><h2 style="font-size: 30px; font-family: 'Times New Roman', Times, serif; font-size: 20px;">PLARIDEL INTEGRATED NATIONAL HIGHSCHOOL</h2></li>
        </ul>
    </header></center><br>

    <section>
        <center><div class="container">
        <h1>Message from Client/s: </h1>

<?php
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<h1>" . htmlspecialchars($row['text_column']) . "</h1>";
    }
} else {
    echo "No records found.";
}
$conn->close();
?>
        </div></center>
    </section>

    <center><h1>LIST OF REGISTERED PERSON</h1><center>
        <center>
        <table style="width: 80%; margin-bottom: 10px; padding-inline: 100px; border-radius: 5px; background: yellow;">

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "alumni_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, email, graduation_year, strand, current_position, university FROM alumni";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1' style=\"width: 100%;\">";
    echo "<tr><th><h3 style=\"font-size: 10px;\">Name</h3></th><th><h3 style=\"font-size: 10px;\">Email</h3></th><th><h3 style=\"font-size: 10px;\">Graduation<br>Year</h3></th><th><h3 style=\"font-size: 10px;\">Strand</h3></th><th><h3 style=\"font-size: 10px;\">Current<br>Position</h3></th><th><h3 style=\"font-size: 10px;\">University/<br>Company</h3></th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td width=\"auto\">";
        echo "<h6>" . $row["name"] . "</h6>";
        echo "</td>";
        echo "<td width=\"auto\">";
        echo "<h6>" . $row["email"] . "</h6>";
        echo "</td>";
        echo "<td width=\"auto\">";
        echo "<h6>" . $row["graduation_year"] . "</h6>";
        echo "</td>";
        echo "<td width=\"auto\">";
        echo "<h6>" . $row["strand"] . "</h6>"; 
        echo "</td>";
        echo "<td width=\"auto\">";
        echo "<h6>" . $row["current_position"] . "</h6>";
        echo "</td>";
        echo "<td width=\"auto\">";
        echo "<h6>" . $row["university"] . "</h6>";
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
<br><br>
<a href="admincontrol.php"><button><h3>BACK</h3></button></a>
</table></center>

<center><footer style="height: auto; width: 99%; background: linear-gradient(to bottom, lightgrey, grey); border: 5px solid black; border-radius: 10px; display:flex; align-items: center; justify-content: center;">
    <br>
    <ul style="display:flex; align-items: center; justify-content: center;">
        <li style="list-style: none; display: inline-block;"><h4 style="font-size: 15px; font-family: 'Times New Roman', Times, serif;">@2024, Plaridel Intergrated National Highschool (Dummy Website)</h4></li>
    </ul>
    <br>
    </footer></center>
</div>
    
</body>
</html>