<?php
include("Share/header.php");
$Serch = $_POST["Serch"];
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

$sql = "SELECT * FROM music WHERE Name LIKE '%$Serch%'";
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
<div class="ms_heading">
    <h1>Music</h1>
</div>
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

<br>
<br>
<br>

<div class="ms_heading">
    <h1>Album</h1>
</div>
<div class="ms_fea_album_slider padder_top10 ">
    <div class="ms_album_slider swiper-container">
        <div class="swiper-wrapper">
            <?php
            $sql = "SELECT * FROM album WHERE Name LIKE '%$Serch%'";
            $result = $conn->query($sql);
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

<br>
<br>
<br>

<div class="ms_top_artist">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="ms_heading">
                    <h1>Artists</h1>
                </div>
            </div>
            <?php
            $sql = "SELECT * FROM artist WHERE Name LIKE '%$Serch%'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo ("<div class='col-lg-2 col-md-6'><div class='ms_rcnt_box marger_bottom30'><div class='ms_rcnt_box_img'><img src='Admin/Artist/Photo/" . $row["Photo"] . "' class='img-fluid'><div class='ms_main_overlay'><div class='ms_box_overlay'></div><div class='ms_play_icon'><img src='images/svg/play.svg' ></div></div></div><div class='ms_rcnt_box_text'><h3><a href='SingleArtist.php?id=" . $row["ID"] . "'>" . $row["Name"] . "</a></h3></div></div></div>");
                }
            }
            ?>
        </div>
    </div>
</div>

<br>
<br>
<br>

<div class="ms_heading">
    <h1>Blog</h1>
</div>
<div class="ms_blog_wrapper">
    <div class="row">
        <?php
        $sql = "SELECT * FROM blog WHERE Name LIKE '%$Serch%'";
        $result = $conn->query($sql);
        $conn->close();
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo ("<div class='col-lg-6'><div class='ms_blog_section blog_active marger_bottom30'><div class='ms_blog_img'><img src='Admin/Blog/Cover/" . $row["Cover"] . "' class='img-fluid'></div><div class='ms_main_overlay'><div class='ms_box_overlay'></div><div class='ovrly_text_div'><span class='ovrly_text1'><a href='SingleBlog.php?id=" . $row["ID"] . "'>" . $row["Name"] . "</a></span><div class='bottom'><span class='ovrly_text1'>" . $row["Date"] . "</span><span class='ovrly_text2'><a href='SingleBlog.php?id=" . $row["ID"] . "'><i class='fa fa-long-arrow-right'></i></a></span></div></div></div><div class='ms_box_overlay_on'><div class='ovrly_text_div'><span class='ovrly_text1'><a href='SingleBlog.php?id=" . $row["ID"] . "'>" . $row["Name"] . "</a></span></div></div></div></div>");
            }
        }
        ?>
    </div>
</div>
<?php
include("Share/footer.php");
?>