<?php
session_start();
$_SESSION["UserEdit"] = "";
$ID = $_POST["ID"];
$Password = $_POST["Password"];

$servername = "localhost";
$username = "sa";
$password = "12345";
$dbname = "dbmusic";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE user SET Password='$Password' WHERE ID=$ID";
if ($conn->query($sql) === TRUE) {
    echo ("<script> location.href='User.php'; </script>");
    exit;
} else {
    $_SESSION["UserEdit"] = "Try agan";
    echo ("<script> location.href='User.php'; </script>");
    exit;
}
$conn->close();
?>