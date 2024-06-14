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

$sql = "SELECT text_column FROM post";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Control</title>
    <link rel="stylesheet" href="css/control.css">
    <link rel="icon" href="css/Pictures/icon.png">
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
            <li style="list-style: none; align-items: center;"><img src="css/Pictures/icon.png" alt="icon" class="icon" style="width: 100px; height: 100px; filter: drop-shadow(5px 5px 3px rgba(0, 0, 0, 05)"></li>
            <li style="list-style: none; align-items: center;"><h2 style="font-size: 30px; font-family: 'Times New Roman', Times, serif; font-size: 20px;">PLARIDEL INTEGRATED NATIONAL HIGHSCHOOL</h2></li>
        </ul>
    </header></center><br>

    <section>
        <center><div class="container">
            <h2>Add Announcement In Client Home Page</h2>
        <form action="process.php" method="post">
        <label for="textInput">Input Announcement: </label><br>
        <textarea id="textInput" name="textInput" rows="4" cols="50" style="border-radius: 5px;"></textarea>
        <br><br>
        <input type="submit" value="Post" class="btn">
        </form>

        <h1>Posted Announcement: </h1>

<?php
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<h1>" . htmlspecialchars($row['text_column']) . "</h1>";
        echo "<br>";
    }
} else {
    echo "No records found.";
}
$conn->close();
?>
        </div></center>
    </section> <br>

    <center>
        <section style="width: 99%; height: auto; background: ghostwhite; border: 2px solid black; border-radius: 10px; padding-bottom: 10px; padding-top: 10px;">
        <h2>Add Event In Client Event Page</h2>
        <form action="process_form.php" method="post">
        
        <label for="title">Title: (ALL CAPS)</label><br>
        <input type="text" id="title" name="title"><br><br>
        
        <label for="sched">Date: (ex. 2002-12-30)</label><br>
        <input type="text" id="sched" name="sched"><br><br>
        
        <label for="text_column">Schedule and Description:</label><br>
        <textarea id="text_column" name="text_column"></textarea><br><br>
        
        <input type="submit" value="Post" class="btn">
    </form>

        <h1>Posted Events: </h1>
        <table style="width: 80%; margin-bottom: 10px; padding-inline: 100px; border-radius: 5px; background: linear-gradient(to bottom, red, white);">
        <tr>
            <td width="100%" colspan="3"></td>
        </tr>
        <tr>
            <td width="100%" colspan="3"></td>
        </tr>
        <tr>
            <td width="100%" colspan="3"></td>
        </tr><br>


        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "alumni_db";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT title, sched, text_column FROM events";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>";
                echo "<u>";
                echo "<h1>" . $row["title"] . "</h1>";
                echo "</u>";
                echo "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>";
                echo "<h1>" . $row["sched"] . "</h1>";
                echo "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>";
                echo "<center>";
                echo "<h1>" . $row["text_column"] . "</h1>";
                echo "</center>";
                echo "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>";
                echo "<a href=\"dashboard.php\">";
                echo "<button>";
                echo "<h3>";
                echo "DASHBOARD";
                echo "</h3>";
                echo "</button>";
                echo "</td>";
                echo "</tr>";
                echo "<br>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </table>


        </section>
    </center>

    <center>
    <section style="width: 99%; height: auto; background: ghostwhite; border: none; padding-bottom: 10px; padding-top: 10px;">
    <center><a href="logout.php"><button class="btnn"><h4>LOG OUT</h4></button></a></center>
    </section>
    </center>

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