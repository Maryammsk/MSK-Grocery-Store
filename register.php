<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'msk_grocery');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];

    // Insert data into the database
    $sql = "INSERT INTO users (name, email, password, phone) 
            VALUES ('$name', '$email', '$password', '$phone')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
