<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/singin-up.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <header>
      <nav class="navigation">
        <a href="index.php">Home</a>
        <a href="#">Dashboard</a>
        <a href="about-us.php">About us</a>
        <button class="btnLogin-popup" onclick="window.location.href='singin-up.php'">Sing in</button>
      </nav>
    </header>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="#" class="sign-in-form">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" />
            </div>
            <input type="submit" value="Login" class="btn solid" />
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <form action="#" class="sign-up-form">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" />
            </div>
            <input type="submit" class="btn" value="Sign up" />
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>XODIVORCE EDUCATIONAL INSTUTUTE</h3>
            <p>
             Welcome to Xodivorce Educatinal Institute website page.. Complete your Sign Up to website access 
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>XODIVORCE EDUCATIONAL INSTUTUTE</h3>
            <p>
              Welcome to Xodivorce Educatinal Institute website page.. Complete your Sign In to website access
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
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

     <script type="text/javascript" src="js/singin-up.js"></script>

  </body>
</html>
