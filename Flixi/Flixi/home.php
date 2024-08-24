<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flixi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="lightslider.css">
    <script src="JQuery3.3.1.js"></script>
    <script src="lightslider.js"></script>
</head>

<body>

    <header>
        <a href="home.php" class="logo">Flixi</a>

        <ul class="navigation">
            <li><a href="home.php">HOME</a></li>
            <li><a href="login.html">PROFILE</a></li>
            <li><a href="all.php">ALL MOVIES</a></li>
            <li><a href="about.html">ABOUT US</a></li>
            <li><a href="watchlist.php">MY LIST</a></li>
        </ul>
        <div class="search">
            <form action="search.php" method="GET">
                <input type="text" name="query" placeholder="Find Your Favourtie Movies" />
                <!--search-icon----------->
                <i class="fas fa-search"></i>
            </form>
        </div>
    </header>
    <!-- --------nav end------- -->
    <section class="home">
        <video class="video-slide active" src="videos/The Boys.mp4" autoplay muted loop></video>
        <video class="video-slide" src="videos/Madame Web.mp4" autoplay muted loop></video>
        <video class="video-slide" src="videos/Kung Fu Panda 4.mp4" autoplay muted loop></video>
        <video class="video-slide" src="videos/Fallout.mp4" autoplay muted loop></video>
        <video class="video-slide" src="videos/Shogun.mp4" autoplay muted loop></video>

        <!-- -----content -->

        <div class="content active">
            <img src="images/The Boys.png" alt="" class="movie-title">

            <h4>
                <span>2024</span>
                <span><i>16+</i></span>
                <span>4 seasons</span>
                <span>Action</span>
            </h4>
            <p>A group of vigilantes informally known as "The Boys" set out to take down corrupt superheroes with no
                more than blue-collar grit and a willingness to fight dirty.</p>
            <div class="buttons">
                <a href="https://youtu.be/EzFXDvC-EwM?si=istzhdGUnuY7yYTh"><i class="fa fa-play" aria-hidden="true"></i> Play</a>
                <a href="#"><i class="fa fa-plus" aria-hidden="true"></i> My List</a>
                <a href="https://youtu.be/EzFXDvC-EwM?si=istzhdGUnuY7yYTh"><i class="fa-regular fa-circle-play" aria-hidden="true"></i> Watch Trailer</a>
            </div>
        </div>

        <div class="content">
            <img src="images/Madame Web.png" alt="" class="movie-title">

            <h4>
                <span>2024</span>
                <span><i>16+</i></span>
                <span>1h 56min</span>
                <span>Action</span>
            </h4>
            <p>Forced to confront revelations about her past, paramedic Cassandra Webb forges a relationship with three
                young women destined for powerful futures…if they can all survive a deadly present.</p>
            <div class="buttons">
                <a href="https://youtu.be/s_76M4c4LTo?si=YW0EGR9PA9lOsViJ"><i class="fa fa-play" aria-hidden="true"></i> Play</a>
                <a href="#"><i class="fa fa-plus" aria-hidden="true"></i> My List</a>
                <a href="https://youtu.be/s_76M4c4LTo?si=YW0EGR9PA9lOsViJ"><i class="fa-regular fa-circle-play" aria-hidden="true"></i> Watch Trailer</a>
            </div>
        </div>

        <div class="content">
            <img src="images/kungfu_logo.png" alt="" class="movie-title">

            <h4>
                <span>2024</span>
                <span><i>16+</i></span>
                <span>1h 34min</span>
                <span>Comedy/Adventure</span>
            </h4>
            <p>Po prepares to become the spiritual leader of the Valley of Peace, trains a new Dragon Warrior, and faces the Chameleon, a villain who conjures past foes.</p>
            <div class="buttons">
                <a href="https://youtu.be/_inKs4eeHiI?si=F-yi72hHzkfsGgcW"><i class="fa fa-play" aria-hidden="true"></i> Play</a>
                <a href="#"><i class="fa fa-plus" aria-hidden="true"></i> My List</a>
                <a href="https://youtu.be/_inKs4eeHiI?si=F-yi72hHzkfsGgcW"><i class="fa-regular fa-circle-play" aria-hidden="true"></i> Watch Trailer</a>
            </div>
        </div>

        <div class="content">
            <img src="images/Fallout.png" alt="" class="movie-title">

            <h4>
                <span>2023</span>
                <span><i>16+</i></span>
                <span>1 season</span>
                <span>Drama</span>
            </h4>
            <p>In a future, post-apocalyptic Los Angeles brought about by nuclear decimation, citizens must live in
                underground bunkers to protect themselves from radiation, mutants and bandits.</p>
            <div class="buttons">
                <a href="https://youtu.be/V-mugKDQDlg?si=O3CQ6ddqQ-3r4lth"><i class="fa fa-play" aria-hidden="true"></i> Play</a>
                <a href="#"><i class="fa fa-plus" aria-hidden="true"></i> My List</a>
                <a href="https://youtu.be/V-mugKDQDlg?si=O3CQ6ddqQ-3r4lth"><i class="fa-regular fa-circle-play" aria-hidden="true"></i> Watch Trailer</a>
            </div>
        </div>

        <div class="content">
            <img src="images/Shogun.png" alt="" class="movie-title">

            <h4>
                <span>2024</span>
                <span><i>16+</i></span>
                <span>1 season</span>
                <span>Historical Drama</span>
            </h4>
            <p>Destinies converge in Japan after a barbarian ship washes ashore in a poor fishing village. Meanwhile, in
                Osaka, Lord Toranaga finds himself outplayed by his enemies.</p>
            <div class="buttons">
                <a href="https://youtu.be/yAN5uspO_hk?si=Jm1ToPikmrFU05_-"><i class="fa fa-play" aria-hidden="true"></i> Play</a>
                <a href="#"><i class="fa fa-plus" aria-hidden="true"></i> My List</a>
                <a href="https://youtu.be/yAN5uspO_hk?si=Jm1ToPikmrFU05_-"><i class="fa-regular fa-circle-play" aria-hidden="true"></i> Watch Trailer</a>
            </div>
        </div>
        <!-- content end  -->

        <div class="media-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
        </div>
        <div class="slider-navigation">
            <div class="nav-btn active"></div>
            <div class="nav-btn"></div>
            <div class="nav-btn"></div>
            <div class="nav-btn"></div>
            <div class="nav-btn"></div>
        </div>



    </section>
    <!-- video card -->
    <div class="video-card-container">
        <div class="video-card">
            <img src="images/mappa.jpg" class="video-card-image" alt="">
            <video src="videos/mappa.mp4" mute loop class="card-video"></video>
        </div>

        <div class="video-card">
            <img src="images/pixar.PNG" class="video-card-image" alt="">
            <video src="videos/pixar.mp4" mute loop class="card-video"></video>
        </div>

        <div class="video-card">
            <img src="images/marvel.PNG" class="video-card-image" alt="">
            <video src="videos/marvel.mp4" mute loop class="card-video"></video>
        </div>

        <div class="video-card">
            <img src="images/star-wars.PNG" class="video-card-image" alt="">
            <video src="videos/star-war.mp4" mute loop class="card-video"></video>
        </div>

        <div class="video-card">
            <img src="images/wb.jpg" class="video-card-image" alt="">
            <video src="videos/wb.mp4" mute loop class="card-video"></video>
        </div>
    </div>

    <!--latest-movies---------------------->
    <section id="latest">
        <h2 class="latest-heading">LATEST MOVIES</h2>
        <!--slider------------------->
        <ul id="autoWidth2" class="cs-hidden">
            <?php
            include 'database.php';
            $sql = "SELECT * FROM movies WHERE latest=1";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {


            ?>

                    <li class="item-a">

                        <div class="card">
                            <div class="poster">
                                <!--img-------->
                                <img src="<?php echo $row["imgpath"]; ?>">
                            </div>
                            <div class="detail">
                                <img src="<?php echo $row["imglogo"]; ?>" class="logo">
                                <h3><span><?php echo $row["genre"]; ?></span></h3>
                                <div class="rating">
                                    <span>IMDB :</span>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <span style="color: white;"><?php echo $row["rating"]; ?></span>
                                </div>
                                <div class="tags">

                                    <!-- <a href="" class="play">PLAY</a> -->
                                    <form action="video.php" method="post">
                                        <input type="hidden" name="hidden" value="<?php echo $row["mid"]; ?>">
                                        <button type="submit" class="play">PLAY</button>
                                    </form>

                                    <form action="session.php" method="post">
                                        <input type="hidden" name="hiddenid" value="<?php echo $row["mid"]; ?>">
                                        <button type="submit" class="list">+LIST</button>
                                        <!-- <a href="#" class="list">+ LIST</a> -->
                                    </form>


                                </div>
                                <div class="info">
                                    <p><?php echo $row["description"]; ?></p>
                                </div>
                                <div class="date">
                                    <h3>RELEASE DATE :<span> <?php echo $row["rdate"]; ?></span></h3>
                                </div>
                                <div class="cast">
                                    <h3>CAST</h3>
                                    <ul>
                                        <li><img src="<?php echo $row["cast"]; ?>"></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

            <?php

                }
            } else {
                echo "0 results";
            }
            ?>
        </ul>
    </section>
    <!-- -----trending --- -->
    <section id="trending">
        <h2 class="trending">TOP TRENDING</h2>
        <!--slider------------------->
        <ul id="autoWidth2" class="cs-hidden">

            <?php
            include 'database.php';
            $sql = "SELECT * FROM movies WHERE trending=1";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {


            ?>

                    <li class="item-a">

                        <div class="card">
                            <div class="poster">
                                <!--img-------->
                                <img src="<?php echo $row["imgpath"]; ?>">
                            </div>
                            <div class="detail">
                                <img src="<?php echo $row["imglogo"]; ?>" class="logo">
                                <h3><span><?php echo $row["genre"]; ?></span></h3>
                                <div class="rating">
                                    <span>IMDB :</span>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <span style="color: white;"><?php echo $row["rating"]; ?></span>
                                </div>
                                <div class="tags">

                                <form action="video.php" method="post">
                                        <input type="hidden" name="hidden" value="<?php echo $row["mid"]; ?>">
                                        <button type="submit" class="play">PLAY</button>
                                    </form>

                                    <form action="session.php" method="post">
                                        <input type="hidden" name="hiddenid" value="<?php echo $row["mid"]; ?>">
                                        <button type="submit" class="list">+LIST</button>
                                        <!-- <a href="#" class="list">+ LIST</a> -->
                                    </form>
                                </div>
                                <div class="info">
                                    <p><?php echo $row["description"]; ?></p>
                                </div>
                                <div class="date">
                                    <h3>RELEASE DATE :<span> <?php echo $row["rdate"]; ?></span></h3>
                                </div>
                                <div class="cast">
                                    <h3>CAST</h3>
                                    <ul>
                                        <li><img src="<?php echo $row["cast"]; ?>"></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

            <?php

                }
            } else {
                echo "0 results";
            }
            ?>

        </ul>
    </section>
    <!-- TODAYS BEST -->
    <section id="todays">
        <h2 class="todays">TODAYS BEST</h2>
        <!--slider------------------->
        <ul id="autoWidth2" class="cs-hidden">

            <?php
            include 'database.php';
            $sql = "SELECT * FROM movies WHERE todaybest=1";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {


            ?>

                    <li class="item-a">

                        <div class="card">
                            <div class="poster">
                                <!--img-------->
                                <img src="<?php echo $row["imgpath"]; ?>">
                            </div>
                            <div class="detail">
                                <img src="<?php echo $row["imglogo"]; ?>" class="logo">
                                <h3><span><?php echo $row["genre"]; ?></span></h3>
                                <div class="rating">
                                    <span>IMDB :</span>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <span style="color: white;"><?php echo $row["rating"]; ?></span>
                                </div>
                                <div class="tags">

                                <form action="video.php" method="post">
                                        <input type="hidden" name="hidden" value="<?php echo $row["mid"]; ?>">
                                        <button type="submit" class="play">PLAY</button>
                                    </form>

                                    <form action="session.php" method="post">
                                        <input type="hidden" name="hiddenid" value="<?php echo $row["mid"]; ?>">
                                        <button type="submit" class="list">+LIST</button>
                                        <!-- <a href="#" class="list">+ LIST</a> -->
                                    </form>
                                </div>
                                <div class="info">
                                    <p><?php echo $row["description"]; ?></p>
                                </div>
                                <div class="date">
                                    <h3>RELEASE DATE :<span> <?php echo $row["rdate"]; ?></span></h3>
                                </div>
                                <div class="cast">
                                    <h3>CAST</h3>
                                    <ul>
                                        <li><img src="<?php echo $row["cast"]; ?>"></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

            <?php

                }
            } else {
                echo "0 results";
            }
            ?>

        </ul>
    </section>

<div class="banner">
   <img src="images/mulan.jpg" class="bg" alt="">
        <div class="content">
            <img src="images/mulan_logo.png" alt="" class="movie-title">
            <h2>Action Movie</h2>
            <h4>
                <span>2023</span>
                <span><i>16+</i></span>
                <span>1h 45min</span>
                <span>Action</span>
            </h4>
            <p>When the Emperor decrees that one man per family must serve in the Imperial Chinese Army, Hua Mulan takes her ailing father's place. Disguised as a man named Hua Jun, she is tested every step of the way. Mulan must harness her innermost strength and embrace her true potential.</p>
        <div class="buttons">
            <a href="https://youtu.be/KK8FHdFluOQ?si=gT-7w9syp1-3FX3Z"><i class="fa fa-play" aria-hidden="true"></i> Play</a>
            <a href="#"><i class="fa fa-plus" aria-hidden="true"></i> My List</a>
            <a href="https://youtu.be/KK8FHdFluOQ?si=gT-7w9syp1-3FX3Z"><i class="fa-regular fa-circle-play" aria-hidden="true"></i> Watch Trailer</a> 
        </div>
    </div>
  </div>

<!-- OSCAR WINNERS -->
<section id="oscar">
        <h2 class="oscar">OSCAR WINNERS</h2>
        <!--slider------------------->
        <ul id="autoWidth2" class="cs-hidden">

            <?php
            include 'database.php';
            $sql = "SELECT * FROM movies WHERE oscar=1";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {


            ?>

                    <li class="item-a">

                        <div class="card">
                            <div class="poster">
                                <!--img-------->
                                <img src="<?php echo $row["imgpath"]; ?>">
                            </div>
                            <div class="detail">
                                <img src="<?php echo $row["imglogo"]; ?>" class="logo">
                                <h3><span><?php echo $row["genre"]; ?></span></h3>
                                <div class="rating">
                                    <span>IMDB :</span>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <span style="color: white;"><?php echo $row["rating"]; ?></span>
                                </div>
                                <div class="tags">

                                <form action="video.php" method="post">
                                        <input type="hidden" name="hidden" value="<?php echo $row["mid"]; ?>">
                                        <button type="submit" class="play">PLAY</button>
                                    </form>

                                    <form action="session.php" method="post">
                                        <input type="hidden" name="hiddenid" value="<?php echo $row["mid"]; ?>">
                                        <button type="submit" class="list">+LIST</button>
                                        <!-- <a href="#" class="list">+ LIST</a> -->
                                    </form>
                                </div>
                                <div class="info">
                                    <p><?php echo $row["description"]; ?></p>
                                </div>
                                <div class="date">
                                    <h3>RELEASE DATE :<span> <?php echo $row["rdate"]; ?></span></h3>
                                </div>
                                <div class="cast">
                                    <h3>CAST</h3>
                                    <ul>
                                        <li><img src="<?php echo $row["cast"]; ?>"></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

            <?php

                }
            } else {
                echo "0 results";
            }
            ?>

        </ul>
    </section>

<div class="video-banner">
 <video src="videos/stranger_video.mp4" muted loop autoplay></video>
  <div class="video-content">
    <img src="images/stranger_logo1.png" class="egro">
    <h3>WARNER BROTHERS</h3>
    <P>
    When a young boy vanishes, a small town uncovers a mystery involving secret experiments, terrifying supernatural forces, and one strange little girl.
    </P>
    <div class="elon">
        <a href="https://youtu.be/dnK2DBjHuoU?si=N-l8-lQi0OQxIXsi" class="watch">PLAY</a>
        <a href="https://youtu.be/dnK2DBjHuoU?si=N-l8-lQi0OQxIXsi" class="video-list">WATCH TRAILER</a>
    </div>
</div>
</div>

    <!--footer------------------->
    <footer class="footer" id="contact">
        <div class="footer__container">
            <div class="footer__col">
                <div class="footer__logo">
                    <a href="#" class="logo">Flixi</a>
                </div>
                <p>
                    Welcome to Flixi, your go-to destination for the latest movies, reviews, trailers, and exclusive
                    film industry insights!
                </p>
                <ul class="footer__links">
                    <li>
                        <a href="#">
                            <span><i class="ri-map-pin-2-fill"></i></span>
                            123 Main Street<br />Sunrise Valley, Evergreen Heights
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span><i class="ri-phone-fill"></i></span>
                            +91 9876543210
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span><i class="ri-mail-fill"></i></span>
                            flixi@gmail.com
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footer__col">
                <h4>GALLERY</h4>
                <div class="gallery__grid">
                    <img src="images/tomcruise.jpg" alt="gallery" />
                    <img src="images/jackie.jpg" alt="gallery" />
                    <img src="images/chris.jpg" alt="gallery" />
                    <img src="images/stallon.jpg" alt="gallery" />
                    <img src="images/johny.jpg" alt="gallery" />
                    <img src="images/keanu.jpg" alt="gallery" />
                </div>
            </div>
            <div class="footer__col">
                <h4>NEWSLETTER</h4>
                <p>
                    Don't miss out on the latest movies - sign up today and
                    join our amazing community!
                </p>
                <form action="/">
                    <input type="text" placeholder="Enter Email" />
                    <button class="btn btn__primary">SEND</button>
                </form>
                <div class="footer__socials">
                    <a href="#"><i class="ri-facebook-fill"></i></a>
                    <a href="#"><i class="ri-twitter-fill"></i></a>
                    <a href="#"><i class="ri-youtube-fill"></i></a>
                </div>
            </div>
        </div>
        <div class="footer__bar">
            Copyright © 2024 Created by <span style ="color:red"> Abhradeep Kar & Shubhrashikhar Basu</span>. All rights reserved.
        </div>
    </footer>




    <script src="home.js" defer data-deferred="1">

    </script>


</body>

</html>