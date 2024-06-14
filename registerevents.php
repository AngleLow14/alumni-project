<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <link rel="icon" href="Pictures/icon.png">
    <link rel="stylesheet" href="css/register.css">
</head>
<body> 
    <div class="nav">
        <div class="navbar">
    <center><header style="
    width: 100%;
    height: auto;
    background: green;
    display: flex;
    align-items: center;
    justify-content: center;
    border: none;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    ">
        <ul style="margin-block: 10px;">
            <li style="list-style: none;"><img src="css/Pictures/icon.png" alt="icon" class="icon" style="width: 100px; height: 100px; margin-top: 5px; filter: drop-shadow(5px 5px 3px rgba(0, 0, 0, 05)"></li>
            <li style="list-style: none;"><h2 style="font-size: 30px; font-family: 'Times New Roman', Times, serif;">WELCOME TO</h2></li>
            <li style="list-style: none;"><h2 style="font-size: 30px; font-family: 'Times New Roman', Times, serif;">PLARIDEL INTEGRATED NATIONAL HIGHSCHOOL</h2></li>
        </ul>
        </header></center>
            <div class="container">                   

        <section>
        <center>
        <table border="1" align="center" width="90%" cellspadding="8px" cellspacing="10px">

        <form id="userForm" action="registration.php" method="post">
        <input type="hidden" id="userId" value="">
        <tr width="100%" align="center">
        <td><h2>Register for the Events</h2></td>
        </tr>
    
                <tr>
                    <td>
                    <label for="name">Full Name: </label><br>
                    <input type="text" id="name" name="name" required><br>
                    </td>
                </tr>

                <tr>
                    <td>
                    <label for="email">Email: </label><br>
                    <input type="email" id="email" name="email" required><br>
                    </td>
                </tr>

                <tr>
                    <td>
                    <label for="graduation_year">Graduate Year: </label><br>
                    <input type="number" id="graduation_year" name="graduation_year" required>
                    </td>
                </tr>

                <tr>
                    <td>
                    <label for="strand">Strand: </label><br>
                    <input type="text" id="strand" name="strand" required><br>
                    </td>
                </tr>

                <tr>
                    <td>
                    <label for="current_position">Current Position<br>(Course/Job): </label><br>
                    <input type="text" id="current_position" name="current_position"><br>
                    </td>
                </tr>
                <tr>
                    <td>
                    <label for="university">University/ Company:<br>(Name of university/ Name of Company)</label><br>
                    <input type="text" id="university" name="university"><br>
                    </td>
                </tr>
                    
                    <tr>
                        <td>
                            <center><button class="btn" type="submit">REGISTER</button></center>
                        </td>
                </form></tr>
                </tr>
                    <tr>
                        <td><a href="Eventpage.php"><button class="btn">BACK</button></a></center></td>
                    </tr>
                </section>
            </div>
        </div>
    </div>
</body>
</html>