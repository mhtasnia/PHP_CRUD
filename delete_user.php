<?php include 'components/header.php'; ?>
<?php include 'database.php'; ?>

<?php 

    $id = $_GET['id'];
    $conn->query("DELETE FROM customers WHERE Customer_id=$id");
    header("Location: customers.php");
    exit;
    
?>