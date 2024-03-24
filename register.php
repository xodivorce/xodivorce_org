<!DOCTYPE html>
<html lang="en">
<head>
  <title>REGISTER</title>
  <link rel="stylesheet" href="register.css">
  <link rel="stylesheet" href="terms-of-service.css">
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
                        <label for="terms_conditions"><input type="checkbox" id="terms_conditions" onclick="showTerms()"> I have read and agree the <a href="#" onclick="showTerms()">terms & conditions</a></label>
                    </div>
                    <button>Register</button>
                    <div class="register">
                        <p>Already have an account? <a href="login.php">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>

<div class="wrapper flex_align_justify" id="terms-of-service" style="display:none;">
  <div class="terms_service">
      <div class="tc_item tc_head flex_align_justify">
        <div class="icon flex_align_justify">
          <ion-icon name="terminal-outline"></ion-icon>
        </div>
        <div class="text">
          <h2>TERMS OF SERVICE</h2>
          <p>Last updated on September 12 2022</p>
        </div>
      </div>
      <div class="tc_item tc_body">
        <ol>
          <li>
            <h3>Terms of use</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, quidem doloribus cumque vero, culpa voluptates dolorum reprehenderit nihil nisi odit necessitatibus voluptate voluptatibus magni ducimus sed accusamus illo nobis veniam.</p>
          </li>
          <li>
            <h3>Intellectual property rights</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, quidem doloribus cumque vero, culpa voluptates dolorum reprehenderit nihil nisi odit necessitatibus voluptate voluptatibus magni ducimus sed accusamus illo nobis veniam.</p>
          </li>
          <li>
            <h3>Prohibited activities</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, quidem doloribus cumque vero, culpa voluptates dolorum reprehenderit nihil nisi odit necessitatibus voluptate voluptatibus magni ducimus sed accusamus illo nobis veniam.</p>
          </li>
          <li>
            <h3>Termination clause</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, quidem doloribus cumque vero, culpa voluptates dolorum reprehenderit nihil nisi odit necessitatibus voluptate voluptatibus magni ducimus sed accusamus illo nobis veniam.</p>
          </li>
          <li>
            <h3>Governing law</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, quidem doloribus cumque vero, culpa voluptates dolorum reprehenderit nihil nisi odit necessitatibus voluptate voluptatibus magni ducimus sed accusamus illo nobis veniam.</p>
          </li>
        </ol>
      </div>
      <div class="tc_item tc_foot flex_align">
          <button class="decline_btn" onclick="declineTerms()">Decline</button>
          <button class="accept_btn" onclick="acceptTerms()">Accept</button>
      </div>
  </div>
</div>

    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
        function showTerms() {
            document.getElementById('terms-of-service').style.display = 'block'; 
        }

        function acceptTerms() {
            document.getElementById('terms_conditions').checked = true;
            document.getElementById('terms-of-service').style.display = 'none';
        }
        
        function declineTerms() {
            document.getElementById('terms_conditions').checked = false; 
            document.getElementById('terms-of-service').style.display = 'none';
        }
    </script>
</body>
</html>
