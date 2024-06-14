<?php

$servername = "localhost"; 
$username = "root";
$password = ""; 
$dbname = "alumni_db"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$title = $_POST['title'];
$sched = $_POST['sched'];
$text_column = $_POST['text_column'];

$sql = "INSERT INTO events (title, sched, text_column) VALUES ('$title', '$sched', '$text_column')";

if ($conn->query($sql) === TRUE) {
    echo "Data stored successfully";
    header("Location: admincontrol.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>