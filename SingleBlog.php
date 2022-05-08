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

$sql = "SELECT * FROM blog WHERE '$ID'=ID";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$v = $row["Views"];
$v++;
$sqlv = "UPDATE blog SET Views='$v' WHERE ID=$ID";
$conn->query($sqlv);
?>
<!--- blog single section start --->
<div class="ms_blog_single_wrapper">
    <div class="row">
        <div class="col-lg-9 col-md-9">
            <div class="ms_blog_single">
                <div class="blog_single_img">
                    <img src="Admin/Blog/Cover/<?php echo ($row["Cover"]) ?>" class="img-fluid">
                </div>
                <div class="blog_single_content">
                    <h3 class="ms_blog_title"><?php echo ($row["Name"]) ?></h3>
                    <div class="ms_post_meta">
                        <ul>
                            <li><?php echo ($row["Date"]) ?> / </li>
                            <li><?php echo ($v) ?> Views / </li>
                        </ul>
                    </div>
                    <p><?php echo ($row["ShortDIscription"]) ?></p>
                    <p><?php echo ($row["DIscription"]) ?></p>
                    <div class="ms_blog_tag foo_sharing">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="blog_comments">
                    <h1>comments</h1>
                    <?php
                    $ID = $row["ID"];
                    $sql = "SELECT * FROM comment WHERE '$ID'=BlogID";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo ("<ol><li><div class='ms_comment_section'><div class='comment_info'><div class='comment_head'><h3>" . $row["Name"] . "</h3></div><p>" . $row["Discriptin"] . "</p></div></div></li></ol>");
                        }
                    }
                    ?>
                </div>
                <!----Blog Comment Form---->
                <div class="blog_comments_forms">
                    <h1>Leave A Comment</h1>
                    <form method="POST" action="AddComent.php">
                        <input name="id" value="<?php echo($ID) ?>" type="hidden">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="comment_input_wrapper">
                                    <input name="Name" value="" type="text" class="cmnt_field" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="comment_input_wrapper">
                                    <input name="Phone" value="" type="text" class="cmnt_field" placeholder="Your Phone">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="comment_input_wrapper">
                                    <textarea id="comment" name="Discriptin" class="cmnt_field" placeholder="Your Comments"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="comment-form-submit">
                                    <input name="submit" type="submit" id="comment-submit" class="submit ms_btn" value="Post Comment">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3">
            <!----Sidebar Start---->
            <div class="ms_sidebar">
                <!--Feature Post-->
                <div class="widget widget_recent_entries">
                    <h2 class="widget-title">Best Posts</h2>
                    <ul>
                        <?php
                        $sqllm = "SELECT * FROM blog ORDER BY Views DESC LIMIT 4";
                        $resulttm = $conn->query($sqllm);
                        $conn->close();
                        if ($resulttm->num_rows > 0) {
                            // output data of each row
                            while ($row = $resulttm->fetch_assoc()) {
                                echo ("<li><div class='recent_cmnt_data'><h4><a href='SingleBlog.php?id=" . $row["ID"] . "'>" . $row["Name"] . "</a></h4><span>" . $row["Date"] . "</span></div></li>");
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php
include("Share/footer.php");
?>