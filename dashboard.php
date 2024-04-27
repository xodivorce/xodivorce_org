<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js" integrity="sha512-u3fPA7V8qQmhBPNT5quvaXVa1mnnLSXUep5PS1qo5NRzHwG19aHmNJnj1Q8hpA/nBWZtZD4r4AX6YOt5ynLN2g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="css/dashboard.css" />
</head>
<body>
    <header>
      <nav class="navigation">
        <a href="index.php">Home</a>
        <a href="dashboard.php">Dashboard</a>
        <a href="about-us.php">About us</a>
        <button class="btnLogin-popup" onclick="window.location.href='signin-up.php'">Sing in</button>
      </nav>
    </header>
    <div class="container">
        <div class="row">
            <div class="numStat">
                <div><span><i class="fa-solid fa-user-graduate"></i></span><p>Students</p></div>
                <h3>15063</h3>
            </div>
            <div class="numStat">
                <div><span><i class="fa-solid fa-user-tie"></i></span><p>Faculty</p></div>
                <h3>107</h3>
            </div>
            <div class="numStat">
                <div><span><i class="fa-solid fa-book"></i></span><p>Subjects</p></div>
                <h3>25</h3>
            </div>
            <div class="numStat">
                <div><span><i class="fa-solid fa-sack-dollar"></i></span><p>Expences</p></div>
                <h3>$ 57037</h3>
            </div>
        </div>
        <div class="row">
            <div class="mainContorls"></div>
            <div class="mainContorls"></div>
        </div>
    </div>
</body>
</html>