<?php
session_start();
include 'C:\Users\Nisadi Wijerathna\Documents\GitHub\GreenHaven\include\connection.php'; // Update the path to your connection file

// Check if the connection is established
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the delete button was clicked for user deletion
if (isset($_POST['deleteuserbtn'])) {
    $customer_id = $_POST['delete_id'];

    // Ensure the $customer_id is not empty
    if (!empty($customer_id)) {
        // Prepare and execute the DELETE query for user
        $sql = "DELETE FROM user1 WHERE Customer_ID = '$customer_id'";

        if (mysqli_query($conn, $sql)) {
            $_SESSION['statusDash'] = "User deleted successfully";
            $_SESSION['status_codeDash'] = "success";
        } else {
            $_SESSION['statusDash'] = "Error deleting user: " . mysqli_error($conn);
            $_SESSION['status_codeDash'] = "error";
        }
    } else {
        $_SESSION['statusDash'] = "No user ID provided for deletion";
        $_SESSION['status_codeDash'] = "error";
    }

    // Redirect to customer.php
    header('Location: customer.php');
    exit();
}

// Check if the update button was clicked for customer information update
if (isset($_POST['update_customer_btn'])) {
    $customer_id = $_POST['edit_customer_id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $Address = $_POST['Address'];
    $Contact = $_POST['Contact'];
    $email = $_POST['email'];
    $Password = $_POST['Password'];

    // Update query for customer information
    $updateQuery = "UPDATE `user1` 
                    SET fname = '$fname', lname = '$lname', Address = '$Address', Contact = '$Contact', email = '$email', Password = '$Password'
                    WHERE Customer_ID = '$customer_id'";

    if (mysqli_query($conn, $updateQuery)) {
        $_SESSION['status'] = "Profile updated successfully";
        $_SESSION['status_code'] = "success";
    } else {
        $_SESSION['status'] = "Error updating profile: " . mysqli_error($conn);
        $_SESSION['status_code'] = "error";
    }

    // Redirect back to profile.php
    header('Location: customer.php');
    exit();
}

// Check if the update button was clicked for customer information update
if (isset($_POST['update_customer_btn'])) {
    $customer_id = $_POST['edit_customer_id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $Address = $_POST['Address'];
    $Contact = $_POST['Contact'];
    $email = $_POST['email'];
    $Password = $_POST['Password'];

    // Update query for customer information
    $updateQuery = "UPDATE `user1` 
                    SET fname = '$fname', lname = '$lname', Address = '$Address', Contact = '$Contact', email = '$email', Password = '$Password'
                    WHERE Customer_ID = '$customer_id'";

    if (mysqli_query($conn, $updateQuery)) {
        $_SESSION['status'] = "Profile updated successfully";
        $_SESSION['status_code'] = "success";
    } else {
        $_SESSION['status'] = "Error updating profile: " . mysqli_error($conn);
        $_SESSION['status_code'] = "error";
    }

    // Redirect back to profile.php
    header('Location: profile.php');
    exit();
}

// Check if the delete button was clicked for customer and associated orders
if (isset($_POST['deleteuserbtn'])) {
    $customer_id = $_POST['delete_id'];

    // Ensure the $customer_id is not empty
    if (!empty($customer_id)) {
        // Start a transaction
        mysqli_begin_transaction($conn);

        try {
            // Step 1: Delete orders associated with the customer
            $deleteOrdersQuery = "DELETE FROM `order1` WHERE Customer_ID = '$customer_id'";
            if (!mysqli_query($conn, $deleteOrdersQuery)) {
                throw new Exception("Error deleting orders: " . mysqli_error($conn));
            }

            // Step 2: Delete the customer from the `user1` table
            $deleteCustomerQuery = "DELETE FROM `user1` WHERE Customer_ID = '$customer_id'";
            if (!mysqli_query($conn, $deleteCustomerQuery)) {
                throw new Exception("Error deleting customer: " . mysqli_error($conn));
            }

            // Commit the transaction if both deletions succeed
            mysqli_commit($conn);
            $_SESSION['statusDash'] = "Customer and associated orders deleted successfully";
            $_SESSION['status_codeDash'] = "success";

        } catch (Exception $e) {
            // Rollback the transaction in case of an error
            mysqli_rollback($conn);
            $_SESSION['statusDash'] = $e->getMessage();
            $_SESSION['status_codeDash'] = "error";
        }

    } else {
        $_SESSION['statusDash'] = "No customer ID provided for deletion";
        $_SESSION['status_codeDash'] = "error";
    }

    // Redirect back to customer.php
    header('Location: customer.php');
    exit();
}

// Check if the update button was clicked for order update
if (isset($_POST['update_order_btn'])) {
    $order_id = $_POST['edit_order_id'];
    $customer_id = $_POST['customer_id'];
    $date = $_POST['date'];
    $payment_status = $_POST['payment_status'];
    $status = $_POST['status'];
    $total = $_POST['total'];

    // Update query for order modification
    $updateQuery = "UPDATE `order1` 
                    SET Customer_ID = '$customer_id', Date = '$date', `Payment Status` = '$payment_status', Status = '$status', Total = '$total'
                    WHERE Order_ID = '$order_id'";

    if (mysqli_query($conn, $updateQuery)) {
        $_SESSION['statusDash'] = "Order updated successfully";
        $_SESSION['status_codeDash'] = "success";
    } else {
        $_SESSION['statusDash'] = "Error updating order: " . mysqli_error($conn);
        $_SESSION['status_codeDash'] = "error";
    }

    // Redirect back to orders.php
    header('Location: orders.php');
    exit();
}

// Close the database connection
mysqli_close($conn);
?>
