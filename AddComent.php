<?php
$ID = $_POST["id"];
$Name = $_POST["Name"];
$Phone = $_POST["Phone"];
$Discription = $_POST["Discriptin"];

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

$sql = "INSERT INTO Comment (BlogID, Name, Phone, Discriptin) VALUES ('$ID', '$Name', '$Phone', '$Discription')";
if ($conn->query($sql) === TRUE) {
    echo ("<script> location.href='SingleBlog.php?id=".$ID."'; </script>");
    exit;
}
$conn->close();
