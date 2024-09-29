<?php
include '../include/connection.php';

/*Sign Up*/ 
if(isset($_POST['register'])){
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $address = $_POST["address"];
    $contact = $_POST["contact"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "INSERT INTO user1 (fname, lname, Address, Contact, email, Password)
    VALUES ('$fname', '$lname', '$address', '$contact', '$email', '$password')";

    if (mysqli_query($conn, $sql)) {
        $Customer_ID = mysqli_insert_id($conn);

        // echo "<script>alert($Customer_ID);</script>";

        header("Location: login.php");
    }
}


// Login admin profile
if (isset($_POST['loginbtn'])) {
    $email_login = $_POST['email'];
    $password_login = $_POST['password'];

    $query = "SELECT * FROM admin1 WHERE email='$email_login' AND password='$password_login' ";
    $query_run = mysqli_query($conn, $query);

    if ($row = mysqli_fetch_array($query_run)) {
        if ($row > 0) {
            $_SESSION['username'] = $row['username'];
            header('Location: dashboard.php');
            exit();
        }
    else {
        $_SESSION['status'] = "Incorrect password.";
        $_SESSION['status_code'] = "error";
        header('Location: login.php');
        exit();
    }
    }
else {
    $_SESSION['status'] = "User not found.";
    $_SESSION['status_code'] = "error";
    header('Location: login.php');
}
}


// Login user profile
if (isset($_POST['loginbtn'])) {
    $email_login = $_POST['email'];
    $password_login = $_POST['password'];

    $query = "SELECT * FROM user1 WHERE email='$email_login' AND password='$password_login' ";
    $query_run = mysqli_query($conn, $query);

    if ($row = mysqli_fetch_array($query_run)) {
        if ($row > 0) {
            $_SESSION['username'] = $row['username'];
            header('Location: category.php');
        }
        else {
            $_SESSION['status'] = "Incorrect password.";
            $_SESSION['status_code'] = "error";
            header('Location: login.php');
        }
    }
else {
    $_SESSION['status'] = "User not found.";
    $_SESSION['status_code'] = "error";
    header('Location: login.php');
}
}

// Logout admin profile
if (isset($_POST['logoutBtn'])) {

    unset($_SESSION['username']);
    session_destroy();
    header('Location: login.php');
}

?>