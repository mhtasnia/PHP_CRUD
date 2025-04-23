<?php include 'components/header.php'; ?>
<?php include 'database.php'; ?>

<main>
    <h2>Orders List</h2>
    <button id="addOrderBtn" class="form-control">Add Order</button>

    <table id="orderTable">
        <thead>
        <!-- Order_id, Customer_id, Order_date, Amount, Status -->
            <tr>
                <th>Order ID</th>
                <th>Customer ID</th>
                <th>Order Date</th>
                <th>Amount</th>
                <th>Status</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody id="orderBody">


        <!-- PHP code to fetch customer data from the database and display it in the table -->
 <?php
    // Assuming $conn is your database connection
    $result = $conn->query("SELECT * FROM orders");
    if (!$result) {
        die("Query failed: " . $conn->error);
    }
    while ($row = $result->fetch_assoc()) {
        echo "
            <tr>
                <td>{$row['Order_id']}</td>
                <td>{$row['Customer_id']}</td>
                <td>{$row['Order_date']}</td>
                <td>{$row['Amount']}</td>
                <td>{$row['Status']}</td>
                <td>
                    <a href=\"update_order.php?id={$row['Order_id']}\">
                        <button class=\"update-btn\">Update</button>
                    </a>
                </td>
                <td>
                    <a href=\"delete_order.php?id={$row['Order_id']}\">
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
    setupPagination('orderTable', 10);
    });
    document.getElementById('addOrderBtn').addEventListener('click', function () {
    window.location.href = 'add_order.php';
});
    </script>

<script src="js/script.js"></script>
<?php include 'components/footer.php'; ?> 