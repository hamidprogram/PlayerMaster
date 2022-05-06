<?php
session_start();
$_SESSION["GenresAdd"] = "";
$Name = $_POST["Name"];
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

$sqls = "SELECT * FROM genres WHERE '$Name' = Name";
$result = $conn->query($sqls);
if ($result->num_rows > 0) {
    $_SESSION["GenresAdd"] = "This data was saved in data base";
    echo ("<script> location.href='Genres.php'; </script>");
    exit;
} else {
    if (move_uploaded_file($_FILES["Cover"]["tmp_name"], $target_file)) {
        $sql = "INSERT INTO genres (Name, GenresCover) VALUES ('$Name', '$CoverName')";
        if ($conn->query($sql) === TRUE) {
            echo ("<script> location.href='Genres.php'; </script>");
            exit;
        } else {
            $_SESSION["GenresAdd"] = "Try agan";
            echo ("<script> location.href='Genres.php'; </script>");
            exit;
        }
    } else {
        $_SESSION["GenresAdd"] = "This size photo is so big";
        echo ("<script> location.href='Genres.php'; </script>");
        exit;
    }
}
$conn->close();
?>