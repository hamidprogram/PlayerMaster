<?php
session_start();
$_SESSION["BlogEdit"] = "";
$ID = $_POST["ID"];
$Name = $_POST["Name"];
$ShortDiscription = $_POST["ShortDiscription"];
$Discription = $_POST["Discription"];
$Date = $_POST["Date"];

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
    $CoverName = $_FILES["Cover"]["name"];
    if (move_uploaded_file($_FILES["Cover"]["tmp_name"], $target_file)) {
        $sql = "UPDATE blog SET Name='$Name',ShortDIscription='$ShortDiscription',DIscription='$Discription',Date='$Date',Cover='$CoverName' WHERE ID=$ID";
        if ($conn->query($sql) === TRUE) {
            echo ("<script> location.href='Blog.php'; </script>");
            exit;
        } else {
            $_SESSION["BlogEdit"] = "Try agan";
            echo ("<script> location.href='Blog.php'; </script>");
            exit;
        }
    } else {
        $_SESSION["BlogEdit"] = "This size photo is so big";
        echo ("<script> location.href='Blog.php'; </script>");
        exit;
    }
} else {
    $sql = "UPDATE blog SET Name='$Name',ShortDIscription='$ShortDiscription',DIscription='$Discription',Date='$Date' WHERE ID=$ID";
    if ($conn->query($sql) === TRUE) {
        echo ("<script> location.href='Blog.php'; </script>");
        exit;
    } else {
        $_SESSION["BlogEdit"] = "Try agan";
        echo ("<script> location.href='Blog.php'; </script>");
        exit;
    }
}
$conn->close();
