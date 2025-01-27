<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM Users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            echo "Login successful!";
            // Redirect to a protected page
        } else {
            echo "Invalid password!";
        }
    } else {
        echo "No user found with that email.";
    }
}
?>

<form method="POST" action="login.php">
    Email: <input type="email" name="email"><br>
    Password: <input type="password" name="password"><br>
    <button type="submit">Login</button>
</form>
