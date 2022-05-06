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

$sql = "SELECT * FROM user WHERE $id = ID";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$conn->close();
?>
<br>
<br>
<div class="d-flex justify-content-center">
    <form action="EditUser.php" method="post">
        <input type='hidden' name='ID' value="<?php echo ($row["ID"]); ?>">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="Password" value="<?php echo ($row["Password"]) ?>" placeholder="name@example.com">
            <label for="floatingInput">Password</label>
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