
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="all.css">
        <script src="JQuery3.3.1.js"></script>
        <!-- font link -->
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
            integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
<link
         href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css"
         rel="stylesheet"/>
        <script src="https://kit.fontawesome.com/c8e4d183c2.js"
            crossorigin="anonymous"></script>
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
                <li><a href="all.html">ALL MOVIES</a></li>
                <li><a href="about.html">ABOUT US</a></li>
                <li><a href="watchlist.html">MY LIST</a></li>
            </ul>
            <!--search------------->
            <div class="search">
                <input type="text" placeholder="Find Your Favourtie Movies" />
                <!--search-icon----------->
                <i class="fas fa-search"></i>
            </div>
        </nav>

        <?php
include 'database.php';
// process.php
$mid = $_POST['hidden']; // Get the value from the submitted form

echo "Movie Id, $mid!";

$sql = "SELECT * FROM movies WHERE mid=$mid";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {   


?>

        <div class="movies-heading">
            <h2 class="latest-heading"><?php echo $row["name"];?></h2>
        </div>
        <section id="movies-list">

        <?php echo $row["videopath"];?>
            
        
 </section>
 <?php 
   
}
} else {
echo "0 results";
}
?>

<!-- ----footer---- -->

  <footer class="footer" id="contact">
    <div class="footer__container">
      <div class="footer__col">
        <div class="footer__logo">
          <a href="#" class="logo">Flixi</a>
        </div>
        <p>
          Welcome to Flixi, your go-to destination for the latest movies, reviews, trailers, and exclusive film industry insights!
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
      Copyright © 2024 AK. All rights reserved.
    </div>
  </footer>
    </body>
</html>





           
  