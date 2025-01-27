<?php
// Include database connection file
include('db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];

    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert data into the database
    $sql = "INSERT INTO users (name, email, password, phone) VALUES ('$name', '$email', '$hashed_password', '$phone')";

    // Check if query is successful
    if ($conn->query($sql) === TRUE) {
        // Redirect to homepage after successful registration
        header('Location: home_page.php');  // Update with your actual homepage
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
