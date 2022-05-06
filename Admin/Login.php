<?php
$UserNameu = $_POST["UserName"];
$Passwordu = $_POST["Password"];
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
$sql = "SELECT * FROM user WHERE UserName='$UserNameu' AND Password='$Passwordu'";
$result = $conn->query($sql);
$conn->close();
if ($result->num_rows > 0) {
    echo ("<script> location.href='index.php'; </script>");
    exit;
} else {
    echo ("<script> location.href='LoginForm.php'; </script>");
    exit;
}
?>