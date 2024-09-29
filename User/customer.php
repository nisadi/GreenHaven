<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GreenHaven</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="order.css">
</head>
<body>
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
            <h1>Customers</h1>
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
            ?>
        </div>
        </section>
        <br><br><br>

        <main class="table">
            <section class="table_heading">
                <h1>Customer's Details</h1>
            </section>

            <section class="table_body">
<?php
$sql = "SELECT * FROM user1";
$result = mysqli_query($conn, $sql);
?>
    <table>
    <thead>
        <tr>
            <th>Customer ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Address</th>
            <th>Contact</th>
            <th>Email</th>
            <th>Password</th>
            <th>Edit</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        
    <?php
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?php echo $row['Customer_ID']; ?></td>
                <td><?php echo $row['fname']; ?></td>
                <td><?php echo $row['lname']; ?></td>
                <td><?php echo $row['Address']; ?></td>
                <td><?php echo $row['Contact']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['Password']; ?></td>
                <td>
                    <!-- Edit Button -->
                    <form action="customer.php" method="GET">
                        <input type="hidden" name="edit_id" value="<?php echo $row['Customer_ID']; ?>">
                        <button type="submit" name="editbtn" class="btn btn-warning">EDIT</button>
                    </form>
                </td>
                <td>
                    <!-- Delete Form -->
                    <form action="code.php" method="post">
                        <input type="hidden" name="delete_id" value="<?php echo $row['Customer_ID']; ?>">
                        <button type="submit" name="deleteuserbtn" class="btn btn-danger">DELETE</button>
                    </form>
                </td>
            </tr>
            <?php
         }
        } else {
            echo "<tr><td colspan='7'>No Record Found</td></tr>";
        }
        ?>
    </tbody>
</table>
</section>

        <!-- Edit Customer Form -->
<?php
if (isset($_GET['edit_id'])) {
    $customer_id = $_GET['edit_id']; // Use $customer_id here
    $editQuery = "SELECT * FROM `user1` WHERE Customer_ID = '$customer_id'"; // Fix variable name
    $editResult = mysqli_query($conn, $editQuery);

    if (mysqli_num_rows($editResult) > 0) {
        $editRow = mysqli_fetch_assoc($editResult);
?>  
<section class="customer-edit-form">
    <h2>Edit Customer</h2>
    <form action="code.php" method="post">
        <input type="hidden" name="edit_customer_id" value="<?php echo $editRow['Customer_ID']; ?>">

        <label for="fname">First Name:</label>
        <input type="text" name="fname" value="<?php echo $editRow['fname']; ?>" required>
        <br><br>
        <label for="lname">Last Name:</label>
        <input type="text" name="lname" value="<?php echo $editRow['lname']; ?>" required> <!-- Changed from date to text -->
        <br><br>
        <label for="Address">Address:</label>
        <input type="text" name="Address" value="<?php echo $editRow['Address']; ?>" required>
        <br><br>
        <label for="Contact">Contact:</label>
        <input type="text" name="Contact" value="<?php echo $editRow['Contact']; ?>" required>
        <br><br>
        <label for="email">Email:</label>
        <input type="text" name="email" value="<?php echo $editRow['email']; ?>" required>
        <br><br>
        <label for="Password">Password:</label>
        <input type="text" name="Password" value="<?php echo $editRow['Password']; ?>" required>
        <br><br>
        <button type="submit" name="update_customer_btn" class="btn btn-success">Update Customer</button>
    </form>
</section>
<?php
    }
}
?>

    </main>
    </div>
<?php
// Close the database connection after all queries are completed
mysqli_close($conn);
?>
</body>
</html>
