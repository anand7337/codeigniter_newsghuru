<!DOCTYPE html>
<html lang="ta">

<head>
    <meta charset="utf-8" />
    <title>News Ghuru Tamil</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />
   
    <!-- Favicon -->
    <link rel='shortcut icon' type='image/x-icon' href="<?= base_url('assets/img/'); ?>" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap"
        rel="stylesheet" />

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!--Jquery stylesheet -->

    
    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="<?= base_url('assets/css/font.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrapmain.css'); ?>">

</head>

<body>

    <!-- header section -->
    <section class="header_navigation">
        <div class="top_nav">
            <div class="container">
                <div class="top_nav_content">
                    <div class="top_logo">
                        <img src="<?= base_url('assets/img/logo/logo_main02.png'); ?>" alt="">
                    </div>
                    <!-- <div class="sub_domain">
                        <div class="sub_link">
                            <ul>
                                <li><a href="">NewsGhuru English</a></li>
                                <li><a href="">Jackpot Talkies</a></li>
                                <li><a href="">Healthghuru</a></li>
                            </ul>
                        </div>
                    </div> -->
                    <div class="logo_toggle">
                        <div class="yt_channel">
                            <a href="https://www.youtube.com/@newsghurutamil/videos" target="blank">
                                <div class="yt_iconfb">
                                    <i class="fab fa-facebook"></i>
                                </div>
                            </a>
                            <a href="https://www.youtube.com/@newsghurutamil/videos" target="blank">
                                <div class="yt_iconins">
                                    <i class="fab fa-instagram"></i>
                                </div>
                            </a>

                            <a href="https://www.youtube.com/@newsghurutamil/videos" target="blank">
                                <div class="yt_icontw">
                                    <i class="fab fa-twitter"></i>
                                </div>
                            </a>
                            <a href="https://www.youtube.com/@newsghurutamil/videos" target="blank">
                                <div class="yt_iconyt">
                                    <i class="fab fa-youtube"></i>
                                </div>
                            </a>
                            <a href="https://www.youtube.com/@newsghurutamil/videos" target="blank">
                                <div class="yt_iconlink">
                                    <i class="fab fa-linkedin"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bottom_nav">
            <div class="container">
                <nav class="navbar">
                    <div class="navbar-header">
                        
                        <button class="navbar-toggler" data-toggle="open-navbar1">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <div class="mobile_top">
                            <ul>
                            <li class="nv-mob"><a href="<?= base_url('main/trending/') ?>">Trending</a></li>
                            <li><a href="<?= base_url('main/index/') ?>">Home</a></li>
                            <li><a href="<?= base_url('main/news/') ?>">News</a></li>
                            <li><a href="<?= base_url('main/sports/') ?>">Sports</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="navbar-menu" id="open-navbar1">
                        <ul class="navbar-nav">
                            <li class="nv-mob nv-no"><a href="<?= base_url('main/trending/') ?>">Trending</a></li>
                            <li class="nv-no"><a href="<?= base_url('main/index/') ?>">Home</a></li>
                            <li class="nv-no"><a href="<?= base_url('main/news/') ?>">News</a></li>
                            <li class="nv-no"><a href="<?= base_url('main/sports/') ?>">Sports</a></li>
                            <li class="navbar-dropdown">
                                <a href="#" class="dropdown-toggler" data-dropdown="tele">
                                    Television <i class=" fa fa-angle-down "></i>
                                </a>
                                <ul class="dropdown" id="tele">
                                    <li><a href="<?= base_url('main/tv_serials/') ?>">Tv Serials</a></li>
                                    <li><a href="<?= base_url('main/tv_shows/') ?>">Tv Shows</a></li>
                                </ul>
                            </li>
                            <li class="navbar-dropdown">
                                <a href="#" class="dropdown-toggler" data-dropdown="my-dropdown-id">
                                    Reviews <i class=" fa fa-angle-down "></i>
                                </a>
                                <ul class="dropdown" id="my-dropdown-id">
                                    <li><a href="<?= base_url('main/tamil_movie_reviews/') ?>">Tamil Movies</a></li>
                                    <li><a href="<?= base_url('main/hindi_movie_reviews/') ?>">Hindi Movies</a></li>
                                    <li><a href="<?= base_url('main/english_movie_reviews/') ?>">English Movies</a></li>
                                    <li><a href="<?= base_url('main/tamilwebseries_movie_reviews/') ?>">Tamil Web
                                            Series</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="navbar-dropdown">
                                <a href="#" class="dropdown-toggler" data-dropdown="blog">
                                    Cinema News <i class=" fa fa-angle-down "></i>
                                </a>
                                <ul class="dropdown" id="blog">
                                    <li><a href="<?= base_url('main/kollywood_cinemas/') ?>">Kollywood Cinemas</a></li>
                                    <li><a href="<?= base_url('main/bollywood_cinemas/') ?>">Bollywood Cinemas</a></li>
                                    <li><a href="<?= base_url('main/hollywood_cinemas/') ?>">Hollywood Cinemas</a></li>
                                </ul>
                            </li>
                            <li><a href="<?= base_url('main/celebrity/') ?>">Celebrity</a></li>
                            <li><a href="<?= base_url('main/interviews/') ?>">Interviews</a></li>
                            <li><a href="<?= base_url('main/gossips/') ?>">Gossips</a></li>
                            <li><a href="<?= base_url('main/videos/') ?>">Videos</a></li>
                            <li><a href="<?= base_url('main/photos/') ?>">Photos</a></li>
                            <li><a href="<?= base_url('main/events/') ?>">Events</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </section>