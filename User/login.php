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
            <button class="btn white-btn" id="loginBtn" onclick="login()">Sign In</button>
            <button class="btn white-btn" id="registerBtn" onclick="register()">Sign Up</button>
        </div>
    </nav>

    <div class="form-box">
        <div class="login-container" id="login-container">
            <div class="top">
                <span>Don't have an account? <a href="#" onclick="register()">Sign Up</a></span>
                <header>Login</header>
            </div>
            <div class="input-box">       
                <input type="text" class="input-field" placeholder="Username or Email">
            </div>
            <div class="input-box">
                <input type="password" class="input-field" placeholder="Password">
            </div>
            <div class="input-box">
                <input type="submit" class="submit" value="Sign In">
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
        </div>

        <div class="register-container" id="register-container">
            <div class="top">
                <span>Have an account? <a href="#" onclick="login()">Login</a></span>
                <header>Sign Up</header>
            </div>
            <div class="two-forms">
                <div class="input-box">
                    <input type="text" class="input-field" placeholder="First name">
                </div>
                <div class="input-box">
                    <input type="text" class="input-field" placeholder="Last name">
                </div>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" placeholder="Address">
            </div>
            <div class="input-box">
                <input type="text" class="input-field" placeholder="Contact">
            </div>
            <div class="input-box">
                <input type="text" class="input-field" placeholder="Email">
            </div>
            <div class="input-box">
                <input type="password" class="input-field" placeholder="Password">
            </div>
            <div class="input-box">
                <input type="submit" class="submit" value="Register">
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
        </div>
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
</body>
</html>
