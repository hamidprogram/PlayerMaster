<!DOCTYPE html>
<html>
<!-- Begin Head -->

<head>
    <title>Miraculous - Online Music Store Html Template</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="Music">
    <meta name="keywords" content="">
    <meta name="author" content="kamleshyadav">
    <meta name="MobileOptimized" content="320">
    <!--Start Style -->
    <link rel="stylesheet" type="text/css" href="css/fonts.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="js/plugins/swiper/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="js/plugins/nice_select/nice-select.css">
    <link rel="stylesheet" type="text/css" href="js/plugins/player/volume.css">
    <link rel="stylesheet" type="text/css" href="js/plugins/scroll/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Favicon Link -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
</head>

<body>
    <!----Loader---->
    <div class="ms_inner_loader">
        <div class="ms_loader">
            <div class="ms_bars">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
        </div>
    </div>
    <!----Main Wrapper Start---->
    <div class="ms_main_wrapper">
        <!---Side Menu Start--->
        <div class="ms_sidemenu_wrapper">
            <div class="ms_nav_close">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </div>
            <div class="ms_sidemenu_inner">
                <div class="ms_logo_inner">
                    <div class="ms_logo">
                        <a href="Admin/LoginForm.php"><img src="images/logo.png" alt="" class="img-fluid" /></a>
                    </div>
                    <div class="ms_logo_open">
                        <a href="Admin/LoginForm.php"><img src="images/open_logo.png" alt="" class="img-fluid" /></a>
                    </div>
                </div>
                <div class="ms_nav_wrapper">
                    <ul>
                        <li><a href="index.php" title="Discover">
                                <span class="nav_icon">
                                    <span class="icon icon_discover"></span>
                                </span>
                                <span class="nav_text">
                                    Home
                                </span>
                            </a>
                        </li>
                        <li><a href="Album.php" title="Albums">
                                <span class="nav_icon">
                                    <span class="icon icon_albums"></span>
                                </span>
                                <span class="nav_text">
                                    Albums
                                </span>
                            </a>
                        </li>
                        <li><a href="Artist.php" title="Artists">
                                <span class="nav_icon">
                                    <span class="icon icon_artists"></span>
                                </span>
                                <span class="nav_text">
                                    Artists
                                </span>
                            </a>
                        </li>
                        <li><a href="Genres.php" title="Genres">
                                <span class="nav_icon">
                                    <span class="icon icon_genres"></span>
                                </span>
                                <span class="nav_text">
                                    Genres
                                </span>
                            </a>
                        </li>
                        <li><a href="Blog.php" title="Top Tracks">
                                <span class="nav_icon">
                                    <span class="icon icon_purchased"></span>
                                </span>
                                <span class="nav_text">
                                    Blog
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!---Main Content Start--->
        <div class="ms_content_wrapper padder_top90">
            <!---Header--->
            <div class="ms_header">
                <div class="ms_top_left">
                    <div class="ms_top_search">
                        <form action="Serch.php" method="POST">
                            <input style="width: 75%;" type="text" class="form-control" name="Serch" placeholder="Search Music Here..">
                            <input style="width: 20%; height: 30px;" class="btn btn-outline-primary" type="submit" value="serch">
                        </form>
                    </div>
                </div>
            </div>