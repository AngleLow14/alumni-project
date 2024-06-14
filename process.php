<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "alumni_db";

$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$textInput = $_POST['textInput'];

$stmt = $conn->prepare("INSERT INTO post (text_column) VALUES (?)");
$stmt->bind_param("s", $textInput);

if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();

header("Location: admincontrol.php");
exit();
?>