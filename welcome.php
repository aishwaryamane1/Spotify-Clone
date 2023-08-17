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
</head>
<body>
    <header>
        <div class="menu">
            <h6 id="menu_button">
            <i class="bi bi-music-note-list"></i>
            </h6>
            <h1>Playlist</h1>
            <div class="playlist">
                <h4 class="active" id="home"><span></span><i class="bi bi-music-note-beamed"></i>Playlist</h4>
                <h4><span></span><i class="bi bi-music-note-beamed"></i>Recently Played</h4>
                <h4><span></span><i class="bi bi-music-note-beamed"></i>Recommended</h4>
            </div>
            <div class="menu_song">
                <li class="songItem">
                    <span>01</span>
                    <img src="img/1.jpg" alt="">
                    <h5>On my way
                        <br> <div class="subtitle">Alan Walker</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="1"></i>
                </li>

                <li class="songItem">
                    <span>02</span>
                    <img src="img/2.jpg" alt="">
                    <h5>On my way
                        <br> <div class="subtitle">Alan Walker</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="2"></i>
                </li>

                <li class="songItem">
                    <span>03</span>
                    <img src="img/3.jpg" alt="">
                    <h5>On my way
                        <br> <div class="subtitle">Alan Walker</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="3"></i>
                </li>

                <li class="songItem">
                    <span>04</span>
                    <img src="img/4.jpg" alt="">
                    <h5>On my way
                        <br> <div class="subtitle">Alan Walker</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="4"></i>
                </li>

                <li class="songItem">
                    <span>05</span>
                    <img src="img/5.jpg" alt="">
                    <h5>On my way
                        <br> <div class="subtitle">Alan Walker</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="5"></i>
                </li>

                <li class="songItem">
                    <span>06</span>
                    <img src="img/6.jpg" alt="">
                    <h5>On my way
                        <br> <div class="subtitle">Alan Walker</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="6"></i>
                </li>

                <li class="songItem">
                    <span>07</span>
                    <img src="img/7.jpg" alt="">
                    <h5>On my way
                        <br> <div class="subtitle">Alan Walker</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="7"></i>
                </li>

                <li class="songItem">
                    <span>08</span>
                    <img src="img/8.jpg" alt="">
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
                    <div class="search_results">
                        <!-- <a href="" class="card">
                            <img src="img/1.jpg" alt="">
                            <div class="content">
                                On My way
                                <div class="subtitle">
                                    Alan Walker
                                </div>
                            </div>
                        </a> -->
                    </div>
                </div>
                <div class="user">
                    <img src="./img/logo.jpeg" alt="">
                </div>
            </nav>
            <div class="content">
                <h1 id="greetings"></h1>
                <p>Discover the magic of music with us!</p>
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
                            <img src="img/9.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="9"></i>
                        </div>
                        <h5>Chandra 
                            <br> <div class="subtitle">Shreya Ghoshal</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/10.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="10"></i>
                        </div>
                        <h5>Duniya
                            <br> <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/11.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="11"></i>
                        </div>
                        <h5>Chandra
                            <br> <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/12.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="12"></i>
                        </div>
                        <h5>Putt Jatt Da
                            <br> <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/13.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="13"></i>
                        </div>
                        <h5>Baarishein
                            <br> <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/14.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="14"></i>
                        </div>
                        <h5>Vaaste
                            <br> <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/15.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="15"></i>
                        </div>
                        <h5>Lut Gaye
                            <br> <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/16.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="16"></i>
                        </div>
                        <h5>Tu Meri Zindagi Hai
                            <br> <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/17.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="17"></i>
                        </div>
                        <h5>Ustaad
                            <br> <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/18.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="18"></i>
                        </div>
                        <h5>Pasoori
                            <br> <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/19.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="19"></i>
                        </div>
                        <h5>On my way
                            <br> <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/20.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="20"></i>
                        </div>
                        <h5>Lagdi Lahore Di
                            <br> <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/21.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="21"></i>
                        </div>
                        <h5>Lagdi Lahore Di
                            <br> <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/22.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="22"></i>
                        </div>
                        <h5>Lagdi Lahore Di
                            <br> <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/23.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="23"></i>
                        </div>
                        <h5>Lagdi Lahore Di
                            <br> <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/24.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="24"></i>
                        </div>
                        <h5>Lagdi Lahore Di
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
                        <img src="img/a_r_rahman.jpeg" alt="">
                    </li>
                    <li>
                        <img src="img/neeti.jpeg" alt="">
                    </li>
                    <li>
                        <img src="img/kk2.jpeg" alt="">
                    </li>
                    <li>
                        <img src="img/palak.jpeg" alt="">
                    </li>
                    <li>
                        <img src="img/Asees.jpeg" alt="">
                    </li>
                    <li>
                        <img src="img/Rahat_Ali.jpeg" alt="">
                    </li>
                    <li>
                        <img src="img/kishore_kumar.jpeg" alt="">
                    </li>
                    <li>
                        <img src="img/atif.jpeg" alt="">
                    </li>
                    <li>
                        <img src="img/alka.jpeg" alt="">
                    </li>
                    <li>
                        <img src="img/alan.jpg" alt="">
                    </li>
                    <li>
                        <img src="img/mohit.jpeg" alt="">
                    </li>
                    <li>
                        <img src="img/jubin.jpeg" alt="">
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

            <img src="./img/1.jpg" alt="" id="poster_play">

            <h5 id="title"> Tum Se Hi
            <div class="subtitle">Mohit Chauhan</div>
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
    <script src="script.js"></script>
    
</body>
</html>