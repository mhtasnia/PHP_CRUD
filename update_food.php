<?php include 'components/header.php';  ?>
<?php include 'database.php'; ?>
<?php 
 
$id = $_GET['id'];
$food = $conn->query("SELECT * FROM food_items WHERE Food_id=$id")->fetch_assoc();

 if($_SERVER['REQUEST_METHOD']== 'POST'){
    $foodName = $_POST['foodName'];
    $foodDesc = $_POST['foodDesc'];
    $category = $_POST['category'];
    $price = $_POST['price'];

    // Food_id, Food_Name, Food_Description, Food_category, price
    $conn->query("UPDATE food_items SET Food_Name='$foodName', Food_Description='$foodDesc', Food_category='$category', price=$price WHERE Food_id=$id");
    header("Location: food_items.php");
 }

?>




<!-- Food_id, Food_Name, Food_Description, Food_category, price -->
<main>
<div class="form-container">
        <h2>Add New Food Item</h2>
        <form method="POST" id="addFoodItemForm">
            <label for="foodName">Food Name</label><br>
            <input type="text" name="foodName" value="<?= $food['Food_Name']?>"><br><br>
            <label for="foodDesc">Description</label><br>
            <input type="textarea" name="foodDesc" value="<?= $food['Food_Description']?>" ><br><br>
            <label for="category">Category</label><br>
            <input type="category" name="category" value="<?= $food['Food_category']?>"><br><br>
            <label for="price">Price</label><br>
            <input type="number" id="price" name="price" step="0.01" value="<?= $food['price']?>"><br><br>
            <button type="submit">Save</button>
        </form>
    </div>

</main>

<?php include 'components/footer.php'; ?>