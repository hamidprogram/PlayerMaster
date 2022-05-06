<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Mange Master</title>
    <link rel="stylesheet" href="assets/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style.css">
</head>

<body class="colbody">
    <nav class="navbar navbar-expand-custom navbar-mainbg">
        <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector">
                    <div class="left"></div>
                    <div class="right"></div>
                </div>
                <li class="nav-item">
                    <a class="nav-link" href="./index.php">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./Album/Album.php"><i class="far fa-address-book"></i>Album</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./Artist/Artist.php">Artist</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./Blog/Blog.php"></i>Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./Comment/Comment.php"></i>Comment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./Genres/Genres.php"></i>Genres</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./Music/Music.php"></i>Music</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./User/User.php"></i>User</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="assets/cover.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3" style="color: wheat;">Responsive left-aligned hero with image</h1>
                <p class="lead" style="color: white;">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <div class="b-example-divider"></div>
    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                    <svg class="bi" width="30" height="24">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>
                <span class="text-muted">© 2021 HamidMaster, Inc</span>
            </div>
        </footer>
    </div>
    <script src='assets/jquery-3.6.0.min.js'></script>
    <script src='assets/popper.min.js'></script>
    <script src='assets/bootstrap-5.1.3-dist/js/bootstrap.min.js'></script>
    <script src="assets/script.js"></script>
</body>

</html>