<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee_Shop</title>
    <!-- Link to Google Fonts for 'Oleo Script Swash Caps' and 'Inter' -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Oleo+Script+Swash+Caps:wght@400;700&display=swap" rel="stylesheet">
    <!-- Link to your external stylesheet -->
    <link rel="stylesheet" href="css/styles.css">
    
</head>

<body>

    <section id="hero">
        <!-- Background video with autoplay, loop, and muted -->
        <video autoplay loop muted playsinline class="hero-video">
            <source src="assets/hero-section-video.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <!-- Overlay for better text readability -->
        <div class="video-overlay"></div>

        <!-- Navigation Bar -->
        <nav class="navbar">
            <div class="hamburger" id="hamburger">
                &#9776; <!-- Unicode for hamburger icon -->
            </div>

            <div class="nav-logo">
                <img src="assets/logo.png" alt="">
                <a href="#">Brew Haven</a>
            </div>

            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Menu</a></li>
                <li><a href="#">Staff</a></li>
                <li><a href="#">Contact</a></li>
            </ul>

            <div class="nav-actions">
                <button class="btn btn-primary">Login</button>
            </div>
        </nav>

        <!-- Sidebar menu -->
        <div class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <img src="assets/logo.png" alt="Logo">
                <h2>Brew Haven</h2>
            </div>
            <ul class="sidebar-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Menu</a></li>
                <li><a href="#">Staff</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <div class="sidebar-overlay" id="sidebarOverlay"></div>

        <!-- Hero Content -->
        <div class="hero-content">
            <h1 class="brand-name">Caffeine Canvas</h1>
            <p class="tagline">Where Every Sip Tells a Story, and Every Visit Brews a Memory.</p>
            <button class="btn btn-secondary">View Menu</button>
            <div class="info-badges">
                <div class="info-item">
                    <img src="assets/testimonials.png" alt="Testimonials Icon" class="info-icon">
                    <span>1,200+ Testimonials</span>
                </div>
                <div class="info-item">
                    <img src="assets/star.png" alt="Star Rating Icon" class="info-icon">
                    <span>4.8 Star Ratings</span>
                </div>
            </div>
        </div>
    </section>


    <!-- About Us Section -->
    <section id="about-us">
        <div class="about-us-container">
            <div class="about-left">
                <img src="assets/about.webp" alt="Woman drinking coffee" class="about-image">
                <div class="service-info-card">
                    <h3>Our Hours & Location</h3>
                    <hr>
                    <p><strong>Open Daily:</strong></p>
                    <p>Weekdays: 7:00 AM - 9:00 PM</p>
                    <p>Weekends: 8:00 AM - 10:00 PM</p>
                    <p class="location-text">
                        123 Brew Avenue, Coffeeville, CA 90210
                        <br>
                        (555) 123-4567
                    </p>
                </div>
            </div>
            <div class="about-right">
                <h3 class="about-sub-title">About Us</h3>
                <h2 class="about-main-title">Crafting Moments, One Brew at a Time</h2>
                <p class="about-description">
                    At Caffeine Canvas, our journey began with a simple passion: to create a space where the aroma of freshly roasted beans meets the warmth of genuine connection. Founded in 2023 by a team of dedicated coffee enthusiasts, we set out to transcend the ordinary coffee experience, offering not just exceptional beverages but a haven for creativity, conversation, and quiet contemplation.
                </p>
                <p class="about-description">
                    Our mission is to ethically source the finest beans from around the globe, master the art of every pour, and serve each cup with a commitment to quality and community. We believe in the power of a perfect brew to inspire, comfort, and bring people together. Every cup we serve is a testament to our dedication to craftsmanship and our desire to make your day a little brighter, one sip at a time.
                </p>
                <button class="btn btn-secondary">Read More</button>
            </div>
        </div>
    </section>

<script src="js/script.js"></script>
</body>

</html>