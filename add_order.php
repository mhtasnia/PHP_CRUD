<?php include 'components/header.php'; ?>
<?php include 'database.php'; ?>

        
<?php 
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $customer_id = $_POST['customer_id'];
            $date = $_POST['date'];
            $amount = $_POST['amount'];
            $status = $_POST['status'];

            $conn->query("INSERT INTO orders(Customer_id, Order_date, Amount, Status) VALUES('$customer_id', '$date', '$amount', '$status')");
            header("Location: orders.php");
            exit;
        }
    
    ?>

<main>
    

    <div class="form-container">
        <!-- Order_id, Customer_id, Order_date, Amount, Status -->
        <h2>Add New Order</h2>
        <form method="POST" id="addOrderForm">
            <label for="customer_id">Customer ID</label><br>
            <input type="text" name="customer_id" required><br><br>
            <label for="date">Order Date (YYYY-MM-DD)</label><br>
            <input type="date" name="date" required><br><br>
            <label for="amount">Amount</label><br>
            <input type="number" name="amount" step="0.1" required><br><br>
            <label for="status">Status</label><br>
            <select name="status" id="status">
                <option value="Processing">Processing</option>
                <option value="Completed">Completes</option>
                <option value="Canceled">Canceled</option>
            </select>
            <button type="submit">Save</button>
        </form>
    </div>
    
</main>
<?php include 'components/footer.php'; ?>
