<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Website</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        <?php include "style.css" ?>
        <?php include "media.css" ?>
    </style>
    <style>
    header .song::before{
        background: url("./img/bg/neeti_bg.jpg");
        padding-right: 20px;
        opacity: 1;
    }
    </style>
</head>
<body>
    <header>
        <div class="menu">
            <h6 id="menu_button">
            <i class="bi bi-music-note-list"></i>
            </h6>
            <h1>Playlist</h1>
            <div class="playlist">
                <a href="welcome.php" style="text-decoration: none;"><h4 class="active" id="home"><span></span><i class="bi bi-house-door-fill"></i>Home</h4></a>
                <h4 class="active"><span></span><i class="bi bi-music-note-beamed"></i> Playlist</h4>
                <h4><span></span><i class="bi bi-music-note-beamed"></i>Recommended</h4>
            </div>
            <div class="menu_song">
                <li class="songItem">
                    <span>01</span>
                    <img src="./img/Shreya_Posters/1.jpeg" alt="">
                    <h5>On my way
                        <br> <div class="subtitle">Alan Walker</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="1"></i>
                </li>

                <li class="songItem">
                    <span>02</span>
                    <img src="./img/Shreya_Posters/2.jpeg" alt="">
                    <h5>On my way
                        <br> <div class="subtitle">Alan Walker</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="2"></i>
                </li>

                <li class="songItem">
                    <span>03</span>
                    <img src="./img/Shreya_Posters/3.jpeg" alt="">
                    <h5>On my way
                        <br> <div class="subtitle">Alan Walker</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="3"></i>
                </li>

                <li class="songItem">
                    <span>04</span>
                    <img src="./img/Shreya_Posters/4.jpeg" alt="">
                    <h5>On my way
                        <br> <div class="subtitle">Alan Walker</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="4"></i>
                </li>

                <li class="songItem">
                    <span>05</span>
                    <img src="./img/Shreya_Posters/5.jpeg" alt="">
                    <h5>On my way
                        <br> <div class="subtitle">Alan Walker</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="5"></i>
                </li>

                <li class="songItem">
                    <span>06</span>
                    <img src="./img/Shreya_Posters/6.jpeg" alt="">
                    <h5>On my way
                        <br> <div class="subtitle">Alan Walker</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="6"></i>
                </li>

                <li class="songItem">
                    <span>07</span>
                    <img src="./img/Shreya_Posters/7.jpeg" alt="">
                    <h5>On my way
                        <br> <div class="subtitle">Alan Walker</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="7"></i>
                </li>

                <li class="songItem">
                    <span>08</span>
                    <img src="./img/Shreya_Posters/8.jpeg" alt="">
                    <h5>On my way
                        <br> <div class="subtitle">Alan Walker</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="8"></i>
                </li>
            </div>
        </div>

        <div class="song">
            <nav>
                <ul>
                    <li>Discover <span></span></li>
                    <li>My Library</li>
                    <li>Radio</li>
                </ul>
                <div class="search">
                    <i class="bi bi-search"></i>
                    <input type="text" placeholder="What next?">
                </div>
                <div class="user">
                    <img src="img/KDS CODER.png" alt="">
                </div>
            </nav>
            <div class="content">
                <h1>Shreya Ghoshal</h1>
                <p>Music by	Ajay-Atul</p>
                <div class="buttons">
                    <button>Play</button>
                    <button>Follow</button>
                </div>
            </div>

            <div class="popular_song">
                <div class="h4">
                    <h4>Popular Songs</h4>
                    <div class="btn_s">
                        <i class="bi bi-arrow-left-short" id="pop_song_left"></i>
                        <i class="bi bi-arrow-right-short" id="pop_song_right"></i>
                    </div>
                </div>
                <div class="pop_song">
                    <li class="songItem">
                        <div class="img_play">
                            <img src="./img/Shreya_Posters/9.jpeg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="9"></i>
                        </div>
                        <h5>Dilbar
                            <br> <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="./img/Shreya_Posters/10.jpeg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="10"></i>
                        </div>
                        <h5>Duniya
                            <br> <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="./img/Shreya_Posters/11.jpeg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="11"></i>
                        </div>
                        <h5>Chandra
                            <br> <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="./img/Shreya_Posters/12.jpeg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="12"></i>
                        </div>
                        <h5>Putt Jatt Da
                            <br> <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="./img/Shreya_Posters/13.jpeg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="13"></i>
                        </div>
                        <h5>Baarishein
                            <br> <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="./img/Shreya_Posters/14.jpeg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="14"></i>
                        </div>
                        <h5>Vaaste
                            <br> <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="./img/Shreya_Posters/15.jpeg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="15"></i>
                        </div>
                        <h5>Lut Gaye
                            <br> <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="./img/Shreya_Posters/16.jpeg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="16"></i>
                        </div>
                        <h5>Lut Gaye
                            <br> <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="./img/Shreya_Posters/17.jpeg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="17"></i>
                        </div>
                        <h5>Lut Gaye
                            <br> <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                </div>
            </div>
            <div class="popular_artists">
                <div class="h4">
                    <h4>Popular Artists</h4>
                    <div class="btn_s">
                        <i class="bi bi-arrow-left-short" id="pop_art_left"></i>
                        <i class="bi bi-arrow-right-short" id="pop_art_right"></i>
                    </div>
                </div>
                <div class="item">
                <li>
                        <a href="./shreya.php"><img src="img/Shreya.jpeg" alt=""></a>
                    </li>
                    <li>
                        <a href="./arijit.php"><img src="img/arijitt.jpeg" alt=""></a>
                    </li>
                    <li>
                        <a href="./darshan.php"><img src="img/Darshan.jpeg" alt=""></a>
                    </li>
                    <li>
                        <a href="./rahman.php"><img src="img/a_r_rahman.jpeg" alt=""></a>
                    </li>
                    <li>
                        <a href="./neeti.php"><img src="img/neeti.jpeg" alt=""></a>
                    </li>
                    <li>
                        <a href="./kk.php"><img src="img/kk2.jpeg" alt=""></a>
                    </li>
                    <li>
                        <a href="./palak.php"><img src="img/palak.jpeg" alt=""></a>
                    </li>
                    <li>
                        <a href="./asees.php"><img src="img/Asees.jpeg" alt=""></a>
                    </li>
                    <li>
                        <a href="./ali.php"><img src="img/Rahat_Ali.jpeg" alt=""></a>
                    </li>
                    <li>
                        <a href="./kishor.php"><img src="img/kishore_kumar.jpeg" alt=""></a>
                    </li>
                    <li>
                        <a href="./atif.php"><img src="img/atif.jpeg" alt=""></a>
                    </li>
                    <li>
                        <a href="./alka.php"><img src="img/alka.jpeg" alt=""></a>
                    </li>
                    <li>
                        <a href="./alan.php"><img src="img/alan.jpg" alt=""></a>
                    </li>
                    <li>
                        <a href="./mohit.php"><img src="img/mohit.jpeg" alt=""></a>
                    </li>
                    <li>
                        <a href="./jubin.php"><img src="img/jubin.jpeg" alt=""></a>
                    </li>
                </div>
            </div>
        </div>

        <div class="play">
            <div class="wave" id="wave">
                <div class="wave1"></div>
                <div class="wave1"></div>
                <div class="wave1"></div>
            </div>

            <img src="./img/Shreya_Posters/1.jpeg" alt="" id="poster_play">

            <h5 id="title"> Manwa Laage
            <div class="subtitle">Shreya Ghoshal</div>
            </h5>
            
            <div class="icon">
                <i class="bi shuffle bi-music-note-beamed">next</i>
                <i class="bi bi-skip-start-fill" id="back"></i>
                <i class="bi bi-play-fill" id="masterPlay"></i>
                <i class="bi bi-skip-end-fill" id="next"></i>
                <a href="" download id="download_music"><i class="bi bi-cloud-arrow-down-fill"></i></a>
            </div>
            <span id="currentStart">0:00</span>

            <div class="bar">
                <input type="range" id="seek" min="0" max="100">
                <div class="bar2" id="bar2"></div>
                <div class="dot"></div>
            </div>

            <span id="currentEnd">0:30</span>

            <div class="vol">
                <i class="bi bi-volume-up-fill" id="vol_icon"></i>
                <input type="range" id="vol" min="0" max="100">
                <div class="vol_bar"></div>
                <div class="dot" id="vol_dot"></div>
            </div>
        </div>
    </header>
    <script src="neeti.js"></script>
</body>
</html>