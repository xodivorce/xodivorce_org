<!DOCTYPE html>
<html lang="en">
<head>
  <title>REGISTER</title>
  <link rel="stylesheet" href="register.css">
  <link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="icon" type="image/png" href="assets/images/insta.png">
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script src="scripts.js"></script>
</head>
<body>
    <header>
        <h2 class="xodivorce">Xodivorce</h2>
         <nav class="navigation">
            <a href="index.php">Home</a>
            <a href="#">Dashboard</a>
            <a href="#">About us</a>
            <button class="btnLogin-popup" onclick="window.location.href='login.php'">Login</button>
        </nav>
    </header>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="">
                    <h2>Register</h2>
                    <div class="inputbox">
                        <ion-icon name= "person-outline" ></ion-icon>
                        <input type="username" required>
                        <label for="">Username</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" required>
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" required>
                        <label for="">Password</label>
                    </div>
                    <div class="terms_conditions">
                        <label for="terms_conditions"><input type="checkbox" id="terms_conditions"> I have read and agree the <a href="terms-of-service.php" onclick="showTerms()">terms & conditions</a></label>
                    </div>
                    <button>Register</button>
                    <div class="register">
                        <p>Already have an account? <a href="login.php">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="route.js"></script>
</body>
</html>
