<?php
session_start();
$_SESSION["AlbumEdit"] = "";
$ID = $_POST["ID"];
$Name = $_POST["Name"];
$Artist = $_POST["Artist"];
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
$sqll = "SELECT * FROM artist WHERE '$Artist' = ID";
$result = $conn->query($sqll);
if ($result->num_rows > 0) {
    if (!empty($_FILES["Cover"]["name"])) {
        $target_dir = "Cover/";
        $target_file = $target_dir . basename($_FILES["Cover"]["name"]);
        $CoverName = $_FILES["Cover"]["name"];
        if (move_uploaded_file($_FILES["Cover"]["tmp_name"], $target_file)) {
            $sql = "UPDATE album SET ArtistID='$Artist',Name='$Name',Discription='$Discription',AlbumCover='$CoverName' WHERE ID=$ID";
            if ($conn->query($sql) === TRUE) {
                echo ("<script> location.href='Album.php'; </script>");
                exit;
            } else {
                $_SESSION["AlbumEdit"] = "Try agan";
                echo ("<script> location.href='Album.php'; </script>");
                exit;
            }
        } else {
            $_SESSION["AlbumEdit"] = "This size photo is so big";
            echo ("<script> location.href='Album.php'; </script>");
            exit;
        }
    } else {
        $sql = "UPDATE album SET ArtistID='$Artist',Name='$Name',Discription='$Discription' WHERE ID=$ID";
        if ($conn->query($sql) === TRUE) {
            echo ("<script> location.href='Album.php'; </script>");
            exit;
        } else {
            $_SESSION["AlbumEdit"] = "Try agan";
            echo ("<script> location.href='Album.php'; </script>");
            exit;
        }
    }
} else {
    $_SESSION["AlbumEdit"] = "Your Artist is nat here!?";
    echo ("<script> location.href='Album.php'; </script>");
    exit;
}
$conn->close();
