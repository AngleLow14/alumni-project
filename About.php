<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="icon" href="css/Pictures/icon.png">
    <link rel="stylesheet" href="css/aboutus.css">
</head>
<body>
    <center><header>
        <ul>
            <li><h3><?php echo $_SESSION['username']; ?></h3></li>
            <li><a href="Homepage.php"><button class="btn"><h4>HOME</h4></button></a></li>
            <li><a href="Eventpage.php"><button class="btn"><h4>EVENTS</h4></button></a></li>
            <li><a href="logoutsession.php"><button class="btnn"><h4>LOG OUT</h4></button></a></li>
        </ul>
    </header></center>
    
    <center><section style="width: 99%; height: auto; background: ghostwhite;">
    <br>
    <br>
    <br>
        <div class="container">
            <center><img src="css/Pictures/icon.png" alt="icon" class="icon" style="width: 250px; height: 250px; filter: drop-shadow(5px 5px 3px rgba(0, 0, 0, 05)"></center>
            <center><h2 style="font-size: 30px; font-family: 'Times New Roman', Times, serif;">PLARIDEL INTEGRATED NATIONAL HIGHSCHOOL</h2></center>
            <center><h4 style="font-size: 15px; font-family: 'Times New Roman', Times, serif;">A dummy website and project created by Team Groupie.</h4></center>
        </div>
    <br>
    <br>
    <br>
    </section></center>
    <center>
        <section style="height: auto; width: 99%; background-color: rgba(255, 255, 255, .15); border: 5px solid black; border-radius: 10px;">
            <h2 style="font-size: 20px; font-family: 'Times New Roman', Times, serif;">Descrption:</h2>
            <h4 style="font-size: 15px; font-family: 'Times New Roman', Times, serif;">There are events for the numerous students who graduated as Senior High School</h4>
            <h4 style="font-size: 15px; font-family: 'Times New Roman', Times, serif;">graduates from PINHS to celebrate and to get together and see their fellow graduates.</h4>
            <h4 style="font-size: 15px; font-family: 'Times New Roman', Times, serif;">They will help them in extending a warm welcome to friends they haven't seen or visited in the previous year.</h4>
            <h4 style="font-size: 15px; font-family: 'Times New Roman', Times, serif;">The objective of events is for them to get together and spend time with their batch mates,</h4></h4>
            <h4 style="font-size: 15px; font-family: 'Times New Roman', Times, serif;">having fun at a particular time and location and extending a warm welcome to everyone of them.</h4></h4><br>

            <h2 style="font-size: 20px; font-family: 'Times New Roman', Times, serif;">This Project is About:</h2>
            <h4 style="font-size: 15px; font-family: 'Times New Roman', Times, serif;">Alumni Information System with Database Analytics</h4> <br>

            <h2 style="font-size: 20px; font-family: 'Times New Roman', Times, serif;">Created by:</h2>
            <h4 style="font-size: 15px; font-family: 'Times New Roman', Times, serif;">Team Groupie</h4> <br>

            <br>
            <br>
        </section>
    </center>

    <center>
        <section style="height: auto; width: 99%; background-color: rgba(255, 255, 255, .15); border: 5px solid black; border-radius: 10px;">
            <section style="height: auto; width: 80%; margin-bottom: 10px; margin-top: 10px; background: black; border: 2px solid rgba(0, 0, 0, .2); border-radius: 5px;">
                    <h1 style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; color: ghostwhite; font-size: 35px;">CONTACT US</h1><br>
                    <h2 style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; color: ghostwhite; font-size: 25px;">@FACEBOOK</h2>
                    <h2 style="font-family: 'Times New Roman', Times, serif; color: ghostwhite; font-size: 20px;">##################<br>#####################</h2>
                    <h2 style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; color: ghostwhite; font-size: 25px;">@MOBILE NUMBER</h2>
                    <h2 style="font-family: 'Times New Roman', Times, serif; color: ghostwhite; font-size: 20px;">##############</h2>
                    <h2 style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; color: ghostwhite; font-size: 25px;">@EMAIL</h2>
                    <h2 style="font-family: 'Times New Roman', Times, serif; color: ghostwhite; font-size: 20px;">###############</h2>
                    
            </section>
        </section>
    </center>

    
    <<center><footer style="height: auto; width: 99%; background: linear-gradient(to bottom, lightgrey, grey); border: 5px solid black; border-radius: 10px; display:flex; align-items: center; justify-content: center;">
    <br>
    <ul style="display:flex; align-items: center; justify-content: center;">
        <li style="list-style: none; display: inline-block;"><h4 style="font-size: 15px; font-family: 'Times New Roman', Times, serif;">@2024, Plaridel Intergrated National Highschool (Dummy Website)</h4></li>
    </ul>
    <br>
    </footer></center>
</body>
</html>