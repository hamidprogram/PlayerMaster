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

$sql = "SELECT * FROM album";
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
<div class="ms_fea_album_slider padder_top10 ">
    <div class="ms_album_slider swiper-container">
        <div class="swiper-wrapper">
            <?php
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    $artistname = getartist($row["ArtistID"]);
                    echo ("<div class='swiper-slide'><div class='ms_rcnt_box'><div class='ms_rcnt_box_img'><img src='Admin/Album/Cover/" . $row["AlbumCover"] . "'><div class='ms_main_overlay'><div class='ms_box_overlay'></div><div class='ms_play_icon'><img src='images/svg/play.svg'></div></div></div><div class='ms_rcnt_box_text'><h3><a href='SingleAlbum.php?id=" . $row["ID"] . "'>" . $row["Name"] . "</a></h3><p>" . $artistname . "</p></div></div></div>");
                }
            }
            ?>
        </div>
    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next3 slider_nav_next"></div>
    <div class="swiper-button-prev3 slider_nav_prev"></div>
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