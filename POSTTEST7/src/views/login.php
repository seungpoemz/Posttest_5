<?php 
session_start();
require "../actions/db_connect.php";


if (isset($_POST["submit"])){
    $username =strtolower( $_POST["username"] );
    $pass = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM signup WHERE username = '$username'");

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($pass, $row["password"])) {
            $_SESSION ['submit'] = true;

            header ("Location: dashboard.php");
            exit;
        }
    }
    $error = true;
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="../styles/mobilep2.css">
</head>

<body>
<nav>
    <div class="top-nav">
      <div class="logo">
        <img src="../assets/logoBioskop.png" alt="#">
      </div>
          <div class="sm-btn" id="sm-btn">
            <img src="../assets/sun.png" id="icon">
        </div>
      </div>
  </nav>
  
    <section class ="login" id="login">
        <div class="form">
            <div class="box form-box">
                <header>Sign In</header>
                <h4>To See More</h4>
                <?php 
                if (isset($error)) {
                    echo "<p style ='color:red;'>Username/Password Invalid!</p>";
                }
                ?>
                    <form action="" method="post">
                    <!-- <form id="loginForm" action="dashboard.php" method="post" onsubmit="authenticateUser(event)"> -->
                    <div class="field input">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" autocomplete="off" required >
                    </div>
                    <div class="field input">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password"  autocomplete="off" required>
                    </div>
                    <div class="field input">
                        <input type="checkbox" name="setuju" id="setuju" value="setuju" required >
                        Saya Setuju dengan Syarat dan Ketentuan
                    </div>
                    <div class="field">
                        <input type="submit" class="btn" name="submit" value="Login">
                    </div>
                    <div class="links">
                        Dont have account? <a href="signUp.php">Sign Up Now</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script src="../scripts/script.js"></script>
</body>
</html>
