<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELUTHIA Landscaping Company</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>ELUTHIA Landscaping</h1>
            <nav>
                <ul>
                <li><a href="index.php">Home</a></li>
                    <li><a href="Aboutus.php">Aboutus</a></li>
                    <li><a href="contactus.php">contactus</a></li>
                    <li><a href="projects.php">projects</a></li>
                    <li><a href="Ourteam.php">Ourteam</a></li>
                    <li><a href="Designservices.php">Designservices</a></li>
                    <li><a href="Portfolio.php">Portfolio</a></li>
                    <li><a href="Nursery.php">Nursery</a></li>
                    <li><a href="signin.php">SignIn</a></li>
                    <li><a href="signup.php">SignUp</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="about" class="about">
        <div class="container">
            <h2>About Us</h2>
            <p>Welcome to ELUTHIA, Kenya’s premier landscaping company. We specialize in creating stunning outdoor spaces that harmonize nature and artistry.</p>
        </div>
    </section>

    <section id="services" class="services">
        <div class="container">
            <h2>Our Services</h2>
            <ul>
                <li>Landscape Design and Planning</li>
                <li>Garden Installation and Maintenance</li>
                <li>Irrigation Systems</li>
                <li>Hardscaping</li>
                <li>Sustainable Landscaping</li>
            </ul>
        </div>
    </section>

    <section id="portfolio" class="portfolio">
        <div class="container">
            <h2>Our Portfolio</h2>
            <div class="project">
                <h3>Lavington Residential Oasis</h3>
                <p>Transforming suburban backyards into lush, tranquil oases.</p>
            </div>
            <div class="project">
                <h3>Westlands Corporate Garden</h3>
                <p>Creating modern, minimalist office gardens for improved employee well-being.</p>
            </div>
            <div class="project">
                <h3>Karen Luxury Estate</h3>
                <p>Designing elegant outdoor living spaces for luxury estates.</p>
            </div>
            <div class="project">
                <h3>Runda Family Park</h3>
                <p>Developing community parks that offer safe and beautiful recreational spaces.</p>
            </div>
            <div class="project">
                <h3>Kiambu Eco-Friendly Farm</h3>
                <p>Implementing sustainable landscaping solutions for organic farms.</p>
            </div>
        </div>
    </section>

    <section id="contact" class="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <p>Get in touch with us to transform your outdoor space.</p>
            <form action="#" method="post">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <textarea name="message" placeholder="Your Message" required></textarea>
                <button type="submit">Send Message</button>
            </form>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 ELUTHIA Landscaping. All rights reserved.</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>