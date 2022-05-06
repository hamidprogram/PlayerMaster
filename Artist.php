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

$sql = "SELECT * FROM artist";
$result = $conn->query($sql);
$conn->close();
?>
<!----Top Artist Section---->
<div class="ms_top_artist">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="ms_heading">
                    <h1>Artists</h1>
                </div>
            </div>
            <?php
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo ("<div class='col-lg-2 col-md-6'><div class='ms_rcnt_box marger_bottom30'><div class='ms_rcnt_box_img'><img src='Admin/Artist/Photo/".$row["Photo"]."' class='img-fluid'><div class='ms_main_overlay'><div class='ms_box_overlay'></div><div class='ms_play_icon'><img src='images/svg/play.svg' ></div></div></div><div class='ms_rcnt_box_text'><h3><a href='SingleArtist.php?id=".$row["ID"]."'>".$row["Name"]."</a></h3></div></div></div>");
                }
            }
            ?>
        </div>
    </div>
</div>
<?php
include("Share/footer.php");
?>