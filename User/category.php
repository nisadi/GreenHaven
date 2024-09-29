<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" type="text/css" href="main.css">
        <link rel="stylesheet" href="outdoor.css"> 
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
                <li><a href="category.php" class="link">Categories</a></li>
                <li><a href="aboutus.php" class="link active">About</a></li>
                <li><a href="services.php" class="link">Services</a></li>
                <li><a href="contactus.php" class="link">Contact</a></li>
                <li><a href="#" class="link"><i class="fa-solid fa-cart-shopping"></i></li></a>
                <li><a href="profile.php" class="link"><i class="fa-solid fa-user"></i></li></a>
            </ul>
        </div>
        <div class="nav-buttons">
            <a href="login.php"><button class="btn white-btn" id="loginBtn" onclick="login()">Sign In</button></a>
        </div>
    </nav>
    <br>
    <h1 class="header">Hello there! Dive in and pick whatever fits your needs!</h1>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="image1.avif" alt="Outdoor Image" class="img-fluid">
            </div>
            <div class="col-md-8">
                <h3>In-Door Plants</h3>
                <p>Transform your living spaces with our curated collection of indoor plants. Perfect for adding a touch of greenery to any room, these low-maintenance plants purify the air and bring a sense of calm to your home or office.</p>
                <p>Choose from lush foliage, succulents, or flowering varieties that thrive in indoor environments.</p>
                <a href="indoor.php">See more</a>
            </div>
        </div>
        <br><br>

        <div class="row">
            <div class="col-md-8">
                <h3>Out-Door Plants</h3>
                <p>Explore our diverse range of outdoor plants designed to thrive in your garden or balcony.</p>
                <p>Vibrant flowers and hardy shrubs to ornamental trees and climbers, our outdoor selection will help you create a lush, thriving landscape year-round.</p>
                <a href="outdoor.php">See more</a>
            </div>
            <div class="col-md-4">
                <img src="image10.jpeg" alt="Outdoor Image" class="img-fluid">
            </div>
        </div>
        <br><br>

        <div class="row">
            <div class="col-md-4">
                <img src="image11.jpeg" alt="Outdoor Image" class="img-fluid">
            </div>
            <div class="col-md-8">
                <h3>Edible Plants</h3>
                <p>Grow your own herbs, fruits, and vegetables with our selection of edible plants.</p> 
                <p>From aromatic herbs like basil and mint to juicy strawberries and tomatoes, you can cultivate a fresh and healthy garden at home, no matter your space.</p>
                <a href="edible.php">See more</a>
            </div>
        </div>
        <br><br>

        <div class="row">
            <div class="col-md-8">
                <h3>Gift Ideas</h3>
                <p>Looking for the perfect gift for plant lovers?</p>
                <p>Our thoughtful gift ideas include beautifully packaged plants, stylish planters, and curated plant care sets that are ideal for any occasion—birthdays, holidays, or housewarming events.</p>
                <a href="gift.php">See more</a>
            </div>
            <div class="col-md-4">
                <img src="image12.jpeg" alt="Outdoor Image" class="img-fluid">
            </div>
        </div>
        <br><br>

        <div class="row">
            <div class="col-md-4">
                <img src="image13.jpeg" alt="Outdoor Image" class="img-fluid">
            </div>
            <div class="col-md-8">
                <h3>Special collections</h3>
                <p>Discover our special collections featuring rare and exotic plants, limited-edition varieties, and seasonal favorites.</p>
                <p>These handpicked plants are perfect for enthusiasts looking to add something unique and extraordinary to their collection.</p>
                <a href="special.php">See more</a>
            </div>
        </div>
        <br><br>

        <div class="row">
            <div class="col-md-8">
                <h3>Accessories</h3>
                <p>Complete your plant journey with our stylish and functional accessories.</p> 
                <p>From chic pots and planters to plant stands, watering cans, and tools, we have everything you need to care for and showcase your plants beautifully.</p>
                <a href="accessories.php">See more</a>
            </div>
            <div class="col-md-4">
                <img src="image14.jpeg" alt="Outdoor Image" class="img-fluid">
            </div>
        </div>
        <br><br>

    </div>

        <footer>
            <nav>
                <ul>
                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i><br>Facebook</a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i><br>Instagram</a></li>
                    <li><a href="#"><i class="fa-brands fa-whatsapp"></i><br>WhatsApp</a></li>
                    <li><a href="#"><i class="fa-brands fa-telegram"></i><br>Telegram</a></li>
                </ul>
            </nav>
            <br><br>
            <p class="copy">&copy; 2024 GreenHaven. All rights reserved.</p>
        </footer>
    </body>
    </html>