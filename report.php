<?php
$sql = "SELECT SUM(total_price) as total_sales, COUNT(id) as total_orders 
        FROM orders WHERE status='delivered'";
$result = $conn->query($sql);
$data = $result->fetch_assoc();

echo "📊 Total Sales: $" . $data['total_sales'];
echo "<br>🛒 Total Orders: " . $data['total_orders'];
?>
