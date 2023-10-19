<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="mobilep2.css">
</head>

<body>
<nav>
    <div class="top-nav">
      <div class="logo">
        <img src="logoBioskop.png" alt="#">
      </div>
          <div class="sm-btn" id="sm-btn">
            <img src="sun.png" id="icon">
        </div>
      </div>
  </nav>

    <section class ="sign-up" id="sign-up">
        <div class="form">
            <div class="box form-box">
                <header>Sign Up</header>
                <form action="hasil.php" method="post">
                    <div class="field input">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" required>
                    </div>
                    <div class="field input">
                        <label for="umur">Umur</label>
                        <input type="number" name="umur" id="umur" required min="17">  
                    </div>
                    <div class="field input">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" required>
                    </div>
                    <div class="field input">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" required>
                    </div>
                    <div class="field input">
                        <input type="checkbox" name="setuju" id="setuju" value="setuju" required >
                        Saya Setuju dengan Syarat dan Ketentuan
                    </div>
                    <div class="field">
                        <input type="submit" class="btn" name="submit" value="Submit">
                    </div>
                    <div class="links">
                        Already have an account? <a href="Login.php">Sign In Now</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script src="script.js"></script>
</body>
</html>
