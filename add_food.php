<?php include 'components/header.php';  ?>
<?php include 'database.php'; ?>
<?php 
 
 if($_SERVER['REQUEST_METHOD']== 'POST'){
    $foodName = $_POST['foodName'];
    $foodDesc = $_POST['foodDesc'];
    $category = $_POST['category'];
    $price = $_POST['price'];

    $conn->query("INSERT INTO food_items (Food_Name, Food_Description, Food_category, price) VALUES('$foodName', '$foodDesc', '$category', '$price')");
    header("Location: food_items.php");
 }

?>
<!-- Food_id, Food_Name, Food_Description, Food_category, price -->
<main>
<div class="form-container">
        <h2>Add New Food Item</h2>
        <form method="POST" id="addFoodItemForm">
            <label for="foodName">Food Name</label><br>
            <input type="text" name="foodName" required><br><br>
            <label for="foodDesc">Description</label><br>
            <input type="text" name="foodDesc" required><br><br>
            <label for="category">Category</label><br>
            <input type="text" name="category" required><br><br>
            <label for="price">Price</label><br>
            <input type="number" id="price" name="price" step="0.01"><br><br>
            <button type="submit">Save</button>
        </form>
    </div>

</main>

<?php include 'components/footer.php'; ?>