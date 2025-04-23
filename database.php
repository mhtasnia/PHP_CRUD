<?php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', 'root');
    define('DB_NAME', 'labproject');

    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    // else {
    //     echo "Connected successfully";
    // }   
    // Set the character set to utf8mb4
    mysqli_set_charset($conn, 'utf8mb4');
    // Check if the connection was successful
?>