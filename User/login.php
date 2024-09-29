<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" type="text/css" href="login.css">
    <title>GreenHaven</title>
</head>
<body>
<?php
include '../include/connection.php';
session_start(); // Start session to access session variables

// Check if the session variable 'status' exists
if (isset($_SESSION['status']) && $_SESSION['status'] == "Email / Password is Invalid") {
    echo "<script>alert('Your username or password is incorrect');</script>";
    
    // Unset the status after showing the alert to avoid repeated alerts
    unset($_SESSION['status']);
}
?>
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
            </ul>
        </div>
        <div class="nav-buttons">
            <button class="btn white-btn" id="loginBtn" onclick="login()">Sign In</button>
            <button class="btn white-btn" id="registerBtn" onclick="register()">Sign Up</button>
        </div>
    </nav>

    <div class="form-box">
        <form class="login-container" id="login-container" action="submitform.php" method="post">
            <div class="top">
                <span>Don't have an account? <a href="#" onclick="register()">Sign Up</a></span>
                <header>Login</header>
            </div>
            <div class="input-box">       
                <input type="text" name="email" class="input-field" placeholder="Username or Email">
            </div>
            <div class="input-box">
                <input type="password" name="password" class="input-field" placeholder="Password">
            </div>
            <div class="input-box">
                <input type="submit" name="loginbtn" class="submit" value="Sign In">
            </div>
            <div class="two-col">
                <div class="one">
                    <input type="checkbox" id="login-check">
                    <label for="login-check">Remember Me</label>
                </div>
                <div class="two">
                    <label><a href="#">Forgot password?</a></label>
                </div>
            </div>
        </form>

        <form class="register-container" id="register-container" action="submitform.php" method="post">
            <div class="top">
                <span>Have an account? <a href="login.php" onclick="login()">Login</a></span>
                <header>Sign Up</header>
            </div>
            <div class="two-forms">
                <div class="input-box">
                    <input type="text" name="fname" class="input-field" placeholder="First name" required>
                </div>
                <div class="input-box">
                    <input type="text" name="lname" class="input-field" placeholder="Last name" required>
                </div>
            </div>
            <div class="input-box">
                <input type="text" name="address" class="input-field" placeholder="Address" required>
            </div>
            <div class="input-box">
                <input type="text" name="contact" class="input-field" placeholder="Contact" required>
            </div>
            <div class="input-box">
                <input type="text" name="email" class="input-field" placeholder="Email" required>
            </div>
            <div class="input-box">
                <input type="password" name="password" class="input-field" placeholder="Password" required>
            </div>
            <div class="input-box">
                <input type="submit" name="register" class="submit" value="Register">
            </div>
            <div class="two-col">
                <div class="one">
                    <input type="checkbox" id="register-check">
                    <label for="register-check">Remember Me</label>
                </div>
                <div class="two">
                    <label><a href="#">Terms & conditions</a></label>
                </div>
            </div>
        </form>
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
<?php
    mysqli_close($conn);
?>
</body>
</html>
