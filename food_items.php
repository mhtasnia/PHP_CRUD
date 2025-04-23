<?php include 'components/header.php'; ?>
<?php include 'database.php'; ?>

<main>
    <h2>Food Items List</h2>
    <button id="addFoodItemBtn" class="form-control">Add Food Item</button>

    <table id="foodItemsTable">
        <thead>
            <tr>
                <th>Food Item ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Category</th>
                <th>Price</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        
        
        <tbody id="foodItemsBody">
        <?php
            // PHP code to fetch food items data from the database and display it in the table
            $result = $conn->query("SELECT * FROM food_items");
            while ($row = $result->fetch_assoc()) {

                echo "
                <tr>
                    <td>{$row['Food_id']}</td>
                    <td>{$row['Food_Name']}</td>
                    <td>{$row['Food_Description']}</td>
                    <td>{$row['Food_category']}</td>
                    <td>{$row['price']}</td>
                    <td>
                        <a href=\"update_food.php?id={$row['Food_id']}\">
                        <button class=\"update-btn\">Update</button>
                    </a>
                    </td>
                    <td>
                        <a href=\"delete_food.php?id={$row['Food_id']}\">
                        <button class=\"delete-btn\">Delete</button>
                    </td>
                </tr> ";
            }
            ?>
        </tbody>
    </table>
    <div id="pagination"></div>
</main>



<script src="js/script.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function (){
    setupPagination('foodItemsTable', 10);
    });
    document.getElementById('addFoodItemBtn').addEventListener('click', function() {
        window.location.href = 'add_food.php';
    });
</script>
<?php include 'components/footer.php'; ?>
    