<?php
session_start();
$_SESSION["ArtistEdit"] = "";
$ID = $_POST["ID"];
$Name = $_POST["Name"];
$Discription = $_POST["Discription"];

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

if (!empty($_FILES["Photoo"]["name"])) {
    $target_dir = "Photo/";
    $target_file = $target_dir . basename($_FILES["Photoo"]["name"]);
    $photoname = $_FILES["Photoo"]["name"];
    if (move_uploaded_file($_FILES["Photoo"]["tmp_name"], $target_file)) {
        $sql = "UPDATE artist SET Name='$Name',Discription='$Discription',Photo='$photoname' WHERE ID=$ID";
        if ($conn->query($sql) === TRUE) {
            echo ("<script> location.href='Artist.php'; </script>");
            exit;
        } else {
            $_SESSION["ArtistEdit"] = "Try agan";
            echo ("<script> location.href='Artist.php'; </script>");
            exit;
        }
    } else {
        $_SESSION["ArtistEdit"] = "This size photo is so big";
        echo ("<script> location.href='Artist.php'; </script>");
        exit;
    }
} else {
    $sql = "UPDATE artist SET Name='$Name',Discription='$Discription' WHERE ID=$ID";
    if ($conn->query($sql) === TRUE) {
        echo ("<script> location.href='Artist.php'; </script>");
        exit;
    } else {
        $_SESSION["ArtistEdit"] = "Try agan";
        echo ("<script> location.href='Artist.php'; </script>");
        exit;
    }
}
$conn->close();
