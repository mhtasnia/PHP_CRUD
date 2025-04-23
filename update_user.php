<?php include 'components/header.php'; ?>
<?php include 'database.php'; ?>


<?php 
// Customer_id, name, Customer_email, Customer_contact, Customer_address, Customer_area
$id = $_GET['id'];
$customer = $conn->query("SELECT * from customers where Customer_id = $id") -> fetch_assoc();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $address = $_POST['address'];
        $area = $_POST['area'];

        // Assuming you have a user ID to update, you would typically get this from the URL or form
        $userId = $_GET['id']; // Make sure to validate and sanitize this input

        $conn->query("UPDATE customers SET name='$name', Customer_email='$email', Customer_contact='$contact', Customer_address='$address', Customer_area='$area' WHERE Customer_id='$userId'");
        
        header("Location: customers.php");
        exit;
    }
        
?>

<main>
    

    <div class="form-container">
        <h2>Update User Information</h2>
        <form method="POST" id="updateUserForm">
            <label for="name">Name</label><br>
            <input type="text" name="name" value="<?= $customer['name']?>"><br><br>
            <label for="email">Email</label><br>
            <input type="email" name="email" value="<?= $customer['Customer_email']?>"><br><br>
            <label for="contact">Contact</label><br>
            <input type="text" name="contact" value="<?= $customer['Customer_contact']?>"><br><br>
            <label for="address">Address</label><br>
            <input type="text" name="address" value="<?= $customer['Customer_address']?>"><br><br>
            <label for="area">Area</label><br>
            <input type="text" name="area" value="<?= $customer['Customer_area']?>"><br><br>
            <button type="submit">Save</button>
        </form>
    </div>
    
</main>
<?php include 'components/footer.php'; ?>
