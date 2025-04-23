<?php include 'components/header.php'; ?>
<?php include 'database.php'; ?>

<?php 

    $id = $_GET['id'];
    $conn->query("DELETE FROM orders WHERE Order_id=$id");
    header("Location: orders.php");
    exit;

?>