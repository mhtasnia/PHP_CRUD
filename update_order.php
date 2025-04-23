<?php include 'components/header.php'; ?>
<?php include 'database.php'; ?>

        
<?php 

$id = $_GET['id'];
$order = $conn->query("SELECT * FROM orders WHERE Order_id=$id")->fetch_assoc();

        if($_SERVER['REQUEST_METHOD']=='POST'){
            $customer_id = $_POST['customer_id'];
            $date = $_POST['date'];
            $amount = $_POST['amount'];
            $status = $_POST['status'];

            $conn->query("UPDATE orders SET Customer_id='$customer_id', Order_date='$date', Amount='$amount', Status='$status' WHERE Order_id=$id");
            header("Location: orders.php");
            exit;
        }
    
    ?>

<main>
    

    <div class="form-container">
        <!-- Order_id, Customer_id, Order_date, Amount, Status -->
        <h2>Add New User</h2>
        <form method="POST" id="addOrderForm">
            <label for="customer_id">Customer ID</label><br>
            <input type="text" name="customer_id" value="<?= $order['Customer_id']?>"><br><br>
            <label for="date">Order Date</label><br>
            <input type="date" name="date" value="<?= $order['Order_date']?>" ><br><br>
            <label for="amount">Amount</label><br>
            <input type="number" name="amount" step="0.1" value="<?= $order['Amount']?>"><br><br>
            <label for="status">Status</label><br>
            <select name="status" id="status" value="<?= $order['Status']?>">
                <option value="Processing">Processing</option>
                <option value="Completed">Completes</option>
                <option value="Canceled">Canceled</option>
            </select>
            <button type="submit">Save</button>
        </form>
    </div>
    
</main>
<?php include 'components/footer.php'; ?>
