<?php
include("../Share/header.php");
session_start();
if(!empty($_SESSION["GenresAdd"])){
    echo("<script>alert('".$_SESSION["GenresAdd"]."')</script>");
    $_SESSION["GenresAdd"] = "";
}
if(!empty($_SESSION["GenresEdit"])){
    echo("<script>alert('".$_SESSION["GenresEdit"]."')</script>");
    $_SESSION["GenresEdit"] = "";
}
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

$sql = "SELECT * FROM Genres";
$result = $conn->query($sql);
$conn->close();
?>
<br>
<br>
<div class="d-grid gap-2">
    <a href="GenresFormAdd.php" class="btn btn-outline-secondary">Add</a>
</div>
<br>
<div class="table-responsive">
    <table class="table table-sm table-dark table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Genres Cover</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
        <?php
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo ("<tr><td>".$row["ID"]."</td><td>".$row["Name"]."</td><td><img class='justify-content-center d-flex mb-4' src='Cover/".$row["GenresCover"]."' width='72' height='57'></td><td><a class='btn btn-outline-warning' href='GenresFormEdit.php?id=".$row["ID"]."'>Edit</a></td><td><a class='btn btn-outline-danger' href='DeleteGenres.php?id=".$row["ID"]."'>Delete</a></td></tr>");
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