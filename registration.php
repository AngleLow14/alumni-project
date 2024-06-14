<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "alumni_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $graduation_year = $_POST['graduation_year'];
    $strand = $_POST['strand'];
    $current_position = $_POST['current_position'];
    $university = $_POST['university'];

    $sql = "INSERT INTO alumni (name, email, graduation_year, strand, current_position, university)
            VALUES ('$name', '$email', $graduation_year, '$strand', '$current_position', '$university')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful! Wait for further Announcement";
        header("Location: Eventpage.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>