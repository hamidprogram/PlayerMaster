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

$sql = "SELECT * FROM genres";
$result = $conn->query($sql);
$conn->close();
?>
<!----Top Genres Section Start---->
<div class="ms_genres_wrapper ms_genres_single padder_top90">
    <div class="row">
        <div class="col-lg-12">
            <div class="ms_heading">
                <h1>Genres</h1>
            </div>
        </div>
        <?php
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo ("<div class='col-lg-4'><div class='ms_genres_box'><img src='Admin/Genres/Cover/" . $row["GenresCover"] . "' class='img-fluid' /><div class='ms_main_overlay'><div class='ms_box_overlay'></div><div class='ms_play_icon'><img src='images/svg/play.svg'></div><div class='ovrly_text_div'><span class='ovrly_text1'><a href='SingleGenres.php?id=" . $row["ID"] . "'>" . $row["Name"] . "</a></span></div></div><div class='ms_box_overlay_on'><div class='ovrly_text_div'><span class='ovrly_text1'><a href='SingleGenres.php?id=" . $row["ID"] . "'>" . $row["Name"] . "</a></span></div></div></div></div>");
            }
        }
        ?>
    </div>
</div>
<?php
include("Share/footer.php");
?>