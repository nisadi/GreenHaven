<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" href="home.css">
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
    <div class="container">
        <div class="main">
            <div class="glass-box">
                <img class="logo-icon" src="logo.jpg" alt="logo">
                <div class="title">Elevate Your <span class="typing"></span> </div>
                <div class="para">
                    Transform your indoor space into a lush oasis with our curated collection of easy-care plants.
                    Discover the joy of bringing nature indoors and elevate your home's ambiance.
                </div>
                <br>
                <div class="nav-buttons">
                    <a href="login.php"><button class="btn white-btn" id="loginBtn" onclick="login()">Sign In</button></a>
                </div>
            </div>  
        </div>
    </div>
    <script src="home.js"></script>
</body>

</html>
