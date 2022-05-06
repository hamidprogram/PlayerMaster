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

$sql = "SELECT * FROM music WHERE '$ID'=GenresID";
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
?>
<!----Featured Albumn Section Start---->
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
<!---Weekly Top 10--->
<div class="ms_weekly_wrapper">
    <div class="ms_weekly_inner">
        <div class="row">
            <div class="col-lg-12">
                <div class="ms_heading">
                    <h1>10 Music Week</h1>
                </div>
            </div>
            <?php
            $sqllm = "SELECT * FROM music ORDER BY ID ASC LIMIT 10";
            $resulttm = $conn->query($sqllm);
            function getartistt($id)
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
            if ($resulttm->num_rows > 0) {
                // output data of each row
                $num = 1;
                while ($row = $resulttm->fetch_assoc()) {
                    $artistnamee = getartistt($row["ArtistID"]);
                    echo ("<div class='col-lg-4 col-md-12 padding_right40'><div class='ms_weekly_box'><div class='weekly_left'><span class='w_top_no'>" . $num . "</span><div class='w_top_song'><div class='w_tp_song_img'><img src='Admin/Music/Cover/" . $row["MusicCover"] . "'><div class='ms_song_overlay'></div><div class='ms_play_icon'><img src='images/svg/play.svg'></div></div><div class='w_tp_song_name'><h3><a href='SingleMusic.php?id=" . $row["ID"] . "'>" . $row["Name"] . "</a></h3><p>" . $artistnamee . "</p></div></div></div></div><div class='ms_divider'></div></div>");
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