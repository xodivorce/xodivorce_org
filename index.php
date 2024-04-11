<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>xodivorce_org</title>
</head>
<body>
    <header>
        <button onclick="window.location.href='index.php'"><span class="box">XODIVORCE</span></button>
        <nav class="navigation">
            <a href="index.php">Home</a>
            <a href="dashboard.php">Dashboard</a>
            <a href="about-us.php">About us</a>
            <button class="btnLogin-popup" onclick="window.location.href='singin-up.php'">Sign In</button>
        </nav>
    </header>
    <section class="showcase">
        <video src="assets/video/hats.mp4" muted loop autoplay></video>
        <div class="overlay"></div>
        <div class="text">
            <h2>Connect Your Code to the World</h2>
            <p>Join us in decoding the future of technology and shaping tomorrow's digital landscape.</p>
            <a href="about-us.php">Start Coding Your Future</a>
        </div>
        <ul class="social">
            <li><a href="https://www.facebook.com/xodivorce.1"><img src="https://i.ibb.co/x7P24fL/facebook.png" alt="Facebook"></a></li>
            <li><a href="https://twitter.com/xodivorce1"><img src="https://i.ibb.co/Wnxq2Nq/twitter.png" alt="Twitter"></a></li>
            <li><a href="https://www.instagram.com/the_prasid"><img src="https://i.ibb.co/ySwtH4B/instagram.png" alt="Instagram"></a></li>
        </ul>
    </section>
    <div class="menu">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">News</a></li>
            <li><a href="#">Destination</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div>
    <div class="preloader">
        <div class="loader">
            <svg viewBox="0 0 80 80">
                <circle id="test" cx="40" cy="40" r="32"></circle>
            </svg>
        </div>
        <div class="loader triangle">
            <svg viewBox="0 0 86 80">
                <polygon points="43 8 79 72 7 72"></polygon>
            </svg>
        </div>
        <div class="loader">
            <svg viewBox="0 0 80 80">
                <rect x="8" y="8" width="64" height="64"></rect>
            </svg>
        </div>
    </div>
    <script type="text/javascript" src="js/index.js"></script>
</body>
</html>
