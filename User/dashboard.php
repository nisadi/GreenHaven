<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GreenHaven</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="admin.css">
</head>
<body>
<?php
include '../include/connection.php';
session_start(); // Start session to access session variables

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
    <div class="sidebar">
        <h2>GreenHaven </h2><h2>Admin</h2>
        <ul>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="orders.php">Orders</a></li>
            <li><a href="customer.php">Customers</a></li>
            <li><a href="categories.php">Categories</a></li>
            <li><a href="#">Analytics</a></li>
            <li><a href="#">Settings</a></li>
        </ul>
    </div>

    <div class="main-content">
        <header>
            <h1>Admin Dashboard</h1>
            <form class="user-info" action="submitform.php" method="post">
                <span>Welcome, Admin</span>
                <a href="login.php" name="logoutbtn" class="logout">Logout</a>
            </form>
        </header>

        <section class="dashboard-cards">
            <div class="card">
                <h3>Total Sales</h3>
                <div>
                <?php
                // Database connection
                $conn = mysqli_connect("localhost", "root", "", "greenhaven");

                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                // Query to calculate total sales
                $sql = "SELECT Total FROM `order1` ORDER BY Total"; // `order` is wrapped in backticks
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    $total = 0;
                    while ($row = mysqli_fetch_assoc($result)) {
                        $total += $row['Total'];
                    }
                    echo '<h1>Rs. ' . $total . '</h1>';
                } else {
                    echo '<h1>No data available</h1>';
                }
                ?>
                </div>
            </div>

            <div class="card">
                <h3>Total Orders</h3>
                <?php
                // Query to count total orders
                $sql = "SELECT Order_ID FROM `order1`"; // `order` wrapped in backticks
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    $queryResults = mysqli_num_rows($result);
                    echo '<h1>' . $queryResults . '</h1>';
                } else {
                    echo '<h1>Error fetching data</h1>';
                }
                ?>
            </div>

            <div class="card">
                <h3>Total Products</h3>
                <?php
                // Query to count total products
                $sql = "SELECT Item_ID FROM item1";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    $queryResults = mysqli_num_rows($result);
                    echo '<h1>' . $queryResults . '</h1>';
                } else {
                    echo '<h1>Error fetching data</h1>';
                }
                ?>
            </div>

            <div class="card">
                <h3>New Customers</h3>
                <?php
                // Query to count total customers
                $sql = "SELECT Customer_ID FROM user1";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    $queryResults = mysqli_num_rows($result);
                    echo '<h1>' . $queryResults . '</h1>';
                } else {
                    echo '<h1>Error fetching data</h1>';
                }

                // Close the database connection
                mysqli_close($conn);
                ?>
            </div>
        </section>
    </div>
</body>
</html>
