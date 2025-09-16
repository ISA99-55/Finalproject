<?php
if (isset($_POST['addProduct'])) {
    $name = $_POST['name'];
    $desc = $_POST['description'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];

    $sql = "INSERT INTO products (name, description, price, stock) VALUES (?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssdi", $name, $desc, $price, $stock);

    if ($stmt->execute()) {
        echo "✅ Product added successfully";
    } else {
        echo "❌ Error: " . $conn->error;
    }
}
?>
