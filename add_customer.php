<?php include 'components/header.php'; ?>
<?php include 'database.php'; ?>


<?php 
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $contact = $_POST['contact'];
            $address = $_POST['address'];
            $area = $_POST['area'];

            $conn->query("INSERT INTO customers(name, Customer_email, Customer_contact, Customer_address, Customer_area) VALUES('$name', '$email', '$contact', '$address', '$area')");
            header("Location: customers.php");
            exit;
        }
    
    ?>

<main>
    

    <div class="form-container">
        <h2>Add New User</h2>
        <form method="POST" id="addUserForm">
            <label for="name">Name</label><br>
            <input type="text" name="name" required><br><br>
            <label for="email">Email</label><br>
            <input type="email" name="email" required><br><br>
            <label for="contact">Contact</label><br>
            <input type="text" name="contact" required><br><br>
            <label for="address">Address</label><br>
            <input type="text" name="address" required><br><br>
            <label for="area">Area</label><br>
            <input type="text" name="area" required><br><br>
            <button type="submit">Save</button>
        </form>
    </div>
    
</main>
<?php include 'components/footer.php'; ?>
