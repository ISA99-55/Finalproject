<?php
include 'db.php'; // DB connection

if (isset($_POST['addUser'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = $_POST['role'];

    $sql = "INSERT INTO users (name, email, password, role) VALUES (?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $name, $email, $password, $role);

    if ($stmt->execute()) {
        echo "✅ User added successfully";
    } else {
        echo "❌ Error: " . $conn->error;
    }
}
?>
