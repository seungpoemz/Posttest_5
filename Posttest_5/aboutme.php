<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" media="screen and (min-width: 600px)" href="posttest2.css">
    <link rel="stylesheet" media="screen and (max-width: 599px)" href="mobilep2.css">
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            margin-top: 20px;
        }

        nav {
            width: 99%;
            background-color: #333;
            color: white;
            padding: 10px;
        }

        .logo img {
            max-width: 100%;
        }

        .about {
            width: 97%;
            padding: 20px;
        }

        footer {
            width: 100%;
            background-color: #be9e44;
            color: #1a1a1a;
            text-align: center;
            padding: 5px;
        }

        #btn {
            background-color: #be9e44;
            color: #1a1a1a;
            padding: 5px;
            border-radius: 10px;

        }

        .btn:hover {
            background-color: #be9e44;
            color: #1a1a1a;
            border: #CBB26A;
        }
    </style>
</head>

<body>
    <nav>
        <div class="logo">
            <img src="logoBioskop.png" alt="#">
        </div>
    </nav>
    <div class="about">
        <h2>About Us</h2>
        <p>Greetings! My Name is Antonieta Aryuka Paskalia Nggotu (2209106051)</p>
        <p>Welcome to Yoeka's Cinema where cinema comes to life!</p>
        <p>At Yoeka's Cinema, we're passionate about movies. Our mission is simple: to celebrate cinema and create a
            community for film lovers.</p>
    </div>
</body>
<footer>
    <p>©yoeka's cinema</p>
    <p id="cp"> follow <a href="https://www.instagram.com/aryukaapn/" target="_blank" id="sosmed"><i
                class="fa-brands fa-instagram"></i>
            aryukaapn</a> on instagram! </p>
    <input type="button" id="btn" value="Hide" onclick="document.getElementById('cp').style.visibility='hidden'">
    <input type="button" id="btn" value="Show" onclick="document.getElementById('cp').style.visibility='visible'">
</footer>

</html>