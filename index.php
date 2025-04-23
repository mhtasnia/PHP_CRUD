<?php include 'components/header.php'; ?>
<?php include 'database.php'; ?>

<main>
    <div class="form-container">
        <h2>Select a Table to View</h2>
        <form action="" method="GET">
            <select name="table" id="tableSelect" class="form-control">
                <option value="">--Select a Table--</option>
                <option value="customers">Customers</option>
                <option value="orders">Orders</option>
                <option value="food_items">Food Items</option>
                <option value="transactions">Transactions</option>
            </select>
            <br>
            <div class="button">
                <button type="submit" class="submit-btn">View Table</button>
            </div>
        </form>
    </div>

    <?php
    if (isset($_GET['table'])) {
        $table = $_GET['table'];
        header("Location: $table.php"); 
        exit();
    }
    ?>
</main>

<?php include 'components/footer.php'; ?>
