<?php
session_start();

$servername = "localhost";
$username = "root"; 
$password = "";    
$dbname = "alumni_db"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = sanitize_input($_POST["username"]);
    $password = sanitize_input($_POST["password"]);


    $stmt = $conn->prepare("SELECT id, username, password FROM admins WHERE username = ?");
    $stmt->bind_param("s", $username);

    $stmt->execute();
    $stmt->store_result();

    $stmt->bind_result($id, $username, $hashed_password);


    if ($stmt->fetch()) {

        if (password_verify($password, $hashed_password)) {

            $_SESSION["admin_id"] = $id;
            $_SESSION["username"] = $username;
            echo "Login successful!";
            header("Location: admincontrol.php");
            exit();
        } else {
            echo "Invalid username or password.";
        }
    } else {
        echo "Invalid username or password.";
    }
    $stmt->close();
    $conn->close();
}
?>
