<?php
include('db.php');

$sql = "SELECT * FROM Products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Product ID: " . $row["product_id"]. " - Name: " . $row["name"]. " - Price: " . $row["price"]. "<br>";
    }
} else {
    echo "No products found!";
}
?>
