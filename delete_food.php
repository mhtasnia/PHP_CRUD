<?php include 'components/header.php'; ?>
<?php include 'database.php'; ?>

<?php 

    $id = $_GET['id'];
    $conn->query("DELETE FROM food_items WHERE Food_id=$id");
    header("Location: food_items.php");
    exit;

?>