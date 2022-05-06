<?php
include("../Share/header.php");
?>
<br>
<br>
<div class="d-flex justify-content-center">
    <form action="AddMusic.php" method="post" enctype="multipart/form-data">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="Name" placeholder="name@example.com">
            <label for="floatingInput">Name</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="Artist" placeholder="name@example.com">
            <label for="floatingInput">Artist</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="Album" placeholder="name@example.com">
            <label for="floatingInput">Album</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="Genres" placeholder="name@example.com">
            <label for="floatingInput">Genres</label>
        </div>
        <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" name="Discription"></textarea>
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