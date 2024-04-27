<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title> 
    <link rel="stylesheet" href="css/event.css"> 
</head>
<body>
    <header>
        <nav class="navigation fixed">
            <a href="index.php">Home</a>
            <a href="dashboard.php">Dashboard</a>
            <a href="about-us.php">About us</a>
            <button class="btnLogin-popup" onclick="window.location.href='signin-up.php'">Sign in</button>
        </nav>
    </header>
    <main>
        <section id="hero" class="section">
            <div class="container">
                <h1>Explore Our Exciting Events</h1>
                <p>Explore the mundane occurrences at Xodivorce Educational Institute, where excitement goes to die. Our events are so thrilling that you'll forget what boredom even feels like.</p>
            </div>
        </section>
        <section id="featured-events" class="section">
            <div class="container">
                <h2>Featured Events</h2>
                <div class="event-grid">
                    <div class="event-card">
                        <img src="assets/images/university.png" alt="Event Title 1"> 
                        <h3>Xodivorce Open Campus Experience: Explore, Learn, Grow</h3>
                        <p class="date">October 13, 2023</p>
                        <p class="description">We're excited to invite applications for the Open Campus programme at Xodivorce Educational Institute. Our doors are open to individuals from diverse backgrounds and interests, offering a range of flexible learning options to suit your needs. With experienced faculty, top-notch facilities, and a vibrant campus atmosphere, Xodivorce provides an enriching educational experience like no other. Don't miss this opportunity to shape your future with us. Apply now and embark on a journey of growth and achievement.</p>
                        <button class="btn-secondary" onclick="window.location.href='singin-up.php'">Learn More</button>
                    </div>
                    <div class="event-card">
                        <img src="assets/images/chares.png" alt="College Fest"> 
                        <h3>Xodivorce Educational Institute'sFest 2024: Celebrate the Spirit of Youth</h3>
                        <p class="date">January 19-21, 2024</p>
                        <p class="description">Join us for the most awaited event of the year - Xodivorce College Fest 2024! Get ready for three days of non-stop fun, excitement, and entertainment. Experience thrilling performances, engaging competitions, mouth-watering food stalls, and much more. It's the perfect opportunity to unleash your talents, make new friends, and create unforgettable memories. Only students with College-id can be attend the "XEI Fest 2024" . Don't miss out on the excitement - mark your calendars now!</p>
                        <button class="btn-secondary" onclick="window.location.href='singin-up.php'">Learn More</button>
                    </div>
                </div>
            </div>
        </section>
    </main>
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
    <script src="js/event.js"></script> 
</body>
</html>
