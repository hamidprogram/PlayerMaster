<?php
session_start();
$_SESSION["GenresEdit"] = "";
$ID = $_POST["ID"];
$Name = $_POST["Name"];

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

if (!empty($_FILES["Cover"]["name"])) {
    $target_dir = "Cover/";
    $target_file = $target_dir . basename($_FILES["Cover"]["name"]);
    $CoverGenres = $_FILES["Cover"]["name"];
    if (move_uploaded_file($_FILES["Cover"]["tmp_name"], $target_file)) {
        $sql = "UPDATE genres SET Name='$Name',GenresCover='$CoverGenres' WHERE ID=$ID";
        if ($conn->query($sql) === TRUE) {
            echo ("<script> location.href='Genres.php'; </script>");
            exit;
        } else {
            $_SESSION["GenresEdit"] = "Try agan";
            echo ("<script> location.href='Genres.php'; </script>");
            exit;
        }
    } else {
        $_SESSION["GenresEdit"] = "This size photo is so big";
        echo ("<script> location.href='Genres.php'; </script>");
        exit;
    }
} else {
    $sql = "UPDATE genres SET Name='$Name' WHERE ID=$ID";
    if ($conn->query($sql) === TRUE) {
        echo ("<script> location.href='Genres.php'; </script>");
        exit;
    } else {
        $_SESSION["GenresEdit"] = "Try agan";
        echo ("<script> location.href='Genres.php'; </script>");
        exit;
    }
}
$conn->close();
?>