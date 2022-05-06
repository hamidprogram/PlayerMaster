<?php
session_start();
$_SESSION["MusicAdd"] = "";
function eror($text)
{
    $_SESSION["MusicAdd"] = $text;
    echo ("<script> location.href='Music.php'; </script>");
    exit;
}
$Name = $_POST["Name"];
$Album = $_POST["Album"];
$Artist = $_POST["Artist"];
$Genres = $_POST["Genres"];
$Discription = $_POST["Discription"];

$target_dir = "Cover/";
$target_file = $target_dir . basename($_FILES["Cover"]["name"]);
$CoverName = $_FILES["Cover"]["name"];

$target_dirm = "Sound/";
$target_filem = $target_dirm . basename($_FILES["Music"]["name"]);
$MusicName = $_FILES["Music"]["name"];

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
    $sqll = "SELECT * FROM album WHERE '$Album' = ID";
    $result = $conn->query($sqll);
    if ($result->num_rows > 0) {
        $sqll = "SELECT * FROM genres WHERE '$Genres' = ID";
        $result = $conn->query($sqll);
        if ($result->num_rows > 0) {
            $sqls = "SELECT * FROM music WHERE '$Name' = Name";
            $resultt = $conn->query($sqls);
            if ($resultt->num_rows > 0) {
                eror("This data was saved in data base");
            } else {
                if (move_uploaded_file($_FILES["Music"]["tmp_name"], $target_filem)) {
                    if (move_uploaded_file($_FILES["Cover"]["tmp_name"], $target_file)) {
                        $sql = "INSERT INTO music (AlbumID,ArtistID,GenresID,Name,Discriptin,Music,MusicCover) VALUES ('$Album', '$Artist', '$Genres', '$Name', '$Discription', '$MusicName', '$CoverName')";
                        if ($conn->query($sql) === TRUE) {
                            echo ("<script> location.href='Music.php'; </script>");
                            exit;
                        } else {
                            eror("Try agan");
                        }
                    } else {
                        eror("This size photo is so big");
                    }
                } else {
                    eror("This Music Can't Upload");
                }
            }
        } else {
            eror("Your Genres is nat here!?");
        }
    } else {
        eror("Your Album is nat here!?");
    }
} else {
    eror("Your Artist is nat here!?");
}
$conn->close();
