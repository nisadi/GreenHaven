<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" href="contact.css">
    <title>GreenHaven</title>
</head>
<body>
    <nav class="top-nav">
        <div class="logo">
            <a href="home.php"><img src="logo.jpg" alt="GreenHaven Logo"></a>
            <p>GreenHaven</p>
        </div>
        <div class="menu-items">
            <ul>
                <li><a href="home.php" class="link">Home</a></li>
                <li><a href="#" class="link">Categories</a></li>
                <li><a href="aboutus.php" class="link active">About</a></li>
                <li><a href="services.php" class="link">Services</a></li>
                <li><a href="contactus.php" class="link">Contact</a></li>
            </ul>
        </div>
        <div class="nav-buttons">
            <a href="login.php"><button class="btn white-btn" id="loginBtn" onclick="login()">Sign In</button></a>
        </div>
    </nav>
    <section class="contact">
        <div class="content">
            <h2>Contact Us</h2>
            <p>Have questions or need assistance? Our friendly customer support team is here to help! Whether you need help with your order, have inquiries about our plants, or want to share your feedback, feel free to reach out.</p>
        </div>
        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="fa-solid fa-location-dot"></i></div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>123 Green Street, <br>Plant City, <br>CA 90001</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa-solid fa-phone"></i></div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>076 596 6688</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa-solid fa-envelope"></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>greenhaven@gmail.com</p>                        
                    </div>
                </div>
            </div>
            <div class="contactForm">
                <form action="#">
                    <h2>Send Message</h2>
                    <div class="inputBox">
                        <input type="text" name="" required="required">
                        <span>Full Name</span>
                    </div>
                    <div class="inputBox">
                        <input type="email" name="" required="required">
                        <span>Email</span>
                    </div>
                    <div class="inputBox">
                        <textarea name="" required="required"></textarea>
                        <span>Type your Message...</span>
                    </div>
                    <div class="inputBox">
                        <input type="submit" name="" value="Send">
                    </div>
                </form>
            </div>
        </div>
    </section>
    <footer>
        <nav>
            <ul>
                <li><a href="#"><i class="fa-brands fa-facebook-f"></i><br>Face Book</a></li>
                <li><a href="#"><i class="fa-brands fa-instagram"></i><br>Instergram</a></li>
                <li><a href="#"><i class="fa-brands fa-whatsapp"></i><br>Whats App</a></li>
                <li><a href="#"><i class="fa-brands fa-telegram"></i><br>Telegram</a></li>
            </ul>
        </nav>
        <br><br>
        <p class="copy">&copy; 2024 GreenHaven. All rights reserved.</p>
    </footer>
</body>
</html>
