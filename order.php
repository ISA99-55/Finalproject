<?php
if (isset($_POST['updateStatus'])) {
    $orderId = $_POST['order_id'];
    $status = $_POST['status'];

    $sql = "UPDATE orders SET status=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $status, $orderId);

    if ($stmt->execute()) {
        echo "✅ Order status updated";
    } else {
        echo "❌ Error: " . $conn->error;
    }
}
?>
