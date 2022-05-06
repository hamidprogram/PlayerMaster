<?php
include("../Share/header.php");
session_start();
if (!empty($_SESSION["MusicAdd"])) {
    echo ("<script>alert('" . $_SESSION["MusicAdd"] . "')</script>");
    $_SESSION["MusicAdd"] = "";
}
if (!empty($_SESSION["MusicEdit"])) {
    echo ("<script>alert('" . $_SESSION["MusicEdit"] . "')</script>");
    $_SESSION["MusicEdit"] = "";
}
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

$sql = "SELECT * FROM music WHERE ID LIKE '%$Serch%' OR Name LIKE '%$Serch%' OR ArtistID LIKE '%$Serch%' OR AlbumID LIKE '%$Serch%' OR GenresID LIKE '%$Serch%'";
$result = $conn->query($sql);
$conn->close();
?>
<br>
<br>
<div class="d-grid gap-2">
    <a href="MusicFormAdd.php" class="btn btn-outline-secondary">Add</a>
</div>
<br>
<div class="table-responsive">
    <table class="table table-sm table-dark table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Artist ID</th>
                <th scope="col">Album ID</th>
                <th scope="col">Genres ID</th>
                <th scope="col">Discription</th>
                <th scope="col">Music Cover</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo ("<tr><td>" . $row["ID"] . "</td><td>" . $row["Name"] . "</td><td>" . $row["ArtistID"] . "</td><td>" . $row["AlbumID"] . "</td><td>" . $row["GenresID"] . "</td><td>" . $row["Discriptin"] . "</td><td><img class='justify-content-center d-flex mb-4' src='Cover/" . $row["MusicCover"] . "' width='72' height='57'></td><td><a class='btn btn-outline-warning' href='MusicFormEdit.php?id=" . $row["ID"] . "'>Edit</a></td><td><a class='btn btn-outline-danger' href='DeleteMusic.php?id=" . $row["ID"] . "'>Delete</a></td></tr>");
                }
            }
            ?>
        </tbody>
    </table>
</div>
<br>
<br>
<br>
<br>
<?php
include("../Share/footer.php");
?>