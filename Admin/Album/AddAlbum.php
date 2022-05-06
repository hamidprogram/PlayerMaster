<?php
session_start();
$_SESSION["AlbumAdd"] = "";
$Name = $_POST["Name"];
$Artist = $_POST["Artist"];
$Discription = $_POST["Discription"];
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
$sqll = "SELECT * FROM artist WHERE '$Artist' = ID";
$result = $conn->query($sqll);
if ($result->num_rows > 0) {
    $sqls = "SELECT * FROM album WHERE '$Name' = Name";
    $result = $conn->query($sqls);
    if ($result->num_rows > 0) {
        $_SESSION["AlbumAdd"] = "This data was saved in data base";
        echo ("<script> location.href='Album.php'; </script>");
        exit;
    } else {
        if (move_uploaded_file($_FILES["Cover"]["tmp_name"], $target_file)) {
            $sql = "INSERT INTO album (ArtistID,Name, Discription, AlbumCover) VALUES ('$Artist', '$Name', '$Discription', '$CoverName')";
            if ($conn->query($sql) === TRUE) {
                echo ("<script> location.href='Album.php'; </script>");
                exit;
            } else {
                $_SESSION["AlbumAdd"] = "Try agan";
                echo ("<script> location.href='Album.php'; </script>");
                exit;
            }
        } else {
            $_SESSION["AlbumAdd"] = "This size photo is so big";
            echo ("<script> location.href='Album.php'; </script>");
            exit;
        }
    }
} else {
    $_SESSION["AlbumAdd"] = "Your Artist is nat here!?";
    echo ("<script> location.href='Album.php'; </script>");
    exit;
}
$conn->close();
