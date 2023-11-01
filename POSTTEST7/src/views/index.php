<?php
    require "../actions/db_connect.php";

    $result = mysqli_query($conn, "SELECT * FROM film");
    $film = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $film[] = $row;
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>yoeka's cinema</title>
  <link rel="stylesheet" media="screen and (min-width: 320px)" href="../styles/mobilep2.css">
</head>

<body onload ="startTime()">
  <nav>
    <div class="top-nav">
      <div class="logo">
        <img src="../assets/logoBioskop.png" alt="#">
      </div>
      <div class="nav-items" id="nav-items">
      <h2>Real Time:</h2>
      <div id="Time"></div>
        <a href="#">Home</a>
        <a href="aboutme.php">About</a>
        <a href="#">Now Playing</a>
        <a onclick="alert('Coming Soon!')">Upcoming</a>
        <div>
          <div class="sm-btn" id="sm-btn">
            <!-- <button onclick > Show More</button> -->
            <a href = "../views/login.php" >Show More</a>
            <img src="../assets/sun.png" id="icon">
            <!-- <div class="popuptext" id="myPopup">There's Nothing To Find Yet</div> -->
          <!-- </div> -->
        </div>
      </div>
  </nav>
  <section class="hero" id="hero">
    <img src="../assets/bgheroo.png" alt="#">
    <div class="hero-title">
      <h1>Your Favorite Cinema</h1>
      <p>YOEKA'S CINEMA</p>
    </div>
  </section>

  <div class="content-wrapper" id="content-wrapper">
    <div class="content-title">
      <h1>Most Waited Movies COMING SOON!</h1>
      <p> --Tap the content to watch the trailer!--</p>
    </div>
    <div class="film-content">
    <?php foreach ($film as $fm) : ?>
    <div class="content" onclick="playVideo('<?php echo $fm['trailer']; ?>')">
      <div class="content-img">
        <img src="../assets/<?php echo $fm['gambar']; ?>" alt="#" />
      </div>
        <h2 class="film-title"><?php echo $fm['judul_film']; ?></h2>
        <h3><?php echo $fm['tgl_rilis']; ?></h3>
      </div>
    <?php endforeach; ?>
    <div class="content" onclick="playVideo('gBocyMFO-rU')">
        <div class="content-img">
          <img src="../assets/film1.jpg" alt="#" />
        </div>
        <h2 class="film-title">Haikyu Final Movie</h2>-
        <h3>February 16, 2024</h3>
      </div>
      <div class="content" onclick="playVideo('NxW_X4kzeus')">
        <div class="content-img">
          <img src="../assets/film2.jpg" alt="#" />
        </div>
        <h2 class="film-title">The Hunger Games: The Ballad of Songbirds and Snakes</h2>
        <h3>November 17, 2023</h3>
      </div>
      <div class="content" onclick="playVideo('FV3bqvOHRQo')">
        <div class="content-img">
          <img src="../assets/film3.jpg" alt="#" />
        </div>
        <h2 class="film-title">Aquaman and the Lost Kingdom</h2>
        <h3>December 20, 2023</h3>
      </div>
      <footer>
        <p>©yoeka's cinema</p>
      </footer>
      <script src="../scripts/script.js"></script>
</body>

</html>