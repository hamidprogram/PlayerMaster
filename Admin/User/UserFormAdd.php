<?php
include("../Share/header.php");
?>
<br>
<br>
<div class="d-flex justify-content-center">
    <form action="AddUser.php" method="post">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="UserName" placeholder="name@example.com">
            <label for="floatingInput">User Name</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="Password" placeholder="name@example.com">
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