<?php
include("../Share/header.php");
$id = $_GET["id"];
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

$sql = "SELECT * FROM music WHERE $id = ID";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$conn->close();
?>
<br>
<br>
<div class="d-flex justify-content-center">
    <form action="EditMusic.php" method="post" enctype="multipart/form-data">
        <input type='hidden' name='ID' value="<?php echo ($row["ID"]); ?>">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="Name" value="<?php echo ($row["Name"]); ?>" placeholder="name@example.com">
            <label for="floatingInput">Name</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="Artist" value="<?php echo ($row["ArtistID"]); ?>" placeholder="name@example.com">
            <label for="floatingInput">Artist</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="Album" value="<?php echo ($row["AlbumID"]); ?>" placeholder="name@example.com">
            <label for="floatingInput">Album</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="Genres" value="<?php echo ($row["GenresID"]); ?>" placeholder="name@example.com">
            <label for="floatingInput">Genres</label>
        </div>
        <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" name="Discription"><?php echo ($row["Discriptin"]); ?></textarea>
            <label for="floatingTextarea">Discription</label>
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Default file input example</label>
            <input class="form-control" type="file" name="Music">
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Default file input example</label>
            <input class="form-control" type="file" name="Cover">
        </div>
        <div class="col-auto d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
<br>
<br>
<br>
<?php
include("../Share/footer.php");
?>