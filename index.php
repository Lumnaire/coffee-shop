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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
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

            <div class="logo-hambuger-container">
                <div class="nav-logo">

                    <a href="index.php"> <img src="assets/logo.png" alt="">Brew Haven</a>
                </div>
                <div class="hamburger" id="hamburger">
                    &#9776;
                </div>
            </div>

            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="staff.php">Staff</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>

            <div class="nav-actions">
                <a href="login.php"><button class="btn buy-btn">Login</button></a>
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
                <a href="about.php"> <button class="btn btn-secondary">Read More</button></a>
            </div>
        </div>
    </section>

    <!-- Menu Section -->

    <section id="menu-section" class="menu-section">
        <h2 class="section-title">Our Menu</h2>
        <p class="section-description">Explore our handpicked cold coffee creations, each crafted for refreshment and delight.</p>

        <div class="swiper">
            <div class="swiper-wrapper">
                <!-- Repeat for 8 items -->
                <div class="swiper-slide">
                    <div class="menu-card">
                        <img src="assets/menu/almond-frappe.webp" alt="Cappuccino">
                        <h3>Almond Frappe</h3>
                        <small>Deliciously nutty, refreshingly cold</small>
                        <p class="price">₱150</p>

                        <button class="btn buy-btn">Buy</button>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="menu-card">
                        <img src="assets/menu/caramel-frappe.webp" alt="Iced Latte">
                        <h3>Caramel Frappe</h3>
                        <small>Ice cold, with smooth caramel</small>
                        <p class="price">₱165</p>
                        <button class="btn buy-btn">Buy</button>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="menu-card">
                        <img src="assets/menu/coffee-banana-milkshake.webp" alt="Iced Latte">
                        <h3>Coffee Banana Milkshake</h3>
                        <small>An ice-cold, sweet treat</small>
                        <p class="price">₱165</p>
                        <button class="btn buy-btn">Buy</button>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="menu-card">
                        <img src="assets/menu/coffee-slushie.webp" alt="Iced Latte">
                        <h3>Coffee Slushie</h3>
                        <small>The coolest iced coffee you'll ever try</small>
                        <p class="price">₱165</p>
                        <button class="btn buy-btn">Buy</button>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="menu-card">
                        <img src="assets/menu/coffee-smoothie.webp" alt="Iced Latte">
                        <h3>Coffee Smoothie</h3>
                        <small>A smooth start to the day</small>
                        <p class="price">₱165</p>
                        <button class="btn buy-btn">Buy</button>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="menu-card">
                        <img src="assets/menu/dalgona-coffee.webp" alt="Iced Latte">
                        <h3>Dalgona Coffee</h3>
                        <small>Creamy and tasty</small>
                        <p class="price">₱165</p>
                        <button class="btn buy-btn">Buy</button>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="menu-card">
                        <img src="assets/menu/iced-caramel-latte-macchiato.webp" alt="Iced Latte">
                        <h3>Caramel Latte Macchiato</h3>
                        <small>A swirl of caramel</small>
                        <p class="price">₱165</p>
                        <button class="btn buy-btn">Buy</button>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="menu-card">
                        <img src="assets/menu/iced-coconut-latte.webp" alt="Iced Latte">
                        <h3>Iced Coconut Latte</h3>
                        <small>Rich, balanced, and ice-cold</small>
                        <p class="price">₱165</p>
                        <button class="btn buy-btn">Buy</button>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="menu-card">
                        <img src="assets/menu/iced-vanilla-latte.webp" alt="Iced Latte">
                        <h3>Iced Vanilla Latte</h3>
                        <small>A creamy vanilla latte - served cold</small>
                        <p class="price">₱165</p>
                        <button class="btn buy-btn">Buy</button>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="menu-card">
                        <img src="assets/menu/mocha-iced-coffee.webp" alt="Iced Latte">
                        <h3>Mocha Iced Coffee</h3>
                        <small>Refreshingly cold and chocolatey</small>
                        <p class="price">₱165</p>
                        <button class="btn buy-btn">Buy</button>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="menu-card">
                        <img src="assets/menu/sparkling-iced-coffee.webp" alt="Iced Latte">
                        <h3>Sparkling Iced Coffee</h3>
                        <small>Let your NESCAFE sparkle</small>
                        <p class="price">₱165</p>
                        <button class="btn buy-btn">Buy</button>
                    </div>
                </div>
                <!-- Add more cards as needed -->
            </div>
            <div class="swiper-pagination"></div>
        </div>

        <div class="view-all-container">
            <a href="menu.php"> <button class="btn btn-secondary">View All Products</button></a>
        </div>
    </section>

    <!-- Best Seller Section -->
    <section class="best-seller-section">
        <div class="best-seller-container">
            <div class="best-seller-image">
                <img src="assets/menu/iced-coffee-ice-cream.jpg" alt="Iced Coffee Ice Cream">
                <span class="best-seller-tag">All-Time Favorite</span>
            </div>
            <div class="best-seller-details">
                <h2>Iced Coffee Ice Cream</h2>
                <p>
                    Savory, rich, and utterly refreshing — our Iced Coffee Ice Cream blends smooth espresso with creamy vanilla ice cream for the ultimate frozen indulgence. Perfectly balanced to give you a sweet caffeine kick.
                </p>
                <div class="best-seller-icons">
                    <img src="assets/favorite.png" alt="Favorite Icon" title="Customer Favorite">
                    <span>Best Seller</span>
                </div>
                <p class="best-seller-price">₱185</p>
                <button class="btn buy-btn">Order Now</button>
            </div>
        </div>
    </section>

    <!-- Meet Our Staff Section -->
    <section class="staff-section">
        <div class="staff-header">
            <div class="staff-title">
                <h2>Meet Our Staff</h2>
                <p>Get to know the passionate people behind your favorite coffee creations.</p>
            </div>
            <div class="staff-button">
                <a href="staff.php">
                    <button class="btn btn-secondary">
                        View More
                        <img src="assets/right-arrow.png" alt="Right Arrow Icon">
                    </button>
                </a>

            </div>
        </div>

        <div class="staff-grid">
            <div class="staff-card">
                <img src="assets/Liam.jpg" alt="Liam">
                <h4>Leo</h4>
            </div>
            <div class="staff-card">
                <img src="assets/Emma.jpg" alt="Emma">
                <h4>Emma</h4>
            </div>
            <div class="staff-card">
                <img src="assets/Sophie.jpg" alt="Sophie">
                <h4>Sophie</h4>
            </div>
            <div class="staff-card">
                <img src="assets/Olivia.jpg" alt="Olivia">
                <h4>Olivia</h4>
            </div>
            <div class="staff-card">
                <img src="assets/Ava.jpg" alt="Ava">
                <h4>Ava</h4>
            </div>
            <div class="staff-card">
                <img src="assets/Noah.jpg" alt="Noah">
                <h4>Noah</h4>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact-us" class="contact-section">
        <!-- Animated Icons -->
        <img src="assets/coffee-beans.png" alt="Coffee Beans" class="floating-icon icon-beans" />
        <img src="assets/coffee-tag.png" alt="Coffee Cup" class="floating-icon icon-cup" />

        <div class="contact-content">
            <h2>Contact Us</h2>
            <p>We'd love to hear from you! Send us a message for any questions, feedback, or inquiries.</p>
            <form class="contact-form">
                <input type="email" placeholder="Your Email" required />
                <textarea placeholder="Your Message" required></textarea>
                <button type="submit" class="btn  btn-secondary">Send Message</button>
            </form>
        </div>
    </section>




    <!-- Newsletter Section -->
    <section class="newsletter-section">
        <div class="newsletter-container">
            <div class="newsletter-content">
                <h2>Join Our Newsletter</h2>
                <p>Stay updated with the latest promos, seasonal drinks, and exclusive coffee creations.</p>
                <form class="newsletter-form">
                    <input type="email" placeholder="Enter your email" required />
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                </form>
            </div>

            <div class="newsletter-image">
                <img src="assets/newsletter.png" alt="Newsletter">
            </div>
        </div>
    </section>

    <footer class="footer-section">
        <div class="footer-container">

            <!-- Logo and Title -->
            <div class="footer-brand">
                <a href="index.php">
                    <img src="assets/logo.png" alt="Logo">
                    <h2>Brew Haven</h2>
                </a>

            </div>

            <!-- Navigation Links -->
            <div class="footer-nav">
                <h4>Navigate</h4>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="menu.php">Menu</a></li>
                    <li><a href="staff.php">Staff</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>

            <!-- Open Hours -->
            <div class="footer-hours">
                <h4>Opening Hours</h4>
                <p>Mon - Fri: 8:00 AM – 8:00 PM</p>
                <p>Sat - Sun: 9:00 AM – 10:00 PM</p>
                <p> 123 Brew Avenue, Coffeeville, CA 90210</p>
            </div>

            <!-- Socials -->
            <div class="footer-socials">
                <h4>Follow Us</h4>
                <div class="social-icons">
                    <a href="#"><img src="assets/facebook.png" alt="Facebook"></a>
                    <a href="#"><img src="assets/youtube.png" alt="YouTube"></a>
                    <a href="#"><img src="assets/x.png" alt="X"></a>
                </div>
            </div>

        </div>

        <!-- Copyright -->
        <div class="footer-bottom">
            <p>&copy; 2025 Caffeine Canvas. All rights reserved.</p>
        </div>
    </footer>



    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            slidesPerView: 1,
            spaceBetween: 20,
            breakpoints: {
                640: {
                    slidesPerView: 2
                },
                768: {
                    slidesPerView: 3
                },
                1024: {
                    slidesPerView: 4
                }
            },
            loop: true,
            grabCursor: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            }
        });

        const parallaxImage = document.querySelector('.parallax-img');
    </script>


</body>

</html>