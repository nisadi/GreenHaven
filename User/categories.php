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
    <div class="sidebar">
        <h2>GreenHaven Admin</h2>
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
            <h1>Categories</h1>
            <form class="user-info" action="submitform.php" method="post">
                <span>Welcome, Admin</span>
                <a href="login.php" name="logoutbtn"  class="logout">Logout</a>
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
                <h1>Category Details</h1>
            </section>

            <section class="table_body">
            <?php
// SQL query to join the category and product tables
$sql = "SELECT c.Category_ID, c.Category_name, p.Product_ID, p.Product_name 
        FROM category1 c 
        LEFT JOIN product1 p ON c.Category_ID = p.Category_ID";

$result = mysqli_query($conn, $sql);
?>
<table>
    <thead>
        <tr>
            <th>Category ID</th>
            <th>Category name</th>
            <th>Product ID</th>
            <th>Product name</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?php echo $row['Category_ID']; ?></td>
                    <td><?php echo $row['Category_name']; ?></td>
                    <td><?php echo isset($row['Product_ID']) ? $row['Product_ID'] : 'N/A'; ?></td>
                    <td><?php echo isset($row['Product_name']) ? $row['Product_name'] : 'N/A'; ?></td>
                </tr>
                <?php
            }
        } else {
            echo "<tr><td colspan='4'>No Record Found</td></tr>";
        }
        ?>
    </tbody>
</table>

            </section>
        </main>
    </div>

    <?php
    // Close the database connection
    mysqli_close($conn);
    ?>
</body>
</html>
