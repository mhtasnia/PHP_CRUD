<?php include 'components/header.php'; ?>
<?php include 'database.php'; ?>

<main>
    <h2>Customer List</h2>
    <button id="addCustomerBtn" class="form-control">Add Customer</button>

    <table id="customerTable">
        <thead>
            <tr>
                <th>Customer ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Address</th>
                <th>Area</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody id="customerBody">


        <!-- PHP code to fetch customer data from the database and display it in the table -->
 <?php
    // Assuming $conn is your database connection
    $result = $conn->query("SELECT * FROM customers");
    if (!$result) {
        die("Query failed: " . $conn->error);
    }
    while ($row = $result->fetch_assoc()) {
        echo "
            <tr>
                <td>{$row['Customer_id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['Customer_email']}</td>
                <td>{$row['Customer_contact']}</td>
                <td>{$row['Customer_address']}</td>
                <td>{$row['Customer_area']}</td>
                <td>
                    <a href=\"update_user.php?id={$row['Customer_id']}\">
                        <button class=\"update-btn\">Update</button>
                    </a>
                </td>
                <td>
                    <a href=\"delete_user.php?id={$row['Customer_id']}\">
                    <button class=\"delete-btn\">Delete</button>
                    </a>
                </td>
            </tr>
        ";
    }
?>

        </tbody>
    </table>
    <div id="pagination"></div>
</main>

<!-- Modal for Adding Customer -->

<script>
    document.addEventListener('DOMContentLoaded', function () {
    setupPagination('customerTable', 10);
    });
    document.getElementById('addCustomerBtn').addEventListener('click', function () {
    window.location.href = 'add_customer.php';
});
    </script>

<script src="js/script.js"></script>
<?php include 'components/footer.php'; ?> 