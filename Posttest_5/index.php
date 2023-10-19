<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>yoeka's cinema</title>
  <link rel="stylesheet" media="screen and (min-width: 320px)" href="mobilep2.css">
</head>

<body>
  <nav>
    <div class="top-nav">
      <div class="logo">
        <img src="logoBioskop.png" alt="#">
      </div>
      <div class="nav-items" id="nav-items">
        <a href="#">Home</a>
        <a href="aboutme.php">About</a>
        <a href="#">Now Playing</a>
        <a onclick="alert('Coming Soon!')">Upcoming</a>
        <div>
          <div class="sm-btn" id="sm-btn">
            <!-- <button onclick > Show More</button> -->
            <a href = "login.php" >Show More</a>
            <img src="sun.png" id="icon">
            <!-- <div class="popuptext" id="myPopup">There's Nothing To Find Yet</div> -->
          <!-- </div> -->
        </div>
      </div>
  </nav>
  <section class="hero" id="hero">
    <img src="bgheroo.png" alt="#">
    <div class="hero-title">
      <h1>Your Favorite Cinema</h1>
      <p>YOEKA'S CINEMA</p>
    </div>
  </section>

  <div class="content" id="content">
    <div class="content-title">
      <h1>Most Waited Movies COMING SOON!</h1>
    </div>
    <div class="film-content">
      <div class="content">
        <div class="content-img">
          <img src="film1.jpg" alt="#" />
        </div>
        <h2 class="film-title">Haikyu Final Movie</h2>
        <h3>February 16, 2024</h3>
      </div>
      <div class="content">
        <div class="content-img">
          <img src="film2.jpg" alt="#" />
        </div>
        <h2 class="film-title">The Hunger Games: The Ballad of Songbirds and Snakes</h2>
        <h3>November 17, 2023</h3>
      </div>
      <div class="content">
        <div class="content-img">
          <img src="film3.jpg" alt="#" />
        </div>
        <h2 class="film-title">Aquaman and the Lost Kingdom</h2>
        <h3>December 20, 2023</h3>
      </div>
      <!-- <div class="info" id="info">
        <h2>Funfact!</h2>
        <p id="info-content"></p>
        <button id="close-info">Close</button>
      </div> -->
      <!-- <button class="btn">More</button> -->
      <footer>
        <p>©yoeka's cinema</p>
      </footer>
      <script src="script.js"></script>
</body>

</html>