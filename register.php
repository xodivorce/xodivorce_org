<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="register.css">
  <link rel="stylesheet" href="terms-of-service.css"> <!-- Add this line to include the terms of service styles -->
  <link rel="icon" type="image/png" href="assets/images/insta.png">
  <script src="scripts.js"></script>
  <title>REGISTER</title>
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
                        <!-- Change the href to point to the terms of service section -->
                        <label for="terms_conditions"><input type="checkbox" id="terms_conditions"> I have read and agree the <a href="#" onclick="showTerms()">terms & conditions</a></label>
                    </div>
                    <button>Register</button>
                    <div class="register">
                        <p>Already have an account? <a href="login.php">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
        <!-- Container for terms of service section -->
        <div id="terms-of-service" class="terms-box" style="display: none;">
            <div class="terms-text">
                <h2>Terms of Service</h2>
                <p>Last Edit: 20/03/2024</p>
                <p>Greetings Users,</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
            <h4>I Agree to the <span> Terms of Service</span> and I read the Privacy and Notice.</h4>
            <div class="buttonts">
                <button class="btn red-btn" onclick="acceptTerms()">Accept</button>
                <button class="btn gray-btn" onclick="declineTerms()">Decline</button>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
        function showTerms() {
            document.getElementById('terms-of-service').style.display = 'block'; // Show terms of service section
        }

        function acceptTerms() {
            document.getElementById('terms_conditions').checked = true; // Check the checkbox
            document.getElementById('terms-of-service').style.display = 'none'; // Hide terms of service section
        }
        
        function declineTerms() {
            document.getElementById('terms_conditions').checked = false; // Uncheck the checkbox
            document.getElementById('terms-of-service').style.display = 'none'; // Hide terms of service section
        }
    </script>
</body>
</html>
