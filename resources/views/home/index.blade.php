<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EVENTURE CEYLON - Tour Packages & Transfers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --gold: #D4AF37;
            --dark: #1a1a1a;
            --light: #f8f9fa;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
        }

        /* NAVBAR */
        .navbar {
            background: white;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            padding: 1rem 0;
        }

        .navbar-brand {
            font-size: 1.8rem;
            font-weight: bold;
            color: var(--gold) !important;
        }

        .nav-link {
            color: #333 !important;
            margin: 0 10px;
            transition: color 0.3s;
        }

        .nav-link:hover {
            color: var(--gold) !important;
        }

        .btn-login {
            background: var(--gold);
            color: white;
            border: none;
            padding: 0.5rem 1.5rem;
            margin-left: 10px;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .btn-login:hover {
            background: #c9a227;
            color: white;
            text-decoration: none;
        }

        /* HERO SECTION */
        .hero {
            background: linear-gradient(rgba(26, 26, 26, 0.7), rgba(26, 26, 26, 0.7)),
                        url('https://images.unsplash.com/photo-1469854523086-cc02fe5d8800?w=1200') center/cover;
            color: white;
            padding: 150px 0;
            text-align: center;
        }

        .hero h1 {
            font-size: 3.5rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 1.3rem;
            margin-bottom: 30px;
        }

        .btn-primary-gold {
            background: var(--gold);
            color: white;
            padding: 12px 40px;
            font-size: 1.1rem;
            border: none;
            border-radius: 5px;
            transition: background 0.3s;
            cursor: pointer;
        }

        .btn-primary-gold:hover {
            background: #c9a227;
            color: white;
        }

        /* PACKAGES SECTION */
        .packages-section {
            padding: 80px 0;
            background: var(--light);
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 50px;
            color: var(--dark);
        }

        .section-title::after {
            content: '';
            display: block;
            width: 60px;
            height: 3px;
            background: var(--gold);
            margin: 20px auto 0;
        }

        .package-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            height: 100%;
        }

        .package-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
        }

        .package-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .package-body {
            padding: 20px;
        }

        .package-title {
            font-size: 1.3rem;
            font-weight: bold;
            color: var(--dark);
            margin-bottom: 10px;
        }

        .package-description {
            color: #666;
            font-size: 0.95rem;
            margin-bottom: 15px;
        }

        .package-price {
            font-size: 1.5rem;
            color: var(--gold);
            font-weight: bold;
            margin-bottom: 15px;
        }

        .btn-book {
            background: var(--gold);
            color: white;
            border: none;
            padding: 10px 30px;
            border-radius: 5px;
            width: 100%;
            transition: background 0.3s;
            cursor: pointer;
        }

        .btn-book:hover {
            background: #c9a227;
        }

        /* TESTIMONIALS SECTION */
        .testimonials-section {
            padding: 80px 0;
            background: white;
        }

        .testimonial-card {
            text-align: center;
            padding: 30px;
            background: var(--light);
            border-radius: 10px;
            margin-bottom: 30px;
        }

        .stars {
            color: var(--gold);
            font-size: 1.2rem;
            margin-bottom: 15px;
        }

        .testimonial-text {
            font-style: italic;
            color: #666;
            margin-bottom: 15px;
        }

        .testimonial-author {
            font-weight: bold;
            color: var(--dark);
        }

        /* FOOTER */
        .footer {
            background: var(--dark);
            color: white;
            padding: 40px 0 20px;
            margin-top: 80px;
        }

        .footer a {
            color: var(--gold);
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        .footer-title {
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2rem;
            }

            .section-title {
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="/">EVENTURE CEYLON</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#packages">Tour Packages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonials">Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn-login" href="/login">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <section class="hero">
        <div class="container">
            <h1>Discover Sri Lanka's Best Tours</h1>
            <p>Experience the beauty, culture, and adventure of Sri Lanka</p>
            <button class="btn-primary-gold" onclick="document.getElementById('packages').scrollIntoView({behavior: 'smooth'})">
                Browse Packages
            </button>
        </div>
    </section>

    <!-- FEATURED PACKAGES -->
    <section id="packages" class="packages-section">
        <div class="container">
            <h2 class="section-title">Featured Tour Packages</h2>

            <div class="row g-4">
                <!-- Package 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="package-card">
                        <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=400" alt="Mountain Adventure" class="package-image">
                        <div class="package-body">
                            <h5 class="package-title">Mountain Adventure</h5>
                            <p class="package-description">Explore the stunning Central Highlands with scenic treks and tea plantations.</p>
                            <p class="package-price">LKR 12,500</p>
                            <button class="btn-book" onclick="window.location.href='/login'">Book Now</button>
                        </div>
                    </div>
                </div>

                <!-- Package 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="package-card">
                        <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?w=400" alt="Beach Getaway" class="package-image">
                        <div class="package-body">
                            <h5 class="package-title">Beach Getaway</h5>
                            <p class="package-description">Relax on pristine beaches and enjoy water sports in paradise.</p>
                            <p class="package-price">LKR 8,999</p>
                            <button class="btn-book" onclick="window.location.href='/login'">Book Now</button>
                        </div>
                    </div>
                </div>

                <!-- Package 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="package-card">
                        <img src="https://images.unsplash.com/photo-1504681869696-d977e5a3c811?w=400" alt="Cultural Tour" class="package-image">
                        <div class="package-body">
                            <h5 class="package-title">Cultural Heritage Tour</h5>
                            <p class="package-description">Visit ancient temples and UNESCO World Heritage Sites.</p>
                            <p class="package-price">LKR 6,500</p>
                            <button class="btn-book" onclick="window.location.href='/login'">Book Now</button>
                        </div>
                    </div>
                </div>

                <!-- Package 4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="package-card">
                        <img src="https://images.unsplash.com/photo-1469854523086-cc02fe5d8800?w=400" alt="Wildlife Safari" class="package-image">
                        <div class="package-body">
                            <h5 class="package-title">Wildlife Safari</h5>
                            <p class="package-description">Experience wildlife at Yala National Park and leopard spotting.</p>
                            <p class="package-price">LKR 15,000</p>
                            <button class="btn-book" onclick="window.location.href='/login'">Book Now</button>
                        </div>
                    </div>
                </div>

                <!-- Package 5 -->
                <div class="col-md-6 col-lg-4">
                    <div class="package-card">
                        <img src="https://images.unsplash.com/photo-1511884642898-4c92249e20b6?w=400" alt="Adventure Combo" class="package-image">
                        <div class="package-body">
                            <h5 class="package-title">10-Day Grand Tour</h5>
                            <p class="package-description">The ultimate Sri Lanka experience combining all highlights.</p>
                            <p class="package-price">LKR 45,000</p>
                            <button class="btn-book" onclick="window.location.href='/login'">Book Now</button>
                        </div>
                    </div>
                </div>

                <!-- Package 6 -->
                <div class="col-md-6 col-lg-4">
                    <div class="package-card">
                        <img src="https://images.unsplash.com/photo-1488646953014-85cb44e25828?w=400" alt="Airport Transfer" class="package-image">
                        <div class="package-body">
                            <h5 class="package-title">Airport Transfer</h5>
                            <p class="package-description">Comfortable and reliable airport pickup/drop service.</p>
                            <p class="package-price">LKR 3,500</p>
                            <button class="btn-book" onclick="window.location.href='/login'">Book Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TESTIMONIALS -->
    <section id="testimonials" class="testimonials-section">
        <div class="container">
            <h2 class="section-title">What Our Customers Say</h2>

            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="testimonial-card">
                        <div class="stars">★★★★★</div>
                        <p class="testimonial-text">"Amazing experience! The tour was well-organized and the driver was very friendly. Highly recommended!"</p>
                        <p class="testimonial-author">- Sarah Johnson, UK</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="testimonial-card">
                        <div class="stars">★★★★★</div>
                        <p class="testimonial-text">"Best vacation ever! The package covered everything we wanted to see. Will definitely book again!"</p>
                        <p class="testimonial-author">- Raj Patel, India</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="testimonial-card">
                        <div class="stars">★★★★★</div>
                        <p class="testimonial-text">"Professional service, beautiful destinations, and great value for money. Thank you!"</p>
                        <p class="testimonial-author">- Maria Garcia, Spain</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT SECTION -->
    <section id="contact" class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title">Get In Touch</h2>

            <div class="row">
                <div class="col-md-4 text-center mb-4">
                    <h5>📞 Phone</h5>
                    <p>+94 77 123 4567</p>
                </div>
                <div class="col-md-4 text-center mb-4">
                    <h5>✉️ Email</h5>
                    <p>info@eventureceylon.com</p>
                </div>
                <div class="col-md-4 text-center mb-4">
                    <h5>📍 Location</h5>
                    <p>Colombo, Sri Lanka</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <p class="footer-title">EVENTURE CEYLON</p>
                    <p>Your gateway to Sri Lanka's best experiences.</p>
                </div>
                <div class="col-md-3">
                    <p class="footer-title">Quick Links</p>
                    <ul style="list-style: none; padding: 0;">
                        <li><a href="#packages">Tour Packages</a></li>
                        <li><a href="#testimonials">Reviews</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <p class="footer-title">Company</p>
                    <ul style="list-style: none; padding: 0;">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <p class="footer-title">Follow Us</p>
                    <ul style="list-style: none; padding: 0;">
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">Twitter</a></li>
                    </ul>
                </div>
            </div>

            <hr style="border-color: #444;">
            <div class="text-center">
                <p>&copy; 2026 EVENTURE CEYLON. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
