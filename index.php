<?php
include("Share/header.php");
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

$sql = "SELECT * FROM music";
$result = $conn->query($sql);
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
$conn->close();
?>
<!---Weekly Top 15--->
<div class="ms_weekly_wrapper ms_free_music">
    <div class="ms_weekly_inner">
        <div class="row">
            <div class="col-lg-4 col-md-12 padding_right40">
                <?php
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        $artistname = getartist($row["ArtistID"]);
                        echo ("<div class='ms_weekly_box'><div class='weekly_left'><div class='w_top_song'><div class='w_tp_song_img'><img src='Admin/Music/Cover/" . $row["MusicCover"] . "'><div class='ms_song_overlay'></div><div class='ms_play_icon'><img src='images/svg/play.svg'></div></div><div class='w_tp_song_name'><h3><a href='SingleMusic.php?id=" . $row["ID"] . "'>" . $row["Name"] . "</a></h3><p>" . $artistname  . "</p></div></div></div></div><div class='ms_divider'></div>");
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <!----Main div close---->
</div>
<?php
include("Share/footer.php");
?>