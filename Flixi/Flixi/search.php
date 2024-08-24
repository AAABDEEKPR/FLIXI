<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="search.css">
    <script src="JQuery3.3.1.js"></script>
    <!-- font link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
</head>

<body>




    <nav>

        <a href="#" class="logo">Flixi</a>

        <!--menu--btn----------------->
        <input type="checkbox" class="menu-btn" id="menu-btn" />
        <label class="menu-icon" for="menu-btn">
            <span class="nav-icon"></span>
        </label>
        <!--menu-------------->
        <ul class="menu">
            <li><a href="home.php">HOME</a></li>
            <li><a href="login.html">PROFILE</a></li>
            <li><a href="all.php">ALL MOVIES</a></li>
            <li><a href="about.html">ABOUT US</a></li>
            <li><a href="watchlist.php">MY LIST</a></li>
        </ul>
        <!--search------------->
        <div class="search">
            <form action="search.php" method="GET">
                <input type="text" name="query" placeholder="Find Your Favourtie Movies" />
                <!--search-icon----------->
                <i class="fas fa-search"></i>
            </form>
        </div>
    </nav>

    <!-- movies start -->
    <div class="movies-heading">
        <h2 class="latest-heading">Search Result</h2>
    </div>
    <section id="movies-list">

        <?php
        include 'database.php';  // Include your database connection file

        if (isset($_GET['query'])) {
            $search = $conn->real_escape_string($_GET['query']);  // Sanitize input

            // Query to search for movies based on movie name (replace with your actual column name)
            $sql = "SELECT * FROM movies WHERE name LIKE '%$search%'";

            $result = $conn->query($sql);

            // Check if query executed successfully
            if (!$result) {
                die("Query failed: " . $conn->error);
            }

            // Check if any rows were returned
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {  ?>


                                <div class="card">
                                    <div class="poster">

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
                                            <p> <?php echo $row["description"]; ?> </p>
                                        </div>
                                        <div class="date">
                                            <h3>RELEASE DATE :<span> <?php echo $row["rdate"]; ?></span></h3>
                                        </div>
                                        <div class="cast">
                                            <h3>CAST</h3>
                                            <ul>
                                                <li><img src="images/<?php echo $row["cast"]; ?>"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                         <?php
                }
            } else {
                // Redirect to 404.php when no results are found
                http_response_code(404);  // Set HTTP response code to 404
                header("Location: 404.php");  // Redirect to 404.php
                exit();  // Ensure that further script execution stops
            }
        }
        ?>
                    </section>

       

    




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
                            abhradeep@gmail.com
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
            Copyright © 2024 Web Design Mastery. All rights reserved.
        </div>
    </footer>




    <script src="home.js" defer data-deferred="1">

    </script>


</body>

</html>