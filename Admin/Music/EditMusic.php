<?php
session_start();
$_SESSION["MusicEdit"] = "";
function eror($text)
{
    $_SESSION["MusicEdit"] = $text;
    echo ("<script> location.href='Music.php'; </script>");
    exit;
}
$ID = $_POST["ID"];
$Name = $_POST["Name"];
$Album = $_POST["Album"];
$Artist = $_POST["Artist"];
$Genres = $_POST["Genres"];
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
    $sqll = "SELECT * FROM album WHERE '$Album' = ID";
    $result = $conn->query($sqll);
    if ($result->num_rows > 0) {
        $sqll = "SELECT * FROM genres WHERE '$Genres' = ID";
        $result = $conn->query($sqll);
        if ($result->num_rows > 0) {
            if (!empty($_FILES["Cover"]["name"])) {
                $target_dir = "Cover/";
                $target_file = $target_dir . basename($_FILES["Cover"]["name"]);
                $CoverName = $_FILES["Cover"]["name"];
                if (move_uploaded_file($_FILES["Cover"]["tmp_name"], $target_file)) {
                    $sql = "UPDATE music SET AlbumID='$Album',ArtistID='$Artist',GenresID='$Genres',Name='$Name',Discriptin='$Discription',MusicCover='$CoverName' WHERE ID=$ID";
                    if ($conn->query($sql) === TRUE) {
                        echo ("<script> location.href='Music.php'; </script>");
                        exit;
                    } else {
                        eror("Try agan");
                    }
                } else {
                    eror("This size photo is so big");
                }
            } elseif (!empty($_FILES["Music"]["name"])) {
                $target_dirm = "Sound/";
                $target_filem = $target_dirm . basename($_FILES["Music"]["name"]);
                $MusicName = $_FILES["Music"]["name"];
                if (move_uploaded_file($_FILES["Music"]["tmp_name"], $target_filem)) {
                    $sql = "UPDATE music SET AlbumID='$Album',ArtistID='$Artist',GenresID='$Genres',Name='$Name',Discriptin='$Discription',Music='$MusicName' WHERE ID=$ID";
                    if ($conn->query($sql) === TRUE) {
                        echo ("<script> location.href='music.php'; </script>");
                        exit;
                    } else {
                        eror("Try agan");
                    }
                } else {
                    eror("This Music Can't Upload");
                }
            } elseif ((!empty($_FILES["Music"]["name"])) && (!empty($_FILES["Cover"]["name"]))) {
                $target_dir = "Cover/";
                $target_file = $target_dir . basename($_FILES["Cover"]["name"]);
                $CoverName = $_FILES["Cover"]["name"];
            
                $target_dirm = "Sound/";
                $target_filem = $target_dirm . basename($_FILES["Music"]["name"]);
                $MusicName = $_FILES["Music"]["name"];
                if (move_uploaded_file($_FILES["Music"]["tmp_name"], $target_filem)) {
                    if (move_uploaded_file($_FILES["Cover"]["tmp_name"], $target_file)) {
                        $sql = "UPDATE music SET AlbumID='$Album',ArtistID='$Artist',GenresID='$Genres',Name='$Name',Discriptin='$Discription',Music='$MusicName',MusicCover='$CoverName' WHERE ID=$ID";
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
            } else {
                $sql = "UPDATE music SET AlbumID='$Album',ArtistID='$Artist',GenresID='$Genres',Name='$Name',Discriptin='$Discription' WHERE ID=$ID";
                if ($conn->query($sql) === TRUE) {
                    echo ("<script> location.href='Music.php'; </script>");
                    exit;
                } else {
                    eror("Try agan");
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
?>