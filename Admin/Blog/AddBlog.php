<?php
session_start();
$_SESSION["BlogAdd"] ="";
$Name = $_POST["Name"];
$ShortDiscription = $_POST["ShortDiscription"];
$Discription = $_POST["Discription"];
$Date = $_POST["Date"];
$target_dir = "Cover/";
$target_file = $target_dir . basename($_FILES["Cover"]["name"]);
$CoverName = $_FILES["Cover"]["name"];

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

$sqls = "SELECT * FROM blog WHERE '$Name' = Name AND '$ShortDiscription' = ShortDIscription AND '$Date' = Date AND '$CoverName' = Cover";
$result = $conn->query($sqls);
if ($result->num_rows > 0) {
    $_SESSION["BlogAdd"] = "This data was saved in data base";
    echo ("<script> location.href='Blog.php'; </script>");
    exit;
} else {
    if (move_uploaded_file($_FILES["Cover"]["tmp_name"], $target_file)) {
        $sql = "INSERT INTO blog (Name, ShortDIscription, DIscription, Date, Cover) VALUES ('$Name', '$ShortDiscription', '$Discription', '$Date', '$CoverName')";
        if ($conn->query($sql) === TRUE) {
            echo ("<script> location.href='Blog.php'; </script>");
            exit;
        } else {
            $_SESSION["BlogAdd"] = "Try agan";
            echo ("<script> location.href='Blog.php'; </script>");
            exit;
        }
    } else {
        $_SESSION["BlogAdd"] = "This size photo is so big";
        echo ("<script> location.href='Blog.php'; </script>");
        exit;
    }
}
$conn->close();
