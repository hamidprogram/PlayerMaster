<?php
include("../Share/header.php");
session_start();
if (!empty($_SESSION["UserAdd"])) {
    echo ("<script>alert('" . $_SESSION["UserAdd"] . "')</script>");
    $_SESSION["UserAdd"] = "";
}
if (!empty($_SESSION["UserEdit"])) {
    echo ("<script>alert('" . $_SESSION["UserEdit"] . "')</script>");
    $_SESSION["UserEdit"] = "";
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

$sql = "SELECT * FROM user";
$result = $conn->query($sql);
$conn->close();
?>
<br>
<br>
<div class="d-grid gap-2">
    <a href="UserFormAdd.php" class="btn btn-outline-secondary">Add</a>
</div>
<br>
<div class="table-responsive">
    <table class="table table-sm table-dark table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">User Name</th>
                <th scope="col">Password</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo ("<tr><td>" . $row["ID"] . "</td><td>" . $row["UserName"] . "</td><td>" . $row["Password"] . "</td><td><a class='btn btn-outline-warning' href='UserFormEdit.php?id=" . $row["ID"] . "'>Edit</a></td><td><a class='btn btn-outline-danger' href='DeleteUser.php?id=" . $row["ID"] . "'>Delete</a></td></tr>");
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