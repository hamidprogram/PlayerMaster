<?php
include("Share/header.php");
$ID = $_GET["id"];
$servername = "localhost";
$username = "sa";
$password = "12345";
$dbname = "dbmusic";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM album WHERE '$ID'=ID";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
function getartist($id)
{
    $servername = "localhost";
    $username = "sa";
    $password = "12345";
    $dbname = "dbmusic";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $sqll = "SELECT * FROM artist WHERE '$id'=ID";
    $resultt = $conn->query($sqll);
    $row = $resultt->fetch_assoc();
    return $row["Name"];
}
$ArtistName = getartist($row["ArtistID"]);
?>
<!----Album Single Section Start---->
<div class="ms_album_single_wrapper">
    <div class="album_single_data">
        <div class="album_single_img">
            <img src="Admin/Album/Cover/<?php echo($row["AlbumCover"]) ?>" class="img-fluid">
        </div>
        <div class="album_single_text">
            <h2><?php echo($row["Name"]) ?></h2>
            <p class="singer_name"><?php echo($ArtistName) ?></p>
            <div class="album_feature">
                <p class="album_date"><?php echo($row["Discription"]) ?></p>
            </div>
        </div>
    </div>
    <!----Song List---->
    <div class="album_inner_list">
        <div class="album_list_wrapper">
            <ul class="album_list_name">
                <li>#</li>
                <li>Song Title</li>
                <li>Artist</li>
            </ul>
            <?php
            $ID = $row["ID"];
            $sql = "SELECT * FROM music WHERE '$ID'=AlbumID";
            $result = $conn->query($sql);
            $conn->close();
            if ($result->num_rows > 0) {
                // output data of each row
                $num = 1;
                while ($row = $result->fetch_assoc()) {
                    echo ("<ul><li><a href='SingleMusic.php?id=".$row["ID"]."'><span class='play_no'>".$num.".</span><span class='play_hover'></span></a></li><li><a href='SingleMusic.php?id=".$row["ID"]."'>".$row["Name"]."</a></li><li><a href='SingleMusic.php?id=".$row["ID"]."'>$ArtistName</a></li></ul>");
                    $num++;
                }
            }
            ?>
        </div>
    </div>
</div>
<?php
include("Share/footer.php");
?>