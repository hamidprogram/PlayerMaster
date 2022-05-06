<?php
include("../Share/header.php");
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

$sql = "SELECT * FROM comment WHERE ID LIKE '%$Serch%' OR Name LIKE '%$Serch%' OR Phone LIKE '%$Serch%' OR BlogID LIKE '%$Serch%'";
$result = $conn->query($sql);
$conn->close();
?>
<br>
<br>
<div class="table-responsive">
    <table class="table table-sm table-dark table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Discription</th>
                <th scope="col">Blog ID</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo ("<tr><td>" . $row["Phone"] . "</td><td>" . $row["Name"] . "</td><td>" . $row["Phone"] . "</td><td>" . $row["Discriptin"] . "</td><td>" . $row["BlogID"] . "</td><td><a class='btn btn-outline-danger' href='DeleteComment.php?id=" . $row["ID"] . "'>Delete</a></td></tr>");
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