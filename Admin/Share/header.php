<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Mange Master</title>
    <link rel="stylesheet" href="../assets/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/style.css">
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
                    <a class="nav-link" href="../index.php">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Album/Album.php"><i class="far fa-address-book"></i>Album</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Artist/Artist.php">Artist</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Blog/Blog.php"></i>Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Comment/Comment.php"></i>Comment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Genres/Genres.php"></i>Genres</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Music/Music.php"></i>Music</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../User/User.php"></i>User</a>
                </li>
            </ul>
            <form class="d-flex" action="Serch.php" method="POST">
                <input class="form-control me-2" type="search" name="Serch" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
        </div>
    </nav>