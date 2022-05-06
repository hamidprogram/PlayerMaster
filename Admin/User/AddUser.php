<?php
session_start();
$_SESSION["UserAdd"] = "";
$UserName = $_POST["UserName"];
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

$sqls = "SELECT * FROM artist WHERE '$Name' = UserName";
$result = $conn->query($sqls);
if ($result->num_rows > 0) {
    $_SESSION["UserAdd"] = "This data was saved in data base";
    echo ("<script> location.href='User.php'; </script>");
    exit;
} else {
    $sql = "INSERT INTO user (UserName, Password) VALUES ('$UserName', '$Password')";
    if ($conn->query($sql) === TRUE) {
        echo ("<script> location.href='User.php'; </script>");
        exit;
    } else {
        $_SESSION["UserAdd"] = "Try agan";
        echo ("<script> location.href='User.php'; </script>");
        exit;
    }
}
$conn->close();
?>