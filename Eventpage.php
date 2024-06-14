<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EVENTS</title>
    <link rel="icon" href="css/Pictures/icon.png">
    <link rel="stylesheet" href="css/event.css">
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
            <li style="list-style: none;"><h2 style="font-size: 30px; font-family: 'Times New Roman', Times, serif;">PLARIDEL INTEGRATED NATIONAL HIGHSCHOOL</h2></li>
        </ul>
    </header></center>

    <center>
    <section>
        <div class="container">
            <h4>EVENTS</h4>
        </div>
    </section>
    </center>

    <section>
        <div class="events">
        <center><table style="width: 80%; margin-bottom: 10px; padding-inline: 100px; border-radius: 5px; background: linear-gradient(to bottom, red, white);">
        <tr>
            <th width="100%" colspan="3"></th>
        </tr>
        <tr>
            <th width="100%" colspan="3"></th>
        </tr>
        <tr>
            <th width="100%" colspan="3"></th>
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
                echo "<h1 style=\"font-size: 30px;\">" . $row["title"] . "</h1>";
                echo "</u>";
                echo "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>";
                echo "<h1 style=\"font-size: 15px;\">" . $row["sched"] . "</h1>";
                echo "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>";
                echo "<center>";
                echo "<h1 style=\"font-size: 20px;\">" . $row["text_column"] . "</h1>";
                echo "</center>";
                echo "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>";
                echo "<a href=\"registerevents.php\">";
                echo "<h3>";
                echo "<button>";
                echo "REGISTRATION";
                echo "</button>";
                echo "</h3>";
                echo "</a>";
                echo "</td>";
                echo "</tr>";
                echo "<br>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </table></center>

                </tr>
            </table>
        </div>
    </section>

    <section style="height: auto; width: 99%; padding-bottom: 10px;">
        <center><a href="Homepage.php"><button class="btn">HOME</button></a></center>
    </section>

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