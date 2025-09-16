<?php
if (isset($_POST['addDiscount'])) {
    $code = $_POST['code'];
    $percentage = $_POST['percentage'];
    $valid = $_POST['valid_until'];

    $sql = "INSERT INTO discounts (code, percentage, valid_until) VALUES (?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sis", $code, $percentage, $valid);

    if ($stmt->execute()) {
        echo "✅ Discount added";
    } else {
        echo "❌ Error: " . $conn->error;
    }
}
?>
