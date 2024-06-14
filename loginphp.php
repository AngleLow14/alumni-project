<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "alumni_db";

$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $user);

    $stmt->execute();
    $stmt->store_result();

    $stmt->bind_result($id, $hashed_password);

    if ($stmt->num_rows > 0) {
        $stmt->fetch();
        if (password_verify($pass, $hashed_password)) {

            session_start();
            $_SESSION['username'] = $user;
            echo "Login successful. Welcome, " . htmlspecialchars($user) . "!";
            header("Location: Homepage.php");
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found with that username.";
    }

    $stmt->close();
    $conn->close();
}
?>
