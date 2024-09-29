<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="main.css">
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
    <div class="heading">
        <h1>About Us</h1>
        <p>At Green Haven, we are passionate about bringing the beauty of nature into every home and garden. As your ultimate online destination for a diverse range of indoor and outdoor plants, we cater to both seasoned gardeners and those just starting their green journey.</p>
    </div>
    <div class="container">
        <div class="about-content">
            <h2>Let's embrace a Green world</h2>
            <p>Our curated selection features high-quality plants, from lush houseplants that can brighten up any room to vibrant flowering varieties that add color and life to your garden. Whether you're looking for air-purifying plants for your office, succulent collections for your living room, or beautiful blooms for your backyard, Green Haven has something for everyone.</p>
            <a href="aboutus1.php" class="read-more">Read More</a>
        </div>
        <div class="about-image">
            <img src="image2.jpg" alt="Plant">
        </div>
    </div>
    <br>
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

    <script>
        function login(){
            document.getElementById('login-container').style.display = 'block';
            document.getElementById('register-container').style.display = 'none';
            document.getElementById('loginBtn').classList.add('white-btn');
            document.getElementById('registerBtn').classList.remove('white-btn');
        }

        function register(){
            document.getElementById('login-container').style.display = 'none';
            document.getElementById('register-container').style.display = 'block';
            document.getElementById('loginBtn').classList.remove('white-btn');
            document.getElementById('registerBtn').classList.add('white-btn');
        }

        window.onload = function() {
            login(); 
        }
    </script>

</body>
</html>
