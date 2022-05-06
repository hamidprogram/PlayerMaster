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

$sql = "SELECT * FROM blog";
$result = $conn->query($sql);
$conn->close();
?>
<!--- blog section start --->
<div class="ms_blog_wrapper">
	<div class="row">
		<?php
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