<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Profile</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="order.css">
</head>
<body>
<?php
// Start session and connect to the database
session_start();
include '../include/connection.php';
?>

<?php
if (isset($_get['edit_id'])) {
    $email = $_POST["edit_id"];
    // This get for find the update row
    $_SESSION['email'] = $id;

    $sql = "SELECT * FROM student WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    foreach ($result as $row) {
        ?>
    <div class="main-content">
        <header>
            <h1>Welcome, <?php echo htmlspecialchars($user['fname']); ?> (Profile)</h1>
            <!-- Logout Button -->
            <form class="user-info" action="submitform.php" method="post">
                <a href="login.php" name="logoutbtn" class="logout">Logout</a>
            </form>
        </header>

        <!-- User Profile Information -->
        <section class="profile-info">
            <h2>Edit Your Profile</h2>
            <form action="code.php" method="POST" class="form-container">
                <input type="hidden" name="edit_customer_id" value="<?php echo $user['Customer_ID']; ?>">
                
                <label for="fname">First Name:</label>
                <input type="text" name="fname" value="<?php echo $user['fname']; ?>" required><br><br>
                
                <label for="lname">Last Name:</label>
                <input type="text" name="lname" value="<?php echo $user['lname']; ?>" required><br><br>
                
                <label for="Address">Address:</label>
                <input type="text" name="Address" value="<?php echo $user['Address']; ?>" required><br><br>
                
                <label for="Contact">Contact:</label>
                <input type="text" name="Contact" value="<?php echo $user['Contact']; ?>" required><br><br>
                
                <label for="email">Email:</label>
                <input type="email" name="email" value="<?php echo $user['email']; ?>" required><br><br>
                
                <label for="Password">Password:</label>
                <input type="password" name="Password" value="<?php echo $user['Password']; ?>" required><br><br>
                
                <button type="submit" name="update_user_btn" class="btn btn-success">Update Profile</button>
            </form>
        </section>
        <?php
    }
    }
    ?>
    </div>
    <?php mysqli_close($conn); // Close the connection ?>
</body>
</html>