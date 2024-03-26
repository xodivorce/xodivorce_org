<!DOCTYPE html>
<html lang="en">
<head>
  <title>REGISTER</title>
  <link rel="stylesheet" href="css/register.css">
  <link rel="stylesheet" type="text/css" href="css/terms-of-service.css">
  <link rel="icon" type="image/png" href="assets/images/insta.png">
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
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
                        <label for="terms_conditions"><input type="checkbox" id="terms_conditions"> I have read and agree the <strong>Terms & Conditions</strong></label>
                    </div>
                    <button>Register</button>
                    <div class="register">
                        <p>Already have an account? <a href="login.php">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <div id="terms_wrapper" class="wrapper">
  <div class="terms_service">
      <div class="tc_item tc_head flex_align_justify">
        <div class="icon flex_align_justify">
          <ion-icon name="shield-half-outline"></ion-icon>
        </div>
        <div class="text">
          <h2>TERMS OF SERVICE</h2>
          <p>Last updated on October 13, 2023</p>
        </div>
      </div>
      <div class="tc_item tc_body">
        <ol>
          <li>
            <h3>Terms of use</h3>
            <p>By accessing and using this website, you agree to abide by these terms and conditions. If you do not agree with any of these terms, you are prohibited from using or accessing this site.</p>
          </li>
          <li>
            <h3>Intellectual property rights</h3>
            <p>All materials, including but not limited to text, graphics, logos, images, and software, provided on this website are owned or licensed by the university and are protected by intellectual property laws.</p>
          </li>
          <li>
            <h3>Prohibited activities</h3>
            <p>Users are prohibited from engaging in any unlawful, abusive, or harmful activities on this website. This includes but is not limited to spamming, hacking, distributing malware, or violating the privacy of others.</p>
          </li>
          <li>
            <h3>Termination clause</h3>
            <p>The university reserves the right to terminate or suspend access to the website at any time without prior notice for any reason, including but not limited to violation of these terms of service.</p>
          </li>
          <li>
            <h3>Governing law</h3>
            <p>These terms of service shall be governed by and construed in accordance with the laws of the jurisdiction in which the university is located, without regard to its conflict of law provisions.</p>
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
    <script type="text/javascript" src="js/check-terms.js"></script>
</body>
</html>
