<?php
session_start();
$_SESSION["ArtistAdd"] = "";
$Name = $_POST["Name"];
$Discription = $_POST["Discription"];
$target_dir = "Photo/";
$target_file = $target_dir . basename($_FILES["Photoo"]["name"]);
$photoname = $_FILES["Photoo"]["name"];

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

$sqls = "SELECT * FROM artist WHERE '$Name' = Name AND '$Discription' = Discription AND '$photoname' = Photo";
$result = $conn->query($sqls);
if ($result->num_rows > 0) {
    $_SESSION["ArtistAdd"] = "This data was saved in data base";
    echo ("<script> location.href='Artist.php'; </script>");
    exit;
} else {
    if (move_uploaded_file($_FILES["Photoo"]["tmp_name"], $target_file)) {
        $sql = "INSERT INTO artist (Name, Discription, Photo) VALUES ('$Name', '$Discription', '$photoname')";
        if ($conn->query($sql) === TRUE) {
            echo ("<script> location.href='Artist.php'; </script>");
            exit;
        } else {
            $_SESSION["ArtistAdd"] = "Try agan";
            echo ("<script> location.href='Artist.php'; </script>");
            exit;
        }
    } else {
        $_SESSION["ArtistAdd"] = "This size photo is so big";
        echo ("<script> location.href='Artist.php'; </script>");
        exit;
    }
}
$conn->close();
